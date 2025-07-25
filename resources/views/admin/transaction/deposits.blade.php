@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">
                        <div class="row g-3 mb-3">
                            <div class="col-lg-12">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <h4 class="m-3">Deposits History</h4>

                                        <div class="m-3">
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
                                        </div>
                                        <div class="table-responsive">
                                             <table class="table table-striped">
                                              <thead>
                                                <tr class="border-b2">
                                                  <th class="fw-bold">Date</th>
                                                  <th class="fw-bold">User</th>
                                                  <th class="fw-bold">Amount</th>
                                                  <th class="fw-bold">Payment Method</th>
                                                  <th class="fw-bold">Transaction ID</th>
                                                  <th class="fw-bold">Screenshot</th>
                                                  <th class="fw-bold">Status</th>
                                                  <th class="fw-bold">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              @foreach($deposits as $item)
                                                   <tr class="border-b2">
                                                      <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                       <td>{{ $item->user->name ?? ''}}</td>
                                                      <td>${{ number_format($item->amount, 2) ?? '' }}</td>
                                                      <td>{{ $item->payment_method->name ?? 'Bank' }}</td>
                                                      <td>{{ $item->txid ?? 'N/A' }}</td>
                                                      <td>
                                                        @if($item->proof)
                                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#screenshot-{{ $item->id }}">
                                                                <em class="icon ni ni-image"></em> View
                                                            </button>
                                                        @else
                                                            <span class="badge bg-secondary">No Screenshot</span>
                                                        @endif
                                                      </td>
                                                      <td>{!! $item->status() !!}</td>
                                                      <td>

                                                              <a href="{{ route('admin.approveDeposit', $item->id) }}" class="btn btn-sm btn-success"><em class="icon ni ni-check-circle"></em></a>
                                                              <a href="{{ route('admin.declineDeposit', $item->id) }}" class="btn btn-sm btn-danger"><em class="icon ni ni-na"></em></a>
                                                          <a  class="btn btn-primary btn-sm" data-bs-toggle="modal" href="#buy-coin-{{ $item->id }}">
                                                             <em class="icon ni ni-eye"></em>
                                                         </a>

                                                       </td>

                                                    </tr>
                                                   <!-- .modal -->
                                              @endforeach


                                              </tbody>
                                            </table>
                                        </div>
                                        @foreach($deposits as $item)
                                        <!-- Deposit Details Modal -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin-{{ $item->id }}">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Deposit Details</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h6 class="mb-3">Deposit Information</h6>
                                                                        <table class="table table-sm">
                                                                            <tr>
                                                                                <td><strong>User:</strong></td>
                                                                                <td>{{ $item->user->name ?? 'N/A' }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Amount:</strong></td>
                                                                                <td>${{ number_format($item->amount, 2) }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Payment Method:</strong></td>
                                                                                <td>{{ $item->payment_method->name ?? 'Bank' }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Date:</strong></td>
                                                                                <td>{{ date('d M, Y H:i', strtotime($item->created_at)) }}</td>
                                                                            </tr>
                                                                            @if($item->txid)
                                                                            <tr>
                                                                                <td><strong>Transaction ID:</strong></td>
                                                                                <td><code>{{ $item->txid }}</code></td>
                                                                            </tr>
                                                                            @endif
                                                                            <tr>
                                                                                <td><strong>Status:</strong></td>
                                                                                <td>{!! $item->status() !!}</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6 class="mb-3">Payment Screenshot</h6>
                                                                        @if($item->proof)
                                                                            <div class="text-center">
                                                                                <img class="img-fluid rounded border" src="{{ asset('storage/'.$item->proof) }}" alt="Payment Screenshot" style="max-height: 300px;">
                                                                                <div class="mt-2">
                                                                                    <a href="{{ asset('storage/'.$item->proof) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                                                        <em class="icon ni ni-external"></em> Open Full Size
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <div class="text-center text-muted py-4">
                                                                                <em class="icon ni ni-image" style="font-size: 3rem;"></em>
                                                                                <p class="mt-2">No screenshot provided</p>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        <!-- Screenshot Only Modal -->
                                        @if($item->proof)
                                        <div class="modal fade" tabindex="-1" role="dialog" id="screenshot-{{ $item->id }}">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Payment Screenshot - {{ $item->user->name ?? 'User' }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img class="img-fluid rounded" src="{{ asset('storage/'.$item->proof) }}" alt="Payment Screenshot">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="{{ asset('storage/'.$item->proof) }}" target="_blank" class="btn btn-primary">
                                                                    <em class="icon ni ni-external"></em> Open in New Tab
                                                                </a>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

   <!-- Modal Trigger Code -->

<!-- Modal Content Code -->


@endsection
