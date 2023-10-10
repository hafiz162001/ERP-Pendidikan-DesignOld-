sessionStorage.clear();
$("tbody").click(function (evt) {
    if (evt.target.className == 'subSelect') {
        // alert( parseInt(sessionStorage.getItem('count')) );
        if (sessionStorage.getItem('count') == 'NaN' || sessionStorage.getItem('count') == null) {
            sessionStorage.setItem('count', 0);
        }
        if (evt.target.checked == true) {
            sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) + 1);
            $('.MYbounce').show();
            $('#content-wrapper').css('background', '#2b2d42');
            $('#data-card').css({ 'box-shadow': '0px 0px 0px transparent' })
            $('#fixedbutton').show();
            $('#fixedbutton2').show();
        }
        else {

            if (sessionStorage.getItem('count') == 1) {
                const boxShadow = "0 1px 2px #e5e5e5, 0 2px 4px #e5e5e5, 0 4px 8px #e5e5e5, 0 8px 16px #e5e5e5, 0 16px 32px #e5e5e5, 0 32px 64px #e5e5e5";
                $('.MYbounce').hide();
                $('#content-wrapper').css('background', '#fafdfb');
                $('#fixedbutton').hide();
                $('#fixedbutton2').hide();
                $('#data-card').css({ 'box-shadow': boxShadow })

            }
            sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) - 1);

        }

        $('#counter-selected').html(sessionStorage.getItem('count'));
        $(".MYbounce").effect("bounce", { times: 2 }, 100);

    }
});