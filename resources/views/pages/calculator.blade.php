<!doctype html>
<html lang="en-US">

<!-- Mirrored from metatrading.ai/profit-calculator/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 09:02:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }</script>
    <script>(() => {
            class RocketLazyLoadScripts {
                constructor() {
                    this.v = "1.2.6", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this.t.bind(this), this.touchStartHandler = this.i.bind(this), this.touchMoveHandler = this.o.bind(this), this.touchEndHandler = this.h.bind(this), this.clickHandler = this.u.bind(this), this.interceptedClicks = [], this.interceptedClickListeners = [], this.l(this), window.addEventListener("pageshow", (t => {
                        this.persisted = t.persisted, this.everythingLoaded && this.m()
                    })), this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document.addEventListener("securitypolicyviolation", (t => {
                        this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0))
                    })), document.addEventListener("DOMContentLoaded", (() => {
                        this.k()
                    })), this.delayedScripts = {
                        normal: [],
                        async: [],
                        defer: []
                    }, this.trash = [], this.allJQueries = []
                }

                p(t) {
                    document.hidden ? t.t() : (this.triggerEvents.forEach((e => window.addEventListener(e, t.userEventHandler, {passive: !0}))), window.addEventListener("touchstart", t.touchStartHandler, {passive: !0}), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler))
                }

                _() {
                    this.triggerEvents.forEach((t => window.removeEventListener(t, this.userEventHandler, {passive: !0}))), document.removeEventListener("visibilitychange", this.userEventHandler)
                }

                i(t) {
                    "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this.L(t.target, !0), this.S(t.target, "onclick", "rocket-onclick"), this.C())
                }

                o(t) {
                    window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t.target, "rocket-onclick", "onclick"), this.M()
                }

                h() {
                    window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler)
                }

                u(t) {
                    t.target.removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this.M()
                }

                O() {
                    window.removeEventListener("touchstart", this.touchStartHandler, {passive: !0}), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach((t => {
                        t.target.dispatchEvent(new MouseEvent("click", {view: t.view, bubbles: !0, cancelable: !0}))
                    }))
                }

                l(t) {
                    EventTarget.prototype.addEventListenerWPRocketBase = EventTarget.prototype.addEventListener, EventTarget.prototype.addEventListener = function (e, i, o) {
                        "click" !== e || t.windowLoaded || i === t.clickHandler || t.interceptedClickListeners.push({
                            target: this,
                            func: i,
                            options: o
                        }), (this || window).addEventListenerWPRocketBase(e, i, o)
                    }
                }

                L(t, e) {
                    this.interceptedClickListeners.forEach((i => {
                        i.target === t && (e ? t.removeEventListener("click", i.func, i.options) : t.addEventListener("click", i.func, i.options))
                    })), t.parentNode !== document.documentElement && this.L(t.parentNode, e)
                }

                D() {
                    return new Promise((t => {
                        this.P ? this.M = t : t()
                    }))
                }

                C() {
                    this.P = !0
                }

                M() {
                    this.P = !1
                }

                S(t, e, i) {
                    t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(i, event.target.getAttribute(e)), event.target.removeAttribute(e))
                }

                t() {
                    this._(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this.R.bind(this)) : this.R()
                }

                k() {
                    let t = [];
                    document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e => {
                        let i = e.getAttribute("data-rocket-src");
                        if (i && !i.startsWith("data:")) {
                            0 === i.indexOf("//") && (i = location.protocol + i);
                            try {
                                const o = new URL(i.html).origin;
                                o !== location.origin && t.push({
                                    src: o,
                                    crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
                                })
                            } catch (t) {
                            }
                        }
                    })), t = [...new Map(t.map((t => [JSON.stringify(t), t]))).values()], this.T(t, "preconnect")
                }

                async R() {
                    this.lastBreath = Date.now(), this.j(this), this.F(this), this.I(), this.W(), this.q(), await this.A(this.delayedScripts.normal), await this.A(this.delayedScripts.defer), await this.A(this.delayedScripts.async);
                    try {
                        await this.U(), await this.H(this), await this.J()
                    } catch (t) {
                        console.error(t)
                    }
                    window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this.everythingLoaded = !0, this.D().then((() => {
                        this.O()
                    })), this.N()
                }

                W() {
                    document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t => {
                        t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t)
                    }))
                }

                async B(t) {
                    if (await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)) return new Promise((e => {
                        let i;

                        function o() {
                            (i || t).setAttribute("data-rocket-status", "executed"), e()
                        }

                        try {
                            if (navigator.userAgent.indexOf("Firefox/index.html") > 0 || "" === navigator.vendor || this.CSPIssue) i = document.createElement("script"), [...t.attributes].forEach((t => {
                                let e = t.nodeName;
                                "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue))
                            })), t.text && (i.text = t.text), i.hasAttribute("src") ? (i.addEventListener("load", o), i.addEventListener("error", (function () {
                                i.setAttribute("data-rocket-status", "failed-network"), e()
                            })), setTimeout((() => {
                                i.isConnected || e()
                            }), 1)) : (i.text = t.text, o()), t.parentNode.replaceChild(i, t); else {
                                const i = t.getAttribute("data-rocket-type"), s = t.getAttribute("data-rocket-src");
                                i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", o), t.addEventListener("error", (i => {
                                    this.CSPIssue && i.target.src.startsWith("data:") ? (console.log("WPRocket: data-uri blocked by CSP -> fallback"), t.removeAttribute("src"), this.B(t).then(e)) : (t.setAttribute("data-rocket-status", "failed-network"), e())
                                })), s ? (t.removeAttribute("data-rocket-src"), t.src = s) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text)))
                            }
                        } catch (i) {
                            t.setAttribute("data-rocket-status", "failed-transform"), e()
                        }
                    }));
                    t.setAttribute("data-rocket-status", "skipped")
                }

                async A(t) {
                    const e = t.shift();
                    return e && e.isConnected ? (await this.B(e), this.A(t)) : Promise.resolve()
                }

                q() {
                    this.T([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
                }

                T(t, e) {
                    var i = document.createDocumentFragment();
                    t.forEach((t => {
                        const o = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
                        if (o && !o.startsWith("data:")) {
                            const s = document.createElement("link");
                            s.href = o, s.rel = e, "preconnect" !== e && (s.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (s.crossOrigin = !0), t.crossOrigin && (s.crossOrigin = t.crossOrigin), t.integrity && (s.integrity = t.integrity), i.appendChild(s), this.trash.push(s)
                        }
                    })), document.head.appendChild(i)
                }

                j(t) {
                    let e = {};

                    function i(i, o) {
                        return e[o].eventsToRewrite.indexOf(i) >= 0 && !t.everythingLoaded ? "rocket-" + i : i
                    }

                    function o(t, o) {
                        !function (t) {
                            e[t] || (e[t] = {
                                originalFunctions: {
                                    add: t.addEventListener,
                                    remove: t.removeEventListener
                                }, eventsToRewrite: []
                            }, t.addEventListener = function () {
                                arguments[0] = i(arguments[0], t), e[t].originalFunctions.add.apply(t, arguments)
                            }, t.removeEventListener = function () {
                                arguments[0] = i(arguments[0], t), e[t].originalFunctions.remove.apply(t, arguments)
                            })
                        }(t), e[t].eventsToRewrite.push(o)
                    }

                    function s(e, i) {
                        let o = e[i];
                        e[i] = null, Object.defineProperty(e, i, {
                            get: () => o || function () {
                            }, set(s) {
                                t.everythingLoaded ? o = s : e["rocket" + i] = o = s
                            }
                        })
                    }

                    o(document, "DOMContentLoaded"), o(window, "DOMContentLoaded"), o(window, "load"), o(window, "pageshow"), o(document, "readystatechange"), s(document, "onreadystatechange"), s(window, "onload"), s(window, "onpageshow");
                    try {
                        Object.defineProperty(document, "readyState", {
                            get: () => t.rocketReadyState, set(e) {
                                t.rocketReadyState = e
                            }, configurable: !0
                        }), document.readyState = "loading"
                    } catch (t) {
                        console.log("WPRocket DJE readyState conflict, bypassing")
                    }
                }

                F(t) {
                    let e;

                    function i(e) {
                        return t.everythingLoaded ? e : e.split(" ").map((t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t)).join(" ")
                    }

                    function o(o) {
                        function s(t) {
                            const e = o.fn[t];
                            o.fn[t] = o.fn.init.prototype[t] = function () {
                                return this[0] === window && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = i(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t => {
                                    const e = arguments[0][t];
                                    delete arguments[0][t], arguments[0][i(t)] = e
                                }))), e.apply(this, arguments), this
                            }
                        }

                        o && o.fn && !t.allJQueries.includes(o) && (o.fn.ready = o.fn.init.prototype.ready = function (e) {
                            return t.domReadyFired ? e.bind(document)(o) : document.addEventListener("rocket-DOMContentLoaded", (() => e.bind(document)(o))), o([])
                        }, s("on"), s("one"), t.allJQueries.push(o)), e = o
                    }

                    o(window.jQuery), Object.defineProperty(window, "jQuery", {
                        get: () => e, set(t) {
                            o(t)
                        }
                    })
                }

                async H(t) {
                    const e = document.querySelector("script[data-webpack]");
                    e && (await async function () {
                        return new Promise((t => {
                            e.addEventListener("load", t), e.addEventListener("error", t)
                        }))
                    }(), await t.K(), await t.H(t))
                }

                async U() {
                    this.domReadyFired = !0;
                    try {
                        document.readyState = "interactive"
                    } catch (t) {
                    }
                    await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this.G(), window.dispatchEvent(new Event("rocket-DOMContentLoaded"))
                }

                async J() {
                    try {
                        document.readyState = "complete"
                    } catch (t) {
                    }
                    await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), window.dispatchEvent(new Event("rocket-load")), await this.G(), window.rocketonload && window.rocketonload(), await this.G(), this.allJQueries.forEach((t => t(window).trigger("rocket-jquery-load"))), await this.G();
                    const t = new Event("rocket-pageshow");
                    t.persisted = this.persisted, window.dispatchEvent(t), await this.G(), window.rocketonpageshow && window.rocketonpageshow({persisted: this.persisted}), this.windowLoaded = !0
                }

                m() {
                    document.onreadystatechange && document.onreadystatechange(), window.onload && window.onload(), window.onpageshow && window.onpageshow({persisted: this.persisted})
                }

                I() {
                    const t = new Map;
                    document.write = document.writeln = function (e) {
                        const i = document.currentScript;
                        i || console.error("WPRocket unable to document.write this: " + e);
                        const o = document.createRange(), s = i.parentElement;
                        let n = t.get(i);
                        void 0 === n && (n = i.nextSibling, t.set(i, n));
                        const c = document.createDocumentFragment();
                        o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n)
                    }
                }

                async G() {
                    Date.now() - this.lastBreath > 45 && (await this.K(), this.lastBreath = Date.now())
                }

                async K() {
                    return document.hidden ? new Promise((t => setTimeout(t))) : new Promise((t => requestAnimationFrame(t)))
                }

                N() {
                    this.trash.forEach((t => t.remove()))
                }

                static run() {
                    const t = new RocketLazyLoadScripts;
                    t.p(t)
                }
            }

            RocketLazyLoadScripts.run()
        })();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <style></style>

    <!-- This site is optimized with the Yoast SEO plugin v22.8 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Profit Calculator - {{ env('APP_NAME') }}</title>
    <link rel="preload" data-rocket-preload as="font"
          href="https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
          href="https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
          href="https://fonts.gstatic.com/s/poppins/v21/pxiEyp8kv8JHgFVrJJfecg.woff2" crossorigin>
    <style id="wpr-usedcss">
        .premium-banner-ib {
            display: block;
            position: relative;
            z-index: 1;
            overflow: hidden;
            margin: 0;
            text-align: center;
            box-sizing: border-box
        }

        .premium-banner-ib img {
            display: block;
            position: relative;
            min-width: 100%;
            max-width: 100%;
            -webkit-transition: opacity .35s;
            transition: opacity .35s;
            border: none;
            padding: 0;
            margin: 0
        }

        .premium-banner-ib * {
            box-sizing: border-box
        }

        .premium-blog-wrap .premium-loading-feed {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: rgba(255, 255, 255, .2);
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 99
        }

        .premium-blog-wrap {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .premium-blog-pagination-container {
            text-align: right
        }

        .premium-blog-pagination-container span {
            cursor: default
        }

        .premium-blog-pagination-container .page-numbers {
            display: inline-block;
            border: none;
            color: #000;
            line-height: 1;
            font-size: 1em;
            font-weight: 400;
            text-decoration: none;
            padding: .75em;
            margin: 0 .4em .4em 0;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-carousel-wrapper .premium-carousel-content-hidden {
            visibility: hidden
        }

        .premium-carousel-wrapper .premium-carousel-nav-arrow-next, .premium-carousel-wrapper .premium-carousel-nav-arrow-prev, .premium-carousel-wrapper .premium-carousel-nav-dot {
            display: none
        }

        [dir=rtl] .premium-carousel-inner .slick-slide {
            float: right
        }

        .premium-cf-anim-label .cf7-text-input-label, .premium-cf-anim-label-pos-back .cf7-text-input-label {
            position: relative;
            z-index: 2;
            -webkit-transform: translateX(10px) translateY(30px);
            -ms-transform: translateX(10px) translateY(30px);
            transform: translateX(10px) translateY(30px);
            opacity: .3;
            pointer-events: none;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-cf-anim-label .input-focused .cf7-text-input-label, .premium-cf-anim-label-pos-back .input-focused .cf7-text-input-label {
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important;
            opacity: 1
        }

        .premium-cf-anim-css-filters label, .premium-cf-anim-label-letter label {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .wpcf7-span.is-focused input {
            outline: 0
        }

        .premium-cf7-container input.wpcf7-submit {
            font-size: 16px;
            color: #fff;
            background-color: #4d7bfb;
            border: 1px solid #4d7bfb;
            font-weight: 900;
            border-radius: 0;
            text-decoration: none;
            box-shadow: none;
            margin-top: 10px;
            padding: 10px 0;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-cf7-container label {
            color: #272727;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 5px
        }

        .premium-countdown {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            text-align: center
        }

        .countdown .countdown-amount {
            position: relative;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .countdown-period {
            width: 100%
        }

        .countdown-period span {
            display: block
        }

        .premium-countdown-uinside-yes .countdown-amount {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .countdown-separator-circle {
            width: 3px;
            height: 3px;
            background-color: #000;
            border-radius: 100%
        }

        .premium-dual-header-first-header {
            position: relative;
            padding: 0;
            margin: 0;
            display: inline-block;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        @media (max-width: 500px) {
            .premium-dual-header-first-header {
                word-wrap: break-word
            }
        }

        .premium-fancy-text {
            font-size: 40px
        }

        .premium-fancy-item-hidden, .premium-fancy-text-wrapper:not(.typing) .premium-fancy-text {
            opacity: 0
        }

        .premium-fancy-text-wrapper .premium-fancy-list-items {
            list-style: none
        }

        .premium-fancy-text-wrapper:not(.typing):not(.slide) .premium-fancy-list-items {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block
        }

        .premium-fancy-text-wrapper.rotate .premium-fancy-list-items {
            -webkit-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }

        .premium-fancy-text-wrapper.rotate .premium-fancy-item-hidden {
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            -webkit-animation: 1.2s pa-rotate-out;
            animation: 1.2s pa-rotate-out
        }

        .premium-fancy-text-wrapper.rotate .premium-fancy-item-visible {
            position: relative !important;
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
            -webkit-animation: 1.2s pa-rotate-in;
            animation: 1.2s pa-rotate-in
        }

        .premium-fancy-text-wrapper.custom .premium-fancy-item-visible {
            position: relative !important
        }

        .premium-fancy-text-wrapper.auto-fade .premium-fancy-text {
            display: inline-block;
            width: 200px;
            font-weight: 400
        }

        .premium-fancy-text-wrapper.loading .premium-fancy-text {
            position: relative
        }

        .premium-fancy-text-wrapper.loading .premium-fancy-text .premium-loading-bar {
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: 0;
            left: 0;
            animation: 2.5s ease-out infinite pa-loading-bar;
            -webkit-animation: 2.5s ease-out infinite pa-loading-bar
        }

        .premium-fancy-text-wrapper.loading.pause .premium-fancy-text:hover .premium-loading-bar {
            -webkit-animation-play-state: paused;
            animation-play-state: paused
        }

        @-webkit-keyframes pa-loading-bar {
            0% {
                width: 0
            }
            100% {
                width: 100
            }
        }

        @keyframes pa-loading-bar {
            0% {
                width: 0
            }
            100% {
                width: 100
            }
        }

        @-webkit-keyframes pa-rotate-in {
            0% {
                opacity: 0;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg)
            }
            35% {
                opacity: 0;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg)
            }
            65% {
                opacity: 0
            }
            100% {
                opacity: 1;
                -webkit-transform: rotateX(360deg);
                transform: rotateX(360deg)
            }
        }

        @keyframes pa-rotate-in {
            0% {
                opacity: 0;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg)
            }
            35% {
                opacity: 0;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg)
            }
            65% {
                opacity: 0
            }
            100% {
                opacity: 1;
                -webkit-transform: rotateX(360deg);
                transform: rotateX(360deg)
            }
        }

        @-webkit-keyframes pa-rotate-out {
            0% {
                opacity: 1;
                -webkit-transform: rotateX(0);
                transform: rotateX(0)
            }
            35% {
                opacity: 1;
                -webkit-transform: rotateX(-40deg);
                transform: rotateX(-40deg)
            }
            65% {
                opacity: 0
            }
            100% {
                opacity: 0;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg)
            }
        }

        @keyframes pa-rotate-out {
            0% {
                opacity: 1;
                -webkit-transform: rotateX(0);
                transform: rotateX(0)
            }
            35% {
                opacity: 1;
                -webkit-transform: rotateX(-40deg);
                transform: rotateX(-40deg)
            }
            65% {
                opacity: 0
            }
            100% {
                opacity: 0;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg)
            }
        }

        .premium-bullet-list-box {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0
        }

        .premium-bullet-list-content {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            width: auto;
            position: relative
        }

        .premium-bullet-list-content .premium-bullet-list-text span {
            display: inline-block;
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-bullet-list-content .premium-bullet-list-text span {
            margin: 0 5px;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .premium-bullet-list-content .premium-bullet-list-text span {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-bullet-list-divider:not(:last-child) {
            width: 100%;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            overflow: hidden
        }

        .premium-bullet-list-divider:not(:last-child):after {
            content: "";
            display: block;
            border-top-style: solid;
            border-top-width: 1px
        }

        .premium-bullet-list-divider-inline:not(:last-child) {
            float: right;
            display: inline-block;
            position: relative;
            height: 100%;
            overflow: hidden;
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            margin: 0 3px
        }

        .premium-bullet-list-divider-inline:not(:last-child):after {
            content: "";
            display: block;
            border-left-width: 1px;
            height: 33px;
            border-left-style: solid
        }

        li.premium-bullet-list-content, ul.premium-bullet-list-box {
            margin: 0
        }

        .premium-bullet-list-content .premium-bullet-list-badge {
            font-size: 11px;
            top: auto;
            min-width: -webkit-max-content;
            min-width: max-content;
            height: -webkit-fit-content;
            height: fit-content
        }

        .premium-image-scroll-container {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-image-scroll-container {
            width: 100%
        }

        .premium-container-scroll {
            overflow: auto
        }

        .premium-image-scroll-container .premium-image-scroll-vertical img {
            width: 100%;
            max-width: 100%;
            height: auto
        }

        .premium-image-scroll-ver {
            position: relative
        }

        .premium-image-scroll-container .premium-image-scroll-overlay {
            background: rgba(2, 2, 2, .3)
        }

        .premium-image-scroll-container .premium-image-scroll-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 4
        }

        .premium-image-scroll-container img {
            -webkit-transition: -webkit-transform 3s ease-in-out;
            transition: -webkit-transform 3s ease-in-out;
            transition: transform 3s ease-in-out;
            transition: transform 3s ease-in-out, -webkit-transform 3s ease-in-out
        }

        .premium-image-scroll-container .premium-image-scroll-overlay {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            opacity: 1
        }

        .premium-image-scroll-container:hover .premium-image-scroll-overlay {
            opacity: 0
        }

        .premium-blog-filter {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .premium-img-gallery {
            clear: both;
            overflow: hidden
        }

        .premium-gallery-container .premium-gallery-item {
            padding: 10px;
            float: left
        }

        .premium-blog-filter .premium-blog-filters-container li a.category {
            outline: 0;
            text-decoration: none;
            border-radius: 75px;
            margin: 15px 5px 20px;
            padding: 7px 20px;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .pa-gallery-img-container {
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .pa-gallery-img-container img {
            display: block;
            width: 100%;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-img-gallery.scale img {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2)
        }

        .premium-blog-filter ul.premium-blog-filters-container {
            text-align: center;
            margin: 0;
            padding: 0
        }

        .premium-blog-filter .premium-blog-filters-container li {
            list-style: none;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        .premium-img-gallery .premium-gallery-item-hidden {
            visibility: hidden;
            width: 0 !important;
            height: 0 !important;
            margin: 0 !important;
            padding: 0 !important
        }

        .premium-gallery-load-more {
            position: relative
        }

        .pa-gallery-img-container iframe {
            position: absolute;
            visibility: hidden;
            top: 0;
            left: 0;
            max-width: 100%;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 1;
            border: none
        }

        .pa-gallery-img-container video {
            position: absolute;
            visibility: hidden;
            top: 0;
            left: 0;
            max-width: 100%;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 1;
            border: none;
            object-fit: contain
        }

        .premium-gallery-gradient-layer {
            position: absolute;
            bottom: 40px;
            width: 100%;
            height: 20px;
            background: -webkit-linear-gradient(bottom, #17181f 0, rgba(255, 255, 255, 0) 100%);
            background: linear-gradient(to top, #17181f 0, rgba(255, 255, 255, 0) 100%)
        }

        .premium-adv-carousel__media-wrap {
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1
        }

        .premium-adv-carousel__media-wrap {
            height: 300px;
            overflow: hidden;
            width: 100%;
            -webkit-transition: -webkit-transform .5s;
            transition: -webkit-transform .5s;
            transition: transform .5s;
            transition: transform .5s, -webkit-transform .5s
        }

        .premium-adv-carousel__item {
            width: 300px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            overflow: hidden
        }

        .premium-adv-carousel__iframe-wrap, .premium-adv-carousel__iframe-wrap iframe, .premium-adv-carousel__video-wrap {
            height: 100% !important;
            cursor: pointer
        }

        .premium-adv-carousel__video-wrap {
            position: relative
        }

        .premium-adv-carousel__video-wrap video {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .premium-adv-carousel__vid-overlay {
            height: 100% !important;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            cursor: pointer;
            -webkit-transition: -webkit-transform .5s;
            transition: -webkit-transform .5s;
            transition: transform .5s;
            transition: transform .5s, -webkit-transform .5s
        }

        .premium-adv-carousel__item-outer-wrapper {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -ms-flex-negative: 0;
            -webkit-flex-shrink: 0;
            flex-shrink: 0
        }

        .premium-adv-carousel__icons-holder {
            display: none
        }

        .premium-mobile-menu__wrap {
            position: relative;
            z-index: 99
        }

        .premium-mobile-menu__list {
            margin: 0;
            padding: 0;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 480px;
            -webkit-column-gap: 5px;
            column-gap: 5px
        }

        .premium-modal-box-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            -webkit-overflow-scrolling: touch;
            outline: 0;
            padding: 0 !important;
            background: rgba(0, 0, 0, .5);
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .premium-modal-box-modal .premium-modal-box-modal-dialog {
            position: absolute;
            max-height: -webkit-calc(100vh - 150px);
            max-height: calc(100vh - 150px);
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            opacity: 0;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px
        }

        .premium-modal-box-container {
            width: 100% !important
        }

        @media (min-width: 768px) {
            .premium-modal-box-modal-dialog {
                width: 700px;
                max-height: 600px;
                overflow: auto
            }
        }

        @media (max-width: 767px) {
            .premium-modal-box-modal-dialog {
                width: 100%;
                max-height: 500px;
                overflow: auto
            }
        }

        .premium-mega-nav-item {
            position: relative
        }

        @media (max-width: 768px) {
            .premium-blog-content-wrapper {
                top: 0;
                margin: 0;
                padding: 15px
            }
        }

        .premium-person-container {
            position: relative
        }

        .premium-person-image-container {
            position: relative;
            text-align: center;
            overflow: hidden
        }

        .premium-person-container .premium-person-image-container img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            -webkit-transition: .5s ease-in-out;
            transition: all .5s ease-in-out
        }

        .premium-pinterest-feed__outer-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .premium-pinterest-feed__pins-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .premium-pinterest-feed__pin-outer-wrapper {
            padding: 0 -webkit-calc(5px / 2);
            padding: 0 calc(5px / 2)
        }

        .premium-pinterest-feed__overlay {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 8
        }

        .premium-pinterest-feed__pin-meta-wrapper {
            z-index: 9
        }

        .premium-pinterest-feed__board-trigger, .premium-pinterest-feed__load-more-btn {
            cursor: pointer;
            display: inline-block;
            padding: 7px 20px;
            margin-bottom: 4px;
            margin-top: 4px;
            border: none;
            border-radius: 5px;
            background-color: #efefef
        }

        .premium-pinterest-feed__board-wrapper {
            position: relative;
            width: 250px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            cursor: pointer;
            overflow: hidden;
            margin: 4px
        }

        .premium-pinterest-feed__board-wrapper > * {
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1
        }

        .premium-pinterest-feed__board-wrapper span {
            display: inline-block
        }

        .premium-pinterest-feed__board-wrapper > a {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 2
        }

        .premium-display-none {
            display: none
        }

        .premium-post-ticker__outer-wrapper, .premium-post-ticker__post-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-post-ticker__outer-wrapper {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .premium-post-ticker__post-wrapper {
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 7px 20px
        }

        .premium-post-ticker__post-wrapper a {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-post-ticker__post-wrapper.slick-slide {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            position: relative
        }

        .premium-post-ticker__posts-wrapper {
            min-width: 0;
            min-height: 0
        }

        .premium-post-ticker__posts-wrapper .slick-track {
            height: 100%
        }

        .premium-post-ticker__outer-wrapper, .premium-post-ticker__post-wrapper {
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .premium-post-ticker__post-wrapper {
            -webkit-column-gap: 5px;
            column-gap: 5px
        }

        .premium-post-ticker__post-title {
            margin: 0;
            text-transform: capitalize
        }

        .premium-post-ticker__post-title {
            font-size: 17px
        }

        .premium-post-ticker__post-title a {
            display: inline-block
        }

        .premium-post-ticker__arrows {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            z-index: 99;
            -webkit-column-gap: 2px;
            column-gap: 2px
        }

        .premium-post-ticker__arrows a {
            cursor: pointer;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            -webkit-appearance: inherit;
            box-shadow: none;
            padding: 0 5px;
            border: 1px solid currentColor;
            border-radius: 0
        }

        .premium-post-ticker__hidden {
            visibility: hidden;
            opacity: 0
        }

        .premium-progressbar-container {
            position: relative
        }

        .premium-progressbar-bar-wrap {
            position: relative;
            text-align: left;
            overflow: hidden;
            height: 25px;
            margin-bottom: 50px;
            background-color: #f5f5f5;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
        }

        .premium-progressbar-bar-wrap .progress-segment {
            position: relative;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            overflow: hidden;
            background-color: #f5f5f5
        }

        .premium-progressbar-bar-wrap .progress-segment:not(:first-child):not(:last-child) {
            margin: 0 4px
        }

        .premium-progressbar-bar-wrap .progress-segment:first-child {
            margin-right: 4px
        }

        .premium-progressbar-bar-wrap .progress-segment:last-child {
            margin-left: 4px
        }

        .premium-progressbar-bar-wrap .progress-segment .segment-inner {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #6ec1e4
        }

        .premium-progressbar-bar {
            float: left;
            width: 0%;
            height: 100%;
            font-size: 12px;
            background: #6ec1e4;
            text-align: center;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            position: absolute;
            overflow: hidden;
            line-height: 20px;
            -webkit-transition: width ease-in-out !important;
            transition: width 0s ease-in-out !important
        }

        .premium-progressbar-striped .premium-progressbar-bar {
            background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(-45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: 40px 40px
        }

        .premium-progressbar-active .premium-progressbar-bar {
            -webkit-animation: 2s linear infinite progress-bar-stripes;
            animation: 2s linear infinite progress-bar-stripes
        }

        .premium-progressbar-container .clearfix {
            clear: both
        }

        .premium-progressbar-container p:first-of-type {
            margin: 0;
            float: left
        }

        .premium-progressbar-container p:nth-of-type(2) {
            margin: 0;
            float: right
        }

        .premium-progressbar-hf-circle-progress {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            border: 12px solid #000;
            border-radius: 50%;
            -webkit-clip-path: inset(50% 0 0 0);
            clip-path: inset(50% 0 0 0);
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            -webkit-transition: -webkit-transform 1.5s linear;
            transition: -webkit-transform 1.5s linear;
            transition: transform 1.5s linear;
            transition: transform 1.5s linear, -webkit-transform 1.5s linear
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 0 0
            }
            to {
                background-position: 40px 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 0 0
            }
            to {
                background-position: 40px 0
            }
        }

        .premium-search__container {
            position: relative
        }

        .premium-search__spinner .premium-loading-feed {
            display: block !important;
            position: relative !important
        }

        .premium-search__type-select {
            height: 100%;
            background-color: #fff;
            outline: 0;
            border-radius: 0;
            border: 1px solid #eee
        }

        .premium-search__type-select:focus {
            outline: 0;
            border: 1px solid #eee;
            box-shadow: none
        }

        .premium-search__spinner {
            position: absolute;
            right: 5px
        }

        .premium-search__remove-wrap {
            position: absolute;
            right: 20px;
            cursor: pointer
        }

        .premium-search__btn[type=button] {
            width: 100%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            cursor: pointer
        }

        .premium-search__btn[type=button] svg {
            width: 20px;
            height: 20px;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-search__query-wrap {
            position: absolute;
            left: 0;
            z-index: 3;
            width: 100%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: 10px
        }

        .premium-search__query-wrap.query-hidden {
            display: none
        }

        .premium-search__query-wrap .premium-loading-feed {
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, .2);
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 99
        }

        .premium-search__query-wrap .slick-track {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-search__query-wrap .slick-slide {
            height: inherit !important
        }

        .premium-search__posts-wrap {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            overflow-y: scroll
        }

        .premium-search__footer {
            width: 100%
        }

        .premium-search-form__pagination-container {
            text-align: right
        }

        .premium-search-form__pagination-container span {
            cursor: default
        }

        .premium-search-form__pagination-container .page-numbers {
            display: inline-block;
            border: none;
            color: #000;
            line-height: 1;
            font-size: 1em;
            font-weight: 400;
            text-decoration: none;
            padding: .75em;
            margin: 0 .4em .4em 0;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        @media (max-width: 768px) {
            .premium-search__container:not(.premium-search__skin-banner) .premium-search__post-content {
                top: 0;
                margin: 0;
                padding: 15px
            }
        }

        .premium-tcloud-hidden {
            opacity: 0;
            visibility: hidden
        }

        .premium-tcloud-canvas {
            cursor: pointer
        }

        .premium-testimonial-container {
            position: relative;
            width: 100%
        }

        .premium-testimonial-img-wrapper {
            overflow: hidden;
            border-radius: 50%;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-testimonial-img-wrapper img {
            object-fit: cover;
            width: 100%;
            height: 100% !important
        }

        .premium-testimonial-content-wrapper {
            position: relative;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding: 20px
        }

        .premium-testimonial__carousel {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0 auto
        }

        .premium-testimonial__carousel .slick-slide {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-testimonial__carousel .slick-slide:not(.slick-center) {
            -webkit-transform: scale(.8);
            -ms-transform: scale(.8);
            transform: scale(.8);
            opacity: .6;
            -webkit-filter: grayscale(70%);
            filter: grayscale(70%)
        }

        .premium-testimonial__carousel-img {
            cursor: pointer
        }

        .pa-txt-sc__outer-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .pa-txt-sc__outer-container {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 10px
        }

        .pa-txt-sc__outer-container .premium-lottie-animation {
            width: 150px;
            height: 150px
        }

        .pa-txt-sc__outer-container .premium-lottie-animation > svg {
            width: 100%;
            height: 100%
        }

        .pa-txt-sc__effect-grow {
            -webkit-clip-path: inset(0 100% 100% 0);
            clip-path: inset(0 100% 100% 0);
            -webkit-transition: 1.2s cubic-bezier(.16, .09, 0, 1.02);
            transition: 1.2s cubic-bezier(.16, .09, 0, 1.02)
        }

        .pa-txt-sc__effect-min-mask .premium-mask-span {
            position: relative;
            overflow: hidden;
            display: -webkit-inline-flex !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
            background: inherit
        }

        .pa-txt-sc__effect-min-mask .premium-mask-span::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: currentColor;
            -webkit-backface-visibility: visible;
            backface-visibility: visible
        }

        .premium-tiktok-feed__outer-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .premium-tiktok-feed__videos-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .premium-tiktok-feed__video-outer-wrapper {
            padding: -webkit-calc(5px / 2);
            padding: calc(5px / 2)
        }

        .premium-tiktok-feed__video-media {
            cursor: pointer;
            overflow: hidden;
            position: relative
        }

        .premium-tiktok-feed__video-media img, .premium-tiktok-feed__video-media video {
            width: 100%;
            height: 100% !important;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-tiktok-feed__video-media .premium-tiktok-feed__play-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            z-index: 9
        }

        .premium-tiktok-feed__vid-layout-2 .premium-tiktok-feed__vid-meta-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9
        }

        .premium-tiktok-feed__vid-layout-2 .premium-tiktok-feed__video-media {
            width: 100%;
            height: 100%
        }

        .premium-tiktok-feed__load-more-btn {
            cursor: pointer;
            display: inline-block;
            padding: 7px 20px;
            margin-bottom: 4px;
            margin-top: 4px;
            border: none;
            border-radius: 5px;
            background-color: #efefef
        }

        .premium-tiktok-feed-modal-iframe-modal {
            display: none;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .8);
            z-index: 9999;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .premium-tiktok-feed-modal-iframe-modal .premium-tiktok-feed__video-content {
            height: 90%
        }

        .premium-tiktok-feed-modal-iframe-modal iframe {
            width: 325px;
            height: 100%;
            max-width: 605px
        }

        .premium-title-container .premium-title-header {
            position: relative;
            margin: 0;
            padding: 10px
        }

        .premium-title-container .premium-title-header:not(.premium-title-style7) {
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .premium-title-container .premium-title-header svg {
            width: 40px;
            height: 40px
        }

        .premium-title-container .premium-title-header img {
            width: 40px;
            height: 40px;
            object-fit: cover
        }

        .premium-title-container .premium-title-header a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .premium-title-container .premium-lottie-animation {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-title-style9 {
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        .premium-title-style9[data-animation-blur=process] .premium-title-style9-letter {
            -webkit-animation: 2s alternate pa-blur-shadow;
            animation: 2s alternate pa-blur-shadow
        }

        @-webkit-keyframes pa-blur-shadow {
            from {
                text-shadow: 0 0 var(--shadow-value) var(--shadow-color);
                color: transparent
            }
            to {
                text-shadow: 0
            }
        }

        @keyframes pa-blur-shadow {
            from {
                text-shadow: 0 0 var(--shadow-value) var(--shadow-color);
                color: transparent
            }
            to {
                text-shadow: 0
            }
        }

        .premium-video-box-transform {
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important
        }

        .premium-video-box-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .premium-video-box-container > div {
            position: relative;
            overflow: hidden
        }

        .premium-video-box-image-container {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: 50%;
            cursor: pointer;
            margin: auto;
            -webkit-transition: .2s;
            transition: .2s all
        }

        .premium-video-box-play-icon-container {
            position: absolute;
            z-index: 2;
            cursor: pointer;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background: rgba(252, 252, 252, .35)
        }

        .premium-video-box-description-container {
            position: absolute;
            z-index: 2;
            padding: 5px;
            text-align: center;
            cursor: pointer;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .premium-video-box-video-container {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            width: 100%;
            height: 100%;
            -webkit-transition: opacity .8s ease-in-out;
            transition: opacity .8s ease-in-out;
            overflow: hidden;
            cursor: pointer
        }

        .premium-video-box-video-container iframe {
            max-width: 100%;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 1;
            border: none
        }

        .premium-video-box-video-container video {
            max-width: 100%;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 1;
            border: none;
            background-color: #000;
            object-fit: contain
        }

        .premium-video-box-container .premium-video-box-vimeo-wrap {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            margin: 10px;
            margin-right: 10px;
            -webkit-transition: opacity .2s ease-out;
            transition: opacity .2s ease-out;
            margin-right: 4.6em
        }

        .premium-video-box-playlist-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .premium-video-box-playlist-container .premium-video-box-container {
            height: 100%;
            overflow: hidden
        }

        .premium-video-box-container:hover .premium-video-box-image-container.scale {
            -webkit-transform: scale(1.3) rotate(5deg);
            -ms-transform: scale(1.3) rotate(5deg);
            transform: scale(1.3) rotate(5deg)
        }

        .premium-video-box-container:hover .premium-video-box-image-container.blur {
            -webkit-filter: blur(3px);
            filter: blur(3px)
        }

        .premium-video-box-image-container.scale {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2)
        }

        .premium-video-box-mask-media {
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }

        .premium-video-box-container.premium-video-box-sticky-apply {
            z-index: 99;
            overflow: unset
        }

        .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-inner-wrap {
            position: fixed !important;
            z-index: 99999;
            height: 225px;
            width: 400px;
            background: #fff
        }

        .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-container:before, .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-vimeo-wrap {
            visibility: hidden
        }

        .premium-video-box-sticky-close, .premium-video-box-sticky-infobar {
            display: none
        }

        .premium-video-box-sticky-apply .premium-video-box-sticky-close {
            position: absolute;
            padding: 5px;
            cursor: pointer;
            z-index: 99999;
            height: 14px;
            width: 14px;
            box-sizing: content-box;
            border-radius: 100%;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .premium-video-box-sticky-apply .premium-video-box-play-icon-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-video-box-sticky-apply .premium-video-box-sticky-infobar {
            display: block;
            position: relative;
            top: 100%;
            width: 100%;
            padding: 5px;
            text-align: center;
            z-index: 9999;
            margin-top: -1px
        }

        .premium-video-sticky-bottom-left .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-inner-wrap {
            right: auto;
            left: 20px;
            bottom: 20px
        }

        .premium-video-sticky-bottom-right .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-inner-wrap {
            left: auto;
            right: 20px;
            bottom: 20px
        }

        .premium-video-sticky-center-left .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-inner-wrap {
            right: auto;
            left: 20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .premium-video-sticky-center-right .premium-video-box-container.premium-video-box-sticky-apply .premium-video-box-inner-wrap {
            left: auto;
            right: 20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .premium-video-sticky-bottom-left .premium-video-box-sticky-apply .premium-video-box-sticky-close, .premium-video-sticky-center-left .premium-video-box-sticky-apply .premium-video-box-sticky-close {
            top: -10px;
            right: -10px
        }

        .premium-video-sticky-bottom-right .premium-video-box-sticky-apply .premium-video-box-sticky-close, .premium-video-sticky-center-right .premium-video-box-sticky-apply .premium-video-box-sticky-close {
            top: -10px;
            left: -10px
        }

        .premium-video-box-filter-sticky {
            -webkit-filter: none !important;
            filter: none !important
        }

        .premium-weather__outer-wrapper {
            position: relative
        }

        .premium-weather__outer-wrapper * {
            z-index: 10
        }

        .premium-weather__outer-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .premium-weather__forecast {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 10px
        }

        .premium-weather__forecast .premium-weather__forecast-item {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .premium-weather__forecast .premium-weather__forecast-item.slick-slide {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .premium-daily-forecast__style-4 .premium-weather__forecast {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .premium-daily-forecast__style-4 .premium-weather__forecast .premium-weather__forecast-item {
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        .premium-daily-forecast__style-4 .premium-weather__forecast {
            background-color: #f0f0f0;
            padding: 15px
        }

        .premium-daily-forecast__style-4 .premium-weather__forecast {
            border-radius: 15px
        }

        .premium-daily-forecast__style-4 .premium-weather__forecast-item {
            padding: 10px 0
        }

        .premium-carousel-hidden {
            opacity: 0;
            visibility: hidden
        }

        .premium-mask-yes .premium-mask-span {
            position: relative;
            overflow: hidden;
            display: -webkit-inline-flex !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        .premium-mask-yes .premium-mask-span::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: currentColor;
            -webkit-backface-visibility: visible;
            backface-visibility: visible
        }

        .premium-mouse-detect-yes .premium-button-style6 .premium-button-style6-bg {
            position: absolute;
            z-index: 0;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-radius: 50%;
            display: block;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: width .4s ease-in-out, height .4s ease-in-out;
            transition: width .4s ease-in-out, height .4s ease-in-out
        }

        .premium-mouse-detect-yes .premium-button-style6:hover .premium-button-style6-bg {
            width: 225%;
            height: 560px
        }

        .premium-mouse-detect-yes .premium-button-style6:before {
            width: 0;
            height: 0
        }

        .premium-svg-drawer * {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            -webkit-transition-property: stroke, fill, background-color;
            transition-property: stroke, fill, background-color
        }

        .premium-addons__v-hidden {
            visibility: hidden;
            opacity: 0
        }

        .premium-pinterest-share-menu, .premium-tiktok-share-menu {
            position: absolute;
            z-index: 100;
            padding: 20px 0;
            opacity: 0;
            bottom: 40px;
            visibility: hidden;
            background-color: #fff;
            width: -webkit-max-content;
            width: max-content;
            border-radius: 4px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1)
        }

        .premium-pinterest-share-menu {
            left: 10px
        }

        .premium-tiktok-share-menu {
            right: 0;
            border-radius: 20px;
            padding: 15px 0
        }

        [class*=premium-button-style]:not(.premium-button-style8) {
            overflow: hidden
        }

        .premium-button-style6 {
            position: relative
        }

        .premium-button-style6:before {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            -webkit-transform: translate(-50%, -50%) scale(0);
            -ms-transform: translate(-50%, -50%) scale(0);
            transform: translate(-50%, -50%) scale(0);
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-button-style6:hover:before {
            -webkit-transform: translate(-50%, -50%) scale(3);
            -ms-transform: translate(-50%, -50%) scale(3);
            transform: translate(-50%, -50%) scale(3)
        }

        .premium-button-style6 > :not(.premium-button-style6-bg) {
            position: relative;
            z-index: 1
        }

        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -.1em !important;
            background: 0 0 !important;
            padding: 0 !important
        }

        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1)
        }

        :where(.is-layout-flex) {
            gap: .5em
        }

        :where(.is-layout-grid) {
            gap: .5em
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        *, :after, :before {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1, h2, h3, h4 {
            margin-block-start: .5rem;
            margin-block-end: 1rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        h1 {
            font-size: 2.5rem
        }

        h2 {
            font-size: 2rem
        }

        h3 {
            font-size: 1.75rem
        }

        h4 {
            font-size: 1.5rem
        }

        p {
            margin-block-start: 0;
            margin-block-end: .9rem
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        a {
            background-color: transparent;
            text-decoration: none;
            color: #c36
        }

        a:active, a:hover {
            color: #336
        }

        a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        strong {
            font-weight: bolder
        }

        code {
            font-family: monospace, monospace;
            font-size: 1em
        }

        sub {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        img {
            border-style: none;
            height: auto;
            max-width: 100%
        }

        summary {
            display: list-item
        }

        [hidden], template {
            display: none
        }

        @media print {
            *, :after, :before {
                background: 0 0 !important;
                color: #000 !important;
                box-shadow: none !important;
                text-shadow: none !important
            }

            a, a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " (" attr(href) ")"
            }

            a[href^="#"]:after, a[href^="javascript:"]:after {
                content: ""
            }

            img, tr {
                -moz-column-break-inside: avoid;
                break-inside: avoid
            }

            h2, h3, p {
                orphans: 3;
                widows: 3
            }

            h2, h3 {
                -moz-column-break-after: avoid;
                break-after: avoid
            }
        }

        label {
            display: inline-block;
            line-height: 1;
            vertical-align: middle
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 1rem;
            line-height: 1.5;
            margin: 0
        }

        input[type=date], input[type=email], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=url], select, textarea {
            width: 100%;
            border: 1px solid #666;
            border-radius: 3px;
            padding: .5rem 1rem;
            transition: all .3s
        }

        input[type=date]:focus, input[type=email]:focus, input[type=number]:focus, input[type=password]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=url]:focus, select:focus, textarea:focus {
            border-color: #333
        }

        button, input {
            overflow: visible
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            width: auto;
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring, button:-moz-focusring {
            outline: ButtonText dotted 1px
        }

        [type=button], [type=submit], button {
            display: inline-block;
            font-weight: 400;
            color: #c36;
            text-align: center;
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid #c36;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: 3px;
            transition: all .3s
        }

        [type=button]:focus, [type=submit]:focus, button:focus {
            outline: -webkit-focus-ring-color auto 5px
        }

        [type=button]:focus, [type=button]:hover, [type=submit]:focus, [type=submit]:hover, button:focus, button:hover {
            color: #fff;
            background-color: #c36;
            text-decoration: none
        }

        [type=button]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
            cursor: pointer
        }

        fieldset {
            padding: .35em .75em .625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        [type=checkbox], [type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        select {
            display: block
        }

        table {
            background-color: transparent;
            width: 100%;
            margin-block-end: 15px;
            font-size: .9em;
            border-spacing: 0;
            border-collapse: collapse
        }

        table td, table th {
            padding: 15px;
            line-height: 1.5;
            vertical-align: top;
            border: 1px solid hsla(0, 0%, 50.2%, .5019607843)
        }

        table th {
            font-weight: 700
        }

        table tbody > tr:nth-child(odd) > td, table tbody > tr:nth-child(odd) > th {
            background-color: hsla(0, 0%, 50.2%, .0705882353)
        }

        table tbody tr:hover > td, table tbody tr:hover > th {
            background-color: hsla(0, 0%, 50.2%, .1019607843)
        }

        table tbody + tbody {
            border-block-start: 2px solid hsla(0, 0%, 50.2%, .5019607843)
        }

        dd, dl, dt, li, ul {
            margin-block-start: 0;
            margin-block-end: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: 0 0
        }

        .pagination {
            margin: 20px auto
        }

        .sticky {
            position: relative;
            display: block
        }

        .hide {
            display: none !important
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #eee;
            clip: auto !important;
            clip-path: none;
            color: #333;
            display: block;
            font-size: 1rem;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        .site-header:not(.dynamic-header) {
            margin-inline-start: auto;
            margin-inline-end: auto;
            width: 100%
        }

        @media (max-width: 575px) {
            .site-header:not(.dynamic-header) {
                padding-inline-start: 10px;
                padding-inline-end: 10px
            }
        }

        @media (min-width: 576px) {
            .site-header:not(.dynamic-header) {
                max-width: 500px
            }
        }

        @media (min-width: 768px) {
            .site-header:not(.dynamic-header) {
                max-width: 600px
            }
        }

        @media (min-width: 992px) {
            .site-header:not(.dynamic-header) {
                max-width: 800px
            }
        }

        @media (min-width: 1200px) {
            .site-header:not(.dynamic-header) {
                max-width: 1140px
            }
        }

        .site-header + .elementor {
            min-height: calc(100vh - 320px)
        }

        .site-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-block-start: 1rem;
            padding-block-end: 1rem;
            position: relative
        }

        .site-navigation-toggle-holder {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-grow: 1;
            max-width: 20%;
            padding: 8px 15px
        }

        .site-navigation-toggle-holder .site-navigation-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            padding: .25em;
            cursor: pointer;
            border: 0 solid;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, .05);
            color: #494c4f
        }

        .site-navigation-dropdown {
            margin-block-start: 10px;
            transition: max-height .3s, transform .3s;
            transform-origin: top;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 10000;
            width: 100%
        }

        .site-navigation-toggle-holder:not(.elementor-active) + .site-navigation-dropdown {
            transform: scaleY(0);
            max-height: 0
        }

        .site-navigation-toggle-holder.elementor-active + .site-navigation-dropdown {
            transform: scaleY(1);
            max-height: 100vh
        }

        .site-navigation-dropdown ul {
            padding: 0
        }

        .site-navigation-dropdown ul.menu {
            position: absolute;
            width: 100%;
            padding: 0;
            margin: 0;
            background: #fff
        }

        .site-navigation-dropdown ul.menu li {
            display: block;
            width: 100%;
            position: relative
        }

        .site-navigation-dropdown ul.menu li a {
            display: block;
            padding: 20px;
            background: #fff;
            color: #55595c;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1019607843)
        }

        .site-navigation-dropdown ul.menu li.current-menu-item a {
            color: #fff;
            background: #55595c
        }

        .site-navigation-dropdown ul.menu > li li {
            transition: max-height .3s, transform .3s;
            transform-origin: top;
            transform: scaleY(0);
            max-height: 0
        }

        .site-navigation-dropdown ul.menu li.elementor-active > ul > li {
            transform: scaleY(1);
            max-height: 100vh
        }

        .dialog-widget-content {
            background-color: var(--e-a-bg-default);
            position: absolute;
            border-radius: 3px;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2);
            overflow: hidden
        }

        .dialog-message {
            line-height: 1.5;
            box-sizing: border-box
        }

        .dialog-close-button {
            cursor: pointer;
            position: absolute;
            margin-block-start: 15px;
            right: 15px;
            color: var(--e-a-color-txt);
            font-size: 15px;
            line-height: 1;
            transition: var(--e-a-transition-hover)
        }

        .dialog-close-button:hover {
            color: var(--e-a-color-txt-hover)
        }

        .dialog-prevent-scroll {
            overflow: hidden;
            max-height: 100vh
        }

        .dialog-type-lightbox {
            position: fixed;
            height: 100%;
            width: 100%;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8);
            z-index: 9999;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .dialog-type-alert .dialog-widget-content, .dialog-type-confirm .dialog-widget-content {
            margin: auto;
            width: 400px;
            padding: 20px
        }

        .dialog-type-alert .dialog-header, .dialog-type-confirm .dialog-header {
            font-size: 15px;
            font-weight: 500
        }

        .dialog-type-alert .dialog-header:after, .dialog-type-confirm .dialog-header:after {
            content: "";
            display: block;
            border-block-end: var(--e-a-border);
            padding-block-end: 10px;
            margin-block-end: 10px;
            margin-inline-start: -20px;
            margin-inline-end: -20px
        }

        .dialog-type-alert .dialog-message, .dialog-type-confirm .dialog-message {
            min-height: 50px
        }

        .dialog-type-alert .dialog-buttons-wrapper, .dialog-type-confirm .dialog-buttons-wrapper {
            padding-block-start: 10px;
            display: flex;
            justify-content: flex-end;
            gap: 15px
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button {
            font-size: 12px;
            font-weight: 500;
            line-height: 1.2;
            padding: 8px 16px;
            outline: 0;
            border: none;
            border-radius: var(--e-a-border-radius);
            background-color: var(--e-a-btn-bg);
            color: var(--e-a-btn-color-invert);
            transition: var(--e-a-transition-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:hover {
            border: none
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:hover {
            background-color: var(--e-a-btn-bg-hover);
            color: var(--e-a-btn-color-invert)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:active, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:active {
            background-color: var(--e-a-btn-bg-active)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:not([disabled]), .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:not([disabled]) {
            cursor: pointer
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:disabled, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:disabled {
            background-color: var(--e-a-btn-bg-disabled);
            color: var(--e-a-btn-color-disabled)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:not(.elementor-button-state) .elementor-state-icon, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:not(.elementor-button-state) .elementor-state-icon {
            display: none
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt {
            background: 0 0;
            color: var(--e-a-color-txt)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt:hover {
            background: var(--e-a-bg-hover);
            color: var(--e-a-color-txt-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel:disabled, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt:disabled, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel:disabled, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt:disabled {
            background: 0 0;
            color: var(--e-a-color-txt-disabled)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt-border, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt-border {
            border: 1px solid var(--e-a-color-txt-muted)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-success, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-success, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-success, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-success {
            background-color: var(--e-a-btn-bg-success)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-success:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-success:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-success:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-success:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-success:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-success:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-success:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-success:hover {
            background-color: var(--e-a-btn-bg-success-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-take_over, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-take_over, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary {
            background-color: var(--e-a-btn-bg-primary);
            color: var(--e-a-btn-color)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-take_over:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-take_over:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-take_over:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-take_over:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary:hover {
            background-color: var(--e-a-btn-bg-primary-hover);
            color: var(--e-a-btn-color)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt {
            background: 0 0;
            color: var(--e-a-color-primary-bold)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-cancel.dialog-take_over:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.dialog-ok.dialog-cancel:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-ok:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-btn-txt.dialog-take_over:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.dialog-cancel:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-primary.e-btn-txt:hover {
            background: var(--e-a-bg-primary)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-accent, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.go-pro, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-accent, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.go-pro {
            background-color: var(--e-a-btn-bg-accent)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-accent:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-accent:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.go-pro:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.go-pro:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-accent:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-accent:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.go-pro:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.go-pro:hover {
            background-color: var(--e-a-btn-bg-accent-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-accent:active, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.go-pro:active, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-accent:active, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.go-pro:active {
            background-color: var(--e-a-btn-bg-accent-active)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-info, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-info, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-info, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-info {
            background-color: var(--e-a-btn-bg-info)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-info:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-info:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-info:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-info:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-info:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-info:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-info:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-info:hover {
            background-color: var(--e-a-btn-bg-info-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-warning, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-warning, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-warning, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-warning {
            background-color: var(--e-a-btn-bg-warning)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-warning:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-warning:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-warning:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-warning:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-warning:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-warning:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-warning:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-warning:hover {
            background-color: var(--e-a-btn-bg-warning-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-danger, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-danger, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-danger, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-danger {
            background-color: var(--e-a-btn-bg-danger)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-danger:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.e-danger:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-danger:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button.elementor-button-danger:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-danger:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.e-danger:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-danger:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button.elementor-button-danger:hover {
            background-color: var(--e-a-btn-bg-danger-hover)
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button i, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button i {
            margin-inline-end: 5px
        }

        .dialog-type-alert .dialog-buttons-wrapper .dialog-button:focus, .dialog-type-alert .dialog-buttons-wrapper .dialog-button:hover, .dialog-type-alert .dialog-buttons-wrapper .dialog-button:visited, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:focus, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:hover, .dialog-type-confirm .dialog-buttons-wrapper .dialog-button:visited {
            color: initial
        }

        .flatpickr-calendar {
            width: 280px
        }

        .elementor-hidden {
            display: none
        }

        .elementor-screen-only, .screen-reader-text, .screen-reader-text span {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .elementor *, .elementor :after, .elementor :before {
            box-sizing: border-box
        }

        .elementor a {
            box-shadow: none;
            text-decoration: none
        }

        .elementor hr {
            margin: 0;
            background-color: transparent
        }

        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
            box-shadow: none
        }

        .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
            margin: 0
        }

        .elementor iframe, .elementor object, .elementor video {
            max-width: 100%;
            width: 100%;
            margin: 0;
            line-height: 1;
            border: none
        }

        .elementor .elementor-background-video-container {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            overflow: hidden;
            z-index: 0;
            direction: ltr
        }

        .elementor .elementor-background-video-container {
            transition: opacity 1s;
            pointer-events: none
        }

        .elementor .elementor-background-video-container.elementor-loading {
            opacity: 0
        }

        .elementor .elementor-background-video-embed {
            max-width: none
        }

        .elementor .elementor-background-video-embed, .elementor .elementor-background-video-hosted {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .elementor .elementor-background-slideshow {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute
        }

        .elementor .elementor-background-slideshow {
            z-index: 0
        }

        .elementor .elementor-background-slideshow__slide__image {
            width: 100%;
            height: 100%;
            background-position: 50%;
            background-size: cover
        }

        .e-con-inner > .elementor-element.elementor-absolute, .e-con > .elementor-element.elementor-absolute, .elementor-widget-wrap > .elementor-element.elementor-absolute {
            position: absolute
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
            align-self: var(--align-self)
        }

        .elementor-element.elementor-absolute {
            z-index: 1
        }

        .elementor-element:where(.e-con-full,.elementor-widget) {
            flex-direction: var(--flex-direction);
            flex-wrap: var(--flex-wrap);
            justify-content: var(--justify-content);
            align-items: var(--align-items);
            align-content: var(--align-content);
            gap: var(--gap)
        }

        .elementor-invisible {
            visibility: hidden
        }

        .elementor-align-center {
            text-align: center
        }

        .elementor-align-center .elementor-button {
            width: auto
        }

        .elementor-ken-burns {
            transition-property: transform;
            transition-duration: 10s;
            transition-timing-function: linear
        }

        .elementor-ken-burns--out {
            transform: scale(1.3)
        }

        .elementor-ken-burns--active {
            transition-duration: 20s
        }

        .elementor-ken-burns--active.elementor-ken-burns--out {
            transform: scale(1)
        }

        .elementor-ken-burns--active.elementor-ken-burns--in {
            transform: scale(1.3)
        }

        :root {
            --page-title-display: block
        }

        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            flex-wrap: wrap;
            align-content: flex-start
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex
        }

        .elementor-widget-wrap > .elementor-element {
            width: 100%
        }

        .elementor-widget-wrap.e-swiper-container {
            width: calc(100% - (var(--e-column-margin-left, 0px) + var(--e-column-margin-right, 0px)))
        }

        .elementor-widget {
            position: relative
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }

        .elementor-widget:not(:last-child).elementor-absolute {
            margin-bottom: 0
        }

        ul.elementor-icon-list-items.elementor-inline-items {
            display: flex;
            flex-wrap: wrap
        }

        ul.elementor-icon-list-items.elementor-inline-items .elementor-inline-item {
            word-break: break-word
        }

        @media (min-width: 1025px) {
            #elementor-device-mode:after {
                content: "desktop"
            }
        }

        @media (min-width: -1) {
            #elementor-device-mode:after {
                content: "widescreen"
            }
        }

        @media (max-width: -1) {
            #elementor-device-mode:after {
                content: "laptop";
                content: "tablet_extra"
            }
        }

        @media (max-width: 1024px) {
            #elementor-device-mode:after {
                content: "tablet"
            }
        }

        @media (max-width: -1) {
            #elementor-device-mode:after {
                content: "mobile_extra"
            }
        }

        .e-con {
            --border-radius: 0;
            --border-top-width: 0px;
            --border-right-width: 0px;
            --border-bottom-width: 0px;
            --border-left-width: 0px;
            --border-style: initial;
            --border-color: initial;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --content-width: min(100%, var(--container-max-width, 1140px));
            --width: 100%;
            --min-height: initial;
            --height: auto;
            --text-align: initial;
            --margin-top: 0px;
            --margin-right: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --padding-top: var(--container-default-padding-top, 10px);
            --padding-right: var(--container-default-padding-right, 10px);
            --padding-bottom: var(--container-default-padding-bottom, 10px);
            --padding-left: var(--container-default-padding-left, 10px);
            --position: relative;
            --z-index: revert;
            --overflow: visible;
            --gap: var(--widgets-spacing, 20px);
            --overlay-mix-blend-mode: initial;
            --overlay-opacity: 1;
            --overlay-transition: 0.3s;
            --e-con-grid-template-columns: repeat(3, 1fr);
            --e-con-grid-template-rows: repeat(2, 1fr);
            position: var(--position);
            width: var(--width);
            min-width: 0;
            min-height: var(--min-height);
            height: var(--height);
            border-radius: var(--border-radius);
            z-index: var(--z-index);
            overflow: var(--overflow);
            transition: background var(--background-transition, .3s), border var(--border-transition, .3s), box-shadow var(--border-transition, .3s), transform var(--e-con-transform-transition-duration, .4s);
            margin-block-start: var(--margin-block-start);
            margin-inline-end: var(--margin-inline-end);
            margin-block-end: var(--margin-block-end);
            margin-inline-start: var(--margin-inline-start);
            padding-inline-start: var(--padding-inline-start);
            padding-inline-end: var(--padding-inline-end);
            --margin-block-start: var(--margin-top);
            --margin-block-end: var(--margin-bottom);
            --margin-inline-start: var(--margin-left);
            --margin-inline-end: var(--margin-right);
            --padding-inline-start: var(--padding-left);
            --padding-inline-end: var(--padding-right);
            --padding-block-start: var(--padding-top);
            --padding-block-end: var(--padding-bottom);
            --border-block-start-width: var(--border-top-width);
            --border-block-end-width: var(--border-bottom-width);
            --border-inline-start-width: var(--border-left-width);
            --border-inline-end-width: var(--border-right-width)
        }

        body.rtl .e-con {
            --padding-inline-start: var(--padding-right);
            --padding-inline-end: var(--padding-left);
            --margin-inline-start: var(--margin-right);
            --margin-inline-end: var(--margin-left);
            --border-inline-start-width: var(--border-right-width);
            --border-inline-end-width: var(--border-left-width)
        }

        .e-con.e-flex {
            --flex-direction: column;
            --flex-basis: auto;
            --flex-grow: 0;
            --flex-shrink: 1;
            flex: var(--flex-grow) var(--flex-shrink) var(--flex-basis)
        }

        .e-con-full, .e-con > .e-con-inner {
            text-align: var(--text-align);
            padding-block-start: var(--padding-block-start);
            padding-block-end: var(--padding-block-end)
        }

        .e-con-full.e-flex, .e-con.e-flex > .e-con-inner {
            flex-direction: var(--flex-direction)
        }

        .e-con, .e-con > .e-con-inner {
            display: var(--display)
        }

        .e-con-boxed.e-flex {
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: normal;
            align-items: normal;
            align-content: normal
        }

        .e-con-boxed {
            text-align: initial;
            gap: initial
        }

        .e-con.e-flex > .e-con-inner {
            flex-wrap: var(--flex-wrap);
            justify-content: var(--justify-content);
            align-items: var(--align-items);
            align-content: var(--align-content);
            flex-basis: auto;
            flex-grow: 1;
            flex-shrink: 1;
            align-self: auto
        }

        .e-con > .e-con-inner {
            gap: var(--gap);
            width: 100%;
            max-width: var(--content-width);
            margin: 0 auto;
            padding-inline-start: 0;
            padding-inline-end: 0;
            height: 100%
        }

        :is(.elementor-section-wrap,[data-elementor-id]) > .e-con {
            --margin-left: auto;
            --margin-right: auto;
            max-width: min(100%, var(--width))
        }

        .e-con .elementor-widget.elementor-widget {
            margin-block-end: 0
        }

        .e-con:before, .e-con > .elementor-background-slideshow:before, .e-con > .elementor-motion-effects-container > .elementor-motion-effects-layer:before, :is(.e-con,.e-con>.e-con-inner) > .elementor-background-video-container:before {
            content: var(--background-overlay);
            display: block;
            position: absolute;
            mix-blend-mode: var(--overlay-mix-blend-mode);
            opacity: var(--overlay-opacity);
            transition: var(--overlay-transition, .3s);
            border-radius: var(--border-radius);
            border-style: var(--border-style);
            border-color: var(--border-color);
            border-block-start-width: var(--border-block-start-width);
            border-inline-end-width: var(--border-inline-end-width);
            border-block-end-width: var(--border-block-end-width);
            border-inline-start-width: var(--border-inline-start-width);
            top: calc(0px - var(--border-top-width));
            left: calc(0px - var(--border-left-width));
            width: max(100% + var(--border-left-width) + var(--border-right-width), 100%);
            height: max(100% + var(--border-top-width) + var(--border-bottom-width), 100%)
        }

        .e-con:before {
            transition: background var(--overlay-transition, .3s), border-radius var(--border-transition, .3s), opacity var(--overlay-transition, .3s)
        }

        .e-con > .elementor-background-slideshow, :is(.e-con,.e-con>.e-con-inner) > .elementor-background-video-container {
            border-radius: var(--border-radius);
            border-style: var(--border-style);
            border-color: var(--border-color);
            border-block-start-width: var(--border-block-start-width);
            border-inline-end-width: var(--border-inline-end-width);
            border-block-end-width: var(--border-block-end-width);
            border-inline-start-width: var(--border-inline-start-width);
            top: calc(0px - var(--border-top-width));
            left: calc(0px - var(--border-left-width));
            width: max(100% + var(--border-left-width) + var(--border-right-width), 100%);
            height: max(100% + var(--border-top-width) + var(--border-bottom-width), 100%)
        }

        :is(.e-con,.e-con>.e-con-inner) > .elementor-background-video-container:before {
            z-index: 1
        }

        :is(.e-con,.e-con>.e-con-inner) > .elementor-background-slideshow:before {
            z-index: 2
        }

        .e-con .elementor-widget {
            min-width: 0
        }

        .e-con .elementor-widget.e-widget-swiper {
            width: 100%
        }

        .e-con > .e-con-inner > .elementor-widget > .elementor-widget-container, .e-con > .elementor-widget > .elementor-widget-container {
            height: 100%
        }

        .e-con.e-con > .e-con-inner > .elementor-widget, .elementor.elementor .e-con > .elementor-widget {
            max-width: 100%
        }

        @media (max-width: 767px) {
            table table {
                font-size: .8em
            }

            table table td, table table th {
                padding: 7px;
                line-height: 1.3
            }

            table table th {
                font-weight: 400
            }

            #elementor-device-mode:after {
                content: "mobile"
            }

            .e-con.e-flex {
                --width: 100%;
                --flex-wrap: wrap
            }
        }

        .elementor-element .elementor-widget-container {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, transform var(--e-transform-transition-duration, .4s)
        }

        .elementor-button {
            display: inline-block;
            line-height: 1;
            background-color: #69727d;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 3px;
            color: #fff;
            fill: #fff;
            text-align: center;
            transition: all .3s
        }

        .elementor-button:focus, .elementor-button:hover, .elementor-button:visited {
            color: #fff
        }

        .elementor-button-content-wrapper {
            display: flex;
            justify-content: center
        }

        .elementor-button-text {
            flex-grow: 1;
            order: 10;
            display: inline-block
        }

        .elementor-button span {
            text-decoration: inherit
        }

        .elementor-element, .elementor-lightbox {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px
        }

        .elementor-element .swiper .swiper-slide figure, .elementor-element .swiper-container .swiper-slide figure, .elementor-lightbox .swiper .swiper-slide figure, .elementor-lightbox .swiper-container .swiper-slide figure {
            line-height: 0
        }

        .elementor-element .swiper .elementor-lightbox-content-source, .elementor-element .swiper-container .elementor-lightbox-content-source, .elementor-lightbox .swiper .elementor-lightbox-content-source, .elementor-lightbox .swiper-container .elementor-lightbox-content-source {
            display: none
        }

        .elementor-element .swiper .elementor-swiper-button, .elementor-element .swiper-container .elementor-swiper-button, .elementor-element .swiper-container ~ .elementor-swiper-button, .elementor-element .swiper ~ .elementor-swiper-button, .elementor-lightbox .swiper .elementor-swiper-button, .elementor-lightbox .swiper-container .elementor-swiper-button, .elementor-lightbox .swiper-container ~ .elementor-swiper-button, .elementor-lightbox .swiper ~ .elementor-swiper-button {
            position: absolute;
            display: inline-flex;
            z-index: 1;
            cursor: pointer;
            font-size: 25px;
            color: hsla(0, 0%, 93.3%, .9);
            top: 50%;
            transform: translateY(-50%)
        }

        .elementor-element .swiper .elementor-swiper-button svg, .elementor-element .swiper-container .elementor-swiper-button svg, .elementor-element .swiper-container ~ .elementor-swiper-button svg, .elementor-element .swiper ~ .elementor-swiper-button svg, .elementor-lightbox .swiper .elementor-swiper-button svg, .elementor-lightbox .swiper-container .elementor-swiper-button svg, .elementor-lightbox .swiper-container ~ .elementor-swiper-button svg, .elementor-lightbox .swiper ~ .elementor-swiper-button svg {
            fill: hsla(0, 0%, 93.3%, .9);
            height: 1em;
            width: 1em
        }

        .elementor-element .swiper .elementor-swiper-button-prev, .elementor-element .swiper-container .elementor-swiper-button-prev, .elementor-element .swiper-container ~ .elementor-swiper-button-prev, .elementor-element .swiper ~ .elementor-swiper-button-prev, .elementor-lightbox .swiper .elementor-swiper-button-prev, .elementor-lightbox .swiper-container .elementor-swiper-button-prev, .elementor-lightbox .swiper-container ~ .elementor-swiper-button-prev, .elementor-lightbox .swiper ~ .elementor-swiper-button-prev {
            left: 10px
        }

        .elementor-element .swiper .elementor-swiper-button-next, .elementor-element .swiper-container .elementor-swiper-button-next, .elementor-element .swiper-container ~ .elementor-swiper-button-next, .elementor-element .swiper ~ .elementor-swiper-button-next, .elementor-lightbox .swiper .elementor-swiper-button-next, .elementor-lightbox .swiper-container .elementor-swiper-button-next, .elementor-lightbox .swiper-container ~ .elementor-swiper-button-next, .elementor-lightbox .swiper ~ .elementor-swiper-button-next {
            right: 10px
        }

        .elementor-element .swiper .elementor-swiper-button.swiper-button-disabled, .elementor-element .swiper-container .elementor-swiper-button.swiper-button-disabled, .elementor-element .swiper-container ~ .elementor-swiper-button.swiper-button-disabled, .elementor-element .swiper ~ .elementor-swiper-button.swiper-button-disabled, .elementor-lightbox .swiper .elementor-swiper-button.swiper-button-disabled, .elementor-lightbox .swiper-container .elementor-swiper-button.swiper-button-disabled, .elementor-lightbox .swiper-container ~ .elementor-swiper-button.swiper-button-disabled, .elementor-lightbox .swiper ~ .elementor-swiper-button.swiper-button-disabled {
            opacity: .3
        }

        .elementor-element .swiper .swiper-image-stretch .swiper-slide .swiper-slide-image, .elementor-element .swiper-container .swiper-image-stretch .swiper-slide .swiper-slide-image, .elementor-lightbox .swiper .swiper-image-stretch .swiper-slide .swiper-slide-image, .elementor-lightbox .swiper-container .swiper-image-stretch .swiper-slide .swiper-slide-image {
            width: 100%
        }

        .elementor-element .swiper .swiper-horizontal > .swiper-pagination-bullets, .elementor-element .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper .swiper-pagination-custom, .elementor-element .swiper .swiper-pagination-fraction, .elementor-element .swiper-container .swiper-horizontal > .swiper-pagination-bullets, .elementor-element .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container .swiper-pagination-custom, .elementor-element .swiper-container .swiper-pagination-fraction, .elementor-element .swiper-container ~ .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper-container ~ .swiper-pagination-custom, .elementor-element .swiper-container ~ .swiper-pagination-fraction, .elementor-element .swiper ~ .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-element .swiper ~ .swiper-pagination-custom, .elementor-element .swiper ~ .swiper-pagination-fraction, .elementor-lightbox .swiper .swiper-horizontal > .swiper-pagination-bullets, .elementor-lightbox .swiper .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper .swiper-pagination-custom, .elementor-lightbox .swiper .swiper-pagination-fraction, .elementor-lightbox .swiper-container .swiper-horizontal > .swiper-pagination-bullets, .elementor-lightbox .swiper-container .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container .swiper-pagination-custom, .elementor-lightbox .swiper-container .swiper-pagination-fraction, .elementor-lightbox .swiper-container ~ .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper-container ~ .swiper-pagination-custom, .elementor-lightbox .swiper-container ~ .swiper-pagination-fraction, .elementor-lightbox .swiper ~ .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-lightbox .swiper ~ .swiper-pagination-custom, .elementor-lightbox .swiper ~ .swiper-pagination-fraction {
            bottom: 5px
        }

        .elementor-element .swiper-container.swiper-cube .elementor-swiper-button, .elementor-element .swiper-container.swiper-cube ~ .elementor-swiper-button, .elementor-element .swiper.swiper-cube .elementor-swiper-button, .elementor-element .swiper.swiper-cube ~ .elementor-swiper-button, .elementor-lightbox .swiper-container.swiper-cube .elementor-swiper-button, .elementor-lightbox .swiper-container.swiper-cube ~ .elementor-swiper-button, .elementor-lightbox .swiper.swiper-cube .elementor-swiper-button, .elementor-lightbox .swiper.swiper-cube ~ .elementor-swiper-button {
            transform: translate3d(0, -50%, 1px)
        }

        .elementor-element :where(.swiper-container-horizontal) ~ .swiper-pagination-bullets, .elementor-lightbox :where(.swiper-container-horizontal) ~ .swiper-pagination-bullets {
            bottom: 5px;
            left: 0;
            width: 100%
        }

        .elementor-element :where(.swiper-container-horizontal) ~ .swiper-pagination-bullets .swiper-pagination-bullet, .elementor-lightbox :where(.swiper-container-horizontal) ~ .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
        }

        .elementor-element :where(.swiper-container-horizontal) ~ .swiper-pagination-progressbar, .elementor-lightbox :where(.swiper-container-horizontal) ~ .swiper-pagination-progressbar {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0
        }

        .elementor-element.elementor-pagination-position-outside .swiper-container, .elementor-lightbox.elementor-pagination-position-outside .swiper, .elementor-lightbox.elementor-pagination-position-outside .swiper-container {
            padding-bottom: 30px
        }

        .elementor-element.elementor-pagination-position-outside .swiper-container .elementor-swiper-button, .elementor-element.elementor-pagination-position-outside .swiper-container ~ .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper-container .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper-container ~ .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper ~ .elementor-swiper-button {
            top: calc(50% - 30px / 2)
        }

        .elementor-lightbox .elementor-swiper {
            position: relative
        }

        .elementor-lightbox .elementor-main-swiper {
            position: static
        }

        .elementor-element.elementor-arrows-position-outside .swiper-container, .elementor-lightbox.elementor-arrows-position-outside .swiper, .elementor-lightbox.elementor-arrows-position-outside .swiper-container {
            width: calc(100% - 60px)
        }

        .elementor-element.elementor-arrows-position-outside .swiper-container .elementor-swiper-button-prev, .elementor-element.elementor-arrows-position-outside .swiper-container ~ .elementor-swiper-button-prev, .elementor-lightbox.elementor-arrows-position-outside .swiper .elementor-swiper-button-prev, .elementor-lightbox.elementor-arrows-position-outside .swiper-container .elementor-swiper-button-prev, .elementor-lightbox.elementor-arrows-position-outside .swiper-container ~ .elementor-swiper-button-prev, .elementor-lightbox.elementor-arrows-position-outside .swiper ~ .elementor-swiper-button-prev {
            left: 0
        }

        .elementor-element.elementor-arrows-position-outside .swiper-container .elementor-swiper-button-next, .elementor-element.elementor-arrows-position-outside .swiper-container ~ .elementor-swiper-button-next, .elementor-lightbox.elementor-arrows-position-outside .swiper .elementor-swiper-button-next, .elementor-lightbox.elementor-arrows-position-outside .swiper-container .elementor-swiper-button-next, .elementor-lightbox.elementor-arrows-position-outside .swiper-container ~ .elementor-swiper-button-next, .elementor-lightbox.elementor-arrows-position-outside .swiper ~ .elementor-swiper-button-next {
            right: 0
        }

        .elementor-lightbox {
            --lightbox-ui-color: hsla(0, 0%, 93.3%, 0.9);
            --lightbox-ui-color-hover: #fff;
            --lightbox-text-color: var(--lightbox-ui-color);
            --lightbox-header-icons-size: 20px;
            --lightbox-navigation-icons-size: 25px
        }

        .elementor-lightbox:not(.elementor-popup-modal) .dialog-header, .elementor-lightbox:not(.elementor-popup-modal) .dialog-message {
            text-align: center
        }

        .elementor-lightbox .dialog-header {
            display: none
        }

        .elementor-lightbox .dialog-widget-content {
            background: 0 0;
            box-shadow: none;
            width: 100%;
            height: 100%
        }

        .elementor-lightbox .dialog-message {
            animation-duration: .3s;
            height: 100%
        }

        .elementor-lightbox .dialog-message.dialog-lightbox-message {
            padding: 0
        }

        .elementor-lightbox .dialog-lightbox-close-button {
            cursor: pointer;
            position: absolute;
            font-size: var(--lightbox-header-icons-size);
            right: .75em;
            margin-top: 13px;
            padding: .25em;
            z-index: 2;
            line-height: 1;
            display: flex
        }

        .elementor-lightbox .dialog-lightbox-close-button svg {
            height: 1em;
            width: 1em
        }

        .elementor-lightbox .dialog-lightbox-close-button, .elementor-lightbox .elementor-swiper-button {
            color: var(--lightbox-ui-color);
            transition: all .3s;
            opacity: 1
        }

        .elementor-lightbox .dialog-lightbox-close-button svg, .elementor-lightbox .elementor-swiper-button svg {
            fill: var(--lightbox-ui-color)
        }

        .elementor-lightbox .dialog-lightbox-close-button:hover, .elementor-lightbox .elementor-swiper-button:hover {
            color: var(--lightbox-ui-color-hover)
        }

        .elementor-lightbox .dialog-lightbox-close-button:hover svg, .elementor-lightbox .elementor-swiper-button:hover svg {
            fill: var(--lightbox-ui-color-hover)
        }

        .elementor-lightbox .swiper, .elementor-lightbox .swiper-container {
            height: 100%
        }

        .elementor-lightbox .elementor-lightbox-item {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 70px;
            box-sizing: border-box;
            height: 100%;
            margin: auto
        }

        .elementor-lightbox .elementor-lightbox-image {
            max-height: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .elementor-lightbox .elementor-lightbox-image, .elementor-lightbox .elementor-lightbox-image:hover {
            opacity: 1;
            filter: none;
            border: none
        }

        .elementor-lightbox .elementor-lightbox-image {
            box-shadow: 0 0 30px rgba(0, 0, 0, .3), 0 0 8px -5px rgba(0, 0, 0, .3);
            border-radius: 2px
        }

        .elementor-lightbox .elementor-video-container {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .elementor-lightbox .elementor-video-container .elementor-video-landscape, .elementor-lightbox .elementor-video-container .elementor-video-portrait, .elementor-lightbox .elementor-video-container .elementor-video-square {
            width: 100%;
            height: 100%;
            margin: auto
        }

        .elementor-lightbox .elementor-video-container .elementor-video-landscape iframe, .elementor-lightbox .elementor-video-container .elementor-video-portrait iframe, .elementor-lightbox .elementor-video-container .elementor-video-square iframe {
            border: 0;
            background-color: #000
        }

        .elementor-lightbox .elementor-video-container .elementor-video-landscape iframe, .elementor-lightbox .elementor-video-container .elementor-video-landscape video, .elementor-lightbox .elementor-video-container .elementor-video-portrait iframe, .elementor-lightbox .elementor-video-container .elementor-video-portrait video, .elementor-lightbox .elementor-video-container .elementor-video-square iframe, .elementor-lightbox .elementor-video-container .elementor-video-square video {
            aspect-ratio: var(--video-aspect-ratio, 1.77777)
        }

        @supports not (aspect-ratio:1/1) {
            .elementor-lightbox .elementor-video-container .elementor-video-landscape, .elementor-lightbox .elementor-video-container .elementor-video-portrait, .elementor-lightbox .elementor-video-container .elementor-video-square {
                position: relative;
                overflow: hidden;
                height: 0;
                padding-bottom: calc(100% / var(--video-aspect-ratio, 1.77777))
            }

            .elementor-lightbox .elementor-video-container .elementor-video-landscape iframe, .elementor-lightbox .elementor-video-container .elementor-video-landscape video, .elementor-lightbox .elementor-video-container .elementor-video-portrait iframe, .elementor-lightbox .elementor-video-container .elementor-video-portrait video, .elementor-lightbox .elementor-video-container .elementor-video-square iframe, .elementor-lightbox .elementor-video-container .elementor-video-square video {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0
            }
        }

        .elementor-lightbox .elementor-video-container .elementor-video-square iframe, .elementor-lightbox .elementor-video-container .elementor-video-square video {
            width: min(90vh, 90vw);
            height: min(90vh, 90vw)
        }

        .elementor-lightbox .elementor-video-container .elementor-video-landscape iframe, .elementor-lightbox .elementor-video-container .elementor-video-landscape video {
            width: 100%;
            max-height: 90vh
        }

        .elementor-lightbox .elementor-video-container .elementor-video-portrait iframe, .elementor-lightbox .elementor-video-container .elementor-video-portrait video {
            height: 100%;
            max-width: 90vw
        }

        @media (min-width: 1025px) {
            .elementor-lightbox .elementor-video-container .elementor-video-landscape {
                width: 85vw;
                max-height: 85vh
            }

            .elementor-lightbox .elementor-video-container .elementor-video-portrait {
                height: 85vh;
                max-width: 85vw
            }
        }

        @media (max-width: 1024px) {
            .elementor-lightbox .elementor-video-container .elementor-video-landscape {
                width: 95vw;
                max-height: 95vh
            }

            .elementor-lightbox .elementor-video-container .elementor-video-portrait {
                height: 95vh;
                max-width: 95vw
            }
        }

        .elementor-lightbox .swiper .elementor-swiper-button-prev, .elementor-lightbox .swiper-container .elementor-swiper-button-prev {
            left: 0
        }

        .elementor-lightbox .swiper .elementor-swiper-button-next, .elementor-lightbox .swiper-container .elementor-swiper-button-next {
            right: 0
        }

        .elementor-lightbox .swiper .swiper-pagination-fraction, .elementor-lightbox .swiper-container .swiper-pagination-fraction {
            width: -moz-max-content;
            width: max-content;
            color: #fff
        }

        .elementor-lightbox .elementor-swiper-button:focus {
            outline-width: 1px
        }

        .elementor-lightbox .elementor-swiper-button-next, .elementor-lightbox .elementor-swiper-button-prev {
            height: 100%;
            display: flex;
            align-items: center;
            width: 15%;
            justify-content: center;
            font-size: var(--lightbox-navigation-icons-size)
        }

        @media (max-width: 767px) {
            .elementor-lightbox .elementor-lightbox-item {
                padding: 70px 0
            }

            .elementor-lightbox .elementor-swiper-button:focus {
                outline: 0
            }

            .elementor-lightbox .elementor-swiper-button-next, .elementor-lightbox .elementor-swiper-button-prev {
                width: 20%
            }

            .elementor-lightbox .elementor-swiper-button-next i, .elementor-lightbox .elementor-swiper-button-prev i {
                padding: 10px;
                background-color: rgba(0, 0, 0, .5)
            }

            .elementor-lightbox .elementor-swiper-button-prev {
                left: 0;
                justify-content: flex-start
            }

            .elementor-lightbox .elementor-swiper-button-next {
                right: 0;
                justify-content: flex-end
            }

            .elementor .elementor-hidden-mobile {
                display: none
            }
        }

        .elementor-slideshow__counter {
            color: currentColor;
            font-size: .75em;
            width: -moz-max-content;
            width: max-content
        }

        .elementor-slideshow__header {
            position: absolute;
            left: 0;
            width: 100%;
            padding: 15px 20px;
            transition: .3s
        }

        .elementor-slideshow__header {
            color: var(--lightbox-ui-color);
            display: flex;
            flex-direction: row-reverse;
            font-size: var(--lightbox-header-icons-size);
            padding-inline-start: 1em;
            padding-inline-end: 2.6em;
            top: 0;
            align-items: center;
            z-index: 10
        }

        .elementor-slideshow__header > i, .elementor-slideshow__header > svg {
            cursor: pointer;
            padding: .25em;
            margin: 0 .35em
        }

        .elementor-slideshow__header > i {
            font-size: inherit
        }

        .elementor-slideshow__header > i:hover {
            color: var(--lightbox-ui-color-hover)
        }

        .elementor-slideshow__header > svg {
            box-sizing: content-box;
            fill: var(--lightbox-ui-color);
            height: 1em;
            width: 1em
        }

        .elementor-slideshow__header > svg:hover {
            fill: var(--lightbox-ui-color-hover)
        }

        .elementor-slideshow__header .elementor-slideshow__counter {
            margin-inline-end: auto
        }

        .elementor-slideshow__header .elementor-icon-share {
            z-index: 5
        }

        .elementor-slideshow--ui-hidden .elementor-slideshow__header {
            opacity: 0;
            pointer-events: none
        }

        .elementor-slideshow--fullscreen-mode .elementor-video-container {
            width: 100%
        }

        .elementor-slideshow--zoom-mode .elementor-slideshow__header {
            background-color: rgba(0, 0, 0, .5)
        }

        .animated {
            animation-duration: 1.25s
        }

        .animated.infinite {
            animation-iteration-count: infinite
        }

        .animated.reverse {
            animation-direction: reverse;
            animation-fill-mode: forwards
        }

        @media (prefers-reduced-motion: reduce) {
            .animated {
                animation: none
            }
        }

        .elementor-shape {
            overflow: hidden;
            position: absolute;
            left: 0;
            width: 100%;
            line-height: 0;
            direction: ltr
        }

        .elementor-shape-top {
            top: -1px
        }

        .elementor-shape svg {
            display: block;
            width: calc(100% + 1.3px);
            position: relative;
            left: 50%;
            transform: translateX(-50%)
        }

        .elementor-shape .elementor-shape-fill {
            fill: #fff;
            transform-origin: center;
            transform: rotateY(0)
        }

        #wpadminbar * {
            font-style: normal
        }

        .elementor-post__thumbnail__link {
            transition: none
        }

        .elementor .elementor-element ul.elementor-icon-list-items, .elementor-edit-area .elementor-element ul.elementor-icon-list-items {
            padding: 0
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .elementor .elementor-hidden-tablet {
                display: none
            }
        }

        @media (min-width: 1025px) and (max-width: 99999px) {
            .elementor .elementor-hidden-desktop {
                display: none
            }
        }

        :where(.elementor-widget-n-accordion .e-n-accordion-item>.e-con) {
            border: var(--n-accordion-border-width) var(--n-accordion-border-style) var(--n-accordion-border-color)
        }

        .elementor-kit-6 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-color-011c9f3: #000B32;
            --e-global-color-0024921: #FFFFFF;
            --e-global-color-61f763c: #E43B2C;
            --e-global-color-519757a: #0171E1;
            --e-global-color-1fd20c4: #0044FF;
            --e-global-color-3f7b2c6: #0A0A0B;
            --e-global-color-d81dce3: #F5F5F5;
            --e-global-color-0b0cb5a: #000000;
            --e-global-typography-primary-font-family: "Plus Jakarta Sans";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Plus Jakarta Sans";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Plus Jakarta Sans";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Plus Jakarta Sans";
            --e-global-typography-accent-font-weight: 500;
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .elementor-kit-6 a {
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .elementor-kit-6 h1 {
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .elementor-kit-6 h2 {
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .elementor-kit-6 h3 {
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .elementor-kit-6 h4 {
            font-family: "Plus Jakarta Sans", Sans-serif
        }

        .e-con {
            --container-max-width: 1140px
        }

        .elementor-widget:not(:last-child) {
            margin-block-end: 20px
        }

        .elementor-element {
            --widgets-spacing: 20px 20px
        }

        .site-header {
            padding-inline-end: 0px;
            padding-inline-start: 0px
        }

        @media (max-width: 1024px) {
            .e-con {
                --container-max-width: 1024px
            }
        }

        :root {
            --swiper-theme-color: #007aff
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1
        }

        .swiper-vertical > .swiper-wrapper {
            flex-direction: column
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box
        }

        .swiper-android .swiper-slide, .swiper-wrapper {
            transform: translate3d(0, 0, 0)
        }

        .swiper-pointer-events {
            touch-action: pan-y
        }

        .swiper-pointer-events.swiper-vertical {
            touch-action: pan-x
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform
        }

        .swiper-slide-invisible-blank {
            visibility: hidden
        }

        .swiper-autoheight, .swiper-autoheight .swiper-slide {
            height: auto
        }

        .swiper-autoheight .swiper-wrapper {
            align-items: flex-start;
            transition-property: transform, height
        }

        .swiper-backface-hidden .swiper-slide {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .swiper-3d, .swiper-3d.swiper-css-mode .swiper-wrapper {
            perspective: 1200px
        }

        .swiper-3d .swiper-cube-shadow, .swiper-3d .swiper-slide, .swiper-3d .swiper-slide-shadow, .swiper-3d .swiper-slide-shadow-bottom, .swiper-3d .swiper-slide-shadow-left, .swiper-3d .swiper-slide-shadow-right, .swiper-3d .swiper-slide-shadow-top, .swiper-3d .swiper-wrapper {
            transform-style: preserve-3d
        }

        .swiper-3d .swiper-slide-shadow, .swiper-3d .swiper-slide-shadow-bottom, .swiper-3d .swiper-slide-shadow-left, .swiper-3d .swiper-slide-shadow-right, .swiper-3d .swiper-slide-shadow-top {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10
        }

        .swiper-3d .swiper-slide-shadow {
            background: rgba(0, 0, 0, .15)
        }

        .swiper-3d .swiper-slide-shadow-left {
            background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-3d .swiper-slide-shadow-right {
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-3d .swiper-slide-shadow-top {
            background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-3d .swiper-slide-shadow-bottom {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-css-mode > .swiper-wrapper {
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none
        }

        .swiper-css-mode > .swiper-wrapper::-webkit-scrollbar {
            display: none
        }

        .swiper-css-mode > .swiper-wrapper > .swiper-slide {
            scroll-snap-align: start start
        }

        .swiper-horizontal.swiper-css-mode > .swiper-wrapper {
            scroll-snap-type: x mandatory
        }

        .swiper-vertical.swiper-css-mode > .swiper-wrapper {
            scroll-snap-type: y mandatory
        }

        .swiper-centered > .swiper-wrapper::before {
            content: '';
            flex-shrink: 0;
            order: 9999
        }

        .swiper-centered.swiper-horizontal > .swiper-wrapper > .swiper-slide:first-child {
            margin-inline-start: var(--swiper-centered-offset-before)
        }

        .swiper-centered.swiper-horizontal > .swiper-wrapper::before {
            height: 100%;
            min-height: 1px;
            width: var(--swiper-centered-offset-after)
        }

        .swiper-centered.swiper-vertical > .swiper-wrapper > .swiper-slide:first-child {
            margin-block-start: var(--swiper-centered-offset-before)
        }

        .swiper-centered.swiper-vertical > .swiper-wrapper::before {
            width: 100%;
            min-width: 1px;
            height: var(--swiper-centered-offset-after)
        }

        .swiper-centered > .swiper-wrapper > .swiper-slide {
            scroll-snap-align: center center
        }

        .swiper-virtual .swiper-slide {
            -webkit-backface-visibility: hidden;
            transform: translateZ(0)
        }

        .swiper-virtual.swiper-css-mode .swiper-wrapper::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none
        }

        .swiper-virtual.swiper-css-mode.swiper-horizontal .swiper-wrapper::after {
            height: 1px;
            width: var(--swiper-virtual-size)
        }

        .swiper-virtual.swiper-css-mode.swiper-vertical .swiper-wrapper::after {
            width: 1px;
            height: var(--swiper-virtual-size)
        }

        :root {
            --swiper-navigation-size: 44px
        }

        .swiper-button-next, .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: calc(var(--swiper-navigation-size) / 44 * 27);
            height: var(--swiper-navigation-size);
            margin-top: calc(0px - (var(--swiper-navigation-size) / 2));
            z-index: 10;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--swiper-navigation-color, var(--swiper-theme-color))
        }

        .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {
            opacity: .35;
            cursor: auto;
            pointer-events: none
        }

        .swiper-button-next.swiper-button-hidden, .swiper-button-prev.swiper-button-hidden {
            opacity: 0;
            cursor: auto;
            pointer-events: none
        }

        .swiper-navigation-disabled .swiper-button-next, .swiper-navigation-disabled .swiper-button-prev {
            display: none !important
        }

        .swiper-button-next:after, .swiper-button-prev:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none !important;
            letter-spacing: 0;
            font-variant: initial;
            line-height: 1
        }

        .swiper-button-prev, .swiper-rtl .swiper-button-next {
            left: 10px;
            right: auto
        }

        .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
            content: 'prev'
        }

        .swiper-button-next, .swiper-rtl .swiper-button-prev {
            right: 10px;
            left: auto
        }

        .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
            content: 'next'
        }

        .swiper-button-lock {
            display: none
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: .3s opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0
        }

        .swiper-pagination-disabled > .swiper-pagination, .swiper-pagination.swiper-pagination-disabled {
            display: none !important
        }

        .swiper-horizontal > .swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%
        }

        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transform: scale(.33);
            position: relative
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            transform: scale(1)
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            transform: scale(1)
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            transform: scale(.66)
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            transform: scale(.33)
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            transform: scale(.66)
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            transform: scale(.33)
        }

        .swiper-pagination-bullet {
            width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px));
            height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
            display: inline-block;
            border-radius: 50%;
            background: var(--swiper-pagination-bullet-inactive-color, #000);
            opacity: var(--swiper-pagination-bullet-inactive-opacity, .2)
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -webkit-appearance: none;
            appearance: none
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer
        }

        .swiper-pagination-bullet:only-child {
            display: none !important
        }

        .swiper-pagination-bullet-active {
            opacity: var(--swiper-pagination-bullet-opacity, 1);
            background: var(--swiper-pagination-color, var(--swiper-theme-color))
        }

        .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical > .swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            transform: translate3d(0, -50%, 0)
        }

        .swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
            margin: var(--swiper-pagination-bullet-vertical-gap, 6px) 0;
            display: block
        }

        .swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic, .swiper-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            transform: translateY(-50%);
            width: 8px
        }

        .swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet, .swiper-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            transition: .2s transform, .2s top
        }

        .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
        }

        .swiper-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic, .swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap
        }

        .swiper-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: .2s transform, .2s left
        }

        .swiper-horizontal.swiper-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: .2s transform, .2s right
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, .25);
            position: absolute
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top
        }

        .swiper-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            transform-origin: right top
        }

        .swiper-horizontal > .swiper-pagination-progressbar, .swiper-pagination-progressbar.swiper-pagination-horizontal, .swiper-pagination-progressbar.swiper-pagination-vertical.swiper-pagination-progressbar-opposite, .swiper-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0
        }

        .swiper-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite, .swiper-pagination-progressbar.swiper-pagination-horizontal.swiper-pagination-progressbar-opposite, .swiper-pagination-progressbar.swiper-pagination-vertical, .swiper-vertical > .swiper-pagination-progressbar {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0
        }

        .swiper-pagination-lock {
            display: none
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, .1)
        }

        .swiper-scrollbar-disabled > .swiper-scrollbar, .swiper-scrollbar.swiper-scrollbar-disabled {
            display: none !important
        }

        .swiper-horizontal > .swiper-scrollbar, .swiper-scrollbar.swiper-scrollbar-horizontal {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%
        }

        .swiper-scrollbar.swiper-scrollbar-vertical, .swiper-vertical > .swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, .5);
            border-radius: 10px;
            left: 0;
            top: 0
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move
        }

        .swiper-scrollbar-lock {
            display: none
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center
        }

        .swiper-zoom-container > canvas, .swiper-zoom-container > img, .swiper-zoom-container > svg {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain
        }

        .swiper-slide-zoomed {
            cursor: move
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            transform-origin: 50%;
            box-sizing: border-box;
            border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
            border-radius: 50%;
            border-top-color: transparent
        }

        .swiper-watch-progress .swiper-slide-visible .swiper-lazy-preloader, .swiper:not(.swiper-watch-progress) .swiper-lazy-preloader {
            animation: 1s linear infinite swiper-preloader-spin
        }

        .swiper-lazy-preloader-white {
            --swiper-preloader-color: #fff
        }

        .swiper-lazy-preloader-black {
            --swiper-preloader-color: #000
        }

        @keyframes swiper-preloader-spin {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .swiper .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000
        }

        .swiper-free-mode > .swiper-wrapper {
            transition-timing-function: ease-out;
            margin: 0 auto
        }

        .swiper-grid > .swiper-wrapper {
            flex-wrap: wrap
        }

        .swiper-grid-column > .swiper-wrapper {
            flex-wrap: wrap;
            flex-direction: column
        }

        .swiper-fade.swiper-free-mode .swiper-slide {
            transition-timing-function: ease-out
        }

        .swiper-fade .swiper-slide {
            pointer-events: none;
            transition-property: opacity
        }

        .swiper-fade .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-fade .swiper-slide-active, .swiper-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto
        }

        .swiper-cube {
            overflow: visible
        }

        .swiper-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            transform-origin: 0 0;
            width: 100%;
            height: 100%
        }

        .swiper-cube .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-cube.swiper-rtl .swiper-slide {
            transform-origin: 100% 0
        }

        .swiper-cube .swiper-slide-active, .swiper-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto
        }

        .swiper-cube .swiper-slide-active, .swiper-cube .swiper-slide-next, .swiper-cube .swiper-slide-next + .swiper-slide, .swiper-cube .swiper-slide-prev {
            pointer-events: auto;
            visibility: visible
        }

        .swiper-cube .swiper-slide-shadow-bottom, .swiper-cube .swiper-slide-shadow-left, .swiper-cube .swiper-slide-shadow-right, .swiper-cube .swiper-slide-shadow-top {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .swiper-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: .6;
            z-index: 0
        }

        .swiper-cube .swiper-cube-shadow:before {
            content: '';
            background: #000;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            filter: blur(50px)
        }

        .swiper-flip {
            overflow: visible
        }

        .swiper-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1
        }

        .swiper-flip .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-flip .swiper-slide-active, .swiper-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto
        }

        .swiper-flip .swiper-slide-shadow-bottom, .swiper-flip .swiper-slide-shadow-left, .swiper-flip .swiper-slide-shadow-right, .swiper-flip .swiper-slide-shadow-top {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .swiper-creative .swiper-slide {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            overflow: hidden;
            transition-property: transform, opacity, height
        }

        .swiper-cards {
            overflow: visible
        }

        .swiper-cards .swiper-slide {
            transform-origin: center bottom;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            overflow: hidden
        }

        .elementor-location-footer:before, .elementor-location-header:before {
            content: "";
            display: table;
            clear: both
        }

        .elementor-sticky--active {
            z-index: 99
        }

        .e-con.elementor-sticky--active {
            z-index: var(--z-index, 99)
        }

        [data-elementor-type=popup]:not(.elementor-edit-area) {
            display: none
        }

        .elementor-popup-modal {
            display: flex;
            pointer-events: none;
            background-color: transparent;
            -webkit-user-select: auto;
            -moz-user-select: auto;
            user-select: auto
        }

        .elementor-popup-modal .dialog-buttons-wrapper, .elementor-popup-modal .dialog-header {
            display: none
        }

        .elementor-popup-modal .dialog-close-button {
            display: none;
            top: 20px;
            margin-top: 0;
            right: 20px;
            opacity: 1;
            z-index: 9999;
            pointer-events: all
        }

        .elementor-popup-modal .dialog-close-button svg {
            fill: #1f2124;
            height: 1em;
            width: 1em
        }

        .elementor-popup-modal .dialog-widget-content {
            background-color: #fff;
            width: auto;
            overflow: visible;
            max-width: 100%;
            max-height: 100%;
            border-radius: 0;
            box-shadow: none;
            pointer-events: all
        }

        .elementor-popup-modal .dialog-message {
            width: 640px;
            max-width: 100vw;
            max-height: 100vh;
            padding: 0;
            overflow: auto;
            display: flex
        }

        .elementor-popup-modal .elementor {
            width: 100%
        }

        .elementor-motion-effects-element, .elementor-motion-effects-layer {
            transition-property: transform, opacity;
            transition-timing-function: cubic-bezier(0, .33, .07, 1.03);
            transition-duration: 1s
        }

        .elementor-motion-effects-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transform-origin: var(--e-transform-origin-y) var(--e-transform-origin-x)
        }

        .elementor-motion-effects-layer {
            position: absolute;
            top: 0;
            left: 0;
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-motion-effects-perspective {
            perspective: 1200px
        }

        .elementor-motion-effects-element {
            transform-origin: var(--e-transform-origin-y) var(--e-transform-origin-x)
        }

        .elementor-widget-heading .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-text-editor {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent)
        }

        .elementor-widget-image-box .elementor-image-box-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text)
        }

        .elementor-widget-icon-list .elementor-icon-list-icon svg {
            fill: var(--e-global-color-primary)
        }

        .elementor-widget-icon-list .elementor-icon-list-item > .elementor-icon-list-text, .elementor-widget-icon-list .elementor-icon-list-item > a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            color: var(--e-global-color-secondary)
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle div, .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-circle-progress {
            border-color: var(--e-global-color-secondary)
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-left-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-right-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-premium-addon-progressbar svg:not([class*=premium-]) {
            fill: var(--e-global-color-primary)
        }

        .elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-text);
            fill: var(--e-global-color-text)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active, .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.highlighted, .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus, .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover {
            color: var(--e-global-color-accent);
            fill: var(--e-global-color-accent)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after, .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before {
            background-color: var(--e-global-color-accent)
        }

        .elementor-widget-nav-menu {
            --e-nav-menu-divider-color: var(--e-global-color-text)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item, .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight)
        }

        .elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button, .elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button:hover {
            color: var(--e-global-color-text);
            fill: var(--e-global-color-text)
        }

        .elementor-widget-breadcrumbs {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight)
        }

        .elementor-915 .elementor-element.elementor-element-d1d2202 {
            --display: flex;
            --min-height: 236px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: center;
            --background-transition: 0.3s
        }

        .elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background), .elementor-915 .elementor-element.elementor-element-d1d2202 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: var(--wpr-bg-f60a2d13-8da8-46e8-8b99-fff077474c19);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-915 .elementor-element.elementor-element-d1d2202, .elementor-915 .elementor-element.elementor-element-d1d2202::before {
            --border-transition: 0.3s
        }

        .elementor-915 .elementor-element.elementor-element-162fba8 {
            text-align: center
        }

        .elementor-915 .elementor-element.elementor-element-162fba8 .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-915 .elementor-element.elementor-element-a2927cc a {
            color: var(--e-global-color-1fd20c4)
        }

        .elementor-915 .elementor-element.elementor-element-2bbdf4d {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 50px;
            --padding-bottom: 50px;
            --padding-left: 20px;
            --padding-right: 20px
        }

        :root {
            --page-title-display: none
        }

        body.elementor-page-915:not(.elementor-motion-effects-element-type-background), body.elementor-page-915 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: var(--e-global-color-3f7b2c6)
        }

        @media (max-width: 767px) {
            .e-con {
                --container-max-width: 767px
            }

            .elementor-915 .elementor-element.elementor-element-162fba8 .elementor-heading-title {
                font-size: 30px
            }
        }

        .elementor-418 .elementor-element.elementor-element-99441e1 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --background-transition: 0.3s;
            --z-index: 100
        }

        .elementor-418 .elementor-element.elementor-element-99441e1:not(.elementor-motion-effects-element-type-background), .elementor-418 .elementor-element.elementor-element-99441e1 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #02010100
        }

        .elementor-418 .elementor-element.elementor-element-99441e1, .elementor-418 .elementor-element.elementor-element-99441e1::before {
            --border-transition: 0.3s
        }

        .elementor-418 .elementor-element.elementor-element-dce299f {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-start;
            --background-transition: 0.3s
        }

        .elementor-418 .elementor-element.elementor-element-dce299f.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-menu-toggle {
            margin-left: auto
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu .elementor-item {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-0024921);
            fill: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item.elementor-item-active, .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item.highlighted, .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item:focus, .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item:hover {
            color: var(--e-global-color-0024921);
            fill: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after, .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main .elementor-item.elementor-item-active {
            color: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item.elementor-item-active:after, .elementor-418 .elementor-element.elementor-element-aa45581 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item.elementor-item-active:before {
            background-color: var(--e-global-color-1fd20c4)
        }

        body:not(.rtl) .elementor-418 .elementor-element.elementor-element-aa45581 {
            right: 0
        }

        body.rtl .elementor-418 .elementor-element.elementor-element-aa45581 {
            left: 0
        }

        .elementor-418 .elementor-element.elementor-element-aa45581 {
            top: 0
        }

        .elementor-418 .elementor-element.elementor-element-15b044c {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --background-transition: 0.3s
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-menu-toggle {
            margin: 0 auto
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu .elementor-item {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-0024921);
            fill: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item.elementor-item-active, .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item.highlighted, .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item:focus, .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item:hover {
            color: var(--e-global-color-0024921);
            fill: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after, .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main .elementor-item.elementor-item-active {
            color: var(--e-global-color-0024921)
        }

        .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item.elementor-item-active:after, .elementor-418 .elementor-element.elementor-element-25d9422 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item.elementor-item-active:before {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-418 .elementor-element.elementor-element-4324b6b .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: #0044FF00;
            border-style: solid;
            border-width: 2px;
            border-color: #fff;
            border-radius: 20px 20px 20px 20px;
            padding: 10px 20px
        }

        .elementor-418 .elementor-element.elementor-element-4324b6b .elementor-button:focus, .elementor-418 .elementor-element.elementor-element-4324b6b .elementor-button:hover {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-418 .elementor-element.elementor-element-a535265 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: #04f;
            border-radius: 20px 20px 20px 20px
        }

        @media (max-width: 767px) {
            .elementor-418 .elementor-element.elementor-element-dce299f {
                --flex-direction: row;
                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
                --container-widget-height: 100%;
                --container-widget-flex-grow: 1;
                --container-widget-align-self: stretch;
                --justify-content: center;
                --align-items: center
            }

            body:not(.rtl) .elementor-418 .elementor-element.elementor-element-aa45581 {
                right: 10px
            }

            body.rtl .elementor-418 .elementor-element.elementor-element-aa45581 {
                left: 10px
            }

            .elementor-418 .elementor-element.elementor-element-aa45581 {
                top: 15px
            }
        }

        .elementor-593 .elementor-element.elementor-element-e6dd587 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --z-index: 9
        }

        .elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background), .elementor-593 .elementor-element.elementor-element-e6dd587 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: var(--wpr-bg-b55458fa-2e09-4e92-9bd2-246dde5515ff);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-593 .elementor-element.elementor-element-e6dd587, .elementor-593 .elementor-element.elementor-element-e6dd587::before {
            --border-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-0dbb581 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            border-style: solid;
            --border-style: solid;
            border-width: 0 0 2px;
            --border-top-width: 0px;
            --border-right-width: 0px;
            --border-bottom-width: 2px;
            --border-left-width: 0px;
            border-color: var(--e-global-color-1fd20c4);
            --border-color: var(--e-global-color-1fd20c4)
        }

        .elementor-593 .elementor-element.elementor-element-0dbb581, .elementor-593 .elementor-element.elementor-element-0dbb581::before {
            --border-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-8b522ee {
            --display: flex;
            --justify-content: flex-end;
            --background-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-8b522ee.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-593 .elementor-element.elementor-element-f7d61ae img {
            width: 100%
        }

        .elementor-593 .elementor-element.elementor-element-02a1ae7 {
            --display: flex;
            --justify-content: center;
            --background-transition: 0.3s;
            --margin-top: 10px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        .elementor-593 .elementor-element.elementor-element-02a1ae7.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-593 .elementor-element.elementor-element-a0a8070 .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 700;
            text-transform: capitalize
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(34px / 2)
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(34px / 2)
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(34px / 2);
            margin-left: calc(34px / 2)
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-34px / 2);
            margin-left: calc(-34px / 2)
        }

        body.rtl .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-34px / 2)
        }

        body:not(.rtl) .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-34px / 2)
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-icon svg {
            transition: fill .3s
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 {
            --e-icon-list-icon-size: 14px;
            --icon-vertical-offset: 0px
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-item > a {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize
        }

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-text {
            color: var(--e-global-color-0024921);
            transition: color .3s
        }

        .elementor-593 .elementor-element.elementor-element-9edf05f {
            --display: flex;
            --justify-content: center;
            --align-items: flex-start;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --margin-top: 10px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        .elementor-593 .elementor-element.elementor-element-3c132da .elementor-heading-title {
            color: #04f;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 700;
            text-transform: capitalize
        }

        .elementor-593 .elementor-element.elementor-element-5a6bf55 .elementor-icon-list-icon svg {
            fill: var(--e-global-color-1fd20c4);
            transition: fill .3s
        }

        .elementor-593 .elementor-element.elementor-element-5a6bf55 {
            --e-icon-list-icon-size: 14px;
            --icon-vertical-offset: 0px
        }

        .elementor-593 .elementor-element.elementor-element-5a6bf55 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-593 .elementor-element.elementor-element-5a6bf55 .elementor-icon-list-item > a {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize
        }

        .elementor-593 .elementor-element.elementor-element-5a6bf55 .elementor-icon-list-text {
            color: var(--e-global-color-0024921);
            transition: color .3s
        }

        .elementor-593 .elementor-element.elementor-element-bb9123f {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-3f2ccee {
            color: #fff;
            font-family: Inter, Sans-serif;
            font-size: 11px;
            font-weight: 400
        }

        .elementor-593 .elementor-element.elementor-element-123e18b {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            border-style: solid;
            --border-style: solid;
            border-width: 2px 0 0;
            --border-top-width: 2px;
            --border-right-width: 0px;
            --border-bottom-width: 0px;
            --border-left-width: 0px;
            border-color: var(--e-global-color-1fd20c4);
            --border-color: var(--e-global-color-1fd20c4)
        }

        .elementor-593 .elementor-element.elementor-element-123e18b, .elementor-593 .elementor-element.elementor-element-123e18b::before {
            --border-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-8ddd329 {
            --display: flex;
            --align-items: flex-start;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-4ab1aa2.elementor-position-left .elementor-image-box-img {
            margin-right: 10px
        }

        .elementor-593 .elementor-element.elementor-element-4ab1aa2 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 10%
        }

        .elementor-593 .elementor-element.elementor-element-4ab1aa2 .elementor-image-box-img img {
            transition-duration: .3s
        }

        .elementor-593 .elementor-element.elementor-element-4ab1aa2 .elementor-image-box-title {
            color: #fff;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-size: 16px;
            font-weight: 600
        }

        .elementor-593 .elementor-element.elementor-element-6893b86 {
            --display: flex;
            --align-items: center;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-712a224 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 12px;
            font-weight: 600
        }

        .elementor-593 .elementor-element.elementor-element-1d54d7a {
            --display: flex;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s
        }

        .elementor-593 .elementor-element.elementor-element-13f9af8 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 12px;
            font-weight: 600
        }

        @media (max-width: 767px) {
            .elementor-593 .elementor-element.elementor-element-f7d61ae {
                text-align: left
            }

            .elementor-593 .elementor-element.elementor-element-f7d61ae img {
                max-width: 29%
            }

            .elementor-593 .elementor-element.elementor-element-8ddd329 {
                --align-items: flex-start;
                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%)
            }

            .elementor-593 .elementor-element.elementor-element-4ab1aa2 .elementor-image-box-img {
                margin-bottom: 10px
            }

            .elementor-593 .elementor-element.elementor-element-6893b86 {
                --align-items: flex-start;
                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%)
            }

            .elementor-593 .elementor-element.elementor-element-1d54d7a {
                --align-items: flex-start;
                --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%)
            }
        }

        @media (min-width: 768px) {
            .elementor-418 .elementor-element.elementor-element-99441e1 {
                --content-width: 1240px
            }

            .elementor-418 .elementor-element.elementor-element-dce299f {
                --width: 20%
            }

            .elementor-418 .elementor-element.elementor-element-15b044c {
                --width: 80%
            }

            .elementor-593 .elementor-element.elementor-element-e6dd587 {
                --content-width: 1240px
            }

            .elementor-593 .elementor-element.elementor-element-0dbb581 {
                --content-width: 1240px
            }

            .elementor-593 .elementor-element.elementor-element-8b522ee {
                --width: 17.143%
            }

            .elementor-593 .elementor-element.elementor-element-02a1ae7 {
                --width: 45.802%
            }

            .elementor-593 .elementor-element.elementor-element-bb9123f {
                --content-width: 1240px
            }

            .elementor-593 .elementor-element.elementor-element-123e18b {
                --content-width: 1240px
            }
        }

        .elementor-210 .elementor-element.elementor-element-9feaccc {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s
        }

        .elementor-210 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar, .elementor-210 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar-wrap {
            height: 34px
        }

        .elementor-210 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar, .elementor-210 .elementor-element.elementor-element-1dafeda .segment-inner {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-210 .elementor-element.elementor-element-1dafeda .premium-progressbar-left-label {
            color: #fff;
            margin: 19px 0 -29px 20px
        }

        .elementor-210 .elementor-element.elementor-element-1dafeda > .elementor-widget-container {
            margin: 0 0 -40px
        }

        .elementor-210 .elementor-element.elementor-element-2c9ac6f {
            text-align: center
        }

        .elementor-210 .elementor-element.elementor-element-2c9ac6f .elementor-heading-title {
            color: #000;
            font-family: Roboto, Sans-serif;
            font-size: 28px;
            font-weight: 600
        }

        .elementor-210 .elementor-element.elementor-element-2c9ac6f > .elementor-widget-container {
            margin: 0 0 13px
        }

        .elementor-210 .elementor-element.elementor-element-4cc3451 {
            --display: flex;
            --background-transition: 0.3s;
            --border-radius: 5px 5px 5px 5px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .18);
            --padding-top: 35px;
            --padding-bottom: 35px;
            --padding-left: 35px;
            --padding-right: 35px
        }

        .elementor-210 .elementor-element.elementor-element-28ee838 > .elementor-widget-container {
            margin: -42px 0 -24px
        }

        .elementor-210 .elementor-element.elementor-element-3bd8e01 img {
            width: 120px
        }

        .elementor-210 .elementor-element.elementor-element-a2e3395 {
            width: 100%;
            max-width: 100%
        }

        .elementor-210 .elementor-element.elementor-element-8c697f2 {
            text-align: center;
            color: #141414;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        #elementor-popup-modal-210 .dialog-message {
            width: 700px;
            height: auto;
            padding: 20px
        }

        #elementor-popup-modal-210 {
            justify-content: center;
            align-items: center;
            pointer-events: all;
            background-color: rgba(0, 0, 0, .8)
        }

        #elementor-popup-modal-210 .dialog-close-button {
            display: flex;
            top: 0;
            background-color: #1f1f1f;
            font-size: 26px
        }

        #elementor-popup-modal-210 .dialog-widget-content {
            border-style: solid;
            border-width: 11px;
            border-color: #cbd5e0;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2)
        }

        body:not(.rtl) #elementor-popup-modal-210 .dialog-close-button {
            right: 0
        }

        body.rtl #elementor-popup-modal-210 .dialog-close-button {
            left: 0
        }

        #elementor-popup-modal-210 .dialog-close-button i {
            color: #fff
        }

        #elementor-popup-modal-210 .dialog-close-button svg {
            fill: #FFFFFF
        }

        .elementor-210 .elementor-element.elementor-element-1dafeda .premium-progressbar-left-label {
            z-index: 99999999 !important;
            position: relative !important
        }

        .elementor-210 .elementor-element.elementor-element-28ee838 .SubmitButton {
            width: 100%;
            font-size: 20px;
            font-weight: 600;
            height: 60px
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload), .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important
        }

        @media screen and (max-height: 1024px) {
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload), .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important
            }
        }

        @media screen and (max-height: 640px) {
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload), .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important
            }
        }

        .overlay {
            width: 100%
        }

        .elementor-widget-image {
            text-align: center
        }

        .elementor-widget-image a {
            display: inline-block
        }

        .elementor-widget-image a img[src$=".svg"] {
            width: 48px
        }

        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block
        }

        .elementor-item:after, .elementor-item:before {
            display: block;
            position: absolute;
            transition: .3s;
            transition-timing-function: cubic-bezier(.58, .3, .005, 1)
        }

        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):after, .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):before {
            opacity: 0
        }

        .elementor-item-active:after, .elementor-item-active:before, .elementor-item.highlighted:after, .elementor-item.highlighted:before, .elementor-item:focus:after, .elementor-item:focus:before, .elementor-item:hover:after, .elementor-item:hover:before {
            transform: scale(1)
        }

        .e--pointer-underline .elementor-item:after, .e--pointer-underline .elementor-item:before {
            height: 3px;
            width: 100%;
            left: 0;
            background-color: #3f444b;
            z-index: 2
        }

        .e--pointer-underline .elementor-item:after {
            content: "";
            bottom: 0
        }

        .elementor-nav-menu--main .elementor-nav-menu a {
            transition: .4s
        }

        .elementor-nav-menu--main .elementor-nav-menu a, .elementor-nav-menu--main .elementor-nav-menu a.highlighted, .elementor-nav-menu--main .elementor-nav-menu a:focus, .elementor-nav-menu--main .elementor-nav-menu a:hover {
            padding: 13px 20px
        }

        .elementor-nav-menu--main .elementor-nav-menu a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu--main .elementor-nav-menu a.disabled {
            background: #3f444b;
            color: #88909b
        }

        .elementor-nav-menu--main .elementor-nav-menu ul {
            position: absolute;
            width: 12em;
            border-width: 0;
            border-style: solid;
            padding: 0
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down, .elementor-nav-menu--main .elementor-nav-menu span.scroll-up {
            position: absolute;
            display: none;
            visibility: hidden;
            overflow: hidden;
            background: #fff;
            height: 20px
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down-arrow, .elementor-nav-menu--main .elementor-nav-menu span.scroll-up-arrow {
            position: absolute;
            top: -2px;
            left: 50%;
            margin-inline-start: -8px;
            width: 0;
            height: 0;
            overflow: hidden;
            border: 8px dashed transparent;
            border-bottom: 8px solid #33373d
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down-arrow {
            top: 6px;
            border-style: solid dashed dashed;
            border-color: #33373d transparent transparent
        }

        .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow .e-font-icon-svg, .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow i {
            transform: rotate(-90deg)
        }

        .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow .e-font-icon-svg {
            fill: currentColor;
            height: 1em;
            width: 1em
        }

        .elementor-nav-menu--layout-horizontal {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
            display: flex;
            flex-wrap: wrap
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu a {
            white-space: nowrap;
            flex-grow: 1
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li ul, .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li > .scroll-down {
            top: 100% !important
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:first-child) > a {
            margin-inline-start: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:first-child) > .scroll-down, .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:first-child) > .scroll-up, .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:first-child) > ul {
            left: var(--e-nav-menu-horizontal-menu-item-margin) !important
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:last-child) > a {
            margin-inline-end: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:last-child):after {
            content: var(--e-nav-menu-divider-content, none);
            height: var(--e-nav-menu-divider-height, 35%);
            border-left: var(--e-nav-menu-divider-width, 2px) var(--e-nav-menu-divider-style, solid) var(--e-nav-menu-divider-color, #000);
            border-bottom-color: var(--e-nav-menu-divider-color, #000);
            border-right-color: var(--e-nav-menu-divider-color, #000);
            border-top-color: var(--e-nav-menu-divider-color, #000);
            align-self: center
        }

        .elementor-nav-menu__align-right .elementor-nav-menu {
            margin-left: auto;
            justify-content: flex-end
        }

        .elementor-nav-menu__align-right .elementor-nav-menu--layout-vertical > ul > li > a {
            justify-content: flex-end
        }

        .elementor-nav-menu__align-left .elementor-nav-menu {
            margin-right: auto;
            justify-content: flex-start
        }

        .elementor-nav-menu__align-left .elementor-nav-menu--layout-vertical > ul > li > a {
            justify-content: flex-start
        }

        .elementor-nav-menu__align-start .elementor-nav-menu {
            margin-inline-end: auto;
            justify-content: flex-start
        }

        .elementor-nav-menu__align-start .elementor-nav-menu--layout-vertical > ul > li > a {
            justify-content: flex-start
        }

        .elementor-nav-menu__align-end .elementor-nav-menu {
            margin-inline-start: auto;
            justify-content: flex-end
        }

        .elementor-nav-menu__align-end .elementor-nav-menu--layout-vertical > ul > li > a {
            justify-content: flex-end
        }

        .elementor-nav-menu__align-center .elementor-nav-menu {
            margin-inline-start: auto;
            margin-inline-end: auto;
            justify-content: center
        }

        .elementor-nav-menu__align-center .elementor-nav-menu--layout-vertical > ul > li > a {
            justify-content: center
        }

        .elementor-nav-menu__align-justify .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
            width: 100%
        }

        .elementor-nav-menu__align-justify .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li {
            flex-grow: 1
        }

        .elementor-nav-menu__align-justify .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li > a {
            justify-content: center
        }

        .elementor-widget-nav-menu:not(.elementor-nav-menu--toggle) .elementor-menu-toggle {
            display: none
        }

        .elementor-widget-nav-menu .elementor-widget-container {
            display: flex;
            flex-direction: column
        }

        .elementor-nav-menu {
            position: relative;
            z-index: 2
        }

        .elementor-nav-menu:after {
            content: " ";
            display: block;
            height: 0;
            font: 0/0 serif;
            clear: both;
            visibility: hidden;
            overflow: hidden
        }

        .elementor-nav-menu, .elementor-nav-menu li, .elementor-nav-menu ul {
            display: block;
            list-style: none;
            margin: 0;
            padding: 0;
            line-height: normal;
            -webkit-tap-highlight-color: transparent
        }

        .elementor-nav-menu ul {
            display: none
        }

        .elementor-nav-menu ul ul a, .elementor-nav-menu ul ul a:active, .elementor-nav-menu ul ul a:focus, .elementor-nav-menu ul ul a:hover {
            border-left: 16px solid transparent
        }

        .elementor-nav-menu ul ul ul a, .elementor-nav-menu ul ul ul a:active, .elementor-nav-menu ul ul ul a:focus, .elementor-nav-menu ul ul ul a:hover {
            border-left: 24px solid transparent
        }

        .elementor-nav-menu ul ul ul ul a, .elementor-nav-menu ul ul ul ul a:active, .elementor-nav-menu ul ul ul ul a:focus, .elementor-nav-menu ul ul ul ul a:hover {
            border-left: 32px solid transparent
        }

        .elementor-nav-menu ul ul ul ul ul a, .elementor-nav-menu ul ul ul ul ul a:active, .elementor-nav-menu ul ul ul ul ul a:focus, .elementor-nav-menu ul ul ul ul ul a:hover {
            border-left: 40px solid transparent
        }

        .elementor-nav-menu a, .elementor-nav-menu li {
            position: relative
        }

        .elementor-nav-menu li {
            border-width: 0
        }

        .elementor-nav-menu a {
            display: flex;
            align-items: center
        }

        .elementor-nav-menu a, .elementor-nav-menu a:focus, .elementor-nav-menu a:hover {
            padding: 10px 20px;
            line-height: 20px
        }

        .elementor-nav-menu a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu a.disabled {
            cursor: not-allowed;
            color: #88909b
        }

        .elementor-nav-menu .e-plus-icon:before {
            content: "+"
        }

        .elementor-nav-menu .sub-arrow {
            line-height: 1;
            padding: 10px;
            padding-inline-end: 0;
            margin-block-start: -10px;
            margin-block-end: -10px;
            display: flex;
            align-items: center
        }

        .elementor-nav-menu .sub-arrow i {
            pointer-events: none
        }

        .elementor-nav-menu .sub-arrow .fa.fa-chevron-down, .elementor-nav-menu .sub-arrow .fas.fa-chevron-down {
            font-size: .7em
        }

        .elementor-nav-menu .sub-arrow .e-font-icon-svg {
            height: 1em;
            width: 1em
        }

        .elementor-nav-menu .sub-arrow .e-font-icon-svg.fa-svg-chevron-down {
            height: .7em;
            width: .7em
        }

        .elementor-nav-menu--dropdown .elementor-item.elementor-item-active, .elementor-nav-menu--dropdown .elementor-item.highlighted, .elementor-nav-menu--dropdown .elementor-item:focus, .elementor-nav-menu--dropdown .elementor-item:hover {
            background-color: #3f444b;
            color: #fff
        }

        .elementor-menu-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--nav-menu-icon-size, 22px);
            padding: .25em;
            cursor: pointer;
            border: 0 solid;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, .05);
            color: #33373d
        }

        .elementor-menu-toggle.elementor-active .elementor-menu-toggle__icon--open, .elementor-menu-toggle:not(.elementor-active) .elementor-menu-toggle__icon--close {
            display: none
        }

        .elementor-menu-toggle .e-font-icon-svg {
            fill: #33373d;
            height: 1em;
            width: 1em
        }

        .elementor-menu-toggle svg {
            width: 1em;
            height: auto;
            fill: var(--nav-menu-icon-color, currentColor)
        }

        span.elementor-menu-toggle__icon--close, span.elementor-menu-toggle__icon--open {
            line-height: 1
        }

        .elementor-nav-menu--dropdown {
            background-color: #fff;
            font-size: 13px
        }

        .elementor-nav-menu--dropdown-none .elementor-menu-toggle, .elementor-nav-menu--dropdown-none .elementor-nav-menu--dropdown {
            display: none
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container {
            margin-top: 10px;
            transition: max-height .3s, transform .3s;
            transform-origin: top;
            overflow-y: auto;
            overflow-x: hidden
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container .elementor-sub-item {
            font-size: .85em
        }

        .elementor-nav-menu--dropdown a {
            color: #33373d
        }

        .elementor-nav-menu--dropdown a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu--dropdown a.disabled {
            color: #b3b3b3
        }

        ul.elementor-nav-menu--dropdown a, ul.elementor-nav-menu--dropdown a:focus, ul.elementor-nav-menu--dropdown a:hover {
            text-shadow: none;
            border-inline-start: 8px solid transparent
        }

        .elementor-nav-menu__text-align-center .elementor-nav-menu--dropdown .elementor-nav-menu a {
            justify-content: center
        }

        .elementor-nav-menu--toggle {
            --menu-height: 100vh
        }

        .elementor-nav-menu--toggle .elementor-menu-toggle:not(.elementor-active) + .elementor-nav-menu__container {
            transform: scaleY(0);
            max-height: 0;
            overflow: hidden
        }

        .elementor-nav-menu--toggle .elementor-menu-toggle.elementor-active + .elementor-nav-menu__container {
            transform: scaleY(1);
            max-height: var(--menu-height);
            animation: .3s backwards hide-scroll
        }

        .elementor-nav-menu--stretch .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            position: absolute;
            z-index: 9997
        }

        @media (max-width: 767px) {
            body {
                max-width: 100% !important;
                overflow-x: hidden !important
            }

            .elementor-nav-menu--dropdown-mobile .elementor-nav-menu--main {
                display: none
            }

            .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (min-width: 768px) {
            .elementor-nav-menu--dropdown-mobile .elementor-menu-toggle, .elementor-nav-menu--dropdown-mobile .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-mobile nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }
        }

        @media (max-width: 1024px) {
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main {
                display: none
            }

            .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (min-width: 1025px) {
            .elementor-nav-menu--dropdown-tablet .elementor-menu-toggle, .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-tablet nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }
        }

        @media (max-width: -1) {
            .elementor-nav-menu--dropdown-mobile_extra .elementor-nav-menu--main {
                display: none
            }

            .elementor-nav-menu--dropdown-tablet_extra .elementor-nav-menu--main {
                display: none
            }

            .elementor-widget:not(.elementor-laptop-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-laptop-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (min-width: -1) {
            .elementor-nav-menu--dropdown-mobile_extra .elementor-menu-toggle, .elementor-nav-menu--dropdown-mobile_extra .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-mobile_extra nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }

            .elementor-nav-menu--dropdown-tablet_extra .elementor-menu-toggle, .elementor-nav-menu--dropdown-tablet_extra .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-tablet_extra nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }

            .elementor-widget:not(.elementor-widescreen-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-widescreen-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @keyframes hide-scroll {
            0%, to {
                overflow: hidden
            }
        }

        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1
        }

        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
            color: inherit;
            font-size: inherit;
            line-height: inherit
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) .dialog-lightbox-close-button {
            display: none
        }

        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text {
            display: inline-block
        }

        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text a, .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text span {
            display: inline
        }

        .elementor-widget-breadcrumbs {
            font-size: .85em
        }

        .elementor-widget-breadcrumbs p {
            margin-bottom: 0
        }

        .calculator h2 {
            display: none
        }

        .calculator {
            background: 0 0 !important;
            color: #fff;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600
        }

        .calculator input {
            background: #0c1429 !important;
            border-radius: 35px !important;
            border: 2px solid #04f !important;
            color: #fff !important
        }

        .results {
            background-image: url(https://metatrading.ai/wp-content/uploads/2024/05/Rectangle-124.jpg) !important;
            background-repeat: no-repeat !important;
            background-size: cover !important
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v21/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        :root {
            --main-bg-color: #ecf0f3;
            --input-bg-color: #fff;
            --button-color: #007bff;
            --button-hover-color: #0056b3;
            --result-bg: linear-gradient(160deg, #009688 0%, #007bff 100%);
            --font-family: 'Poppins', sans-serif;
            --risk-very-low: #48C78E;
            --risk-low: #F1C40F;
            --risk-medium: #E67E22;
            --risk-high: #E74C3C;
            --risk-very-high: #C0392B
        }

        body {
            font-family: var(--font-family);
            background: var(--main-bg-color);
            margin: 0;
            padding: 0;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh
        }

        .calculator {
            background: var(--input-bg-color);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .1);
            width: 100%;
            max-width: 450px
        }

        button, input[type=number], input[type=range] {
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: calc(100% - 22px);
            background: var(--main-bg-color);
            font-family: var(--font-family)
        }

        button {
            background-color: var(--button-color);
            color: #fff;
            cursor: pointer
        }

        button:hover {
            background-color: var(--button-hover-color)
        }

        .results {
            background: var(--result-bg);
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center
        }

        .result-item {
            flex-basis: calc(50% - 10px);
            text-align: center;
            margin-bottom: 10px
        }

        .result-label, .result-value {
            font-size: 18px;
            margin-bottom: 5px
        }

        .result-value {
            font-weight: 700;
            font-size: 24px
        }

        #riskOutput {
            display: block;
            text-align: center;
            margin-top: -10px;
            margin-bottom: 20px;
            font-weight: 700
        }

        .elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container {
            overflow: hidden
        }

        .elementor-widget .elementor-icon-list-items.elementor-inline-items {
            margin-right: -8px;
            margin-left: -8px
        }

        .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: 8px;
            margin-left: 8px
        }

        .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            width: auto;
            left: auto;
            right: auto;
            position: relative;
            height: 100%;
            border-top: 0;
            border-bottom: 0;
            border-right: 0;
            border-left-width: 1px;
            border-style: solid;
            right: -8px
        }

        .elementor-widget .elementor-icon-list-items {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .elementor-widget .elementor-icon-list-item {
            margin: 0;
            padding: 0;
            position: relative
        }

        .elementor-widget .elementor-icon-list-item:after {
            position: absolute;
            bottom: 0;
            width: 100%
        }

        .elementor-widget .elementor-icon-list-item, .elementor-widget .elementor-icon-list-item a {
            display: flex;
            font-size: inherit;
            align-items: var(--icon-vertical-align, center)
        }

        .elementor-widget .elementor-icon-list-icon + .elementor-icon-list-text {
            align-self: center;
            padding-inline-start: 5px
        }

        .elementor-widget .elementor-icon-list-icon {
            display: flex;
            position: relative;
            top: var(--icon-vertical-offset, initial)
        }

        .elementor-widget .elementor-icon-list-icon svg {
            width: var(--e-icon-list-icon-size, 1em);
            height: var(--e-icon-list-icon-size, 1em)
        }

        .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
            text-align: var(--e-icon-list-icon-align)
        }

        .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg {
            margin: var(--e-icon-list-icon-margin, 0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)
        }

        .elementor-widget.elementor-list-item-link-full_width a {
            width: 100%
        }

        .elementor-widget.elementor-align-center .elementor-icon-list-item, .elementor-widget.elementor-align-center .elementor-icon-list-item a {
            justify-content: center
        }

        .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
            margin: auto
        }

        .elementor-widget.elementor-align-center .elementor-inline-items {
            justify-content: center
        }

        .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
            left: 0
        }

        .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
            right: 0
        }

        @media (max-width: -1) {
            .elementor-widget:not(.elementor-tablet_extra-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-tablet_extra-align-left) .elementor-icon-list-item:after {
                right: 0
            }

            .elementor-widget:not(.elementor-mobile_extra-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-mobile_extra-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        .elementor-widget-image-box .elementor-image-box-content {
            width: 100%
        }

        @media (min-width: 768px) {
            .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                display: flex
            }

            .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                text-align: start;
                flex-direction: row
            }

            .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                align-items: center
            }
        }

        @media (max-width: 767px) {
            .elementor-widget-image-box .elementor-image-box-img {
                margin-left: auto !important;
                margin-right: auto !important;
                margin-bottom: 15px
            }
        }

        .elementor-widget-image-box .elementor-image-box-img {
            display: inline-block
        }

        .elementor-widget-image-box .elementor-image-box-title a {
            color: inherit
        }

        .elementor-widget-image-box .elementor-image-box-wrapper {
            text-align: center
        }

        body .iti, div.wpforms-container .wpforms-form .iti, div.wpforms-container-full .wpforms-form .iti {
            position: relative;
            display: inline-block
        }

        body .iti *, div.wpforms-container .wpforms-form .iti *, div.wpforms-container-full .wpforms-form .iti * {
            box-sizing: border-box
        }

        body .iti__hide, div.wpforms-container .wpforms-form .iti__hide, div.wpforms-container-full .wpforms-form .iti__hide {
            display: none
        }

        body .iti__a11y-text, div.wpforms-container .wpforms-form .iti__a11y-text, div.wpforms-container-full .wpforms-form .iti__a11y-text {
            width: 1px;
            height: 1px;
            clip: rect(1px, 1px, 1px, 1px);
            overflow: hidden;
            position: absolute
        }

        body .iti input.iti__tel-input, body .iti input.iti__tel-input[type=tel], body .iti input.iti__tel-input[type=text], div.wpforms-container .wpforms-form .iti input.iti__tel-input, div.wpforms-container .wpforms-form .iti input.iti__tel-input[type=tel], div.wpforms-container .wpforms-form .iti input.iti__tel-input[type=text], div.wpforms-container-full .wpforms-form .iti input.iti__tel-input, div.wpforms-container-full .wpforms-form .iti input.iti__tel-input[type=tel], div.wpforms-container-full .wpforms-form .iti input.iti__tel-input[type=text] {
            position: relative;
            z-index: 0;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-right: 36px;
            margin-right: 0
        }

        body .iti__flag-container, div.wpforms-container .wpforms-form .iti__flag-container, div.wpforms-container-full .wpforms-form .iti__flag-container {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            padding: 1px
        }

        body .iti__selected-flag, div.wpforms-container .wpforms-form .iti__selected-flag, div.wpforms-container-full .wpforms-form .iti__selected-flag {
            z-index: 1;
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 6px 0 8px
        }

        body .iti__arrow, div.wpforms-container .wpforms-form .iti__arrow, div.wpforms-container-full .wpforms-form .iti__arrow {
            margin-left: 6px;
            width: 0;
            height: 0;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 4px solid #555
        }

        body [dir=rtl] .iti__arrow, div.wpforms-container .wpforms-form [dir=rtl] .iti__arrow, div.wpforms-container-full .wpforms-form [dir=rtl] .iti__arrow {
            margin-right: 6px;
            margin-left: 0
        }

        body .iti__arrow--up, div.wpforms-container .wpforms-form .iti__arrow--up, div.wpforms-container-full .wpforms-form .iti__arrow--up {
            border-top: none;
            border-bottom: 4px solid #555
        }

        body .iti__dropdown-content, div.wpforms-container .wpforms-form .iti__dropdown-content, div.wpforms-container-full .wpforms-form .iti__dropdown-content {
            border-radius: 3px;
            background-color: #fff
        }

        body .iti--inline-dropdown .iti__dropdown-content, div.wpforms-container .wpforms-form .iti--inline-dropdown .iti__dropdown-content, div.wpforms-container-full .wpforms-form .iti--inline-dropdown .iti__dropdown-content {
            position: absolute;
            z-index: 2;
            margin-top: 3px;
            margin-left: -1px;
            border: 1px solid #ccc;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, .2)
        }

        body .iti__dropdown-content--dropup, div.wpforms-container .wpforms-form .iti__dropdown-content--dropup, div.wpforms-container-full .wpforms-form .iti__dropdown-content--dropup {
            bottom: 100%;
            margin-bottom: 3px
        }

        body .iti__search-input, div.wpforms-container .wpforms-form .iti__search-input, div.wpforms-container-full .wpforms-form .iti__search-input {
            width: 100%;
            border-width: 0;
            border-radius: 3px;
            padding: 9px 12px
        }

        body .iti__search-input + .iti__country-list, div.wpforms-container .wpforms-form .iti__search-input + .iti__country-list, div.wpforms-container-full .wpforms-form .iti__search-input + .iti__country-list {
            border-top: 1px solid #ccc
        }

        body .iti__country-list, div.wpforms-container .wpforms-form .iti__country-list, div.wpforms-container-full .wpforms-form .iti__country-list {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        body .iti--inline-dropdown .iti__country-list, div.wpforms-container .wpforms-form .iti--inline-dropdown .iti__country-list, div.wpforms-container-full .wpforms-form .iti--inline-dropdown .iti__country-list {
            max-height: 185px
        }

        body .iti--flexible-dropdown-width .iti__country-list, div.wpforms-container .wpforms-form .iti--flexible-dropdown-width .iti__country-list, div.wpforms-container-full .wpforms-form .iti--flexible-dropdown-width .iti__country-list {
            white-space: nowrap
        }

        @media (max-width: 500px) {
            body .iti--flexible-dropdown-width .iti__country-list, div.wpforms-container .wpforms-form .iti--flexible-dropdown-width .iti__country-list, div.wpforms-container-full .wpforms-form .iti--flexible-dropdown-width .iti__country-list {
                white-space: normal
            }
        }

        body .iti__divider, div.wpforms-container .wpforms-form .iti__divider, div.wpforms-container-full .wpforms-form .iti__divider {
            padding-bottom: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #ccc
        }

        body .iti__country, div.wpforms-container .wpforms-form .iti__country, div.wpforms-container-full .wpforms-form .iti__country {
            display: flex;
            align-items: center;
            padding: 8px;
            outline: 0
        }

        body .iti__country.iti__highlight, div.wpforms-container .wpforms-form .iti__country.iti__highlight, div.wpforms-container-full .wpforms-form .iti__country.iti__highlight {
            background-color: rgba(0, 0, 0, .05)
        }

        body .iti--allow-dropdown input.iti__tel-input, body .iti--allow-dropdown input.iti__tel-input[type=tel], body .iti--allow-dropdown input.iti__tel-input[type=text], body .iti--show-selected-dial-code input.iti__tel-input, body .iti--show-selected-dial-code input.iti__tel-input[type=tel], body .iti--show-selected-dial-code input.iti__tel-input[type=text], div.wpforms-container .wpforms-form .iti--allow-dropdown input.iti__tel-input, div.wpforms-container .wpforms-form .iti--allow-dropdown input.iti__tel-input[type=tel], div.wpforms-container .wpforms-form .iti--allow-dropdown input.iti__tel-input[type=text], div.wpforms-container .wpforms-form .iti--show-selected-dial-code input.iti__tel-input, div.wpforms-container .wpforms-form .iti--show-selected-dial-code input.iti__tel-input[type=tel], div.wpforms-container .wpforms-form .iti--show-selected-dial-code input.iti__tel-input[type=text], div.wpforms-container-full .wpforms-form .iti--allow-dropdown input.iti__tel-input, div.wpforms-container-full .wpforms-form .iti--allow-dropdown input.iti__tel-input[type=tel], div.wpforms-container-full .wpforms-form .iti--allow-dropdown input.iti__tel-input[type=text], div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code input.iti__tel-input, div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code input.iti__tel-input[type=tel], div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code input.iti__tel-input[type=text] {
            padding-right: 6px;
            padding-left: 52px;
            margin-left: 0
        }

        body [dir=rtl] .iti--allow-dropdown input.iti__tel-input, body [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=tel], body [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=text], body [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input, body [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=tel], body [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=text], div.wpforms-container .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input, div.wpforms-container .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=tel], div.wpforms-container .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=text], div.wpforms-container .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input, div.wpforms-container .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=tel], div.wpforms-container .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=text], div.wpforms-container-full .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input, div.wpforms-container-full .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=tel], div.wpforms-container-full .wpforms-form [dir=rtl] .iti--allow-dropdown input.iti__tel-input[type=text], div.wpforms-container-full .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input, div.wpforms-container-full .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=tel], div.wpforms-container-full .wpforms-form [dir=rtl] .iti--show-selected-dial-code input.iti__tel-input[type=text] {
            padding-right: 52px;
            padding-left: 6px;
            margin-right: 0
        }

        body .iti--allow-dropdown .iti__flag-container, body .iti--show-selected-dial-code .iti__flag-container, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container, div.wpforms-container .wpforms-form .iti--show-selected-dial-code .iti__flag-container, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container, div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code .iti__flag-container {
            right: auto;
            left: 0
        }

        body [dir=rtl] .iti--allow-dropdown .iti__flag-container, body [dir=rtl] .iti--show-selected-dial-code .iti__flag-container, div.wpforms-container .wpforms-form [dir=rtl] .iti--allow-dropdown .iti__flag-container, div.wpforms-container .wpforms-form [dir=rtl] .iti--show-selected-dial-code .iti__flag-container, div.wpforms-container-full .wpforms-form [dir=rtl] .iti--allow-dropdown .iti__flag-container, div.wpforms-container-full .wpforms-form [dir=rtl] .iti--show-selected-dial-code .iti__flag-container {
            right: 0;
            left: auto
        }

        body .iti--allow-dropdown .iti__flag-container:hover, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:hover, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:hover {
            cursor: pointer
        }

        body .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
            background-color: rgba(0, 0, 0, .05)
        }

        body .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover, body .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover {
            cursor: default
        }

        body .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover .iti__selected-flag, body .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover .iti__selected-flag, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover .iti__selected-flag, div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover .iti__selected-flag, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[disabled]):hover .iti__selected-flag, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container:has(+input[readonly]):hover .iti__selected-flag {
            background-color: transparent
        }

        body .iti--show-selected-dial-code .iti__selected-flag, div.wpforms-container .wpforms-form .iti--show-selected-dial-code .iti__selected-flag, div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code .iti__selected-flag {
            background-color: rgba(0, 0, 0, .05)
        }

        body .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code, div.wpforms-container .wpforms-form .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code, div.wpforms-container-full .wpforms-form .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code {
            margin-left: 6px
        }

        body [dir=rtl] .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code, div.wpforms-container .wpforms-form [dir=rtl] .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code, div.wpforms-container-full .wpforms-form [dir=rtl] .iti--show-selected-dial-code.iti--show-flags .iti__selected-dial-code {
            margin-left: 0;
            margin-right: 6px
        }

        body .iti--container, div.wpforms-container .wpforms-form .iti--container, div.wpforms-container-full .wpforms-form .iti--container {
            position: fixed;
            top: -1000px;
            left: -1000px;
            z-index: 1060;
            padding: 1px
        }

        body .iti--container:hover, div.wpforms-container .wpforms-form .iti--container:hover, div.wpforms-container-full .wpforms-form .iti--container:hover {
            cursor: pointer
        }

        body .iti--fullscreen-popup.iti--container, div.wpforms-container .wpforms-form .iti--fullscreen-popup.iti--container, div.wpforms-container-full .wpforms-form .iti--fullscreen-popup.iti--container {
            background-color: rgba(0, 0, 0, .5);
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: fixed;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        body .iti--fullscreen-popup.iti--container.iti--country-search, div.wpforms-container .wpforms-form .iti--fullscreen-popup.iti--container.iti--country-search, div.wpforms-container-full .wpforms-form .iti--fullscreen-popup.iti--container.iti--country-search {
            justify-content: flex-start
        }

        body .iti--fullscreen-popup .iti__dropdown-content, div.wpforms-container .wpforms-form .iti--fullscreen-popup .iti__dropdown-content, div.wpforms-container-full .wpforms-form .iti--fullscreen-popup .iti__dropdown-content {
            display: flex;
            flex-direction: column;
            max-height: 100%;
            position: relative
        }

        body .iti--fullscreen-popup .iti__country, div.wpforms-container .wpforms-form .iti--fullscreen-popup .iti__country, div.wpforms-container-full .wpforms-form .iti--fullscreen-popup .iti__country {
            padding: 10px;
            line-height: 1.5em
        }

        body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
            width: 20px
        }

        body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
            height: 15px;
            box-shadow: 0 0 1px 0 #888;
            background-image: url(https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/css/fields/img/flags.png?1);
            background-repeat: no-repeat;
            background-position: 20px 0
        }

        @media (min-resolution: 2x) {
            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                background-size: 5762px 15px
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                background-image: url(https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/css/fields/img/flags@2x.png?1)
            }
        }

        body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
            background-image: var(--wpr-bg-3d19e6a4-0bda-472d-bcb9-e17f15804af5);
            background-size: contain;
            background-position: right;
            box-shadow: none;
            height: 19px
        }

        @media (min-resolution: 2x) {
            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                background-image: var(--wpr-bg-e4bc57e9-e6a6-482f-8306-587409dbbaf0)
            }
        }

        body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
            background-image: url("https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flags.png?1")
        }

        @media (min-resolution: 2x) {
            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                background-image: url("https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flags@2x.png?1")
            }
        }

        body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
            background-image: url("https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globe.png?1")
        }

        @media (min-resolution: 2x) {
            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                background-image: var(--wpr-bg-f911fa74-37e0-4620-9db2-7324a372841b)
            }
        }

        .iti--fullscreen-popup.iti--container {
            background-color: rgba(0, 0, 0, .5);
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: fixed;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .iti--fullscreen-popup.iti--container.iti--country-search {
            justify-content: flex-start
        }

        .iti--fullscreen-popup .iti__dropdown-content {
            display: flex;
            flex-direction: column;
            max-height: 100%;
            position: relative
        }

        .iti--fullscreen-popup .iti__country {
            padding: 10px;
            line-height: 1.5em
        }

        body.rtl .iti input, body.rtl .iti input[type=tel], body.rtl .iti input[type=text], body.rtl div.wpforms-container .wpforms-form .iti input, body.rtl div.wpforms-container .wpforms-form .iti input[type=tel], body.rtl div.wpforms-container .wpforms-form .iti input[type=text], body.rtl div.wpforms-container-full .wpforms-form .iti input, body.rtl div.wpforms-container-full .wpforms-form .iti input[type=tel], body.rtl div.wpforms-container-full .wpforms-form .iti input[type=text] {
            padding-right: 0;
            padding-left: 36px
        }

        body.rtl .iti__flag-container, body.rtl div.wpforms-container .wpforms-form .iti__flag-container, body.rtl div.wpforms-container-full .wpforms-form .iti__flag-container {
            right: auto;
            left: 0
        }

        body.rtl .iti__selected-flag, body.rtl div.wpforms-container .wpforms-form .iti__selected-flag, body.rtl div.wpforms-container-full .wpforms-form .iti__selected-flag {
            padding-right: 8px;
            padding-left: 6px
        }

        body.rtl .iti__arrow, body.rtl div.wpforms-container .wpforms-form .iti__arrow, body.rtl div.wpforms-container-full .wpforms-form .iti__arrow {
            margin-right: 6px;
            margin-left: 0
        }

        body.rtl .iti__country-list, body.rtl div.wpforms-container .wpforms-form .iti__country-list, body.rtl div.wpforms-container-full .wpforms-form .iti__country-list {
            text-align: right;
            margin-right: -1px;
            margin-left: 0
        }

        body.rtl .iti--allow-dropdown input, body.rtl .iti--allow-dropdown input[type=tel], body.rtl .iti--allow-dropdown input[type=text], body.rtl div.wpforms-container .wpforms-form .iti--allow-dropdown input, body.rtl div.wpforms-container .wpforms-form .iti--allow-dropdown input[type=tel], body.rtl div.wpforms-container .wpforms-form .iti--allow-dropdown input[type=text], body.rtl div.wpforms-container-full .wpforms-form .iti--allow-dropdown input, body.rtl div.wpforms-container-full .wpforms-form .iti--allow-dropdown input[type=tel], body.rtl div.wpforms-container-full .wpforms-form .iti--allow-dropdown input[type=text] {
            padding-right: 52px !important;
            padding-left: 6px
        }

        body.rtl .iti--allow-dropdown .iti__flag-container, body.rtl div.wpforms-container .wpforms-form .iti--allow-dropdown .iti__flag-container, body.rtl div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container {
            right: 0;
            left: auto
        }

        body .iti--allow-dropdown, div.wpforms-container .wpforms-form .iti--allow-dropdown, div.wpforms-container-full .wpforms-form .iti--allow-dropdown {
            width: 100%
        }

        body .iti .iti__country, div.wpforms-container .wpforms-form .iti .iti__country, div.wpforms-container-full .wpforms-form .iti .iti__country {
            padding: 5px 10px !important;
            margin: 0 !important
        }

        body .iti__country-list, div.wpforms-container .wpforms-form .iti__country-list, div.wpforms-container-full .wpforms-form .iti__country-list {
            text-align: left;
            background-color: #fff !important
        }

        @media (max-width: 600px) {
            body .iti__country-list, div.wpforms-container .wpforms-form .iti__country-list, div.wpforms-container-full .wpforms-form .iti__country-list {
                max-width: 90vw
            }
        }

        body .iti__divider, div.wpforms-container .wpforms-form .iti__divider, div.wpforms-container-full .wpforms-form .iti__divider {
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
            border-bottom: 1px solid #ccc !important
        }

        body .iti__country, div.wpforms-container .wpforms-form .iti__country, div.wpforms-container-full .wpforms-form .iti__country {
            color: #333
        }

        body .iti__country.iti__highlight, div.wpforms-container .wpforms-form .iti__country.iti__highlight, div.wpforms-container-full .wpforms-form .iti__country.iti__highlight {
            background-color: rgba(0, 0, 0, .05) !important
        }

        body .iti--allow-dropdown input, body .iti--allow-dropdown input[type=tel], body .iti--allow-dropdown input[type=text], div.wpforms-container .wpforms-form .iti--allow-dropdown input, div.wpforms-container .wpforms-form .iti--allow-dropdown input[type=tel], div.wpforms-container .wpforms-form .iti--allow-dropdown input[type=text], div.wpforms-container-full .wpforms-form .iti--allow-dropdown input, div.wpforms-container-full .wpforms-form .iti--allow-dropdown input[type=tel], div.wpforms-container-full .wpforms-form .iti--allow-dropdown input[type=text] {
            padding-left: 52px !important
        }

        body .iti.iti--inline-dropdown .iti__dropdown-content, div.wpforms-container .wpforms-form .iti.iti--inline-dropdown .iti__dropdown-content, div.wpforms-container-full .wpforms-form .iti.iti--inline-dropdown .iti__dropdown-content {
            margin-top: 0;
            margin-bottom: 0;
            border: none;
            z-index: 3
        }

        body .iti.iti--inline-dropdown .iti__dropdown-content .iti__country-list, div.wpforms-container .wpforms-form .iti.iti--inline-dropdown .iti__dropdown-content .iti__country-list, div.wpforms-container-full .wpforms-form .iti.iti--inline-dropdown .iti__dropdown-content .iti__country-list {
            max-height: 200px;
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color)
        }

        .wpforms-container .wpforms-error-container, .wpforms-container .wpforms-error-noscript {
            color: #d63637
        }

        .wpforms-container em.wpforms-error, .wpforms-container label.wpforms-error {
            display: block;
            color: #d63637;
            font-size: .9em;
            font-style: normal;
            cursor: default;
            min-width: 120px
        }

        .wpforms-container .wpforms-field input.wpforms-error, .wpforms-container .wpforms-field select.wpforms-error, .wpforms-container .wpforms-field textarea.wpforms-error {
            border: 1px solid #d63637
        }

        .wpforms-container .wpforms-field input[type=checkbox].wpforms-error, .wpforms-container .wpforms-field input[type=radio].wpforms-error {
            border: none
        }

        .wpforms-container .wpforms-field.wpforms-has-error .choices__inner {
            border: 1px solid #d63637
        }

        .wpforms-container .wpforms-recaptcha-container {
            padding: 0;
            clear: both
        }

        .wpforms-container .wpforms-recaptcha-container iframe {
            display: block;
            width: 100%;
            max-width: 100%
        }

        .wpforms-container .wpforms-recaptcha-container .g-recaptcha {
            padding: 10px 0 0
        }

        .wpforms-container .wpforms-recaptcha-container.wpforms-is-turnstile iframe {
            position: relative !important;
            visibility: inherit !important
        }

        body.rtl .wpforms-container .wpforms-form input[type=tel] {
            direction: ltr;
            text-align: right
        }

        body.rtl .wpforms-container .wpforms-form input[type=url] {
            direction: ltr;
            text-align: right
        }

        body.rtl .wpforms-container .wpforms-form input[type=url]::-webkit-textfield-decoration-container {
            display: flex;
            flex-direction: row-reverse
        }

        body.rtl .wpforms-container .wpforms-form input[type=email] {
            direction: ltr;
            text-align: right
        }

        body.rtl .wpforms-container .wpforms-form input[type=email]::-webkit-textfield-decoration-container {
            display: flex;
            flex-direction: row-reverse
        }

        body.rtl .wpforms-container .wpforms-form input[type=number]::-webkit-textfield-decoration-container {
            flex-direction: row-reverse
        }

        body.rtl .wpforms-container .wpforms-form .wpforms-field-date-time .wpforms-datepicker-wrap .wpforms-datepicker-clear {
            right: auto;
            left: 10px
        }

        body.rtl .wpforms-container .wpforms-form .wpforms-field-date-time .ui-timepicker-list li {
            padding: 3px 5px 3px 0 !important
        }

        body.rtl .ui-timepicker-list li {
            padding: 3px 5px 3px 0
        }

        .wpforms-container {
            margin-bottom: 26px
        }

        .wpforms-container .wpforms-form * {
            word-break: break-word;
            box-sizing: border-box
        }

        .wpforms-container .wpforms-form .wpforms-field-label, .wpforms-container .wpforms-form li, .wpforms-container .wpforms-form textarea, .wpforms-container .wpforms-form th {
            hyphens: auto
        }

        .wpforms-container ul, .wpforms-container ul li {
            background: 0 0;
            border: 0;
            margin: 0
        }

        .wpforms-container .wpforms-submit-container {
            clear: both;
            position: relative
        }

        .wpforms-container .wpforms-submit-spinner {
            margin-left: 15px;
            display: inline-block;
            vertical-align: middle
        }

        .wpforms-container .wpforms-hidden {
            display: none !important
        }

        .wpforms-container input.wpforms-field-large, .wpforms-container select.wpforms-field-large {
            max-width: 100%
        }

        .wpforms-container fieldset {
            display: block;
            border: none;
            margin: 0;
            padding: 0
        }

        .wpforms-container .wpforms-field {
            padding: 15px 0;
            position: relative
        }

        .wpforms-container .wpforms-field-label {
            display: block;
            font-weight: 700;
            font-style: normal;
            word-break: break-word;
            word-wrap: break-word
        }

        .wpforms-container .wpforms-required-label {
            color: var(--wpforms-label-error-color);
            font-weight: 400
        }

        .wpforms-container input[type=date], .wpforms-container input[type=email], .wpforms-container input[type=month], .wpforms-container input[type=number], .wpforms-container input[type=password], .wpforms-container input[type=range], .wpforms-container input[type=search], .wpforms-container input[type=tel], .wpforms-container input[type=text], .wpforms-container input[type=time], .wpforms-container input[type=url], .wpforms-container select, .wpforms-container textarea {
            display: block;
            width: 100%;
            box-sizing: border-box;
            font-family: inherit;
            font-style: normal;
            font-weight: 400;
            margin: 0
        }

        .wpforms-container input[type=date]:read-only, .wpforms-container input[type=email]:read-only, .wpforms-container input[type=month]:read-only, .wpforms-container input[type=number]:read-only, .wpforms-container input[type=password]:read-only, .wpforms-container input[type=range]:read-only, .wpforms-container input[type=search]:read-only, .wpforms-container input[type=tel]:read-only, .wpforms-container input[type=text]:read-only, .wpforms-container input[type=time]:read-only, .wpforms-container input[type=url]:read-only, .wpforms-container select:read-only, .wpforms-container textarea:read-only {
            cursor: default
        }

        .wpforms-container textarea {
            resize: vertical
        }

        .wpforms-container input[type=checkbox], .wpforms-container input[type=radio] {
            width: 16px;
            height: 16px;
            margin: 2px 10px 0 3px;
            display: inline-block;
            vertical-align: baseline;
            font-style: normal;
            font-weight: 400
        }

        .wpforms-container .wpforms-one-fifth, .wpforms-container .wpforms-one-half, .wpforms-container .wpforms-two-fifths {
            float: left;
            margin-left: 20px;
            clear: none
        }

        .wpforms-container .wpforms-one-half {
            width: calc(50% - 10px)
        }

        .wpforms-container .wpforms-one-fifth {
            width: calc(100% / 5 - 20px)
        }

        .wpforms-container .wpforms-two-fifths {
            width: calc(2 * 100% / 5 - 20px)
        }

        .wpforms-container .wpforms-field {
            float: none;
            clear: both
        }

        .wpforms-container .wpforms-field.wpforms-one-fifth, .wpforms-container .wpforms-field.wpforms-one-half, .wpforms-container .wpforms-field.wpforms-two-fifths {
            float: left;
            margin-left: 20px;
            clear: none
        }

        .wpforms-container-full ul.wpforms-icon-choices, .wpforms-container-full ul.wpforms-icon-choices * {
            box-sizing: border-box
        }

        .wpforms-container-full ul.wpforms-icon-choices {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 0 1px !important;
            margin: 12px 0 -20px !important
        }

        .wpforms-container-full ul.wpforms-icon-choices + .wpforms-error {
            margin-top: 15px
        }

        .wpforms-container-full ul.wpforms-icon-choices li {
            min-width: 120px;
            padding-right: 0 !important;
            margin: 0 0 20px !important
        }

        .wpforms-container-full ul.wpforms-icon-choices label {
            position: relative;
            display: block;
            margin: 0;
            cursor: pointer
        }

        .wpforms-container-full ul.wpforms-icon-choices svg {
            margin: 0 auto;
            fill: var(--wpforms-icon-choices-color)
        }

        @media only screen and (max-width: 600px) {
            div.wpforms-container .wpforms-form .wpforms-field > * {
                max-width: 100%
            }

            div.wpforms-container .wpforms-form .wpforms-field {
                padding-right: 1px;
                padding-left: 1px
            }

            div.wpforms-container .wpforms-form .wpforms-field input.wpforms-field-large, div.wpforms-container .wpforms-form .wpforms-field select.wpforms-field-large {
                max-width: 100%
            }

            div.wpforms-container .wpforms-form .wpforms-field:not(.wpforms-field-phone):not(.wpforms-field-select-style-modern):not(.wpforms-field-radio):not(.wpforms-field-checkbox):not(.wpforms-field-layout) {
                overflow-x: hidden
            }

            div.wpforms-container .wpforms-form .wpforms-page-indicator.circles .wpforms-page-indicator-page {
                display: block;
                margin: 0 0 10px
            }

            div.wpforms-container .wpforms-form .wpforms-page-indicator.circles .wpforms-page-indicator-page-number {
                width: 30px;
                height: 30px;
                line-height: 30px
            }

            div.wpforms-container .wpforms-form .wpforms-page-indicator.connector .wpforms-page-indicator-page {
                width: 100% !important;
                padding: 5px 10px
            }

            div.wpforms-container .wpforms-form .wpforms-page-indicator.connector .wpforms-page-indicator-page-number {
                display: none
            }

            div.wpforms-container .wpforms-form .wpforms-page-indicator.connector .wpforms-page-indicator-page.active {
                font-weight: 700
            }
        }

        .wpforms-container .wpforms-form .choices .choices__inner {
            border-radius: 3px;
            min-height: 35px
        }

        .wpforms-container .wpforms-form .choices.is-open .choices__inner {
            border-radius: 3px 3px 0 0
        }

        .wpforms-container textarea {
            line-height: 1.3
        }

        .wpforms-container textarea.wpforms-field-large {
            height: 220px
        }

        div.wpforms-container-full, div.wpforms-container-full * {
            background: 0 0;
            border: 0;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            float: none;
            font-size: 100%;
            height: auto;
            letter-spacing: normal;
            outline: 0;
            position: static;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            width: auto;
            visibility: visible;
            overflow: visible;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none
        }

        div.wpforms-container-full canvas, div.wpforms-container-full img, div.wpforms-container-full svg, div.wpforms-container-full video {
            overflow: clip
        }

        div.wpforms-container-full {
            margin-left: auto;
            margin-right: auto
        }

        div.wpforms-container-full:not(:empty) {
            margin: 24px auto;
            padding: var(--wpforms-container-padding);
            background-clip: padding-box;
            background-color: var(--wpforms-background-color);
            background-image: var(--wpforms-background-url);
            background-position: var(--wpforms-background-position);
            background-repeat: var(--wpforms-background-repeat);
            background-size: var(--wpforms-background-size);
            border-style: var(--wpforms-container-border-style);
            border-width: var(--wpforms-container-border-width);
            border-color: var(--wpforms-container-border-color);
            border-radius: var(--wpforms-container-border-radius);
            box-shadow: var(--wpforms-container-shadow-size-box-shadow)
        }

        div.wpforms-container-full button, div.wpforms-container-full input, div.wpforms-container-full label, div.wpforms-container-full select, div.wpforms-container-full textarea {
            margin: 0;
            border: 0;
            padding: 0;
            vertical-align: middle;
            background: 0 0;
            height: auto;
            box-sizing: border-box
        }

        div.wpforms-container-full address, div.wpforms-container-full code, div.wpforms-container-full dd, div.wpforms-container-full dl, div.wpforms-container-full dt, div.wpforms-container-full h1, div.wpforms-container-full h2, div.wpforms-container-full h3, div.wpforms-container-full h4, div.wpforms-container-full sub, div.wpforms-container-full time {
            font-size: revert;
            font-weight: revert;
            margin: revert;
            padding: revert
        }

        div.wpforms-container-full sub {
            position: relative
        }

        div.wpforms-container-full ul, div.wpforms-container-full ul li {
            background: 0 0;
            border: 0;
            margin: 0;
            padding: 0
        }

        div.wpforms-container-full ul li {
            margin-bottom: 15px
        }

        div.wpforms-container-full ul li:last-of-type {
            margin-bottom: 0
        }

        div.wpforms-container-full hr {
            border-top-width: var(--wpforms-field-border-size);
            border-top-style: var(--wpforms-field-border-style);
            border-top-color: var(--wpforms-field-border-color);
            margin: .5em auto
        }

        div.wpforms-container-full fieldset {
            min-width: 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-submit-container {
            margin-top: var(--wpforms-button-size-margin-top)
        }

        div.wpforms-container-full .wpforms-form .wpforms-submit-spinner {
            max-width: 26px
        }

        div.wpforms-container-full .wpforms-form em.wpforms-error, div.wpforms-container-full .wpforms-form label.wpforms-error {
            font-weight: 400;
            font-size: var(--wpforms-label-size-sublabel-font-size);
            line-height: var(--wpforms-label-size-sublabel-line-height);
            margin-top: var(--wpforms-field-size-input-spacing);
            color: var(--wpforms-label-error-color);
            padding: 0 0 0 5px;
            position: relative
        }

        div.wpforms-container-full .wpforms-form em.wpforms-error:before, div.wpforms-container-full .wpforms-form label.wpforms-error:before {
            -webkit-mask-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2217%22%20height%3D%2215%22%20viewBox%3D%220%200%2017%2015%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20d%3D%22M16.0264%2012.3086L9.46387%200.90625C8.97168%200.0585938%207.68652%200.03125%207.19434%200.90625L0.631836%2012.3086C0.139648%2013.1562%200.768555%2014.25%201.78027%2014.25H14.8779C15.8896%2014.25%2016.5186%2013.1836%2016.0264%2012.3086ZM8.34277%209.92969C9.02637%209.92969%209.60059%2010.5039%209.60059%2011.1875C9.60059%2011.8984%209.02637%2012.4453%208.34277%2012.4453C7.63184%2012.4453%207.08496%2011.8984%207.08496%2011.1875C7.08496%2010.5039%207.63184%209.92969%208.34277%209.92969ZM7.13965%205.41797C7.1123%205.22656%207.27637%205.0625%207.46777%205.0625H9.19043C9.38184%205.0625%209.5459%205.22656%209.51855%205.41797L9.32715%209.13672C9.2998%209.32812%209.16309%209.4375%208.99902%209.4375H7.65918C7.49512%209.4375%207.3584%209.32812%207.33105%209.13672L7.13965%205.41797Z%22%20fill%3D%22currentColor%22%2F%3E%0A%3C%2Fsvg%3E%0A");
            mask-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2217%22%20height%3D%2215%22%20viewBox%3D%220%200%2017%2015%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Cpath%20d%3D%22M16.0264%2012.3086L9.46387%200.90625C8.97168%200.0585938%207.68652%200.03125%207.19434%200.90625L0.631836%2012.3086C0.139648%2013.1562%200.768555%2014.25%201.78027%2014.25H14.8779C15.8896%2014.25%2016.5186%2013.1836%2016.0264%2012.3086ZM8.34277%209.92969C9.02637%209.92969%209.60059%2010.5039%209.60059%2011.1875C9.60059%2011.8984%209.02637%2012.4453%208.34277%2012.4453C7.63184%2012.4453%207.08496%2011.8984%207.08496%2011.1875C7.08496%2010.5039%207.63184%209.92969%208.34277%209.92969ZM7.13965%205.41797C7.1123%205.22656%207.27637%205.0625%207.46777%205.0625H9.19043C9.38184%205.0625%209.5459%205.22656%209.51855%205.41797L9.32715%209.13672C9.2998%209.32812%209.16309%209.4375%208.99902%209.4375H7.65918C7.49512%209.4375%207.3584%209.32812%207.33105%209.13672L7.13965%205.41797Z%22%20fill%3D%22currentColor%22%2F%3E%0A%3C%2Fsvg%3E%0A");
            content: '';
            position: relative;
            display: inline-block;
            right: 5px;
            top: 1.5px;
            width: 16px;
            height: 14px;
            background-color: var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field input.wpforms-error, div.wpforms-container-full .wpforms-form .wpforms-field select.wpforms-error, div.wpforms-container-full .wpforms-form .wpforms-field textarea.wpforms-error {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field input.wpforms-error:hover, div.wpforms-container-full .wpforms-form .wpforms-field select.wpforms-error:hover, div.wpforms-container-full .wpforms-form .wpforms-field textarea.wpforms-error:hover {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 2px 0 var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field input.wpforms-error:focus, div.wpforms-container-full .wpforms-form .wpforms-field select.wpforms-error:focus, div.wpforms-container-full .wpforms-form .wpforms-field textarea.wpforms-error:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 0 1px var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field input[type=checkbox].wpforms-error, div.wpforms-container-full .wpforms-form .wpforms-field input[type=radio].wpforms-error {
            border: none;
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-form .wpforms-field input[type=checkbox].wpforms-error:focus, div.wpforms-container-full .wpforms-form .wpforms-field input[type=checkbox].wpforms-error:hover, div.wpforms-container-full .wpforms-form .wpforms-field input[type=radio].wpforms-error:focus, div.wpforms-container-full .wpforms-form .wpforms-field input[type=radio].wpforms-error:hover {
            border: none;
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-form .wpforms-error-container {
            color: var(--wpforms-label-error-color);
            font-size: var(--wpforms-label-size-font-size);
            line-height: var(--wpforms-label-size-line-height)
        }

        div.wpforms-container-full .wpforms-form .wpforms-error-container ul li {
            list-style: inside !important
        }

        div.wpforms-container-full .wpforms-form .wpforms-error-container a {
            color: var(--wpforms-label-error-color);
            text-decoration: underline !important
        }

        div.wpforms-container-full .wpforms-form .wpforms-error-container a:hover {
            text-decoration: none !important
        }

        .wpforms-screen-reader-announce {
            color: transparent !important;
            position: absolute !important;
            bottom: 0 !important
        }

        body.rtl div.wpforms-container-full .wpforms-form .wpforms-page-indicator.circles .wpforms-page-indicator-page-number {
            margin: 0 0 0 10px
        }

        body.rtl div.wpforms-container-full .wpforms-form .wpforms-page-indicator.circles .wpforms-page-indicator-page {
            margin: 0 0 0 15px
        }

        body.rtl div.wpforms-container-full .wpforms-form em.wpforms-error {
            padding: 0 5px 0 0
        }

        body.rtl div.wpforms-container-full .wpforms-form em.wpforms-error:before {
            left: 5px;
            right: auto
        }

        body.rtl div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices .choices__inner {
            padding: 0 7px 0 24px
        }

        div.wpforms-container-full .wpforms-field-label {
            margin: 0 0 var(--wpforms-field-size-input-spacing) 0;
            padding: 0;
            font-size: var(--wpforms-label-size-font-size);
            line-height: var(--wpforms-label-size-line-height);
            color: var(--wpforms-label-color)
        }

        div.wpforms-container-full .wpforms-required-label {
            font-weight: 400
        }

        div.wpforms-container-full input[type=date], div.wpforms-container-full input[type=email], div.wpforms-container-full input[type=month], div.wpforms-container-full input[type=number], div.wpforms-container-full input[type=password], div.wpforms-container-full input[type=range], div.wpforms-container-full input[type=search], div.wpforms-container-full input[type=tel], div.wpforms-container-full input[type=text], div.wpforms-container-full input[type=time], div.wpforms-container-full input[type=url], div.wpforms-container-full select, div.wpforms-container-full textarea {
            background-color: var(--wpforms-field-background-color);
            background-clip: padding-box;
            border-radius: var(--wpforms-field-border-radius);
            color: var(--wpforms-field-text-color);
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            padding: 0 var(--wpforms-field-size-padding-h);
            font-size: var(--wpforms-field-size-font-size);
            line-height: 100%;
            box-shadow: none;
            transition: border .15s, box-shadow .15s
        }

        div.wpforms-container-full input[type=date]:focus, div.wpforms-container-full input[type=email]:focus, div.wpforms-container-full input[type=month]:focus, div.wpforms-container-full input[type=number]:focus, div.wpforms-container-full input[type=password]:focus, div.wpforms-container-full input[type=range]:focus, div.wpforms-container-full input[type=search]:focus, div.wpforms-container-full input[type=tel]:focus, div.wpforms-container-full input[type=text]:focus, div.wpforms-container-full input[type=time]:focus, div.wpforms-container-full input[type=url]:focus, div.wpforms-container-full select:focus, div.wpforms-container-full textarea:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full input[type=date]:focus:invalid, div.wpforms-container-full input[type=email]:focus:invalid, div.wpforms-container-full input[type=month]:focus:invalid, div.wpforms-container-full input[type=number]:focus:invalid, div.wpforms-container-full input[type=password]:focus:invalid, div.wpforms-container-full input[type=range]:focus:invalid, div.wpforms-container-full input[type=search]:focus:invalid, div.wpforms-container-full input[type=tel]:focus:invalid, div.wpforms-container-full input[type=text]:focus:invalid, div.wpforms-container-full input[type=time]:focus:invalid, div.wpforms-container-full input[type=url]:focus:invalid, div.wpforms-container-full select:focus:invalid, div.wpforms-container-full textarea:focus:invalid {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0;
            color: var(--wpforms-field-text-color)
        }

        div.wpforms-container-full input[type=date]::-webkit-input-placeholder, div.wpforms-container-full input[type=email]::-webkit-input-placeholder, div.wpforms-container-full input[type=month]::-webkit-input-placeholder, div.wpforms-container-full input[type=number]::-webkit-input-placeholder, div.wpforms-container-full input[type=password]::-webkit-input-placeholder, div.wpforms-container-full input[type=range]::-webkit-input-placeholder, div.wpforms-container-full input[type=search]::-webkit-input-placeholder, div.wpforms-container-full input[type=tel]::-webkit-input-placeholder, div.wpforms-container-full input[type=text]::-webkit-input-placeholder, div.wpforms-container-full input[type=time]::-webkit-input-placeholder, div.wpforms-container-full input[type=url]::-webkit-input-placeholder, div.wpforms-container-full select::-webkit-input-placeholder, div.wpforms-container-full textarea::-webkit-input-placeholder {
            color: var(--wpforms-field-text-color);
            opacity: .5;
            pointer-events: none
        }

        div.wpforms-container-full input[type=date]::-moz-placeholder, div.wpforms-container-full input[type=email]::-moz-placeholder, div.wpforms-container-full input[type=month]::-moz-placeholder, div.wpforms-container-full input[type=number]::-moz-placeholder, div.wpforms-container-full input[type=password]::-moz-placeholder, div.wpforms-container-full input[type=range]::-moz-placeholder, div.wpforms-container-full input[type=search]::-moz-placeholder, div.wpforms-container-full input[type=tel]::-moz-placeholder, div.wpforms-container-full input[type=text]::-moz-placeholder, div.wpforms-container-full input[type=time]::-moz-placeholder, div.wpforms-container-full input[type=url]::-moz-placeholder, div.wpforms-container-full select::-moz-placeholder, div.wpforms-container-full textarea::-moz-placeholder {
            color: var(--wpforms-field-text-color);
            opacity: .5;
            pointer-events: none
        }

        div.wpforms-container-full input[type=date]:-moz-placeholder, div.wpforms-container-full input[type=email]:-moz-placeholder, div.wpforms-container-full input[type=month]:-moz-placeholder, div.wpforms-container-full input[type=number]:-moz-placeholder, div.wpforms-container-full input[type=password]:-moz-placeholder, div.wpforms-container-full input[type=range]:-moz-placeholder, div.wpforms-container-full input[type=search]:-moz-placeholder, div.wpforms-container-full input[type=tel]:-moz-placeholder, div.wpforms-container-full input[type=text]:-moz-placeholder, div.wpforms-container-full input[type=time]:-moz-placeholder, div.wpforms-container-full input[type=url]:-moz-placeholder, div.wpforms-container-full select:-moz-placeholder, div.wpforms-container-full textarea:-moz-placeholder {
            color: var(--wpforms-field-text-color);
            opacity: .5;
            pointer-events: none
        }

        div.wpforms-container-full textarea {
            width: 100%
        }

        div.wpforms-container-full input, div.wpforms-container-full select {
            height: var(--wpforms-field-size-input-height)
        }

        div.wpforms-container-full select {
            appearance: none;
            display: block;
            max-width: 100%;
            width: 100%;
            text-transform: none;
            text-shadow: none;
            white-space: nowrap;
            line-height: unset;
            padding-block: 0;
            padding-inline-end: 24px;
            padding-inline-start: 12px;
            min-height: var(--wpforms-field-size-input-height);
            vertical-align: middle;
            cursor: pointer
        }

        div.wpforms-container-full select, div.wpforms-container-full select:disabled {
            background-image: linear-gradient(45deg, transparent 50%, var(--wpforms-field-border-color-spare) 50%), linear-gradient(135deg, var(--wpforms-field-border-color-spare) 50%, transparent 50%);
            background-position: calc(100% - 17px) 50%, calc(100% - 12px) 50%;
            background-size: 5px 5px, 5px 5px;
            background-repeat: no-repeat
        }

        .rtl div.wpforms-container-full select, .rtl div.wpforms-container-full select:disabled {
            background-position: 12px 50%, 17px 50%
        }

        div.wpforms-container-full select > option {
            color: var(--wpforms-field-text-color)
        }

        div.wpforms-container-full select > option.placeholder, div.wpforms-container-full select > option[disabled] {
            color: var(--wpforms-field-text-color);
            opacity: .5
        }

        div.wpforms-container-full select:not([multiple]) > option {
            background: var(--wpforms-field-menu-color)
        }

        div.wpforms-container-full select:not([multiple]) > option:not(.placeholder):checked {
            font-weight: 700
        }

        div.wpforms-container-full select[multiple] {
            height: auto;
            overflow-y: scroll;
            background-image: none
        }

        div.wpforms-container-full select[multiple] > option:not(.placeholder):checked {
            background: var(--wpforms-button-background-color);
            color: var(--wpforms-button-text-color-alt, var(--wpforms-button-text-color))
        }

        div.wpforms-container-full input[type=number]:read-only {
            appearance: textfield;
            -moz-appearance: textfield;
            -webkit-appearance: textfield
        }

        div.wpforms-container-full input[type=number]:read-only::-webkit-inner-spin-button {
            visibility: hidden
        }

        div.wpforms-container-full .wpforms-page-button, div.wpforms-container-full button[type=submit], div.wpforms-container-full input[type=submit] {
            height: var(--wpforms-button-size-height);
            background-color: var(--wpforms-button-background-color-alt, var(--wpforms-button-background-color));
            border-radius: var(--wpforms-button-border-radius);
            border-style: var(--wpforms-button-border-style);
            border-color: var(--wpforms-button-border-color);
            border-width: var(--wpforms-button-border-size);
            box-shadow: none;
            color: var(--wpforms-button-text-color);
            padding: 0 var(--wpforms-button-size-padding-h);
            font-family: inherit;
            font-weight: 500;
            font-size: var(--wpforms-button-size-font-size);
            line-height: 100%;
            cursor: pointer;
            transition: all .15s ease-in-out;
            position: relative;
            text-decoration: none
        }

        div.wpforms-container-full .wpforms-page-button:not(:hover):not(:active), div.wpforms-container-full button[type=submit]:not(:hover):not(:active), div.wpforms-container-full input[type=submit]:not(:hover):not(:active) {
            background-color: var(--wpforms-button-background-color-alt, var(--wpforms-button-background-color));
            color: var(--wpforms-button-text-color)
        }

        div.wpforms-container-full .wpforms-page-button:active, div.wpforms-container-full .wpforms-page-button:hover, div.wpforms-container-full button[type=submit]:active, div.wpforms-container-full button[type=submit]:hover, div.wpforms-container-full input[type=submit]:active, div.wpforms-container-full input[type=submit]:hover {
            background: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), var(--wpforms-button-background-color-alt, var(--wpforms-button-background-color))
        }

        div.wpforms-container-full .wpforms-page-button.wpforms-opacity-hover:active, div.wpforms-container-full .wpforms-page-button.wpforms-opacity-hover:hover, div.wpforms-container-full button[type=submit].wpforms-opacity-hover:active, div.wpforms-container-full button[type=submit].wpforms-opacity-hover:hover, div.wpforms-container-full input[type=submit].wpforms-opacity-hover:active, div.wpforms-container-full input[type=submit].wpforms-opacity-hover:hover {
            background: 0 0;
            opacity: .75
        }

        div.wpforms-container-full .wpforms-page-button:focus, div.wpforms-container-full button[type=submit]:focus, div.wpforms-container-full input[type=submit]:focus {
            outline: 0
        }

        div.wpforms-container-full .wpforms-page-button:focus:after, div.wpforms-container-full button[type=submit]:focus:after, div.wpforms-container-full input[type=submit]:focus:after {
            content: "";
            position: absolute;
            border: 2px solid var(--wpforms-button-background-color);
            border-radius: calc(var(--wpforms-button-border-radius) + 2px);
            top: calc(-4px - var(--wpforms-button-border-size, 1px));
            right: calc(-4px - var(--wpforms-button-border-size, 1px));
            bottom: calc(-4px - var(--wpforms-button-border-size, 1px));
            left: calc(-4px - var(--wpforms-button-border-size, 1px))
        }

        div.wpforms-container-full .wpforms-page-button.wpforms-disabled, div.wpforms-container-full .wpforms-page-button:disabled, div.wpforms-container-full .wpforms-page-button:disabled:hover, div.wpforms-container-full button[type=submit].wpforms-disabled, div.wpforms-container-full button[type=submit]:disabled, div.wpforms-container-full button[type=submit]:disabled:hover, div.wpforms-container-full input[type=submit].wpforms-disabled, div.wpforms-container-full input[type=submit]:disabled, div.wpforms-container-full input[type=submit]:disabled:hover {
            background-color: var(--wpforms-button-background-color-alt, var(--wpforms-button-background-color));
            cursor: default
        }

        div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=date]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=email]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=month]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=number]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=password]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=range]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=search]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=tel]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=text]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=time]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=url]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) select:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) textarea:disabled {
            cursor: not-allowed;
            opacity: .5
        }

        div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=checkbox]:disabled:after, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=checkbox]:disabled:before, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=radio]:disabled:after, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=radio]:disabled:before {
            cursor: not-allowed;
            opacity: .5
        }

        div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) .wpforms-page-button.wpforms-disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) .wpforms-page-button:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) .wpforms-page-button:disabled:hover, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) button[type=submit].wpforms-disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) button[type=submit]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) button[type=submit]:disabled:hover, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=submit].wpforms-disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=submit]:disabled, div.wpforms-container-full:not(.wpforms-gutenberg-form-selector) input[type=submit]:disabled:hover {
            opacity: .5
        }

        div.wpforms-container-full input[type=checkbox], div.wpforms-container-full input[type=radio] {
            position: relative;
            display: inline-block;
            background: 0 0;
            height: calc(var(--wpforms-field-size-checkbox-size) - 2px + calc(var(--wpforms-field-border-size, 1px) * 2));
            width: calc(var(--wpforms-field-size-checkbox-size) - 2px + calc(var(--wpforms-field-border-size, 1px) * 2));
            margin: 0 0 0 2px;
            border: none;
            box-shadow: none;
            vertical-align: middle;
            opacity: 1;
            appearance: none
        }

        div.wpforms-container-full input[type=checkbox]:after, div.wpforms-container-full input[type=checkbox]:before, div.wpforms-container-full input[type=radio]:after, div.wpforms-container-full input[type=radio]:before {
            content: '';
            position: absolute;
            left: -2px;
            top: -2px;
            width: var(--wpforms-field-size-checkbox-size);
            height: var(--wpforms-field-size-checkbox-size);
            box-sizing: content-box;
            cursor: pointer
        }

        div.wpforms-container-full input[type=checkbox]:before, div.wpforms-container-full input[type=radio]:before {
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            background-color: var(--wpforms-field-background-color);
            background-clip: padding-box;
            background-image: none;
            border-radius: 3px
        }

        div.wpforms-container-full input[type=checkbox] + label, div.wpforms-container-full input[type=radio] + label {
            display: inline;
            position: relative;
            padding-inline-start: 12px;
            font-size: var(--wpforms-label-size-font-size);
            cursor: pointer;
            vertical-align: middle
        }

        div.wpforms-container-full input[type=checkbox]:checked:before, div.wpforms-container-full input[type=radio]:checked:before {
            margin: 0;
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full input[type=checkbox]:focus, div.wpforms-container-full input[type=radio]:focus {
            outline: 0
        }

        div.wpforms-container-full input[type=checkbox]:focus:before, div.wpforms-container-full input[type=radio]:focus:before {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full input[type=checkbox]:checked:after {
            border-top: none;
            border-right: none;
            height: calc(var(--wpforms-field-size-checkbox-size) * .6);
            border-left: 4px solid var(--wpforms-button-background-color);
            border-bottom: 4px solid var(--wpforms-button-background-color);
            background-color: transparent;
            transform: translate(0, 1px) scale(.5) rotate(-45deg);
            left: calc(-4px + var(--wpforms-field-border-size, 1px));
            top: calc(-3px + var(--wpforms-field-border-size, 1px))
        }

        div.wpforms-container-full input[type=radio] {
            border-radius: 50%
        }

        div.wpforms-container-full input[type=radio]:before {
            border-radius: 50%
        }

        div.wpforms-container-full input[type=radio]:checked:after {
            border: 1px solid transparent;
            border-radius: 50%;
            background-color: var(--wpforms-button-background-color);
            transform: scale(.5);
            -moz-transform: scale(.47);
            left: calc(-3px + var(--wpforms-field-border-size, 1px));
            top: calc(-3px + var(--wpforms-field-border-size, 1px))
        }

        div.wpforms-container-full .wpforms-field.wpforms-field-checkbox ul, div.wpforms-container-full .wpforms-field.wpforms-field-gdpr-checkbox ul, div.wpforms-container-full .wpforms-field.wpforms-field-payment-checkbox ul, div.wpforms-container-full .wpforms-field.wpforms-field-payment-multiple ul, div.wpforms-container-full .wpforms-field.wpforms-field-radio ul {
            display: grid;
            grid-template-columns:repeat(1, auto);
            padding: 0;
            gap: var(--wpforms-field-size-input-spacing)
        }

        div.wpforms-container-full .wpforms-field.wpforms-field-checkbox ul li, div.wpforms-container-full .wpforms-field.wpforms-field-gdpr-checkbox ul li, div.wpforms-container-full .wpforms-field.wpforms-field-payment-checkbox ul li, div.wpforms-container-full .wpforms-field.wpforms-field-payment-multiple ul li, div.wpforms-container-full .wpforms-field.wpforms-field-radio ul li {
            height: unset;
            line-height: var(--wpforms-field-size-checkbox-size);
            display: flex;
            align-items: flex-start;
            margin: 0
        }

        div.wpforms-container-full .wpforms-field.wpforms-field-checkbox ul li input, div.wpforms-container-full .wpforms-field.wpforms-field-gdpr-checkbox ul li input, div.wpforms-container-full .wpforms-field.wpforms-field-payment-checkbox ul li input, div.wpforms-container-full .wpforms-field.wpforms-field-payment-multiple ul li input, div.wpforms-container-full .wpforms-field.wpforms-field-radio ul li input {
            min-width: var(--wpforms-field-size-checkbox-size);
            margin-top: calc((var(--wpforms-label-size-font-size) * 1.3 - var(--wpforms-field-size-checkbox-size)) / 1.5)
        }

        div.wpforms-container-full .wpforms-field.wpforms-field-checkbox ul li input + label, div.wpforms-container-full .wpforms-field.wpforms-field-gdpr-checkbox ul li input + label, div.wpforms-container-full .wpforms-field.wpforms-field-payment-checkbox ul li input + label, div.wpforms-container-full .wpforms-field.wpforms-field-payment-multiple ul li input + label, div.wpforms-container-full .wpforms-field.wpforms-field-radio ul li input + label {
            padding-inline-start: 12px;
            margin: 0;
            line-height: 1.3
        }

        div.wpforms-container.wpforms-container-full .wpforms-form ul.wpforms-icon-choices {
            margin: 0 !important;
            gap: 22px
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled select.wpforms-payment-price {
            display: inline-block;
            max-width: calc(60% - 85px)
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled select.wpforms-payment-price.wpforms-field-large {
            max-width: calc(100% - 85px)
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled.wpforms-field-select-style-modern {
            display: flex;
            flex-wrap: wrap;
            column-gap: 15px;
            align-items: flex-start
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled.wpforms-field-select-style-modern .wpforms-field-label {
            min-width: 100%
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled.wpforms-field-select-style-modern .choices {
            margin-bottom: 0
        }

        .wpforms-container .wpforms-form .wpforms-payment-quantities-enabled.wpforms-field-select-style-modern .wpforms-error {
            flex-basis: 100%
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices {
            font-size: var(--wpforms-field-size-font-size);
            line-height: 19px;
            color: var(--wpforms-field-text-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices .choices__inner {
            background-color: var(--wpforms-field-background-color);
            background-clip: padding-box;
            min-height: var(--wpforms-field-size-input-height);
            padding: 6.5px 24px 0 7px;
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            border-radius: var(--wpforms-field-border-radius);
            cursor: pointer
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices ::-webkit-input-placeholder {
            color: inherit;
            opacity: .5
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices ::-moz-placeholder {
            color: inherit;
            opacity: .5
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices :-ms-input-placeholder {
            color: inherit;
            opacity: .5
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices.is-focused .choices__inner, div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices.is-open .choices__inner {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices.is-open:before {
            content: '';
            position: absolute;
            height: 3px;
            background: var(--wpforms-field-background-color);
            width: calc(100% - 2px);
            left: 1px;
            right: 1px;
            z-index: 100000000000;
            opacity: 1;
            border-radius: 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices.is-open:not(.is-flipped):before {
            top: unset;
            bottom: 1px
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern .choices.is-open:not(.is-flipped) .choices__inner {
            border-radius: var(--wpforms-field-border-radius) var(--wpforms-field-border-radius) 0 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern.wpforms-has-error .choices .choices__inner {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern.wpforms-has-error .choices:hover .choices__inner {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 2px 0 var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern.wpforms-has-error .choices.is-focused .choices__inner, div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-select-style-modern.wpforms-has-error .choices.is-open .choices__inner {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 0 1px var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range] {
            appearance: none;
            height: calc(var(--wpforms-field-size-input-height) / 4);
            padding: 0;
            margin-top: calc(var(--wpforms-field-size-input-spacing) + var(--wpforms-field-size-input-height) / 4);
            margin-bottom: calc(var(--wpforms-field-size-input-height) / 4);
            border-radius: var(--wpforms-field-border-radius);
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]:first-child {
            margin-top: calc(var(--wpforms-field-size-input-height) * .25)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]:focus:invalid {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0;
            color: var(--wpforms-field-text-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]::-webkit-slider-runnable-track {
            height: calc(var(--wpforms-field-size-input-height) / 4);
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]::-webkit-slider-thumb {
            appearance: none;
            width: calc(var(--wpforms-field-size-input-height) * .6);
            height: calc(var(--wpforms-field-size-input-height) * .6);
            margin-top: calc(-1 * var(--wpforms-field-size-input-height) * .18);
            background-color: var(--wpforms-button-background-color);
            background-clip: padding-box;
            cursor: pointer;
            border-radius: 100%;
            border-width: var(--wpforms-button-border-size);
            border-style: var(--wpforms-button-border-style);
            border-color: var(--wpforms-button-border-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]::-moz-range-thumb {
            appearance: none;
            width: calc(var(--wpforms-field-size-input-height) * .6);
            height: calc(var(--wpforms-field-size-input-height) * .6);
            margin-top: calc(-1 * var(--wpforms-field-size-input-height) * .18);
            background-color: var(--wpforms-button-background-color);
            background-clip: padding-box;
            cursor: pointer;
            border-radius: 100%;
            border-width: var(--wpforms-button-border-size);
            border-style: var(--wpforms-button-border-style);
            border-color: var(--wpforms-button-border-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]::-ms-thumb {
            appearance: none;
            width: calc(var(--wpforms-field-size-input-height) * .6);
            height: calc(var(--wpforms-field-size-input-height) * .6);
            margin-top: calc(-1 * var(--wpforms-field-size-input-height) * .18);
            background-color: var(--wpforms-button-background-color);
            background-clip: padding-box;
            cursor: pointer;
            border-radius: 100%;
            border-width: var(--wpforms-button-border-size);
            border-style: var(--wpforms-button-border-style);
            border-color: var(--wpforms-button-border-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider .wpforms-field-number-slider-hint {
            font-size: var(--wpforms-label-size-sublabel-font-size);
            line-height: var(--wpforms-label-size-sublabel-line-height);
            color: var(--wpforms-label-sublabel-color);
            padding: var(--wpforms-field-size-sublabel-spacing) 0 0 0;
            margin: 0
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-number-slider .wpforms-field-number-slider-hint strong {
            color: var(--wpforms-label-sublabel-color)
        }

        div.wpforms-container-full .wpforms-form textarea {
            line-height: 1.3;
            min-height: var(--wpforms-field-size-input-height);
            padding: var(--wpforms-field-size-padding-h);
            resize: vertical
        }

        div.wpforms-container-full .wpforms-form textarea.wpforms-field-large {
            height: calc(var(--wpforms-field-size-input-height) * 5.1)
        }

        div.wpforms-container-full .wpforms-form textarea:focus {
            color: var(--wpforms-field-text-color)
        }

        @media only screen and (max-width: 768px) {
            div.wpforms-container-full:not(:empty) {
                padding: calc(min(var(--wpforms-container-padding), 40px))
            }
        }

        @media only screen and (max-width: 600px) {
            .wpforms-form .wpforms-payment-quantities-enabled select.wpforms-payment-price {
                width: calc(100% - 85px) !important;
                max-width: 100% !important
            }

            div.wpforms-container-full:not(:empty) {
                padding: calc(min(var(--wpforms-container-padding), 20px))
            }

            div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range] {
                margin: 20px 0
            }

            div.wpforms-container-full .wpforms-form .wpforms-field-number-slider input[type=range]::-webkit-slider-thumb {
                width: 30px;
                height: 30px
            }

            div.wpforms-container-full .wpforms-form .wpforms-page-indicator.connector .wpforms-page-indicator-page-title {
                display: none
            }
        }

        .wpforms-container .wpforms-datepicker-wrap {
            width: 100%;
            position: relative
        }

        .wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear {
            position: absolute;
            background-image: var(--wpr-bg-d09a45b9-8261-4900-9caa-6c6a1ab1c935);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, .35);
            background-size: 8px;
            width: 16px;
            height: 16px;
            cursor: pointer;
            display: block;
            border-radius: 50%;
            right: 10px;
            top: 50%;
            margin-top: -8px;
            transition: all .25s
        }

        .wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear:hover {
            background-color: #d63637
        }

        .wpforms-container .wpforms-page-indicator {
            margin: 0 0 20px;
            overflow: hidden
        }

        .wpforms-container .wpforms-page-indicator.circles {
            border-top: 1px solid rgba(0, 0, 0, .25);
            border-bottom: 1px solid rgba(0, 0, 0, .25);
            padding: 15px 10px;
            display: flex;
            justify-content: flex-start
        }

        .wpforms-container .wpforms-page-indicator.circles .wpforms-page-indicator-page {
            margin: 0 20px 0 0
        }

        .wpforms-container .wpforms-page-indicator.circles .wpforms-page-indicator-page:last-of-type {
            margin: 0
        }

        .wpforms-container .wpforms-page-indicator.circles .wpforms-page-indicator-page-number {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            display: inline-block;
            margin: 0 10px 0 0;
            line-height: 40px;
            text-align: center;
            background-color: rgba(0, 0, 0, .25);
            color: rgba(0, 0, 0, .7)
        }

        .wpforms-container .wpforms-page-indicator.circles .active .wpforms-page-indicator-page-number {
            color: #fff
        }

        .wpforms-container .wpforms-page-indicator.connector {
            display: flex;
            justify-content: flex-start
        }

        .wpforms-container .wpforms-page-indicator.connector .wpforms-page-indicator-page {
            text-align: center;
            line-height: 1.2
        }

        .wpforms-container .wpforms-page-indicator.connector .wpforms-page-indicator-page-number {
            display: block;
            text-indent: -9999px;
            height: 6px;
            background-color: rgba(0, 0, 0, .25);
            margin: 0 0 16px;
            position: relative
        }

        .wpforms-container .wpforms-page-indicator.connector .wpforms-page-indicator-page-triangle {
            position: absolute;
            top: 100%;
            left: 50%;
            width: 0;
            height: 0;
            margin-left: -5px;
            border-style: solid;
            border-width: 6px 5px 0;
            border-color: transparent
        }

        .wpforms-container .wpforms-page-indicator.connector .wpforms-page-indicator-page-title {
            display: inline-block;
            padding: 0 15px;
            font-size: 16px
        }

        .wpforms-container .wpforms-page-indicator.progress {
            font-size: 18px
        }

        .wpforms-container .wpforms-page-indicator.progress .wpforms-page-indicator-page-progress {
            height: 18px;
            position: absolute;
            left: 0;
            top: 0
        }

        .wpforms-container .wpforms-field-rating-item {
            padding: 0 3px 0 0;
            margin: 0;
            display: inline-block
        }

        .wpforms-container .wpforms-field-rating-item svg {
            cursor: pointer;
            opacity: .6;
            fill: rgba(0, 0, 0, .2);
            transition: fill .15s
        }

        .wpforms-container .wpforms-field-rating-item.hover svg, .wpforms-container .wpforms-field-rating-item.selected svg {
            opacity: 1;
            fill: currentColor
        }

        .wpforms-container .wpforms-form textarea.wp-editor-area.wpforms-field-large {
            height: 400px
        }

        .wpforms-container .wpforms-form textarea.wp-editor-area:focus {
            outline: 0
        }

        .wpforms-container .wpforms-form em.wpforms-error {
            min-width: 90px
        }

        div.wpforms-container-full .wpforms-form .wpforms-page-button {
            min-width: 90px
        }

        div.wpforms-container-full .wpforms-form .wpforms-page-indicator {
            color: var(--wpforms-label-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-page-indicator.connector .wpforms-page-indicator-page:not(.active) .wpforms-page-indicator-page-number {
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            opacity: .2
        }

        div.wpforms-container-full .wpforms-form .wpforms-page-indicator.circles {
            border-top-width: var(--wpforms-field-border-size);
            border-top-style: var(--wpforms-field-border-style);
            border-top-color: var(--wpforms-field-border-color);
            border-bottom-width: var(--wpforms-field-border-size);
            border-bottom-style: var(--wpforms-field-border-style);
            border-bottom-color: var(--wpforms-field-border-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-page-indicator.circles .wpforms-page-indicator-page:not(.active) .wpforms-page-indicator-page-number {
            background: linear-gradient(90deg, var(--wpforms-field-border-color) -1000%, transparent 500%);
            color: var(--wpforms-label-color);
            opacity: 1
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container {
            padding: 0
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__selected-flag {
            border-top-left-radius: var(--wpforms-field-border-radius);
            border-bottom-left-radius: var(--wpforms-field-border-radius);
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: transparent
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__selected-flag:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content {
            border-radius: var(--wpforms-field-border-radius)
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list {
            border-radius: var(--wpforms-field-border-radius);
            background: var(--wpforms-field-menu-color) !important;
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            font-size: var(--wpforms-field-size-font-size);
            max-height: 350px
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-scrollbar {
            background: 0 0;
            width: 12px;
            height: 12px
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-scrollbar-track {
            background: 0 0
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 4px 4px var(--wpforms-field-text-color);
            background: 0 0;
            border-radius: 12px;
            border: 3px solid transparent
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-resizer, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-scrollbar-button, div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list::-webkit-scrollbar-corner {
            display: none
        }

        @-moz-document url-prefix() {
            div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list {
                scrollbar-color: var(--wpforms-field-text-color) transparent;
                scrollbar-width: thin
            }
        }

        div.wpforms-container-full .wpforms-form .iti--allow-dropdown .iti__flag-container .iti__dropdown-content .iti__country-list .iti__divider {
            border-bottom-width: 1px !important;
            border-bottom-style: var(--wpforms-field-border-style) !important;
            border-bottom-color: var(--wpforms-field-border-color) !important
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file] {
            font-style: normal;
            font-weight: 400;
            font-size: var(--wpforms-label-size-sublabel-font-size);
            line-height: var(--wpforms-label-size-sublabel-line-height);
            color: var(--wpforms-label-sublabel-color);
            padding: 1px;
            height: auto;
            width: 60%;
            border: none !important;
            box-shadow: none;
            background-color: transparent;
            cursor: pointer
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]::-webkit-file-upload-button {
            background-color: var(--wpforms-field-background-color);
            background-clip: padding-box;
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            border-radius: var(--wpforms-field-border-radius);
            color: var(--wpforms-field-text-color);
            padding: calc(var(--wpforms-field-size-input-height) / 6) var(--wpforms-field-size-padding-h);
            font-weight: 400;
            font-size: calc(var(--wpforms-label-size-sublabel-font-size) - 2px);
            line-height: 1.1;
            margin-inline-end: 10px;
            cursor: pointer;
            transition: all .15s ease-out
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]::-webkit-file-upload-button:active, div.wpforms-container-full .wpforms-field-file-upload input[type=file]::-webkit-file-upload-button:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]::file-selector-button {
            background-color: var(--wpforms-field-background-color);
            background-clip: padding-box;
            border-width: var(--wpforms-field-border-size);
            border-style: var(--wpforms-field-border-style);
            border-color: var(--wpforms-field-border-color);
            border-radius: var(--wpforms-field-border-radius);
            color: var(--wpforms-field-text-color);
            padding: calc(var(--wpforms-field-size-input-height) / 6) var(--wpforms-field-size-padding-h);
            font-weight: 400;
            font-size: calc(var(--wpforms-label-size-sublabel-font-size) - 2px);
            line-height: 1.1;
            margin-inline-end: 10px;
            cursor: pointer;
            transition: all .15s ease-out
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]::file-selector-button:active, div.wpforms-container-full .wpforms-field-file-upload input[type=file]::file-selector-button:focus {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]:hover::-webkit-file-upload-button {
            background: linear-gradient(0deg, rgba(0, 0, 0, .03), rgba(0, 0, 0, .03)), var(--wpforms-field-background-color);
            background-clip: padding-box
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]:hover::file-selector-button {
            background: linear-gradient(0deg, rgba(0, 0, 0, .03), rgba(0, 0, 0, .03)), var(--wpforms-field-background-color);
            background-clip: padding-box
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]:focus {
            outline: 0
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]:focus::-webkit-file-upload-button {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-field-file-upload input[type=file]:focus::file-selector-button {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-button-background-color);
            box-shadow: 0 0 0 1px var(--wpforms-button-background-color), 0 1px 2px rgba(0, 0, 0, .15);
            outline: 0
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file] {
            border: none !important;
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file]::-webkit-file-upload-button {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file]:hover {
            border: none !important;
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file]:hover::-webkit-file-upload-button {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 2px 0 var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file]:focus {
            border: none !important;
            box-shadow: none
        }

        div.wpforms-container-full .wpforms-field-file-upload.wpforms-has-error input[type=file]:focus::-webkit-file-upload-button {
            border-width: var(--wpforms-field-border-size);
            border-style: solid;
            border-color: var(--wpforms-label-error-color);
            box-shadow: 0 0 0 1px var(--wpforms-label-error-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-rating-item svg {
            opacity: .2;
            fill: var(--wpforms-label-color)
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-rating-item.hover svg, div.wpforms-container-full .wpforms-form .wpforms-field-rating-item.selected svg {
            opacity: 1;
            fill: currentColor
        }

        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-border-style: solid;
            --wpforms-field-border-size: 1px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, .25);
            --wpforms-field-border-color-spare: rgba(0, 0, 0, .25);
            --wpforms-field-text-color: rgba(0, 0, 0, .7);
            --wpforms-field-menu-color: #ffffff;
            --wpforms-label-color: rgba(0, 0, 0, .85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, .55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-border-style: none;
            --wpforms-button-border-size: 1px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-border-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-page-break-color: #066aab;
            --wpforms-background-image: none;
            --wpforms-background-position: center center;
            --wpforms-background-repeat: no-repeat;
            --wpforms-background-size: cover;
            --wpforms-background-width: 100px;
            --wpforms-background-height: 100px;
            --wpforms-background-color: rgba(0, 0, 0, 0);
            --wpforms-background-url: none;
            --wpforms-container-padding: 0px;
            --wpforms-container-border-style: none;
            --wpforms-container-border-width: 1px;
            --wpforms-container-border-color: #000000;
            --wpforms-container-border-radius: 3px;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;
            --wpforms-container-shadow-size-box-shadow: none
        }

        .elementor-widget-wpforms.elementor-element-28ee838 {
            --wpforms-button-background-color: #0044FF;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px
        }</style>
    <link rel="preload" data-rocket-preload as="image" href="../wp-content/uploads/2024/05/Header-Banner.png"
          fetchpriority="high">
    <link rel="canonical" href="index.html"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Profit Calculator - {{ env('APP_NAME') }}"/>
    <meta property="og:description"
          content="Profit Calculator Profit Calculator Profit Calculator Initial Deposit ($) Monthly Deposit ($) Risk Setting: Recommended Settings Time (Years) Time (Months) Total Profit $0 Account Balance $0 Total Invested $0 Monthly Gain 0% Drawdown 0%"/>
    <meta property="og:url" content="https://metatrading.ai/profit-calculator/"/>
    <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
    <meta property="article:modified_time" content="2024-07-11T17:23:03+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:label1" content="Est. reading time"/>
    <meta name="twitter:data1" content="1 minute"/>

    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='http://www.googletagmanager.com/'/>
    <link rel='dns-prefetch' href='http://183796.t.hyros.com/'/>
    <link rel='dns-prefetch' href='http://connect.facebook.net/'/>
    <link rel='dns-prefetch' href='http://fast.vidalytics.com/'/>

    <link rel='dns-prefetch' href='http://fonts.gstatic.com/'/>
    <link rel='dns-prefetch' href='http://widget.trustpilot.com/'/>
    <link rel='dns-prefetch' href='http://www.clarity.ms/'/>
    <link rel='dns-prefetch' href='http://www.fxblue.com/'/>

    <link rel="alternate" type="application/rss+xml" title="{{ env('APP_NAME') }} &raquo; Feed" href="../feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="{{ env('APP_NAME') }} &raquo; Comments Feed"
          href="../comments/feed/index.html"/>

    <style id='wp-emoji-styles-inline-css'></style>
    <style id='classic-theme-styles-inline-css'></style>
    <style id='global-styles-inline-css'></style>


    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <!-- Google tag (gtag.js) snippet added by Site Kit -->

    <!-- Google Analytics snippet added by Site Kit -->
    <script type="rocketlazyloadscript" data-rocket-src="https://www.googletagmanager.com/gtag/js?id=GT-NS9Z33SB"
            id="google_gtagjs-js" async></script>
    <script type="rocketlazyloadscript" id="google_gtagjs-js-after">
        window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag("set","linker",{"domains":["metatrading.ai"]});
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "GT-NS9Z33SB");
    </script>

    <!-- End Google tag (gtag.js) snippet added by Site Kit -->
    <link rel="https://api.w.org/" href="../wp-json/index.html"/>
    <link rel="alternate" title="JSON" type="application/json" href="../wp-json/wp/v2/pages/915.json"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd"/>
    <meta name="generator" content="WordPress 6.7.2"/>
    <link rel='shortlink' href='../index07cd.html?p=915'/>
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
          href="../wp-json/oembed/1.0/embed856c.json?url=https%3A%2F%2Fmetatrading.ai%2Fprofit-calculator%2F"/>
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
          href="../wp-json/oembed/1.0/embedeab8?url=https%3A%2F%2Fmetatrading.ai%2Fprofit-calculator%2F&amp;format=xml"/>
    <meta name="generator" content="Site Kit by Google 1.128.1"/>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
         (function(c,l,a,r,i,t,y){ c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)}; t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i; y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y); })(window, document, "clarity", "script", "mx292zbvbj");
    </script>
    <meta name="generator"
          content="Elementor 3.21.6; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, e_lazyload; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta name="redi-version" content="1.2.2"/>
    <style></style>
    <!-- Google tag (gtag.js) -->
    <script type="rocketlazyloadscript" async
            data-rocket-src="https://www.googletagmanager.com/gtag/js?id=AW-16673513135"></script>
    <script type="rocketlazyloadscript">
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16673513135');
    </script><!-- Meta Pixel Code -->
    <script type="rocketlazyloadscript">
        !function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '654546949094432');
fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=654546949094432&amp;ev=PageView&amp;noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
    <script type="rocketlazyloadscript">
        var head = document.head;
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = "https://183796.t.hyros.com/v1/lst/universal-script?ph=a46a10422a6e92a90fc239fc155de39ab5a7deef5f4a18521cb441f2d1caea16&tag=!clicked&ref_url=" + encodeURI(document.URL) ;
head.appendChild(script);
    </script>
    <link rel="icon" href="../wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e-32x32.png" sizes="32x32"/>
    <link rel="icon" href="../wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon" href="../wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://metatrading.ai/wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e-270x270.png"/>
    <style id="wp-custom-css"></style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
                display: none !important;
            }</style>
    </noscript>
    <style id="wpforms-css-vars-root"></style>
    <!-- TikTok Pixel Code Start -->
    <script type="rocketlazyloadscript">
        !function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('CSH15FJC77U3K05HES0G');
  ttq.page();
}(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->
    <style id="wpr-lazyload-bg-container"></style>
    <style
        id="wpr-lazyload-bg-exclusion">.elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background), .elementor-915 .elementor-element.elementor-element-d1d2202 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            --wpr-bg-f60a2d13-8da8-46e8-8b99-fff077474c19: url('../wp-content/uploads/2024/05/Header-Banner.png');
        }</style>
    <noscript>
        <style
            id="wpr-lazyload-bg-nostyle">.elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background), .elementor-593 .elementor-element.elementor-element-e6dd587 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-b55458fa-2e09-4e92-9bd2-246dde5515ff: url('../wp-content/uploads/2024/05/Rectangle-124.html');
            }

            .results {
                --wpr-bg-eced821e-bd38-4e1d-a6e0-d0798589bcf2: url('../wp-content/uploads/2024/05/Rectangle-124.html');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-8dc5584d-d276-4390-aabb-be9fc12b24cc: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flagsc4ca.html?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-c42ab386-b80c-40cf-911a-0a4b81cdd920: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flags%402xc4ca.html?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-6204f5bf-01ba-4b41-94fa-b38c753b80cb: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flagsc4ca.png?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-f51993fa-900e-48ad-ad99-3a534e713f91: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flags%402xc4ca.png?1');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-3d19e6a4-0bda-472d-bcb9-e17f15804af5: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe.html');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-e4bc57e9-e6a6-482f-8306-587409dbbaf0: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe%402x.html');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-1c630efe-e150-4a33-b2c3-2e3b7f99940a: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globec4ca.png?1');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-f911fa74-37e0-4620-9db2-7324a372841b: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globe%402xc4ca.png?1');
            }

            .wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear {
                --wpr-bg-d09a45b9-8261-4900-9caa-6c6a1ab1c935: url('../wp-content/plugins/wpforms/assets/pro/images/times-solid-white.svg');
            }</style>
    </noscript>
    <script type="application/javascript">const rocket_pairs = [{
            "selector": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-b55458fa-2e09-4e92-9bd2-246dde5515ff: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg');}",
            "hash": "b55458fa-2e09-4e92-9bd2-246dde5515ff",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg"
        }, {
            "selector": ".results",
            "style": ".results{--wpr-bg-eced821e-bd38-4e1d-a6e0-d0798589bcf2: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg');}",
            "hash": "eced821e-bd38-4e1d-a6e0-d0798589bcf2",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-8dc5584d-d276-4390-aabb-be9fc12b24cc: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1');}",
            "hash": "8dc5584d-d276-4390-aabb-be9fc12b24cc",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-c42ab386-b80c-40cf-911a-0a4b81cdd920: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1');}",
            "hash": "c42ab386-b80c-40cf-911a-0a4b81cdd920",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-6204f5bf-01ba-4b41-94fa-b38c753b80cb: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1');}",
            "hash": "6204f5bf-01ba-4b41-94fa-b38c753b80cb",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-f51993fa-900e-48ad-ad99-3a534e713f91: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1');}",
            "hash": "f51993fa-900e-48ad-ad99-3a534e713f91",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-3d19e6a4-0bda-472d-bcb9-e17f15804af5: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png');}",
            "hash": "3d19e6a4-0bda-472d-bcb9-e17f15804af5",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-e4bc57e9-e6a6-482f-8306-587409dbbaf0: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png');}",
            "hash": "e4bc57e9-e6a6-482f-8306-587409dbbaf0",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-1c630efe-e150-4a33-b2c3-2e3b7f99940a: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1');}",
            "hash": "1c630efe-e150-4a33-b2c3-2e3b7f99940a",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-f911fa74-37e0-4620-9db2-7324a372841b: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1');}",
            "hash": "f911fa74-37e0-4620-9db2-7324a372841b",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1"
        }, {
            "selector": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear",
            "style": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear{--wpr-bg-d09a45b9-8261-4900-9caa-6c6a1ab1c935: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg');}",
            "hash": "d09a45b9-8261-4900-9caa-6c6a1ab1c935",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg"
        }];
        const rocket_excluded_pairs = [{
            "selector": ".elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background),.elementor-915 .elementor-element.elementor-element-d1d2202>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background),.elementor-915 .elementor-element.elementor-element-d1d2202>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-f60a2d13-8da8-46e8-8b99-fff077474c19: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png');}",
            "hash": "f60a2d13-8da8-46e8-8b99-fff077474c19",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png"
        }];</script>
</head>
<body
    class="page-template page-template-elementor_header_footer page page-id-915 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-915">


<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

@include('pages.layout.header')

<div data-elementor-type="wp-page" data-elementor-id="915" class="elementor elementor-915"
     data-elementor-post-type="page">
    <div class="elementor-element elementor-element-d1d2202 e-flex e-con-boxed e-con e-child" data-id="d1d2202"
         data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-162fba8 elementor-widget elementor-widget-heading"
                 data-id="162fba8" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <style></style>
                    <h1 class="elementor-heading-title elementor-size-default">Profit Calculator</h1></div>
            </div>
            <div
                class="elementor-element elementor-element-a2927cc elementor-align-center elementor-widget elementor-widget-breadcrumbs"
                data-id="a2927cc" data-element_type="widget" data-widget_type="breadcrumbs.default">
                <div class="elementor-widget-container">
                    <p id="breadcrumbs"><span><span><a href="../index.html">Home</a></span> » <span
                                class="breadcrumb_last" aria-current="page">Profit Calculator</span></span></p></div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-2bbdf4d e-flex e-con-boxed e-con e-parent" data-id="2bbdf4d"
         data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-b04225b elementor-widget elementor-widget-html"
                 data-id="b04225b" data-element_type="widget" data-widget_type="html.default">
                <div class="elementor-widget-container">
                    <style></style>
                </div>
            </div>
            <div class="elementor-element elementor-element-b6ea009 elementor-widget elementor-widget-html"
                 data-id="b6ea009" data-element_type="widget" data-widget_type="html.default">
                <div class="elementor-widget-container">
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>

                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Profit Calculator</title>

                        <style></style>
                        <style id="wpr-lazyload-bg-container"></style>
                        <style
                            id="wpr-lazyload-bg-exclusion">.elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background), .elementor-915 .elementor-element.elementor-element-d1d2202 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                --wpr-bg-f60a2d13-8da8-46e8-8b99-fff077474c19: url('../wp-content/uploads/2024/05/Header-Banner.png');
                            }</style>
                        <noscript>
                            <style
                                id="wpr-lazyload-bg-nostyle">.elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background), .elementor-593 .elementor-element.elementor-element-e6dd587 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                    --wpr-bg-b55458fa-2e09-4e92-9bd2-246dde5515ff: url('../wp-content/uploads/2024/05/Rectangle-124.html');
                                }

                                .results {
                                    --wpr-bg-eced821e-bd38-4e1d-a6e0-d0798589bcf2: url('../wp-content/uploads/2024/05/Rectangle-124.html');
                                }

                                body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                                    --wpr-bg-8dc5584d-d276-4390-aabb-be9fc12b24cc: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flagsc4ca.html?1');
                                }

                                body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                                    --wpr-bg-c42ab386-b80c-40cf-911a-0a4b81cdd920: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flags%402xc4ca.html?1');
                                }

                                body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                                    --wpr-bg-6204f5bf-01ba-4b41-94fa-b38c753b80cb: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flagsc4ca.png?1');
                                }

                                body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                                    --wpr-bg-f51993fa-900e-48ad-ad99-3a534e713f91: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flags%402xc4ca.png?1');
                                }

                                body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                                    --wpr-bg-3d19e6a4-0bda-472d-bcb9-e17f15804af5: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe.html');
                                }

                                body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                                    --wpr-bg-e4bc57e9-e6a6-482f-8306-587409dbbaf0: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe%402x.html');
                                }

                                body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                                    --wpr-bg-1c630efe-e150-4a33-b2c3-2e3b7f99940a: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globec4ca.png?1');
                                }

                                body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                                    --wpr-bg-f911fa74-37e0-4620-9db2-7324a372841b: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globe%402xc4ca.png?1');
                                }

                                .wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear {
                                    --wpr-bg-d09a45b9-8261-4900-9caa-6c6a1ab1c935: url('../wp-content/plugins/wpforms/assets/pro/images/times-solid-white.svg');
                                }</style>
                        </noscript>
                        <script type="application/javascript">const rocket_pairs = [{
                                "selector": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer",
                                "style": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-b55458fa-2e09-4e92-9bd2-246dde5515ff: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg');}",
                                "hash": "b55458fa-2e09-4e92-9bd2-246dde5515ff",
                                "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg"
                            }, {
                                "selector": ".results",
                                "style": ".results{--wpr-bg-eced821e-bd38-4e1d-a6e0-d0798589bcf2: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg');}",
                                "hash": "eced821e-bd38-4e1d-a6e0-d0798589bcf2",
                                "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg"
                            }, {
                                "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
                                "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-8dc5584d-d276-4390-aabb-be9fc12b24cc: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1');}",
                                "hash": "8dc5584d-d276-4390-aabb-be9fc12b24cc",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1"
                            }, {
                                "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
                                "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-c42ab386-b80c-40cf-911a-0a4b81cdd920: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1');}",
                                "hash": "c42ab386-b80c-40cf-911a-0a4b81cdd920",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1"
                            }, {
                                "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
                                "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-6204f5bf-01ba-4b41-94fa-b38c753b80cb: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1');}",
                                "hash": "6204f5bf-01ba-4b41-94fa-b38c753b80cb",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1"
                            }, {
                                "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
                                "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-f51993fa-900e-48ad-ad99-3a534e713f91: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1');}",
                                "hash": "f51993fa-900e-48ad-ad99-3a534e713f91",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1"
                            }, {
                                "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
                                "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-3d19e6a4-0bda-472d-bcb9-e17f15804af5: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png');}",
                                "hash": "3d19e6a4-0bda-472d-bcb9-e17f15804af5",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png"
                            }, {
                                "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
                                "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-e4bc57e9-e6a6-482f-8306-587409dbbaf0: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png');}",
                                "hash": "e4bc57e9-e6a6-482f-8306-587409dbbaf0",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png"
                            }, {
                                "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
                                "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-1c630efe-e150-4a33-b2c3-2e3b7f99940a: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1');}",
                                "hash": "1c630efe-e150-4a33-b2c3-2e3b7f99940a",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1"
                            }, {
                                "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
                                "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-f911fa74-37e0-4620-9db2-7324a372841b: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1');}",
                                "hash": "f911fa74-37e0-4620-9db2-7324a372841b",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1"
                            }, {
                                "selector": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear",
                                "style": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear{--wpr-bg-d09a45b9-8261-4900-9caa-6c6a1ab1c935: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg');}",
                                "hash": "d09a45b9-8261-4900-9caa-6c6a1ab1c935",
                                "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg"
                            }];
                            const rocket_excluded_pairs = [{
                                "selector": ".elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background),.elementor-915 .elementor-element.elementor-element-d1d2202>.elementor-motion-effects-container>.elementor-motion-effects-layer",
                                "style": ".elementor-915 .elementor-element.elementor-element-d1d2202:not(.elementor-motion-effects-element-type-background),.elementor-915 .elementor-element.elementor-element-d1d2202>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-f60a2d13-8da8-46e8-8b99-fff077474c19: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png');}",
                                "hash": "f60a2d13-8da8-46e8-8b99-fff077474c19",
                                "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png"
                            }];</script>
                    </head>
                    <body>
                    <div class="calculator">
                        <h2>Profit Calculator</h2>

                        <label for="initialDeposit">Initial Deposit ($)</label>
                        <input type="number" id="initialDeposit" min="0" placeholder="Enter initial deposit">

                        <label for="monthlyDeposit">Monthly Deposit ($)</label>
                        <input type="number" id="monthlyDeposit" min="0" placeholder="Enter monthly deposit">

                        <label for="risk">Risk Setting:</label>
                        <input type="range" id="risk" min="1" max="5" value="3">
                        <span id="riskOutput">Recommended Settings</span>

                        <label for="timeYears">Time (Years)</label>
                        <input type="number" id="timeYears" min="0" placeholder="Enter time in years">

                        <label for="timeMonths">Time (Months)</label>
                        <input type="number" id="timeMonths" min="0" max="11" placeholder="Enter additional months">

                        <div class="results">
                            <div class="result-item">
                                <div class="result-label">Total Profit</div>
                                <div id="totalProfit" class="result-value">$0</div>
                            </div>
                            <div class="result-item">
                                <div class="result-label">Account Balance</div>
                                <div id="accountBalance" class="result-value">$0</div>
                            </div>
                            <div class="result-item">
                                <div class="result-label">Total Invested</div>
                                <div id="totalInvested" class="result-value">$0</div>
                            </div>
                            <div class="result-item">
                                <div class="result-label">Monthly Gain</div>
                                <div id="monthlyGain" class="result-value">0%</div>
                            </div>
                            <div class="result-item">
                                <div class="result-label">Drawdown</div>
                                <div id="drawdown" class="result-value">0%</div>
                            </div>
                        </div>
                    </div>

                    <script type="rocketlazyloadscript">
                        const riskSettings = [
            { label: "Very Low", gain: 5.11, drawdown: 5.23, color: "--risk-very-low" },
            { label: "Low", gain: 8.24, drawdown: 8.44, color: "--risk-low" },
            { label: "Recommended Settings", gain: 9.70, drawdown: 10.40, color: "--risk-medium" },
            { label: "High", gain: 16.32, drawdown: 16.78, color: "--risk-high" },
            { label: "Very High", gain: 22.64, drawdown: 24.8, color: "--risk-very-high" }
        ];

        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => input.addEventListener('input', updateCalculation));
            updateCalculation(); // Initial update
        });

        function updateCalculation() {
            const initialDeposit = parseFloat(document.getElementById('initialDeposit').value) || 0;
            const monthlyDeposit = parseFloat(document.getElementById('monthlyDeposit').value) || 0;
            const riskIndex = parseInt(document.getElementById('risk').value) - 1;
            const timeYears = parseInt(document.getElementById('timeYears').value) || 0;
            const timeMonths = parseInt(document.getElementById('timeMonths').value) || 0;
            const totalMonths = timeYears * 12 + timeMonths;
            const monthlyGain = riskSettings[riskIndex].gain;
            const drawdown = riskSettings[riskIndex].drawdown;

            let balance = initialDeposit;
            for (let i = 0; i < totalMonths; i++) {
                balance += monthlyDeposit;
                balance *= (1 + monthlyGain / 100);
            }

            const profit = balance - initialDeposit - (monthlyDeposit * totalMonths);
            const totalInvested = initialDeposit + (monthlyDeposit * totalMonths);

            document.getElementById('totalProfit').textContent = formatCurrency(profit);
            document.getElementById('accountBalance').textContent = formatCurrency(balance);
            document.getElementById('totalInvested').textContent = formatCurrency(totalInvested);
            document.getElementById('monthlyGain').textContent = `${monthlyGain.toFixed(2)}%`;
            document.getElementById('drawdown').textContent = `${drawdown.toFixed(2)}%`;
            document.getElementById('riskOutput').textContent = riskSettings[riskIndex].label;
            document.getElementById('riskOutput').style.color = getComputedStyle(document.documentElement).getPropertyValue(riskSettings[riskIndex].color);
        }

        function formatCurrency(number) {
            return `$${number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
        }
                    </script>
                    <script>class RocketElementorAnimation {
                            constructor() {
                                this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode-wpr", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode)
                            }

                            _detectAnimations() {
                                let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
                                this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t => {
                                    const e = t.getBoundingClientRect();
                                    if (e.bottom >= 0 && e.top <= window.innerHeight) try {
                                        this._animateElement(t)
                                    } catch (t) {
                                    }
                                })
                            }

                            _animateElement(t) {
                                const e = JSON.parse(t.dataset.settings),
                                    i = e._animation_delay || e.animation_delay || 0,
                                    n = e[this.animationSettingKeys.find(t => e[t])];
                                if ("none" === n) return void t.classList.remove("elementor-invisible");
                                t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n;
                                let s = setTimeout(() => {
                                    t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this._removeAnimationSettings(t, e)
                                }, i);
                                window.addEventListener("rocket-startLoading", function () {
                                    clearTimeout(s)
                                })
                            }

                            _listAnimationSettingsKeys(t = "mobile") {
                                const e = [""];
                                switch (t) {
                                    case"mobile":
                                        e.unshift("_mobile");
                                    case"tablet":
                                        e.unshift("_tablet");
                                    case"desktop":
                                        e.unshift("_desktop")
                                }
                                const i = [];
                                return ["animation", "_animation"].forEach(t => {
                                    e.forEach(e => {
                                        i.push(t + e)
                                    })
                                }), i
                            }

                            _removeAnimationSettings(t, e) {
                                this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e)
                            }

                            static run() {
                                const t = new RocketElementorAnimation;
                                requestAnimationFrame(t._detectAnimations.bind(t))
                            }
                        }

                        document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);</script>
                    </body>

                    <!-- Mirrored from metatrading.ai/profit-calculator/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 09:02:12 GMT -->
                    </html>
                </div>
            </div>
        </div>
    </div>
</div>

@include('pages.layout.footer')



<script id="rocket-preload-links-js-extra">
    var RocketPreloadLinksConfig = {
        "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
        "usesTrailingSlash": "1",
        "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
        "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
        "siteUrl": "https:\/\/metatrading.ai",
        "onHoverDelay": "100",
        "rateThrottle": "3"
    };
</script>
<script type="rocketlazyloadscript" id="rocket-preload-links-js-after">
    (function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("../index.html")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("../index.html")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script id="rocket_lazyload_css-js-extra">
    var rocket_lazyload_css_data = {"threshold": "300"};
</script>
<script id="rocket_lazyload_css-js-after">
    !function o(n, c, a) {
        function u(t, e) {
            if (!c[t]) {
                if (!n[t]) {
                    var r = "function" == typeof require && require;
                    if (!e && r) return r(t, !0);
                    if (s) return s(t, !0);
                    throw (e = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND", e
                }
                r = c[t] = {exports: {}}, n[t][0].call(r.exports, function (e) {
                    return u(n[t][1][e] || e)
                }, r, r.exports, o, n, c, a)
            }
            return c[t].exports
        }

        for (var s = "function" == typeof require && require, e = 0; e < a.length; e++) u(a[e]);
        return u
    }({
        1: [function (e, t, r) {
            "use strict";
            {
                const c = "undefined" == typeof rocket_pairs ? [] : rocket_pairs,
                    a = (("undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs).map(t => {
                        var e = t.selector;
                        document.querySelectorAll(e).forEach(e => {
                            e.setAttribute("data-rocket-lazy-bg-" + t.hash, "excluded")
                        })
                    }), document.querySelector("#wpr-lazyload-bg-container"));
                var o = rocket_lazyload_css_data.threshold || 300;
                const u = new IntersectionObserver(e => {
                    e.forEach(t => {
                        t.isIntersecting && c.filter(e => t.target.matches(e.selector)).map(t => {
                            var e;
                            t && ((e = document.createElement("style")).textContent = t.style, a.insertAdjacentElement("afterend", e), t.elements.forEach(e => {
                                u.unobserve(e), e.setAttribute("data-rocket-lazy-bg-" + t.hash, "loaded")
                            }))
                        })
                    })
                }, {rootMargin: o + "px"});

                function n() {
                    0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && c.forEach(t => {
                        try {
                            document.querySelectorAll(t.selector).forEach(e => {
                                "loaded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && (u.observe(e), (t.elements ||= []).push(e))
                            })
                        } catch (e) {
                            console.error(e)
                        }
                    })
                }

                n(), function () {
                    const r = window.MutationObserver;
                    return function (e, t) {
                        if (e && 1 === e.nodeType) return (t = new r(t)).observe(e, {
                            attributes: !0,
                            childList: !0,
                            subtree: !0
                        }), t
                    }
                }()(document.querySelector("body"), n)
            }
        }, {}]
    }, {}, [1]);
    //# sourceMappingURL=lazyload-css.min.js.map
</script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.0.2"
        id="hello-theme-frontend-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"
        data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"
        id="smartmenus-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/lottie.min.js?ver=4.10.34"
        id="lottie-js-js" data-rocket-defer defer></script>
<script id="premium-addons-js-extra">
    var PremiumSettings = {"ajaxurl": "https:\/\/metatrading.ai\/wp-admin\/admin-ajax.php", "nonce": "0c5afbb110"};
</script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-addons.min.js?ver=4.10.34"
        id="premium-addons-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.21.3"
        id="elementor-pro-webpack-runtime-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.21.6"
        id="elementor-webpack-runtime-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.21.6"
        id="elementor-frontend-modules-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
<script type="rocketlazyloadscript" id="wp-i18n-js-after">
    wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type="rocketlazyloadscript" id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/metatrading.ai\/wp-admin\/admin-ajax.php","nonce":"87b7327883","urls":{"assets":"https:\/\/metatrading.ai\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/metatrading.ai\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/metatrading.ai\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.21.3"
        id="elementor-pro-frontend-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"
        data-rocket-defer defer></script>
<script type="rocketlazyloadscript" id="elementor-frontend-js-before">
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.21.6","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"container_grid":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"home_screen":true,"editor_v2":true,"nested-elements":true,"e_lazyload":true,"display-conditions":true},"urls":{"assets":"https:\/\/metatrading.ai\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal"},"post":{"id":915,"title":"Profit%20Calculator%20-%20Metatrading.ai","excerpt":"","featuredImage":false}};
</script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.21.6"
        id="elementor-frontend-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.21.3"
        id="pro-elements-handlers-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript" data-rocket-src="https://metatrading.ai/wp-includes/js/underscore.min.js?ver=1.13.7"
        id="underscore-js" data-rocket-defer defer></script>
<script id="wp-util-js-extra">
    var _wpUtilSettings = {"ajax": {"url": "\/wp-admin\/admin-ajax.php"}};
</script>
<script type="rocketlazyloadscript" data-rocket-src="https://metatrading.ai/wp-includes/js/wp-util.min.js?ver=6.7.2"
        id="wp-util-js" data-rocket-defer defer></script>
<script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {"captcha_provider": "recaptcha", "recaptcha_type": "v2"};
</script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js?ver=1.8.9.1"
        id="wpforms-elementor-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/pro/lib/intl-tel-input/jquery.intl-tel-input.min.js?ver=20.1.0"
        id="wpforms-smart-phone-field-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/lib/jquery.validate.min.js?ver=1.20.0"
        id="wpforms-validation-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/lib/jquery.inputmask.min.js?ver=5.0.7-beta.29"
        id="wpforms-maskedinput-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/lib/mailcheck.min.js?ver=1.1.2"
        id="wpforms-mailcheck-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/lib/punycode.min.js?ver=1.0.0"
        id="wpforms-punycode-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/js/share/utils.min.js?ver=1.8.9.1"
        id="wpforms-generic-utils-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/js/frontend/wpforms.min.js?ver=1.8.9.1"
        id="wpforms-js" data-rocket-defer defer></script>
<script type="rocketlazyloadscript"
        data-rocket-src="https://metatrading.ai/wp-content/plugins/wpforms/assets/js/frontend/wpforms-modern.min.js?ver=1.8.9.1"
        id="wpforms-modern-js" data-rocket-defer defer></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpforms_settings = {
        "val_required": "This field is required.",
        "val_email": "Please enter a valid email address.",
        "val_email_suggestion": "Did you mean {suggestion}?",
        "val_email_suggestion_title": "Click to accept this suggestion.",
        "val_email_restricted": "This email address is not allowed.",
        "val_number": "Please enter a valid number.",
        "val_number_positive": "Please enter a valid positive number.",
        "val_minimum_price": "Amount entered is less than the required minimum.",
        "val_confirm": "Field values do not match.",
        "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
        "val_limit_characters": "{count} of {limit} max characters.",
        "val_limit_words": "{count} of {limit} max words.",
        "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
        "val_turnstile_fail_msg": "Cloudflare Turnstile verification failed, please try again later.",
        "val_inputmask_incomplete": "Please fill out the field in required format.",
        "uuid_cookie": "1",
        "locale": "en",
        "wpforms_plugin_url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/",
        "gdpr": "",
        "ajaxurl": "https:\/\/metatrading.ai\/wp-admin\/admin-ajax.php",
        "mailcheck_enabled": "1",
        "mailcheck_domains": [],
        "mailcheck_toplevel_domains": ["dev"],
        "is_ssl": "1",
        "currency_code": "USD",
        "currency_thousands": ",",
        "currency_decimals": "2",
        "currency_decimal": ".",
        "currency_symbol": "$",
        "currency_symbol_pos": "left",
        "val_requiredpayment": "Payment is required.",
        "val_creditcard": "Please enter a valid credit card number.",
        "css_vars": ["field-border-radius", "field-border-style", "field-border-size", "field-background-color", "field-border-color", "field-text-color", "field-menu-color", "label-color", "label-sublabel-color", "label-error-color", "button-border-radius", "button-border-style", "button-border-size", "button-background-color", "button-border-color", "button-text-color", "page-break-color", "background-image", "background-position", "background-repeat", "background-size", "background-width", "background-height", "background-color", "background-url", "container-padding", "container-border-style", "container-border-width", "container-border-color", "container-border-radius", "field-size-input-height", "field-size-input-spacing", "field-size-font-size", "field-size-line-height", "field-size-padding-h", "field-size-checkbox-size", "field-size-sublabel-spacing", "field-size-icon-size", "label-size-font-size", "label-size-line-height", "label-size-sublabel-font-size", "label-size-sublabel-line-height", "button-size-font-size", "button-size-height", "button-size-padding-h", "button-size-margin-top", "container-shadow-size-box-shadow"],
        "val_post_max_size": "The total size of the selected files {totalSize} MB exceeds the allowed limit {maxSize} MB.",
        "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
        "val_time_limit": "Please enter time between {minTime} and {maxTime}.",
        "val_url": "Please enter a valid URL.",
        "val_fileextension": "File type is not allowed.",
        "val_filesize": "File exceeds max size allowed. File was not uploaded.",
        "post_max_size": "67108864",
        "isModernMarkupEnabled": "1",
        "formErrorMessagePrefix": "Form error message",
        "errorMessagePrefix": "Error message",
        "submitBtnDisabled": "Submit button is disabled during form submission.",
        "error_updating_token": "Error updating token. Please try again or contact support if the issue persists.",
        "network_error": "Network error or server is unreachable. Check your connection or try again later.",
        "token_cache_lifetime": "86400",
        "val_password_strength": "A stronger password is required. Consider using upper and lower case letters, numbers, and symbols.",
        "val_phone": "Please enter a valid phone number.",
        "indicatorStepsPattern": "Step {current} of {total}",
        "entry_preview_iframe_styles": ["https:\/\/metatrading.ai\/wp-includes\/js\/tinymce\/skins\/lightgray\/content.min.css?ver=6.7.2", "index.html\/\/metatrading.ai\/wp-includes\/css\/dashicons.min.css?ver=6.7.2", "index.html\/\/metatrading.ai\/wp-includes\/js\/tinymce\/skins\/wordpress\/wp-content.css?ver=6.7.2", "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/richtext\/editor-content.min.css"]
    }
    /* ]]> */
</script>
<script>window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    }, {
        elements_selector: ".rocket-lazyload",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
    }];
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            continue
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            continue
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {childList: !0, subtree: !0};
            observer.observe(b, config)
        }
    }, !1)</script>
<script data-no-minify="1" async
        src="../wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
</body>
</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1741668874 -->
