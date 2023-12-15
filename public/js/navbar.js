$(document).ready(function () {
    $(".dropdown-item").hover(function () {
        var imgSrc = $(this).data("img");

        $("#dropdown-img").attr("src", imgSrc);
    });
});
