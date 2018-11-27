(function($) {

  function Counter(className) {
    // We utilize the self var so other methods within the class have access to it. Similar to a class variable in ruby.
    var self = this;
    this.className = className;
    this.total = parseInt($(this.className).data('count'));
    this.setInitialValue = function() { $(this.className).html("$" + 0); };
    this.countUp = function() {
      $(this.className).prop('Count', 0).animate(
        {
          Count: this.total
        },
        {
          duration: 2500,
          easing: 'swing',
          step: function () {
          $(this).text('$' + parseInt(this.Count).toLocaleString());
        },
          complete: function(){
            $(this).html("$" + this.Count.toLocaleString());
          }
      });
    };
    this.execute = function() {
      self.setInitialValue();
      self.countUp();
    }
  }

  function mobileMenu() {
    var $primaryNav = $('.primary-nav');
    $('.mobile-menu').after($primaryNav);
    $('.hamburger').on('click', function() {
      $('.primary-nav').slideToggle('fast');
      $('.cross').show();
      $('.hamburger').hide();
    });

    $('.cross').on('click', function() {
      $('.primary-nav').slideToggle('fast');
      $('.cross').hide();
      $('.hamburger').show();
    });
  }

  function scrollToArea(btnId, AreaId) {
    $(btnId).click(function() {
        $('html, body').animate({
            scrollTop: $(AreaId).offset().top
        }, 1000);
    });
  }

  // run javascript after other files have loaded
  $(document).ready(function(){

    // var counter = new Counter('.counter');

    var docWindow = $(window)
    var alreadyScrolled = false;

    if (window.outerWidth < 991) {
      mobileMenu();
    }

    // var counterDistance = $('.settlements').offset().top;

    // docWindow.scroll(function() {
    //     if (!alreadyScrolled) {
    //       if ( docWindow.scrollTop() >= counterDistance - 250 ) {
    //          counter.execute();
    //          alreadyScrolled = true;
    //       }
    //     }
    // });

    $('#testimonials').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
      autoplay: true,
      autoplayTimeout: 7000,
      items: 1,
      singleItem: true,
      autoHeight:true
    });

    $('#home-posts').owlCarousel({
      margin: 10,
      nav: true,
      navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
      autoplay: true,
      autoplayTimeout: 7000,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
      }
    });

    scrollToArea('#scrollTo-videos', '#videos')

  });

})( jQuery );

