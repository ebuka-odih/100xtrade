@extends('pages.layout.app')
@section('content')
<br>

    <section class="count-sec sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="retail-traders">
              <div class="mb-4">
                <img src="front/img/Polygon-common.png" alt="" />
              </div>
              <h2 class="section-heading">
                About <span>100xTrader</span>
              </h2>
              <p>
                At <strong>100xTrader</strong>, we’re redefining what it means to trade with confidence 
                and scale. Our mission is to <strong>amplify your trading potential</strong> by giving 
                every trader—whether beginner or pro—access to institutional-grade tools, 
                real-time analytics, and advanced risk management systems that were once 
                reserved for the elite.
              </p>
              <p>
                With <strong>50M+ leveraged trades executed</strong>, <strong>$25M+ in total volume</strong>, 
                and a community of <strong>50K+ active traders</strong>, we’ve built a platform that thrives 
                on trust, performance, and innovation. Our <strong>100x leverage system</strong> empowers 
                you to take bold positions in crypto, stocks, and forex while ensuring your capital 
                is protected through smart, automated safeguards.
              </p>
              <div class="video-box">
                <img src="front/img/video-thumbnail.png" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hex d-flex position-relative">
              <div class="d-flex flex-column count-parent">
                <div class="count-box">
                  <img src="front/img/ios-box-outline.png" class="img-fluid" alt="" />
                  <h3>+50M</h3>
                  <p>Leveraged Trades</p>
                </div>
                <div class="count-box">
                  <img src="front/img/ios-heart-outline.png" class="img-fluid" alt="" />
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
                  <img src="front/img/ios-people-outline.png" class="img-fluid" alt="" />
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
                Why <span>Choose Us</span>
              </h2>
              <p class="m-0">
                Trading at 100x leverage requires more than ambition—it requires the right 
                tools, insights, and support. That’s why we built <strong>100xTrader</strong> with 
                features that empower you to succeed in high-leverage markets.
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
                      Control larger positions with smaller capital. Our 
                      advanced margin system allows you to maximize your 
                      earning potential across crypto, stocks, and forex markets. 
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
                      Protect your investments with sophisticated risk management 
                      tools. Customize stop-loss orders, take-profit levels, and 
                      leverage limits to safeguard your capital while trading boldly. 
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
                      Stay ahead of the market with live data, advanced charting 
                      tools, and technical indicators. Make informed decisions in 
                      fast-moving leveraged markets. 
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
                      Learn and grow with the community. Follow and copy successful 
                      traders, share strategies, and build your reputation as a 
                      skilled leveraged trader. 
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
