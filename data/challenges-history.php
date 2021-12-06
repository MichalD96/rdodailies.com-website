<?php 

$file = file_get_contents('https://rdocdn.xyz/api/dailies.php');
$data = json_decode($file,true);
//$currentDailyChallengesDate = '2020-10-17';
//$currentDailyChallengesDate = $data['date'];
$currentDailyChallengesDate = $data['date'];

$jsonDateDay = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$jsonDateMonth = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);
$jsonDateYear = DateTime::createFromFormat('Y-m-d',$DailyChallengesPageDate);

$DailyChallengesJSON = $jsonDateYear->format("Y").'/'.$jsonDateYear->format("Y").'-'.$jsonDateDay->format("m");

$GeneralChallenge = $BountyChallenge = $CollectorChallenge = $MoonshinerChallenge = $TraderChallenge = $NaturalistChallenge = 
  "Challenge not yet known";

$GeneralChallengeX = $BountyChallengeX = $CollectorChallengeX = $MoonshinerChallengeX = $TraderChallengeX = $NaturalistChallengeX = " ";

require_once('challenge-goal.php');

if (empty($_GET['lang'])) {$language = "en"; } else { $language = $_GET['lang']; }
require_once('challenge-lang/challenge-'.$language.'.php');

$file = file_get_contents('https://rdocdn.xyz/api/data/challenges/'.$DailyChallengesJSON.'/challenges-['.$DailyChallengesPageDate.'].json');
$data = json_decode($file,true);
/*
$GeneralChallengeKeyData01 = strtoupper($data['general'][0]['daily']); 
$GeneralChallengeKeyData02 = strtoupper($data['general'][1]['daily']); 
$GeneralChallengeKeyData03 = strtoupper($data['general'][2]['daily']); 
$GeneralChallengeKeyData04 = strtoupper($data['general'][3]['daily']); 
$GeneralChallengeKeyData05 = strtoupper($data['general'][4]['daily']); 
$GeneralChallengeKeyData06 = strtoupper($data['general'][5]['daily']); 
$GeneralChallengeKeyData07 = strtoupper($data['general'][6]['daily']); 

$BountyChallengeKeyData01 = strtoupper($data['bounty'][0]['daily']);   
$BountyChallengeKeyData02 = strtoupper($data['bounty'][1]['daily']);   
$BountyChallengeKeyData03 = strtoupper($data['bounty'][2]['daily']); 

$TraderChallengeKeyData01 = strtoupper($data['trader'][0]['daily']);  
$TraderChallengeKeyData02 = strtoupper($data['trader'][1]['daily']);  
$TraderChallengeKeyData03 = strtoupper($data['trader'][2]['daily']); 

$CollectorChallengeKeyData01 = strtoupper($data['collector'][0]['daily']); 
$CollectorChallengeKeyData02 = strtoupper($data['collector'][1]['daily']);  
$CollectorChallengeKeyData03 = strtoupper($data['collector'][2]['daily']); 

$MoonshinerChallengeKeyData01 = strtoupper($data['moonshiner'][0]['daily']);  
$MoonshinerChallengeKeyData02 = strtoupper($data['moonshiner'][1]['daily']);  
$MoonshinerChallengeKeyData03 = strtoupper($data['moonshiner'][2]['daily']); 

$NaturalistChallengeKeyData01 = strtoupper($data['naturalist'][0]['daily']); 
$NaturalistChallengeKeyData02 = strtoupper($data['naturalist'][1]['daily']); 
$NaturalistChallengeKeyData03 = strtoupper($data['naturalist'][2]['daily']); 

*/
$GeneralChallengeKeyData01 = strtolower($data['general'][0]['daily']); 
$GeneralChallengeKeyData02 = strtolower($data['general'][1]['daily']); 
$GeneralChallengeKeyData03 = strtolower($data['general'][2]['daily']); 
$GeneralChallengeKeyData04 = strtolower($data['general'][3]['daily']); 
$GeneralChallengeKeyData05 = strtolower($data['general'][4]['daily']); 
$GeneralChallengeKeyData06 = strtolower($data['general'][5]['daily']); 
$GeneralChallengeKeyData07 = strtolower($data['general'][6]['daily']); 

$BountyChallengeKeyData01 = strtolower($data['bounty'][0]['daily']);   
$BountyChallengeKeyData02 = strtolower($data['bounty'][1]['daily']);   
$BountyChallengeKeyData03 = strtolower($data['bounty'][2]['daily']); 

$TraderChallengeKeyData01 = strtolower($data['trader'][0]['daily']);  
$TraderChallengeKeyData02 = strtolower($data['trader'][1]['daily']);  
$TraderChallengeKeyData03 = strtolower($data['trader'][2]['daily']); 

$CollectorChallengeKeyData01 = strtolower($data['collector'][0]['daily']); 
$CollectorChallengeKeyData02 = strtolower($data['collector'][1]['daily']);  
$CollectorChallengeKeyData03 = strtolower($data['collector'][2]['daily']); 

$MoonshinerChallengeKeyData01 = strtolower($data['moonshiner'][0]['daily']);  
$MoonshinerChallengeKeyData02 = strtolower($data['moonshiner'][1]['daily']);  
$MoonshinerChallengeKeyData03 = strtolower($data['moonshiner'][2]['daily']); 

$NaturalistChallengeKeyData01 = strtolower($data['naturalist'][0]['daily']); 
$NaturalistChallengeKeyData02 = strtolower($data['naturalist'][1]['daily']); 
$NaturalistChallengeKeyData03 = strtolower($data['naturalist'][2]['daily']); 

$GeneralChallengeGoalKeyData01 = strtolower($data['general'][0]['daily']."_goal");   
$GeneralChallengeGoalKeyData02 = strtolower($data['general'][1]['daily']."_goal");   
$GeneralChallengeGoalKeyData03 = strtolower($data['general'][2]['daily']."_goal"); 
$GeneralChallengeGoalKeyData04 = strtolower($data['general'][3]['daily']."_goal");   
$GeneralChallengeGoalKeyData05 = strtolower($data['general'][4]['daily']."_goal");   
$GeneralChallengeGoalKeyData06 = strtolower($data['general'][5]['daily']."_goal"); 
$GeneralChallengeGoalKeyData07 = strtolower($data['general'][6]['daily']."_goal");   

$BountyChallengeGoalKeyData01 = strtolower($data['bounty'][0]['daily']."_goal");   
$BountyChallengeGoalKeyData02 = strtolower($data['bounty'][1]['daily']."_goal");   
$BountyChallengeGoalKeyData03 = strtolower($data['bounty'][2]['daily']."_goal"); 

$TraderChallengeGoalKeyData01 = strtolower($data['trader'][0]['daily']."_goal");  
$TraderChallengeGoalKeyData02 = strtolower($data['trader'][1]['daily']."_goal");   
$TraderChallengeGoalKeyData03 = strtolower($data['trader'][2]['daily']."_goal"); 

$CollectorChallengeGoalKeyData01 = strtolower($data['collector'][0]['daily']."_goal");  
$CollectorChallengeGoalKeyData02 = strtolower($data['collector'][1]['daily']."_goal");   
$CollectorChallengeGoalKeyData03 = strtolower($data['collector'][2]['daily']."_goal"); 

$MoonshinerChallengeGoalKeyData01 = strtolower($data['moonshiner'][0]['daily']."_goal");  
$MoonshinerChallengeGoalKeyData02 = strtolower($data['moonshiner'][1]['daily']."_goal");   
$MoonshinerChallengeGoalKeyData03 = strtolower($data['moonshiner'][2]['daily']."_goal");

$NaturalistChallengeGoalKeyData01 = strtolower($data['naturalist'][0]['daily']."_goal");  
$NaturalistChallengeGoalKeyData02 = strtolower($data['naturalist'][1]['daily']."_goal");   
$NaturalistChallengeGoalKeyData03 = strtolower($data['naturalist'][2]['daily']."_goal"); 


$DailyChallengesDate = new DateTime($DailyChallengesPageDate);


$NazarMapLocation = $data['nazar'];

$Weekly = $data['weekly'];

$GeneralChallengeKeyGoal01 = ${$GeneralChallengeGoalKeyData01};
$GeneralChallengeKeyGoal02 = ${$GeneralChallengeGoalKeyData02};
$GeneralChallengeKeyGoal03 = ${$GeneralChallengeGoalKeyData03};
$GeneralChallengeKeyGoal04 = ${$GeneralChallengeGoalKeyData04};
$GeneralChallengeKeyGoal05 = ${$GeneralChallengeGoalKeyData05};
$GeneralChallengeKeyGoal06 = ${$GeneralChallengeGoalKeyData06}; 
$GeneralChallengeKeyGoal07 = ${$GeneralChallengeGoalKeyData07};

$BountyChallengeKeyGoal01 = ${$BountyChallengeGoalKeyData01};
$BountyChallengeKeyGoal02 = ${$BountyChallengeGoalKeyData02};
$BountyChallengeKeyGoal03 = ${$BountyChallengeGoalKeyData03}; 

$TraderChallengeKeyGoal01 = ${$TraderChallengeGoalKeyData01};
$TraderChallengeKeyGoal02 = ${$TraderChallengeGoalKeyData02};
$TraderChallengeKeyGoal03 = ${$TraderChallengeGoalKeyData03};

$CollectorChallengeKeyGoal01 = ${$CollectorChallengeGoalKeyData01};
$CollectorChallengeKeyGoal02 = ${$CollectorChallengeGoalKeyData02};
$CollectorChallengeKeyGoal03 = ${$CollectorChallengeGoalKeyData03};

$MoonshinerChallengeKeyGoal01 = ${$MoonshinerChallengeGoalKeyData01};
$MoonshinerChallengeKeyGoal02 = ${$MoonshinerChallengeGoalKeyData02};
$MoonshinerChallengeKeyGoal03 = ${$MoonshinerChallengeGoalKeyData03};

$NaturalistChallengeKeyGoal01 = ${$NaturalistChallengeGoalKeyData01};
$NaturalistChallengeKeyGoal02 = ${$NaturalistChallengeGoalKeyData02};
$NaturalistChallengeKeyGoal03 = ${$NaturalistChallengeGoalKeyData03};

$GeneralChallenge01 = ${$GeneralChallengeKeyData01} . $GeneralChallengeKeyGoal01 ."{01}";
$GeneralChallenge02 = ${$GeneralChallengeKeyData02} . $GeneralChallengeKeyGoal02 ."{02}";
$GeneralChallenge03 = ${$GeneralChallengeKeyData03} . $GeneralChallengeKeyGoal03 ."{03}";
$GeneralChallenge04 = ${$GeneralChallengeKeyData04} . $GeneralChallengeKeyGoal04 ."{04}";
$GeneralChallenge05 = ${$GeneralChallengeKeyData05} . $GeneralChallengeKeyGoal05 ."{05}";
$GeneralChallenge06 = ${$GeneralChallengeKeyData06} . $GeneralChallengeKeyGoal06 ."{06}";
$GeneralChallenge07 = ${$GeneralChallengeKeyData07} . $GeneralChallengeKeyGoal07 ."{07}";

$BountyChallenge01 = ${$BountyChallengeKeyData01} . $BountyChallengeKeyGoal01 ."{01}";
$BountyChallenge02 = ${$BountyChallengeKeyData02} . $BountyChallengeKeyGoal02 ."{02}";
$BountyChallenge03 = ${$BountyChallengeKeyData03} . $BountyChallengeKeyGoal03 ."{03}"; 

$TraderChallenge01 = ${$TraderChallengeKeyData01} . $TraderChallengeKeyGoal01 ."{01}";
$TraderChallenge02 = ${$TraderChallengeKeyData02} . $TraderChallengeKeyGoal02 ."{02}";
$TraderChallenge03 = ${$TraderChallengeKeyData03} . $TraderChallengeKeyGoal03 ."{03}";

$CollectorChallenge01 = ${$CollectorChallengeKeyData01} . $CollectorChallengeKeyGoal01 ."{01}";
$CollectorChallenge02 = ${$CollectorChallengeKeyData02} . $CollectorChallengeKeyGoal02 ."{02}";
$CollectorChallenge03 = ${$CollectorChallengeKeyData03} . $CollectorChallengeKeyGoal03 ."{03}";

$MoonshinerChallenge01 = ${$MoonshinerChallengeKeyData01} . $MoonshinerChallengeKeyGoal01 ."{01}";
$MoonshinerChallenge02 = ${$MoonshinerChallengeKeyData02} . $MoonshinerChallengeKeyGoal02 ."{02}";
$MoonshinerChallenge03 = ${$MoonshinerChallengeKeyData03} . $MoonshinerChallengeKeyGoal03 ."{03}";

$NaturalistChallenge01 = ${$NaturalistChallengeKeyData01} . $NaturalistChallengeKeyGoal01 ."{01}";
$NaturalistChallenge02 = ${$NaturalistChallengeKeyData02} . $NaturalistChallengeKeyGoal02 ."{02}";
$NaturalistChallenge03 = ${$NaturalistChallengeKeyData03} . $NaturalistChallengeKeyGoal03 ."{03}";

$DailyChallengeDate = $DailyChallengesDate->format('Y-m-d');
$DailyChallengesDate = $DailyChallengesDate->format('F d');

?>