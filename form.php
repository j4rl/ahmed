<!DOCTYPE html>
<?php
    require_once 'func.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = <?=getNames_all()?>;
    $( "#myInput" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
<form autocomplete="off" action="form.php" method="post" style="display:flex;flex-direction:row;">
  <div class="ui-widget">
    <input id="myInput" type="text" name="myName" placeholder="Namn">
  </div>
  <input type="submit" name="mySubmit" value="Välj">
</form>
<?php
    if(isset($_POST['mySubmit'])){
        $medlnrarr=explode(' ', $_POST['myName']);
        $medlnr=$medlnrarr[count($medlnrarr)-1];
        $y=new Database("case");
        $result=$y->runQuery("SELECT * FROM tblmem WHERE medlnr=$medlnr");
        $rad=mysqli_fetch_assoc($result);
        if($y->dec($rad['medlemsform'])=="Yrkesverksam"){
            echo "<div class='card'><h1>".$y->dec($rad['namn'])."</h1><h2><strong>".$y->dec($rad['arbetsplats'])."</strong>,  ".$y->dec($rad['befattning'])."</h2><h3>".$rad['medlnr']."</h3></div>";
        }else{
            echo "<div class='card'><h1>".$y->dec($rad['namn'])."</h1><h2><strong>Pensionär</strong></h2><h3>".$rad['medlnr']."</h3></div>";
        }
        
    }
?>
</body>
</html>