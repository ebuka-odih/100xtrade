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

                                        <h4 class="m-2">Copy Traders</h4>
                                        <div class="table-responsive">
                                            <table class="table ">
                                                <thead class="text-white">
                                                <tr>
                                                    <th>User</th>
                                                    <th>Trader</th>
                                                    <th>Amount</th>
                                                    <th>PNL</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="text-white">
                                                @foreach($data as $item)
                                                    <tr>
                                                        <td>{{ $item->user->name ?? '' }}</td>
                                                        <td class="d-flex align-items-center gap-2">
                                                            <img style="border-radius: 50%"
                                                                 src="{{ asset($item->copy_trader->avatar) }}"
                                                                 alt="{{ $item->stock->name ?? '' }}" width="30"
                                                                 height="30">
                                                            {{  $item->copy_trader->name  ?? ''}}
                                                        </td>
                                                        <td>${{ number_format($item->amount, 2) ?? ''}}</td>
                                                        <td class="{{ $item->profit > 0 ? 'text-success' : ($item->pnl < 0 ? 'text-danger' : '') }}">
                                                            {{ number_format($item->profit, 2) ?? '' }}%
                                                        </td>
                                                        <td>{!! $item->status() !!}</td>
                                                        <td>{{ date('d M, Y', strtotime($item->created_at)) ?? '' }}</td>
                                                        <td>
                                                            <a href="" data-bs-toggle="modal"
                                                               data-bs-target="#modalForm-{{ $item->id }}"
                                                               class="btn btn-sm btn-primary">Fund</a>
                                                            <a href="#" class="btn btn-sm btn-danger"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteModal-{{ $item->id }}">Delete</a>
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
                                                            <h5 class="modal-title">Add Profit</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.copyTrader.update', $item->id) }}"
                                                                method="POST" class="form-validate is-alter"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="email-address">
                                                                                Amount</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="min_amount"
                                                                                       value="{{ old('min_amount', $item->min_amount ?? '') }}"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-3 text-center">
                                                                    <button type="submit" class="btn btn-sm btn-primary">Add Profit</button>
                                                                    <a href="{{ route('admin.closeCopiedTrade', $item->id) }}" class="btn btn-sm btn-danger">Close Trade</a>
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

@endsection
