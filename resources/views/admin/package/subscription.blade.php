@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">

                        <div class="row g-gs">

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="card-inner">

                                        <h4 class="m-2">Subscription</h4>
                                        <div class="table-responsive">
                                           <table class="table" id="stockTable">
                                        <thead >
                                        <tr>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>PnL</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $item->package->name ?? '' }}</td>
                                                <td>${{ number_format($item->amount, 2) }}</td>
                                                <td>{!! $item->status() !!}</td>
                                                <td>
                                                    @if($item->profit !== null)
                                                       ${{ number_format($item->profit, 2) }}
                                                    @else
                                                        &mdash;
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.approveSubscription', $item->id) }}" class="btn btn-success"><em class="ni ni-check-circle"></em></a>
                                                    <a href="{{ route('admin.declineSubscription', $item->id) }}" class="btn btn-danger"><em class="ni ni-na"></em></a>
                                                    <a href="" data-bs-toggle="modal"
                                                               data-bs-target="#modalForm-{{ $item->id }}"
                                                               class="btn btn-sm btn-primary">Fund</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                        </div>

                                        <!-- Move modals outside the table -->
                                        @foreach($data as $item)
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="modalForm-{{ $item->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Fund Subscription Profit</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.fundSubscription', $item->id) }}"
                                                                method="POST" class="form-validate is-alter"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="full-name">Amount</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="any" name="profit"
                                                                                       class="form-control" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group mt-3">
                                                                    <button type="submit"
                                                                            class="btn btn-lg btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                                Delete</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this item? This action
                                                            cannot be undone.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel
                                                            </button>
                                                            <form
                                                                action="{{ route('admin.copyTrader.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div><!-- .card -->
                            </div><!-- .col -->


                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Package Info</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.package.store') }}" method="POST" class="form-validate is-alter"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Package Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="full-name" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">min Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="min_amount" class="form-control"
                                               id="full-name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="email-address">Term Days</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="term" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="email-address">Interest</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="pnl" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection
