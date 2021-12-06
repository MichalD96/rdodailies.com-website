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
  <title>Daily Challenges</title>
<?php require_once 'assets/inc/meta-rdomap.php' ?>
</head>
<body>
  <div class="challenges-wrapper-collectorsmap">
      <h2 id="challenges-header">
        <img id="challenges-header-left" src="./assets/images/header_bg_left.png" alt="">
        <div id="challenges-header-center">
          <span data-text="menu.daily_challenges">Daily Challenges</span>
        </div>
        <img id="challenges-header-right" src="./assets/images/header_bg_right.png" alt="">
      </h2>
    </a>   
      
<?php require_once './assets/inc/widgets.php' ?>  
    
<?php require_once './assets/inc/dailies-map.php' ?>
  
<?php require_once './assets/inc/language.php' ?>
<?php require_once './assets/inc/gold-multiplier.php' ?>

<?php //require_once './assets/inc/donate-form.php' ?>
  </div>
<?php require_once 'assets/inc/footer-rdomap.php' ?> 
</body>
</html>