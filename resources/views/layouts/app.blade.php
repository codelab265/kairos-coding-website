<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from kitpapa.net/mediapro/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 11:12:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mediapro &#8211; Digital Marketing Agency Elementor Template Kit</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Mediapro &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Mediapro &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/kitpapa.net\/mediapro\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('wp-content/plugins/elementor/assets/css/frontend-lite.min1cb5.css') }}?ver=3.21.6'
        media='all' />
    <link rel='stylesheet' id='elementor-post-102-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-102ce97.css') }}?ver=1716272755' media='all' />
    <link rel='stylesheet' id='elementor-post-103-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-103ce97.css') }}?ver=1716272755' media='all' />
    <link rel='stylesheet' id='jkit-elements-main-css'
        href='{{ asset('wp-content/plugins/jeg-elementor-kit/assets/css/elements/main6770.css') }}?ver=2.6.5'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
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
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='swiper-css'
        href="{{ asset('wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-10-css'
        href="{{ asset('wp-content/uploads/elementor/css/post-1044dc.css?ver=1716272026') }}" media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href="{{ asset('wp-content/uploads/elementor/css/globalf440.css?ver=1716272028') }}" media='all' />
    <link rel='stylesheet' id='elementor-post-66-css'
        href="{{ asset('wp-content/uploads/elementor/css/post-66d33b.css?ver=1716272393') }}" media='all' />
    <link rel='stylesheet' id='cute-alert-css'
        href="{{ asset('wp-content/plugins/metform/public/assets/lib/cute-alert/styleab17.css?ver=3.8.8') }}"
        media='all' />
    <link rel='stylesheet' id='text-editor-style-css'
        href="{{ asset('wp-content/plugins/metform/public/assets/css/text-editorab17.css?ver=3.8.8') }}"
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href="{{ asset('wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1') }}" media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href="{{ asset('wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1') }}" media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href="{{ asset('wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1') }}" media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href="{{ asset('wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticonsaeb9.css?ver=3.1.4') }}"
        media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href="{{ asset('wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-stylesaeb9.css?ver=3.1.4') }}"
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href="{{ asset('wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsiveaeb9.css?ver=3.1.4') }}"
        media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href="{{ asset('wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min0579.css?ver=5.9.21') }}"
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-jkiticon-css'
        href='{{ asset('wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon6770.css?ver=2.6.5') }}'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{ asset('wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1') }}" id="jquery-core-js"></script>
    <script src="{{ asset('wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1') }}" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/66.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.5.3" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embedba4a.json?url=https%3A%2F%2Fkitpapa.net%2Fmediapro%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed3877?url=https%3A%2F%2Fkitpapa.net%2Fmediapro%2F&amp;format=xml" />
    <meta name="generator"
        content="Elementor 3.21.6; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, e_lazyload; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-66 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-66">
    <div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="102" class="elementor elementor-102">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-72a8334 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="72a8334" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3d245ce7"
                        data-id="3d245ce7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3af1e9de elementor-widget elementor-widget-image"
                                data-id="3af1e9de" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.21.0 - 20-05-2024 */
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
                                    </style> <a href="https://kitpapa.net/home">
                                        <img width="313" height="52" src="wp-content/uploads/2024/05/Logo.png"
                                            class="attachment-full size-full wp-image-105" alt=""
                                            decoding="async"
                                            srcset="https://kitpapa.net/mediapro/wp-content/uploads/2024/05/Logo.png 313w, https://kitpapa.net/mediapro/wp-content/uploads/2024/05/Logo-300x50.png 300w"
                                            sizes="(max-width: 313px) 100vw, 313px" /> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-968a235"
                        data-id="968a235" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7b7d87b2 elementor-widget elementor-widget-jkit_nav_menu"
                                data-id="7b7d87b2" data-element_type="widget"
                                data-widget_type="jkit_nav_menu.default">
                                <div class="elementor-widget-container">
                                    <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_66__66a0e18ccbcc6"
                                        data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-down-arrow1-light&quot;&gt;&lt;/i&gt;">
                                        <button aria-label="open-menu" class="jkit-hamburger-menu"><i
                                                aria-hidden="true" class="jki jki-bars-solid"></i></button>
                                        <div class="jkit-menu-wrapper">
                                            <div class="jkit-menu-container">
                                                <ul id="menu-menu"
                                                    class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                    <li id="menu-item-80"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-66 current_page_item menu-item-80">
                                                        <a href="index.html" aria-current="page">Home</a>
                                                    </li>
                                                    <li id="menu-item-79"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
                                                        <a href="about/index.html">About</a>
                                                    </li>
                                                    <li id="menu-item-77"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77">
                                                        <a href="projects/index.html">Projects</a>
                                                    </li>
                                                    <li id="menu-item-78"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
                                                        <a href="services/index.html">Services</a>
                                                    </li>
                                                    <li id="menu-item-76"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-76">
                                                        <a href="blog/index.html">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-81"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-81">
                                                                <a
                                                                    href="3-instagram-ads-reports-that-simplify-your-marketing/index.html">Single
                                                                    Blog</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-75"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75">
                                                        <a href="contact/index.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="jkit-nav-identity-panel">
                                                <div class="jkit-nav-site-title"><a
                                                        href="https://kitpapa.net/mediapro" class="jkit-nav-logo"><img
                                                            width="313" height="52"
                                                            src="wp-content/uploads/2024/05/Logo.png"
                                                            class="attachment-full size-full" alt=""
                                                            url="wp-content/uploads/2024/05/Logo.png" decoding="async"
                                                            srcset="https://kitpapa.net/mediapro/wp-content/uploads/2024/05/Logo.png 313w, https://kitpapa.net/mediapro/wp-content/uploads/2024/05/Logo-300x50.png 300w"
                                                            sizes="(max-width: 313px) 100vw, 313px" /></a></div>
                                                <button aria-label="close-menu" class="jkit-close-menu"><svg
                                                        aria-hidden="true" class="e-font-icon-svg e-fas-times"
                                                        viewBox="0 0 352 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                                        </path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                        <div class="jkit-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d9e280 elementor-hidden-tablet elementor-hidden-phone"
                        data-id="d9e280" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4db943b2 elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                data-id="4db943b2" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet"
                                        href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                    <div class="elementor-icon-box-wrapper">

                                        <div class="elementor-icon-box-icon">
                                            <span class="elementor-icon elementor-animation-">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                    </path>
                                                </svg> </span>
                                        </div>

                                        <div class="elementor-icon-box-content">

                                            <h3 class="elementor-icon-box-title">
                                                <span>
                                                    (+44) 123 456 789 </span>
                                            </h3>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{ $slot }}
    <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="103" class="elementor elementor-103">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-768003a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="768003a7" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5260f2ef"
                        data-id="5260f2ef" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-65033310 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="65033310" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1139fb4d"
                                        data-id="1139fb4d" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-78352860 elementor-widget elementor-widget-image"
                                                data-id="78352860" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="https://kitpapa.net/home">
                                                        <img width="313" height="52"
                                                            src="wp-content/uploads/2024/05/FooterLogo.png"
                                                            class="attachment-full size-full wp-image-109"
                                                            alt="" decoding="async"
                                                            srcset="https://kitpapa.net/mediapro/wp-content/uploads/2024/05/FooterLogo.png 313w, https://kitpapa.net/mediapro/wp-content/uploads/2024/05/FooterLogo-300x50.png 300w"
                                                            sizes="(max-width: 313px) 100vw, 313px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2e452643 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="2e452643" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.21.0 - 20-05-2024 */
                                                        .elementor-widget-divider {
                                                            --divider-border-style: none;
                                                            --divider-border-width: 1px;
                                                            --divider-color: #0c0d0e;
                                                            --divider-icon-size: 20px;
                                                            --divider-element-spacing: 10px;
                                                            --divider-pattern-height: 24px;
                                                            --divider-pattern-size: 20px;
                                                            --divider-pattern-url: none;
                                                            --divider-pattern-repeat: repeat-x
                                                        }

                                                        .elementor-widget-divider .elementor-divider {
                                                            display: flex
                                                        }

                                                        .elementor-widget-divider .elementor-divider__text {
                                                            font-size: 15px;
                                                            line-height: 1;
                                                            max-width: 95%
                                                        }

                                                        .elementor-widget-divider .elementor-divider__element {
                                                            margin: 0 var(--divider-element-spacing);
                                                            flex-shrink: 0
                                                        }

                                                        .elementor-widget-divider .elementor-icon {
                                                            font-size: var(--divider-icon-size)
                                                        }

                                                        .elementor-widget-divider .elementor-divider-separator {
                                                            display: flex;
                                                            margin: 0;
                                                            direction: ltr
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                            align-items: center
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                            display: block;
                                                            content: "";
                                                            border-block-end: 0;
                                                            flex-grow: 1;
                                                            border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                            margin-left: 0
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                            margin-right: 0
                                                        }

                                                        .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-start .elementor-divider__element {
                                                            margin-inline-start: 0
                                                        }

                                                        .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-end .elementor-divider__element {
                                                            margin-inline-end: 0
                                                        }

                                                        .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                            border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern {
                                                            --divider-border-style: none
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                        .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                            width: 100%;
                                                            min-height: var(--divider-pattern-height);
                                                            -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                            mask-size: var(--divider-pattern-size) 100%;
                                                            -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                            mask-repeat: var(--divider-pattern-repeat);
                                                            background-color: var(--divider-color);
                                                            -webkit-mask-image: var(--divider-pattern-url);
                                                            mask-image: var(--divider-pattern-url)
                                                        }

                                                        .elementor-widget-divider--no-spacing {
                                                            --divider-pattern-size: auto
                                                        }

                                                        .elementor-widget-divider--bg-round {
                                                            --divider-pattern-repeat: round
                                                        }

                                                        .rtl .elementor-widget-divider .elementor-divider__text {
                                                            direction: rtl
                                                        }

                                                        .e-con-inner>.elementor-widget-divider,
                                                        .e-con>.elementor-widget-divider {
                                                            width: var(--container-widget-width, 100%);
                                                            --flex-grow: var(--container-widget-flex-grow)
                                                        }
                                                    </style>
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-69d09b2e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="69d09b2e" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-map-marker-alt"
                                                                    viewBox="0 0 384 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">Jl. Raya Kuta
                                                                No.70, Kuta</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-envelope"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span
                                                                class="elementor-icon-list-text">support@domain.com</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg aria-hidden="true"
                                                                    class="e-font-icon-svg e-fas-phone-alt"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                                    </path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">(+44) 123 456
                                                                789</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2e7c213d"
                                        data-id="2e7c213d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-65217647 elementor-widget elementor-widget-heading"
                                                data-id="65217647" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">Other
                                                        Pages</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3e1cd1a8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="3e1cd1a8" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://kitpapa.net/home">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://kitpapa.net/about">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">About Us</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://kitpapa.net/services">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Services</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://kitpapa.net/projects">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Projects</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://kitpapa.net/contact">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Contact</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2d2d1a79"
                                        data-id="2d2d1a79" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7246681b elementor-widget elementor-widget-heading"
                                                data-id="7246681b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">Quick
                                                        Links</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5c316e30 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="5c316e30" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Privacy
                                                                    Policy</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Term Of
                                                                    Service</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span
                                                                    class="elementor-icon-list-text">Disclaimer</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">Credits</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#">

                                                                <span class="elementor-icon-list-icon">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-fas-angle-right"
                                                                        viewBox="0 0 256 512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                                                        </path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-594f7362"
                                        data-id="594f7362" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-19a63c5c elementor-widget elementor-widget-heading"
                                                data-id="19a63c5c" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        Newsletter</h4>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bc38814 elementor-widget elementor-widget-jkit_mailchimp"
                                                data-id="bc38814" data-element_type="widget"
                                                data-widget_type="jkit_mailchimp.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-mailchimp style-inline jeg_module_66_28_66a0e18d41784">
                                                        <form method="post" class="jkit-mailchimp-form"
                                                            data-listed=""
                                                            data-success-message="Successfully listed this email"
                                                            data-error-message="Something went wrong">
                                                            <div class="jkit-mailchimp-message"></div>
                                                            <div class="jkit-form-wrapper email-form">
                                                                <div
                                                                    class="jkit-mailchimp-email jkit-input-wrapper input-container">
                                                                    <div class="jkit-form-group">
                                                                        <div
                                                                            class="jkit-input-element-container jkit-input-group">
                                                                            <input type="email" name="email"
                                                                                class="jkit-email jkit-form-control "
                                                                                placeholder="Your Email Address"
                                                                                required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="jkit-submit-input-holder jkit-input-wrapper">
                                                                    <button type="submit"
                                                                        class="jkit-mailchimp-submit position-before"
                                                                        name="jkit-mailchimp">
                                                                        Subscribe
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7ec30505 elementor-widget elementor-widget-text-editor"
                                                data-id="7ec30505" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    Get the latest news &#038; updates
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-591085fa elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                data-id="591085fa" data-element_type="widget"
                                                data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.21.0 - 20-05-2024 */
                                                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                        .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                        .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                            line-height: 1;
                                                            font-size: 0
                                                        }

                                                        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                            display: inline-grid
                                                        }

                                                        .elementor-widget-social-icons .elementor-grid {
                                                            grid-column-gap: var(--grid-column-gap, 5px);
                                                            grid-row-gap: var(--grid-row-gap, 5px);
                                                            grid-template-columns: var(--grid-template-columns);
                                                            justify-content: var(--justify-content, center);
                                                            justify-items: var(--justify-content, center)
                                                        }

                                                        .elementor-icon.elementor-social-icon {
                                                            font-size: var(--icon-size, 25px);
                                                            line-height: var(--icon-size, 25px);
                                                            width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
                                                            height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
                                                        }

                                                        .elementor-social-icon {
                                                            --e-social-icon-icon-color: #fff;
                                                            display: inline-flex;
                                                            background-color: #69727d;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            cursor: pointer
                                                        }

                                                        .elementor-social-icon i {
                                                            color: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon svg {
                                                            fill: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon:last-child {
                                                            margin: 0
                                                        }

                                                        .elementor-social-icon:hover {
                                                            opacity: .9;
                                                            color: #fff
                                                        }

                                                        .elementor-social-icon-android {
                                                            background-color: #a4c639
                                                        }

                                                        .elementor-social-icon-apple {
                                                            background-color: #999
                                                        }

                                                        .elementor-social-icon-behance {
                                                            background-color: #1769ff
                                                        }

                                                        .elementor-social-icon-bitbucket {
                                                            background-color: #205081
                                                        }

                                                        .elementor-social-icon-codepen {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-delicious {
                                                            background-color: #39f
                                                        }

                                                        .elementor-social-icon-deviantart {
                                                            background-color: #05cc47
                                                        }

                                                        .elementor-social-icon-digg {
                                                            background-color: #005be2
                                                        }

                                                        .elementor-social-icon-dribbble {
                                                            background-color: #ea4c89
                                                        }

                                                        .elementor-social-icon-elementor {
                                                            background-color: #d30c5c
                                                        }

                                                        .elementor-social-icon-envelope {
                                                            background-color: #ea4335
                                                        }

                                                        .elementor-social-icon-facebook,
                                                        .elementor-social-icon-facebook-f {
                                                            background-color: #3b5998
                                                        }

                                                        .elementor-social-icon-flickr {
                                                            background-color: #0063dc
                                                        }

                                                        .elementor-social-icon-foursquare {
                                                            background-color: #2d5be3
                                                        }

                                                        .elementor-social-icon-free-code-camp,
                                                        .elementor-social-icon-freecodecamp {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-github {
                                                            background-color: #333
                                                        }

                                                        .elementor-social-icon-gitlab {
                                                            background-color: #e24329
                                                        }

                                                        .elementor-social-icon-globe {
                                                            background-color: #69727d
                                                        }

                                                        .elementor-social-icon-google-plus,
                                                        .elementor-social-icon-google-plus-g {
                                                            background-color: #dd4b39
                                                        }

                                                        .elementor-social-icon-houzz {
                                                            background-color: #7ac142
                                                        }

                                                        .elementor-social-icon-instagram {
                                                            background-color: #262626
                                                        }

                                                        .elementor-social-icon-jsfiddle {
                                                            background-color: #487aa2
                                                        }

                                                        .elementor-social-icon-link {
                                                            background-color: #818a91
                                                        }

                                                        .elementor-social-icon-linkedin,
                                                        .elementor-social-icon-linkedin-in {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-medium {
                                                            background-color: #00ab6b
                                                        }

                                                        .elementor-social-icon-meetup {
                                                            background-color: #ec1c40
                                                        }

                                                        .elementor-social-icon-mixcloud {
                                                            background-color: #273a4b
                                                        }

                                                        .elementor-social-icon-odnoklassniki {
                                                            background-color: #f4731c
                                                        }

                                                        .elementor-social-icon-pinterest {
                                                            background-color: #bd081c
                                                        }

                                                        .elementor-social-icon-product-hunt {
                                                            background-color: #da552f
                                                        }

                                                        .elementor-social-icon-reddit {
                                                            background-color: #ff4500
                                                        }

                                                        .elementor-social-icon-rss {
                                                            background-color: #f26522
                                                        }

                                                        .elementor-social-icon-shopping-cart {
                                                            background-color: #4caf50
                                                        }

                                                        .elementor-social-icon-skype {
                                                            background-color: #00aff0
                                                        }

                                                        .elementor-social-icon-slideshare {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-snapchat {
                                                            background-color: #fffc00
                                                        }

                                                        .elementor-social-icon-soundcloud {
                                                            background-color: #f80
                                                        }

                                                        .elementor-social-icon-spotify {
                                                            background-color: #2ebd59
                                                        }

                                                        .elementor-social-icon-stack-overflow {
                                                            background-color: #fe7a15
                                                        }

                                                        .elementor-social-icon-steam {
                                                            background-color: #00adee
                                                        }

                                                        .elementor-social-icon-stumbleupon {
                                                            background-color: #eb4924
                                                        }

                                                        .elementor-social-icon-telegram {
                                                            background-color: #2ca5e0
                                                        }

                                                        .elementor-social-icon-threads {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-thumb-tack {
                                                            background-color: #1aa1d8
                                                        }

                                                        .elementor-social-icon-tripadvisor {
                                                            background-color: #589442
                                                        }

                                                        .elementor-social-icon-tumblr {
                                                            background-color: #35465c
                                                        }

                                                        .elementor-social-icon-twitch {
                                                            background-color: #6441a5
                                                        }

                                                        .elementor-social-icon-twitter {
                                                            background-color: #1da1f2
                                                        }

                                                        .elementor-social-icon-viber {
                                                            background-color: #665cac
                                                        }

                                                        .elementor-social-icon-vimeo {
                                                            background-color: #1ab7ea
                                                        }

                                                        .elementor-social-icon-vk {
                                                            background-color: #45668e
                                                        }

                                                        .elementor-social-icon-weibo {
                                                            background-color: #dd2430
                                                        }

                                                        .elementor-social-icon-weixin {
                                                            background-color: #31a918
                                                        }

                                                        .elementor-social-icon-whatsapp {
                                                            background-color: #25d366
                                                        }

                                                        .elementor-social-icon-wordpress {
                                                            background-color: #21759b
                                                        }

                                                        .elementor-social-icon-x-twitter {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-xing {
                                                            background-color: #026466
                                                        }

                                                        .elementor-social-icon-yelp {
                                                            background-color: #af0606
                                                        }

                                                        .elementor-social-icon-youtube {
                                                            background-color: #cd201f
                                                        }

                                                        .elementor-social-icon-500px {
                                                            background-color: #0099e5
                                                        }

                                                        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                            border-radius: 10%
                                                        }

                                                        .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                            border-radius: 50%
                                                        }
                                                    </style>
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-jki-facebook-f elementor-animation-shrink elementor-repeater-item-0fb8cc7"
                                                                target="_blank">
                                                                <span
                                                                    class="elementor-screen-only">Jki-facebook-f</span>
                                                                <i class="jki jki-facebook-f"></i> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-4be5bc7"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Twitter</span>
                                                                <svg class="e-font-icon-svg e-fab-twitter"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-147010a"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Instagram</span>
                                                                <svg class="e-font-icon-svg e-fab-instagram"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-animation-shrink elementor-repeater-item-df2ad14"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Linkedin-in</span>
                                                                <svg class="e-font-icon-svg e-fab-linkedin-in"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-7ab9e2c elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="7ab9e2c" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4a9136e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="4a9136e8" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-69b917c0"
                                        data-id="69b917c0" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7c8585fe elementor-widget elementor-widget-text-editor"
                                                data-id="7c8585fe" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>MediaPro Marketing Agency Template Kit by Kitpapa.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1150d688"
                                        data-id="1150d688" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3dcb7d19 elementor-widget elementor-widget-text-editor"
                                                data-id="3dcb7d19" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Copyright © 2023 All rights reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel='stylesheet' id='jeg-dynamic-style-css'
        href='{{ asset('wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css') }}?ver=1.3.0'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min0579.css') }}?ver=5.9.21' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' media='all' />
    <link rel='stylesheet' id='sweetalert2-css' media='all' />
    href='{{ asset('wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.css') }}?ver=11.6.16'
    <link rel='stylesheet' id='tiny-slider-css' media='all' />
    href='{{ asset('wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-sliderf342.css') }}?ver=2.9.3'
    <link rel='stylesheet' id='e-animations-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/animations/animations.min1cb5.css') }}?ver=3.21.6'
        media='all' />
    <script src="{{ asset('wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alertab17.js') }}?ver=3.8.8"
        id="cute-alert-js"></script>
    <script src="{{ asset('wp-content/themes/hello-elementor/assets/js/hello-frontend.min41fe.js') }}?ver=3.0.1"
        id="hello-theme-frontend-js"></script>
    <script
        src="{{ asset('wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-scriptaeb9.js') }}?ver=3.1.4"
        id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://kitpapa.net/mediapro/wp-json/elementskit/v1/',
        }
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scriptsaeb9.js?ver=3.1.4"
        id="ekit-widget-scripts-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min1cb5.js?ver=3.21.6"
        id="elementor-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min1cb5.js?ver=3.21.6"
        id="elementor-frontend-modules-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.21.6",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "container_grid": true,
                "hello-theme-header-footer": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_lazyload": true
            },
            "urls": {
                "assets": "https:\/\/kitpapa.net\/mediapro\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 66,
                "title": "Mediapro%20%E2%80%93%20Digital%20Marketing%20Agency%20Elementor%20Template%20Kit",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="wp-content/plugins/elementor/assets/js/frontend.min1cb5.js?ver=3.21.6" id="elementor-frontend-js"></script>
    <script id="elementor-frontend-js-after">
        var jkit_ajax_url = "indexe2f2.html?jkit-ajax-request=jkit_elements",
            jkit_nonce = "b53d13787a";
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element6770.js?ver=2.6.5"
        id="jkit-sticky-element-js"></script>
    <script id="eael-general-js-extra">
        var localize = {
            "ajaxurl": "https:\/\/kitpapa.net\/mediapro\/wp-admin\/admin-ajax.php",
            "nonce": "f6199f5434",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/kitpapa.net\/mediapro\/",
            "cart_redirectition": "",
            "cart_page_url": "",
            "el_breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        };
    </script>
    <script
        src="wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min0579.js?ver=5.9.21"
        id="eael-general-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min0579.js?ver=5.9.21"
        id="font-awesome-4-shim-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu6770.js?ver=2.6.5"
        id="jkit-element-navmenu-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/video-button6770.js?ver=2.6.5"
        id="jkit-element-videobutton-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.js?ver=11.6.16"
        id="sweetalert2-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/team6770.js?ver=2.6.5" id="jkit-element-team-js">
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/fun-fact6770.js?ver=2.6.5"
        id="jkit-element-funfact-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/client-logo6770.js?ver=2.6.5"
        id="jkit-element-clientlogo-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-sliderf342.js?ver=2.9.3"
        id="tiny-slider-js"></script>
    <script id="jkit-element-pagination-js-extra">
        var jkit_element_pagination_option = {
            "element_prefix": "jkit_element_ajax_"
        };
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination6770.js?ver=2.6.5"
        id="jkit-element-pagination-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/mailchimp6770.js?ver=2.6.5"
        id="jkit-element-mailchimp-js"></script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.minaeb9.js?ver=3.1.4"
        id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https:\/\/kitpapa.net\/mediapro\/wp-admin\/admin-ajax.php",
            "nonce": "8942e58cb0"
        };
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementoraeb9.js?ver=3.1.4"
        id="elementskit-elementor-js"></script>

</body>

<!-- Mirrored from kitpapa.net/mediapro/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 11:13:01 GMT -->

</html>
