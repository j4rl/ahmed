<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AHMed</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="util.js"></script>

    <?php //require_once("util.php"); ?>
</head>
<body>
    <div class="main">
    <div class="logo">
    Ärendehantering Medlemmar
    </div>
      <!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Starta')" id="defaultOpen">Starta</button>
  <button class="tablinks" onclick="openCity(event, 'Strategi')">Strategi</button>
  <button class="tablinks" onclick="openCity(event, 'Handling')">Handling</button>
  <button class="tablinks" onclick="openCity(event, 'Resultat')">Resultat</button>
</div>

<!-- Tab content -->
<div id="Starta" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3>Starta</h3>
<form action="action.php" name="frmStart" id="frmStart">
<input class="frmTextInput" name="case_responder" type="text" placeholder="Mottogs av">
<input class="frmTextInput" name="case_happened" type="date">
<input class="frmTextInput" name="local_department" type="text" placeholder="T3">
<input class="frmTextInput" name="case_manager" type="text" placeholder="Handläggare">
<input class="frmTextInput" name="case_client" type="text" placeholder="Medlemsuppgifter">
<input class="frmTextInput" name="case_poi" type="text" placeholder="Intressenter">
<input class="frmTextInput" name="current_contract" type="text" placeholder="Avtal">
</form>
  
</div>

<div id="Strategi" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3>Strategi</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Handling" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3>Handling</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>  

<div id="Resultat" class="tabcontent">
  <span class="closeX" onclick="this.parentElement.style.display='none'">X</span>
  <h3>Resultat</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>  
    </div>
<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>