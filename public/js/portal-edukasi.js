document.ready(function () {
    $('#search-article input[name="search"]').keypress(function (e) {
        if (e.which === 13) {
            // 13 is the key code for Enter
            e.preventDefault(); // Prevent default form submission
            $("#search-article").submit(); // Manually submit the form
        }
    });
});
