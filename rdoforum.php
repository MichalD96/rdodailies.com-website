<?php require_once './assets/inc/header.php' ?>
<?php require_once './version.php' ?>
<?php if($_GET){ $DailyChallengesPageDate = $_GET['date']; ?>
<?php require_once './data/challenges-history.php' ?>
<?php } if(!$_GET){ ?>
<?php require_once './data/challenges.php' ?>
<? } ?>
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
<body>	<br />
  <div class="daily-challenges-site-wrapper" style="background-color:#000; text-align:center;">
	  <br />
    <div class="daily-challenges-ss-wrapper" style="background-color:#000; text-align:center;">
      <div style="background-color:#000; text-align:center;">
      <a href="https://rdodailies.com/" rel="external nofollow noopener" target="_blank">
        <img src="https://rdocdn.xyz/dailies/<?php echo $titleDate->format("Y"); ?>/<?php echo $titleDate->format("Y-m"); ?>/challenges-[<? echo $DailyChallengeDate; ?>].png" alt="<?php echo $titleDate->format("jS F Y"); ?> Daily Challenges"/>
      </a>
	  <a href="https://discord.gg/YDQyjTz7Gq" rel="external nofollow noopener" target="_blank">
	  <div style="background-color:#000; text-align:center;">
		  <img src="/assets/images/discord-440.png" />
	  </div>
				</a>
	<p></p>
	<br />
	<p></p>
  </div>
	</div>
</body>
</html>
	