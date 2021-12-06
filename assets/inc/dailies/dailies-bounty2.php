
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
<div class="tabsct">
  <div class="BountyChallenges"><?php require 'bounty/bounty-hard.php' ?></div>
  <div class="BountyChallenges"><?php require 'bounty/bounty-easy.php' ?></div>
  <div class="BountyChallenges"><?php require 'bounty/bounty-med.php' ?></div>
  <div class="BountyChallenges"><?php require 'bounty/bounty-hard.php' ?></div>
</div>
		
    <hr class="challenges-container-divider">
	<ul class="BountyRank">
  <li style="display: none;">Default</li>
  <li>Rank 1 - 4</li>
  <li>Rank 5 - 14</li>
  <li>Rank 15+</li>
</ul>
	</div>

</div>
