@extends('pages.layout.app')
@section('content')
 

    <section class="hero-banner">
      <div class="container">
        <div class="gradient-circle mx-auto"></div>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="hero-heading text-center position-relative">
              <div class="banner-cicle-image">
                <img
                  src="front/img/circle-banner.png"
                  alt=" "
                  class="position-absolute img-fluid"
                />
              </div>

              <h1>
                <span class="position-relative star-img">
                  <img class="" src="front/img/star.png" alt="" /> Master the
                </span>
                <br />
                Art of <span>100x Trading</span>
              </h1>
              <p>
                Unlock the power of high-leverage trading with our advanced platform. 
                Whether you're trading crypto, stocks, or forex, amplify your gains 
                with up to 100x leverage. Professional tools, real-time analytics, 
                and expert insights - all in one powerful platform.
              </p>
              <a
                class="btn hero-btn"
                href="https://buy.stripe.com/14k7v00ddeiI9LGcMM"
              >
                Start Trading
              </a>
            </div>
          </div>
          <div class="col-lg-10 mx-auto text-center mt-5">
            <img src="front/img/dashboardImage.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

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

    <section class="testimonial sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="retail-traders text-center">
              <div class="mb-4 d-flex justify-content-center">
                <img src="front/img/Polygon-common.png" class="img-fluid" alt="" />
              </div>
              <h2 class="section-heading">
                Customer Reviews of <span>100xTrader</span>
              </h2>
              <p class="m-0">
                See what our customers are saying about their success.
              </p>
            </div>
          </div>
          <div class="col-lg-10 mx-auto">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "100xTrader revolutionized my approach to leveraged trading. 
                    The 100x leverage feature allowed me to amplify my gains 
                    significantly. The risk management tools are exceptional - 
                    I can set precise stop-losses and take-profit levels. 
                    This platform is perfect for serious traders who want to 
                    maximize their potential returns."
                  </h3>
                </div>
                <div class="carousel-item">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "The copy trading feature on 100xTrader is incredible. I've 
                    been following top performers and copying their leveraged 
                    trades with great success. The platform's analytics help me 
                    understand their strategies, and the risk management tools 
                    ensure I never overexpose myself. It's like having expert 
                    traders as mentors."
                  </h3>
                </div>
                <div class="carousel-item">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "As a crypto trader, the 100x leverage on 100xTrader has been 
                    a game-changer. The real-time market data and advanced 
                    charting tools help me make quick, informed decisions. 
                    The platform's stability during volatile market conditions 
                    gives me confidence to trade with higher leverage safely."
                  </h3>
                </div>
                <div class="carousel-item">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "100xTrader's risk management system is outstanding. The 
                    ability to set leverage limits and automatic stop-losses 
                    protects my capital while allowing me to maximize gains. 
                    The educational resources helped me understand leveraged 
                    trading better than any other platform I've used."
                  </h3>
                </div>
                <div class="carousel-item">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "The multi-asset support on 100xTrader is fantastic. I can 
                    trade crypto, stocks, and forex all with up to 100x leverage 
                    from one platform. The unified interface makes it easy to 
                    diversify my leveraged positions across different markets."
                  </h3>
                </div>
                <div class="carousel-item">
                  <div class="cust-img">
                    <img src="front/img/testimonial.png" class="img-fluid" alt="" />
                  </div>
                  <h3>
                    "100xTrader's advanced analytics and real-time data have 
                    transformed my trading performance. The platform's ability 
                    to handle high-frequency leveraged trading with minimal 
                    slippage is impressive. It's the perfect platform for 
                    serious traders who want to maximize their leverage potential."
                  </h3>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-banner sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="img-boxxx">
              <img src="front/img/pro-feed.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-7 ms-auto">
            <div class="retail-traders">
              <div class="mb-4">
                <img src="front/img/Polygon-common.png" alt="" />
              </div>
              <h2 class="section-heading">
                Professional <span>Leveraged Trading</span> Tools
              </h2>
              <p>
                Access institutional-grade trading tools designed specifically for 
                leveraged trading. Our platform combines cutting-edge technology 
                with proven trading strategies to help you succeed in high-leverage markets.
              </p>
            </div>
            <div class="feature-box row gy-4">
              <div class="col-md-6">
                <img src="front/img/icon-ss.png" alt="" class="mb-3" />
                <h3>Advanced Charting & Analysis</h3>
                <p class="m-0">
                  Professional-grade charting tools with over 100 technical indicators, 
                  drawing tools, and real-time data feeds. Perfect for analyzing 
                  leveraged positions across multiple timeframes and markets.
                </p>
              </div>
              <div class="col-md-6">
                <img src="front/img/icon-ss02.png" alt="" class="mb-3" />
                <h3>Copy Trading Network</h3>
                <p class="m-0">
                  Follow and automatically copy successful leveraged traders with 
                  proven track records. Access their strategies, risk management 
                  techniques, and real-time trade signals to boost your performance.
                </p>
              </div>
              <div class="col-md-6">
                <img src="front/img/icon-ss03.png" alt="" class="mb-3" />
                <h3>Real-Time Market Data</h3>
                <p class="m-0">
                  Access ultra-low latency market data from multiple exchanges. 
                  Get real-time price feeds, order book depth, and market sentiment 
                  analysis to make precise leveraged trading decisions.
                </p>
              </div>
              <div class="col-md-6">
                <img src="front/img/icon-ss04.png" alt="" class="mb-3" />
                <h3>Leveraged Trading Education</h3>
                <p class="m-0">
                  Master the art of leveraged trading with our comprehensive 
                  educational resources. Learn risk management, position sizing, 
                  and advanced strategies specifically designed for high-leverage markets.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="CTA-banner sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="cta-box mx-lg-5 text-center">
              <div class="cta-content">
                <h3>START TRADING WITH 100X LEVERAGE</h3>
                <h2>
                  Professional Support – <span>24/7 Expert</span> Assistance!
                </h2>
                <p>
                  Get instant support from our team of leveraged trading experts. 
                  Whether you need help with risk management, leverage strategies, 
                  or platform features, our specialists are available 24/7 to 
                  ensure your trading success.
                </p>
                <a type="button" href="mailto:support@100xtrader.com"
                  >Contact Us</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection