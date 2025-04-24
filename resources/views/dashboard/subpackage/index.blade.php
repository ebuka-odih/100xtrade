@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                    <div class="activity">
                        <div class="row g-3">
                            <div style="visibility: hidden" class="col-md-6">
                                <h5 class="mb-0">Sell Orders</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3 col-md-6">
                                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.subscription.index') }}" class="nav-link rounded-3 py-1 active" id="pills-price-tab"
                                           aria-selected="false">
                                            Subscription
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.subscription.history') }}" class="nav-link rounded-3 py-1" id="pills-deep-tab">
                                            History
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="recent-contact pb-2 pt-3">

                        <div class="pb-2 pt-3 price-table">

                            <div class="container">
                                <h4>Subscription Package</h4>


                                <div class="table-responsive">
                                     <table class="table" id="stockTable">
                                        <thead class="text-white">
                                        <tr>
                                            <th>Name</th>
                                            <th>Min Amount</th>
                                            <th>Term</th>
                                            <th>PnL</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>${{ number_format($item->min_amount, 2) }}</td>
                                                <td>
                                                    @if($item->term !== null)
                                                        {{ $item->term }} Day(s)
                                                    @else
                                                        &mdash;
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->pnl !== null)
                                                        {{ $item->pnl }} %
                                                    @else
                                                        &mdash;
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('user.subscription.store', $item) }}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="amount" value="{{ $item->min_amount }}">
                                                        <input type="hidden" name="plan_id" value="{{ $item->id }}">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Subscribe
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <style>
                                .text-success {
                                    color: #28a745;
                                }

                                .text-danger {
                                    color: #dc3545;
                                }
                            </style>


                        </div>


                    </div>

                </div>
            </div>
        </div>

        @include('dashboard.layout.footer')


    </div>


@endsection
