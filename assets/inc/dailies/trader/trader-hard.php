<?php $TraderChallenges = [1 => 
$TraderChallenge07,$TraderChallenge08,$TraderChallenge09];
sort($TraderChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($TraderChallenges as $TraderChallenge) {
//var_dump($TraderChallenges); 
?>
<?php
  if (strpos($TraderChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $TraderChallenge, $TraderChallengeImage);
    $TraderChallengeImage = $TraderChallengeImage[1][0]; } else { $TraderChallengeImage = "1"; } 
  
  if (strpos($TraderChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $TraderChallenge, $TraderChallengeNumber);
    $TraderChallengeNumber = $TraderChallengeNumber[1][0]; } else { $TraderChallengeNumber = "0"; }   
  
  if (strpos($TraderChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $TraderChallenge, $TraderChallengeGoal);
    $TraderChallengeGoal = $TraderChallengeGoal[1][0]; } else { $TraderChallengeGoal = "1"; }
?>   
		<div class="challenge-input-container">
			<span class="challenge-goal">
        <?php echo strtok($TraderChallengeGoal, '.'); ?>
			</span>
			
			<span class="challenge-input-container-label">
      <label for="TraderChallenge<?php echo $TraderChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"><? echo strtok($TraderChallenge, '[{'); ?></label>
      </span>
			
			<span class="challenge-input-complete">
				<input class="challenge-input-checkbox" type="checkbox" name="TraderChallenge" id="TraderChallenge<?php echo $TraderChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>" />
				<label class="challenge-input-checkbox-label" for="TraderChallenge<?php echo $TraderChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"></label>    
			</span>    
		</div>
<?php } ?>