$('#BountyChallengeRank').on('change', function(e) {
  $('.BountyChallenges').removeClass('active')
  $('#' + $(e.currentTarget).val()).addClass("active");
})

$('#TraderChallengeRank').on('change', function(e) {
  $('.TraderChallenges').removeClass('active')
  $('#' + $(e.currentTarget).val()).addClass("active");
})

$('#CollectorChallengeRank').on('change', function(e) {
  $('.CollectorChallenges').removeClass('active')
  $('#' + $(e.currentTarget).val()).addClass("active");
})

$('#MoonshinerChallengeRank').on('change', function(e) {
  $('.MoonshinerChallenges').removeClass('active')
  $('#' + $(e.currentTarget).val()).addClass("active");
})

$('#NaturalistChallengeRank').on('change', function(e) {
  $('.NaturalistChallenges').removeClass('active')
  $('#' + $(e.currentTarget).val()).addClass("active");
})