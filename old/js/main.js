(function ($) {

  $(window).on('beforeunload', function(){
    $(window).scrollTop(0);
  });

  $(document).ready(function(){

    if (!$.support.transition){
      $.fn.transition = $.fn.animate;
      window.easingInOut = 'easeInOutQuad';
      window.easeOut = 'easeOutQuad';
    } else{
      window.easingInOut = 'in-out';
      window.easeOut = 'ease';
    }

    $('.chapter-header').each(function(){
      var targetElement = $(this);
      $(window).on('scroll',function(){
        watchScroll(targetElement);
      });
    });

    $(window).on('scroll',function(){
      if($(window).scrollTop() > $('.opening-story').height()){
        $('#opener').addClass('end');
      }
    });

    $('.footnote-link').on('click',function(event){
      event.preventDefault();
      var footnote_id = $(this).attr('data-footnote-id');
      var footnote_text = $('#footnotes li[data-footnote-index="'+footnote_id+'"]').html();
      var offset_x = parseInt($(this).offset().left) - 150;
      var offset_y = parseInt($(this).offset().top)  + 30;
      setTimeout(function(){
        $(document).on('click.close-foot',function(){
          $('.footnote-close').click();
        });
      },500);
      $('.footnote-box').on('click',function(event){
        event.stopPropagation();
      });
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
      event.stopPropagation();
      $(document).off('.close-foot');
      $('.footnote-open').removeClass('footnote-open');
      $('.footnote-box').fadeOut(function(){
        $(this).removeAttr('style');
        $('.footnote-box span').html('');
      });
    });

    $('.open-trigger').each(function(){
      var targetElement = $(this);
      watchOpener(targetElement);
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

    $('.trigger-pixel').onScreen({
       direction: 'vertical',
       doIn: function() {
        $('#opener').removeClass('end');
       }
    });

    $('.scroll-arrow').on('click',function(){
      var newPosition = $('.opening-story p').first().offset().top - 70;
      $('html,body').animate({scrollTop: newPosition},1000, 'easeInOutExpo');
    }); 
    pulseArrow();


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

    $('#full-story .character-section .actor').hover(
      function(){
        if(!$(this).closest('.character-section').hasClass('initial')){
          if(!$('.instructions').hasClass('hidden')){
            var delay = 250;
          } else{
            var delay = 0;
          }
          $('.instructions').addClass('hidden').transition({'opacity': 0}, 250);
          $(this).find('img').transition({'opacity': 1, delay: delay},250);
          $(this).find('.character').transition({'opacity':1, delay: delay},250);
        }
      },
      function(){
        $(this).find('img').animate({'opacity':0, delay: 0},250);
        $(this).find('.character').animate({'opacity':0, delay: 0},250);
      }
     );
  });

  function pulseArrow(){
    $('.scroll-arrow').transition({'opacity':0.7, y: '-5'},750).transition({'opacity':1, y: '0'},750,function(){
      pulseArrow();
    });
  }

  function watchOpener(element){
    $(element).onScreen({
       direction: 'vertical',
       doIn: function() {
        var targetElement = $('.opener-'+$(this).attr('data-trigger-index'));
        $('.opener-'+($(this).attr('data-trigger-index')+2)).css('opacity',0);
        $('.opener-'+($(this).attr('data-trigger-index')-2)).css('opacity',0);
        window.lastIn = targetElement;
        $('.triggered').removeClass("triggered").transition({'opacity': 0});
        targetElement.addClass("triggered").transition({'opacity': 1});
      }
    });
  }

  function watchScroll(element){
    var currentPosition = $(window).scrollTop();
    var headerPosition = parseInt(element.offset().top);
    var backgroundPosition = element.attr('data-background-position');
    var offsetTitle = (150 - element.find('.title').height())/2 + 15;
    if(currentPosition > headerPosition - 175){
       if( !element.hasClass('on') ){
          element.addClass('on');
          element.transition({'height':'150px'}, 1000, easingInOut);
          element.find('img').transition({y: backgroundPosition},1000);
          element.find('.texture').transition({'opacity': '0.5'},1000);
          element.find('.title').transition({'opacity': '1', y: offsetTitle},1000);
        }
    } else{
      if(element.hasClass('on')){
        var oldHeight = element.width() * 0.54;
        element.removeClass('on');
        element.transition({'height': oldHeight}, 1000, easingInOut);
        element.find('img').transition({y: 0},1000);
        element.find('.texture').transition({'opacity': '0'},1000)
        element.find('.title').transition({'opacity': '0', y: '0px'},1000)
      }
    }

    if(currentPosition > $('#opener').height()){
      // $('#opener').addClass('end');
    } else{
      $('#opener').removeClass('end');
    }

  }

}(jQuery));