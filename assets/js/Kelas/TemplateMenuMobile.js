$('#see-more').click(function (evt) {
    $('#description').text($('#see-more-val').val());
})

$(".buttons:nth-last-child(6)").click(function (evt) {
    if (saclar == true) {
        $('.buttons:not(:last-child)').css({
            'opacity': '0',
        })
        $('.buttons:nth-last-child(2)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(3)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(4)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(5)').css({
            'bottom': '-15px'
        })
        $('.buttons:nth-last-child(6)').css({
            'bottom': '-15px'
        })

        saclar = false;
    }
    else {
        $('.buttons:not(:last-child)').css({
            'opacity': '1',
        })
        $('.buttons:nth-last-child(2)').css({
            'bottom': '70px'
        })

        $('.buttons:nth-last-child(3)').css({
            'bottom': '120px'
        })

        $('.buttons:nth-last-child(4)').css({
            'bottom': '170px'
        })

        $('.buttons:nth-last-child(5)').css({
            'bottom': '220px'
        })
        $('.buttons:nth-last-child(6)').css({
            'bottom': '270px'
        })

        saclar = true;
    }
    console.log(saclar)

})



var saclar = false;
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    saclar = true;
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    saclar = false;
}

$(".buttons:nth-last-child(1)").click(function (evt) {
    if (saclar == true) {
        $('.buttons:not(:last-child)').css({
            'opacity': '0',
        })
        $('.buttons:nth-last-child(2)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(3)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(4)').css({
            'bottom': '-15px'
        })

        $('.buttons:nth-last-child(5)').css({
            'bottom': '-15px'
        })
        $('.buttons:nth-last-child(6)').css({
            'bottom': '-15px'
        })

        saclar = false;
    }
    else {
        $('.buttons:not(:last-child)').css({
            'opacity': '1',
        })
        $('.buttons:nth-last-child(2)').css({
            'bottom': '70px'
        })

        $('.buttons:nth-last-child(3)').css({
            'bottom': '120px'
        })

        $('.buttons:nth-last-child(4)').css({
            'bottom': '170px'
        })

        $('.buttons:nth-last-child(5)').css({
            'bottom': '220px'
        })
        $('.buttons:nth-last-child(6)').css({
            'bottom': '270px'
        })

        saclar = true;
    }

})
$(document).mouseup(function (e) {
    var container = $(".container-fab");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        if (saclar == true) {
            $('.buttons:not(:last-child)').css({
                'opacity': '0'
            });
            saclar = false;
        }
        else {
            $('.buttons:not(:last-child)').css({
                'opacity': '1'
            });
            saclar = true;
        }
    }
});