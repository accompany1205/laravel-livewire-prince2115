(function ($) {
  'use strict';
  $(function () {
    
    // TODO
    
    Livewire.on("goDetail", (id) => {
        document.location.href = '/business/detail';
    });
  });
})(jQuery);