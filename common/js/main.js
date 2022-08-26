$(function () {
    //スクロール
    $('a[href^="#"]').on("click", function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - $("header").height();

        $("html, body").animate({ scrollTop: position }, 600);
        return false;
    });

    $('input[name="type[]"].btn_other').on("click", function () {
        if ($(this).prop('checked') == true) {
            $('[name="type_comment').prop('required', true, $('[name="type_comment').prop('disabled', false));
        } else {
            $('[name="type_comment').prop('required', false, $('[name="type_comment').prop('disabled', true));
        }

    });
    $('input[name="reply"]').on("click", function () {
        if ($(this).val() === 'その他') {
            $('[name="reply_comment').prop('required', true, $('[name="reply_comment').prop('disabled', false));
        } else {
            $('[name="reply_comment').prop('required', false, $('[name="reply_comment').prop('disabled', true));
        }
    });

    $('input[name="type[]"]').on("click", function () {

        $('input[name="type[]"]').prop("required", true);
        let checkedsum;
        checkedsum = $('input[name="type[]"]:checked').length;
        if ($('input[name="type[]"]:checked').length > 0) {
            $('input[name="type[]"]').prop("required", false);
        } else {
            $('input[name="type[]"]').prop("required", true);
        }

    });

});