<!doctype html>
<html lang="en-US">

<!-- Mirrored from metatrading.ai/our-solutions/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 09:01:54 GMT -->
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
    <title>Our Solutions - Metatrading.ai</title>
    <link rel="preload" data-rocket-preload as="font"
          href="https://fonts.gstatic.com/s/inter/v18/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7.woff2" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
          href="https://fonts.gstatic.com/s/plusjakartasans/v8/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yw.woff2" crossorigin>
    <style id="wpr-usedcss">.premium-banner-ib {
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

        .premium-fancy-text-wrapper.auto-fade g > text {
            text-anchor: start;
            shape-rendering: crispEdges;
            opacity: 0;
            font-size: 300px;
            -webkit-animation-name: pa-auto-fade;
            animation-name: pa-auto-fade;
            -moz-animation-name: pa-auto-fade;
            -webkit-animation-duration: 9s;
            animation-duration: 9s;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .premium-fancy-text-wrapper.auto-fade g > text:first-child {
            -webkit-animation-delay: 0s;
            animation-delay: 0s
        }

        .premium-fancy-text-wrapper.auto-fade g > text:nth-child(2) {
            -webkit-animation-delay: 3s;
            animation-delay: 3s
        }

        .premium-fancy-text-wrapper.auto-fade g > text:nth-child(3) {
            -webkit-animation-delay: 6s;
            animation-delay: 6s
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

        @-webkit-keyframes pa-auto-fade {
            0% {
                opacity: 0
            }
            20% {
                opacity: 1
            }
            35% {
                opacity: 0
            }
            100% {
                opacity: 0
            }
        }

        @keyframes pa-auto-fade {
            0% {
                opacity: 0
            }
            20% {
                opacity: 1
            }
            35% {
                opacity: 0
            }
            100% {
                opacity: 0
            }
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

        .premium-post-ticker__post-wrapper a, .premium-post-ticker__post-wrapper i {
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

        small {
            font-size: 80%
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

        .page-content a {
            text-decoration: underline
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

        .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
            margin-inline-start: auto;
            margin-inline-end: auto;
            width: 100%
        }

        @media (max-width: 575px) {
            .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
                padding-inline-start: 10px;
                padding-inline-end: 10px
            }
        }

        @media (min-width: 576px) {
            .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
                max-width: 500px
            }
        }

        @media (min-width: 768px) {
            .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
                max-width: 600px
            }
        }

        @media (min-width: 992px) {
            .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
                max-width: 800px
            }
        }

        @media (min-width: 1200px) {
            .site-header:not(.dynamic-header), body:not([class*=elementor-page-]) .site-main {
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

        .site-navigation-toggle-holder.elementor-active .site-navigation-toggle i:before {
            content: "\e87f"
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

        .elementor-widget-wrap .elementor-element.elementor-widget__width-auto, .elementor-widget-wrap .elementor-element.elementor-widget__width-initial {
            max-width: 100%
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

        .elementor-align-right {
            text-align: right
        }

        .elementor-align-right .elementor-button {
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

            .elementor-mobile-align-center {
                text-align: center
            }

            .elementor-mobile-align-center .elementor-button {
                width: auto
            }
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

        .elementor-widget:not(:last-child).elementor-absolute, .elementor-widget:not(:last-child).elementor-widget__width-auto, .elementor-widget:not(:last-child).elementor-widget__width-initial {
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

        .e-con.e-grid {
            --grid-justify-content: start;
            --grid-align-content: start;
            --grid-auto-flow: row
        }

        .e-con.e-grid, .e-con.e-grid > .e-con-inner {
            grid-template-columns:var(--e-con-grid-template-columns);
            grid-template-rows:var(--e-con-grid-template-rows);
            justify-content: var(--grid-justify-content);
            align-content: var(--grid-align-content);
            grid-auto-flow: var(--grid-auto-flow);
            justify-items: var(--justify-items);
            align-items: var(--align-items)
        }

        .e-con-boxed.e-flex {
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: normal;
            align-items: normal;
            align-content: normal
        }

        .e-con-boxed.e-grid {
            justify-items: legacy;
            grid-template-columns:1fr;
            grid-template-rows:1fr
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

        .e-con.e-grid > .e-con-inner {
            justify-items: var(--justify-items);
            align-items: var(--align-items)
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

        .elementor-icon {
            display: inline-block;
            line-height: 1;
            transition: all .3s;
            color: #69727d;
            font-size: 50px;
            text-align: center
        }

        .elementor-icon:hover {
            color: #69727d
        }

        .elementor-icon i, .elementor-icon svg {
            width: 1em;
            height: 1em;
            position: relative;
            display: block
        }

        .elementor-icon i:before, .elementor-icon svg:before {
            position: absolute;
            left: 50%;
            transform: translateX(-50%)
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

        .elementor-element.elementor-pagination-position-outside .swiper, .elementor-element.elementor-pagination-position-outside .swiper-container, .elementor-lightbox.elementor-pagination-position-outside .swiper, .elementor-lightbox.elementor-pagination-position-outside .swiper-container {
            padding-bottom: 30px
        }

        .elementor-element.elementor-pagination-position-outside .swiper .elementor-swiper-button, .elementor-element.elementor-pagination-position-outside .swiper-container .elementor-swiper-button, .elementor-element.elementor-pagination-position-outside .swiper-container ~ .elementor-swiper-button, .elementor-element.elementor-pagination-position-outside .swiper ~ .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper-container .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper-container ~ .elementor-swiper-button, .elementor-lightbox.elementor-pagination-position-outside .swiper ~ .elementor-swiper-button {
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

        .elementor-widget-icon-box.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary)
        }

        .elementor-widget-icon-box .elementor-icon-box-title {
            color: var(--e-global-color-primary)
        }

        .elementor-widget-icon-box .elementor-icon-box-title, .elementor-widget-icon-box .elementor-icon-box-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-icon-box .elementor-icon-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text)
        }

        .elementor-widget-icon-list .elementor-icon-list-icon i {
            color: var(--e-global-color-primary)
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

        .elementor-636 .elementor-element.elementor-element-42a63b7 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --overlay-opacity: 0.5;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-42a63b7::before, .elementor-636 .elementor-element.elementor-element-42a63b7 > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-42a63b7 > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-42a63b7 > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-42a63b7 > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-42a63b7 > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
            --background-overlay: ''
        }

        .elementor-636 .elementor-element.elementor-element-42a63b7, .elementor-636 .elementor-element.elementor-element-42a63b7::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-e0c5884 {
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

        .elementor-636 .elementor-element.elementor-element-e0c5884:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-e0c5884 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: var(--wpr-bg-f94e5b16-ff6b-4d83-b0fd-e2deeb24a598);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-e0c5884, .elementor-636 .elementor-element.elementor-element-e0c5884::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-6866b6c {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-6866b6c .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-470a7b9 a {
            color: var(--e-global-color-1fd20c4)
        }

        .elementor-636 .elementor-element.elementor-element-dcb26eb {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: -21px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-dec1a3b {
            right: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-dec1a3b {
            left: 0
        }

        .elementor-636 .elementor-element.elementor-element-dec1a3b {
            top: 0
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-9e8e85f {
            right: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-9e8e85f {
            left: 0
        }

        .elementor-636 .elementor-element.elementor-element-9e8e85f {
            top: 1px
        }

        .elementor-636 .elementor-element.elementor-element-7933cf0 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            --overlay-opacity: 0.45;
            --margin-top: 50px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 1
        }

        .elementor-636 .elementor-element.elementor-element-7933cf0::before, .elementor-636 .elementor-element.elementor-element-7933cf0 > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-7933cf0 > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-7933cf0 > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-7933cf0 > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-7933cf0 > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
            --background-overlay: ''
        }

        .elementor-636 .elementor-element.elementor-element-7933cf0, .elementor-636 .elementor-element.elementor-element-7933cf0::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-a4260b8 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: space-between;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-e13edc1 .elementor-heading-title {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-6849545 {
            color: #fff;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-2b55695 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-4d077c3 {
            text-align: right
        }

        .elementor-636 .elementor-element.elementor-element-4d077c3 img {
            border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 36px 0 rgba(0, 68, 255, .32941176470588235)
        }

        .elementor-636 .elementor-element.elementor-element-72b6888 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-7166233 {
            right: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-7166233 {
            left: 0
        }

        .elementor-636 .elementor-element.elementor-element-7166233 {
            top: 0
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-fae6aff {
            left: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-fae6aff {
            right: 0
        }

        .elementor-636 .elementor-element.elementor-element-fae6aff {
            top: 0
        }

        .elementor-636 .elementor-element.elementor-element-2f48141 {
            --display: flex;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 50px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-96fa374 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-96fa374 .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 500;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-220b430 {
            text-align: center;
            width: var(--container-widget-width, 80%);
            max-width: 80%;
            --container-widget-width: 80%;
            --container-widget-flex-grow: 0
        }

        .elementor-636 .elementor-element.elementor-element-220b430 .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-220b430.elementor-element {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-aa2b8fb {
            --display: flex;
            --background-transition: 0.3s;
            --z-index: 9
        }

        .elementor-636 .elementor-element.elementor-element-08caf2f {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4e23b9d {
            --display: flex;
            --min-height: 300px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: center;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-4e23b9d:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-4e23b9d > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-4e23b9d, .elementor-636 .elementor-element.elementor-element-4e23b9d::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4e23b9d.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-4308f00 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-79cd9d5 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-2c63c38 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-5928221 {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-5928221 .elementor-heading-title {
            color: #fff;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-weight: 900
        }

        .elementor-636 .elementor-element.elementor-element-7933e21 {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-7933e21 .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 900;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-d534c7e {
            --display: flex;
            --justify-content: flex-end;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-dca8f4e .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-960cc53 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-8756539 {
            --display: flex;
            --min-height: 300px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: center;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-8756539:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-8756539 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-8756539, .elementor-636 .elementor-element.elementor-element-8756539::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-8756539.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-c8b76bb {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-60c4f95 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-27f0768 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-2515f8c {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-2515f8c .elementor-heading-title {
            color: #fff;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-weight: 900
        }

        .elementor-636 .elementor-element.elementor-element-fa6c6df {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-fa6c6df .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 900;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-9f086c8 {
            --display: flex;
            --justify-content: flex-end;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-a758338 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-04f6527 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-7dbfa1b {
            --display: flex;
            --min-height: 300px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: center;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-7dbfa1b:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-7dbfa1b > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-7dbfa1b, .elementor-636 .elementor-element.elementor-element-7dbfa1b::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-7dbfa1b.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-749ba41 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-f636b66 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-e9b3435 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-1308041 {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-1308041 .elementor-heading-title {
            color: #fff;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-weight: 900
        }

        .elementor-636 .elementor-element.elementor-element-87e450f {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-87e450f .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 900;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-55d0ed8 {
            --display: flex;
            --justify-content: flex-end;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-22f30de .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-fe5046a {
            --display: flex;
            --background-transition: 0.3s;
            --overlay-opacity: 1;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 100px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-fe5046a::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
            --background-overlay: '';
            background-image: var(--wpr-bg-50660374-ae31-47da-8c5a-7369de87cda2);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-19c2028 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-19c2028 .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 500;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-92d3bd3 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-92d3bd3 .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-0de229a {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            --margin-top: 50px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-0de229a, .elementor-636 .elementor-element.elementor-element-0de229a::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-5ca7078 {
            --display: flex;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-5ca7078:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-5ca7078 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-5ca7078, .elementor-636 .elementor-element.elementor-element-5ca7078::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-5ca7078.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-b88375d {
            --icon-box-icon-margin: 0px
        }

        .elementor-636 .elementor-element.elementor-element-b88375d .elementor-icon-box-title {
            margin-bottom: 36px;
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-b88375d.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-b88375d .elementor-icon {
            font-size: 146px
        }

        .elementor-636 .elementor-element.elementor-element-b88375d .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-b88375d .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 30px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-b88375d .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-4782b92 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-c8e7250 {
            text-align: center;
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800
        }

        .elementor-636 .elementor-element.elementor-element-27aa1ac {
            --display: flex;
            --min-height: 580px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-27aa1ac:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-27aa1ac > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-27aa1ac, .elementor-636 .elementor-element.elementor-element-27aa1ac::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-27aa1ac.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-03751dc {
            --icon-box-icon-margin: 0px
        }

        .elementor-636 .elementor-element.elementor-element-03751dc .elementor-icon-box-title {
            margin-bottom: 36px;
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-03751dc.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-03751dc .elementor-icon {
            font-size: 146px
        }

        .elementor-636 .elementor-element.elementor-element-03751dc .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-03751dc .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 30px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-03751dc .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-a3485f0 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-dd9c24f {
            text-align: center;
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800
        }

        .elementor-636 .elementor-element.elementor-element-5fb0d87 {
            --display: flex;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-5fb0d87:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-5fb0d87 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-5fb0d87, .elementor-636 .elementor-element.elementor-element-5fb0d87::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-5fb0d87.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49 {
            --icon-box-icon-margin: 0px
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49 .elementor-icon-box-title {
            margin-bottom: 36px;
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49 .elementor-icon {
            font-size: 146px
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-9c52c49 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 30px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-9c52c49 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-55b2852 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-c04cb81 {
            text-align: center;
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800
        }

        .elementor-636 .elementor-element.elementor-element-a8f7b06 {
            --display: flex;
            --min-height: 580px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-a8f7b06:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-a8f7b06 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-a8f7b06, .elementor-636 .elementor-element.elementor-element-a8f7b06::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-a8f7b06.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415 {
            --icon-box-icon-margin: 0px
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415 .elementor-icon-box-title {
            margin-bottom: 36px;
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415 .elementor-icon {
            font-size: 146px
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-5fd7415 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 30px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-5fd7415 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-3ec4c19 .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-1fd20c4);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-636 .elementor-element.elementor-element-cee3015 {
            text-align: center;
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800
        }

        .elementor-636 .elementor-element.elementor-element-54e17ee {
            --display: flex;
            --background-transition: 0.3s;
            --overlay-opacity: 1;
            --margin-top: -19px;
            --margin-bottom: 100px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-54e17ee::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
            --background-overlay: '';
            background-image: var(--wpr-bg-64fd9ae5-11ed-4a1c-9132-25c55f967134);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-09abd54 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 100px;
            --padding-bottom: 100px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-09abd54:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-09abd54 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: var(--wpr-bg-b5eded51-9e49-4d30-8e27-472594ad1c17);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-09abd54, .elementor-636 .elementor-element.elementor-element-09abd54::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-8d7eebf {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-8d7eebf .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-20e2849 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-20e2849 .elementor-heading-title {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 22px;
            font-weight: 500;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-26f3394 {
            --display: grid;
            --e-con-grid-template-columns: repeat(3, 1fr);
            --e-con-grid-template-rows: repeat(2, 1fr);
            --grid-auto-flow: row;
            --background-transition: 0.3s;
            --margin-top: 50px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-527335a {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-527335a:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-527335a > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-527335a, .elementor-636 .elementor-element.elementor-element-527335a::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-527335a.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896 {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896 .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896 .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-ef9b896 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-ef9b896 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-640e0ce {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-960ee16 {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-960ee16:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-960ee16 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-960ee16, .elementor-636 .elementor-element.elementor-element-960ee16::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-960ee16.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-781e66a {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-781e66a.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-781e66a .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-781e66a .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-781e66a .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-781e66a .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-781e66a .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-5e62c36 {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-721ade5 {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-721ade5:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-721ade5 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-721ade5, .elementor-636 .elementor-element.elementor-element-721ade5::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-721ade5.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-b531e09 {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-b531e09.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-b531e09 .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-b531e09 .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-b531e09 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-b531e09 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-b531e09 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-5847473 {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-d0be32f {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-d0be32f:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-d0be32f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-d0be32f, .elementor-636 .elementor-element.elementor-element-d0be32f::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-d0be32f.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-4d4edca .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-4d4edca .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-3efb734 {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-dd1b2e7 {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-dd1b2e7:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-dd1b2e7 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-dd1b2e7, .elementor-636 .elementor-element.elementor-element-dd1b2e7::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-dd1b2e7.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-a76e044 {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-a76e044.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-a76e044 .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-a76e044 .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-a76e044 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-a76e044 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-a76e044 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-eef31d2 {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-d2edebd {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-d2edebd:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-d2edebd > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D
        }

        .elementor-636 .elementor-element.elementor-element-d2edebd, .elementor-636 .elementor-element.elementor-element-d2edebd::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-d2edebd.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-1c70138 {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-1c70138.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-1c70138 .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-1c70138 .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-1c70138 .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-1c70138 .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-1c70138 .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-d4910e3 {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-e178ba7 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 50px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 0
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-edbc6a8 {
            right: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-edbc6a8 {
            left: 0
        }

        .elementor-636 .elementor-element.elementor-element-edbc6a8 {
            top: 0
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-4a07f28 {
            left: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-4a07f28 {
            right: 0
        }

        .elementor-636 .elementor-element.elementor-element-4a07f28 {
            top: 0
        }

        .elementor-636 .elementor-element.elementor-element-be6f318 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-0ee5867 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-0ee5867 .elementor-heading-title {
            color: var(--e-global-color-1fd20c4);
            font-family: Inter, Sans-serif;
            font-size: 26px;
            font-weight: 500;
            text-transform: capitalize;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-f4c9176 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-f4c9176 .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-1ee088f {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-3c05059 {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-3c05059:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-3c05059 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #09122BCF
        }

        .elementor-636 .elementor-element.elementor-element-3c05059, .elementor-636 .elementor-element.elementor-element-3c05059::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-3c05059.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon-box-wrapper {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon-box-title {
            color: #fffFFF7A
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-5af68aa .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-ed2298c .elementor-icon-list-icon i {
            color: #fffFFF75;
            transition: color .3s
        }

        .elementor-636 .elementor-element.elementor-element-ed2298c .elementor-icon-list-icon svg {
            fill: #FFFFFF75;
            transition: fill .3s
        }

        .elementor-636 .elementor-element.elementor-element-ed2298c {
            --e-icon-list-icon-size: 6px;
            --icon-vertical-offset: 0px
        }

        .elementor-636 .elementor-element.elementor-element-ed2298c .elementor-icon-list-item > .elementor-icon-list-text, .elementor-636 .elementor-element.elementor-element-ed2298c .elementor-icon-list-item > a {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-ed2298c .elementor-icon-list-text {
            color: #fffFFF73;
            transition: color .3s
        }

        .elementor-636 .elementor-element.elementor-element-67e8fbe {
            --display: flex;
            --min-height: 250px;
            --justify-content: space-around;
            --background-transition: 0.3s;
            border-style: solid;
            --border-style: solid;
            border-width: 3px;
            --border-top-width: 3px;
            --border-right-width: 3px;
            --border-bottom-width: 3px;
            --border-left-width: 3px;
            border-color: var(--e-global-color-1fd20c4);
            --border-color: var(--e-global-color-1fd20c4);
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 25px 0 rgba(255, 255, 255, .34);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-67e8fbe:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-67e8fbe > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #09122BCF
        }

        .elementor-636 .elementor-element.elementor-element-67e8fbe, .elementor-636 .elementor-element.elementor-element-67e8fbe::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-67e8fbe.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon-box-wrapper {
            text-align: left
        }

        .elementor-636 .elementor-element.elementor-element-690977c {
            --icon-box-icon-margin: 19px
        }

        .elementor-636 .elementor-element.elementor-element-690977c.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-0024921);
            color: var(--e-global-color-0024921);
            border-color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon {
            font-size: 50px
        }

        .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon-box-title {
            color: var(--e-global-color-0024921)
        }

        .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon-box-title, .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon-box-title a {
            font-family: Inter, Sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 30px
        }

        .elementor-636 .elementor-element.elementor-element-690977c .elementor-icon-box-description {
            color: #e4e4e4;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 17px
        }

        .elementor-636 .elementor-element.elementor-element-e5c89cc .elementor-icon-list-icon i {
            color: #fffFFF75;
            transition: color .3s
        }

        .elementor-636 .elementor-element.elementor-element-e5c89cc .elementor-icon-list-icon svg {
            fill: #FFFFFF75;
            transition: fill .3s
        }

        .elementor-636 .elementor-element.elementor-element-e5c89cc {
            --e-icon-list-icon-size: 6px;
            --icon-vertical-offset: 0px
        }

        .elementor-636 .elementor-element.elementor-element-e5c89cc .elementor-icon-list-item > .elementor-icon-list-text, .elementor-636 .elementor-element.elementor-element-e5c89cc .elementor-icon-list-item > a {
            font-family: Inter, Sans-serif;
            font-size: 15px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-e5c89cc .elementor-icon-list-text {
            color: #fffFFF73;
            transition: color .3s
        }

        .elementor-636 .elementor-element.elementor-element-b177a42 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            --margin-top: 80px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-b177a42, .elementor-636 .elementor-element.elementor-element-b177a42::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4ba4996 {
            --display: flex;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-4ba4996:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-4ba4996 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D;
            background-image: var(--wpr-bg-006080b3-7306-4481-bc50-75ab9918a341);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-4ba4996, .elementor-636 .elementor-element.elementor-element-4ba4996::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4ba4996.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-4438837 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 80px;
            --margin-bottom: 80px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-39924c6 {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-39924c6 .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 45px;
            font-weight: 700;
            text-transform: uppercase
        }

        .elementor-636 .elementor-element.elementor-element-760c181 {
            text-align: center;
            color: #f2f2f2;
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-1e1722a .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-3f7b2c6);
            border-radius: 20px 20px 20px 20px;
            box-shadow: 0 0 15px 0 rgba(0, 68, 255, .9803921568627451)
        }

        .elementor-636 .elementor-element.elementor-element-b68d58f {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 100px;
            --padding-bottom: 100px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-b68d58f:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-b68d58f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: var(--wpr-bg-7e0cf15a-0e1e-411c-9bf1-93a2dc9a03c9);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-b68d58f, .elementor-636 .elementor-element.elementor-element-b68d58f::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-1169477 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: center;
            --align-items: center;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 40px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-bf7b91d {
            text-align: right;
            width: auto;
            max-width: auto
        }

        .elementor-636 .elementor-element.elementor-element-bf7b91d .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .01em
        }

        .elementor-636 .elementor-element.elementor-element-bf7b91d > .elementor-widget-container {
            margin: 0
        }

        .elementor-636 .elementor-element.elementor-element-8337879 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-1c9e7bb {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-6b583fc {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-6b583fc:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-6b583fc > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-6b583fc, .elementor-636 .elementor-element.elementor-element-6b583fc::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-e633972 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-f39bf8f {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-c5f9e9a {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-c5f9e9a.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-275cfa2 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-6fd7371 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-e59a3e1 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-ef3e9f1 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-ef3e9f1:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-ef3e9f1 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-ef3e9f1, .elementor-636 .elementor-element.elementor-element-ef3e9f1::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-594b40a {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-665f0fa {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-f623fb9 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-f623fb9.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-175faf0 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-e307600 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-3d5f95d {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4977788 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-4977788:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-4977788 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-4977788, .elementor-636 .elementor-element.elementor-element-4977788::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-deee1b5 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-d2090c8 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-690c7ec {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-690c7ec.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-40119df .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-f9c3b1a {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-8e8d793 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-a991739 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-a991739:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-a991739 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-a991739, .elementor-636 .elementor-element.elementor-element-a991739::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-c3c7cfc {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-623fde1 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-a9c0341 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-a9c0341.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-fc3b1e6 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-08c128b {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-a022e00 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-e3ee47d {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-e3ee47d:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-e3ee47d > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-e3ee47d, .elementor-636 .elementor-element.elementor-element-e3ee47d::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-a88537d {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-6d24bc4 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-982972b {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-982972b.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-03147de .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-21606d7 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-8a6263a {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-dba613d {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-dba613d:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-dba613d > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-dba613d, .elementor-636 .elementor-element.elementor-element-dba613d::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-61620b2 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-6c5dbda {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-3c405e6 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-3c405e6.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-b27665c .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-9f76942 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-402fdce {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-ceb83a4 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-ceb83a4:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-ceb83a4 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-ceb83a4, .elementor-636 .elementor-element.elementor-element-ceb83a4::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4374119 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-f338a6f {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-39e55f1 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-39e55f1.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-60722f5 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-8b8e7fa {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-cfdbc00 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-fb2322e {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-fb2322e:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-fb2322e > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-fb2322e, .elementor-636 .elementor-element.elementor-element-fb2322e::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-95ba8b4 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-25a8989 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-9d71585 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-9d71585.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-74de839 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-199771e {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-5da08bf {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-fbabee3 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-fbabee3:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-fbabee3 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-fbabee3, .elementor-636 .elementor-element.elementor-element-fbabee3::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-26a4490 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-5fef990 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-c6efdd7 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-c6efdd7.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-f08e60d .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-97751b4 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-7d13e19 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-f9d7634 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-f9d7634:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-f9d7634 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-f9d7634, .elementor-636 .elementor-element.elementor-element-f9d7634::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-4ea0819 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-5acdb5d {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-5253de8 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-5253de8.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-d63a3bb .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-8381580 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-57bcc73 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-d45bcd9 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-d45bcd9:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-d45bcd9 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-d45bcd9, .elementor-636 .elementor-element.elementor-element-d45bcd9::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-087b571 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-26f479f {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-7b238ca {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-7b238ca.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-0e78b8a .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-e84ae73 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-677fe58 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-cb5181c {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-cb5181c:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-cb5181c > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-cb5181c, .elementor-636 .elementor-element.elementor-element-cb5181c::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-487cfbc {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-f97e6af {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-d2d1fcc {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-d2d1fcc.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-1cacec6 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-bbfb14e {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-91a2c04 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-1856a30 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-1856a30:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-1856a30 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-1856a30, .elementor-636 .elementor-element.elementor-element-1856a30::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-798fbfe {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-f1caad2 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-46352d9 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-46352d9.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-ad69103 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-7a80912 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-1734b4f {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-79652fa {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-79652fa:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-79652fa > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-79652fa, .elementor-636 .elementor-element.elementor-element-79652fa::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-0b8148d {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-aba755b {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-b6e4662 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-b6e4662.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-f7ebd5d .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-3e683af {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-63b8f79 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-5ae8bf5 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-5ae8bf5:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-5ae8bf5 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-5ae8bf5, .elementor-636 .elementor-element.elementor-element-5ae8bf5::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-b86c350 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-de99567 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-ea527b1 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-ea527b1.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-e1eef1a .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-c1a4699 {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-d87897e {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-74f4d48 {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-74f4d48:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-74f4d48 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-74f4d48, .elementor-636 .elementor-element.elementor-element-74f4d48::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-b57f323 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-7ec9677 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-d214383 {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-d214383.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-93e1a27 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-a50889c {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-a6bc8b1 {
            --display: flex;
            --background-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-475716d {
            --display: flex;
            --min-height: 287px;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 0 18px 0 rgba(0, 0, 0, .6705882352941176);
            --padding-top: 30px;
            --padding-bottom: 30px;
            --padding-left: 30px;
            --padding-right: 30px
        }

        .elementor-636 .elementor-element.elementor-element-475716d:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-475716d > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF30
        }

        .elementor-636 .elementor-element.elementor-element-475716d, .elementor-636 .elementor-element.elementor-element-475716d::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-6f0f191 {
            color: var(--e-global-color-0024921);
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-86987b5 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: space-between;
            --gap: 0px 0px;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-0ca8e7c {
            --display: flex;
            --flex-direction: row-reverse;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --justify-content: flex-end;
            --align-items: center;
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-0ca8e7c.e-con {
            --flex-grow: 0;
            --flex-shrink: 0
        }

        .elementor-636 .elementor-element.elementor-element-400ef79 .elementor-heading-title {
            color: #ebebeb;
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-636 .elementor-element.elementor-element-2462f0d {
            --display: flex;
            --justify-content: center;
            --align-items: flex-end;
            --container-widget-width: calc((1 - var(--container-widget-flex-grow)) * 100%);
            --background-transition: 0.3s;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-976496e {
            --e-n-carousel-slide-height: auto;
            --e-n-carousel-slide-container-height: 100%;
            --e-n-carousel-swiper-slides-gap: 10px;
            --e-n-carousel-swiper-pagination-size: 7px;
            --e-n-carousel-dots-normal-color: var(--e-global-color-1fd20c4);
            --e-n-carousel-dots-hover-color: var(--e-global-color-1fd20c4)
        }

        .elementor-636 .elementor-element.elementor-element-2071190 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 1
        }

        .elementor-636 .elementor-element.elementor-element-a5707ea {
            text-align: left;
            top: 0
        }

        .elementor-636 .elementor-element.elementor-element-a5707ea img {
            width: 70%
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-a5707ea {
            left: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-a5707ea {
            right: 0
        }

        body:not(.rtl) .elementor-636 .elementor-element.elementor-element-2678074 {
            right: 0
        }

        body.rtl .elementor-636 .elementor-element.elementor-element-2678074 {
            left: 0
        }

        .elementor-636 .elementor-element.elementor-element-2678074 {
            top: 0
        }

        .elementor-636 .elementor-element.elementor-element-cfa8dc3 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
            --margin-top: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 100px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-cfa8dc3, .elementor-636 .elementor-element.elementor-element-cfa8dc3::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-c0049e2 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --background-transition: 0.3s;
            --margin-top: 100px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --margin-right: 0px;
            --padding-top: 0px;
            --padding-bottom: 0px;
            --padding-left: 0px;
            --padding-right: 0px;
            --z-index: 2
        }

        .elementor-636 .elementor-element.elementor-element-c0049e2, .elementor-636 .elementor-element.elementor-element-c0049e2::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-7459bcb {
            --display: flex;
            --background-transition: 0.3s;
            --border-radius: 25px 25px 25px 25px;
            box-shadow: 0 -2px 8px 0 rgba(0, 0, 0, .5882352941176471);
            --padding-top: 25px;
            --padding-bottom: 25px;
            --padding-left: 25px;
            --padding-right: 25px
        }

        .elementor-636 .elementor-element.elementor-element-7459bcb:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-7459bcb > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #0044FF3D;
            background-image: var(--wpr-bg-342bd6b4-968f-4c4d-954f-27f45ba43159);
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-636 .elementor-element.elementor-element-7459bcb, .elementor-636 .elementor-element.elementor-element-7459bcb::before {
            --border-transition: 0.3s
        }

        .elementor-636 .elementor-element.elementor-element-7459bcb.e-con {
            --align-self: center
        }

        .elementor-636 .elementor-element.elementor-element-8f88947 {
            --display: flex;
            --background-transition: 0.3s;
            --margin-top: 80px;
            --margin-bottom: 80px;
            --margin-left: 0px;
            --margin-right: 0px
        }

        .elementor-636 .elementor-element.elementor-element-141e55d {
            text-align: center
        }

        .elementor-636 .elementor-element.elementor-element-141e55d .elementor-heading-title {
            color: var(--e-global-color-d81dce3);
            font-family: Inter, Sans-serif;
            font-size: 45px;
            font-weight: 700;
            text-transform: uppercase
        }

        .elementor-636 .elementor-element.elementor-element-3dfff34 {
            text-align: center;
            color: #f2f2f2;
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 700
        }

        .elementor-636 .elementor-element.elementor-element-11ff2a2 {
            text-align: center;
            color: #f2f2f2;
            font-family: Inter, Sans-serif;
            font-size: 16px;
            font-weight: 400
        }

        .elementor-636 .elementor-element.elementor-element-4969e8c .elementor-button {
            font-family: Inter, Sans-serif;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            background-color: var(--e-global-color-3f7b2c6);
            border-radius: 20px 20px 20px 20px;
            box-shadow: 0 0 15px 0 rgba(0, 68, 255, .9803921568627451)
        }

        :root {
            --page-title-display: none
        }

        body.elementor-page-636:not(.elementor-motion-effects-element-type-background), body.elementor-page-636 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: var(--e-global-color-3f7b2c6)
        }

        @media (max-width: 1024px) {
            .e-con {
                --container-max-width: 1024px
            }

            body:not(.rtl) .elementor-636 .elementor-element.elementor-element-9e8e85f {
                right: 0
            }

            body.rtl .elementor-636 .elementor-element.elementor-element-9e8e85f {
                left: 0
            }

            .elementor-636 .elementor-element.elementor-element-26f3394 {
                --grid-auto-flow: row
            }

            .elementor-636 .elementor-element.elementor-element-976496e {
                --e-n-carousel-swiper-slides-to-display: 2
            }
        }

        @media (max-width: 767px) {
            .e-con {
                --container-max-width: 767px
            }

            .elementor-636 .elementor-element.elementor-element-6866b6c .elementor-heading-title {
                font-size: 30px
            }

            body:not(.rtl) .elementor-636 .elementor-element.elementor-element-9e8e85f {
                right: 0
            }

            body.rtl .elementor-636 .elementor-element.elementor-element-9e8e85f {
                left: 0
            }

            .elementor-636 .elementor-element.elementor-element-7933cf0 {
                --margin-top: 30px;
                --margin-bottom: 0px;
                --margin-left: 0px;
                --margin-right: 0px;
                --padding-top: 0px;
                --padding-bottom: 0px;
                --padding-left: 10px;
                --padding-right: 10px
            }

            .elementor-636 .elementor-element.elementor-element-a4260b8.e-con {
                --order: 99999
            }

            .elementor-636 .elementor-element.elementor-element-e13edc1 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-6849545 {
                font-size: 16px
            }

            .elementor-636 .elementor-element.elementor-element-96fa374 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-220b430 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-7933e21 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-fa6c6df .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-87e450f .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-fe5046a {
                --margin-top: 0px;
                --margin-bottom: 0px;
                --margin-left: 0px;
                --margin-right: 0px;
                --padding-top: 0px;
                --padding-bottom: 50px;
                --padding-left: 0px;
                --padding-right: 0px
            }

            .elementor-636 .elementor-element.elementor-element-19c2028 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-92d3bd3 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-0de229a {
                --padding-top: 0px;
                --padding-bottom: 0px;
                --padding-left: 10px;
                --padding-right: 10px
            }

            .elementor-636 .elementor-element.elementor-element-54e17ee {
                --margin-top: 0px;
                --margin-bottom: 0px;
                --margin-left: 0px;
                --margin-right: 0px;
                --padding-top: 0px;
                --padding-bottom: 0px;
                --padding-left: 0px;
                --padding-right: 0px
            }

            .elementor-636 .elementor-element.elementor-element-09abd54 {
                --padding-top: 50px;
                --padding-bottom: 0px;
                --padding-left: 10px;
                --padding-right: 10px
            }

            .elementor-636 .elementor-element.elementor-element-8d7eebf .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-20e2849 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-26f3394 {
                --e-con-grid-template-columns: repeat(1, 1fr);
                --grid-auto-flow: row
            }

            .elementor-636 .elementor-element.elementor-element-0ee5867 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-f4c9176 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-b177a42 {
                --margin-top: 50px;
                --margin-bottom: 0px;
                --margin-left: 0px;
                --margin-right: 0px;
                --padding-top: 0px;
                --padding-bottom: 0px;
                --padding-left: 10px;
                --padding-right: 10px
            }

            .elementor-636 .elementor-element.elementor-element-39924c6 .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-bf7b91d {
                text-align: center
            }

            .elementor-636 .elementor-element.elementor-element-bf7b91d .elementor-heading-title {
                font-size: 30px
            }

            .elementor-636 .elementor-element.elementor-element-bf7b91d > .elementor-widget-container {
                padding: 0 10px
            }

            .elementor-636 .elementor-element.elementor-element-976496e {
                --e-n-carousel-swiper-slides-to-display: 1
            }

            .elementor-636 .elementor-element.elementor-element-c0049e2 {
                --padding-top: 0px;
                --padding-bottom: 0px;
                --padding-left: 10px;
                --padding-right: 10px
            }

            .elementor-636 .elementor-element.elementor-element-141e55d .elementor-heading-title {
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
            background-image: var(--wpr-bg-82d9a6fb-6535-4e08-a609-1187440c9162);
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

        .elementor-593 .elementor-element.elementor-element-5d47e23 .elementor-icon-list-icon i {
            transition: color .3s
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

        .elementor-593 .elementor-element.elementor-element-5a6bf55 .elementor-icon-list-icon i {
            color: var(--e-global-color-1fd20c4);
            transition: color .3s
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

        .elementor-593 .elementor-element.elementor-element-4ab1aa2.elementor-position-top .elementor-image-box-img {
            margin-bottom: 10px
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
            .elementor-636 .elementor-element.elementor-element-7933cf0 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-a4260b8 {
                --width: 50%
            }

            .elementor-636 .elementor-element.elementor-element-2b55695 {
                --width: 50%
            }

            .elementor-636 .elementor-element.elementor-element-2f48141 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-aa2b8fb {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-0de229a {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-09abd54 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-26f3394 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-1ee088f {
                --content-width: 800px
            }

            .elementor-636 .elementor-element.elementor-element-b177a42 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-4438837 {
                --content-width: 700px
            }

            .elementor-636 .elementor-element.elementor-element-b68d58f {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-1c9e7bb {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-c5f9e9a {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-e59a3e1 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-f623fb9 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-3d5f95d {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-690c7ec {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-8e8d793 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-a9c0341 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-a022e00 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-982972b {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-8a6263a {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-3c405e6 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-402fdce {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-39e55f1 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-cfdbc00 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-9d71585 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-5da08bf {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-c6efdd7 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-7d13e19 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-5253de8 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-57bcc73 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-7b238ca {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-677fe58 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-d2d1fcc {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-91a2c04 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-46352d9 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-1734b4f {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-b6e4662 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-63b8f79 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-ea527b1 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-d87897e {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-d214383 {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-a6bc8b1 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-0ca8e7c {
                --width: 60.013%
            }

            .elementor-636 .elementor-element.elementor-element-cfa8dc3 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-c0049e2 {
                --content-width: 1240px
            }

            .elementor-636 .elementor-element.elementor-element-8f88947 {
                --content-width: 700px
            }

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

        .elementor-670 .elementor-element.elementor-element-9feaccc {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s
        }

        .elementor-670 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar, .elementor-670 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar-wrap {
            height: 34px
        }

        .elementor-670 .elementor-element.elementor-element-1dafeda .premium-progressbar-bar, .elementor-670 .elementor-element.elementor-element-1dafeda .segment-inner {
            background-color: var(--e-global-color-1fd20c4)
        }

        .elementor-670 .elementor-element.elementor-element-1dafeda .premium-progressbar-left-label {
            color: #fff;
            margin: 19px 0 -29px 20px
        }

        .elementor-670 .elementor-element.elementor-element-1dafeda > .elementor-widget-container {
            margin: 0 0 -40px
        }

        .elementor-670 .elementor-element.elementor-element-2c9ac6f {
            text-align: center
        }

        .elementor-670 .elementor-element.elementor-element-2c9ac6f .elementor-heading-title {
            color: #000;
            font-family: Roboto, Sans-serif;
            font-size: 28px;
            font-weight: 600
        }

        .elementor-670 .elementor-element.elementor-element-2c9ac6f > .elementor-widget-container {
            margin: 0 0 13px
        }

        .elementor-670 .elementor-element.elementor-element-4cc3451 {
            --display: flex;
            --background-transition: 0.3s;
            --border-radius: 5px 5px 5px 5px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .18);
            --padding-top: 35px;
            --padding-bottom: 35px;
            --padding-left: 35px;
            --padding-right: 35px
        }

        .elementor-670 .elementor-element.elementor-element-28ee838 > .elementor-widget-container {
            margin: -42px 0 -24px
        }

        .elementor-670 .elementor-element.elementor-element-3bd8e01 img {
            width: 120px
        }

        .elementor-670 .elementor-element.elementor-element-8b21e1a img {
            width: 350px
        }

        .elementor-670 .elementor-element.elementor-element-8c697f2 {
            text-align: center;
            color: #141414;
            font-family: "Plus Jakarta Sans", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        #elementor-popup-modal-670 .dialog-message {
            width: 700px;
            height: auto;
            padding: 20px
        }

        #elementor-popup-modal-670 {
            justify-content: center;
            align-items: center;
            pointer-events: all;
            background-color: rgba(0, 0, 0, .8)
        }

        #elementor-popup-modal-670 .dialog-close-button {
            display: flex;
            top: 0;
            background-color: #1f1f1f;
            font-size: 26px
        }

        #elementor-popup-modal-670 .dialog-widget-content {
            border-style: solid;
            border-width: 11px;
            border-color: #cbd5e0;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2)
        }

        body:not(.rtl) #elementor-popup-modal-670 .dialog-close-button {
            right: 0
        }

        body.rtl #elementor-popup-modal-670 .dialog-close-button {
            left: 0
        }

        #elementor-popup-modal-670 .dialog-close-button i {
            color: #fff
        }

        #elementor-popup-modal-670 .dialog-close-button svg {
            fill: #FFFFFF
        }

        .elementor-670 .elementor-element.elementor-element-1dafeda .premium-progressbar-left-label {
            z-index: 99999999 !important;
            position: relative !important
        }

        .elementor-670 .elementor-element.elementor-element-28ee838 .SubmitButton {
            width: 100%;
            font-size: 20px;
            font-weight: 600;
            height: 60px
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
        }

        @media (min-width: 768px) {
            .elementor-nav-menu--dropdown-mobile .elementor-menu-toggle, .elementor-nav-menu--dropdown-mobile .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-mobile nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }

            .elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper {
                align-items: flex-start
            }

            .elementor-widget-icon-box.elementor-vertical-align-middle .elementor-icon-box-wrapper {
                align-items: center
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

        .elementor-widget-icon-box .elementor-icon-box-wrapper {
            display: block;
            text-align: center
        }

        .elementor-widget-icon-box .elementor-icon-box-icon {
            margin-bottom: var(--icon-box-icon-margin, 15px);
            margin-right: auto;
            margin-left: auto
        }

        .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
            display: flex
        }

        .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon {
            display: inline-flex;
            flex: 0 0 auto
        }

        .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
            text-align: start;
            flex-direction: row
        }

        .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon {
            margin-right: var(--icon-box-icon-margin, 15px);
            margin-left: 0;
            margin-bottom: unset
        }

        .elementor-widget-icon-box.elementor-position-top .elementor-icon-box-wrapper {
            display: block;
            text-align: center;
            flex-direction: unset
        }

        .elementor-widget-icon-box.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: var(--icon-box-icon-margin, 15px);
            margin-right: auto;
            margin-left: auto
        }

        @media (max-width: 767px) {
            .elementor-widget-icon-box.elementor-mobile-position-top .elementor-icon-box-wrapper {
                display: block;
                text-align: center;
                flex-direction: unset
            }

            .elementor-widget-icon-box.elementor-mobile-position-top .elementor-icon-box-icon {
                margin-bottom: var(--icon-box-icon-margin, 15px);
                margin-right: auto;
                margin-left: auto
            }

            .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon {
                display: block;
                flex: unset
            }
        }

        .elementor-widget-icon-box .elementor-icon-box-title a {
            color: inherit
        }

        .elementor-widget-icon-box .elementor-icon-box-content {
            flex-grow: 1
        }

        .elementor-widget-icon-box .elementor-icon-box-description {
            margin: 0
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

        .elementor-widget .elementor-icon-list-icon i {
            width: 1.25em;
            font-size: var(--e-icon-list-icon-size)
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

        .elementor-widget.elementor-align-right .elementor-icon-list-item, .elementor-widget.elementor-align-right .elementor-icon-list-item a {
            justify-content: flex-end;
            text-align: right
        }

        .elementor-widget.elementor-align-right .elementor-icon-list-items {
            justify-content: flex-end
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

        @media (max-width: 767px) {
            .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item, .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a {
                justify-content: center
            }

            .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after {
                margin: auto
            }

            .elementor-widget.elementor-mobile-align-center .elementor-inline-items {
                justify-content: center
            }

            .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                right: 0
            }

            .elementor-widget-image-box .elementor-image-box-img {
                margin-left: auto !important;
                margin-right: auto !important;
                margin-bottom: 15px
            }
        }

        .elementor-widget-n-carousel {
            --e-n-carousel-slides-to-show: 3;
            --e-n-carousel-swiper-slides-gap: 10px;
            --e-n-carousel-swiper-slides-to-display: 3;
            --e-n-carousel-swiper-pagination-size: 0;
            --e-n-carousel-swiper-pagination-spacing: 10px;
            --e-n-carousel-swiper-offset-size: 0;
            height: -moz-fit-content;
            height: fit-content;
            --e-n-carousel-arrow-prev-top-align: 50%;
            --e-n-carousel-arrow-prev-top-position: 0px;
            --e-n-carousel-arrow-prev-caption-spacing: 15px;
            --e-n-carousel-arrow-next-top-align: 50%;
            --e-n-carousel-arrow-next-top-position: 0px;
            --e-n-carousel-arrow-next-caption-spacing: 15px;
            --e-n-carousel-arrow-prev-left-align: 0px;
            --e-n-carousel-arrow-prev-left-position: 0px;
            --e-n-carousel-arrow-next-right-align: 0px;
            --e-n-carousel-arrow-next-right-position: 0px;
            --e-n-carousel-arrow-next-translate-x: 0px;
            --e-n-carousel-arrow-next-translate-y: 0px;
            --e-n-carousel-arrow-prev-translate-x: 0px;
            --e-n-carousel-arrow-prev-translate-y: 0px;
            --e-n-carousel-swiper-padding-bottom: calc(var(--e-n-carousel-swiper-pagination-size) + var(--e-n-carousel-swiper-pagination-spacing));
            --e-n-carousel-dots-vertical-position: 100%;
            --e-n-carousel-dots-vertical-offset: 0px;
            --e-n-carousel-dots-horizontal-position: 50%;
            --e-n-carousel-dots-horizontal-offset: 0px;
            --e-n-carousel-dots-horizontal-transform: -50%;
            --e-n-carousel-dots-vertical-transform: -100%;
            --e-n-carousel-fraction-vertical-position: 100%;
            --e-n-carousel-fraction-vertical-offset: 0px;
            --e-n-carousel-fraction-horizontal-position: 50%;
            --e-n-carousel-fraction-horizontal-offset: 0px;
            --e-n-carousel-fraction-horizontal-transform: -50%;
            --e-n-carousel-fraction-vertical-transform: -100%;
            --e-n-carousel-horizontal-transform-modifier: 1
        }

        .elementor-widget-n-carousel .e-n-carousel {
            display: flex;
            min-width: 0
        }

        .elementor-widget-n-carousel .e-n-carousel > .swiper-wrapper > .swiper-slide-active.elementor-edit-area-active {
            overflow: initial
        }

        .elementor-widget-n-carousel .e-n-carousel.offset-left {
            padding-inline-start: var(--e-n-carousel-swiper-offset-size, 0)
        }

        .elementor-widget-n-carousel .e-n-carousel.offset-both, .elementor-widget-n-carousel .e-n-carousel.offset-right {
            padding-inline-end: var(--e-n-carousel-swiper-offset-size, 0)
        }

        .elementor-widget-n-carousel .e-n-carousel.offset-both {
            padding-inline-start: var(--e-n-carousel-swiper-offset-size, 0)
        }

        .elementor-widget-n-carousel .e-n-carousel > .swiper-wrapper .swiper-slide a.e-con {
            display: var(--display)
        }

        .elementor-widget-n-carousel .e-n-carousel > .swiper-wrapper > .swiper-slide {
            flex-shrink: 0;
            height: var(--e-n-carousel-slide-height, initial)
        }

        .elementor-widget-n-carousel .e-n-carousel > .swiper-wrapper > .swiper-slide > .e-con {
            max-width: calc(100% - var(--margin-inline-start, var(--margin-left)) - var(--margin-inline-end, var(--margin-right)));
            height: var(--e-n-carousel-slide-container-height, initial)
        }

        .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-next, .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-prev {
            font-size: var(--e-n-carousel-arrow-size, 25px);
            color: var(--e-n-carousel-arrow-normal-color, hsla(0, 0%, 93.3%, .9));
            border-style: var(--e-n-carousel-arrow-normal-border-type);
            transition-duration: .25s;
            z-index: 2
        }

        .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-next svg, .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-prev svg {
            fill: var(--e-n-carousel-arrow-normal-color, hsla(0, 0%, 93.3%, .9))
        }

        .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-next:hover, .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-prev:hover {
            color: var(--e-n-carousel-arrow-hover-color, hsla(0, 0%, 93.3%, .9));
            border-style: var(--e-n-carousel-arrow-hover-border-type)
        }

        .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-next:hover svg, .elementor-widget-n-carousel .elementor-swiper-button.elementor-swiper-button-prev:hover svg {
            fill: var(--e-n-carousel-arrow-hover-color, hsla(0, 0%, 93.3%, .9))
        }

        .elementor-widget-n-carousel.elementor-element :is(.swiper,.swiper-container) ~ .elementor-swiper-button-next {
            top: calc(var(--e-n-carousel-arrow-next-top-align) + var(--e-n-carousel-arrow-next-top-position) - var(--e-n-carousel-arrow-next-caption-spacing));
            right: calc(var(--e-n-carousel-arrow-next-right-align) + var(--e-n-carousel-arrow-next-right-position));
            transform: translate(var(--e-n-carousel-arrow-next-translate-x), var(--e-n-carousel-arrow-next-translate-y))
        }

        .elementor-widget-n-carousel.elementor-element :is(.swiper,.swiper-container) ~ .elementor-swiper-button-prev {
            top: calc(var(--e-n-carousel-arrow-prev-top-align) + var(--e-n-carousel-arrow-prev-top-position) - var(--e-n-carousel-arrow-prev-caption-spacing));
            left: calc(var(--e-n-carousel-arrow-prev-left-align) + var(--e-n-carousel-arrow-prev-left-position));
            transform: translate(var(--e-n-carousel-arrow-prev-translate-x), var(--e-n-carousel-arrow-prev-translate-y))
        }

        .elementor-widget-n-carousel.elementor-pagination-type-bullets {
            --e-n-carousel-swiper-pagination-size: 6px
        }

        .elementor-widget-n-carousel .swiper-pagination-progressbar {
            height: var(--e-n-carousel-swiper-pagination-size)
        }

        .elementor-widget-n-carousel .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: var(--e-n-carousel-progressbar-normal-color, #000)
        }

        .elementor-widget-n-carousel .swiper-pagination-progressbar .swiper-pagination-progressbar-fill:hover {
            background: var(--e-n-carousel-progressbar-hover-color, #000)
        }

        .elementor-widget-n-carousel .swiper-pagination-fraction {
            color: var(--e-n-carousel-fraction-color, #000)
        }

        .elementor-widget-n-carousel .swiper-pagination-bullet {
            width: var(--e-n-carousel-swiper-pagination-size);
            height: var(--e-n-carousel-swiper-pagination-size);
            background: var(--e-n-carousel-dots-normal-color, #000)
        }

        .elementor-widget-n-carousel .swiper-pagination-bullet:hover {
            background: var(--e-n-carousel-dots-hover-color, #000);
            opacity: 1
        }

        .elementor-widget-n-carousel .swiper-horizontal > .swiper-pagination-bullets, .elementor-widget-n-carousel .swiper-pagination, .elementor-widget-n-carousel .swiper-pagination-bullets.swiper-pagination-horizontal, .elementor-widget-n-carousel .swiper-pagination-custom, .elementor-widget-n-carousel .swiper-pagination-fraction {
            font-size: var(--e-n-carousel-swiper-pagination-size);
            line-height: var(--e-n-carousel-swiper-pagination-size)
        }

        .elementor-widget-n-carousel.elementor-pagination-position-outside > .elementor-widget-container > .swiper, .elementor-widget-n-carousel.elementor-pagination-position-outside > .elementor-widget-container > .swiper-container {
            padding-bottom: var(--e-n-carousel-swiper-padding-bottom)
        }

        .elementor-widget-n-carousel.elementor-pagination-position-outside > .elementor-widget-container > .swiper .elementor-background-slideshow, .elementor-widget-n-carousel.elementor-pagination-position-outside > .elementor-widget-container > .swiper-container .elementor-background-slideshow {
            padding-bottom: 0
        }

        .elementor-widget-n-carousel.elementor-pagination-position-outside > .elementor-widget-container .swiper-pagination-bullet {
            vertical-align: top
        }

        .elementor-widget-n-carousel .swiper-pagination-bullets {
            top: calc(var(--e-n-carousel-dots-vertical-position) + var(--e-n-carousel-dots-vertical-offset));
            left: calc(var(--e-n-carousel-dots-horizontal-position) + var(--e-n-carousel-dots-horizontal-offset));
            transform: translate(calc(var(--e-n-carousel-dots-horizontal-transform) * var(--e-n-carousel-horizontal-transform-modifier)), var(--e-n-carousel-dots-vertical-transform));
            width: -moz-max-content;
            width: max-content;
            height: -moz-max-content;
            height: max-content;
            z-index: 3
        }

        .elementor-widget-n-carousel .swiper-pagination-fraction {
            top: calc(var(--e-n-carousel-fraction-vertical-position) + var(--e-n-carousel-fraction-vertical-offset));
            left: calc(var(--e-n-carousel-fraction-horizontal-position) + var(--e-n-carousel-fraction-horizontal-offset));
            transform: translate(calc(var(--e-n-carousel-fraction-horizontal-transform) * var(--e-n-carousel-horizontal-transform-modifier)), var(--e-n-carousel-fraction-vertical-transform));
            width: -moz-max-content;
            width: max-content;
            height: -moz-max-content;
            height: max-content;
            z-index: 3
        }

        .swiper-container:not(.swiper-container-initialized) > .swiper-wrapper, .swiper:not(.swiper-initialized) > .swiper-wrapper {
            gap: var(--e-n-carousel-swiper-slides-gap);
            overflow: hidden
        }

        .swiper-container:not(.swiper-container-initialized) > .swiper-wrapper > .swiper--slide, .swiper:not(.swiper-initialized) > .swiper-wrapper > .swiper--slide {
            --e-n-carousel-number-of-gaps: max(calc(var(--e-n-carousel-swiper-slides-to-display) - 1), 0);
            --e-n-carousel-gaps-width-total: calc(var(--e-n-carousel-number-of-gaps) * var(--e-n-carousel-swiper-slides-gap));
            max-width: calc((100% - var(--e-n-carousel-gaps-width-total)) / var(--e-n-carousel-swiper-slides-to-display, 1))
        }

        [data-core-v316-plus=true] .elementor-widget-n-carousel .e-n-carousel .swiper-slide > .e-con {
            --padding-top: initial;
            --padding-right: initial;
            --padding-bottom: initial;
            --padding-left: initial
        }

        .elementor-widget-rating {
            --e-rating-gap: 0px;
            --e-rating-icon-font-size: 16px;
            --e-rating-icon-color: #ccd6df;
            --e-rating-icon-marked-color: #f0ad4e;
            --e-rating-icon-marked-width: 100%;
            --e-rating-justify-content: flex-start
        }

        .elementor-widget-rating .e-rating {
            display: flex;
            justify-content: var(--e-rating-justify-content)
        }

        .elementor-widget-rating .e-rating-wrapper {
            display: flex;
            justify-content: inherit;
            flex-direction: row;
            flex-wrap: wrap;
            width: -moz-fit-content;
            width: fit-content;
            margin-block-end: calc(0px - var(--e-rating-gap));
            margin-inline-end: calc(0px - var(--e-rating-gap))
        }

        .elementor-widget-rating .e-rating .e-icon {
            position: relative;
            margin-block-end: var(--e-rating-gap);
            margin-inline-end: var(--e-rating-gap)
        }

        .elementor-widget-rating .e-rating .e-icon-wrapper.e-icon-marked {
            --e-rating-icon-color: var(--e-rating-icon-marked-color);
            width: var(--e-rating-icon-marked-width);
            position: absolute;
            z-index: 1;
            height: 100%;
            left: 0;
            top: 0;
            overflow: hidden
        }

        .elementor-widget-rating .e-rating .e-icon-wrapper :is(i,svg) {
            display: flex;
            flex-shrink: 0
        }

        .elementor-widget-rating .e-rating .e-icon-wrapper i {
            font-size: var(--e-rating-icon-font-size);
            color: var(--e-rating-icon-color)
        }

        .elementor-widget-rating .e-rating .e-icon-wrapper svg {
            width: auto;
            height: var(--e-rating-icon-font-size);
            fill: var(--e-rating-icon-color)
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

            .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                margin: auto
            }

            .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                align-items: flex-start
            }

            .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                align-items: center
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
            background-image: var(--wpr-bg-2ba189a2-6324-4222-baf7-90d193ae72ec);
            background-size: contain;
            background-position: right;
            box-shadow: none;
            height: 19px
        }

        @media (min-resolution: 2x) {
            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                background-image: var(--wpr-bg-a8e19fd2-0e47-4f4b-9f3a-62224a0add17)
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
                background-image: var(--wpr-bg-e1c206e8-0992-44aa-bc21-892ce3d85483)
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

        div.wpforms-container-full address, div.wpforms-container-full code, div.wpforms-container-full dd, div.wpforms-container-full dl, div.wpforms-container-full dt, div.wpforms-container-full h1, div.wpforms-container-full h2, div.wpforms-container-full h3, div.wpforms-container-full h4, div.wpforms-container-full small, div.wpforms-container-full sub, div.wpforms-container-full time {
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
            background-image: var(--wpr-bg-2d2179fc-55d0-491f-9ad8-fc13d277b1d6);
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
    <link rel="preload" data-rocket-preload as="image" href="../wp-content/uploads/2024/05/Ellipse-71-1.svg"
          fetchpriority="high">
    <link rel="canonical" href="index.html"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Our Solutions - Metatrading.ai"/>
    <meta property="og:description"
          content="Our Solutions Advanced Trading Bots for Every Market Our advanced trading bots excel in various markets, offering strategic insights and enhancing portfolio performance. Engineered for the fast-paced forex market, our Forex Bots analyze trends and patterns across global currency pairs, optimizing short-term gains and long-term growth. In the stable gold market, our Gold Bots capitalize [&hellip;]"/>
    <meta property="og:url" content="https://metatrading.ai/our-solutions/"/>
    <meta property="og:site_name" content="Metatrading.ai"/>
    <meta property="article:modified_time" content="2024-07-22T07:52:55+00:00"/>
    <meta property="og:image" content="https://metatrading.ai/wp-content/uploads/2024/05/Group-18044.svg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:label1" content="Est. reading time"/>
    <meta name="twitter:data1" content="16 minutes"/>
    <script type="application/ld+json" class="yoast-schema-graph">
        {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://metatrading.ai/our-solutions/","url":"https://metatrading.ai/our-solutions/","name":"Our Solutions - Metatrading.ai","isPartOf":{"@id":"https://metatrading.ai/#website"},"primaryImageOfPage":{"@id":"https://metatrading.ai/our-solutions/#primaryimage"},"image":{"@id":"https://metatrading.ai/our-solutions/#primaryimage"},"thumbnailUrl":"https://metatrading.ai/wp-content/uploads/2024/05/Group-18044.svg","datePublished":"2024-06-16T18:00:14+00:00","dateModified":"2024-07-22T07:52:55+00:00","breadcrumb":{"@id":"https://metatrading.ai/our-solutions/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://metatrading.ai/our-solutions/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://metatrading.ai/our-solutions/#primaryimage","url":"https://metatrading.ai/wp-content/uploads/2024/05/Group-18044.svg","contentUrl":"https://metatrading.ai/wp-content/uploads/2024/05/Group-18044.svg","width":809,"height":834},{"@type":"BreadcrumbList","@id":"https://metatrading.ai/our-solutions/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://metatrading.ai/"},{"@type":"ListItem","position":2,"name":"Our Solutions"}]},{"@type":"WebSite","@id":"https://metatrading.ai/#website","url":"https://metatrading.ai/","name":"Metatrading.ai","description":"","publisher":{"@id":"https://metatrading.ai/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://metatrading.ai/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://metatrading.ai/#organization","name":"Metatrading.ai","url":"https://metatrading.ai/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://metatrading.ai/#/schema/logo/image/","url":"https://metatrading.ai/wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e.png","contentUrl":"https://metatrading.ai/wp-content/uploads/2024/05/cropped-65d7cbc0de43c93dasdc013b99e.png","width":512,"height":512,"caption":"Metatrading.ai"},"image":{"@id":"https://metatrading.ai/#/schema/logo/image/"}}]}
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='http://www.googletagmanager.com/'/>
    <link rel='dns-prefetch' href='http://183796.t.hyros.com/'/>
    <link rel='dns-prefetch' href='http://connect.facebook.net/'/>
    <link rel='dns-prefetch' href='http://fast.vidalytics.com/'/>

    <link rel='dns-prefetch' href='http://fonts.gstatic.com/'/>
    <link rel='dns-prefetch' href='http://widget.trustpilot.com/'/>
    <link rel='dns-prefetch' href='http://www.clarity.ms/'/>
    <link rel='dns-prefetch' href='http://www.fxblue.com/'/>

    <link rel="alternate" type="application/rss+xml" title="Metatrading.ai &raquo; Feed" href="../feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Metatrading.ai &raquo; Comments Feed"
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
    <link rel="alternate" title="JSON" type="application/json" href="../wp-json/wp/v2/pages/636.json"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd"/>
    <meta name="generator" content="WordPress 6.7.2"/>
    <link rel='shortlink' href='../index8989.html?p=636'/>
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
          href="../wp-json/oembed/1.0/embed22bf.json?url=https%3A%2F%2Fmetatrading.ai%2Four-solutions%2F"/>
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
          href="../wp-json/oembed/1.0/embeda917?url=https%3A%2F%2Fmetatrading.ai%2Four-solutions%2F&amp;format=xml"/>
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
        id="wpr-lazyload-bg-exclusion">.elementor-636 .elementor-element.elementor-element-e0c5884:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-e0c5884 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            --wpr-bg-f94e5b16-ff6b-4d83-b0fd-e2deeb24a598: url('../wp-content/uploads/2024/05/Header-Banner.png');
        }</style>
    <noscript>
        <style
            id="wpr-lazyload-bg-nostyle">.elementor-636 .elementor-element.elementor-element-fe5046a::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-fe5046a > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
                --wpr-bg-50660374-ae31-47da-8c5a-7369de87cda2: url('../wp-content/uploads/2024/05/Background-Image-1.png');
            }

            .elementor-636 .elementor-element.elementor-element-54e17ee::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .e-con-inner > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .e-con-inner > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-background-slideshow::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-background-video-container::before, .elementor-636 .elementor-element.elementor-element-54e17ee > .elementor-motion-effects-container > .elementor-motion-effects-layer::before {
                --wpr-bg-64fd9ae5-11ed-4a1c-9132-25c55f967134: url('../wp-content/uploads/2024/05/Background-Image-1.png');
            }

            .elementor-636 .elementor-element.elementor-element-09abd54:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-09abd54 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-b5eded51-9e49-4d30-8e27-472594ad1c17: url('../wp-content/uploads/2024/05/Background.png');
            }

            .elementor-636 .elementor-element.elementor-element-4ba4996:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-4ba4996 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-006080b3-7306-4481-bc50-75ab9918a341: url('../wp-content/uploads/2024/05/Section-CTA.png');
            }

            .elementor-636 .elementor-element.elementor-element-b68d58f:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-b68d58f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-7e0cf15a-0e1e-411c-9bf1-93a2dc9a03c9: url('../wp-content/uploads/2024/05/Background-Image-2.png');
            }

            .elementor-636 .elementor-element.elementor-element-7459bcb:not(.elementor-motion-effects-element-type-background), .elementor-636 .elementor-element.elementor-element-7459bcb > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-342bd6b4-968f-4c4d-954f-27f45ba43159: url('../wp-content/uploads/2024/05/Section-CTA-1.png');
            }

            .elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background), .elementor-593 .elementor-element.elementor-element-e6dd587 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                --wpr-bg-82d9a6fb-6535-4e08-a609-1187440c9162: url('../wp-content/uploads/2024/05/Rectangle-124.html');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-f288447a-85a2-4fc3-8585-491b863615a4: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flagsc4ca.html?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-6cbfe0f7-75da-4ec1-aa10-cf79f1f9be17: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/flags%402xc4ca.html?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-8127457c-1709-40c6-bc6a-f9c616211665: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flagsc4ca.png?1');
            }

            body .iti__flag, div.wpforms-container .wpforms-form .iti__flag, div.wpforms-container-full .wpforms-form .iti__flag {
                --wpr-bg-b3ea0584-aa37-43cd-8ec5-8a8d8aaf7a88: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-flags%402xc4ca.png?1');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-2ba189a2-6324-4222-baf7-90d193ae72ec: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe.html');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-a8e19fd2-0e47-4f4b-9f3a-62224a0add17: url('../wp-content/plugins/wpforms/assets/pro/css/fields/img/globe%402x.html');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-037d03a8-b90f-459e-8fa7-4586844fb504: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globec4ca.png?1');
            }

            body .iti__globe, div.wpforms-container .wpforms-form .iti__globe, div.wpforms-container-full .wpforms-form .iti__globe {
                --wpr-bg-e1c206e8-0992-44aa-bc21-892ce3d85483: url('../wp-content/plugins/wpforms/assets/pro/images/vendor/intl-tel-input-globe%402xc4ca.png?1');
            }

            .wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear {
                --wpr-bg-2d2179fc-55d0-491f-9ad8-fc13d277b1d6: url('../wp-content/plugins/wpforms/assets/pro/images/times-solid-white.svg');
            }</style>
    </noscript>
    <script type="application/javascript">const rocket_pairs = [{
            "selector": ".elementor-636 .elementor-element.elementor-element-fe5046a,.elementor-636 .elementor-element.elementor-element-fe5046a>.e-con-inner>.elementor-background-slideshow,.elementor-636 .elementor-element.elementor-element-fe5046a>.e-con-inner>.elementor-background-video-container,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-background-slideshow,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-background-video-container,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-fe5046a::before,.elementor-636 .elementor-element.elementor-element-fe5046a>.e-con-inner>.elementor-background-slideshow::before,.elementor-636 .elementor-element.elementor-element-fe5046a>.e-con-inner>.elementor-background-video-container::before,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-background-slideshow::before,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-background-video-container::before,.elementor-636 .elementor-element.elementor-element-fe5046a>.elementor-motion-effects-container>.elementor-motion-effects-layer::before{--wpr-bg-50660374-ae31-47da-8c5a-7369de87cda2: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-1.png');}",
            "hash": "50660374-ae31-47da-8c5a-7369de87cda2",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-1.png"
        }, {
            "selector": ".elementor-636 .elementor-element.elementor-element-54e17ee,.elementor-636 .elementor-element.elementor-element-54e17ee>.e-con-inner>.elementor-background-slideshow,.elementor-636 .elementor-element.elementor-element-54e17ee>.e-con-inner>.elementor-background-video-container,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-background-slideshow,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-background-video-container,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-54e17ee::before,.elementor-636 .elementor-element.elementor-element-54e17ee>.e-con-inner>.elementor-background-slideshow::before,.elementor-636 .elementor-element.elementor-element-54e17ee>.e-con-inner>.elementor-background-video-container::before,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-background-slideshow::before,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-background-video-container::before,.elementor-636 .elementor-element.elementor-element-54e17ee>.elementor-motion-effects-container>.elementor-motion-effects-layer::before{--wpr-bg-64fd9ae5-11ed-4a1c-9132-25c55f967134: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-1.png');}",
            "hash": "64fd9ae5-11ed-4a1c-9132-25c55f967134",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-1.png"
        }, {
            "selector": ".elementor-636 .elementor-element.elementor-element-09abd54:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-09abd54>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-09abd54:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-09abd54>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-b5eded51-9e49-4d30-8e27-472594ad1c17: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background.png');}",
            "hash": "b5eded51-9e49-4d30-8e27-472594ad1c17",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background.png"
        }, {
            "selector": ".elementor-636 .elementor-element.elementor-element-4ba4996:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-4ba4996>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-4ba4996:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-4ba4996>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-006080b3-7306-4481-bc50-75ab9918a341: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Section-CTA.png');}",
            "hash": "006080b3-7306-4481-bc50-75ab9918a341",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Section-CTA.png"
        }, {
            "selector": ".elementor-636 .elementor-element.elementor-element-b68d58f:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-b68d58f>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-b68d58f:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-b68d58f>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-7e0cf15a-0e1e-411c-9bf1-93a2dc9a03c9: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-2.png');}",
            "hash": "7e0cf15a-0e1e-411c-9bf1-93a2dc9a03c9",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Background-Image-2.png"
        }, {
            "selector": ".elementor-636 .elementor-element.elementor-element-7459bcb:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-7459bcb>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-7459bcb:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-7459bcb>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-342bd6b4-968f-4c4d-954f-27f45ba43159: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Section-CTA-1.png');}",
            "hash": "342bd6b4-968f-4c4d-954f-27f45ba43159",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Section-CTA-1.png"
        }, {
            "selector": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-593 .elementor-element.elementor-element-e6dd587:not(.elementor-motion-effects-element-type-background),.elementor-593 .elementor-element.elementor-element-e6dd587>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-82d9a6fb-6535-4e08-a609-1187440c9162: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg');}",
            "hash": "82d9a6fb-6535-4e08-a609-1187440c9162",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Rectangle-124.jpg"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-f288447a-85a2-4fc3-8585-491b863615a4: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1');}",
            "hash": "f288447a-85a2-4fc3-8585-491b863615a4",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-6cbfe0f7-75da-4ec1-aa10-cf79f1f9be17: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1');}",
            "hash": "6cbfe0f7-75da-4ec1-aa10-cf79f1f9be17",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/flags@2x.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-8127457c-1709-40c6-bc6a-f9c616211665: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1');}",
            "hash": "8127457c-1709-40c6-bc6a-f9c616211665",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags.png?1"
        }, {
            "selector": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag",
            "style": "body .iti__flag,div.wpforms-container .wpforms-form .iti__flag,div.wpforms-container-full .wpforms-form .iti__flag{--wpr-bg-b3ea0584-aa37-43cd-8ec5-8a8d8aaf7a88: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1');}",
            "hash": "b3ea0584-aa37-43cd-8ec5-8a8d8aaf7a88",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-flags@2x.png?1"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-2ba189a2-6324-4222-baf7-90d193ae72ec: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png');}",
            "hash": "2ba189a2-6324-4222-baf7-90d193ae72ec",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe.png"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-a8e19fd2-0e47-4f4b-9f3a-62224a0add17: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png');}",
            "hash": "a8e19fd2-0e47-4f4b-9f3a-62224a0add17",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/img\/globe@2x.png"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-037d03a8-b90f-459e-8fa7-4586844fb504: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1');}",
            "hash": "037d03a8-b90f-459e-8fa7-4586844fb504",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe.png?1"
        }, {
            "selector": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe",
            "style": "body .iti__globe,div.wpforms-container .wpforms-form .iti__globe,div.wpforms-container-full .wpforms-form .iti__globe{--wpr-bg-e1c206e8-0992-44aa-bc21-892ce3d85483: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1');}",
            "hash": "e1c206e8-0992-44aa-bc21-892ce3d85483",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/vendor\/intl-tel-input-globe@2x.png?1"
        }, {
            "selector": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear",
            "style": ".wpforms-container .wpforms-datepicker-wrap .wpforms-datepicker-clear{--wpr-bg-2d2179fc-55d0-491f-9ad8-fc13d277b1d6: url('https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg');}",
            "hash": "2d2179fc-55d0-491f-9ad8-fc13d277b1d6",
            "url": "https:\/\/metatrading.ai\/wp-content\/plugins\/wpforms\/assets\/pro\/images\/times-solid-white.svg"
        }];
        const rocket_excluded_pairs = [{
            "selector": ".elementor-636 .elementor-element.elementor-element-e0c5884:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-e0c5884>.elementor-motion-effects-container>.elementor-motion-effects-layer",
            "style": ".elementor-636 .elementor-element.elementor-element-e0c5884:not(.elementor-motion-effects-element-type-background),.elementor-636 .elementor-element.elementor-element-e0c5884>.elementor-motion-effects-container>.elementor-motion-effects-layer{--wpr-bg-f94e5b16-ff6b-4d83-b0fd-e2deeb24a598: url('https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png');}",
            "hash": "f94e5b16-ff6b-4d83-b0fd-e2deeb24a598",
            "url": "https:\/\/metatrading.ai\/wp-content\/uploads\/2024\/05\/Header-Banner.png"
        }];</script>
</head>
<body
    class="page-template-default page page-id-636 wp-custom-logo elementor-default elementor-kit-6 elementor-page elementor-page-636">


<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

@include('pages.layout.header')

<main id="content" class="site-main post-636 page type-page status-publish hentry">


    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="636" class="elementor elementor-636"
             data-elementor-post-type="page">
            <div class="elementor-element elementor-element-42a63b7 e-con-full e-flex e-con e-parent" data-id="42a63b7"
                 data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-e0c5884 e-flex e-con-boxed e-con e-child"
                     data-id="e0c5884" data-element_type="container"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-6866b6c elementor-widget elementor-widget-heading"
                            data-id="6866b6c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <style></style>
                                <h1 class="elementor-heading-title elementor-size-default">Our Solutions</h1></div>
                        </div>
                        <div
                            class="elementor-element elementor-element-470a7b9 elementor-align-center elementor-widget elementor-widget-breadcrumbs"
                            data-id="470a7b9" data-element_type="widget" data-widget_type="breadcrumbs.default">
                            <div class="elementor-widget-container">
                                <p id="breadcrumbs"><span><span><a href="../index.html">Home</a></span> » <span
                                            class="breadcrumb_last" aria-current="page">Our Solutions</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dcb26eb e-con-full e-flex e-con e-child"
                     data-id="dcb26eb" data-element_type="container">
                    <div
                        class="elementor-element elementor-element-dec1a3b elementor-absolute elementor-widget elementor-widget-image"
                        data-id="dec1a3b" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img fetchpriority="high" decoding="async" width="809" height="834"
                                 src="../wp-content/uploads/2024/05/Group-18044.svg"
                                 class="attachment-full size-full wp-image-435" alt=""/></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-9e8e85f elementor-absolute elementor-widget elementor-widget-image"
                        data-id="9e8e85f" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img fetchpriority="high" decoding="async" width="916" height="1205"
                                 src="../wp-content/uploads/2024/05/Ellipse-71-1.svg"
                                 class="attachment-full size-full wp-image-436" alt=""/></div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7933cf0 e-flex e-con-boxed e-con e-child"
                     data-id="7933cf0" data-element_type="container"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-a4260b8 e-con-full e-flex e-con e-child"
                             data-id="a4260b8" data-element_type="container">
                            <div
                                class="elementor-element elementor-element-e13edc1 elementor-widget elementor-widget-heading"
                                data-id="e13edc1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Advanced Trading Bots
                                        <span style="color:#0044FF">for Every Market</span>
                                    </h2></div>
                            </div>
                            <div
                                class="elementor-element elementor-element-6849545 elementor-widget elementor-widget-text-editor"
                                data-id="6849545" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style></style>
                                    <p>Our advanced trading bots excel in various markets, offering strategic insights
                                        and enhancing portfolio performance. Engineered for the fast-paced forex market,
                                        our Forex Bots analyze trends and patterns across global currency pairs,
                                        optimizing short-term gains and long-term growth.<br/><br/>In the stable gold
                                        market, our Gold Bots capitalize on price fluctuations, ideal for portfolio
                                        diversification and inflation hedging.<br/><br/>For the stock market, our Stocks
                                        Bots analyze historical data, market sentiment, and real-time news to provide
                                        targeted trading strategies across diverse sectors. In the volatile
                                        cryptocurrency market, our Crypto Bots predict and execute profitable trades in
                                        Bitcoin, Ethereum, and other altcoins, simplifying the crypto trading process.
                                    </p></div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2b55695 e-con-full e-flex e-con e-child"
                             data-id="2b55695" data-element_type="container">
                            <div
                                class="elementor-element elementor-element-4d077c3 elementor-widget elementor-widget-image"
                                data-id="4d077c3" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="554" height="359"
                                         src="../wp-content/uploads/2024/05/Image-2.jpg"
                                         class="attachment-full size-full wp-image-638" alt=""
                                         srcset="https://metatrading.ai/wp-content/uploads/2024/05/Image-2.jpg 554w, https://metatrading.ai/wp-content/uploads/2024/05/Image-2-300x194.jpg 300w"
                                         sizes="(max-width: 554px) 100vw, 554px"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-72b6888 e-con-full e-flex e-con e-child"
                     data-id="72b6888" data-element_type="container">
                    <div
                        class="elementor-element elementor-element-7166233 elementor-absolute elementor-widget elementor-widget-image"
                        data-id="7166233" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="911" height="1369"
                                 src="../wp-content/uploads/2024/05/Ellipse-72.svg"
                                 class="attachment-full size-full wp-image-455" alt=""/></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-fae6aff elementor-absolute elementor-widget elementor-widget-image"
                        data-id="fae6aff" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="660" height="1131"
                                 src="../wp-content/uploads/2024/05/Ellipse-74.svg"
                                 class="attachment-full size-full wp-image-456" alt=""/></div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2f48141 e-flex e-con-boxed e-con e-child"
                     data-id="2f48141" data-element_type="container">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-96fa374 elementor-widget elementor-widget-heading"
                            data-id="96fa374" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Success Stories</h2></div>
                        </div>
                        <div
                            class="elementor-element elementor-element-220b430 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                            data-id="220b430" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Real Cash Accounts Verified
                                    by FxBlue</h2></div>
                        </div>
                        <div class="elementor-element elementor-element-aa2b8fb e-flex e-con-boxed e-con e-child"
                             data-id="aa2b8fb" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-08caf2f e-con-full e-flex e-con e-child"
                                     data-id="08caf2f" data-element_type="container">
                                    <div
                                        class="elementor-element elementor-element-4e23b9d e-flex e-con-boxed e-con e-child"
                                        data-id="4e23b9d" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-4308f00 e-flex e-con-boxed e-con e-child"
                                                data-id="4308f00" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-97f6493 elementor-widget elementor-widget-html"
                                                        data-id="97f6493" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <iframe loading="lazy" src="about:blank" frameborder="0"
                                                                    width="830" height="290"
                                                                    data-rocket-lazyload="fitvidscompatible"
                                                                    data-lazy-src="//www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&#038;id=kpeterson-metabot">
                                                                <a href="http://www.fxblue.com/">FX Blue - free tools
                                                                    and services for FX and CFD traders</a></iframe>
                                                            <noscript>
                                                                <iframe
                                                                    src="http://www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&amp;id=kpeterson-metabot"
                                                                    frameborder="0" width="830" height="290"><a
                                                                        href="http://www.fxblue.com/">FX Blue - free
                                                                        tools and services for FX and CFD traders</a>
                                                                </iframe>
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-79cd9d5 e-flex e-con-boxed e-con e-child"
                                                data-id="79cd9d5" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-2c63c38 e-flex e-con-boxed e-con e-child"
                                                        data-id="2c63c38" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-5928221 elementor-widget elementor-widget-heading"
                                                                data-id="5928221" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        <small>MetaBot</small><br/>Kevin Peterson</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-7933e21 elementor-widget elementor-widget-heading"
                                                                data-id="7933e21" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        794K / 2.5 years</h2></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-d534c7e e-flex e-con-boxed e-con e-child"
                                                        data-id="d534c7e" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-dca8f4e elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                data-id="dca8f4e" data-element_type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                           href="https://www.fxblue.com/users/kpeterson-metabot">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">check out the results</span>
					</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-960cc53 e-con-full e-flex e-con e-child"
                                     data-id="960cc53" data-element_type="container">
                                    <div
                                        class="elementor-element elementor-element-8756539 e-flex e-con-boxed e-con e-child"
                                        data-id="8756539" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-c8b76bb e-flex e-con-boxed e-con e-child"
                                                data-id="c8b76bb" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-06f0fa9 elementor-widget elementor-widget-html"
                                                        data-id="06f0fa9" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <iframe loading="lazy" src="about:blank" frameborder="0"
                                                                    width="830" height="290"
                                                                    data-rocket-lazyload="fitvidscompatible"
                                                                    data-lazy-src="//www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&#038;id=nharris-metabot">
                                                                <a href="http://www.fxblue.com/">FX Blue - free tools
                                                                    and services for FX and CFD traders</a></iframe>
                                                            <noscript>
                                                                <iframe
                                                                    src="http://www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&amp;id=nharris-metabot"
                                                                    frameborder="0" width="830" height="290"><a
                                                                        href="http://www.fxblue.com/">FX Blue - free
                                                                        tools and services for FX and CFD traders</a>
                                                                </iframe>
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-60c4f95 e-flex e-con-boxed e-con e-child"
                                                data-id="60c4f95" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-27f0768 e-flex e-con-boxed e-con e-child"
                                                        data-id="27f0768" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-2515f8c elementor-widget elementor-widget-heading"
                                                                data-id="2515f8c" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        <small>MetaBot</small><br/>Nathan Harris</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-fa6c6df elementor-widget elementor-widget-heading"
                                                                data-id="fa6c6df" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        587K / 7 years</h2></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-9f086c8 e-flex e-con-boxed e-con e-child"
                                                        data-id="9f086c8" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-a758338 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                data-id="a758338" data-element_type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                           href="https://www.fxblue.com/users/nharris-metabot">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">check out the results</span>
					</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-04f6527 e-con-full e-flex e-con e-child"
                                     data-id="04f6527" data-element_type="container">
                                    <div
                                        class="elementor-element elementor-element-7dbfa1b e-flex e-con-boxed e-con e-child"
                                        data-id="7dbfa1b" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-749ba41 e-flex e-con-boxed e-con e-child"
                                                data-id="749ba41" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-b1c7057 elementor-widget elementor-widget-html"
                                                        data-id="b1c7057" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <iframe loading="lazy" src="about:blank" frameborder="0"
                                                                    width="830" height="290"
                                                                    data-rocket-lazyload="fitvidscompatible"
                                                                    data-lazy-src="//www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&#038;id=rsanders-metabot">
                                                                <a href="http://www.fxblue.com/">FX Blue - free tools
                                                                    and services for FX and CFD traders</a></iframe>
                                                            <noscript>
                                                                <iframe
                                                                    src="http://www.fxblue.com/fxbluechart.aspx?c=ch_winlossmonthly&amp;id=rsanders-metabot"
                                                                    frameborder="0" width="830" height="290"><a
                                                                        href="http://www.fxblue.com/">FX Blue - free
                                                                        tools and services for FX and CFD traders</a>
                                                                </iframe>
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-f636b66 e-flex e-con-boxed e-con e-child"
                                                data-id="f636b66" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div
                                                        class="elementor-element elementor-element-e9b3435 e-flex e-con-boxed e-con e-child"
                                                        data-id="e9b3435" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-1308041 elementor-widget elementor-widget-heading"
                                                                data-id="1308041" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        <small>MetaBot</small><br/>Richard Sanders</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-87e450f elementor-widget elementor-widget-heading"
                                                                data-id="87e450f" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        5.125M / 3.5 years</h2></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-55d0ed8 e-flex e-con-boxed e-con e-child"
                                                        data-id="55d0ed8" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div
                                                                class="elementor-element elementor-element-22f30de elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                data-id="22f30de" data-element_type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                           href="https://www.fxblue.com/users/rsanders-metabot">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">check out the results</span>
					</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-fe5046a e-con-full elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                    data-id="fe5046a" data-element_type="container">
                    <div class="elementor-element elementor-element-19c2028 elementor-widget elementor-widget-heading"
                         data-id="19c2028" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Our Solutions</h2></div>
                    </div>
                    <div class="elementor-element elementor-element-92d3bd3 elementor-widget elementor-widget-heading"
                         data-id="92d3bd3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">4 Powerful Algorithm
                                Categories</h2></div>
                    </div>
                    <div class="elementor-element elementor-element-0de229a e-flex e-con-boxed e-con e-child"
                         data-id="0de229a" data-element_type="container"
                         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-5ca7078 e-flex e-con-boxed e-con e-child"
                                 data-id="5ca7078" data-element_type="container"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-b88375d elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                        data-id="b88375d" data-element_type="widget"
                                        data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">

                                                <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="149" height="112" viewBox="0 0 149 112" fill="none"><mask
                        id="path-1-outside-1_189_2485" maskUnits="userSpaceOnUse" x="0" y="0.174805" width="149"
                        height="112" fill="black"><rect fill="white" y="0.174805" width="149" height="112"></rect><path
                            d="M120.286 34.0608H103.447C108.408 40.6378 110.986 47.9772 110.988 56.1621C110.991 64.352 108.415 71.694 103.448 78.2837C103.658 78.2931 103.807 78.3049 103.956 78.3049C106.071 78.3058 108.188 78.2947 110.303 78.3075C114.82 78.3346 118.601 81.3757 119.548 85.7282C120.672 90.8939 117.104 96.0537 111.844 96.8509C111.257 96.9398 110.657 96.9805 110.063 96.9805C83.1825 96.9864 56.301 96.9856 29.4203 96.9856C29.2099 96.9856 28.9994 96.9856 28.725 96.9856C28.725 97.1838 28.725 97.3473 28.725 97.5099C28.725 100.687 28.7293 103.863 28.7233 107.039C28.7199 109.145 27.3737 110.768 25.3083 111.116C23.939 111.346 22.7581 110.921 21.7782 109.946C17.771 105.964 13.7646 101.981 9.75828 97.9979C7.2984 95.5522 4.83767 93.1066 2.37778 90.6601C0.546714 88.8388 0.537341 86.4415 2.37011 84.6185C8.82358 78.1973 15.2822 71.7804 21.7382 65.3618C22.8782 64.2284 24.2364 63.8056 25.7889 64.2622C27.314 64.7104 28.2624 65.7582 28.6151 67.3051C28.6986 67.6727 28.7182 68.0607 28.7191 68.4394C28.7267 71.5449 28.7233 74.6513 28.7233 77.7568C28.7233 77.922 28.7233 78.0864 28.7233 78.2736H45.5574C40.6001 71.6974 38.021 64.358 38.0218 56.1714C38.0227 47.9942 40.5899 40.6615 45.5591 34.0667C45.3597 34.0565 45.2149 34.043 45.0692 34.043C42.9671 34.0413 40.866 34.0421 38.764 34.0413C34.2276 34.0396 30.4666 31.04 29.4748 26.6315C28.3305 21.5455 31.9211 16.2942 37.0871 15.5182C37.6878 15.4276 38.3013 15.3776 38.9088 15.3776C65.8039 15.3708 92.6991 15.3717 119.594 15.3717C119.805 15.3717 120.015 15.3717 120.284 15.3717V14.8456C120.284 11.7113 120.284 8.57692 120.284 5.44343C120.284 4.42604 120.537 3.48658 121.193 2.68436C122.745 0.785971 125.467 0.65975 127.237 2.4099C129.251 4.40062 131.255 6.40152 133.263 8.39818C137.741 12.8506 142.221 17.3014 146.697 21.7555C148.244 23.2939 148.435 25.5252 147.147 27.1712C146.844 27.5591 146.471 27.8946 146.12 28.2436C139.836 34.4945 133.548 40.7437 127.263 46.9937C126.027 48.2229 124.355 48.5745 122.799 47.9315C121.257 47.2936 120.291 45.8493 120.287 44.1339C120.28 40.9572 120.285 37.7805 120.285 34.6046V34.0582L120.286 34.0608ZM74.9916 89.137C93.3117 88.8609 108.066 73.7686 107.653 55.4158C107.248 37.384 92.1418 22.8017 73.7229 23.2185C55.69 23.6268 40.929 38.5573 41.3602 56.9728C41.7785 74.808 56.6213 89.3742 74.9916 89.137ZM68.9872 93.6581C80.703 93.6581 92.4187 93.6581 104.135 93.6581C106.194 93.6581 108.252 93.6716 110.312 93.6555C114.818 93.62 117.755 89.0726 115.812 85.0836C114.675 82.7514 112.704 81.6426 110.114 81.629C107.402 81.6146 104.688 81.6629 101.978 81.6061C100.984 81.585 100.136 81.6968 99.5317 82.5608C99.4686 82.6515 99.3664 82.715 99.282 82.7904C90.3627 90.7347 79.9642 93.8106 68.165 91.8885C60.6677 90.6669 54.2407 87.2174 48.8242 81.9204C48.5916 81.6934 48.3624 81.6061 48.042 81.607C41.1258 81.6146 34.2106 81.6138 27.2944 81.6138C26.0283 81.6138 25.3875 80.9784 25.3782 79.7137C25.3748 79.2198 25.3782 78.7251 25.3782 78.2312C25.3782 74.9554 25.3807 71.6805 25.3722 68.4046C25.3722 68.1742 25.3432 67.9082 25.2265 67.7219C24.9675 67.3093 24.4801 67.3534 24.0404 67.7905C17.6338 74.1591 11.2272 80.5286 4.82148 86.8981C4.18925 87.5266 4.1884 87.7808 4.81722 88.406C11.1931 94.7458 17.5699 101.085 23.9467 107.424C24.0566 107.533 24.1631 107.652 24.2901 107.74C24.6948 108.023 25.2563 107.799 25.3535 107.315C25.3841 107.165 25.379 107.006 25.379 106.851C25.379 103.181 25.379 99.5091 25.379 95.8386C25.379 95.6547 25.3722 95.4709 25.3875 95.2879C25.4693 94.3002 26.1169 93.6903 27.1112 93.6615C27.3098 93.6555 27.5092 93.6598 27.7077 93.6598C41.4684 93.6598 55.2291 93.6598 68.9898 93.6598L68.9872 93.6581ZM80.0196 18.7034C66.3015 18.7034 52.5834 18.7025 38.8662 18.7085C38.4001 18.7085 37.9272 18.7423 37.4705 18.8279C34.6008 19.365 32.4391 22.0885 32.6087 24.928C32.7962 28.0598 35.1879 30.591 38.2391 30.6791C41.5877 30.7757 44.9405 30.7147 48.2916 30.7079C48.4484 30.7079 48.6282 30.5867 48.7569 30.4758C49.9361 29.4601 51.0455 28.352 52.2903 27.4236C61.3954 20.6323 71.5553 18.4247 82.6601 20.8212C89.4101 22.2774 95.2169 25.5684 100.142 30.3834C100.397 30.6333 100.649 30.7265 101.001 30.7265C107.888 30.718 114.775 30.7206 121.663 30.7206C122.996 30.7206 123.632 31.3415 123.633 32.6529C123.635 36.4369 123.636 40.2202 123.632 44.0042C123.632 44.3846 123.7 44.7116 124.094 44.8709C124.478 45.0267 124.734 44.8192 124.989 44.5659C131.412 38.1752 137.838 31.7871 144.265 25.3981C144.807 24.8594 144.803 24.5536 144.257 24.0097C138.773 18.5602 133.289 13.1115 127.805 7.66203C126.831 6.69377 125.86 5.72128 124.88 4.75896C124.465 4.35064 123.875 4.43959 123.703 4.9377C123.635 5.13169 123.638 5.35448 123.637 5.56457C123.633 7.00467 123.636 8.44477 123.636 9.88487C123.636 12.2144 123.635 14.544 123.639 16.8736C123.641 17.5962 123.399 18.2019 122.714 18.4992C122.365 18.6508 121.945 18.6941 121.557 18.6941C107.711 18.7034 93.8655 18.7017 80.0205 18.7025L80.0196 18.7034Z"></path></mask><path
                        d="M120.286 34.0608H103.447C108.408 40.6378 110.986 47.9772 110.988 56.1621C110.991 64.352 108.415 71.694 103.448 78.2837C103.658 78.2931 103.807 78.3049 103.956 78.3049C106.071 78.3058 108.188 78.2947 110.303 78.3075C114.82 78.3346 118.601 81.3757 119.548 85.7282C120.672 90.8939 117.104 96.0537 111.844 96.8509C111.257 96.9398 110.657 96.9805 110.063 96.9805C83.1825 96.9864 56.301 96.9856 29.4203 96.9856C29.2099 96.9856 28.9994 96.9856 28.725 96.9856C28.725 97.1838 28.725 97.3473 28.725 97.5099C28.725 100.687 28.7293 103.863 28.7233 107.039C28.7199 109.145 27.3737 110.768 25.3083 111.116C23.939 111.346 22.7581 110.921 21.7782 109.946C17.771 105.964 13.7646 101.981 9.75828 97.9979C7.2984 95.5522 4.83767 93.1066 2.37778 90.6601C0.546714 88.8388 0.537341 86.4415 2.37011 84.6185C8.82358 78.1973 15.2822 71.7804 21.7382 65.3618C22.8782 64.2284 24.2364 63.8056 25.7889 64.2622C27.314 64.7104 28.2624 65.7582 28.6151 67.3051C28.6986 67.6727 28.7182 68.0607 28.7191 68.4394C28.7267 71.5449 28.7233 74.6513 28.7233 77.7568C28.7233 77.922 28.7233 78.0864 28.7233 78.2736H45.5574C40.6001 71.6974 38.021 64.358 38.0218 56.1714C38.0227 47.9942 40.5899 40.6615 45.5591 34.0667C45.3597 34.0565 45.2149 34.043 45.0692 34.043C42.9671 34.0413 40.866 34.0421 38.764 34.0413C34.2276 34.0396 30.4666 31.04 29.4748 26.6315C28.3305 21.5455 31.9211 16.2942 37.0871 15.5182C37.6878 15.4276 38.3013 15.3776 38.9088 15.3776C65.8039 15.3708 92.6991 15.3717 119.594 15.3717C119.805 15.3717 120.015 15.3717 120.284 15.3717V14.8456C120.284 11.7113 120.284 8.57692 120.284 5.44343C120.284 4.42604 120.537 3.48658 121.193 2.68436C122.745 0.785971 125.467 0.65975 127.237 2.4099C129.251 4.40062 131.255 6.40152 133.263 8.39818C137.741 12.8506 142.221 17.3014 146.697 21.7555C148.244 23.2939 148.435 25.5252 147.147 27.1712C146.844 27.5591 146.471 27.8946 146.12 28.2436C139.836 34.4945 133.548 40.7437 127.263 46.9937C126.027 48.2229 124.355 48.5745 122.799 47.9315C121.257 47.2936 120.291 45.8493 120.287 44.1339C120.28 40.9572 120.285 37.7805 120.285 34.6046V34.0582L120.286 34.0608ZM74.9916 89.137C93.3117 88.8609 108.066 73.7686 107.653 55.4158C107.248 37.384 92.1418 22.8017 73.7229 23.2185C55.69 23.6268 40.929 38.5573 41.3602 56.9728C41.7785 74.808 56.6213 89.3742 74.9916 89.137ZM68.9872 93.6581C80.703 93.6581 92.4187 93.6581 104.135 93.6581C106.194 93.6581 108.252 93.6716 110.312 93.6555C114.818 93.62 117.755 89.0726 115.812 85.0836C114.675 82.7514 112.704 81.6426 110.114 81.629C107.402 81.6146 104.688 81.6629 101.978 81.6061C100.984 81.585 100.136 81.6968 99.5317 82.5608C99.4686 82.6515 99.3664 82.715 99.282 82.7904C90.3627 90.7347 79.9642 93.8106 68.165 91.8885C60.6677 90.6669 54.2407 87.2174 48.8242 81.9204C48.5916 81.6934 48.3624 81.6061 48.042 81.607C41.1258 81.6146 34.2106 81.6138 27.2944 81.6138C26.0283 81.6138 25.3875 80.9784 25.3782 79.7137C25.3748 79.2198 25.3782 78.7251 25.3782 78.2312C25.3782 74.9554 25.3807 71.6805 25.3722 68.4046C25.3722 68.1742 25.3432 67.9082 25.2265 67.7219C24.9675 67.3093 24.4801 67.3534 24.0404 67.7905C17.6338 74.1591 11.2272 80.5286 4.82148 86.8981C4.18925 87.5266 4.1884 87.7808 4.81722 88.406C11.1931 94.7458 17.5699 101.085 23.9467 107.424C24.0566 107.533 24.1631 107.652 24.2901 107.74C24.6948 108.023 25.2563 107.799 25.3535 107.315C25.3841 107.165 25.379 107.006 25.379 106.851C25.379 103.181 25.379 99.5091 25.379 95.8386C25.379 95.6547 25.3722 95.4709 25.3875 95.2879C25.4693 94.3002 26.1169 93.6903 27.1112 93.6615C27.3098 93.6555 27.5092 93.6598 27.7077 93.6598C41.4684 93.6598 55.2291 93.6598 68.9898 93.6598L68.9872 93.6581ZM80.0196 18.7034C66.3015 18.7034 52.5834 18.7025 38.8662 18.7085C38.4001 18.7085 37.9272 18.7423 37.4705 18.8279C34.6008 19.365 32.4391 22.0885 32.6087 24.928C32.7962 28.0598 35.1879 30.591 38.2391 30.6791C41.5877 30.7757 44.9405 30.7147 48.2916 30.7079C48.4484 30.7079 48.6282 30.5867 48.7569 30.4758C49.9361 29.4601 51.0455 28.352 52.2903 27.4236C61.3954 20.6323 71.5553 18.4247 82.6601 20.8212C89.4101 22.2774 95.2169 25.5684 100.142 30.3834C100.397 30.6333 100.649 30.7265 101.001 30.7265C107.888 30.718 114.775 30.7206 121.663 30.7206C122.996 30.7206 123.632 31.3415 123.633 32.6529C123.635 36.4369 123.636 40.2202 123.632 44.0042C123.632 44.3846 123.7 44.7116 124.094 44.8709C124.478 45.0267 124.734 44.8192 124.989 44.5659C131.412 38.1752 137.838 31.7871 144.265 25.3981C144.807 24.8594 144.803 24.5536 144.257 24.0097C138.773 18.5602 133.289 13.1115 127.805 7.66203C126.831 6.69377 125.86 5.72128 124.88 4.75896C124.465 4.35064 123.875 4.43959 123.703 4.9377C123.635 5.13169 123.638 5.35448 123.637 5.56457C123.633 7.00467 123.636 8.44477 123.636 9.88487C123.636 12.2144 123.635 14.544 123.639 16.8736C123.641 17.5962 123.399 18.2019 122.714 18.4992C122.365 18.6508 121.945 18.6941 121.557 18.6941C107.711 18.7034 93.8655 18.7017 80.0205 18.7025L80.0196 18.7034Z"
                        fill="#0044FF"></path><path
                        d="M120.286 34.0608H103.447C108.408 40.6378 110.986 47.9772 110.988 56.1621C110.991 64.352 108.415 71.694 103.448 78.2837C103.658 78.2931 103.807 78.3049 103.956 78.3049C106.071 78.3058 108.188 78.2947 110.303 78.3075C114.82 78.3346 118.601 81.3757 119.548 85.7282C120.672 90.8939 117.104 96.0537 111.844 96.8509C111.257 96.9398 110.657 96.9805 110.063 96.9805C83.1825 96.9864 56.301 96.9856 29.4203 96.9856C29.2099 96.9856 28.9994 96.9856 28.725 96.9856C28.725 97.1838 28.725 97.3473 28.725 97.5099C28.725 100.687 28.7293 103.863 28.7233 107.039C28.7199 109.145 27.3737 110.768 25.3083 111.116C23.939 111.346 22.7581 110.921 21.7782 109.946C17.771 105.964 13.7646 101.981 9.75828 97.9979C7.2984 95.5522 4.83767 93.1066 2.37778 90.6601C0.546714 88.8388 0.537341 86.4415 2.37011 84.6185C8.82358 78.1973 15.2822 71.7804 21.7382 65.3618C22.8782 64.2284 24.2364 63.8056 25.7889 64.2622C27.314 64.7104 28.2624 65.7582 28.6151 67.3051C28.6986 67.6727 28.7182 68.0607 28.7191 68.4394C28.7267 71.5449 28.7233 74.6513 28.7233 77.7568C28.7233 77.922 28.7233 78.0864 28.7233 78.2736H45.5574C40.6001 71.6974 38.021 64.358 38.0218 56.1714C38.0227 47.9942 40.5899 40.6615 45.5591 34.0667C45.3597 34.0565 45.2149 34.043 45.0692 34.043C42.9671 34.0413 40.866 34.0421 38.764 34.0413C34.2276 34.0396 30.4666 31.04 29.4748 26.6315C28.3305 21.5455 31.9211 16.2942 37.0871 15.5182C37.6878 15.4276 38.3013 15.3776 38.9088 15.3776C65.8039 15.3708 92.6991 15.3717 119.594 15.3717C119.805 15.3717 120.015 15.3717 120.284 15.3717V14.8456C120.284 11.7113 120.284 8.57692 120.284 5.44343C120.284 4.42604 120.537 3.48658 121.193 2.68436C122.745 0.785971 125.467 0.65975 127.237 2.4099C129.251 4.40062 131.255 6.40152 133.263 8.39818C137.741 12.8506 142.221 17.3014 146.697 21.7555C148.244 23.2939 148.435 25.5252 147.147 27.1712C146.844 27.5591 146.471 27.8946 146.12 28.2436C139.836 34.4945 133.548 40.7437 127.263 46.9937C126.027 48.2229 124.355 48.5745 122.799 47.9315C121.257 47.2936 120.291 45.8493 120.287 44.1339C120.28 40.9572 120.285 37.7805 120.285 34.6046V34.0582L120.286 34.0608ZM74.9916 89.137C93.3117 88.8609 108.066 73.7686 107.653 55.4158C107.248 37.384 92.1418 22.8017 73.7229 23.2185C55.69 23.6268 40.929 38.5573 41.3602 56.9728C41.7785 74.808 56.6213 89.3742 74.9916 89.137ZM68.9872 93.6581C80.703 93.6581 92.4187 93.6581 104.135 93.6581C106.194 93.6581 108.252 93.6716 110.312 93.6555C114.818 93.62 117.755 89.0726 115.812 85.0836C114.675 82.7514 112.704 81.6426 110.114 81.629C107.402 81.6146 104.688 81.6629 101.978 81.6061C100.984 81.585 100.136 81.6968 99.5317 82.5608C99.4686 82.6515 99.3664 82.715 99.282 82.7904C90.3627 90.7347 79.9642 93.8106 68.165 91.8885C60.6677 90.6669 54.2407 87.2174 48.8242 81.9204C48.5916 81.6934 48.3624 81.6061 48.042 81.607C41.1258 81.6146 34.2106 81.6138 27.2944 81.6138C26.0283 81.6138 25.3875 80.9784 25.3782 79.7137C25.3748 79.2198 25.3782 78.7251 25.3782 78.2312C25.3782 74.9554 25.3807 71.6805 25.3722 68.4046C25.3722 68.1742 25.3432 67.9082 25.2265 67.7219C24.9675 67.3093 24.4801 67.3534 24.0404 67.7905C17.6338 74.1591 11.2272 80.5286 4.82148 86.8981C4.18925 87.5266 4.1884 87.7808 4.81722 88.406C11.1931 94.7458 17.5699 101.085 23.9467 107.424C24.0566 107.533 24.1631 107.652 24.2901 107.74C24.6948 108.023 25.2563 107.799 25.3535 107.315C25.3841 107.165 25.379 107.006 25.379 106.851C25.379 103.181 25.379 99.5091 25.379 95.8386C25.379 95.6547 25.3722 95.4709 25.3875 95.2879C25.4693 94.3002 26.1169 93.6903 27.1112 93.6615C27.3098 93.6555 27.5092 93.6598 27.7077 93.6598C41.4684 93.6598 55.2291 93.6598 68.9898 93.6598L68.9872 93.6581ZM80.0196 18.7034C66.3015 18.7034 52.5834 18.7025 38.8662 18.7085C38.4001 18.7085 37.9272 18.7423 37.4705 18.8279C34.6008 19.365 32.4391 22.0885 32.6087 24.928C32.7962 28.0598 35.1879 30.591 38.2391 30.6791C41.5877 30.7757 44.9405 30.7147 48.2916 30.7079C48.4484 30.7079 48.6282 30.5867 48.7569 30.4758C49.9361 29.4601 51.0455 28.352 52.2903 27.4236C61.3954 20.6323 71.5553 18.4247 82.6601 20.8212C89.4101 22.2774 95.2169 25.5684 100.142 30.3834C100.397 30.6333 100.649 30.7265 101.001 30.7265C107.888 30.718 114.775 30.7206 121.663 30.7206C122.996 30.7206 123.632 31.3415 123.633 32.6529C123.635 36.4369 123.636 40.2202 123.632 44.0042C123.632 44.3846 123.7 44.7116 124.094 44.8709C124.478 45.0267 124.734 44.8192 124.989 44.5659C131.412 38.1752 137.838 31.7871 144.265 25.3981C144.807 24.8594 144.803 24.5536 144.257 24.0097C138.773 18.5602 133.289 13.1115 127.805 7.66203C126.831 6.69377 125.86 5.72128 124.88 4.75896C124.465 4.35064 123.875 4.43959 123.703 4.9377C123.635 5.13169 123.638 5.35448 123.637 5.56457C123.633 7.00467 123.636 8.44477 123.636 9.88487C123.636 12.2144 123.635 14.544 123.639 16.8736C123.641 17.5962 123.399 18.2019 122.714 18.4992C122.365 18.6508 121.945 18.6941 121.557 18.6941C107.711 18.7034 93.8655 18.7017 80.0205 18.7025L80.0196 18.7034Z"
                        stroke="#0044FF" mask="url(#path-1-outside-1_189_2485)"></path><path
                        d="M83.5463 52.9912C82.9515 52.1746 82.3571 51.3575 81.7628 50.5402C81.2929 49.8942 80.823 49.2482 80.3528 48.6023M83.5463 52.9912L92.0438 43.7686C91.3435 43.6076 90.7462 43.8313 90.3142 44.4065L90.1143 44.2563C90.1143 44.2563 90.1143 44.2563 90.1143 44.2563C89.7001 44.8078 89.295 45.3678 88.8913 45.9258C88.723 46.1585 88.555 46.3908 88.3867 46.6219C87.2785 48.1436 86.1707 49.6661 85.0505 51.2058C84.637 51.7741 84.2218 52.3447 83.8043 52.9184C83.785 52.8935 83.7667 52.8692 83.7485 52.8442L83.7484 52.844C83.1535 52.0274 82.5594 51.2105 81.9651 50.3934C81.4953 49.7474 81.0254 49.1013 80.555 48.4552L80.3528 48.6023M83.5463 52.9912C83.5792 53.0364 83.6134 53.0806 83.6514 53.1286L83.5463 52.9912ZM80.3528 48.6023C79.3465 47.2189 78.3394 45.8364 77.3323 44.4539L80.5549 48.4551M80.3528 48.6023L80.5549 48.4551M83.8045 59.4293C83.7711 59.4725 83.7396 59.5139 83.7085 59.5567L83.7084 59.5569C83.0941 60.4006 82.4801 61.2447 81.866 62.0889C80.4261 64.0684 78.986 66.0483 77.5409 68.0243L77.5409 68.0243C76.6426 69.2523 74.8629 69.1585 74.2147 67.7971C74.0436 67.4382 73.9871 67.0813 74.037 66.7308C74.0865 66.3829 74.2386 66.0568 74.461 65.7528C75.3109 64.5889 76.1584 63.4236 77.0061 62.2582C77.4305 61.6747 77.8548 61.0913 78.2796 60.5079C78.524 60.1719 78.7682 59.8353 79.0124 59.4986C79.7725 58.4508 80.5336 57.4016 81.3076 56.3626C81.3922 56.2488 81.4009 56.1963 81.4004 56.1706C81.3999 56.1419 81.3869 56.0874 81.3014 55.9709C79.9916 54.1841 78.6866 52.3925 77.3818 50.6013C76.4308 49.2957 75.4799 47.9903 74.5274 46.687L74.5274 46.687C74.1095 46.115 73.8678 45.4664 74.1528 44.7113C74.406 44.039 74.9168 43.6125 75.6269 43.4989L83.8045 59.4293ZM83.8045 59.4293C84.2008 59.9731 84.5781 60.491 84.9555 61.009C85.475 61.7225 85.9946 62.4359 86.5142 63.1493C87.6924 64.7669 88.8706 66.3845 90.0472 68.0034C90.2808 68.325 90.562 68.5791 90.8978 68.7304C91.2361 68.8828 91.6137 68.9236 92.0247 68.843C92.7369 68.7032 93.247 68.2424 93.4624 67.655C93.6773 67.0688 93.5923 66.3757 93.1596 65.7791L93.1596 65.779C90.9102 62.6786 88.6586 59.5783 86.3855 56.4931L86.3855 56.493C86.2636 56.3278 86.2373 56.2367 86.238 56.173C86.2387 56.1077 86.2683 56.0163 86.3899 55.851C87.8815 53.8241 89.3627 51.7886 90.8435 49.7536C91.6003 48.7136 92.3569 47.6738 93.1148 46.6353C93.4402 46.1898 93.6697 45.6732 93.5494 45.0582L83.8045 59.4293ZM80.5549 48.4551C79.5486 47.0717 78.5414 45.6892 77.5343 44.3067L77.5343 44.3066M80.5549 48.4551L77.5343 44.3066M77.5343 44.3066C77.0695 43.6692 76.4179 43.372 75.627 43.4989L77.5343 44.3066Z"
                        fill="#0044FF" stroke="#0044FF" stroke-width="0.5"></path><path
                        d="M59.2579 58.8827V59.1528V59.1678V59.1827V59.1977V59.2127V59.2276V59.2426V59.2576V59.2726V59.2875V59.3025V59.3175V59.3324V59.3474V59.3624V59.3773V59.3923V59.4073V59.4223V59.4372V59.4522V59.4672V59.4821V59.4971V59.5121V59.5271V59.542V59.557V59.572V59.5869V59.6019V59.6169V59.6318V59.6468V59.6618V59.6768V59.6917V59.7067V59.7217V59.7366V59.7516V59.7666V59.7815V59.7965V59.8115V59.8265V59.8414V59.8564V59.8714V59.8863V59.9013V59.9163V59.9312V59.9462V59.9612V59.9762V59.9911V60.0061V60.0211V60.036V60.051V60.066V60.0809V60.0959V60.1109V60.1259V60.1408V60.1558V60.1708V60.1857V60.2007V60.2157V60.2307V60.2456V60.2606V60.2756V60.2905V60.3055V60.3205V60.3354V60.3504V60.3654V60.3804V60.3953V60.4103V60.4253V60.4402V60.4552V60.4702V60.4851V60.5001V60.5151V60.5301V60.545V60.56V60.575V60.5899V60.6049V60.6199V60.6348V60.6498V60.6648V60.6798V60.6947V60.7097V60.7247V60.7396V60.7546V60.7696V60.7846V60.7995V60.8145V60.8295V60.8444V60.8594V60.8744V60.8893V60.9043V60.9193V60.9343V60.9492V60.9642V60.9792V60.9941V61.0091V61.0241V61.0391V61.054V61.069V61.084V61.0989V61.1139V61.1289V61.1438V61.1588V61.1738V61.1888V61.2037V61.2187V61.2337V61.2486V61.2636V61.2786V61.2936V61.3085V61.3235V61.3385V61.3534V61.3684V61.3834V61.3983V61.4133V61.4283V61.4433V61.4582V61.4732V61.4882V61.5031V61.5181V61.5331V61.548V61.563V61.578V61.593V61.6079V61.6229V61.6379V61.6528V61.6678V61.6828V61.6978V61.7127V61.7277V61.7427V61.7576V61.7726V61.7876V61.8026V61.8175V61.8325V61.8475V61.8624V61.8774V61.8924V61.9073V61.9223V61.9373V61.9523V61.9672V61.9822V61.9972V62.0121V62.0271V62.0421V62.0571V62.072V62.087V62.102V62.1169V62.1319V62.1469V62.1619V62.1768V62.1918V62.2068V62.2217V62.2367V62.2517V62.2666V62.2816V62.2966V62.3116V62.3265V62.3415V62.3565V62.3714V62.3864V62.4014V62.4164V62.4313V62.4463V62.4613V62.4762V62.4912V62.5062V62.5212V62.5361V62.5511V62.5661V62.581V62.596V62.611V62.626V62.6409V62.6559V62.6709V62.6858V62.7008V62.7158V62.7308V62.7457V62.7607V62.7757V62.7906V62.8056V62.8206V62.8356V62.8505V62.8655V62.8805V62.8954V62.9104V62.9254V62.9404V62.9553V62.9703V62.9853V63.0002V63.0152V63.0302V63.0452V63.0601V63.0751V63.0901V63.105V63.12V63.135V63.15V63.1649V63.1799V63.1949V63.2098V63.2248V63.2398V63.2548V63.2697V63.2847V63.2997V63.3146V63.3296V63.3446V63.3596V63.3745V63.3895V63.4045V63.4194V63.4344V63.4494V63.4644V63.4793V63.4943V63.5093V63.5242V63.5392V63.5542V63.5692V63.5841V63.5991V63.6141V63.629V63.644V63.659V63.674V63.6889V63.7039V63.7189V63.7338V63.7488V63.7638V63.7788V63.7937V63.8087V63.8237V63.8387V63.8536V63.8686V63.8836V63.8985V63.9135V63.9285V63.9435V63.9584V63.9734V63.9884V64.0033V64.0183V64.0333V64.0483V64.0632V64.0782V64.0932V64.1082V64.1231V64.1381V64.1531V64.168V64.183V64.198V64.213V64.2279V64.2429V64.2579V64.2728V64.2878V64.3028V64.3178V64.3327V64.3477V64.3627V64.3777V64.3926V64.4076V64.4226V64.4375V64.4525V64.4675V64.4825V64.4974V64.5124V64.5274V64.5424V64.5573V64.5723V64.5873V64.6022V64.6172V64.6322V64.6472V64.6621V64.6771V64.6921V64.7071V64.722V64.737V64.752V64.7669V64.7819V64.7969V64.8119V64.8268V64.8418V64.8568V64.8718V64.8867V64.9017V64.9167V64.9316V64.9466V64.9616V64.9766V64.9915V65.0065V65.0215V65.0365V65.0514V65.0664V65.0814V65.0963V65.1113V65.1263V65.1413V65.1562V65.1712V65.1862V65.2012V65.2161V65.2311V65.2461V65.2611V65.276V65.291V65.306V65.3209V65.3359V65.3509V65.3659V65.3808V65.3958V65.4108V65.4258V65.4407V65.4557V65.4707V65.4857V65.5006V65.5156V65.5306V65.5455V65.5605V65.5755V65.5905V65.6054V65.6204V65.6354V65.6504V65.6653V65.6803V65.6953V65.7103V65.7252V65.7402V65.7552V65.7702V65.7851V65.8001V65.8151V65.8301V65.845V65.86V65.875V65.8899V65.9049V65.9199V65.9349V65.9498V65.9648V65.9798V65.9948V66.0097V66.0247V66.0397V66.0547V66.0696V66.0846V66.0996V66.1146V66.1295V66.1445V66.1595V66.1745V66.1894V66.2044V66.2194V66.2344V66.2493V66.2643V66.2793V66.2943V66.3092V66.3242V66.3392V66.3541V66.3691V66.3841V66.3991V66.414V66.429V66.444V66.459V66.4739V66.4889V66.5039V66.5189V66.5338V66.5488V66.5638V66.5788V66.5937V66.6087V66.6237V66.6387V66.6536V66.6686V66.6836V66.6986V66.7135V66.7285V66.7435V66.7585V66.7734V66.7884V66.8034V66.8184C59.2579 67.4047 59.0707 67.9205 58.7319 68.293C58.3916 68.6672 57.9113 68.8822 57.3586 68.8846M59.2579 58.8827L57.3586 68.8846M59.2579 58.8827H59.2584H59.2596H59.2607H59.2618H59.2629H59.2641H59.2652H59.2663H59.2674H59.2685H59.2697H59.2708H59.2719H59.273H59.2741H59.2752H59.2763H59.2774H59.2786H59.2797H59.2808H59.2819H59.283H59.2841H59.2852H59.2863H59.2874H59.2885H59.2896H59.2907H59.2918H59.2929H59.294H59.2951H59.2962H59.2973H59.2984H59.2995H59.3006H59.3017H59.3028H59.3039H59.3049H59.306H59.3071H59.3082H59.3093H59.3104H59.3115H59.3126H59.3136H59.3147H59.3158H59.3169H59.318H59.3191H59.3201H59.3212H59.3223H59.3234H59.3245H59.3255H59.3266H59.3277H59.3288H59.3298H59.3309H59.332H59.333H59.3341H59.3352H59.3363H59.3373H59.3384H59.3395H59.3405H59.3416H59.3427H59.3437H59.3448H59.3459H59.3469H59.348H59.349H59.3501H59.3512H59.3522H59.3533H59.3543H59.3554H59.3565H59.3575H59.3586H59.3596H59.3607H59.3617H59.3628H59.3638H59.3649H59.3659H59.367H59.368H59.3691H59.3701H59.3712H59.3722H59.3733H59.3743H59.3754H59.3764H59.3775H59.3785H59.3796H59.3806H59.3817H59.3827H59.3837H59.3848H59.3858H59.3869H59.3879H59.3889H59.39H59.391H59.3921H59.3931H59.3941H59.3952H59.3962H59.3972H59.3983H59.3993H59.4003H59.4014H59.4024H59.4034H59.4045H59.4055H59.4065H59.4076H59.4086H59.4096H59.4106H59.4117H59.4127H59.4137H59.4148H59.4158H59.4168H59.4178H59.4189H59.4199H59.4209H59.4219H59.423H59.424H59.425H59.426H59.427H59.4281H59.4291H59.4301H59.4311H59.4321H59.4332H59.4342H59.4352H59.4362H59.4372H59.4382H59.4393H59.4403H59.4413H59.4423H59.4433H59.4443H59.4454H59.4464H59.4474H59.4484H59.4494H59.4504H59.4514H59.4524H59.4534H59.4545H59.4555H59.4565H59.4575H59.4585H59.4595H59.4605H59.4615H59.4625H59.4635H59.4645H59.4656H59.4666H59.4676H59.4686H59.4696H59.4706H59.4716H59.4726H59.4736H59.4746H59.4756H59.4766H59.4776H59.4786H59.4796H59.4806H59.4816H59.4826H59.4836H59.4846H59.4856H59.4866H59.4876H59.4886H59.4896H59.4906H59.4916H59.4926H59.4936H59.4946H59.4956H59.4966H59.4976H59.4986H59.4996H59.5006H59.5016H59.5026H59.5036H59.5046H59.5056H59.5066H59.5076H59.5086H59.5096H59.5106H59.5116H59.5126H59.5136H59.5146H59.5155H59.5165H59.5175H59.5185H59.5195H59.5205H59.5215H59.5225H59.5235H59.5245H59.5255H59.5265H59.5275H59.5285H59.5295H59.5304H59.5314H59.5324H59.5334H59.5344H59.5354H59.5364H59.5374H59.5384H59.5394H59.5404H59.5413H59.5423H59.5433H59.5443H59.5453H59.5463H59.5473H59.5483H59.5493H59.5503H59.5512H59.5522H59.5532H59.5542H59.5552H59.5562H59.5572H59.5582H59.5592H59.5601H59.5611H59.5621H59.5631H59.5641H59.5651H59.5661H59.5671H59.5681H59.569H59.57H59.571H59.572H59.573H59.574H59.575H59.576H59.577H59.5779C60.5919 58.8827 61.6059 58.8828 62.6199 58.8829C65.1556 58.8833 67.6914 58.8836 70.2271 58.8818C71.1371 58.8818 71.8511 58.4604 72.1619 57.6922L59.2579 58.8827ZM57.3586 68.8846C56.797 68.8874 56.3083 68.6737 55.962 68.2953C55.6172 67.9187 55.4272 67.3946 55.4272 66.7963C55.4247 59.6815 55.4238 52.5673 55.423 45.4524V45.4524C55.423 44.8781 55.6181 44.3764 55.9728 44.0174C56.3278 43.6581 56.8257 43.459 57.3984 43.459C61.7005 43.459 66.0027 43.4607 70.3058 43.4691C71.7269 43.472 72.6782 44.7654 72.1708 46.0658C71.8663 46.8468 71.1568 47.2804 70.2536 47.2814L70.2535 47.2814C68.2416 47.2824 66.2297 47.2822 64.218 47.2821C62.7085 47.282 61.1991 47.2819 59.6896 47.2822H59.6896H59.2852V55.0704M57.3586 68.8846L59.2852 55.0704M59.2852 55.0704H59.2854H59.2865H59.2876H59.2887H59.2898H59.2908H59.2919H59.293H59.2941H59.2952H59.2963H59.2974H59.2985H59.2996H59.3007H59.3018H59.3028H59.3039H59.305H59.3061H59.3072H59.3083H59.3094H59.3105H59.3116H59.3126H59.3137H59.3148H59.3159H59.317H59.3181H59.3192H59.3202H59.3213H59.3224H59.3235H59.3246H59.3257H59.3268H59.3278H59.3289H59.33H59.3311H59.3322H59.3333H59.3343H59.3354H59.3365H59.3376H59.3387H59.3397H59.3408H59.3419H59.343H59.3441H59.3451H59.3462H59.3473H59.3484H59.3495H59.3505H59.3516H59.3527H59.3538H59.3549H59.3559H59.357H59.3581H59.3592H59.3602H59.3613H59.3624H59.3635H59.3645H59.3656H59.3667H59.3678H59.3689H59.3699H59.371H59.3721H59.3732H59.3742H59.3753H59.3764H59.3774H59.3785H59.3796H59.3807H59.3817H59.3828H59.3839H59.385H59.386H59.3871H59.3882H59.3892H59.3903H59.3914H59.3925H59.3935H59.3946H59.3957H59.3967H59.3978H59.3989H59.4H59.401H59.4021H59.4032H59.4042H59.4053H59.4064H59.4074H59.4085H59.4096H59.4106H59.4117H59.4128H59.4138H59.4149H59.416H59.417H59.4181H59.4192H59.4202H59.4213H59.4224H59.4234H59.4245H59.4256H59.4266H59.4277H59.4288H59.4298H59.4309H59.432H59.433H59.4341H59.4352H59.4362H59.4373H59.4384H59.4394H59.4405H59.4415H59.4426H59.4437H59.4447H59.4458H59.4469H59.4479H59.449H59.4501H59.4511H59.4522H59.4532H59.4543H59.4554H59.4564H59.4575H59.4585H59.4596H59.4607H59.4617H59.4628H59.4639H59.4649H59.466H59.467H59.4681H59.4692H59.4702H59.4713H59.4723H59.4734H59.4745H59.4755H59.4766H59.4776H59.4787H59.4798H59.4808H59.4819H59.4829H59.484H59.485H59.4861H59.4872H59.4882H59.4893H59.4903H59.4914H59.4925H59.4935H59.4946H59.4956H59.4967H59.4977H59.4988H59.4999H59.5009H59.502H59.503H59.5041H59.5051H59.5062H59.5073H59.5083H59.5094H59.5104H59.5115H59.5125H59.5136H59.5147H59.5157H59.5168H59.5178H59.5189H59.5199H59.521H59.522H59.5231H59.5242H59.5252H59.5263H59.5273H59.5284H59.5294H59.5305H59.5315H59.5326H59.5337H59.5347H59.5358H59.5368H59.5379H59.5389H59.54H59.541H59.5421H59.5431H59.5442H59.5453H59.5463H59.5474H59.5484H59.5495H59.5505H59.5516H59.5526H59.5537H59.5547H59.5558H59.5569H59.5579H59.559H59.56H59.5611H59.5621H59.5632H59.5642H59.5653H59.5663H59.5674H59.5684H59.5695H59.5706H59.5716H59.5727H59.5737H59.5748H59.5758H59.5769H59.5779H59.579H59.58H59.5811H59.5821H59.5832H59.5843H59.5853H59.5864H59.5874H59.5885H59.5895H59.5906H59.5916H59.5927H59.5937H59.5948H59.5958C60.6177 55.0704 61.6398 55.0702 62.6619 55.0699C65.2179 55.0692 67.7744 55.0685 70.3304 55.0721M59.2852 55.0704L70.3304 55.0721M70.3304 55.0721C71.7428 55.0741 72.6851 56.4011 72.1619 57.6922C72.1619 57.6921 72.1619 57.6921 72.162 57.6921L70.3304 55.0721Z"
                        fill="#0044FF" stroke="#0044FF" stroke-width="0.5"></path></svg>				</span>
                                                </div>

                                                <div class="elementor-icon-box-content">

                                                    <h3 class="elementor-icon-box-title">
						<span>
							Forex Algorithms						</span>
                                                    </h3>

                                                    <p class="elementor-icon-box-description">
                                                        Engineered for the fast-paced forex market, our Forex Bots use
                                                        advanced algorithms to analyze trends and patterns across global
                                                        currency pairs. These bots offer strategic insights for trading
                                                        major, minor, and exotic currencies, optimizing both short-term
                                                        gains and long-term growth. </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4782b92 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="4782b92" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                   href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjY3MCIsInRvZ2dsZSI6ZmFsc2V9">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Get Access Now</span>
					</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-c8e7250 elementor-widget elementor-widget-text-editor"
                                        data-id="c8e7250" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            30-Day Money Back <br>Guarantee
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-27aa1ac e-flex e-con-boxed e-con e-child"
                                 data-id="27aa1ac" data-element_type="container"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-03751dc elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                        data-id="03751dc" data-element_type="widget"
                                        data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">

                                                <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="98" height="102" viewBox="0 0 98 102" fill="none"><g
                        clip-path="url(#clip0_193_2551)"><path
                            d="M48.6086 86.5435C46.011 90.9343 43.4134 95.1019 41.0602 99.4062C39.9967 101.351 38.6798 101.848 36.6343 101.538C26.5833 100.007 16.5278 98.5363 6.46777 97.0787C2.9334 96.5686 2.08715 95.0564 3.63032 91.7997C5.63961 87.5546 7.58103 83.2731 9.70345 79.0873C10.8212 76.8828 12.2694 74.8422 13.6949 72.5238C12.7129 72.0501 11.8711 71.6038 10.9977 71.2394C8.35035 70.1417 5.66677 69.1305 3.04654 67.9827C0.688788 66.9487 -0.189146 64.8809 1.0463 62.8176C4.50825 57.033 8.06977 51.3076 11.7082 45.6323C12.2241 44.8307 13.3057 44.2294 14.247 43.906C20.8043 41.6651 27.4024 39.538 33.9688 37.3289C34.5526 37.1331 35.1409 36.6958 35.5301 36.2084C36.1365 35.4432 36.6977 34.596 37.0642 33.6942C38.3314 30.5878 40.4583 29.7907 43.7166 30.3555C49.5001 31.3621 55.3651 31.8814 61.1667 32.7923C62.5515 33.011 63.9363 33.7989 65.1174 34.6279C67.4661 36.2768 69.679 38.1169 71.9282 39.9069C74.0461 41.5877 74.2905 43.027 72.9192 45.4182C72.0187 46.9851 71.1045 48.5474 70.0818 50.3055C70.824 50.6562 71.3942 50.966 71.9961 51.2028C75.5123 52.5647 78.9879 54.0496 82.5675 55.211C85.0474 56.0172 86.663 57.4975 87.9165 59.7294C90.6997 64.6805 93.6819 69.5177 96.4877 74.4596C98.4472 77.9076 97.6055 80.4036 94.0349 81.9932C85.767 85.6735 77.4764 89.2946 69.2039 92.9657C67.4299 93.7537 65.7917 93.649 63.9906 92.8701C58.9538 90.6975 53.8491 88.6842 48.6131 86.548L48.6086 86.5435ZM59.3701 37.1558C58.8135 36.9235 58.5465 36.7368 58.2614 36.7004C53.1884 36.0126 48.1108 35.384 43.0469 34.6461C41.5851 34.4321 41.0557 35.2929 40.4493 36.3041C32.851 48.9619 25.2347 61.606 17.6365 74.2592C17.3514 74.7375 17.1659 75.2795 16.8129 76.0492C22.5738 76.8099 28.0948 77.4658 33.5842 78.3084C35.0549 78.5362 35.7157 78.0989 36.4171 76.8736C41.0738 68.7206 45.8119 60.6176 50.5183 52.4964C53.4327 47.4588 56.3381 42.4166 59.3746 37.1558H59.3701ZM93.519 77.5705C90.0933 71.7951 86.8893 66.3156 83.5495 60.9273C83.278 60.4901 81.9339 60.3352 81.2958 60.5811C76.9424 62.2619 72.6568 64.1293 68.3124 65.8465C66.819 66.4386 66.294 67.3678 66.3121 68.9574C66.38 75.1018 66.3347 81.2508 66.3528 87.3952C66.3528 87.9555 66.5112 88.5112 66.647 89.413C75.6481 85.4458 84.3731 81.6015 93.5235 77.5705H93.519ZM39.9017 91.8999C40.0872 91.9273 40.2682 91.9546 40.4538 91.9819C50.0341 75.7896 59.619 59.5973 69.2944 43.2456C67.276 41.6696 65.4116 40.2075 63.5425 38.7455C63.2167 39.1508 63.0493 39.3103 62.9361 39.5061C55.0347 53.1341 47.1333 66.7666 39.25 80.4082C38.9921 80.8545 38.6572 81.4011 38.7024 81.8657C39.0554 85.218 39.4944 88.5567 39.9062 91.9045L39.9017 91.8999ZM7.78467 92.9384C17.4329 94.3458 26.7327 95.7032 36.4171 97.1197C35.7066 92.2643 35.1092 88.001 34.4123 83.7468C34.3399 83.305 33.7335 82.6719 33.3081 82.6081C27.1943 81.7336 21.0713 80.9229 14.9394 80.1713C14.4959 80.1167 13.7356 80.5129 13.541 80.9092C11.6313 84.7671 9.81206 88.666 7.78014 92.9384H7.78467ZM16.0345 68.7115C19.2883 63.2867 22.4607 58.0031 25.7597 52.5009C21.9945 51.0252 18.5235 49.6679 14.9711 48.2786C11.6358 53.6533 8.42276 58.8412 5.07846 64.2341C8.84362 65.7736 12.3689 67.2129 16.0345 68.7115ZM62.0401 87.418C62.0401 80.4856 62.0627 74.0542 61.9948 67.6274C61.9903 67.14 61.3206 66.6618 60.782 65.9376C57.3156 71.8133 54.1115 77.2471 50.7899 82.8723C54.5777 84.4027 58.0396 85.8056 62.0401 87.4226V87.418ZM76.3948 57.4292C73.5935 56.3634 70.7923 55.2976 67.7603 54.1452C66.1447 56.9009 64.5743 59.5745 63.0085 62.2482C63.1941 62.4851 63.3796 62.7219 63.5652 62.9587C68.0363 61.7198 72.168 59.5244 76.3993 57.4247L76.3948 57.4292ZM21.0578 46.0331C23.3657 46.9578 25.1307 47.7275 26.9499 48.347C27.3753 48.4927 28.2215 48.2832 28.4523 47.9416C29.4887 46.4248 30.3711 44.8033 31.3079 43.2228C31.1902 43.0634 31.0726 42.9085 30.9549 42.7491C27.8278 43.7876 24.7007 44.8261 21.0578 46.0331Z"
                            fill="#0044FF"></path><path
                            d="M24.23 6.65723C24.6056 6.9624 25.4202 7.38599 25.8954 8.0601C27.9816 11.0162 29.9638 14.0451 31.9957 17.0422C32.8148 18.2492 33.0637 19.4608 31.7242 20.4082C30.3348 21.392 29.3166 20.5903 28.5247 19.4334C26.4384 16.3863 24.3386 13.3437 22.3339 10.2419C21.2568 8.57935 22.0352 6.7711 24.23 6.65723Z"
                            fill="#0044FF"></path><path
                            d="M77.2818 32.7148C76.6346 32.0863 75.6526 31.5533 75.4626 30.8155C75.2951 30.1732 75.8336 28.8478 76.3948 28.6018C80.2414 26.9302 84.1514 25.3862 88.1157 24.0152C88.6814 23.8193 89.9756 24.6118 90.3241 25.2723C90.6001 25.7961 90.1657 27.3128 89.6724 27.536C85.7172 29.3261 81.6715 30.9157 77.2863 32.7148H77.2818Z"
                            fill="#0044FF"></path><path
                            d="M73.8469 8.5655C73.4351 9.40359 73.1998 10.0458 72.8332 10.5924C70.9054 13.4938 68.9504 16.377 67 19.2602C66.1627 20.4991 65.1129 21.4282 63.6376 20.3806C62.298 19.4332 62.642 18.1533 63.4384 16.9691C65.5156 13.8946 67.5385 10.7791 69.7514 7.80485C70.2085 7.18996 71.4168 6.82102 72.2268 6.89389C72.797 6.944 73.2813 7.9415 73.8469 8.56095V8.5655Z"
                            fill="#0044FF"></path><path
                            d="M6.56275 23.7559C7.40901 23.9699 7.78915 24.0246 8.1376 24.1567C11.5045 25.4776 14.8805 26.7802 18.2293 28.1512C19.4964 28.6705 20.578 29.4903 19.8992 31.0891C19.2611 32.5967 18.0347 32.6195 16.668 32.0729C13.2423 30.6974 9.76224 29.4402 6.40436 27.9189C5.68482 27.591 5.00148 26.3339 5.006 25.5049C5.006 24.8672 6.10568 24.2341 6.56275 23.7559Z"
                            fill="#0044FF"></path><path
                            d="M49.8214 8.3514C49.8214 10.2416 49.8757 12.1319 49.8033 14.0221C49.7535 15.343 49.2195 16.4498 47.6809 16.4225C46.1377 16.3997 45.6716 15.3248 45.6716 13.9629C45.667 10.1824 45.6716 6.40194 45.6716 2.62146C45.6716 1.30968 46.3232 0.175538 47.6039 0.407833C48.4276 0.553586 49.5589 1.6604 49.6902 2.47571C49.9979 4.38872 49.7897 6.38828 49.7897 8.35595C49.7988 8.35595 49.8078 8.35595 49.8214 8.35595V8.3514Z"
                            fill="#0044FF"></path></g><defs><clipPath id="clip0_193_2551"><rect width="97.0298"
                                                                                                height="101.249"
                                                                                                fill="white"
                                                                                                transform="translate(0.485107 0.375977)"></rect></clipPath></defs></svg>				</span>
                                                </div>

                                                <div class="elementor-icon-box-content">

                                                    <h3 class="elementor-icon-box-title">
						<span>
							Gold<br> Algorithms						</span>
                                                    </h3>

                                                    <p class="elementor-icon-box-description">
                                                        Tapping into the stable market of gold trading, our Gold Bots
                                                        offer a secure approach to capitalize on the precious metal’s
                                                        fluctuations. These bots analyze market conditions affecting
                                                        gold prices, ideal for portfolio diversification and inflation
                                                        hedging. </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-a3485f0 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="a3485f0" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                   href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjY3MCIsInRvZ2dsZSI6ZmFsc2V9">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Get Access Now</span>
					</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-dd9c24f elementor-widget elementor-widget-text-editor"
                                        data-id="dd9c24f" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            30-Day Money Back <br>Guarantee
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5fb0d87 e-flex e-con-boxed e-con e-child"
                                 data-id="5fb0d87" data-element_type="container"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-9c52c49 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                        data-id="9c52c49" data-element_type="widget"
                                        data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">

                                                <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="92" height="89" viewBox="0 0 92 89" fill="none"><path
                        fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.9912 7.46826C4.33522 7.46826 5.42477 8.55781 5.42477 9.90184V83.8202H89.0087C90.3528 83.8202 91.4423 84.9098 91.4423 86.2538C91.4423 87.5978 90.3528 88.6874 89.0087 88.6874H0.557617V9.90184C0.557617 8.55781 1.64717 7.46826 2.9912 7.46826Z"
                        fill="#0044FF"></path><path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M24.206 38.7238V83.314H28.916V38.7238H24.206ZM19.3879 37.7587C19.3879 35.6308 21.113 33.9058 23.2409 33.9058H29.8811C32.009 33.9058 33.734 35.6308 33.734 37.7587V84.2791C33.734 86.407 32.009 88.1321 29.8811 88.1321H23.2409C21.113 88.1321 19.3879 86.407 19.3879 84.2791V37.7587Z"
                                                    fill="#0044FF"></path><path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M47.53 46.5773V83.3094H52.2449V46.5773H47.53ZM53.2099 44.1683C54.1904 41.9678 54.1909 41.9681 54.1914 41.9683L54.1947 41.9697L54.1995 41.9719L54.2109 41.9771L54.2402 41.9905C54.2626 42.0009 54.2906 42.0141 54.3236 42.0301C54.3891 42.0619 54.4758 42.1055 54.5769 42.1598C54.7734 42.2656 55.0511 42.4266 55.3431 42.6376C55.6219 42.8391 55.9982 43.1463 56.3251 43.5638C56.6441 43.9713 57.0629 44.6746 57.0629 45.6122V84.2745C57.0629 86.3952 55.3463 88.1274 53.2099 88.1274H46.5649C44.4441 88.1274 42.7119 86.4108 42.7119 84.2745V45.6122C42.7119 43.4915 44.4285 41.7593 46.5649 41.7593H53.7224L54.1904 41.9678L53.2099 44.1683Z"
                                                                                fill="#0044FF"></path><path
                        fill-rule="evenodd" clip-rule="evenodd"
                        d="M70.8539 19.2013V83.3093H75.5639V19.2013H70.8539ZM66.0359 18.2363C66.0359 16.1083 67.7609 14.3833 69.8889 14.3833H76.529C78.6569 14.3833 80.382 16.1083 80.382 18.2363V84.2744C80.382 86.4023 78.6569 88.1273 76.529 88.1273H69.8889C67.7609 88.1273 66.0359 86.4023 66.0359 84.2744V18.2363Z"
                        fill="#0044FF"></path><path
                        d="M26.6883 27.6222C29.8049 27.6222 32.3315 25.0957 32.3315 21.9791C32.3315 18.8625 29.8049 16.3359 26.6883 16.3359C23.5717 16.3359 21.0452 18.8625 21.0452 21.9791C21.0452 25.0957 23.5717 27.6222 26.6883 27.6222Z"
                        fill="#0044FF"></path><path
                        d="M49.8897 36.5212C53.0064 36.5212 55.5329 33.9946 55.5329 30.878C55.5329 27.7614 53.0064 25.2349 49.8897 25.2349C46.7731 25.2349 44.2466 27.7614 44.2466 30.878C44.2466 33.9946 46.7731 36.5212 49.8897 36.5212Z"
                        fill="#0044FF"></path><path
                        d="M73.2088 11.277C76.3254 11.277 78.852 8.7505 78.852 5.63387C78.852 2.51725 76.3254 -0.00927734 73.2088 -0.00927734C70.0922 -0.00927734 67.5657 2.51725 67.5657 5.63387C67.5657 8.7505 70.0922 11.277 73.2088 11.277Z"
                        fill="#0044FF"></path><path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M73.6849 6.16718L49.9076 32.2876L25.9607 23.0175L26.6699 21.1854L49.3612 29.9694L72.2321 4.84473L73.6849 6.16718Z"
                                                    fill="#0044FF"></path></svg>				</span>
                                                </div>

                                                <div class="elementor-icon-box-content">

                                                    <h3 class="elementor-icon-box-title">
						<span>
							Stocks Algorithms						</span>
                                                    </h3>

                                                    <p class="elementor-icon-box-description">
                                                        Our Stocks Bots are designed to navigate the complexities of the
                                                        stock market, identifying potential movements through deep
                                                        analysis of historical data, market sentiment, and real-time
                                                        news. They provide targeted strategies for trading across
                                                        diverse sectors, enhancing portfolio performance. </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-55b2852 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="55b2852" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                   href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjY3MCIsInRvZ2dsZSI6ZmFsc2V9">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Get Access Now</span>
					</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-c04cb81 elementor-widget elementor-widget-text-editor"
                                        data-id="c04cb81" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            30-Day Money Back <br>Guarantee
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a8f7b06 e-flex e-con-boxed e-con e-child"
                                 data-id="a8f7b06" data-element_type="container"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-5fd7415 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                        data-id="5fd7415" data-element_type="widget"
                                        data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">

                                                <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 108 108" fill="none"><g
                        clip-path="url(#clip0_193_2599)"><path
                            d="M0.86084 53.7422C1.05317 30.2429 16.1496 9.71069 38.8536 2.64235C52.0767 -1.47551 65.0338 -0.393739 77.5659 5.54529C79.1425 6.29183 79.7147 7.56855 79.0973 8.87381C78.5109 10.1101 77.1978 10.4929 75.6212 9.77013C70.1767 7.27374 64.528 5.50012 58.5279 5.14111C40.6273 4.06648 26.0461 10.569 15.2568 24.9196C7.20761 35.6232 4.23961 47.8817 6.32671 61.0935C8.71536 76.2074 16.6269 87.8643 29.7573 95.7434C48.1043 106.756 71.8602 104.241 87.4339 89.5547C99.7143 77.9715 104.736 63.5994 102.649 46.8403C101.851 40.4472 99.662 34.4582 96.3664 28.8972C96.0434 28.3528 95.7039 27.8131 95.4237 27.2472C94.7874 25.9586 95.0699 24.815 96.1574 24.1303C97.2449 23.4432 98.5983 23.7095 99.3866 24.865C100.054 25.8445 100.636 26.8859 101.213 27.9248C111.679 46.731 109.677 70.5655 96.0387 87.1843C84.6962 101.007 69.9607 107.736 52.1075 107.136C39.8675 106.725 29.0426 102.308 19.735 94.3074C10.0213 85.9647 4.09477 75.4133 1.83434 62.8315C1.29773 59.8406 1.17426 56.7736 0.86084 53.7422Z"
                            fill="#0044FF"></path><path
                            d="M38.7516 53.6879C38.7516 50.6375 38.7421 47.5872 38.754 44.5368C38.7754 39.739 42.1969 35.9397 46.9884 35.4096C48.0854 35.2883 49.1918 35.2312 50.2936 35.2098C52.0791 35.1766 52.0791 35.2003 52.0815 33.3554C52.0815 32.5637 52.0578 31.7696 52.0934 30.9779C52.167 29.3303 53.1334 28.2627 54.4963 28.2865C55.7856 28.3079 56.7306 29.3802 56.7947 30.9636C56.835 31.9931 56.8469 33.0249 56.7947 34.052C56.7519 34.9436 57.139 35.1623 57.9843 35.2265C60.0191 35.3786 62.1276 35.3834 64.0556 35.9588C67.8665 37.1 70.2765 40.7827 70.1341 44.6391C70.089 45.8706 69.2484 46.7907 68.1158 46.8502C66.8336 46.9191 65.7937 46.0703 65.6227 44.8126C65.136 41.2511 63.6377 39.9363 60.05 39.9316C56.1726 39.9268 52.2952 39.9221 48.4202 39.934C45.1269 39.9458 43.2962 41.7908 43.2891 45.1122C43.2772 50.8563 43.2796 56.6027 43.2891 62.3468C43.2962 65.7229 45.1245 67.5321 48.5246 67.5417C52.5208 67.5512 56.5169 67.5535 60.5106 67.5417C63.5522 67.5321 65.3093 65.9202 65.6013 62.915C65.7462 61.441 66.7102 60.5589 68.0992 60.6278C69.3315 60.6897 70.1174 61.6312 70.1341 63.0624C70.1816 67.5512 66.5962 71.6024 62.1347 72.0542C60.8407 72.1849 59.5324 72.3014 58.2359 72.2491C57.0511 72.2016 56.6997 72.6604 56.7899 73.7707C56.8635 74.6766 56.8303 75.5943 56.7923 76.5025C56.7234 78.1525 55.7523 79.2176 54.3894 79.1938C53.0954 79.1701 52.1575 78.1049 52.0934 76.5168C52.053 75.4873 52.0411 74.4555 52.0934 73.4284C52.1361 72.5344 51.7491 72.3086 50.9038 72.2563C48.9829 72.1374 47.0027 72.1374 45.1672 71.6405C41.3421 70.611 38.6044 66.9211 38.7302 62.8389C38.8252 59.791 38.7492 56.7382 38.7492 53.6879H38.7516Z"
                            fill="#0044FF"></path><path
                            d="M56.144 94.3979C55.5124 94.3979 54.8713 94.4645 54.2492 94.3837C53.0288 94.2267 52.288 93.4184 52.2073 92.2724C52.1289 91.1502 52.7819 90.2206 53.9501 89.9092C54.4796 89.7689 55.0399 89.7118 55.5908 89.6928C66.4157 89.2839 75.3078 84.8427 82.2387 76.5903C87.1703 70.7179 89.7988 63.8326 90.3354 56.1651C90.3924 55.3354 90.3971 54.4985 90.4945 53.6735C90.6631 52.228 91.6271 51.403 92.9567 51.5004C94.2247 51.5908 95.2433 52.5989 95.1056 54.004C94.7898 57.2683 94.6093 60.5897 93.84 63.7589C89.6682 80.9222 74.3129 93.5349 56.7376 94.436C56.5405 94.4455 56.3411 94.436 56.144 94.436C56.144 94.4241 56.144 94.4098 56.144 94.3979Z"
                            fill="#0044FF"></path><path
                            d="M18.9586 42.0999C17.1256 42.1213 16.0144 40.4808 16.8525 38.6929C18.0563 36.1205 19.2554 33.5052 20.8154 31.1467C25.7708 23.6433 32.5924 18.4484 41.0477 15.4028C42.014 15.0557 42.9662 14.8655 43.8447 15.6073C45.1578 16.7199 44.9797 18.6766 43.4339 19.466C42.4177 19.9843 41.316 20.3338 40.2665 20.795C31.4622 24.6585 25.2009 31.054 21.3876 39.8722C20.6349 41.6101 20.1292 42.0856 18.961 42.0999H18.9586Z"
                            fill="#0044FF"></path><path
                            d="M86.7713 13.2749C86.7713 12.0576 86.7357 11.0305 86.7785 10.0058C86.8449 8.39144 87.6546 7.51176 89.0341 7.47372C90.3947 7.43568 91.3515 8.4176 91.4608 9.99864C91.4964 10.5122 91.4703 11.0281 91.4703 11.544C91.4703 12.0552 91.4703 12.5664 91.4703 13.2725C92.5269 13.2725 93.5194 13.1488 94.4644 13.3105C95.2693 13.4484 96.2381 13.7171 96.7462 14.2805C97.931 15.5906 97.0952 17.6495 95.3334 17.8658C94.1296 18.0156 92.8925 17.8944 91.4608 17.8944C91.4608 19.1426 91.5011 20.2362 91.4489 21.3251C91.399 22.3784 90.9788 23.2747 89.9293 23.6741C88.9985 24.0284 88.0464 23.8928 87.4504 23.0892C87.0586 22.559 86.8663 21.8078 86.7903 21.1325C86.6835 20.1601 86.7618 19.1663 86.7618 17.9681C85.5438 17.9681 84.4135 18.0251 83.2905 17.9562C81.5097 17.8468 80.4768 16.3799 81.068 14.8416C81.4907 13.748 82.4048 13.32 83.5137 13.2844C84.5346 13.2511 85.5556 13.2772 86.7642 13.2772L86.7713 13.2749Z"
                            fill="#0044FF"></path></g><defs><clipPath id="clip0_193_2599"><rect width="107" height="107"
                                                                                                fill="white"
                                                                                                transform="translate(0.86084 0.174805)"></rect></clipPath></defs></svg>				</span>
                                                </div>

                                                <div class="elementor-icon-box-content">

                                                    <h3 class="elementor-icon-box-title">
						<span>
							Crypto Algorithms						</span>
                                                    </h3>

                                                    <p class="elementor-icon-box-description">
                                                        Built for the volatile cryptocurrency market, our Crypto Bots
                                                        analyze trends to predict and execute profitable trades in
                                                        Bitcoin, Ethereum, and other altcoins. They simplify the crypto
                                                        trading process, enabling confident and profitable
                                                        engagements. </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-3ec4c19 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="3ec4c19" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                   href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjY3MCIsInRvZ2dsZSI6ZmFsc2V9">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Get Access Now</span>
					</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-cee3015 elementor-widget elementor-widget-text-editor"
                                        data-id="cee3015" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            30-Day Money Back <br>Guarantee
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-54e17ee e-con-full e-flex e-con e-child"
                     data-id="54e17ee" data-element_type="container">
                    <div class="elementor-element elementor-element-09abd54 e-flex e-con-boxed e-con e-child"
                         data-id="09abd54" data-element_type="container"
                         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div
                                class="elementor-element elementor-element-8d7eebf elementor-widget elementor-widget-heading"
                                data-id="8d7eebf" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Maximize Profits,
                                        Minimize Effort</h2></div>
                            </div>
                            <div
                                class="elementor-element elementor-element-20e2849 elementor-widget elementor-widget-heading"
                                data-id="20e2849" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Once you start trading
                                        with our algorithms, you’ll never go back</h2></div>
                            </div>
                            <div class="elementor-element elementor-element-26f3394 e-grid e-con-boxed e-con e-child"
                                 data-id="26f3394" data-element_type="container">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-527335a e-flex e-con-boxed e-con e-child"
                                        data-id="527335a" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-ef9b896 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="ef9b896" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="54" height="55" viewBox="0 0 54 55" fill="none"><path
                        d="M23.8126 11.5955C23.8126 9.97809 23.8 8.36065 23.8219 6.74405C23.8278 6.34244 23.6987 6.1585 23.3199 6.01676C22.072 5.54933 21.4063 4.43138 21.4983 3.05356C21.5708 1.96346 22.482 0.873351 23.5629 0.583107C25.101 0.170521 26.602 0.914694 27.0897 2.39292C27.5757 3.86608 26.9834 5.39745 25.4343 6.03194C25.0343 6.19563 24.9213 6.40403 24.923 6.81155C24.9356 9.9899 24.9263 13.1682 24.9263 16.3466C24.9263 17.0368 24.9297 17.0385 25.5996 17.0393C26.6965 17.0393 27.7934 17.0275 28.8902 17.0435C29.296 17.0494 29.4378 16.8891 29.4294 16.4934C29.4091 15.5375 29.4091 14.5807 29.4175 13.6247C29.4201 13.3328 29.3374 13.1826 29.0345 13.0797C27.8263 12.6688 27.0526 11.4926 27.1251 10.2456C27.2044 8.88883 28.0372 7.86622 29.3239 7.54476C30.7422 7.19123 32.3428 8.09318 32.7351 9.46763C33.1738 11.0058 32.3715 12.624 30.9253 13.0805C30.6705 13.1607 30.5583 13.2644 30.5625 13.5446C30.576 14.5714 30.5743 15.5982 30.5591 16.6242C30.5541 16.9321 30.6511 17.0444 30.9666 17.0418C32.1757 17.03 33.3856 17.0317 34.5947 17.0477C34.9398 17.0528 35.0208 16.906 35.0199 16.5921C35.0115 14.3697 35.014 12.1482 35.0191 9.92578C35.0208 9.27526 35.2047 8.68042 35.6097 8.16068C36.1531 7.46292 36.8745 7.09589 37.7486 7.06636C38.5771 7.03852 39.4082 7.04695 40.2376 7.06299C40.5506 7.06889 40.7033 6.97608 40.8122 6.66052C41.1817 5.58729 42.2609 4.80431 43.2615 4.74272C44.8739 4.644 45.8079 5.57379 46.1884 6.45128C46.8322 7.93794 46.1547 9.68194 44.6714 10.2844C43.4117 10.7957 41.5184 10.3881 40.8906 8.71502C40.7312 8.29062 40.5194 8.1649 40.0916 8.186C39.404 8.2189 38.7138 8.18768 38.0245 8.19443C36.8551 8.20624 36.1598 8.89979 36.1581 10.0608C36.1548 12.2545 36.1607 14.4482 36.1539 16.6427C36.1531 16.9077 36.2104 17.052 36.5049 17.0975C38.1839 17.3557 39.328 18.9056 39.28 20.561C39.2605 21.2411 39.2833 21.2453 39.9743 21.2462C42.5342 21.247 45.0933 21.2386 47.6532 21.2546C48.0143 21.2571 48.1611 21.1323 48.2742 20.7998C48.7315 19.4541 50.1886 18.6382 51.5267 18.9478C53.0708 19.3047 54.0225 20.6041 53.8588 22.1321C53.7103 23.52 52.4557 24.6363 51.0298 24.6506C49.787 24.6624 48.7407 23.9739 48.2843 22.7927C48.1518 22.4485 47.9814 22.3228 47.6118 22.3261C45.0106 22.3447 42.4085 22.3489 39.8073 22.3405C39.4057 22.3388 39.2631 22.4654 39.2707 22.8746C39.2935 24.0693 39.2934 25.2657 39.2766 26.4604C39.2715 26.8291 39.4006 26.9726 39.7634 26.954C40.1279 26.9355 40.4949 26.9405 40.8603 26.9456C41.0923 26.949 41.2003 26.8486 41.2771 26.6241C41.6812 25.4395 42.7055 24.6607 43.8749 24.6236C45.1557 24.5831 46.2087 25.2252 46.6947 26.4368C47.1301 27.5202 46.936 28.5571 46.164 29.4245C45.3903 30.2944 44.393 30.5838 43.2565 30.2809C42.2718 30.0185 41.6247 29.373 41.299 28.4204C41.2037 28.142 41.0552 28.0374 40.781 28.0441C40.4156 28.0534 40.0494 28.0627 39.6841 28.0551C39.3905 28.0492 39.2884 28.1918 39.2892 28.4677C39.2892 29.7476 39.2875 31.0267 39.2757 32.3067C39.2732 32.6121 39.447 32.6425 39.6841 32.6416C40.7531 32.6357 41.8221 32.6357 42.8903 32.6357C44.4369 32.6349 45.9843 32.6222 47.5308 32.6442C47.9375 32.6501 48.1493 32.5438 48.3088 32.1396C48.7897 30.9204 49.9962 30.2032 51.25 30.3239C52.4895 30.4429 53.5635 31.4148 53.8234 32.6501C54.1314 34.1156 53.1872 35.5652 51.6314 36.0157C50.3472 36.3878 48.7433 35.5517 48.2936 34.2338C48.1653 33.8583 47.9949 33.7435 47.6068 33.7461C45.1034 33.763 42.6 33.752 40.0967 33.7554C39.1897 33.7562 39.2757 33.6499 39.2783 34.5594C39.2816 35.8976 38.6598 36.8704 37.5225 37.5167C37.2111 37.6931 36.8424 37.7774 36.4923 37.8728C36.2518 37.9386 36.1421 38.0483 36.1438 38.3098C36.1531 40.5879 36.1438 42.866 36.1598 45.1449C36.1666 46.0342 36.9091 46.7784 37.8026 46.8045C38.6598 46.8299 39.5187 46.7995 40.376 46.8172C40.6763 46.8231 40.7413 46.6451 40.8274 46.4223C41.5648 44.5079 43.6108 43.9915 45.1228 44.9365C46.1674 45.5887 46.6525 46.91 46.3412 48.1047C46.029 49.3028 44.9827 50.1736 43.7669 50.2478C42.4777 50.3263 41.3201 49.6277 40.8687 48.4287C40.7185 48.0296 40.5337 47.8913 40.1127 47.9124C39.3829 47.9487 38.6505 47.925 37.919 47.92C36.2054 47.9082 35.0182 46.7008 35.0199 44.9846C35.0216 42.8044 35.0098 40.625 35.0267 38.4448C35.0301 38.0517 34.9043 37.931 34.523 37.9361C33.3561 37.9512 32.1884 37.947 31.0215 37.931C30.6823 37.9259 30.5507 38.023 30.5583 38.3841C30.5802 39.3966 30.5726 40.409 30.56 41.4215C30.5566 41.6881 30.6477 41.7987 30.9059 41.8982C31.9783 42.3125 32.6912 43.0668 32.833 44.2396C32.984 45.4875 32.5157 46.4957 31.4374 47.1395C30.4359 47.7377 29.377 47.7023 28.4059 47.0585C27.4837 46.4476 27.0298 45.5423 27.1319 44.4252C27.2424 43.2145 27.8634 42.3463 29.0269 41.9278C29.2977 41.8299 29.4091 41.7118 29.4066 41.4232C29.3964 40.4107 29.3981 39.3983 29.4125 38.3858C29.4167 38.0635 29.3036 37.9318 28.9729 37.9344C27.7917 37.9453 26.6104 37.9437 25.4292 37.9335C25.0698 37.9302 24.9306 38.0753 24.9306 38.4372C24.9356 41.7565 24.9339 45.0749 24.923 48.3941C24.9221 48.6819 25.02 48.8363 25.2934 48.9114C26.5252 49.2531 27.2939 50.4714 27.255 51.694C27.212 53.0372 26.375 54.1113 25.1086 54.4412C23.6439 54.8234 22.0534 53.9324 21.5961 52.4728C21.1498 51.0494 21.9319 49.4598 23.3637 48.9594C23.7198 48.8354 23.8244 48.6768 23.8227 48.3064C23.8076 45.0293 23.8076 41.7531 23.8253 38.4761C23.8278 38.0542 23.719 37.9108 23.2853 37.9209C22.1606 37.9479 21.035 37.9285 19.9103 37.9302C19.3526 37.9302 19.3383 37.947 19.3383 38.4938C19.3383 40.5609 19.3425 42.6281 19.34 44.6961C19.3391 45.3753 19.2834 46.0393 18.8759 46.6307C18.3081 47.4551 17.5394 47.9006 16.5388 47.9183C15.7372 47.9326 14.9348 47.9402 14.1341 47.9166C13.7958 47.9065 13.6439 48.0263 13.5191 48.3359C13.0322 49.5458 12.1421 50.2225 10.814 50.2554C9.70706 50.2824 8.89202 49.7365 8.34275 48.8354C7.75298 47.8685 7.78673 46.84 8.37059 45.8731C9.01605 44.8024 10.0133 44.3392 11.2376 44.5121C12.3733 44.6724 13.1495 45.3516 13.525 46.4434C13.6195 46.7176 13.7578 46.8181 14.0422 46.813C14.8716 46.7978 15.7018 46.8138 16.5312 46.802C17.4711 46.7885 18.2203 46.0469 18.2246 45.1078C18.2338 42.8576 18.2229 40.6073 18.233 38.3571C18.2338 38.066 18.1461 37.9099 17.8508 37.8686C16.2266 37.6399 14.9281 36.0275 15.1002 34.3207C15.1407 33.914 14.988 33.7503 14.5526 33.7528C11.9227 33.7689 9.29279 33.7655 6.66287 33.7528C6.35069 33.7511 6.21485 33.8709 6.11698 34.1469C5.58542 35.6386 4.0203 36.4081 2.50664 35.9347C1.01154 35.4673 0.185524 33.903 0.62511 32.3699C0.922104 31.3338 2.01221 30.4344 3.05422 30.3661C4.48098 30.2724 5.58036 30.9128 6.11023 32.2029C6.24607 32.5345 6.40638 32.6442 6.75315 32.6425C9.34089 32.6298 11.9286 32.6366 14.5163 32.634C15.0698 32.634 15.085 32.618 15.0867 32.0662C15.0901 30.8993 15.0791 29.7316 15.0926 28.5647C15.0968 28.2078 14.9745 28.034 14.6041 28.0703C14.5071 28.0796 14.4067 28.0796 14.3088 28.0686C13.6313 27.9935 13.1892 28.1277 12.8668 28.8828C12.2813 30.253 10.3939 30.7939 9.06414 30.1172C7.64751 29.3958 7.06449 27.672 7.76226 26.2664C8.33684 25.1079 9.36873 24.4903 10.6866 24.6354C11.8805 24.7679 12.6914 25.4665 13.0955 26.598C13.1841 26.8477 13.3123 26.9338 13.5494 26.9338C13.9435 26.9338 14.3366 26.9312 14.7307 26.9414C15.0082 26.9481 15.0968 26.8106 15.096 26.5516C15.0918 25.286 15.0909 24.0204 15.1002 22.7548C15.1027 22.4434 14.9703 22.3388 14.6682 22.3388C11.9961 22.3447 9.32401 22.3455 6.6519 22.3337C6.33382 22.332 6.21738 22.4831 6.11698 22.7497C5.68245 23.9081 4.64382 24.6337 3.43728 24.6456C2.21302 24.6574 1.16679 23.963 0.699358 22.8282C0.137431 21.463 0.80145 19.8042 2.21302 19.1495C3.42378 18.5884 5.05893 18.9099 5.87145 20.3113C5.92798 20.4083 6.0056 20.5045 6.02417 20.61C6.1271 21.1964 6.50172 21.2656 7.02821 21.2597C9.54507 21.2327 12.0628 21.2386 14.5805 21.2546C14.9872 21.2571 15.1297 21.1441 15.0968 20.7298C14.9931 19.4321 15.4858 18.3791 16.543 17.6392C16.9201 17.3751 17.4019 17.2426 17.8525 17.1085C18.1115 17.0317 18.2305 16.9431 18.2296 16.6621C18.2229 14.3976 18.2364 12.1338 18.2229 9.86925C18.2178 8.96645 17.4939 8.2324 16.5869 8.20456C15.7161 8.1784 14.8429 8.21131 13.9713 8.19528C13.6406 8.18937 13.5925 8.40705 13.5089 8.63571C12.8888 10.3291 10.739 11.0344 9.24048 10.0388C8.03225 9.23644 7.6146 7.77678 8.19847 6.39644C8.71315 5.18061 10.1264 4.49803 11.4916 4.80515C12.5167 5.03634 13.1605 5.69867 13.5148 6.65124C13.6296 6.96005 13.7907 7.05877 14.1029 7.05202C14.8058 7.03599 15.5103 7.07902 16.2123 7.04358C17.9664 6.9533 19.3391 8.20034 19.3315 10.0903C19.3239 12.1009 19.3358 14.1124 19.3391 16.123C19.3391 16.3196 19.345 16.517 19.3391 16.7136C19.3332 16.9431 19.4345 17.0427 19.6673 17.0418C20.9473 17.0359 22.2272 17.0309 23.5063 17.0376C23.832 17.0393 23.8168 16.8343 23.8168 16.6149C23.816 14.9409 23.8168 13.2678 23.8168 11.5938H23.8126V11.5955ZM25.9354 30.8706C25.8452 30.5804 25.7962 30.3754 25.7195 30.1805C25.0259 28.4339 24.329 26.6899 23.6304 24.9459C23.3486 24.2423 23.0634 23.5403 22.779 22.8383C22.6727 22.5759 22.5774 22.2958 22.223 22.2915C21.8822 22.2873 21.7893 22.5573 21.6889 22.8054C20.6722 25.329 19.6564 27.8526 18.6447 30.3787C18.5933 30.507 18.5384 30.6631 18.568 30.7854C18.6068 30.9432 18.6979 31.1482 18.8245 31.2073C18.9535 31.2672 19.2041 31.2309 19.3113 31.1356C19.4691 30.9947 19.5703 30.7744 19.6564 30.5711C19.9019 29.9889 20.1398 29.4034 20.3541 28.8102C20.4562 28.5267 20.614 28.4196 20.9127 28.4238C21.7834 28.4356 22.6542 28.4348 23.5249 28.4145C23.8455 28.4069 23.9991 28.5284 24.1062 28.8271C24.3585 29.5257 24.6496 30.2117 24.9238 30.9027C25.0335 31.1794 25.2596 31.3136 25.5237 31.2343C25.6891 31.1845 25.8114 30.9888 25.9363 30.8732L25.9354 30.8706ZM30.5608 26.7718C30.5608 26.7718 30.565 26.7718 30.5667 26.7718C30.5667 27.7269 30.565 28.6828 30.5667 29.6379C30.5684 30.3205 30.5701 30.3214 29.874 30.3222C29.4943 30.3222 29.1155 30.3171 28.7358 30.3239C28.5544 30.3273 28.3722 30.3509 28.1916 30.372C27.9216 30.4032 27.7495 30.5846 27.8144 30.8259C27.8625 31.0039 28.0583 31.1575 28.2186 31.2832C28.2903 31.3397 28.4363 31.3052 28.5485 31.3052C30.2486 31.3077 31.9487 31.3068 33.648 31.3111C33.9948 31.3119 34.2715 31.2115 34.3205 30.8284C34.3559 30.55 34.0741 30.3526 33.6573 30.3441C33.0954 30.3323 32.5335 30.3222 31.9715 30.3273C31.6813 30.3298 31.5421 30.2471 31.5438 29.9197C31.5556 27.8264 31.5556 25.7331 31.5463 23.6398C31.5446 23.299 31.6998 23.1969 32.0044 23.1986C32.5664 23.2028 33.1283 23.1901 33.6902 23.1969C34.0252 23.2011 34.3129 23.1057 34.3154 22.7353C34.3179 22.3759 34.0437 22.2451 33.7054 22.2451C31.9352 22.246 30.1651 22.2477 28.3949 22.2451C28.0473 22.2451 27.8001 22.3768 27.8069 22.7446C27.8136 23.0956 28.0659 23.2062 28.3907 23.2019C28.9383 23.1943 29.4867 23.2129 30.0343 23.191C30.4393 23.1749 30.576 23.3386 30.5684 23.7369C30.549 24.7477 30.5616 25.7601 30.5616 26.7718H30.5608Z"
                        fill="#0044FF"></path><path
                        d="M22.2475 24.3105C22.3926 24.6194 22.5378 24.9003 22.6584 25.1914C22.9099 25.8014 23.1436 26.4182 23.3933 27.0291C23.5055 27.3033 23.433 27.4239 23.1318 27.4189C22.5268 27.4096 21.9227 27.4071 21.3177 27.4079C21.0908 27.4079 20.9372 27.3235 21.0309 27.0839C21.3776 26.1954 21.743 25.3146 22.1049 24.432C22.1176 24.4 22.1631 24.3814 22.2484 24.3105H22.2475Z"
                        fill="#0044FF"></path></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							AI-Driven Insights						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-640e0ce elementor-widget elementor-widget-text-editor"
                                                data-id="640e0ce" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Leverage the power of AI to uncover hidden market opportunities
                                                        and make data-backed decisions with confidence.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-960ee16 e-flex e-con-boxed e-con e-child"
                                        data-id="960ee16" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-781e66a elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="781e66a" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="53" height="57" viewBox="0 0 53 57" fill="none"><path
                        d="M1.00191 33.9137C1.70727 33.8242 2.41179 33.7264 3.118 33.647C5.36233 33.3931 7.61088 33.1712 9.85184 32.8877C11.9114 32.627 13.9777 32.3789 16.0136 31.984C17.8015 31.6381 19.5691 31.1572 21.314 30.6299C25.8077 29.2714 30.0981 27.4296 34.0881 24.9389C35.8355 23.8471 37.5702 22.7232 39.2256 21.499C40.7578 20.365 42.182 19.0842 43.6425 17.8549C44.1243 17.4499 44.115 17.4237 43.6746 16.9884C43.1954 16.5142 42.7009 16.0552 42.2158 15.5869C42.1171 15.4916 42.0285 15.3853 41.8446 15.1853C45.5359 14.1222 49.142 13.0836 52.749 12.0449C52.7861 12.0837 52.8224 12.1225 52.8595 12.1614C51.9542 15.7877 51.0488 19.4141 50.1216 23.1282C49.9393 22.9907 49.8263 22.9215 49.7326 22.8321C49.1631 22.2895 48.5944 21.7462 48.0333 21.1944C47.8342 20.9986 47.6697 21.0071 47.4478 21.1716C45.9847 22.2609 44.5344 23.3695 43.0368 24.4098C41.9542 25.1616 40.8118 25.8307 39.6804 26.5099C39.3682 26.6972 39.2298 26.893 39.2323 27.2718C39.2501 30.1118 39.2433 32.9518 39.2433 35.7927C39.2433 36.3251 39.2248 36.3445 38.7059 36.3453C38.4249 36.3453 38.1431 36.3495 37.8621 36.336C37.5736 36.3225 37.463 36.4407 37.4681 36.7326C37.4799 37.5198 37.4698 38.307 37.4698 39.095C37.4706 41.8794 37.4656 44.6628 37.4808 47.4472C37.4824 47.8243 37.3761 47.9728 36.9889 47.9762C36.6328 47.9796 36.5375 47.8547 36.5383 47.5079C36.5493 44.0351 36.5451 40.5623 36.5442 37.0895C36.5442 36.6007 36.2942 36.3532 35.7941 36.347C35.6532 36.3453 35.5132 36.3445 35.3723 36.3428C34.7876 36.336 34.7622 36.3217 34.7606 35.7201C34.7546 33.6951 34.7572 31.671 34.7572 29.6461C34.7572 29.5085 34.7572 29.3718 34.7572 29.1685C34.5825 29.2174 34.4636 29.2369 34.3547 29.2824C33.1372 29.7929 31.9265 30.3202 30.7022 30.8138C30.3757 30.9454 30.3588 31.1648 30.3588 31.4457C30.3605 35.8045 30.3571 40.1632 30.3563 44.5219C30.3563 45.2183 30.0061 45.5704 29.3058 45.5783C28.5996 45.5859 28.5945 45.5859 28.5929 46.2761C28.587 49.3835 28.5827 52.491 28.581 55.5976C28.581 56.4346 28.5313 56.4768 27.6597 56.2887C27.6513 56.103 27.6352 55.909 27.6352 55.7149C27.6352 52.5518 27.6369 49.3878 27.6369 46.2246C27.6369 45.6028 27.6082 45.5749 27.0016 45.5741C25.8828 45.5732 25.8794 45.5732 25.8794 44.4384C25.8777 40.6559 25.8794 36.8743 25.8786 33.0919C25.8786 32.4768 25.8609 32.4717 25.2551 32.6304C24.1953 32.9071 23.1364 33.1897 22.07 33.4378C21.7097 33.5213 21.5865 33.6884 21.5949 34.0444C21.6127 34.7751 21.5797 35.5075 21.6051 36.2373C21.6202 36.6524 21.4616 36.7925 21.0642 36.7604C20.7706 36.7368 20.4736 36.7748 20.1791 36.7587C19.8054 36.7385 19.6619 36.8735 19.6636 37.2692C19.6771 40.067 19.6695 42.8648 19.6678 45.6627C19.6678 46.1968 19.6527 46.7317 19.6695 47.2658C19.6805 47.6049 19.5025 47.6606 19.2224 47.6564C18.9481 47.6513 18.7203 47.6488 18.722 47.27C18.7296 45.8643 18.722 44.4578 18.7203 43.0522C18.7178 41.1116 18.7085 39.1718 18.722 37.2312C18.7245 36.865 18.614 36.7402 18.2419 36.7419C17.1189 36.7452 17.1189 36.7317 17.1198 35.591C17.1198 35.31 17.113 35.0282 17.1231 34.7473C17.1341 34.4469 17.0016 34.3524 16.7106 34.3862C15.736 34.4984 14.7598 34.5996 13.7836 34.6967C13.42 34.7329 13.0547 34.7616 12.6902 34.7633C12.2953 34.765 12.1308 34.8907 12.1367 35.3303C12.1611 37.2144 12.146 39.0984 12.1451 40.9825C12.1451 41.633 12.1375 41.6406 11.4921 41.6389C11.2955 41.6389 11.098 41.6372 10.9014 41.6389C10.3606 41.6431 10.3471 41.6583 10.3454 42.2185C10.3412 43.9617 10.3395 45.7057 10.3311 47.4489C10.3285 47.9686 10.2383 48.0192 9.72443 47.9644C9.40381 47.9298 9.38863 47.7408 9.38863 47.4978C9.38947 45.7681 9.38525 44.0393 9.38525 42.3097C9.38525 41.6456 9.38778 41.6473 8.7111 41.6423C7.4995 41.6322 7.67332 41.7579 7.66488 40.5724C7.65307 38.8428 7.65223 37.114 7.66488 35.3843C7.66741 35.0071 7.56363 34.835 7.15864 34.7937C5.27374 34.5996 3.39136 34.376 1.50815 34.1592C1.33349 34.1389 1.16222 34.0917 0.989258 34.0563C0.993476 34.0099 0.997687 33.9643 1.00191 33.9179V33.9137Z"
                        fill="#0044FF"></path><path
                        d="M9.39776 0.688158C10.3419 0.548942 10.3461 0.548942 10.3453 1.38424C10.3427 6.89467 10.3377 12.4042 10.3335 17.9147C10.3335 17.9712 10.3326 18.0269 10.3326 18.0834C10.3326 18.8301 10.3394 18.8369 11.0768 18.8436C11.7883 18.8504 12.1441 19.2064 12.1441 19.9118C12.1441 23.5382 12.1357 27.1654 12.1559 30.7917C12.1585 31.2474 12.0032 31.4085 11.5797 31.4507C10.4086 31.568 9.2383 31.7047 8.06888 31.8422C7.69933 31.8861 7.65461 31.6827 7.65629 31.3866C7.66389 29.6434 7.66136 27.9003 7.66136 26.158C7.66136 23.9229 7.66136 21.6879 7.6639 19.4528C7.6639 18.8757 7.69342 18.8495 8.2486 18.8419C9.58507 18.8242 9.38005 18.971 9.38258 17.6869C9.39439 12.2608 9.3927 6.83476 9.39607 1.40955C9.39607 1.17246 9.39607 0.936215 9.39607 0.687313L9.39776 0.688158Z"
                        fill="#0044FF"></path><path
                        d="M25.9062 27.3612C25.8919 27.1789 25.8725 27.0431 25.8725 26.9081C25.8725 23.6049 25.8801 20.3025 25.8657 16.9993C25.8641 16.569 25.9915 16.4626 26.4167 16.4635C27.835 16.4685 27.6232 16.6651 27.6258 15.2823C27.6317 11.9934 27.6283 8.70451 27.6291 5.41563C27.6291 5.11442 27.5996 4.8267 28.0679 4.83514C28.4594 4.84189 28.5935 4.93555 28.5918 5.35994C28.5775 8.8876 28.5961 12.4153 28.5885 15.9429C28.5876 16.3479 28.7201 16.504 29.1226 16.4745C29.4297 16.4517 29.7402 16.4787 30.0498 16.4787C30.2844 16.4787 30.3628 16.5926 30.3628 16.8204C30.3552 19.5187 30.3603 22.2169 30.3392 24.9152C30.3375 25.1008 30.2051 25.3809 30.0532 25.456C28.7589 26.0989 27.4469 26.7056 26.1391 27.3207C26.0919 27.3426 26.0328 27.3401 25.9071 27.3612H25.9062Z"
                        fill="#0044FF"></path><path
                        d="M18.7255 15.2107C18.7255 13.5797 18.7339 11.9479 18.7187 10.317C18.7154 9.96263 18.804 9.81244 19.1879 9.81497C19.5557 9.8175 19.6772 9.93985 19.6755 10.306C19.6654 13.5122 19.6696 16.7184 19.6696 19.9238C19.6696 20.5338 19.6781 20.5414 20.2729 20.5447C20.5682 20.5464 20.8644 20.5608 21.1588 20.5431C21.4904 20.5228 21.6009 20.6603 21.5992 20.986C21.5883 22.687 21.5942 24.3888 21.5933 26.0906C21.5933 26.9487 21.5841 27.8059 21.5967 28.664C21.6009 28.9576 21.5191 29.1264 21.2111 29.209C20.0181 29.5305 18.8335 29.8798 17.6421 30.2089C17.1772 30.3371 17.1182 30.2907 17.1182 29.8165C17.1148 26.8922 17.119 23.9669 17.1089 21.0425C17.108 20.6823 17.2262 20.5101 17.5957 20.5506C17.6371 20.5549 17.6801 20.5506 17.7223 20.5506C18.3917 20.5445 18.7263 20.2132 18.7263 19.5567C18.7263 18.108 18.7263 16.6602 18.7263 15.2115L18.7255 15.2107Z"
                        fill="#0044FF"></path><path
                        d="M38.2418 20.3463C37.1339 21.1158 36.0261 21.8853 34.8035 22.735C34.7858 22.3637 34.7681 22.1216 34.7647 21.8803C34.7605 21.444 34.7706 21.0087 34.7639 20.5725C34.7588 20.2696 34.898 20.1371 35.1967 20.143C35.5055 20.1498 35.816 20.132 36.1248 20.1472C36.4379 20.1624 36.5459 20.0224 36.5425 19.7211C36.5324 18.8774 36.5408 18.0337 36.5408 17.1908C36.5408 13.8724 36.5408 10.554 36.5408 7.23641C36.5408 6.46355 36.6041 6.41714 37.4655 6.59854C37.4655 6.80695 37.4655 7.02801 37.4655 7.24907C37.4655 11.2703 37.4655 15.2915 37.4664 19.3128C37.4664 19.8072 37.6981 20.1079 38.1616 20.2147C38.1886 20.2594 38.2148 20.3033 38.2418 20.348V20.3463Z"
                        fill="#0044FF"></path></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							Customizable Trading Strategies						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-5e62c36 elementor-widget elementor-widget-text-editor"
                                                data-id="5e62c36" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Adjust parameters and algorithms to create personalized trading
                                                        strategies that fit your unique style and objectives.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-721ade5 e-flex e-con-boxed e-con e-child"
                                        data-id="721ade5" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-b531e09 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="b531e09" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="47" height="45" viewBox="0 0 47 45" fill="none"><g
                        clip-path="url(#clip0_193_5796)"><path
                            d="M31.7725 0.5C32.394 0.771002 32.6689 1.26563 32.7299 1.90523C32.7473 2.09285 32.7967 2.27668 32.8277 2.46335C32.9574 3.2394 33.1597 3.46113 33.9564 3.62032C34.088 3.64685 34.2661 3.57199 34.391 3.49524C34.7985 3.24224 35.1867 2.95892 35.5923 2.70213C36.1363 2.35722 36.6678 2.38659 37.1344 2.831C38.0249 3.67812 38.9029 4.53851 39.7664 5.41121C40.1962 5.84519 40.2272 6.37393 39.8961 6.88277C39.6541 7.25516 39.4082 7.62755 39.1314 7.97531C38.9174 8.24442 38.9349 8.47183 39.0326 8.794C39.2069 9.36917 39.5641 9.58711 40.1371 9.62217C40.4711 9.64302 40.8012 9.73493 41.1313 9.8041C41.7247 9.92823 42.0983 10.3328 42.1061 10.9336C42.1235 12.1493 42.1216 13.365 42.1041 14.5798C42.0954 15.1986 41.7092 15.6127 41.0955 15.7339C40.7809 15.7965 40.4614 15.9187 40.1507 15.9036C39.354 15.8628 39.1169 16.3906 38.9397 16.9752C38.899 17.1098 38.9716 17.3088 39.0539 17.4405C39.3076 17.8423 39.6009 18.2203 39.8632 18.6183C40.2339 19.1812 40.1875 19.6786 39.7044 20.16C38.8565 21.0033 37.9998 21.841 37.1353 22.6682C36.6581 23.1249 36.1673 23.1619 35.6039 22.8132C35.3184 22.636 35.0134 22.4739 34.7685 22.2513C34.3194 21.841 33.8751 21.7974 33.3456 22.0978C33.1123 22.2295 32.9235 22.3129 32.8916 22.6274C32.8451 23.0785 32.7183 23.5219 32.6263 23.9682C32.4927 24.6126 32.1559 24.9641 31.487 24.9831C30.2305 25.0172 28.9711 25.0191 27.7146 24.9783C27.0235 24.9556 26.6943 24.5936 26.5675 23.9133C26.5046 23.5731 26.4223 23.2358 26.3759 22.8937C26.3178 22.4588 26.1493 22.1878 25.677 22.0125C25.2384 21.8504 24.9393 21.8713 24.5908 22.1499C24.2675 22.4086 23.9113 22.6303 23.5541 22.8444C23.0333 23.1571 22.5387 23.1135 22.1001 22.6947C21.2115 21.8457 20.3326 20.9872 19.4633 20.1193C19.019 19.6758 18.9793 19.1859 19.3229 18.6572C19.5901 18.245 19.8844 17.8489 20.1612 17.4414C20.4342 17.0406 20.0576 16.1149 19.5794 16.0144C19.1245 15.9187 18.6666 15.8325 18.2097 15.7463C17.4779 15.6079 17.1207 15.2516 17.1052 14.5334C17.08 13.3499 17.08 12.1654 17.1023 10.9819C17.1158 10.2911 17.4701 9.93392 18.1748 9.79463C18.6318 9.70366 19.0887 9.61459 19.5456 9.52362C20.0209 9.42982 20.4245 8.50121 20.1564 8.10512C19.8805 7.69767 19.5843 7.30254 19.3161 6.8913C18.9609 6.34645 19.0064 5.85277 19.471 5.38847C20.3287 4.53187 21.1951 3.68286 22.0701 2.84237C22.5299 2.40081 23.0623 2.35532 23.6083 2.69645C24.0294 2.95892 24.4311 3.25077 24.8493 3.51893C25.2336 3.7653 26.1823 3.37964 26.2781 2.93997C26.3488 2.61685 26.4252 2.29279 26.463 1.96588C26.5375 1.31964 26.7853 0.793744 27.4174 0.501895H31.7735L31.7725 0.5ZM36.7288 12.7956C36.7288 8.93614 33.5682 5.79876 29.6748 5.79308C25.6886 5.78739 22.4699 8.89444 22.4651 12.752C22.4602 16.6199 25.6702 19.7582 29.6303 19.7573C33.5333 19.7563 36.7288 16.6218 36.7288 12.7956Z"
                            fill="#0044FF"></path><path
                            d="M8.88183 31.7049C10.7772 29.6297 13.0065 28.1951 15.7751 27.6237C17.3965 27.2883 18.9685 27.4295 20.5077 28.0302C20.7826 28.1373 21.103 28.1714 21.4021 28.1724C24.9024 28.1818 28.4028 28.1743 31.9031 28.1818C33.2032 28.1847 34.0231 28.848 34.2961 30.0779C34.571 31.3145 33.5342 32.6591 32.2274 32.6875C30.5828 32.7235 28.9371 32.7036 27.2915 32.7055C25.8395 32.7074 24.3884 32.7026 22.9364 32.7093C22.7128 32.7102 22.4834 32.7282 22.2685 32.7841C21.9084 32.8789 21.7012 33.1196 21.6673 33.4958C21.6325 33.8909 21.8 34.1837 22.1591 34.3343C22.3585 34.4177 22.5966 34.4443 22.8173 34.4443C25.8017 34.4509 28.7861 34.4547 31.7695 34.4471C33.9931 34.4414 35.5583 33.1812 36.0056 31.052C36.1527 30.3517 36.0394 29.6705 35.7674 29.0185C35.6648 28.7722 35.7084 28.6262 35.901 28.4472C38.687 25.8622 41.4623 23.2659 44.2492 20.6819C44.92 20.0593 45.8164 20.2612 46.1716 21.0979C46.7796 22.5306 46.4417 23.8183 45.4805 24.9781C44.2608 26.4487 43.0188 27.9014 41.7856 29.3606C39.9967 31.4765 38.2039 33.5886 36.4179 35.7064C35.4935 36.8027 34.328 37.3646 32.8634 37.4357C30.5179 37.5494 28.1763 37.7389 25.8317 37.8839C24.5307 37.9645 23.2288 38.0346 21.9268 38.0772C20.9743 38.1085 20.1253 38.353 19.4041 38.9888C18.7352 39.5781 18.0441 40.1438 17.3132 40.7617C14.504 37.7446 11.7171 34.7513 8.88086 31.7058L8.88183 31.7049Z"
                            fill="#0044FF"></path><path
                            d="M17.1922 43.2169C16.7247 43.6291 16.3007 44.0138 15.8612 44.3815C15.7751 44.4535 15.6289 44.4876 15.5108 44.4876C12.9465 44.4867 10.3813 44.4289 7.81896 44.499C6.96227 44.5227 6.45309 44.246 5.91488 43.6433C4.21698 41.7425 2.45229 39.8995 0.713743 38.0338C0.649854 37.9646 0.585965 37.8954 0.478516 37.7808C2.60524 35.8847 4.72035 33.9991 6.88483 32.0698C10.3135 35.7776 13.7267 39.4693 17.1932 43.2169H17.1922Z"
                            fill="#0044FF"></path><path
                            d="M35.0502 12.7587C35.0511 15.7075 32.6253 18.1001 29.6312 18.103C26.6062 18.1067 24.1455 15.7123 24.1436 12.7625C24.1416 9.81369 26.5955 7.42773 29.6283 7.42773C32.6359 7.42773 35.0492 9.80043 35.0502 12.7587ZM30.4356 11.777H30.4327C30.4327 11.0048 30.4376 10.2316 30.4308 9.45931C30.426 8.92583 30.0697 8.54491 29.5983 8.54775C29.1317 8.55059 28.7658 8.93436 28.7629 9.46499C28.7532 10.9944 28.7513 12.5237 28.76 14.0531C28.7629 14.6065 29.1037 14.9457 29.6051 14.9447C30.1085 14.9438 30.4289 14.6046 30.4337 14.0474C30.4405 13.2903 30.4356 12.5341 30.4356 11.777ZM29.6061 15.3569C29.094 15.355 28.7474 15.6867 28.7503 16.1718C28.7532 16.6323 29.1511 17.0085 29.6225 16.9962C30.0852 16.9839 30.4473 16.6295 30.454 16.1804C30.4618 15.6905 30.1201 15.3579 29.6061 15.3569Z"
                            fill="#0044FF"></path></g><defs><clipPath id="clip0_193_5796"><rect width="46" height="44"
                                                                                                fill="white"
                                                                                                transform="translate(0.478516 0.5)"></rect></clipPath></defs></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							Automated Risk Management						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-5847473 elementor-widget elementor-widget-text-editor"
                                                data-id="5847473" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our automated risk management continuously monitors trades and
                                                        implements controls to minimize potential losses.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-d0be32f e-flex e-con-boxed e-con e-child"
                                        data-id="d0be32f" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-4d4edca elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="4d4edca" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none"><path
                        d="M12.9178 0.59668C17.0082 1.33579 21.0987 2.07406 25.1899 2.81317C25.2102 2.86717 25.2304 2.92117 25.2507 2.97517C21.8066 5.30894 18.3616 7.64355 14.9175 9.97732C14.8711 9.94526 14.8255 9.9132 14.7791 9.88113C15.028 9.08212 15.2777 8.28225 15.5562 7.38874C15.3478 7.4748 15.2204 7.51108 15.1082 7.57605C12.4268 9.11333 10.158 11.102 8.35829 13.6324C6.70541 15.956 5.58156 18.5033 4.98251 21.2825C4.47205 23.6534 4.41552 26.0445 4.72854 28.4492C5.19934 32.0697 6.54763 35.3332 8.75484 38.2281C10.6718 40.7424 13.0284 42.7471 15.8574 44.1958C18.2663 45.4294 20.8076 46.1398 23.5016 46.3811C26.5475 46.6536 29.4989 46.2824 32.371 45.2513C35.049 44.2895 37.4275 42.8298 39.4988 40.8867C41.2108 39.2802 42.6468 37.4527 43.7251 35.356C44.6878 33.4846 45.3822 31.5288 45.7661 29.4507C46.0336 28.0029 46.123 26.555 46.0994 25.092C46.0901 24.4811 46.0994 24.4676 46.6866 24.428C47.6822 24.3605 48.6795 24.3174 49.6743 24.2457C50.0286 24.2204 50.1324 24.3588 50.1425 24.698C50.2438 28.0822 49.7418 31.3685 48.5293 34.5317C47.5 37.2164 46.0563 39.6692 44.174 41.8426C41.3432 45.1121 37.9 47.5235 33.8281 49.0093C30.2329 50.3213 26.5315 50.7727 22.7203 50.3711C19.9132 50.0749 17.2251 49.3476 14.6897 48.1225C11.146 46.4106 8.12541 44.0363 5.71571 40.8943C3.43087 37.915 1.85563 34.616 1.06842 30.945C0.260124 27.1743 0.308218 23.4155 1.24898 19.6727C2.34499 15.3114 4.47036 11.5289 7.60821 8.30503C9.62895 6.2286 11.9636 4.6002 14.5538 3.32785C14.9242 3.1456 14.8896 3.00892 14.6483 2.75158C14.1193 2.18881 13.6088 1.60832 13.0942 1.03205C13.0064 0.934176 12.9355 0.821116 12.8571 0.715649C12.8773 0.675994 12.8967 0.63718 12.917 0.597524L12.9178 0.59668Z"
                        fill="#0044FF"></path><path
                        d="M29.8989 23.9799C29.8989 25.189 29.9115 26.3989 29.8921 27.6071C29.8854 28.0003 30.0313 28.1353 30.4093 28.1167C30.8582 28.0948 31.3087 28.1134 31.7584 28.1041C32.0411 28.0982 32.1727 28.2188 32.1685 28.5057C32.1618 28.9832 32.1567 29.4616 32.1685 29.94C32.1753 30.1965 32.0706 30.2927 31.8217 30.2893C31.3298 30.2826 30.8371 30.302 30.3452 30.2893C30.017 30.2809 29.8972 30.4184 29.8997 30.7407C29.909 31.7667 29.8879 32.7935 29.9048 33.8195C29.9107 34.1646 29.8001 34.3055 29.4508 34.2962C28.9033 34.2819 28.354 34.2827 27.8064 34.303C27.4495 34.3156 27.3466 34.1638 27.3525 33.8254C27.3702 32.8273 27.3651 31.8292 27.3626 30.831C27.3609 30.3222 27.3238 30.2919 26.8024 30.2927C25.1014 30.2936 23.3996 30.2851 21.6986 30.3037C21.3012 30.3079 21.1746 30.1932 21.1628 29.7814C21.1434 29.1106 21.2877 28.558 21.707 27.9944C23.6291 25.4176 25.4988 22.802 27.3845 20.1974C27.5693 19.9418 27.7794 19.7916 28.122 19.8161C28.57 19.8481 29.0222 19.8448 29.4711 19.8237C29.8128 19.8068 29.9065 19.9528 29.9039 20.2692C29.893 21.5061 29.8997 22.7438 29.8997 23.9807H29.8972L29.8989 23.9799ZM24.0805 28.1235C24.99 28.1235 25.9147 28.1074 26.8386 28.1311C27.2343 28.1412 27.3778 28.0281 27.3744 27.6122C27.366 26.5305 27.4014 25.448 27.4276 24.3663C27.4326 24.1394 27.4706 23.9132 27.4942 23.6871C26.5594 25.3586 25.4009 26.8199 24.0813 28.1235H24.0805Z"
                        fill="#0044FF"></path><path
                        d="M15.4058 32.1059C15.637 32.1059 15.7551 32.1093 15.8732 32.1059C17.3304 32.0578 18.7875 32.0013 20.2455 31.9743C20.3602 31.9718 20.572 32.1675 20.5796 32.2823C20.6159 32.8417 20.6024 33.4053 20.599 33.9672C20.5973 34.2937 20.3611 34.2937 20.124 34.2937C18.2964 34.2937 16.4698 34.2954 14.6422 34.2954C13.8972 34.2954 13.1522 34.2802 12.4072 34.2988C12.0402 34.3081 11.9448 34.168 11.9178 33.8077C11.8672 33.1226 12.1304 32.6459 12.5903 32.1405C14.2406 30.324 15.8699 28.4796 16.9431 26.2344C17.3008 25.4851 17.5928 24.7182 17.5632 23.8559C17.5253 22.7287 16.8157 22.0326 15.6825 22.0461C14.9443 22.0545 14.2735 22.2646 13.6534 22.6561C13.488 22.7599 13.3218 22.862 13.0982 23.0012C12.7691 22.4249 12.4384 21.8748 12.149 21.3053C12.1051 21.2192 12.2156 20.9889 12.3186 20.9062C12.9969 20.3645 13.7571 19.9772 14.6161 19.8144C15.8488 19.5807 17.0798 19.5233 18.2585 20.0473C19.5393 20.6168 20.1493 21.6622 20.2691 23.0248C20.4016 24.5309 19.9417 25.9121 19.19 27.1608C18.3597 28.5386 17.3953 29.8371 16.4529 31.1441C16.2057 31.4866 15.8226 31.7305 15.405 32.1068L15.4058 32.1059Z"
                        fill="#0044FF"></path><path
                        d="M35.2051 21.933C35.7603 21.3956 36.4328 21.269 37.155 21.3129C37.8823 21.3576 38.3759 21.733 38.5497 22.4367C38.64 22.8012 38.6948 23.1826 38.7033 23.558C38.7277 24.6954 38.7142 25.8336 38.7311 26.9709C38.7362 27.3312 38.6425 27.4974 38.2308 27.4907C37.1111 27.4713 37.1094 27.4898 37.101 26.3525C37.0951 25.5239 37.1052 24.6954 37.0892 23.8669C37.074 23.0737 36.8006 22.7455 36.1965 22.7506C35.5924 22.7548 35.1106 23.2425 35.0997 23.8981C35.0836 24.8954 35.0955 25.8927 35.087 26.8899C35.082 27.4713 35.0642 27.4915 34.4989 27.4839C33.3202 27.4679 33.4662 27.667 33.4628 26.4706C33.4569 24.1951 33.4713 21.9195 33.4527 19.6448C33.4493 19.2238 33.5675 19.0787 33.9969 19.093C35.2119 19.1352 35.0777 18.8854 35.0921 20.1924C35.098 20.7484 35.0929 21.3044 35.0929 21.8596C35.1301 21.8841 35.1672 21.9085 35.2051 21.933Z"
                        fill="#0044FF"></path><path
                        d="M45.5265 11.3316C45.4666 11.4 45.4092 11.4962 45.3265 11.5552C44.4237 12.2007 43.5142 12.8368 42.6122 13.4823C42.4022 13.6325 42.2579 13.6342 42.0917 13.4072C41.7693 12.9651 41.4285 12.5348 41.0741 12.118C40.902 11.9155 40.8893 11.7687 41.091 11.589C41.9389 10.833 42.7785 10.0669 43.634 9.32016C43.6998 9.26279 43.9293 9.27544 43.9816 9.33872C44.4845 9.94115 44.9663 10.5613 45.4531 11.1781C45.4784 11.2101 45.4894 11.2523 45.5265 11.3325V11.3316Z"
                        fill="#0044FF"></path><path
                        d="M41.9193 7.18615C41.2545 7.93285 40.6613 8.60025 40.0665 9.26595C39.8522 9.50642 39.6328 9.74182 39.4202 9.98397C39.2675 10.1578 39.1274 10.1493 38.9545 10.0034C38.5048 9.62623 38.0508 9.25245 37.5851 8.89471C37.402 8.75381 37.4222 8.62978 37.5344 8.47115C38.1807 7.55739 38.8271 6.64363 39.4708 5.72818C39.5864 5.5645 39.7071 5.43287 39.9129 5.59571C40.5592 6.10533 41.203 6.61747 41.9193 7.1853V7.18615Z"
                        fill="#0044FF"></path><path
                        d="M46.9741 13.7083C47.0264 13.7513 47.1099 13.7892 47.142 13.8525C47.4744 14.5174 47.7959 15.1873 48.1249 15.8539C48.2447 16.0977 48.1739 16.2251 47.9208 16.3281C46.8931 16.744 45.8722 17.1743 44.8529 17.6088C44.6293 17.7042 44.5205 17.6223 44.426 17.4274C44.1695 16.8967 43.8919 16.3761 43.6506 15.8395C43.6084 15.745 43.6616 15.5181 43.7401 15.4733C44.7492 14.8937 45.7701 14.3351 46.7893 13.7724C46.8374 13.7454 46.8948 13.7353 46.9741 13.7083Z"
                        fill="#0044FF"></path><path
                        d="M28.8408 5.0271C29.0155 4.00112 29.1732 3.0747 29.3319 2.14912C29.3673 1.94156 29.3757 1.72134 29.4576 1.53319C29.5065 1.42013 29.6913 1.26911 29.785 1.28683C30.4996 1.42436 31.2083 1.59816 31.9179 1.76437C32.1491 1.81837 32.2461 1.94999 32.1744 2.19636C31.8665 3.24428 31.5635 4.29389 31.2623 5.34434C31.1906 5.59324 31.0472 5.67677 30.7907 5.61602C30.2321 5.48271 29.6685 5.37471 29.1117 5.23381C28.9952 5.20428 28.9033 5.07772 28.8408 5.0271Z"
                        fill="#0044FF"></path><path
                        d="M46.002 22.1912C45.9447 22.1169 45.813 22.019 45.781 21.8942C45.6384 21.3365 45.527 20.7712 45.3971 20.2101C45.3439 19.9806 45.3937 19.8414 45.6443 19.7705C46.6973 19.4718 47.7477 19.1647 48.7956 18.85C49.053 18.7724 49.2082 18.8424 49.2664 19.1006C49.4276 19.8127 49.582 20.5256 49.7406 21.2377C49.8073 21.5381 49.5736 21.5609 49.3896 21.5946C48.6159 21.7372 47.8405 21.8646 47.0651 21.9988C46.7471 22.0536 46.429 22.1135 46.0029 22.1903L46.002 22.1912Z"
                        fill="#0044FF"></path><path
                        d="M37.376 3.95391C36.8655 4.90058 36.4158 5.77215 35.9307 6.62348C35.4244 7.51025 35.4092 7.50012 34.5064 7.03944C34.2314 6.89938 33.9563 6.75426 33.6678 6.64626C33.3556 6.52899 33.3083 6.35433 33.4332 6.06324C33.85 5.08282 34.2449 4.09312 34.6735 3.11776C34.7258 2.99795 34.9764 2.84186 35.0599 2.87814C35.8168 3.20298 36.5575 3.56748 37.376 3.95475V3.95391Z"
                        fill="#0044FF"></path><path
                        d="M25.3175 0.886185C25.741 0.886185 26.0903 0.893776 26.4396 0.883652C26.697 0.876058 26.7898 0.991648 26.7763 1.24055C26.7155 2.36272 26.6691 3.48573 26.5898 4.60621C26.5822 4.71252 26.3958 4.8703 26.2726 4.89139C26.0422 4.93104 25.7925 4.91248 25.5613 4.86692C25.4668 4.84836 25.3284 4.69902 25.3276 4.6079C25.3116 3.38954 25.3175 2.17119 25.3175 0.886185Z"
                        fill="#0044FF"></path></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							24/7 Trading						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-3efb734 elementor-widget elementor-widget-text-editor"
                                                data-id="3efb734" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>With {{ env('APP_NAME') }} Ai’s 24/7 trading capabilities, our bots operate
                                                        continuously to capitalize on global market movements at any
                                                        time.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-dd1b2e7 e-flex e-con-boxed e-con e-child"
                                        data-id="dd1b2e7" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-a76e044 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="a76e044" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="48" height="47" viewBox="0 0 48 47" fill="none"><path
                        d="M47.0011 27.1674C46.5379 26.7843 46.1287 26.43 45.7009 26.0975C45.3018 25.7879 44.896 25.485 44.4707 25.2142C44.237 25.0657 44.1518 24.8994 44.1653 24.6295C44.2666 22.5944 44.0539 20.5896 43.5654 18.6128C43.0136 16.3777 42.0366 14.3376 40.7693 12.4231C39.4826 10.48 37.8896 8.8263 36.0191 7.4527C33.2989 5.45558 30.2673 4.19673 26.9084 3.73605C24.3274 3.38252 21.7802 3.52006 19.2616 4.16129C15.9998 4.99153 13.142 6.5651 10.6446 8.82546C8.41544 10.8428 6.75666 13.2534 5.6134 16.0132C4.41614 18.9039 3.99174 21.9253 4.2128 25.0488C4.39251 27.5918 5.05147 29.9998 6.15339 32.2863C6.94903 33.9367 7.94042 35.4672 9.19421 36.8147C9.28617 36.9134 9.38911 37.0003 9.51229 37.1167C13.558 31.0072 19.1975 28.3334 26.4865 29.0228C24.7771 31.8054 23.9916 34.7703 24.3662 37.9984C24.74 41.2173 26.1507 43.9315 28.5748 46.2771C26.4992 46.7901 24.5265 46.7665 22.5666 46.6518C16.9836 46.3252 12.154 44.1484 8.15219 40.2993C-0.426051 32.0492 -1.12635 19.2962 5.12403 10.3813C12.1642 0.339176 24.7839 -2.01232 34.3814 2.78262C45.171 8.17324 48.481 19.3342 47.0019 27.1657L47.0011 27.1674Z"
                        fill="#0044FF"></path><path
                        d="M37.5486 46.6914C32.0179 46.8737 27.1614 42.0922 27.3023 36.1996C27.4289 30.9052 31.8897 26.1448 37.8144 26.2891C43.2793 26.4224 47.8953 30.9068 47.7595 36.8535C47.638 42.158 43.0666 46.8492 37.5495 46.6914H37.5486ZM36.8019 39.9382C37.3191 39.8673 37.6878 39.658 38.0076 39.3374C39.177 38.1638 40.3498 36.9935 41.5116 35.8123C41.6753 35.6461 41.8314 35.4478 41.9175 35.2344C42.1892 34.556 41.9478 33.7958 41.3716 33.4035C40.8172 33.0263 40.041 33.0778 39.5086 33.5823C38.7045 34.3442 37.9249 35.1323 37.1445 35.9186C36.9504 36.1135 36.8002 36.1684 36.5868 35.9456C36.267 35.6115 35.932 35.29 35.5886 34.9804C35.1533 34.5872 34.6403 34.4109 34.0758 34.6378C32.9393 35.0934 32.6727 36.2544 33.5173 37.1631C34.253 37.9545 35.0267 38.7131 35.824 39.4412C36.0839 39.6791 36.472 39.777 36.8019 39.939V39.9382Z"
                        fill="#0044FF"></path><path
                        d="M33.5981 16.8064C33.6672 21.7634 29.4384 26.0453 24.484 26.1677C19.0166 26.3027 14.8191 21.9076 14.706 16.8967C14.5887 11.6942 18.8082 7.36589 23.9668 7.23933C29.1102 7.11277 33.7035 11.3567 33.5981 16.8064Z"
                        fill="#0044FF"></path></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							User-Friendly Interface						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-eef31d2 elementor-widget elementor-widget-text-editor"
                                                data-id="eef31d2" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our intuitive platform offers easy access to powerful tools and
                                                        real-time data, simplifying your trading experience.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-d2edebd e-flex e-con-boxed e-con e-child"
                                        data-id="d2edebd" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-1c70138 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="1c70138" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">

                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="47" height="51" viewBox="0 0 47 51" fill="none"><path
                        d="M31.2856 26.2834C29.5714 26.1859 28.1442 26.4264 26.9807 27.5189C26.4832 27.9865 25.9879 28.4564 25.497 28.9306C23.9845 30.3888 22.9341 30.38 21.4016 28.9206C20.7356 28.2857 20.0641 27.6497 19.3439 27.079C18.6469 26.5272 17.8003 26.3056 16.9128 26.2734C16.0828 26.2435 15.2507 26.248 14.4229 26.1926C12.9547 26.0962 12.4073 25.4923 12.3674 23.9997C12.3486 23.2617 12.3054 22.5248 12.3021 21.7869C12.2954 20.3054 11.6261 19.1452 10.6056 18.1313C10.0704 17.5994 9.5474 17.0487 9.07314 16.4614C8.37948 15.6038 8.3529 14.7472 9.03658 13.8852C9.66486 13.0929 10.3785 12.3671 11.0577 11.6147C11.8134 10.777 12.2622 9.81187 12.2976 8.67166C12.3209 7.91595 12.3519 7.15914 12.3708 6.40343C12.4107 4.73356 12.9558 4.14407 14.6235 4.03216C15.4667 3.97565 16.3122 3.95015 17.1565 3.93463C18.5793 3.90804 19.5943 3.11466 20.5628 2.19607C21.1556 1.63427 21.7562 1.07026 22.411 0.586031C23.2255 -0.0178701 24.061 0.151656 24.7967 0.769962C25.5857 1.4337 26.3403 2.13956 27.106 2.8321C28.0002 3.641 29.0739 3.95016 30.2518 4.00002C31.1903 4.03991 32.1311 4.06984 33.063 4.17399C33.8708 4.26486 34.3705 4.76458 34.4447 5.59009C34.5179 6.39677 34.5821 7.21012 34.5666 8.01901C34.5345 9.6778 35.1661 11.0219 36.3351 12.1643C36.8604 12.6785 37.3523 13.2325 37.8155 13.8043C38.5446 14.7029 38.5479 15.5683 37.8233 16.4736C37.3745 17.0343 36.9058 17.5895 36.3783 18.0726C35.0775 19.2638 34.5301 20.7331 34.5644 22.4705C34.5777 23.1686 34.5279 23.87 34.458 24.5659C34.3661 25.4889 33.8586 26.0574 32.9112 26.1582C32.3073 26.2225 31.7 26.2524 31.2845 26.2834H31.2856ZM23.6056 5.784C18.1461 5.80173 14.0495 9.87948 14.0916 15.3124C14.1304 20.2921 18.2868 24.567 23.6754 24.5138C28.5731 24.4662 32.8879 20.1824 32.8303 15.1661C32.7704 9.9936 28.6451 5.76741 23.6056 5.78292V5.784Z"
                        fill="#0044FF"></path><path
                        d="M23.4344 50.893C20.7361 50.893 18.037 50.893 15.3388 50.893C14.7954 50.893 14.7405 50.8559 14.8215 50.3184C15.3118 47.065 17.0279 44.7 20.0586 43.4023C22.8936 42.1882 25.6779 42.4565 28.2589 44.133C30.4188 45.537 31.6549 47.5923 32.0852 50.1303C32.097 50.1995 32.1046 50.2695 32.1113 50.3395C32.162 50.8728 32.1443 50.8922 31.6144 50.8922C28.8874 50.8922 26.1605 50.8922 23.4344 50.8922V50.893Z"
                        fill="#0044FF"></path><path
                        d="M39.7762 50.8898C37.7512 50.8898 35.7271 50.8813 33.7021 50.8974C33.2904 50.9007 33.1571 50.775 33.1208 50.3515C32.9824 48.7686 32.4568 47.3098 31.5464 46.0045C31.3253 45.6873 31.3279 45.4865 31.6147 45.2207C34.1966 42.8329 37.1783 42.0424 40.5263 43.1713C43.8683 44.2985 45.7861 46.7192 46.3911 50.1836C46.5083 50.856 46.4661 50.8923 45.7658 50.8931C43.7696 50.8948 41.7733 50.8931 39.7762 50.8931V50.8898Z"
                        fill="#0044FF"></path><path
                        d="M7.09312 50.8912C5.11204 50.8912 3.1301 50.8912 1.14901 50.8912C0.458837 50.8912 0.419184 50.8507 0.519589 50.1842C0.81574 48.2174 1.64766 46.5215 3.09551 45.1429C5.16435 43.1711 7.63986 42.4075 10.4444 42.7821C12.2745 43.0259 13.8624 43.8452 15.198 45.131C15.6444 45.5605 15.6418 45.5656 15.3153 46.0684C14.4513 47.3982 13.908 48.8452 13.7738 50.4289C13.7426 50.795 13.5975 50.9005 13.249 50.8988C11.197 50.8879 9.14509 50.8929 7.09397 50.8929L7.09312 50.8912Z"
                        fill="#0044FF"></path><path
                        d="M33.776 37.6168C33.8165 35.413 35.6128 33.6327 37.7601 33.669C40.0872 33.7078 41.8978 35.5235 41.7713 37.8927C41.6633 39.9 40.0855 41.6634 37.7213 41.6549C35.5302 41.6473 33.7364 39.7903 33.776 37.6168Z"
                        fill="#0044FF"></path><path
                        d="M19.4658 37.675C19.4599 35.4466 21.2402 33.6714 23.4769 33.6621C25.5551 33.6529 27.4881 35.4179 27.4484 37.7635C27.413 39.8644 25.588 41.665 23.4305 41.6523C21.2512 41.6396 19.4717 39.8543 19.4658 37.675Z"
                        fill="#0044FF"></path><path
                        d="M13.1154 37.7096C13.1264 39.8755 11.3655 41.5917 9.17602 41.6372C7.03969 41.6811 5.16745 39.916 5.16407 37.7375C5.15985 35.3953 6.8971 33.6327 9.27559 33.6766C11.4912 33.7179 13.1855 35.5969 13.1163 37.7096H13.1154Z"
                        fill="#0044FF"></path><path
                        d="M31.4653 15.1573C31.4896 19.5121 27.8895 23.1842 23.5458 23.1698C19.0881 23.1543 15.4281 19.9265 15.4015 15.0764C15.3771 10.6608 18.9351 7.14927 23.3198 7.10495C27.8906 7.05841 31.4398 10.5898 31.4653 15.1573ZM21.1336 19.2882C21.3618 19.1331 21.5923 19.0234 21.763 18.8539C23.3176 17.3114 24.8622 15.7579 26.4102 14.2077C27.0352 13.5816 27.6635 12.9589 28.2851 12.3306C28.7073 11.904 28.7582 11.5406 28.4247 11.2314C28.028 10.8658 27.6823 11.0707 27.361 11.3699C27.2391 11.483 27.1172 11.5949 26.9997 11.7123C25.1736 13.5351 23.3386 15.349 21.5314 17.1907C21.1757 17.553 20.9518 17.5231 20.6383 17.1818C20.277 16.7884 19.8848 16.4239 19.4992 16.0538C19.2022 15.769 18.8698 15.6438 18.5185 15.9507C18.2116 16.2189 18.2437 16.6532 18.6038 17.0222C19.221 17.656 19.846 18.2832 20.4865 18.8949C20.6493 19.0511 20.8798 19.1364 21.1347 19.2871L21.1336 19.2882Z"
                        fill="#0044FF"></path></svg>				</span>
                                                        </div>

                                                        <div class="elementor-icon-box-content">

                                                            <h3 class="elementor-icon-box-title">
						<span>
							Community and Support						</span>
                                                            </h3>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-d4910e3 elementor-widget elementor-widget-text-editor"
                                                data-id="d4910e3" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Become part of a vibrant trading community with access to expert
                                                        guidance and personalized assistance from our dedicated support
                                                        team.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-e178ba7 e-con-full e-flex e-con e-child"
                         data-id="e178ba7" data-element_type="container">
                        <div
                            class="elementor-element elementor-element-edbc6a8 elementor-absolute elementor-widget elementor-widget-image"
                            data-id="edbc6a8" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="875" height="1448"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20875%201448'%3E%3C/svg%3E"
                                     class="attachment-full size-full wp-image-506" alt=""
                                     data-lazy-src="https://metatrading.ai/wp-content/uploads/2024/05/Ellipse-75.svg"/>
                                <noscript><img loading="lazy" decoding="async" width="875" height="1448"
                                               src="../wp-content/uploads/2024/05/Ellipse-75.svg"
                                               class="attachment-full size-full wp-image-506" alt=""/></noscript>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-4a07f28 elementor-absolute elementor-widget elementor-widget-image"
                            data-id="4a07f28" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="660" height="1131"
                                     src="../wp-content/uploads/2024/05/Ellipse-74.svg"
                                     class="attachment-full size-full wp-image-456" alt=""/></div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-be6f318 e-con-full e-flex e-con e-child"
                         data-id="be6f318" data-element_type="container">
                        <div
                            class="elementor-element elementor-element-0ee5867 elementor-widget elementor-widget-heading"
                            data-id="0ee5867" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">A NEW ERA IN TRADING:</h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f4c9176 elementor-widget elementor-widget-heading"
                            data-id="f4c9176" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Before vs. After
                                    {{ env('APP_NAME') }}</h2></div>
                        </div>
                        <div class="elementor-element elementor-element-1ee088f e-flex e-con-boxed e-con e-child"
                             data-id="1ee088f" data-element_type="container">
                            <div class="e-con-inner">
                                <div
                                    class="elementor-element elementor-element-3c05059 e-flex e-con-boxed e-con e-child"
                                    data-id="3c05059" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="e-con-inner">
                                        <div
                                            class="elementor-element elementor-element-5af68aa elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="5af68aa" data-element_type="widget"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none"><path
                        fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.625 23.1279C0.625 10.3692 10.981 0.0307617 23.7504 0.0307617C36.5228 0.0307617 46.8758 10.3722 46.8758 23.1279C46.8758 35.8836 36.5199 46.225 23.7504 46.225C10.981 46.225 0.625 35.8865 0.625 23.1279ZM23.7504 1.58335C11.8365 1.58335 2.17759 11.2287 2.17759 23.1279C2.17759 35.0271 11.8365 44.6724 23.7504 44.6724C35.6642 44.6724 45.3232 35.0242 45.3232 23.1279C45.3232 11.2314 35.6671 1.58335 23.7504 1.58335ZM33.8944 12.9981C33.3091 12.4135 32.363 12.4135 31.7777 12.9981L23.7504 21.0152L15.7231 12.9981C15.4314 12.7068 15.0483 12.5611 14.6633 12.5611C14.2793 12.5611 13.8987 12.7061 13.6064 12.9981C13.0252 13.5785 13.0237 14.525 13.6068 15.1097C13.6069 15.1099 13.6071 15.1101 13.6073 15.1102L21.6351 23.1279L13.6064 31.1464C13.3147 31.4377 13.1692 31.8199 13.1692 32.2035C13.1692 32.5859 13.3139 32.9653 13.6058 33.2572C14.1913 33.8396 15.1384 33.8395 15.7238 33.2569C15.7238 33.257 15.7239 33.2569 15.7238 33.2569L23.7504 25.2374L31.7768 33.2568C31.777 33.257 31.7771 33.2571 31.7773 33.2573C32.3627 33.8395 33.3094 33.8395 33.8948 33.2573C34.4792 32.6733 34.4791 31.7303 33.8944 31.1464L25.8657 23.1279L33.8944 15.1093C34.1861 14.8181 34.3316 14.4359 34.3316 14.0523C34.3316 13.6697 34.1868 13.29 33.8944 12.9981ZM30.6806 11.8995C31.872 10.7096 33.8001 10.7096 34.9916 11.8995C35.5877 12.4948 35.8842 13.275 35.8842 14.0523C35.8842 14.8284 35.5884 15.6119 34.9916 16.2079L28.0628 23.1279L34.9916 30.0479C36.1836 31.2384 36.1836 33.1657 34.9916 34.3562L34.9907 34.3571C33.7994 35.543 31.8727 35.543 30.6815 34.3571L30.6804 34.3561L23.7504 27.4322L16.8193 34.3571C15.6281 35.543 13.7014 35.543 12.5101 34.3571L12.5092 34.3562C11.9131 33.7609 11.6166 32.9807 11.6166 32.2035C11.6166 31.4273 11.9124 30.6439 12.5092 30.0479L19.438 23.1279L12.5083 16.207C11.3209 15.0172 11.3196 13.0876 12.5092 11.8995C13.1052 11.3043 13.8859 11.0085 14.6633 11.0085C15.4396 11.0085 16.2235 11.3036 16.8202 11.8995L23.7504 18.8209L30.6806 11.8995Z"
                        fill="white" fill-opacity="0.46"></path></svg>				</span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
						<span>
							BEFORE						</span>
                                                        </h3>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-ed2298c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="ed2298c" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span
                                                            class="elementor-icon-list-text">Manual Market Analysis</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span
                                                            class="elementor-icon-list-text">Emotions Influence Trades</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span
                                                            class="elementor-icon-list-text">Missed Opportunities</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">Inconsistent Strategy Execution</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span
                                                            class="elementor-icon-list-text">Delayed Market Response</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-67e8fbe e-flex e-con-boxed e-con e-child"
                                    data-id="67e8fbe" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="e-con-inner">
                                        <div
                                            class="elementor-element elementor-element-690977c elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                            data-id="690977c" data-element_type="widget"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none"><path
                        fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.389648 23.1279C0.389648 10.3693 10.7426 0.0307617 23.5121 0.0307617C36.2846 0.0307617 46.6375 10.3722 46.6375 23.1279C46.6375 35.8836 36.2816 46.225 23.5121 46.225C10.7426 46.225 0.389648 35.8864 0.389648 23.1279ZM23.5121 1.58335C11.5984 1.58335 1.94224 11.2285 1.94224 23.1279C1.94224 35.0272 11.5984 44.6724 23.5121 44.6724C35.426 44.6724 45.0849 35.0242 45.0849 23.1279C45.0849 11.2314 35.4288 1.58335 23.5121 1.58335ZM37.4301 14.242L20.3012 31.3522L10.6364 21.6996C10.3407 21.4043 9.94825 21.254 9.55919 21.254C9.17283 21.254 8.78456 21.4025 8.48348 21.701C7.88878 22.2936 7.88895 23.2525 8.48397 23.8448L8.48494 23.8458L19.1502 34.5005C19.4441 34.7959 19.832 34.9444 20.2257 34.9444L20.2268 34.9444L20.2628 34.9399L20.324 34.9419C20.731 34.9554 21.1388 34.8076 21.4481 34.4987L39.5799 16.3898L39.5808 16.3889C39.8797 16.088 40.0275 15.7036 40.0275 15.3165C40.0275 14.9264 39.8777 14.5377 39.5817 14.242C38.9877 13.6487 38.0241 13.6488 37.4301 14.242ZM36.333 13.1434C37.5331 11.9448 39.4786 11.9448 40.6788 13.1434C41.277 13.7408 41.5801 14.5293 41.5801 15.3165C41.5801 16.1061 41.2753 16.887 40.6806 17.4848L40.6788 17.4866L22.5452 35.5972C21.9313 36.2104 21.1214 36.5095 20.3181 36.4948C20.2708 36.4975 20.234 36.497 20.2257 36.497C19.441 36.497 18.6505 36.1992 18.0503 35.5963L18.0495 35.5955L7.3886 24.9451C6.18416 23.7457 6.18391 21.7995 7.3886 20.6002L7.38949 20.5993C7.98835 20.0051 8.77281 19.7014 9.55919 19.7014C10.343 19.7014 11.1351 20.0034 11.7336 20.6011L20.3011 29.1578L36.333 13.1434Z"
                        fill="#0044FF"></path></svg>				</span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
						<span>
							AFTER						</span>
                                                        </h3>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-e5c89cc elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="e5c89cc" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">Instant AI-Driven Analysis</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">Objective, Data-Based Decisions</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">24/7 Trading Opportunities</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">Consistent Strategy Application</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
                                                        <span
                                                            class="elementor-icon-list-text">Rapid Market Adaptation</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-b177a42 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-child"
                        data-id="b177a42" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-4ba4996 e-flex e-con-boxed e-con e-child"
                                 data-id="4ba4996" data-element_type="container"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div
                                        class="elementor-element elementor-element-4438837 e-flex e-con-boxed e-con e-child"
                                        data-id="4438837" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-39924c6 elementor-widget elementor-widget-heading"
                                                data-id="39924c6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Let's
                                                        Build Something Amazing Together</h2></div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-760c181 elementor-widget elementor-widget-text-editor"
                                                data-id="760c181" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Don&#8217;t miss out on this opportunity to enhance your trading<br>
                                                    knowledge and performance. Download your the MetaBot files today
                                                    <br>and take the first step towards smarter trading!
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-1e1722a elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="1e1722a" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                           href="#">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Download MetaBot Files</span>
					</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('pages.layout.widget')

        </div>
        <div class="post-tags">
        </div>
    </div>


</main>

@include('pages.layout.footer')

<script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
    const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
</script>


<script type="rocketlazyloadscript" id="rocket-browser-checker-js-after">
    "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
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
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.21.6","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"container_grid":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"home_screen":true,"editor_v2":true,"nested-elements":true,"e_lazyload":true,"display-conditions":true},"urls":{"assets":"https:\/\/metatrading.ai\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal"},"post":{"id":636,"title":"Our%20Solutions%20-%20Metatrading.ai","excerpt":"","featuredImage":false}};
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
            const e = JSON.parse(t.dataset.settings), i = e._animation_delay || e.animation_delay || 0,
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

<!-- Mirrored from metatrading.ai/our-solutions/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Mar 2025 09:02:05 GMT -->
</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1741668877 -->
