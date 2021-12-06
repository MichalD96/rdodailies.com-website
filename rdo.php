<?php require_once './assets/inc/header.php' ?>
<?php require_once './version.php' ?>
<?php require_once './data/challenges.php' ?>
<?php
$titleDate = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$today = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$newday = date("Y-m-d");
$yesterday = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$yesterday->modify('-1 day');
$tomorrow = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$tomorrow->modify('+1 day');
$NazarDate = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daily Challenges - <?php echo $titleDate->format("F d"); ?></title>
<?php require_once 'assets/inc/meta.php' ?>
  <link rel="stylesheet" href="/assets/css/dailies-rdo-ss.css?nocache=<?php echo $nocache; ?>" />
</head>	
<body>
	
  
<!--<div id="fme-container" style="display: none;">
  <div id="next-general-event" class="fme-card">
    <img class="fme-image" id="next-general-image" />
    <div class="fme-body">
      <h3 class="fme-title" id="next-general-name"></h3>
      <p class="fme-text" id="next-general-eta"></p>
    </div>
    <span id="next-general-mobile"></span>
  </div>
  <div id="next-role-event" class="fme-card">
    <img class="fme-image" id="next-role-image" />
    <div class="fme-body">
      <h3 class="fme-title" id="next-role-name"></h3>
      <p class="fme-text" id="next-role-eta"></p>
    </div>
    <span id="next-role-mobile"></span>
  </div>
</div>-->
		 <div class="daily-challenges-wrapper-sc" id="daily-challenges-wrapper">
		 <div class="daily-challenges-container-sc">
    
	<a style="text-decoration:none; color:#fff;" href="/">
	<h2 id="challenges-sc-header">
		<img id="challenges-sc-header-left" src="./assets/images/header_bg_left.png" alt="">
		<div id="challenges-sc-header-center">
			<span data-text="menu.daily_challenges">Daily Challenges</span>
		</div>
		<img id="challenges-sc-header-right" src="./assets/images/header_bg_right.png" alt="">
	</h2>
	</a>
    
<!-- DAILY CHALLENGES CONTAINER START -->    
    <div class="daily-challenges-container">
      
      <div style="padding:2px;"></div>
      
<!-- HEADER WIDGETS -->            
      
      <div class="daily-challenge-widgets-rdo">
        
<!-- DATE TIME -->        
        <span class="daily-challenges-date-rdo"><a href="rdoforum.php<?php //echo '?date='.$DailyChallengeDate; ?>"><?php echo $DailyChallengesDate; ?></a></span>
      
      </div>
      
<?php $ChallengeType = "general"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$GeneralChallenges = [1 => $GeneralChallenge01,$GeneralChallenge02,$GeneralChallenge03,$GeneralChallenge04,$GeneralChallenge05,$GeneralChallenge06,$GeneralChallenge07];
sort($GeneralChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($GeneralChallenges as $GeneralChallenge) {
//var_dump($DailyChallenges);
?>
<?php  
  if (strpos($GeneralChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $GeneralChallenge, $GeneralChallengeImage);
    $GeneralChallengeImage = $GeneralChallengeImage[1][0]; } else { $GeneralChallengeImage = "1"; } 
  
  if (strpos($GeneralChallenge, '{') !== false) {
    preg_match_all("/\\{(.*?)\\}/", $GeneralChallenge, $GeneralChallengeNumber);
    $GeneralChallengeNumber = $GeneralChallengeNumber[1][0]; } else { $GeneralChallengeNumber = "0"; }   
    
  if (strpos($GeneralChallenge, '[') !== false) {
    preg_match_all("/\\[(.*?)\\]/", $GeneralChallenge, $GeneralChallengeGoal);
    $GeneralChallengeGoal = $GeneralChallengeGoal[1][0]; } else { $GeneralChallengeGoal = "1"; }
?> 
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo $GeneralChallengeGoal; ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="GeneralChallenge<?php echo $GeneralChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($GeneralChallenge, '[{'); ?>
    </label>
    </span>
       
  </div>
<?php } ?>
</div>
      
<?php $ChallengeType = "bounty"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$BountyChallenges = [1 => $BountyChallenge07,$BountyChallenge08,$BountyChallenge09];
sort($BountyChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($BountyChallenges as $BountyChallenge) {
//var_dump($DailyChallenges);
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
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo $BountyChallengeGoal; ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="BountyChallenge<?php echo $BountyChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($BountyChallenge, '[{'); ?>
    </label>
    </span>
       
  </div>
<?php } ?>
</div>
		
<?php $ChallengeType = "trader"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$TraderChallenges = [1 => $TraderChallenge07,$TraderChallenge08,$TraderChallenge09];
sort($TraderChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($TraderChallenges as $TraderChallenge) {
//var_dump($DailyChallenges);
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
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo strtok($TraderChallengeGoal, '.'); ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="TraderChallenge<?php echo $TraderChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($TraderChallenge, '[{'); ?>
    </label>
    </span>
       
  </div>
<?php } ?>
</div>
				
<?php $ChallengeType = "collector"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$CollectorChallenges = [1 => $CollectorChallenge07,$CollectorChallenge08,$CollectorChallenge09];
sort($CollectorChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($CollectorChallenges as $CollectorChallenge) {
//var_dump($DailyChallenges);07
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
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo $CollectorChallengeGoal; ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="CollectorChallenge<?php echo $CollectorChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($CollectorChallenge, '[{'); ?>
    </label>
    </span>
       
  </div>
<?php } ?>
</div>
      
<?php $ChallengeType = "moonshiner"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    

    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$MoonshinerChallenges = [1 => $MoonshinerChallenge07,$MoonshinerChallenge08,$MoonshinerChallenge09];
sort($MoonshinerChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($MoonshinerChallenges as $MoonshinerChallenge) {
//var_dump($DailyChallenges);
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
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo strtok($MoonshinerChallengeGoal, '.'); ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="MoonshinerChallenge<?php echo $MoonshinerChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($MoonshinerChallenge, '[{'); ?>
    </label>
    </span>
  
  </div>
<?php } ?>
</div>
      
<?php $ChallengeType = "naturalist"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo"><? echo ucfirst($ChallengeType); ?> Challenges</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    

    
    </div>
  
</div>

<div class="challenges-container-rdo">
<?php 
$NaturalistChallenges = [1 => $NaturalistChallenge07,$NaturalistChallenge08,$NaturalistChallenge09];
sort($NaturalistChallenges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($NaturalistChallenges as $NaturalistChallenge) {
//var_dump($DailyChallenges);
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
  <div class="challenge-input-container-rdoforum">    
    <span class="challenge-goal-rdoforum"><?php echo $NaturalistChallengeGoal; ?></span>   
    
    <span class="challenge-input-container-label-rdoforum">
    <label for="NaturalistChallenge<?php echo $NaturalistChallengeNumber; ?>-<?php echo $DailyChallengeDate; ?>">
      <? echo strtok($NaturalistChallenge, '[{'); ?>
    </label></span>
  
  </div>
<?php } ?>
</div>
		
    </div>  
			 
<?php $ChallengeType = "collector"; ?> 
<hr class="challenges-divider-rdo">

<div class="challenges-title-rdo-container">
    <img class="challenges-title-rdo-container-icon" src="/assets/images/daily-challenges/challenges-<? echo $ChallengeType; ?>-160.png" alt="<? echo ucfirst($ChallengeType); ?> Challenges" />
  
  <span class="challenges-title-rdo">Madam Nazar's Location</span>
  
  <div class="daily-challenges-toggle-wrapper" id="<? echo $ChallengeType; ?>-challenges-toggle">
    
    <input class="daily-challenges-toggle" type="checkbox" name="show-<? echo $ChallengeType; ?>-challenges" value="1" id="show-<? echo $ChallengeType; ?>-challenges" />
    
    </div>
  
</div>
			 
			 
			 <div style="margin-top:0px; margin-left:5px;"><img style="width:480px;" src="https://rdocdn.xyz/api/data/nazar/locations/<? echo $NazarMapLocation; ?>.png" alt="<? echo date("jS F Y"); ?> Madam Nazar Location [<? echo $NazarMapLocation; ?>]"/></div>
			 <hr class="challenges-divider-rdo">
<!-- DAILY CHALLENGES CONTAINER END -->      
		<div style="display:none;">
      <?php require_once './assets/inc/gold-multiplier.php' ?> 
    </div>
	</div>
  </div>
	
<!--Daily Challenges Wrapper Close-->
<?php require_once 'assets/inc/footer.php' ?>
</body>

</html>