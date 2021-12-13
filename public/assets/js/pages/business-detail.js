(function ($) {
  'use strict';
  $(function () {
    
    // TODO
    $(".owl-carousel").owlCarousel({      
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
    });
    
    Livewire.on("imageShow", (url, cation) => {
      $('.image-content').attr('src', url);
      $('.image-caption').html(cation);
      $('#image_show_modal').modal('show');
    });
  });
  
})(jQuery);