
<div class="widget-bar">

<!-- CHALLENGES DATE -->
    <span class="challenges-date-widget" id="challenges-date-widget">
<? if ("2021-04-01" == "$DailyChallengesPageDate") { ?>
        <span class="challenges-date-arrow">&nbsp;</span>        
<? } else { ?>    
        <? if ($language == "") { ?>
        <a href="?date=<?php echo $yesterday->format('Y-m-d'); ?>">
        <? } else { ?>
        <a href="?date=<?php echo $yesterday->format('Y-m-d'); ?>&lang=<? echo $language; ?>">
        <? }?>
            <img class="challenges-date-arrow" src="assets/images/selection_left.png" alt="arrow">
        </a>  
<? } ?>        
    <?php echo $DailyChallengesDate; ?>
<? if ($currentDailyChallengesDate == "$DailyChallengesPageDate") { ?>        
<? } else { ?>
        <? if ($language == "") { ?>
        <a href="?date=<?php echo $tomorrow->format('Y-m-d'); ?>">
        <? } else { ?>
        <a href="?date=<?php echo $tomorrow->format('Y-m-d'); ?>&lang=<? echo $language; ?>">
        <? }?>
            <img class="challenges-date-arrow" src="assets/images/selection_right.png" alt="arrow">
        </a>        
<? } ?>        
    </span>

<!-- TIME IN GAME -->
    <span class="game-time-widget" id="game-time-widget">
    00:00
    </span>

<!-- GOLD -->
    <span class="gold-widget" id="gold-widget">
                    <img class="gold-count-icon" src="/assets/images/daily-challenge-icons/challenge_gold.png">
        <span id="gold-count"></span>
    </span>
    
<!-- CHALLENGES REMAINING -->
    <span class="challenges-remaining-widget" id="challenges-remaining-widget">
                <h2 id="remaining-challenges">
            <img id="remaining-challenges-left" src="./assets/images/icons/remaining-challenges-bg-left.png" alt="">
            <div id="remaining-challenges-center">
                <span class="remaining-challenges-number" id="challenges-remaining-icon"></span>
            </div>
            <img id="remaining-challenges-right" src="./assets/images/icons/remaining-challenges-bg-right.png" alt="">
        </h2>
        
    </span>
    
</div>
<hr class="challenges-divider">
<div style="padding-bottom:8px;"></div>
