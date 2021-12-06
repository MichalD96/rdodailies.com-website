<?php 
if (empty($_GET['date'])) {
$file = file_get_contents('https://rdocdn.xyz/api/challenges');
$data = json_decode($file,true);
$date = DateTime::createFromFormat('Y-m-d',$data['date']);
} else {  
$date = DateTime::createFromFormat('Y-m-d',$_GET['date']);
$dateToday = DateTime::createFromFormat('Y-m-d',$_GET['date']);
$file = file_get_contents('https://rdocdn.xyz/api/challenges/'.$date->format('Y/Y-m/').'challenges-['.$_GET['date'].'].json');
$data = json_decode($file,true);  
}

if (empty($_GET['lang'])) {$language = "en"; } else { $language = $_GET['lang']; }
require_once('challenge-lang/challenge-'.$language.'.php');

$currentDate = $data['date'];
$currentDailyChallengesDate = date("Y-m-d");
$DailyChallengesPageDate = $data['date'];

$GeneralChallengeKeyData01 = strtolower($data['general'][0]['key']); 
$GeneralChallengeKeyData02 = strtolower($data['general'][1]['key']); 
$GeneralChallengeKeyData03 = strtolower($data['general'][2]['key']); 
$GeneralChallengeKeyData04 = strtolower($data['general'][3]['key']); 
$GeneralChallengeKeyData05 = strtolower($data['general'][4]['key']);
$GeneralChallengeKeyData06 = strtolower($data['general'][5]['key']); 
$GeneralChallengeKeyData07 = strtolower($data['general'][6]['key']);

$BountyChallengeKeyData01 = strtolower($data['bounty-easy'][0]['key']);   
$BountyChallengeKeyData02 = strtolower($data['bounty-easy'][1]['key']);   
$BountyChallengeKeyData03 = strtolower($data['bounty-easy'][2]['key']); 
$BountyChallengeKeyData04 = strtolower($data['bounty-medium'][0]['key']);   
$BountyChallengeKeyData05 = strtolower($data['bounty-medium'][1]['key']);  
$BountyChallengeKeyData06 = strtolower($data['bounty-medium'][2]['key']); 
$BountyChallengeKeyData07 = strtolower($data['bounty-hard'][0]['key']);  
$BountyChallengeKeyData08 = strtolower($data['bounty-hard'][1]['key']);  
$BountyChallengeKeyData09 = strtolower($data['bounty-hard'][2]['key']);

$TraderChallengeKeyData01 = strtolower($data['trader-easy'][0]['key']);   
$TraderChallengeKeyData02 = strtolower($data['trader-easy'][1]['key']);   
$TraderChallengeKeyData03 = strtolower($data['trader-easy'][2]['key']); 
$TraderChallengeKeyData04 = strtolower($data['trader-medium'][0]['key']);   
$TraderChallengeKeyData05 = strtolower($data['trader-medium'][1]['key']);  
$TraderChallengeKeyData06 = strtolower($data['trader-medium'][2]['key']); 
$TraderChallengeKeyData07 = strtolower($data['trader-hard'][0]['key']);  
$TraderChallengeKeyData08 = strtolower($data['trader-hard'][1]['key']);  
$TraderChallengeKeyData09 = strtolower($data['trader-hard'][2]['key']); 

$CollectorChallengeKeyData01 = strtolower($data['collector-easy'][0]['key']);   
$CollectorChallengeKeyData02 = strtolower($data['collector-easy'][1]['key']);   
$CollectorChallengeKeyData03 = strtolower($data['collector-easy'][2]['key']); 
$CollectorChallengeKeyData04 = strtolower($data['collector-medium'][0]['key']);   
$CollectorChallengeKeyData05 = strtolower($data['collector-medium'][1]['key']);  
$CollectorChallengeKeyData06 = strtolower($data['collector-medium'][2]['key']); 
$CollectorChallengeKeyData07 = strtolower($data['collector-hard'][0]['key']);  
$CollectorChallengeKeyData08 = strtolower($data['collector-hard'][1]['key']);  
$CollectorChallengeKeyData09 = strtolower($data['collector-hard'][2]['key']);

$MoonshinerChallengeKeyData01 = strtolower($data['moonshiner-easy'][0]['key']);   
$MoonshinerChallengeKeyData02 = strtolower($data['moonshiner-easy'][1]['key']);   
$MoonshinerChallengeKeyData03 = strtolower($data['moonshiner-easy'][2]['key']); 
$MoonshinerChallengeKeyData04 = strtolower($data['moonshiner-medium'][0]['key']);   
$MoonshinerChallengeKeyData05 = strtolower($data['moonshiner-medium'][1]['key']);  
$MoonshinerChallengeKeyData06 = strtolower($data['moonshiner-medium'][2]['key']); 
$MoonshinerChallengeKeyData07 = strtolower($data['moonshiner-hard'][0]['key']);  
$MoonshinerChallengeKeyData08 = strtolower($data['moonshiner-hard'][1]['key']);  
$MoonshinerChallengeKeyData09 = strtolower($data['moonshiner-hard'][2]['key']);

$NaturalistChallengeKeyData01 = strtolower($data['naturalist-easy'][0]['key']);   
$NaturalistChallengeKeyData02 = strtolower($data['naturalist-easy'][1]['key']);   
$NaturalistChallengeKeyData03 = strtolower($data['naturalist-easy'][2]['key']); 
$NaturalistChallengeKeyData04 = strtolower($data['naturalist-medium'][0]['key']);   
$NaturalistChallengeKeyData05 = strtolower($data['naturalist-medium'][1]['key']);  
$NaturalistChallengeKeyData06 = strtolower($data['naturalist-medium'][2]['key']); 
$NaturalistChallengeKeyData07 = strtolower($data['naturalist-hard'][0]['key']);  
$NaturalistChallengeKeyData08 = strtolower($data['naturalist-hard'][1]['key']);  
$NaturalistChallengeKeyData09 = strtolower($data['naturalist-hard'][2]['key']);

$GeneralChallengeGoalData01 = strtolower($data['general'][0]['goal']);   
$GeneralChallengeGoalData02 = strtolower($data['general'][1]['goal']);   
$GeneralChallengeGoalData03 = strtolower($data['general'][2]['goal']); 
$GeneralChallengeGoalData04 = strtolower($data['general'][3]['goal']);   
$GeneralChallengeGoalData05 = strtolower($data['general'][4]['goal']);   
$GeneralChallengeGoalData06 = strtolower($data['general'][5]['goal']);   
$GeneralChallengeGoalData07 = strtolower($data['general'][6]['goal']);       

$BountyChallengeGoalData01 = strtolower($data['bounty-easy'][0]['goal']);   
$BountyChallengeGoalData02 = strtolower($data['bounty-easy'][1]['goal']);   
$BountyChallengeGoalData03 = strtolower($data['bounty-easy'][2]['goal']); 
$BountyChallengeGoalData04 = strtolower($data['bounty-medium'][0]['goal']);   
$BountyChallengeGoalData05 = strtolower($data['bounty-medium'][1]['goal']);   
$BountyChallengeGoalData06 = strtolower($data['bounty-medium'][2]['goal']);   
$BountyChallengeGoalData07 = strtolower($data['bounty-hard'][0]['goal']);   
$BountyChallengeGoalData08 = strtolower($data['bounty-hard'][1]['goal']);     
$BountyChallengeGoalData09 = strtolower($data['bounty-hard'][2]['goal']);    

$TraderChallengeGoalData01 = strtolower($data['trader-easy'][0]['goal']);   
$TraderChallengeGoalData02 = strtolower($data['trader-easy'][1]['goal']);   
$TraderChallengeGoalData03 = strtolower($data['trader-easy'][2]['goal']); 
$TraderChallengeGoalData04 = strtolower($data['trader-medium'][0]['goal']);   
$TraderChallengeGoalData05 = strtolower($data['trader-medium'][1]['goal']);   
$TraderChallengeGoalData06 = strtolower($data['trader-medium'][2]['goal']);   
$TraderChallengeGoalData07 = strtolower($data['trader-hard'][0]['goal']);   
$TraderChallengeGoalData08 = strtolower($data['trader-hard'][1]['goal']);     
$TraderChallengeGoalData09 = strtolower($data['trader-hard'][2]['goal']);   

$CollectorChallengeGoalData01 = strtolower($data['collector-easy'][0]['goal']);   
$CollectorChallengeGoalData02 = strtolower($data['collector-easy'][1]['goal']);   
$CollectorChallengeGoalData03 = strtolower($data['collector-easy'][2]['goal']); 
$CollectorChallengeGoalData04 = strtolower($data['collector-medium'][0]['goal']);   
$CollectorChallengeGoalData05 = strtolower($data['collector-medium'][1]['goal']);   
$CollectorChallengeGoalData06 = strtolower($data['collector-medium'][2]['goal']);   
$CollectorChallengeGoalData07 = strtolower($data['collector-hard'][0]['goal']);   
$CollectorChallengeGoalData08 = strtolower($data['collector-hard'][1]['goal']);     
$CollectorChallengeGoalData09 = strtolower($data['collector-hard'][2]['goal']);     

$MoonshinerChallengeGoalData01 = strtolower($data['moonshiner-easy'][0]['goal']);   
$MoonshinerChallengeGoalData02 = strtolower($data['moonshiner-easy'][1]['goal']);   
$MoonshinerChallengeGoalData03 = strtolower($data['moonshiner-easy'][2]['goal']); 
$MoonshinerChallengeGoalData04 = strtolower($data['moonshiner-medium'][0]['goal']);   
$MoonshinerChallengeGoalData05 = strtolower($data['moonshiner-medium'][1]['goal']);   
$MoonshinerChallengeGoalData06 = strtolower($data['moonshiner-medium'][2]['goal']);   
$MoonshinerChallengeGoalData07 = strtolower($data['moonshiner-hard'][0]['goal']);   
$MoonshinerChallengeGoalData08 = strtolower($data['moonshiner-hard'][1]['goal']);     
$MoonshinerChallengeGoalData09 = strtolower($data['moonshiner-hard'][2]['goal']);    

$NaturalistChallengeGoalData01 = strtolower($data['naturalist-easy'][0]['goal']);   
$NaturalistChallengeGoalData02 = strtolower($data['naturalist-easy'][1]['goal']);   
$NaturalistChallengeGoalData03 = strtolower($data['naturalist-easy'][2]['goal']); 
$NaturalistChallengeGoalData04 = strtolower($data['naturalist-medium'][0]['goal']);   
$NaturalistChallengeGoalData05 = strtolower($data['naturalist-medium'][1]['goal']);   
$NaturalistChallengeGoalData06 = strtolower($data['naturalist-medium'][2]['goal']);   
$NaturalistChallengeGoalData07 = strtolower($data['naturalist-hard'][0]['goal']);   
$NaturalistChallengeGoalData08 = strtolower($data['naturalist-hard'][1]['goal']);     
$NaturalistChallengeGoalData09 = strtolower($data['naturalist-hard'][2]['goal']);    

$BountyChallengeDifficulty01 = strtolower($data['bounty-easy'][0]['difficulty']);   
$BountyChallengeDifficulty02 = strtolower($data['bounty-easy'][1]['difficulty']);   
$BountyChallengeDifficulty03 = strtolower($data['bounty-easy'][2]['difficulty']); 
$BountyChallengeDifficulty04 = strtolower($data['bounty-medium'][0]['difficulty']);   
$BountyChallengeDifficulty05 = strtolower($data['bounty-medium'][1]['difficulty']);   
$BountyChallengeDifficulty06 = strtolower($data['bounty-medium'][2]['difficulty']); 
$BountyChallengeDifficulty07 = strtolower($data['bounty-hard'][0]['difficulty']); 
$BountyChallengeDifficulty08 = strtolower($data['bounty-hard'][1]['difficulty']);   
$BountyChallengeDifficulty09 = strtolower($data['bounty-hard'][2]['difficulty']);  

$TraderChallengeDifficulty01 = strtolower($data['trader-easy'][0]['difficulty']);   
$TraderChallengeDifficulty02 = strtolower($data['trader-easy'][1]['difficulty']);   
$TraderChallengeDifficulty03 = strtolower($data['trader-easy'][2]['difficulty']); 
$TraderChallengeDifficulty04 = strtolower($data['trader-medium'][0]['difficulty']);   
$TraderChallengeDifficulty05 = strtolower($data['trader-medium'][1]['difficulty']);   
$TraderChallengeDifficulty06 = strtolower($data['trader-medium'][2]['difficulty']); 
$TraderChallengeDifficulty07 = strtolower($data['trader-hard'][0]['difficulty']); 
$TraderChallengeDifficulty08 = strtolower($data['trader-hard'][1]['difficulty']);   
$TraderChallengeDifficulty09 = strtolower($data['trader-hard'][2]['difficulty']); 

$CollectorChallengeDifficulty01 = strtolower($data['collector-easy'][0]['difficulty']);   
$CollectorChallengeDifficulty02 = strtolower($data['collector-easy'][1]['difficulty']);   
$CollectorChallengeDifficulty03 = strtolower($data['collector-easy'][2]['difficulty']); 
$CollectorChallengeDifficulty04 = strtolower($data['collector-medium'][0]['difficulty']);   
$CollectorChallengeDifficulty05 = strtolower($data['collector-medium'][1]['difficulty']);   
$CollectorChallengeDifficulty06 = strtolower($data['collector-medium'][2]['difficulty']); 
$CollectorChallengeDifficulty07 = strtolower($data['collector-hard'][0]['difficulty']); 
$CollectorChallengeDifficulty08 = strtolower($data['collector-hard'][1]['difficulty']);   
$CollectorChallengeDifficulty09 = strtolower($data['collector-hard'][2]['difficulty']);   

$MoonshinerChallengeDifficulty01 = strtolower($data['moonshiner-easy'][0]['difficulty']);   
$MoonshinerChallengeDifficulty02 = strtolower($data['moonshiner-easy'][1]['difficulty']);   
$MoonshinerChallengeDifficulty03 = strtolower($data['moonshiner-easy'][2]['difficulty']); 
$MoonshinerChallengeDifficulty04 = strtolower($data['moonshiner-medium'][0]['difficulty']);   
$MoonshinerChallengeDifficulty05 = strtolower($data['moonshiner-medium'][1]['difficulty']);   
$MoonshinerChallengeDifficulty06 = strtolower($data['moonshiner-medium'][2]['difficulty']); 
$MoonshinerChallengeDifficulty07 = strtolower($data['moonshiner-hard'][0]['difficulty']); 
$MoonshinerChallengeDifficulty08 = strtolower($data['moonshiner-hard'][1]['difficulty']);   
$MoonshinerChallengeDifficulty09 = strtolower($data['moonshiner-hard'][2]['difficulty']);  

$NaturalistChallengeDifficulty01 = strtolower($data['naturalist-easy'][0]['difficulty']);   
$NaturalistChallengeDifficulty02 = strtolower($data['naturalist-easy'][1]['difficulty']);   
$NaturalistChallengeDifficulty03 = strtolower($data['naturalist-easy'][2]['difficulty']); 
$NaturalistChallengeDifficulty04 = strtolower($data['naturalist-medium'][0]['difficulty']);   
$NaturalistChallengeDifficulty05 = strtolower($data['naturalist-medium'][1]['difficulty']);   
$NaturalistChallengeDifficulty06 = strtolower($data['naturalist-medium'][2]['difficulty']); 
$NaturalistChallengeDifficulty07 = strtolower($data['naturalist-hard'][0]['difficulty']); 
$NaturalistChallengeDifficulty08 = strtolower($data['naturalist-hard'][1]['difficulty']);   
$NaturalistChallengeDifficulty09 = strtolower($data['naturalist-hard'][2]['difficulty']); 

$DailyChallengesDate = new DateTime($DailyChallengesPageDate);

$NazarMapLocation = $data['nazar'];

$Weekly = $data['weekly'];

$GeneralChallenge01 = ${$GeneralChallengeKeyData01} . '['.$GeneralChallengeGoalData01.']' ."{01}";
$GeneralChallenge02 = ${$GeneralChallengeKeyData02} . '['.$GeneralChallengeGoalData02.']' ."{02}";
$GeneralChallenge03 = ${$GeneralChallengeKeyData03} . '['.$GeneralChallengeGoalData03.']' ."{03}";
$GeneralChallenge04 = ${$GeneralChallengeKeyData04} . '['.$GeneralChallengeGoalData04.']' ."{04}";
$GeneralChallenge05 = ${$GeneralChallengeKeyData05} . '['.$GeneralChallengeGoalData05.']' ."{05}";
$GeneralChallenge06 = ${$GeneralChallengeKeyData06} . '['.$GeneralChallengeGoalData06.']' ."{06}";
$GeneralChallenge07 = ${$GeneralChallengeKeyData07} . '['.$GeneralChallengeGoalData07.']' ."{07}";

$BountyChallenge01 = ${$BountyChallengeKeyData01} . '['.$BountyChallengeGoalData01.']' ."{01}";
$BountyChallenge02 = ${$BountyChallengeKeyData02} . '['.$BountyChallengeGoalData02.']' ."{02}";
$BountyChallenge03 = ${$BountyChallengeKeyData03} . '['.$BountyChallengeGoalData03.']' ."{03}";
$BountyChallenge04 = ${$BountyChallengeKeyData04} . '['.$BountyChallengeGoalData04.']' ."{04}";
$BountyChallenge05 = ${$BountyChallengeKeyData05} . '['.$BountyChallengeGoalData05.']' ."{05}";
$BountyChallenge06 = ${$BountyChallengeKeyData06} . '['.$BountyChallengeGoalData06.']' ."{06}";
$BountyChallenge07 = ${$BountyChallengeKeyData07} . '['.$BountyChallengeGoalData07.']' ."{07}";
$BountyChallenge08 = ${$BountyChallengeKeyData08} . '['.$BountyChallengeGoalData08.']' ."{08}";
$BountyChallenge09 = ${$BountyChallengeKeyData09} . '['.$BountyChallengeGoalData09.']' ."{09}";

$TraderChallenge01 = ${$TraderChallengeKeyData01} . '['.$TraderChallengeGoalData01.']' ."{01}";
$TraderChallenge02 = ${$TraderChallengeKeyData02} . '['.$TraderChallengeGoalData02.']' ."{02}";
$TraderChallenge03 = ${$TraderChallengeKeyData03} . '['.$TraderChallengeGoalData03.']' ."{03}";
$TraderChallenge04 = ${$TraderChallengeKeyData04} . '['.$TraderChallengeGoalData04.']' ."{04}";
$TraderChallenge05 = ${$TraderChallengeKeyData05} . '['.$TraderChallengeGoalData05.']' ."{05}";
$TraderChallenge06 = ${$TraderChallengeKeyData06} . '['.$TraderChallengeGoalData06.']' ."{06}";
$TraderChallenge07 = ${$TraderChallengeKeyData07} . '['.$TraderChallengeGoalData07.']' ."{07}";
$TraderChallenge08 = ${$TraderChallengeKeyData08} . '['.$TraderChallengeGoalData08.']' ."{08}";
$TraderChallenge09 = ${$TraderChallengeKeyData09} . '['.$TraderChallengeGoalData09.']' ."{09}";

$CollectorChallenge01 = ${$CollectorChallengeKeyData01} . '['.$CollectorChallengeGoalData01.']' ."{01}";
$CollectorChallenge02 = ${$CollectorChallengeKeyData02} . '['.$CollectorChallengeGoalData02.']' ."{02}";
$CollectorChallenge03 = ${$CollectorChallengeKeyData03} . '['.$CollectorChallengeGoalData03.']' ."{03}";
$CollectorChallenge04 = ${$CollectorChallengeKeyData04} . '['.$CollectorChallengeGoalData04.']' ."{04}";
$CollectorChallenge05 = ${$CollectorChallengeKeyData05} . '['.$CollectorChallengeGoalData05.']' ."{05}";
$CollectorChallenge06 = ${$CollectorChallengeKeyData06} . '['.$CollectorChallengeGoalData06.']' ."{06}";
$CollectorChallenge07 = ${$CollectorChallengeKeyData07} . '['.$CollectorChallengeGoalData07.']' ."{07}";
$CollectorChallenge08 = ${$CollectorChallengeKeyData08} . '['.$CollectorChallengeGoalData08.']' ."{08}";
$CollectorChallenge09 = ${$CollectorChallengeKeyData09} . '['.$CollectorChallengeGoalData09.']' ."{09}";

$MoonshinerChallenge01 = ${$MoonshinerChallengeKeyData01} . '['.$MoonshinerChallengeGoalData01.']' ."{01}";
$MoonshinerChallenge02 = ${$MoonshinerChallengeKeyData02} . '['.$MoonshinerChallengeGoalData02.']' ."{02}";
$MoonshinerChallenge03 = ${$MoonshinerChallengeKeyData03} . '['.$MoonshinerChallengeGoalData03.']' ."{03}";
$MoonshinerChallenge04 = ${$MoonshinerChallengeKeyData04} . '['.$MoonshinerChallengeGoalData04.']' ."{04}";
$MoonshinerChallenge05 = ${$MoonshinerChallengeKeyData05} . '['.$MoonshinerChallengeGoalData05.']' ."{05}";
$MoonshinerChallenge06 = ${$MoonshinerChallengeKeyData06} . '['.$MoonshinerChallengeGoalData06.']' ."{06}";
$MoonshinerChallenge07 = ${$MoonshinerChallengeKeyData07} . '['.$MoonshinerChallengeGoalData07.']' ."{07}";
$MoonshinerChallenge08 = ${$MoonshinerChallengeKeyData08} . '['.$MoonshinerChallengeGoalData08.']' ."{08}";
$MoonshinerChallenge09 = ${$MoonshinerChallengeKeyData09} . '['.$MoonshinerChallengeGoalData09.']' ."{09}";


$NaturalistChallenge01 = ${$NaturalistChallengeKeyData01} . '['.$NaturalistChallengeGoalData01.']' ."{01}";
$NaturalistChallenge02 = ${$NaturalistChallengeKeyData02} . '['.$NaturalistChallengeGoalData02.']' ."{02}";
$NaturalistChallenge03 = ${$NaturalistChallengeKeyData03} . '['.$NaturalistChallengeGoalData03.']' ."{03}";
$NaturalistChallenge04 = ${$NaturalistChallengeKeyData04} . '['.$NaturalistChallengeGoalData04.']' ."{04}";
$NaturalistChallenge05 = ${$NaturalistChallengeKeyData05} . '['.$NaturalistChallengeGoalData05.']' ."{05}";
$NaturalistChallenge06 = ${$NaturalistChallengeKeyData06} . '['.$NaturalistChallengeGoalData06.']' ."{06}";
$NaturalistChallenge07 = ${$NaturalistChallengeKeyData07} . '['.$NaturalistChallengeGoalData07.']' ."{07}";
$NaturalistChallenge08 = ${$NaturalistChallengeKeyData08} . '['.$NaturalistChallengeGoalData08.']' ."{08}";
$NaturalistChallenge09 = ${$NaturalistChallengeKeyData09} . '['.$NaturalistChallengeGoalData09.']' ."{09}";

$DailyChallengeDate = $DailyChallengesDate->format('Y-m-d');
$DailyChallengesDate = $DailyChallengesDate->format('F d');
?>