<?php $ChallengeType = "completed"; ?>
<div class="challenges-container-wrapper" id="<? echo $ChallengeType; ?>-challenges-container-wrapper">
    
<div class="challenges-title-container">
    <img class="challenges-title-container-icon" src="/assets/images/daily-challenges/challenges-general-160.png" alt="Total Challenges <? echo ucfirst($ChallengeType); ?>" />
  
  <span class="challenges-title"><? echo $challenge_goals; ?></span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    <label class="daily-challenges-toggle-label" for="show-<? echo $ChallengeType; ?>-challenges">
    </label>
    
    </div>  
    
</div>	
		
	<div class="challenges-container" id="<? echo $ChallengeType; ?>-challenges-container">
		
<?php $ChallengeTypeCompleted = "general"; ?>
<?php require 'dailies-completed.php'; ?>
		
<?php $ChallengeTypeCompleted = "role"; ?>
<?php require 'dailies-completed.php'; ?>
<!--		
<?php $ChallengeTypeCompleted = "bounty"; ?>
<?php require 'dailies-completed.php'; ?>
		
<?php $ChallengeTypeCompleted = "trader"; ?>
<?php require 'dailies-completed.php'; ?>
		
<?php $ChallengeTypeCompleted = "collector"; ?>
<?php require 'dailies-completed.php'; ?>
		
<?php $ChallengeTypeCompleted = "moonshiner"; ?>
<?php require 'dailies-completed.php'; ?>
		
<?php $ChallengeTypeCompleted = "naturalist"; ?>
<?php require 'dailies-completed.php'; ?>
-->
        
        <div class="reset-timer-container">
            <label class="reset-timer-label" for="DailiesResetTimer">
                <span><?php echo $daily_challenges_reset; ?></span>
            </label>
            
            <span class="reset-timer">
                <span class="dailies-timer-hour" id="dailies-timer-hour"></span>
                <span class="dailies-timer-hours">hours</span>
                <span class="dailies-timer-minute" id="dailies-timer-minute"></span>
                <span class="timer-minutes">minutes</span>
                <span class="dailies-timer-second" id="dailies-timer-second"></span>
                <span class="timer-seconds">seconds</span>
            </span>
        </div>	

<?php require './assets/inc/dailies/reset-dailies.php'; ?>        
        
<hr class="challenges-rank-divider">
        
<?php //require 'reset-dailies.php'; ?>        
    
    </div>
    
</div>