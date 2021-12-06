<?php require_once './assets/inc/header.php' ?>
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
  <title>Daily Challenges</title>
<?php require_once 'assets/inc/meta.php' ?>
</head>
<body>
  <div class="challenges-wrapper">
    <a style="text-decoration:none; color:#fff;" href="/">
      <h2 id="challenges-header">
        <img id="challenges-header-left" src="./assets/images/header_bg_left.png" alt="">
        <? if ($language == "de") { ?>
        <div id="challenges-header-center-de">
        <? } elseif ($language == "it") { ?>
        <div id="challenges-header-center-it">
        <? } elseif ($language == "pl") { ?>
        <div id="challenges-header-center-pl">
        <? } else { ?>
        <div id="challenges-header-center">
        <? } ?>
          <span data-text="menu.daily_challenges"><?php echo $daily_challenges; ?></span>
        </div>
        <img id="challenges-header-right" src="./assets/images/header_bg_right.png" alt=""> 
      </h2>
    </a>         
<?php require_once './assets/inc/widgets.php' ?>     
    
<?php require_once './assets/inc/dailies.php' ?>
    
<?php require_once './assets/inc/language.php' ?>
<hr class="challenges-rank-divider">
    
<?php require_once './assets/inc/gold-multiplier.php' ?>
<hr class="challenges-rank-divider">
    
<?php require_once './assets/inc/donate-form.php' ?>    
<?php require_once './assets/inc/donate-form-popup.php' ?>
<?php require_once './assets/inc/discord-invite.php' ?>          
  </div>
  
<?php require_once 'assets/inc/footer.php' ?>
  
</body>
</html>