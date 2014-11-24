(function ($) {

  $(window).on('beforeunload', function(){
    $(window).scrollTop(0);
  });

  $(document).ready(function(){
    $(window).on('scroll',watchScroll);

    $('.footnote-link').on('click',function(event){
      event.preventDefault();
      var footnote_id = $(this).attr('data-footnote-id');
      var footnote_text = $('#footnotes li[data-footnote-index="'+footnote_id+'"]').text();
      var offset_x = parseInt($(this).offset().left) - 150;
      var offset_y = parseInt($(this).offset().top)  + 30;
      $('.footnote-open').removeClass('footnote-open');
      $(this).addClass('footnote-open');
      $('.footnote-box').css({
        'top'   : offset_y,
        'left'  : offset_x,
        'width' : 300
      }).fadeIn();
      $('.footnote-box span').html(footnote_text);
    });

    $('.footnote-close').on('click',function(event){
      event.preventDefault();
      $('.footnote-open').removeClass('footnote-open');
      $('.footnote-box').fadeOut(function(){
        $(this).removeAttr('style');
        $('.footnote-box span').html('');
      });
    });

    $('.open-trigger').onScreen({
      doIn:function(){
        var openIndex = $(this).attr('data-trigger-index');
        $('#opener .triggered').removeClass('triggered');
        $('#opener .opener-' + openIndex).addClass('triggered');
      }
    });
    $('#character-wrap').onScreen({
       direction: 'vertical',
       doIn: function() {
        $('#opener').addClass('end');
        // if(!$('#character-chart').hasClass('open')){
        //   $('#character-chart').removeAttr('style').removeClass('tabbed open');
        // }
       }
     });

    $('.trigger-character-off').onScreen({
      direction: 'vertical',
      doIn:function(){
        // $('#character-chart').removeAttr('style').removeClass('tabbed open');
        // $('#trigger-character').removeAttr('style');
      }
    })
    $('#full-story').onScreen({
      direction: 'vertical',
      doOut: function(){
      }
    })

    $('.trigger-box .trigger').onScreen({
        direction: 'vertical',
       doIn: function() {
        // $('#character-chart').addClass('tabbed');
       }
    })

     $('.trigger-pixel').onScreen({
       direction: 'vertical',
       doIn: function() {
        $('#opener').removeClass('end');
       }
     });

     $('#trigger-character').on('click',function(){
      if($('#character-chart').hasClass('open')){
        $(this).removeAttr('style');
        $('#character-chart.tabbed').css('left','-100%');
        setTimeout(function(){
          $('#character-chart').removeClass('open');
        },1500)
      } else{
        $('#character-chart').addClass('open');
        $(this).css('right',0);
        $('#character-chart.tabbed').css('left','0');
      }
     });

     $('#full-story .character-section .actor').on('mouseover',function(){
      $(this).find('img').stop().animate({'opacity':1},500);
      $(this).find('.character').stop().animate({'opacity':1},500);
     });

     $('#full-story .character-section .actor').on('mouseout',function(){
      $(this).find('img').stop().animate({'opacity':0},500);
      $(this).find('.character').stop().animate({'opacity':0},500);
     });
  });

  function watchScroll(){
    var currentPosition = $(window).scrollTop();
    window.header1 = parseInt($('.chapter-1').offset().top);
    window.header2 = parseInt($('.chapter-2').offset().top);
    if( currentPosition > (header1 - 175) ){
      $('.chapter-1').addClass('on');
    } else{
      $('.chapter-1').removeClass('on');
    }

    if( currentPosition > (header2 - 175) ){
      $('.chapter-2').addClass('on');
    } else{
      $('.chapter-2').removeClass('on');
    }
  }

}(jQuery));