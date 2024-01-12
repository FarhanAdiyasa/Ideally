$(document).ready(function () {
    $(".dropdown-item").click(function () {
        var imgSrc = $(this).data("img");

        $("#dropdown-img").attr("src", imgSrc);
    });
});
