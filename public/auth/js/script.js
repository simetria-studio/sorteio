$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    $('.btnNext').click(function (e) {
        e.preventDefault();
        $(this).closest('fieldset').slideUp().next().slideDown();

    });
    $('.btnPrev').click(function (e) {
        e.preventDefault();
        $(this).closest('fieldset').slideUp().prev().slideDown();

    });
});

// array com as URLs das imagens
