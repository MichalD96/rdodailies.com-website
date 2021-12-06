<?php $CollectorChallenges = [1 => 
$CollectorChallenge04,$CollectorChallenge05,$CollectorChallenge06];
sort($CollectorChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($CollectorChallenges as $CollectorChallenge) {
//var_dump($CollectorChallenges); 
?>
<?php
  if (strpos($CollectorChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $CollectorChallenge, $CollectorChallengeImage);
    $CollectorChallengeImage = $CollectorChallengeImage[1][0]; } else { $CollectorChallengeImage = "1"; } 
  
  if (strpos($CollectorChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $CollectorChallenge, $CollectorChallengeNumber);
    $CollectorChallengeNumber = $CollectorChallengeNumber[1][0]; } else { $CollectorChallengeNumber = "0"; }   
  
  if (strpos($CollectorChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $CollectorChallenge, $CollectorChallengeGoal);
    $CollectorChallengeGoal = $CollectorChallengeGoal[1][0]; } else { $CollectorChallengeGoal = "1"; }
?>   
		<div class="challenge-input-container">
			<span class="challenge-goal">
        <?php echo $CollectorChallengeGoal; ?>
			</span>
			
			<span class="challenge-input-container-label">
      <label for="CollectorChallenge<?php echo $CollectorChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"><? echo strtok($CollectorChallenge, '[{'); ?></label>
      </span>
			
			<span class="challenge-input-complete">
				<input class="challenge-input-checkbox" type="checkbox" name="CollectorChallenge" id="CollectorChallenge<?php echo $CollectorChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>" />
				<label class="challenge-input-checkbox-label" for="CollectorChallenge<?php echo $CollectorChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"></label>    
			</span>    
		</div>
<?php } ?>