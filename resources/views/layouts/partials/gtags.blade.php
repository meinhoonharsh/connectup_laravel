<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y94P20ZVQS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Y94P20ZVQS');
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7811600246173013"
    crossorigin="anonymous"></script>


{{-- Segment Analytics --}}
<script>
    ! function() {
        var analytics = window.analytics = window.analytics || [];
        if (!analytics.initialize)
            if (analytics.invoked) window.console && console.error && console.error("Segment snippet included twice.");
            else {
                analytics.invoked = !0;
                analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify",
                    "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on",
                    "addSourceMiddleware", "addIntegrationMiddleware", "setAnonymousId", "addDestinationMiddleware"
                ];
                analytics.factory = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        t.unshift(e);
                        analytics.push(t);
                        return analytics
                    }
                };
                for (var e = 0; e < analytics.methods.length; e++) {
                    var key = analytics.methods[e];
                    analytics[key] = analytics.factory(key)
                }
                analytics.load = function(key, e) {
                    var t = document.createElement("script");
                    t.type = "text/javascript";
                    t.async = !0;
                    t.src = "https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";
                    var n = document.getElementsByTagName("script")[0];
                    n.parentNode.insertBefore(t, n);
                    analytics._loadOptions = e
                };
                analytics._writeKey = "aDMUknygljr9Y0fLScs32aYEAlZxqIx0";;
                analytics.SNIPPET_VERSION = "4.15.3";
                analytics.load("aDMUknygljr9Y0fLScs32aYEAlZxqIx0");
                analytics.page();
            }
    }();
</script>
