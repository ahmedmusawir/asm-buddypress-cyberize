jQuery(document).ready(function ($) {
  var ajaxFunction = 'athlete_dynamic_location_ajax_function';
  var ajaxUrl = asmGlobals.ajaxUrl;

  $.ajax({
    url: ajaxUrl,
    type: 'post',
    data: {
      action: ajaxFunction,
    },
  })
    .done(function (res) {
      // $('#location-select').append(res);
      var locationArray = res;
      console.log(locationArray);
      localStorage.setItem('localLocations', JSON.stringify(locationArray));
    })
    .fail(function () {
      console.log('Ajax Failed! In ' + ajaxFunction);
    })
    .always(function () {
      console.log('Ajax Dynamic Loaction Filter Complete');
    });
});
