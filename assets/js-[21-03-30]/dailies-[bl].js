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

  input.on('change', function () {
    Settings.DailyChallengesGoldMultipler = this.value; // change localStorage on change
  });
  SettingProxy.addListener(Settings, 'DailyChallengesGoldMultipler', DailyChallengesGoldCounter);

  var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {};
  var $checkbox = $('.challenge-input-container :checkbox');

  $checkbox.on('change', function () {
    $checkbox.each(function () {
      checkboxValue[this.id] = !!this.checked;
    });
    localStorage.setItem('checkboxValue', JSON.stringify(checkboxValue));
  });

  //on page load
  $.each(checkboxValue, function (key, value) {
    $('#' + key).prop('checked', value);
  });

  $('.general-challenge-input-checkbox, .challenge-input-checkbox').on('click', function () {
    var GeneralChecked = 0;
    var generalChallenges = $('.general-challenge-input-checkbox');
    $.each(generalChallenges, function () {
      GeneralChecked += +$(this).prop('checked');
    });
    $('.challenge-input-checkbox-general').prop('checked', GeneralChecked >= [...generalChallenges].length);

    var RolesChecked = 0;
    var roleChallenges = $('.challenge-input-checkbox');
    $.each(roleChallenges, function () {
      RolesChecked += +$(this).prop('checked');
    });
    $('.challenge-input-checkbox-role').prop('checked', RolesChecked >= 9);

  });

  $(':checkbox').on('change', function () {
    DailyChallengesCounter();
    DailyChallengesGoldCounter();
  }).triggerHandler('change');

  $('.reset-dailies button').on('click', function (event) {
    if (event.target.id === 'all-dailies') {
      [...$(':checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false);
      });
    }
    if (event.target.id === 'general-dailies') {
      [...$('.general-challenge-input-checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false);
      });
    }
    if (event.target.id === 'role-dailies') {
      [...$('.challenge-input-checkbox')].forEach(function (checkbox) {
        $(checkbox).prop('checked', false);
      });
    }
    $checkbox.triggerHandler('change');
    DailyChallengesCounter();
    DailyChallengesGoldCounter();
  });
};