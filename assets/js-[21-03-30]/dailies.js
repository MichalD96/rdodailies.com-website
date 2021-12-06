var MIN_OPACITY = .4

$(function () {
  try {
    initDailiesLogic();
  } catch (e) {
    console.error(e);
  }
});

function initDailiesLogic() {
  var input = $('#DailyChallengesGoldMultipler');
  input.value = Settings.DailyChallengesGoldMultipler;
  // set gold multiplier value
  input.on('change', function () {
    Settings.DailyChallengesGoldMultipler = this.value;
  });

  // listen for gold multiplier change and execute callback
  SettingProxy.addListener(Settings, 'DailyChallengesGoldMultipler');

  var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {};
  var $checkbox = $('.challenge-input-container :checkbox');

  $checkbox.on('change', function () {
    $checkbox.each(function () {
      checkboxValue[this.id] = !!this.checked;
    });
    localStorage.setItem('checkboxValue', JSON.stringify(checkboxValue));
  });

  // check checkboxes on page load
  $.each(checkboxValue, function (key, value) {
    $('#' + key).prop('checked', value);
  });

  $('.general-challenge-input-checkbox, .challenge-input-checkbox').on('click', function () {
    // count completed dailies
    var generalChecked = 0;
    var generalChallenges = $('.general-challenge-input-checkbox');
    $.each(generalChallenges, function () {
      generalChecked += +$(this).prop('checked');
    });
    $('.challenge-input-checkbox-general').prop('checked', generalChecked >= [...generalChallenges].length);

    var rolesChecked = 0;
    var roleChallenges = $('.challenge-input-checkbox');
    $.each(roleChallenges, function () {
      rolesChecked += +$(this).prop('checked');
    });
    $('.challenge-input-checkbox-role').prop('checked', rolesChecked >= 9);

    // lower opacity completed set of dailies
    [...$('.challenge-input-container:has(.general-challenge-input-checkbox)')].map(function (e) {
      $(e).css('opacity', generalChecked < 7 ? 1 : MIN_OPACITY);
    });

    [...$('.challenge-input-container:has(.challenge-input-checkbox)')].map(function (e) {
      $(e).css('opacity', rolesChecked < 9 ? 1 : MIN_OPACITY);
    });
  }).triggerHandler('click');

  // update counters
  $(':checkbox').on('change', function () {
    DailyChallengesCounter();
  }).triggerHandler('change')


  // reset dailies buttons
  $('.reset-dailies button').on('click', function (event) {
    if (event.target.id === 'all-dailies') {
      [...$(':checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false).triggerHandler('click');
      });
    }
    if (event.target.id === 'general-dailies') {
      [...$('.general-challenge-input-checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false).triggerHandler('click');
      });
    }
    if (event.target.id === 'role-dailies') {
      [...$('.challenge-input-checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false).triggerHandler('click');
      });
    }
    DailyChallengesCounter();
  });
};