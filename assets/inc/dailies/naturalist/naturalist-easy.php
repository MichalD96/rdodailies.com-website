<?php $NaturalistChallenges = [1 => 
$NaturalistChallenge01,$NaturalistChallenge02,$NaturalistChallenge03];
sort($NaturalistChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($NaturalistChallenges as $NaturalistChallenge) {
//var_dump($NaturalistChallenges); 
?>
<?php
  if (strpos($NaturalistChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $NaturalistChallenge, $NaturalistChallengeImage);
    $NaturalistChallengeImage = $NaturalistChallengeImage[1][0]; } else { $NaturalistChallengeImage = "1"; } 
  
  if (strpos($NaturalistChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $NaturalistChallenge, $NaturalistChallengeNumber);
    $NaturalistChallengeNumber = $NaturalistChallengeNumber[1][0]; } else { $NaturalistChallengeNumber = "0"; }   
  
  if (strpos($NaturalistChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $NaturalistChallenge, $NaturalistChallengeGoal);
    $NaturalistChallengeGoal = $NaturalistChallengeGoal[1][0]; } else { $NaturalistChallengeGoal = "1"; }
?>   
		<div class="challenge-input-container">
			<span class="challenge-goal">
        <?php echo $NaturalistChallengeGoal; ?>
			</span>
			
			<span class="challenge-input-container-label">
      <label for="NaturalistChallenge<?php echo $NaturalistChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"><? echo strtok($NaturalistChallenge, '[{'); ?></label>
      </span>
			
			<span class="challenge-input-complete">
				<input class="challenge-input-checkbox" type="checkbox" name="NaturalistChallenge" id="NaturalistChallenge<?php echo $NaturalistChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>" />
				<label class="challenge-input-checkbox-label" for="NaturalistChallenge<?php echo $NaturalistChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"></label>    
			</span>    
		</div>
<?php } ?>