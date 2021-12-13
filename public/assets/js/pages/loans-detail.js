(function ($) {
  'use strict';
  $(function () {
    
    Livewire.on("imageShow", (url, cation) => {
      $('.image-content').attr('src', url);
      $('.image-caption').html(cation);
      $('#image_show_modal').modal('show');
    });
  });
  
})(jQuery);