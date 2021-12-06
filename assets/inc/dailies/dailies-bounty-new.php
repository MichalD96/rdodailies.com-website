
<div class="challenges-container-wrapper">	
<?php $ChallengeType = "bounty"; ?> 
	
	<div class="challenges-title-container">
		<img class="challenges-title-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
		<span class="challenges-title">            
            <? echo ucfirst($ChallengeType); ?> Hunter Challenges
        </span>		
        
		<div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
			<input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
			<label class="daily-challenges-toggle-label" for="show-<? echo $ChallengeType; ?>-challenges"></label>
		</div>
	</div>
	
	<div class="challenges-container" id="bounty-challenges-container">
    
    <div class="BountyChallengesTabs">
      
      <div role="tabpanel" class="BountyChallenges" id="BountyChallengesEasy">
      <?php require 'bounty/bounty-easy.php' ?>
      </div>
      
      <div role="tabpanel" class="BountyChallenges" id="BountyChallengesMedium">
      <?php require 'bounty/bounty-med.php' ?>
      </div>
      
      <div role="tabpanel" class="BountyChallenges active" id="BountyChallengesHard">
      <?php require 'bounty/bounty-hard.php' ?>
      </div>
    
    </div>
    
<!--<hr class="challenges-rank-divider">-->
    
    <div class="challenge-rank-container">
      
      <span class="challenge-rank-label">
        <label for="BountyChallengeRank">Bounty Hunter Role Rank</label>
      </span> 
      
      <span class="challenge-rank-option">
        <select class="challenge-rank-select" name="BountyChallengeDifficulty" id="BountyChallengeRank">
          <option value="BountyChallengesEasy">1 - 4</option>
          <option value="BountyChallengesMedium">5 - 14</option>
          <option value="BountyChallengesHard" selected>15+</option>
        </select>
      </span>  
    </div>
    
    <hr class="challenges-rank-divider">
  
  </div>

</div>