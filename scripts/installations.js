$(document).ready(function() {
  $('#toggle-walls').on('click', function() {
    $('#installation-walls').show();
    $('#installation-showers').hide();
    $('#installation-kitchens').hide();
    $('#installation-floors').hide();
  })
});

$(document).ready(function() {
  $('#toggle-showers').on('click', function() {
    $('#installation-showers').show();
    $('#installation-walls').hide();
    $('#installation-kitchens').hide();
    $('#installation-floors').hide();
  })
});

$(document).ready(function() {
  $('#toggle-kitchens').on('click', function() {
    $('#installation-kitchens').show();
    $('#installation-walls').hide();
    $('#installation-showers').hide();
    $('#installation-floors').hide();
  })
});

$(document).ready(function() {
  $('#toggle-floors').on('click', function() {
    $('#installation-floors').show();
    $('#installation-walls').hide();
    $('#installation-showers').hide();
    $('#installation-kitchens').hide();
  })
});
