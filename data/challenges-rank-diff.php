<?php 
if (empty($_GET['date'])) {
$file = file_get_contents('https://rdocdn.xyz/GetChallenges/api/challenges/challenges.json');
$data = json_decode($file,true);
$date = DateTime::createFromFormat('Y-m-d',$data['date']);
} else {  
$date = DateTime::createFromFormat('Y-m-d',$_GET['date']);
$dateToday = DateTime::createFromFormat('Y-m-d',$_GET['date']);
$file = file_get_contents('https://rdocdn.xyz/GetChallenges/api/challenges/'.$date->format('Y/Y-m/').'challenges-['.$_GET['date'].'].json');
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

$BountyChallengeKeyData01 = strtolower($data['bounty'][0]['key']);   
$BountyChallengeKeyData02 = strtolower($data['bounty'][1]['key']);   
$BountyChallengeKeyData03 = strtolower($data['bounty'][2]['key']); 
$BountyChallengeKeyData04 = strtolower($data['bounty'][3]['key']);   
$BountyChallengeKeyData05 = strtolower($data['bounty'][4]['key']);   
$BountyChallengeKeyData06 = strtolower($data['bounty'][5]['key']); 
$BountyChallengeKeyData07 = strtolower($data['bounty'][6]['key']);   
$BountyChallengeKeyData08 = strtolower($data['bounty'][7]['key']);   
$BountyChallengeKeyData09 = strtolower($data['bounty'][8]['key']); 

$TraderChallengeKeyData01 = strtolower($data['trader'][0]['key']);   
$TraderChallengeKeyData02 = strtolower($data['trader'][1]['key']);   
$TraderChallengeKeyData03 = strtolower($data['trader'][2]['key']); 
$TraderChallengeKeyData04 = strtolower($data['trader'][3]['key']);   
$TraderChallengeKeyData05 = strtolower($data['trader'][4]['key']);   
$TraderChallengeKeyData06 = strtolower($data['trader'][5]['key']); 
$TraderChallengeKeyData07 = strtolower($data['trader'][6]['key']);   
$TraderChallengeKeyData08 = strtolower($data['trader'][7]['key']);   
$TraderChallengeKeyData09 = strtolower($data['trader'][8]['key']);  

$CollectorChallengeKeyData01 = strtolower($data['collector'][0]['key']);   
$CollectorChallengeKeyData02 = strtolower($data['collector'][1]['key']);   
$CollectorChallengeKeyData03 = strtolower($data['collector'][2]['key']); 
$CollectorChallengeKeyData04 = strtolower($data['collector'][3]['key']);   
$CollectorChallengeKeyData05 = strtolower($data['collector'][4]['key']);   
$CollectorChallengeKeyData06 = strtolower($data['collector'][5]['key']); 
$CollectorChallengeKeyData07 = strtolower($data['collector'][6]['key']);   
$CollectorChallengeKeyData08 = strtolower($data['collector'][7]['key']);   
$CollectorChallengeKeyData09 = strtolower($data['collector'][8]['key']); 

$MoonshinerChallengeKeyData01 = strtolower($data['moonshiner'][0]['key']);   
$MoonshinerChallengeKeyData02 = strtolower($data['moonshiner'][1]['key']);   
$MoonshinerChallengeKeyData03 = strtolower($data['moonshiner'][2]['key']); 
$MoonshinerChallengeKeyData04 = strtolower($data['moonshiner'][3]['key']);   
$MoonshinerChallengeKeyData05 = strtolower($data['moonshiner'][4]['key']);   
$MoonshinerChallengeKeyData06 = strtolower($data['moonshiner'][5]['key']); 
$MoonshinerChallengeKeyData07 = strtolower($data['moonshiner'][6]['key']);   
$MoonshinerChallengeKeyData08 = strtolower($data['moonshiner'][7]['key']);   
$MoonshinerChallengeKeyData09 = strtolower($data['moonshiner'][8]['key']); 

$NaturalistChallengeKeyData01 = strtolower($data['naturalist'][0]['key']);   
$NaturalistChallengeKeyData02 = strtolower($data['naturalist'][1]['key']);   
$NaturalistChallengeKeyData03 = strtolower($data['naturalist'][2]['key']); 
$NaturalistChallengeKeyData04 = strtolower($data['naturalist'][3]['key']);   
$NaturalistChallengeKeyData05 = strtolower($data['naturalist'][4]['key']);   
$NaturalistChallengeKeyData06 = strtolower($data['naturalist'][5]['key']); 
$NaturalistChallengeKeyData07 = strtolower($data['naturalist'][6]['key']);   
$NaturalistChallengeKeyData08 = strtolower($data['naturalist'][7]['key']);   
$NaturalistChallengeKeyData09 = strtolower($data['naturalist'][8]['key']); 

$GeneralChallengeGoalData01 = strtolower($data['general'][0]['goal']);   
$GeneralChallengeGoalData02 = strtolower($data['general'][1]['goal']);   
$GeneralChallengeGoalData03 = strtolower($data['general'][2]['goal']); 
$GeneralChallengeGoalData04 = strtolower($data['general'][3]['goal']);   
$GeneralChallengeGoalData05 = strtolower($data['general'][4]['goal']);   
$GeneralChallengeGoalData06 = strtolower($data['general'][5]['goal']); 
$GeneralChallengeGoalData07 = strtolower($data['general'][6]['goal']);     

$BountyChallengeGoalData01 = strtolower($data['bounty'][0]['goal']);   
$BountyChallengeGoalData02 = strtolower($data['bounty'][1]['goal']);   
$BountyChallengeGoalData03 = strtolower($data['bounty'][2]['goal']); 
$BountyChallengeGoalData04 = strtolower($data['bounty'][3]['goal']);   
$BountyChallengeGoalData05 = strtolower($data['bounty'][4]['goal']);   
$BountyChallengeGoalData06 = strtolower($data['bounty'][5]['goal']); 
$BountyChallengeGoalData07 = strtolower($data['bounty'][6]['goal']); 
$BountyChallengeGoalData08 = strtolower($data['bounty'][7]['goal']);   
$BountyChallengeGoalData09 = strtolower($data['bounty'][8]['goal']);  

$TraderChallengeGoalData01 = strtolower($data['trader'][0]['goal']);   
$TraderChallengeGoalData02 = strtolower($data['trader'][1]['goal']);   
$TraderChallengeGoalData03 = strtolower($data['trader'][2]['goal']); 
$TraderChallengeGoalData04 = strtolower($data['trader'][3]['goal']);   
$TraderChallengeGoalData05 = strtolower($data['trader'][4]['goal']);   
$TraderChallengeGoalData06 = strtolower($data['trader'][5]['goal']); 
$TraderChallengeGoalData07 = strtolower($data['trader'][6]['goal']); 
$TraderChallengeGoalData08 = strtolower($data['trader'][7]['goal']);   
$TraderChallengeGoalData09 = strtolower($data['trader'][8]['goal']); 

$CollectorChallengeGoalData01 = strtolower($data['collector'][0]['goal']);   
$CollectorChallengeGoalData02 = strtolower($data['collector'][1]['goal']);   
$CollectorChallengeGoalData03 = strtolower($data['collector'][2]['goal']); 
$CollectorChallengeGoalData04 = strtolower($data['collector'][3]['goal']);   
$CollectorChallengeGoalData05 = strtolower($data['collector'][4]['goal']);   
$CollectorChallengeGoalData06 = strtolower($data['collector'][5]['goal']); 
$CollectorChallengeGoalData07 = strtolower($data['collector'][6]['goal']); 
$CollectorChallengeGoalData08 = strtolower($data['collector'][7]['goal']);   
$CollectorChallengeGoalData09 = strtolower($data['collector'][8]['goal']);   

$MoonshinerChallengeGoalData01 = strtolower($data['moonshiner'][0]['goal']);   
$MoonshinerChallengeGoalData02 = strtolower($data['moonshiner'][1]['goal']);   
$MoonshinerChallengeGoalData03 = strtolower($data['moonshiner'][2]['goal']); 
$MoonshinerChallengeGoalData04 = strtolower($data['moonshiner'][3]['goal']);   
$MoonshinerChallengeGoalData05 = strtolower($data['moonshiner'][4]['goal']);   
$MoonshinerChallengeGoalData06 = strtolower($data['moonshiner'][5]['goal']); 
$MoonshinerChallengeGoalData07 = strtolower($data['moonshiner'][6]['goal']); 
$MoonshinerChallengeGoalData08 = strtolower($data['moonshiner'][7]['goal']);   
$MoonshinerChallengeGoalData09 = strtolower($data['moonshiner'][8]['goal']);  

$NaturalistChallengeGoalData01 = strtolower($data['naturalist'][0]['goal']);   
$NaturalistChallengeGoalData02 = strtolower($data['naturalist'][1]['goal']);   
$NaturalistChallengeGoalData03 = strtolower($data['naturalist'][2]['goal']); 
$NaturalistChallengeGoalData04 = strtolower($data['naturalist'][3]['goal']);   
$NaturalistChallengeGoalData05 = strtolower($data['naturalist'][4]['goal']);   
$NaturalistChallengeGoalData06 = strtolower($data['naturalist'][5]['goal']); 
$NaturalistChallengeGoalData07 = strtolower($data['naturalist'][6]['goal']); 
$NaturalistChallengeGoalData08 = strtolower($data['naturalist'][7]['goal']);   
$NaturalistChallengeGoalData09 = strtolower($data['naturalist'][8]['goal']);  

$BountyChallengeDifficulty01 = strtolower($data['bounty'][0]['difficulty']);   
$BountyChallengeDifficulty02 = strtolower($data['bounty'][1]['difficulty']);   
$BountyChallengeDifficulty03 = strtolower($data['bounty'][2]['difficulty']); 
$BountyChallengeDifficulty04 = strtolower($data['bounty'][3]['difficulty']);   
$BountyChallengeDifficulty05 = strtolower($data['bounty'][4]['difficulty']);   
$BountyChallengeDifficulty06 = strtolower($data['bounty'][5]['difficulty']); 
$BountyChallengeDifficulty07 = strtolower($data['bounty'][6]['difficulty']); 
$BountyChallengeDifficulty08 = strtolower($data['bounty'][7]['difficulty']);   
$BountyChallengeDifficulty09 = strtolower($data['bounty'][8]['difficulty']);  

$TraderChallengeDifficulty01 = strtolower($data['trader'][0]['difficulty']);   
$TraderChallengeDifficulty02 = strtolower($data['trader'][1]['difficulty']);   
$TraderChallengeDifficulty03 = strtolower($data['trader'][2]['difficulty']); 
$TraderChallengeDifficulty04 = strtolower($data['trader'][3]['difficulty']);   
$TraderChallengeDifficulty05 = strtolower($data['trader'][4]['difficulty']);   
$TraderChallengeDifficulty06 = strtolower($data['trader'][5]['difficulty']); 
$TraderChallengeDifficulty07 = strtolower($data['trader'][6]['difficulty']); 
$TraderChallengeDifficulty08 = strtolower($data['trader'][7]['difficulty']);   
$TraderChallengeDifficulty09 = strtolower($data['trader'][8]['difficulty']); 

$CollectorChallengeDifficulty01 = strtolower($data['collector'][0]['difficulty']);   
$CollectorChallengeDifficulty02 = strtolower($data['collector'][1]['difficulty']);   
$CollectorChallengeDifficulty03 = strtolower($data['collector'][2]['difficulty']); 
$CollectorChallengeDifficulty04 = strtolower($data['collector'][3]['difficulty']);   
$CollectorChallengeDifficulty05 = strtolower($data['collector'][4]['difficulty']);   
$CollectorChallengeDifficulty06 = strtolower($data['collector'][5]['difficulty']); 
$CollectorChallengeDifficulty07 = strtolower($data['collector'][6]['difficulty']); 
$CollectorChallengeDifficulty08 = strtolower($data['collector'][7]['difficulty']);   
$CollectorChallengeDifficulty09 = strtolower($data['collector'][8]['difficulty']);   

$MoonshinerChallengeDifficulty01 = strtolower($data['moonshiner'][0]['difficulty']);   
$MoonshinerChallengeDifficulty02 = strtolower($data['moonshiner'][1]['difficulty']);   
$MoonshinerChallengeDifficulty03 = strtolower($data['moonshiner'][2]['difficulty']); 
$MoonshinerChallengeDifficulty04 = strtolower($data['moonshiner'][3]['difficulty']);   
$MoonshinerChallengeDifficulty05 = strtolower($data['moonshiner'][4]['difficulty']);   
$MoonshinerChallengeDifficulty06 = strtolower($data['moonshiner'][5]['difficulty']); 
$MoonshinerChallengeDifficulty07 = strtolower($data['moonshiner'][6]['difficulty']); 
$MoonshinerChallengeDifficulty08 = strtolower($data['moonshiner'][7]['difficulty']);   
$MoonshinerChallengeDifficulty09 = strtolower($data['moonshiner'][8]['difficulty']);  

$NaturalistChallengeDifficulty01 = strtolower($data['naturalist'][0]['difficulty']);   
$NaturalistChallengeDifficulty02 = strtolower($data['naturalist'][1]['difficulty']);   
$NaturalistChallengeDifficulty03 = strtolower($data['naturalist'][2]['difficulty']); 
$NaturalistChallengeDifficulty04 = strtolower($data['naturalist'][3]['difficulty']);   
$NaturalistChallengeDifficulty05 = strtolower($data['naturalist'][4]['difficulty']);   
$NaturalistChallengeDifficulty06 = strtolower($data['naturalist'][5]['difficulty']); 
$NaturalistChallengeDifficulty07 = strtolower($data['naturalist'][6]['difficulty']); 
$NaturalistChallengeDifficulty08 = strtolower($data['naturalist'][7]['difficulty']);   
$NaturalistChallengeDifficulty09 = strtolower($data['naturalist'][8]['difficulty']); 

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

$BountyChallenge01 = ${$BountyChallengeKeyData01} . ' - ('.$BountyChallengeDifficulty01.')' . '['.$BountyChallengeGoalData01.']' ."{01}";
$BountyChallenge02 = ${$BountyChallengeKeyData02} . ' - ('.$BountyChallengeDifficulty02.')' . '['.$BountyChallengeGoalData02.']' ."{02}";
$BountyChallenge03 = ${$BountyChallengeKeyData03} . ' - ('.$BountyChallengeDifficulty03.')' . '['.$BountyChallengeGoalData03.']' ."{03}";
$BountyChallenge04 = ${$BountyChallengeKeyData04} . ' - ('.$BountyChallengeDifficulty04.')' . '['.$BountyChallengeGoalData04.']' ."{04}";
$BountyChallenge05 = ${$BountyChallengeKeyData05} . ' - ('.$BountyChallengeDifficulty05.')' . '['.$BountyChallengeGoalData05.']' ."{05}";
$BountyChallenge06 = ${$BountyChallengeKeyData06} . ' - ('.$BountyChallengeDifficulty06.')' . '['.$BountyChallengeGoalData06.']' ."{06}";
$BountyChallenge07 = ${$BountyChallengeKeyData07} . ' - ('.$BountyChallengeDifficulty07.')' . '['.$BountyChallengeGoalData07.']' ."{07}";
$BountyChallenge08 = ${$BountyChallengeKeyData08} . ' - ('.$BountyChallengeDifficulty08.')' . '['.$BountyChallengeGoalData08.']' ."{08}";
$BountyChallenge09 = ${$BountyChallengeKeyData09} . ' - ('.$BountyChallengeDifficulty09.')' . '['.$BountyChallengeGoalData09.']' ."{09}";

$TraderChallenge01 = ${$TraderChallengeKeyData01} . ' - ('.$TraderChallengeDifficulty01.')' . '['.$TraderChallengeGoalData01.']' ."{01}";
$TraderChallenge02 = ${$TraderChallengeKeyData02} . ' - ('.$TraderChallengeDifficulty02.')' . '['.$TraderChallengeGoalData02.']' ."{02}";
$TraderChallenge03 = ${$TraderChallengeKeyData03} . ' - ('.$TraderChallengeDifficulty03.')' . '['.$TraderChallengeGoalData03.']' ."{03}";
$TraderChallenge04 = ${$TraderChallengeKeyData04} . ' - ('.$TraderChallengeDifficulty04.')' . '['.$TraderChallengeGoalData04.']' ."{04}";
$TraderChallenge05 = ${$TraderChallengeKeyData05} . ' - ('.$TraderChallengeDifficulty05.')' . '['.$TraderChallengeGoalData05.']' ."{05}";
$TraderChallenge06 = ${$TraderChallengeKeyData06} . ' - ('.$TraderChallengeDifficulty06.')' . '['.$TraderChallengeGoalData06.']' ."{06}";
$TraderChallenge07 = ${$TraderChallengeKeyData07} . ' - ('.$TraderChallengeDifficulty07.')' . '['.$TraderChallengeGoalData07.']' ."{07}";
$TraderChallenge08 = ${$TraderChallengeKeyData08} . ' - ('.$TraderChallengeDifficulty08.')' . '['.$TraderChallengeGoalData08.']' ."{08}";
$TraderChallenge09 = ${$TraderChallengeKeyData09} . ' - ('.$TraderChallengeDifficulty09.')' . '['.$TraderChallengeGoalData09.']' ."{09}";

$CollectorChallenge01 = ${$CollectorChallengeKeyData01} . ' - ('.$CollectorChallengeDifficulty01.')' . '['.$CollectorChallengeGoalData01.']' ."{01}";
$CollectorChallenge02 = ${$CollectorChallengeKeyData02} . ' - ('.$CollectorChallengeDifficulty02.')' . '['.$CollectorChallengeGoalData02.']' ."{02}";
$CollectorChallenge03 = ${$CollectorChallengeKeyData03} . ' - ('.$CollectorChallengeDifficulty03.')' . '['.$CollectorChallengeGoalData03.']' ."{03}";
$CollectorChallenge04 = ${$CollectorChallengeKeyData04} . ' - ('.$CollectorChallengeDifficulty04.')' . '['.$CollectorChallengeGoalData04.']' ."{04}";
$CollectorChallenge05 = ${$CollectorChallengeKeyData05} . ' - ('.$CollectorChallengeDifficulty05.')' . '['.$CollectorChallengeGoalData05.']' ."{05}";
$CollectorChallenge06 = ${$CollectorChallengeKeyData06} . ' - ('.$CollectorChallengeDifficulty06.')' . '['.$CollectorChallengeGoalData06.']' ."{06}";
$CollectorChallenge07 = ${$CollectorChallengeKeyData07} . ' - ('.$CollectorChallengeDifficulty07.')' . '['.$CollectorChallengeGoalData07.']' ."{07}";
$CollectorChallenge08 = ${$CollectorChallengeKeyData08} . ' - ('.$CollectorChallengeDifficulty08.')' . '['.$CollectorChallengeGoalData08.']' ."{08}";
$CollectorChallenge09 = ${$CollectorChallengeKeyData09} . ' - ('.$CollectorChallengeDifficulty09.')' . '['.$CollectorChallengeGoalData09.']' ."{09}";

$MoonshinerChallenge01 = ${$MoonshinerChallengeKeyData01} . ' - ('.$MoonshinerChallengeDifficulty01.')' . '['.$MoonshinerChallengeGoalData01.']' ."{01}";
$MoonshinerChallenge02 = ${$MoonshinerChallengeKeyData02} . ' - ('.$MoonshinerChallengeDifficulty02.')' . '['.$MoonshinerChallengeGoalData02.']' ."{02}";
$MoonshinerChallenge03 = ${$MoonshinerChallengeKeyData03} . ' - ('.$MoonshinerChallengeDifficulty03.')' . '['.$MoonshinerChallengeGoalData03.']' ."{03}";
$MoonshinerChallenge04 = ${$MoonshinerChallengeKeyData04} . ' - ('.$MoonshinerChallengeDifficulty04.')' . '['.$MoonshinerChallengeGoalData04.']' ."{04}";
$MoonshinerChallenge05 = ${$MoonshinerChallengeKeyData05} . ' - ('.$MoonshinerChallengeDifficulty05.')' . '['.$MoonshinerChallengeGoalData05.']' ."{05}";
$MoonshinerChallenge06 = ${$MoonshinerChallengeKeyData06} . ' - ('.$MoonshinerChallengeDifficulty06.')' . '['.$MoonshinerChallengeGoalData06.']' ."{06}";
$MoonshinerChallenge07 = ${$MoonshinerChallengeKeyData07} . ' - ('.$MoonshinerChallengeDifficulty07.')' . '['.$MoonshinerChallengeGoalData07.']' ."{07}";
$MoonshinerChallenge08 = ${$MoonshinerChallengeKeyData08} . ' - ('.$MoonshinerChallengeDifficulty08.')' . '['.$MoonshinerChallengeGoalData08.']' ."{08}";
$MoonshinerChallenge09 = ${$MoonshinerChallengeKeyData09} . ' - ('.$MoonshinerChallengeDifficulty09.')' . '['.$MoonshinerChallengeGoalData09.']' ."{09}";


$NaturalistChallenge01 = ${$NaturalistChallengeKeyData01} . ' - ('.$NaturalistChallengeDifficulty01.')' . '['.$NaturalistChallengeGoalData01.']' ."{01}";
$NaturalistChallenge02 = ${$NaturalistChallengeKeyData02} . ' - ('.$NaturalistChallengeDifficulty02.')' . '['.$NaturalistChallengeGoalData02.']' ."{02}";
$NaturalistChallenge03 = ${$NaturalistChallengeKeyData03} . ' - ('.$NaturalistChallengeDifficulty03.')' . '['.$NaturalistChallengeGoalData03.']' ."{03}";
$NaturalistChallenge04 = ${$NaturalistChallengeKeyData04} . ' - ('.$NaturalistChallengeDifficulty04.')' . '['.$NaturalistChallengeGoalData04.']' ."{04}";
$NaturalistChallenge05 = ${$NaturalistChallengeKeyData05} . ' - ('.$NaturalistChallengeDifficulty05.')' . '['.$NaturalistChallengeGoalData05.']' ."{05}";
$NaturalistChallenge06 = ${$NaturalistChallengeKeyData06} . ' - ('.$NaturalistChallengeDifficulty06.')' . '['.$NaturalistChallengeGoalData06.']' ."{06}";
$NaturalistChallenge07 = ${$NaturalistChallengeKeyData07} . ' - ('.$NaturalistChallengeDifficulty07.')' . '['.$NaturalistChallengeGoalData07.']' ."{07}";
$NaturalistChallenge08 = ${$NaturalistChallengeKeyData08} . ' - ('.$NaturalistChallengeDifficulty08.')' . '['.$NaturalistChallengeGoalData08.']' ."{08}";
$NaturalistChallenge09 = ${$NaturalistChallengeKeyData09} . ' - ('.$NaturalistChallengeDifficulty09.')' . '['.$NaturalistChallengeGoalData09.']' ."{09}";

$DailyChallengeDate = $DailyChallengesDate->format('Y-m-d');
$DailyChallengesDate = $DailyChallengesDate->format('F d');
?>