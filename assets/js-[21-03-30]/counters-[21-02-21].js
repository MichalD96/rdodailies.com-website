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
    
    $("#gold-count").text(goldWidget);			    
    
    $("#general-challenges-completed").text(general);	
    $("#role-challenges-completed").text(roles);	
    
    $("#bounty-challenges-completed").text(bounty);	
    $("#trader-challenges-completed").text(trader);	
    $("#collector-challenges-completed").text(collector);	
    $("#moonshiner-challenges-completed").text(moonshiner);	
    $("#naturalist-challenges-completed").text(naturalist);	    

    $("#general-challenges-remaining").text(7 - general);	
    $("#role-challenges-remaining").text(roles);	    
    
    $("#bounty-challenges-remaining").text(3 - bounty);	
    $("#trader-challenges-remaining").text(3 - trader);	
    $("#collector-challenges-remaining").text(3 - collector);	
    $("#moonshiner-challenges-remaining").text(3 - moonshiner);	
    $("#naturalist-challenges-remaining").text(3 - naturalist);	
    
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

    //$("#daily-challenges-counter-icon").prop('src', `${DailyChallengesIcons}daily_challenge_toast_${challengesRemaining}.png`);
	
}