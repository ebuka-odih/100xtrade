@extends('pages.layout.app')
@section('content')
 


    <section class="count-sec sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="retail-traders">
              <div class="mb-4">
                <img src="front/img/Polygon-common.png" alt="" />
              </div>
              <h2 class="section-heading">
                Amplify Your <span>Trading Potential</span>
              </h2>
              <p>
                Experience the future of leveraged trading. 100xTrader provides 
                institutional-grade tools with up to 100x leverage across crypto, 
                stocks, and forex markets. Our advanced risk management and 
                real-time analytics help you maximize profits while minimizing risks.
              </p>
              <div class="video-box">
                <img src="front/img/video-thumbnail.png" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hex d-flex position-relative">
              <!-- {/* <img src={Hexagon} alt="" /> */} -->
              <div class="d-flex flex-column count-parent">
                <div class="count-box">
                  <img src="front/img/ios-box-outline.png" class="img-fluid" alt="" />
                  <h3>+50M</h3>
                  <p>Leveraged Trades</p>
                </div>
                <div class="count-box">
                  <img
                    src="front/img/ios-heart-outline.png"
                    class="img-fluid"
                    alt=""
                  />
                  <h3>+$25M</h3>
                  <p>Total Volume</p>
                </div>
              </div>
              <div class="d-flex flex-column count-parent">
                <div class="count-box">
                  <img src="front/img/activity-icon.png" class="img-fluid" alt="" />
                  <h3>+100x</h3>
                  <p>Max Leverage</p>
                </div>
                <div class="count-box">
                  <img
                    src="front/img/ios-people-outline.png"
                    class="img-fluid"
                    alt=""
                  />
                  <h3>+50K</h3>
                  <p>Active Traders</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features-sec sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="retail-traders">
              <div class="mb-4">
                <img src="front/img/Polygon-common.png" alt="" />
              </div>
              <h2 class="section-heading">
                Advanced <span>Leveraged Trading</span> Features
              </h2>
              <p class="m-0">
                Harness the power of 100x leverage with our comprehensive suite of 
                professional trading tools. From real-time market analysis to 
                automated risk management, everything you need for successful 
                leveraged trading.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      High-Leverage Trading (Up to 100x)
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Amplify your trading power with up to 100x leverage across 
                      crypto, stocks, and forex markets. Our advanced margin system 
                      allows you to control larger positions with smaller capital.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Advanced Risk Management
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Protect your capital with our sophisticated risk management 
                      tools. Set stop-loss orders, take-profit levels, and leverage 
                      limits to manage your exposure and maximize your trading success.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Real-Time Market Analytics
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Access live market data, advanced charting tools, and 
                      technical indicators. Our real-time analytics help you make 
                      informed decisions in fast-moving leveraged markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Copy Trading & Social Features
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      Follow and copy successful traders with proven track records. 
                      Share your strategies, learn from the community, and build 
                      your reputation as a skilled leveraged trader.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 d-flex justify-content-lg-end justify-content-center ms-auto"
          >
            <div class="d-flex justify-content-lg-end align-items-center">
              <div class="trade-echo-img">
                <img src="front/img/trade-echo.png" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection