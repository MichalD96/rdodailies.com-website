<?php $BountyChallenges = [1 => 
$BountyChallenge01,$BountyChallenge02,$BountyChallenge03];
sort($BountyChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($BountyChallenges as $BountyChallenge) {
//var_dump($BountyChallenges); 
?>
<?php
  if (strpos($BountyChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $BountyChallenge, $BountyChallengeImage);
    $BountyChallengeImage = $BountyChallengeImage[1][0]; } else { $BountyChallengeImage = "1"; } 
  
  if (strpos($BountyChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $BountyChallenge, $BountyChallengeNumber);
    $BountyChallengeNumber = $BountyChallengeNumber[1][0]; } else { $BountyChallengeNumber = "0"; }   
  
  if (strpos($BountyChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $BountyChallenge, $BountyChallengeGoal);
    $BountyChallengeGoal = $BountyChallengeGoal[1][0]; } else { $BountyChallengeGoal = "1"; }
?>   
		<div class="challenge-input-container">
			<span class="challenge-goal">    
				<?php echo $BountyChallengeGoal; ?>
			</span>
			
			<span class="challenge-input-container-label">
      <label for="BountyChallenge<?php echo $BountyChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"><? echo strtok($BountyChallenge, '[{'); ?></label>
      </span>
			
			<span class="challenge-input-complete">
				<input class="challenge-input-checkbox" type="checkbox" name="BountyChallenge" id="BountyChallenge<?php echo $BountyChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>" />
				<label class="challenge-input-checkbox-label" for="BountyChallenge<?php echo $BountyChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"></label>    
			</span>    
		</div>
<?php } ?>