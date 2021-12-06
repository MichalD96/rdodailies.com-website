function DailyChallengesCounter() {
    var DailyChallengesIcons = '/assets/images/daily-challenge-icons/';
    
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
    
    var generalCompleted = (GeneralChallengesCompleted);    
    var rolesCompleted = (RoleChallengesCompleted);    
    
    if (rolesCompleted === 1) {
        var remainingChallenges = 16;
    } else {
        var remainingChallenges = 22;
    }		
    
    var remainingRoleChallenges = (15 - remainingChallenges);
    
    var challengesCompleted = (general+bounty+trader+collector+moonshiner+naturalist);
    
    var rolesNotCompleted = (challengesCompleted - remainingChallenges);
    
    var generalChallengesCompleted = (general);
    var roleChallengesCompleted = (roles);
    
    var totalChallengesCompleted = (challengesCompleted);		
    var totalDailyChallengesCompleted = (general + remainingRoleChallenges);	
    
    var goldWidget = (0.10 * totalChallengesCompleted).toFixed(2);	
    
//    $("#gold-widget").text(goldWidget);		
    
    $("#gold-count").text(goldWidget);			    
    
    $("#general-challenges-completed").text(general);	
    $("#role-challenges-completed").text(roles);	
    
    $("#bounty-challenges-completed").text(bounty);	
    $("#trader-challenges-completed").text(trader);	
    $("#collector-challenges-completed").text(collector);	
    $("#moonshiner-challenges-completed").text(moonshiner);	
    $("#naturalist-challenges-completed").text(naturalist);	
    
    
    $("#challenges-completed").text(challengesCompleted);
    
    $("#challenges-remaining").text(22 - challengesCompleted);
    
    $("#role-challenges-complete").text(roles);
    
    $("#role-challenges-remaining").text(15 - remainingRoleChallenges);
    
    $("#role-challenges-locked").text(rolesCompleted);
    
    $("#remaining-challenges").text(remainingChallenges);
    
    $("#total-challenges-completed").text(remainingChallenges + challengesCompleted);
    
    $("#total-challenges-remaining").text(remainingChallenges - challengesCompleted);
    
    
    
    
    
        
    
    
    
    
    
    
    
    
    $("#remaining-challenges-number").text(totalDailyChallengesCompleted);    
    
    
    $("#daily-challenges-counter-icon").prop('src', `${DailyChallengesIcons}daily_challenge_toast_${totalDailyChallengesCompleted}.png`);
	
}

function DailyChallengesGoldCounter() {

}