@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">

        <!-- Tables -->
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
                 <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">
                  <div class="d-flex align-items-center justify-content-between">
{{--                    <h5  class="mb-0">Copy Trading</h5>--}}
                    <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a href="{{ route('user.copy.trade.index') }}" class="nav-link active" >Copy Trader</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="{{ route('user.copy.trade.history') }}" class="nav-link " >History</a>
                      </li>
                    </ul>
                  </div>

                </div>
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem1">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-between-md g-4">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-des text-center">
                                                 <h4 class="nk-block-title fw-normal text-center">Copy Trader</h4>
                                                 <p>Copy our most performed traders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <hr>
                                <div class="nk-block ">
                                    <div class="container my-4">
                                        @csrf
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
                                        @if(session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                        <div class="row g-4">

                                            <!-- Card 2 -->
                                            @foreach($traders as $item)
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card text-center">
                                                        @if($item->hasAvatarImage())
                                                        <img
                                                                src="{{ $item->avatar_display }}"
                                                            class="card-img-top rounded-circle mx-auto mt-3"
                                                            alt="Profile Pic" style="width: 100px; height: 100px;">
                                                        @else
                                                            <div class="card-img-top rounded-circle mx-auto mt-3" style="width: 100px; height: 100px; display: flex; justify-content: center; align-items: center; background: #798bff; color: white; font-size: 32px; font-weight: 500;">
                                                                {{ $item->initials }}
                                                            </div>
                                                        @endif
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                {{ $item->name ?? ''}}
                                                                <span class="status fa fa-check-circle text-success"></span>
                                                            </h5>
                                                            <table class="table mt-3">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Win Rate</th>
                                                                    <td>{{ $item->win_rate ?? 'N/A' }}%</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Profit Share</th>
                                                                    <td><span class="text-success fw-bolder">{{ number_format($item->profit_share, 2) ?? 'N/A' }}%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Wins</th>
                                                                    <td>{{ $item->win ?? '0' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Losses</th>
                                                                    <td>{{ $item->loss ?? '0' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Min Amount</th>
                                                                    <td>
                                                                        ${{ number_format($item->min_amount, 2) ?? '' }}</td>
                                                                </tr>
{{--                                                                <tr>--}}
{{--                                                                    <th scope="row">Max Amount</th>--}}
{{--                                                                    <td>--}}
{{--                                                                        ${{ number_format($item->max_amount, 2) ?? '' }}</td>--}}
{{--                                                                </tr>--}}
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <form action="{{ route('user.copy.trade.store') }}"
                                                              method="POST">
                                                            @csrf
                                                            <label class="text-black">Enter Amount</label>
                                                           <div class="form-group">
                                                                <input type="number" name="amount"
                                                                   value="{{ $item->amount }}" class="form-contro" required>
                                                           </div>
                                                            <input type="hidden" name="trader_id"
                                                                   value="{{ $item->id }}">
                                                            <button class="btn btn-primary m-4" type="submit"><span
                                                                    class="text-center">Copy Trade <em
                                                                        class="icon ni ni-copy-fill"></em></span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            @endforeach


                                            <!-- Card 3 -->

                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                        <div class="tab-pane" id="tabItem2">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-between-md g-4">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title fw-normal">Copied Trade History</h2>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="container my-4">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Trader</th>
                                                <th>Status</th>
                                            </tr>
                                            @foreach($copiedTrades as $index => $item)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                    <td>{{ $item->copy_trader->name ?? ''}}</td>
                                                    <td>{!! $item->status() !!}</td>
                                                </tr>
                                            @endforeach
                                            <tr>

                                            </tr>
                                        </table>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        @include('dashboard.layout.footer')


    </div>

@endsection
