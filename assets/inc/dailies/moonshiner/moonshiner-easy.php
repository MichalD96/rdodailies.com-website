<?php $MoonshinerChallenges = [1 => 
$MoonshinerChallenge01,$MoonshinerChallenge02,$MoonshinerChallenge03];
sort($MoonshinerChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($MoonshinerChallenges as $MoonshinerChallenge) {
//var_dump($MoonshinerChallenges); 
?>
<?php
  if (strpos($MoonshinerChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $MoonshinerChallenge, $MoonshinerChallengeImage);
    $MoonshinerChallengeImage = $MoonshinerChallengeImage[1][0]; } else { $MoonshinerChallengeImage = "1"; } 
  
  if (strpos($MoonshinerChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $MoonshinerChallenge, $MoonshinerChallengeNumber);
    $MoonshinerChallengeNumber = $MoonshinerChallengeNumber[1][0]; } else { $MoonshinerChallengeNumber = "0"; }   
  
  if (strpos($MoonshinerChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $MoonshinerChallenge, $MoonshinerChallengeGoal);
    $MoonshinerChallengeGoal = $MoonshinerChallengeGoal[1][0]; } else { $MoonshinerChallengeGoal = "1"; }
?>   
		<div class="challenge-input-container">
			<span class="challenge-goal">
        <?php echo strtok($MoonshinerChallengeGoal, '.'); ?>
			</span>
			
			<span class="challenge-input-container-label">
      <label for="MoonshinerChallenge<?php echo $MoonshinerChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"><? echo strtok($MoonshinerChallenge, '[{'); ?></label>
      </span>
			
			<span class="challenge-input-complete">
				<input class="challenge-input-checkbox" type="checkbox" name="MoonshinerChallenge" id="MoonshinerChallenge<?php echo $MoonshinerChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>" />
				<label class="challenge-input-checkbox-label" for="MoonshinerChallenge<?php echo $MoonshinerChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>"></label>    
			</span>    
		</div>
<?php } ?>