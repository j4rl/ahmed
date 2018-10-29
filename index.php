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
      <input type="text" class="frmTextInput" id="">
      <input type="text" class="frmTextInput">
      <input type="text" class="frmTextInput">
      <input type="text" class="frmTextInput">
      <input type="text" class="frmTextInput">
      <input type="text" class="frmTextInput">
    </form>
</div>

<div id="three" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strStrategy;?></h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="four" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strAction;?></h3>
  <p>Tokyo is the capital of Japan.</p>
</div>  

<div id="five" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3><?=$strResult;?></h3>
  <p>Tokyo is the capital of Japan.</p>
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