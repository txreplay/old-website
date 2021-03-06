(function (e) {
    e.fn.least = function (t) {
        var n = e.extend({
            random: false,
            lazyload: true,
            scrollToGallery: true
        }, t);
        return this.each(function () {
            function t(t, n, r) {
                var i = e('<figure class="close"></figure>'),
                    s = e('<img src="' + n + '"/>'),
                    o = e("li a");
                s.load(function () {
                    t.html('<div class="fullCaption">' + r + "</div>").prepend(s).append(i).slideDown("slow");
                    o.removeClass("spinner")
                });
                i.on("click", function () {
                    e("#fullPreview").slideToggle("slow")
                })
            }
            e(this).find("li a").click(function (n) {
                n.preventDefault();
                var r = e(this),
                    i = r.attr("href"),
                    s = e("#fullPreview"),
                    o = s.children("img"),
                    u = r.nextAll(".projectInfo").html() || "";
                if (o.length && i === o.attr("src")) {
                    s.slideToggle("slow");
                    return
                }
                o.length ? s.slideUp("slow", function () {
                    t(s, i, u)
                }) : t(s, i, u);
                e(this).addClass("spinner")
            });
            n.random && e("#menu-portfolio").each(function () {
                var t = e(this),
                    n = t.children("li").not(":first-child");
                n.sort(function () {
                    var e = parseInt(Math.random() * 8, null),
                        t = e % 4,
                        n = e > 2 ? 1 : -1;
                    return t * n
                }).appendTo(t)
            });
            n.lazyload && e.fn.lazyload ? e("img").lazyload({
                effect: "fadeIn"
            }) : e("img").each(function () {
                e(this).attr("src", e(this).data("original"))
            });
            n.scrollToGallery && e(this).find("li a").click(function (t) {
                t.preventDefault();
                e("html, body").animate({
                    scrollTop: e("#menu-portfolio").offset().top
                }, 500)
            })
        })
    }
})(jQuery);