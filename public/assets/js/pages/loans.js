(function ($) {
  'use strict';
  $(function () {
    $('.date').datepicker({
      language: 'en',
      format: 'mm/dd/yyyy',
      autoclose: true,
    });

    Livewire.on("goDetail", (id) => {
      document.location.href = '/loans/' + id + '/detail';
    });

    Livewire.on("goSubDetail", (id) => {
      document.location.href = '/loans/loans/' + id + '/detail';
    });
  });
})(jQuery);