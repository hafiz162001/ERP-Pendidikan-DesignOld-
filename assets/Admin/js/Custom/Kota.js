sessionStorage.clear();

let device = isMobile.any ? '5%' : '10%';
    $('.MYbounce').css({
        top : '10%',
        left: device.toString(),
    })
    

  $("tbody").click(function (evt) {
      if (evt.target.className == 'subSelect') {
          // alert( parseInt(sessionStorage.getItem('count')) );
          if (sessionStorage.getItem('count') == 'NaN' || sessionStorage.getItem('count') == null) {
              sessionStorage.setItem('count', 0);
          }
          if (evt.target.checked == true) {
              let input_ = document.createElement('input');
              input_.setAttribute('type', 'hidden');
              input_.setAttribute('value', 'YO_' + evt.target.defaultValue);
              input_.setAttribute('name', 'YO_selectKota[]');
              $('#input-selected').append(input_);
              sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) + 1);
              $('.MYbounce').show();
              $('#content-wrapper').css('background', 'rgba(46, 49, 49, 1)');
              $('body').css('background', 'rgba(46, 49, 49, 1)');
  
  
              $('#fixedbutton').show();
              $('#fixedbutton2').show();
          } else {
              $("input[value='YO_" + evt.target.defaultValue + "']").remove();
              if (sessionStorage.getItem('count') == 1) {
  
                  $('.MYbounce').hide();
                  $('#content-wrapper').css('background', '#eee');
                  $('#fixedbutton').hide();
                  $('#fixedbutton2').hide();
              }
              sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) - 1);
  
          }
  
          $('#counter-selected').html(sessionStorage.getItem('count'));
          $(".MYbounce").effect("bounce", {
              times: 2
          }, 100);
  
  
  
      }
  });
