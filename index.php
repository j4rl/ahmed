<!DOCTYPE html>
<?php require_once("func.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$strTitle;?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="color.css">    
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="util.js"></script>    
</head>
<body>
    <div class="main">
    <div class="logo">
    <?=$strTitle;?>
    </div>
    <div class="content">
      <!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'one')" id="defaultOpen"><?=$strStart;?></button>
  <button class="tablinks" onclick="openTab(event, 'two')"><?=$strInvestigation;?></button>
  <button class="tablinks" onclick="openTab(event, 'three')"><?=$strStrategy;?></button>
  <button class="tablinks" onclick="openTab(event, 'four')"><?=$strAction;?></button>
  <button class="tablinks" onclick="openTab(event, 'five')"><?=$strResult;?></button>
</div>

<!-- Tab content -->
<div id="one" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strStart;?></h3>
    <form action="action.php?frm=start" name="frmStart" id="frmStart">
      <input class="frmTextInput" name="case_responder" id="case_responder" type="text" placeholder="Mottogs av">
      <input class="frmTextInput" name="case_happened" id="case_happened" type="date">
      <input class="frmTextInput" name="local_department" id="local_department" type="text" placeholder="T3">
      <input class="frmTextInput" name="case_manager" id="case_manager" type="text" placeholder="Handläggare">
      <textarea class="frmTextInput" name="case_client" id="case_client" rows=3>Medlemsuppgifter</textarea>
      <textarea class="frmTextInput" name="case_poi" id="case_poi" rows=3>Intressenter</textarea>
      <input class="frmTextInput" name="current_contract" id="current_contract" type="text" placeholder="Avtal">
      <input class="frmSubmitBtn" type="submit" id="frmStartBtn" value="Lagra">
    </form>
</div>

<div id="two" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strInvestigation;?></h3>
    <form action="action.php?frm=utr" name="frmUtr" id="frmUtr">
      <textarea class="frmTextInput" name="client_what_happened" id="client_what_happened" rows=3><?=$client_what_happened;?></textarea>
      <textarea class="frmTextInput" name="background" id="background" rows=3><?=$background;?></textarea>
      <textarea class="frmTextInput" name="current_situation" id="current_situation" rows=3><?=$current_situation;?></textarea>
      <textarea class="frmTextInput" name="contractors_comment" id="contractors_comment" rows=3><?=$contractors_comment;?></textarea>
      <textarea class="frmTextInput" name="union_comment" id="union_comment" rows=3><?=$union_comment;?></textarea>
      <textarea class="frmTextInput" name="other_comment" id="other_comment" rows=3><?=$other_comment;?></textarea>
      <textarea class="frmTextInput" name="student_perspective" id="student_perspective" rows=3><?=$student_perspective;?></textarea>
      <input class="frmTextInput" id="local_agreements" name="local_agreements" type="text" placeholder="<?=$local_agreements;?>">
      <input class="frmTextInput" id="timeframe" name="timeframe" type="text" placeholder="<?=$timeframe;?>">
      <input class="frmTextInput" id="policys" name="policys" type="text" placeholder="<?=$policys;?>">
      <input class="frmTextInput" id="practice" name="practice" type="text" placeholder="<?=$practice?>">
      <input class="frmTextInput" id="mediator_contacted_at" name="mediator_contacted_at" type="text" placeholder="<?=$mediator_contacted_at;?>">
      <input class="frmTextInput" id="are_there_regulations_in_laws_or_contracts" name="are_there_regulations_in_laws_or_contracts" type="text" placeholder="<?=$are_there_regulations_in_laws_or_contracts;?>">
    </form>
</div>

<div id="three" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strStrategy;?></h3>
  <form action="action.php?frm=strat" name="frmStrat" id="frmStrat">
      <textarea class="frmTextInput" id="what_do_client_want" name="what_do_client_want" rows=3><?=$what_do_client_want;?></textarea> 
      <textarea class="frmTextInput" id="union_practice" name="union_practice" rows=3><?=$union_practice;?></textarea>
      <textarea class="frmTextInput" id="what_do_contractor_want" name="what_do_contractor_want" rows=3><?=$what_do_contractor_want;?></textarea>
      <input class="frmTextInput" id="who_can_decide" name="who_can_decide" type="text" placeholder="<?=$who_can_decide;?>">
      <textarea class="frmTextInput" id="considerations" name="considerations" rows=3><?=$considerations;?></textarea>
    </form>
</div>

<div id="four" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strAction;?></h3>
  <form action="action.php?frm=action" name="frmAction" id="frmAction">
      <textarea class="frmTextInput" id="what_do_we_do_now" name="what_do_we_do_now" rows=3><?=$what_do_we_do_now;?></textarea>
      <input class="frmTextInput" id="who_does_what_and_when" name="who_does_what_and_when" type="text" placeholder="<?=$who_does_what_and_when;?>">
      <input class="frmTextInput" id="who_do_we_contact" name="who_do_we_contact" type="text" placeholder="<?=$who_do_we_contact;?>">
      <textarea class="frmTextInput" id="negotiation_request" name="negotiation_request" rows=3><?=$negotiation_request;?></textarea>
      <textarea class="frmTextInput" id="arguments" name="arguments" rows=3><?=$arguments;?></textarea>
      <textarea class="frmTextInput" id="recruitment_steps" name="recruitment_steps" rows=3><?=$recruitment_steps;?></textarea>
    </form>
</div>  

<div id="five" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strResult;?></h3>
  <form action="action.php?frm=res" name="frmRes" id="frmRes">
      <textarea class="frmTextInput" id="own_reflection" name="own_reflection" rows=3><?=$own_reflection;?></textarea>
      <textarea class="frmTextInput" id="feedback_to_client" name="feedback_to_client" rows=3><?=$feedback_to_client;?></textarea>
      <textarea class="frmTextInput" id="result" name="result" rows=3><?=$result;?></textarea>
      <textarea class="frmTextInput" id="analyses" name="analyses" rows=3><?=$analyses;?></textarea>
      <textarea class="frmTextInput" id="recruitment_communication" name="recruitment_communication" rows=3><?=$recruitment_communication;?></textarea>
      <textarea class="frmTextInput" id="feedback_to_mediator" name="feedback_to_mediator" rows=3><?=$feedback_to_mediator;?></textarea>
      <textarea class="frmTextInput" id="case_knowledge" name="case_knowledge" rows=3><?=$case_knowledge;?></textarea>
    </form>
</div>  
    </div>
<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div>
<footer class="shoestyle">&copy;j4rl(2018)</footer>
</body>
</html>