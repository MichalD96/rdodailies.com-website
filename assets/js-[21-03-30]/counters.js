function DailyChallengesCounter() {
    //var DailyChallengesIcons = '/assets/images/daily-challenge-icons/';
    
    var GeneralChallenge = $("input[name='GeneralChallenge']:checked").length;
    var BountyChallenge = $("input[name='BountyChallenge']:checked").length;
    var TraderChallenge = $("input[name='TraderChallenge']:checked").length;
    var CollectorChallenge = $("input[name='CollectorChallenge']:checked").length;
    var MoonshinerChallenge = $("input[name='MoonshinerChallenge']:checked").length;
    var NaturalistChallenge = $("input[name='NaturalistChallenge']:checked").length;	
    var GeneralChallengesCompleted = $("input[name='GeneralChallengesCompleted']:checked").length;	
    var RoleChallengesCompleted = $("input[name='RoleChallengesCompleted']:checked").length;	
    
    var general = (GeneralChallenge);
    var bounty = (BountyChallenge);
    var trader = (TraderChallenge);
    var collector = (CollectorChallenge);
    var moonshiner = (MoonshinerChallenge);
    var naturalist = (NaturalistChallenge);    
    var roles = (bounty+trader+collector+moonshiner+naturalist);
    var rolesFinished = (bounty+trader+collector+moonshiner+naturalist);    
    
    var generalCompleted = (GeneralChallengesCompleted);    
    var rolesCompleted = (RoleChallengesCompleted);    
    
    if (rolesCompleted === 1) {
        var remainingChallenges = 6;
    } else {
        var remainingChallenges = 0;
    }		
    
    if (rolesFinished >= 9) {
        var remainingChallengesFinished = (roles - 9);
    } else {
        var remainingChallengesFinished = 0;
    }		
    
    var challengesCompleted = (general+bounty+trader+collector+moonshiner+naturalist);
    var challengesRemaining = (22-challengesCompleted-remainingChallenges+remainingChallengesFinished);
    
    var generalChallengesCompleted = (general);
    var roleChallengesCompleted = (roles);   
    
    var goldMultiplerValue = $('#DailyChallengesGoldMultipler')[0];
    var goldValue = goldMultiplerValue.options[goldMultiplerValue.selectedIndex].value;  
    
    if (rolesCompleted === 1) {
        var rolesGold = goldValue * 3;
    } else {
        var rolesGold = goldValue * 0;
    }    
    
    if (generalCompleted === 1) {
        var generalGold = goldValue * 3;
    } else {
        var generalGold = goldValue * 0;
    }    
    
    var goldWidget = (goldValue * challengesCompleted + generalGold + rolesGold).toFixed(2);	
    
//    $("#gold-widget").text(goldWidget);		    	
    var generalRemaining = (7 - general);		    	
    var rolesRemaining = (9 - roles);	    	
    var bountyRemaining = (3 - bounty);	    	
    var traderRemaining = (3 - trader);	
    var collectorRemaining = (3 - collector);	
    var moonshinerRemaining = (3 - moonshiner);	
    var naturalistRemaining = (3 - naturalist);	    
    
    $("#gold-count").text(goldWidget);			    
    
    $("#general-challenges-completed").text(general);	
    $("#role-challenges-completed").text(roles);	
    
    $("#bounty-challenges-completed").text(bounty);	
    $("#trader-challenges-completed").text(trader);	
    $("#collector-challenges-completed").text(collector);	
    $("#moonshiner-challenges-completed").text(moonshiner);	
    $("#naturalist-challenges-completed").text(naturalist);	    

    $("#general-challenges-remaining").text(generalRemaining);	
    $("#role-challenges-remaining").text(rolesRemaining);	    
    
    $("#bounty-challenges-remaining").text(bountyRemaining);	
    $("#trader-challenges-remaining").text(traderRemaining);	
    $("#collector-challenges-remaining").text(collectorRemaining);	
    $("#moonshiner-challenges-remaining").text(moonshinerRemaining);	
    $("#naturalist-challenges-remaining").text(naturalistRemaining);	
    
    $("#challenges-completed").text(challengesCompleted);    
    $("#challenges-remaining").text(challengesRemaining);
    
    if (challengesRemaining === 0) {
        var remainingChallengesIcon = (challengesRemaining);
        $("#challenges-remaining-icon").text(remainingChallengesIcon);
        
        //var remainingChallengesIcon = ("T");
        //$("#challenges-remaining-icon").prop('class', 'remaining-challenges-image');
    } else {
        var remainingChallengesIcon = (challengesRemaining);
        $("#challenges-remaining-icon").text(remainingChallengesIcon);
    };
    
  $("#general-challenges-toggle").prop('class', 'daily-challenges-toggle' + generalRemaining + '-wrapper');
  $("#bounty-challenges-toggle").prop('class', 'daily-challenges-toggle' + bountyRemaining + '-wrapper');
  $("#trader-challenges-toggle").prop('class', 'daily-challenges-toggle' + traderRemaining + '-wrapper');
  $("#collector-challenges-toggle").prop('class', 'daily-challenges-toggle' + collectorRemaining + '-wrapper');
  $("#moonshiner-challenges-toggle").prop('class', 'daily-challenges-toggle' + moonshinerRemaining + '-wrapper');
  $("#naturalist-challenges-toggle").prop('class', 'daily-challenges-toggle' + naturalistRemaining + '-wrapper');

    //$("#daily-challenges-counter-icon").prop('src', `${DailyChallengesIcons}daily_challenge_toast_${challengesRemaining}.png`);
	
}