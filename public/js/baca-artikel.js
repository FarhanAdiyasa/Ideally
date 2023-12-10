$(document).ready(function () {
    const floatingWidget = document.getElementById("floatingWidget");

    let floatingTrigger = false;
    const stopFloatPos = 3880;

    window.addEventListener('scroll', function () {

        let scrollPos = window.pageYOffset;

        if (scrollPos > 315 && !floatingTrigger) {
            floatingTrigger = true;
            floatingWidget.classList.add("float");
        }


        else if (scrollPos < 315) {
            floatingTrigger = false;
            floatingWidget.classList.remove("float");
        }

        else if (scrollPos > 3780 && floatingTrigger) {
            floatingWidget.classList.remove("float");
            floatingWidget.classList.add("stop-float");
        }

        // Perbaikan logika di sini
        else if (scrollPos < stopFloatPos) {
            floatingWidget.classList.remove("stop-float");
            floatingTrigger = true;
            floatingWidget.classList.add("float");
        }
    });

    // Logika slide konten
    $('#category-baru').addClass('active').show();
    $('#category-populer').hide();
    $('#category-acak').hide();

    $('#floating-category').change(function () {
        var selectedCard = $(this).val();
        $('.card-text').removeClass('active').hide();
        $('#' + selectedCard).addClass('active').show();
    });

    //Type Comment
    const textarea = document.getElementById('textarea-komentar');

    textarea.addEventListener('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });

    //Input/Send Comment
    const button = document.querySelector('.submit-btn button');
    const textbox = document.getElementById('textarea-komentar');

    button.addEventListener('click', function () {
        // Logic untuk submit isi textarea
        console.log(textbox.value);
    });
});