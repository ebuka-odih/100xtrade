@extends('dashboard.layout.app')
@section('content')


    <div class="container-fluid main-content px-2 px-lg-4">


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
              <div class="d-flex align-items-center justify-content-between">
                <h5  class="mb-0">Copied Trades</h5>
                 <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a href="{{ route('user.copy.trade.index') }}" class="nav-link " >Copy Trader</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="{{ route('user.copy.trade.history') }}" class="nav-link active " >History</a>
                      </li>
                    </ul>
              </div>

            </div>
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4 ">

                 <div class="price-table">
                        <div class="table-responsive">
                            <table class="table ">
                               <thead class="text-white">
                               <tr>
                                    <th>Trader</th>
                                    <th>Amount</th>
                                    <th>PNL</th>
                                    <th>Status</th>
                                    <th>Date</th>
                               </tr>
                               </thead>
                               <tbody class="text-white">
                               @foreach($data as $item)
                                   <tr>
                                       <td class="d-flex align-items-center gap-2">
                                          @if($item->copy_trader && $item->copy_trader->hasAvatarImage())
                                              <img style="border-radius: 50%" src="{{ $item->copy_trader->avatar_display }}" alt="{{ $item->stock->name ?? '' }}" width="30" height="30">
                                          @elseif($item->copy_trader)
                                              <div style="border-radius: 50%; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background: #798bff; color: white; font-size: 12px; font-weight: 500;">
                                                  {{ $item->copy_trader->initials }}
                                              </div>
                                          @else
                                              <div style="border-radius: 50%; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background: #798bff; color: white; font-size: 12px; font-weight: 500;">
                                                  N/A
                                              </div>
                                          @endif
                                          {{  $item->copy_trader->name  ?? ''}}
                                        </td>
                                       <td>${{ number_format($item->amount, 2) ?? ''}}</td>
                                       <td class="{{ $item->pnl > 0 ? 'text-success' : ($item->pnl < 0 ? 'text-danger' : '') }}">
                                            {{ number_format($item->pnl, 2) ?? '' }}%
                                        </td>
                                       <td>{!! $item->status() !!}</td>
                                       <td>{{ date('d M, Y h:i A', strtotime($item->created_at)) ?? '' }}</td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
                        </div>



                    </div>

            </div>
          </div>
        </div>



      </div>





@endsection
