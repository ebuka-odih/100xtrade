
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ env('APP_NAME')}}</title>
    <link href="front/css/bootstrap-min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
      rel="stylesheet"
    />
    <link href="front/css/style.css" rel="stylesheet" />
    <style>
      .brand-text {
        font-size: 2rem;
        font-weight: 700;
        color: #ffffff;
        text-decoration: none;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
      }
      
      .navbar-brand .brand-text {
        font-size: 1.8rem;
      }
      
      .footer-logo .brand-text {
        font-size: 1.5rem;
        color: #333;
        background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
      
      .brand-text:hover {
        text-decoration: none;
        transform: scale(1.05);
        transition: transform 0.3s ease;
      }
    </style>
    <script>
      (function (w) {
        w.fpr =
          w.fpr ||
          function () {
            w.fpr.q = w.fpr.q || [];
            w.fpr.q[arguments[0] == "set" ? "unshift" : "push"](arguments);
          };
      })(window);
      fpr("init", { cid: "wj6y8k0k" });
      fpr("click");
    </script>
    <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
    <script>
      function getFPTid() {
        return window.FPROM && window.FPROM.data.tid;
      }
      function initializeFPRPaymentLinks() {
        console.log("initialized fpr on payment links");
        setTimeout(function () {
          var stripePaymentLinks = document.querySelectorAll(
            'a[href^="https://buy.stripe.com/"]'
          );
          stripePaymentLinks.forEach(function (link) {
            // Get current url
            var oldStripePaymentUrl = link.getAttribute("href");
            // Get the tid
            var tid = getFPTid();
            if (tid) {
              var url = new URL(oldStripePaymentUrl.html);
              url.searchParams.set("client_reference_id", tid);
              link.setAttribute("href", url.toString());
            }
          });
        }, 800);
      }
      if (window.attachEvent) {
        window.attachEvent("onload", initializeFPRPaymentLinks);
      } else {
        window.addEventListener("load", initializeFPRPaymentLinks, false);
      }
    </script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <span class="brand-text">{{ config('app.name') }}</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  href="{{ route('register') }}"
                  class="text-white nav-link"
                >
                  Sign up</a
                >
              </li>
              <li class="nav-item">
                <a href="{{ route('login') }}" class="try-btn nav-link">Sign in</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- hero banner -->

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

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a class="footer-logo mb-4 d-flex" href="#">
              <span class="brand-text">{{ config('app.name') }}</span>
            </a>
            <p class="pe-lg-5">
              The premier leveraged trading platform offering up to 100x leverage 
              across crypto, stocks, and forex markets. Advanced risk management, 
              real-time analytics, and professional tools for serious traders.
            </p>
          </div>
          <div class="col-lg-2">
            <h3>PRODUCT</h3>
            <ul class="list-unstyled">
              <!-- <li><a href="#">Product</a></li> -->
              <li><a href="#">About</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Affiliate</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-lg-2">
            <h3>LEGAL</h3>
            <ul class="list-unstyled">
              <!-- <li><a href="#">Legal</a></li> -->
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>NEWSLETTER</h3>
            <form class="footer-form">
              <input
                type="text"
                class="form-control mb-3"
                placeholder="Enter your email address"
              />
              <input type="submit" class="form-control" />
            </form>
          </div>
        </div>
      </div>
    </footer>
    <section class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <p class="m-0">
              © Copyright 2024, All Rights Reserved by 100xTrader
            </p>
          </div>
        </div>
      </div>
    </section>
    <script src="front/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>


</html>
