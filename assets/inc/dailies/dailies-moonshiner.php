
<div class="challenges-container-wrapper">	
<?php $ChallengeType = "moonshiner"; ?> 
	
	<div class="challenges-title-container">
		<img class="challenges-title-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
		<span class="challenges-title">            
            <? echo ${$ChallengeType}; ?> <?php //echo $challenges; ?>
        </span>		
        
		<div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
			<input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
			<label class="daily-challenges-toggle-label" for="show-<? echo $ChallengeType; ?>-challenges"></label>
		</div>
	</div>
	
	<div class="challenges-container" id="<? echo $ChallengeType; ?>-challenges-container">
    
    <div class="<? echo ucfirst($ChallengeType); ?>ChallengesTabs">
      
      <div role="tabpanel" class="<? echo ucfirst($ChallengeType); ?>Challenges" id="<? echo ucfirst($ChallengeType); ?>ChallengesEasy">
      <?php require $ChallengeType.'/'.$ChallengeType.'-easy.php'; ?>
      </div>
      
      <div role="tabpanel" class="<? echo ucfirst($ChallengeType); ?>Challenges" id="<? echo ucfirst($ChallengeType); ?>ChallengesMedium">
      <?php require $ChallengeType.'/'.$ChallengeType.'-med.php'; ?>
      </div>
      
      <div role="tabpanel" class="<? echo ucfirst($ChallengeType); ?>Challenges active" id="<? echo ucfirst($ChallengeType); ?>ChallengesHard">
      <?php require $ChallengeType.'/'.$ChallengeType.'-hard.php'; ?>
      </div>
    
    </div>
    
    <hr class="challenges-rank-divider">		
    
    <div class="challenge-rank-container">
      
      <span class="challenge-rank-label">
        <label for="<? echo ucfirst($ChallengeType); ?>ChallengeRank"><? echo ucfirst($ChallengeType); ?> Role Rank</label>
      </span> 
      
      <span class="challenge-rank-option">
        <select class="challenge-rank-select" name="<? echo ucfirst($ChallengeType); ?>ChallengeDifficulty" id="<? echo ucfirst($ChallengeType); ?>ChallengeRank">
          <option value="<? echo ucfirst($ChallengeType); ?>ChallengesEasy">1 - 4</option>
          <option value="<? echo ucfirst($ChallengeType); ?>ChallengesMedium">5 - 14</option>
          <option value="<? echo ucfirst($ChallengeType); ?>ChallengesHard" selected>15+</option>
        </select>
      </span>  
    </div>

		
		<div class="reset-timer-container">
			<label class="reset-timer-label" for="MoonshinerResetTimer">
				<span>Moonshiner buyers list resets in</span>
			</label>
			
			<span class="reset-timer">
				<span class="moonshiner-timer-hour" id="moonshiner-timer-hour"></span>
				<span class="timer-hours">hour</span>
				<span class="moonshiner-timer-minute" id="moonshiner-timer-minute"></span>
				<span class="timer-minutes">minutes</span>
				<span class="moonshiner-timer-second" id="moonshiner-timer-second"></span>
				<span class="timer-seconds">seconds</span>
			</span>
    </div>    
        
    <hr class="challenges-rank-divider">
	
	</div>

</div>
