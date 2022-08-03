$(function () {
    //スクロール
    $('a[href^="#"]').click(function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - $("header").height();
        console.log("position:" + position);

        $("html, body").animate({ scrollTop: position }, 600);
        return false;
    });
});