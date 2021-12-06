<div class="settings-input-container">

  <label class="challenge-input-container-language-label" for="DailyChallengesLanguage">
    <span class="challenges-gold-multipler">Language</span>
  </label>

  <span class="challenge-input-complete-langauge">
    <select class="language-select" id="DailyChallengesLanguage">
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=en" <? if ($language == "en") { echo 'selected'; }?>>English</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=br" <? if ($language == "br") { echo 'selected'; }?>>Brazilian</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=zh" <? if ($language == "zh") { echo 'selected'; }?>>Chinese Simplified</option>      
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=tw" <? if ($language == "tw") { echo 'selected'; }?>>Chinese Traditional</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=fr" <? if ($language == "fr") { echo 'selected'; }?>>French</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=de" <? if ($language == "de") { echo 'selected'; }?>>German</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=hu" <? if ($language == "hu") { echo 'selected'; }?>>Hungarian</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=it" <? if ($language == "it") { echo 'selected'; }?>>Italian</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=ja" <? if ($language == "ja") { echo 'selected'; }?>>Japanese</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=ko" <? if ($language == "ko") { echo 'selected'; }?>>Korean</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=mx" <? if ($language == "mx") { echo 'selected'; }?>>Mexican</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=pl" <? if ($language == "pl") { echo 'selected'; }?>>Polish</option>
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=ru" <? if ($language == "ru") { echo 'selected'; }?>>Russian</option>      
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=es" <? if ($language == "es") { echo 'selected'; }?>>Spanish</option>      
      <option value="?date=<?php echo $today->format('Y-m-d'); ?>&lang=th" <? if ($language == "th") { echo 'selected'; }?>>Thai</option>
    </select>
  </span>

</div>