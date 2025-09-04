
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
    

    @yield("content")

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
         
        </div>
      </div>
    </footer>
    <section class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <p class="m-0">
              © Copyright 2025, All Rights Reserved by 100xTrader
            </p>
          </div>
        </div>
      </div>
    </section>
    <script src="front/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>


</html>
