<div class="challenge-input-container">
	<span class="challenge-goal" id="<? echo $ChallengeTypeCompleted; ?>-challenges-completed">0</span>
		
	<label class="challenge-input-container-label" for="<? echo ucfirst($ChallengeTypeCompleted); ?>ChallengesCompleted-<?php echo $DailyChallengeDate; ?>">
		<span class="<? echo $ChallengeTypeCompleted; ?>-challenges-completed">
			<? echo ucfirst($ChallengeTypeCompleted); ?> Challenges Completed
		</span>
	</label>
		
	<span class="challenge-input-complete">
		
	<input class="challenge-input-checkbox-<? echo $ChallengeTypeCompleted; ?>" type="checkbox" name="<? echo ucfirst($ChallengeTypeCompleted); ?>ChallengesCompleted" id="<? echo ucfirst($ChallengeTypeCompleted); ?>ChallengesCompleted-<?php echo $DailyChallengeDate; ?>" />
			
		
	<label class="challenge-input-checkbox-<? echo $ChallengeTypeCompleted; ?>-label" for="<? echo ucfirst($ChallengeTypeCompleted); ?>ChallengesCompleted-<?php echo $DailyChallengeDate; ?>">			
	</label>
		
	</span>
</div>