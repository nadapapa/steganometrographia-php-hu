<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="description" content="Latin versek generálása"/>
  <meta name="author" content="Náday Ádám">
  <link rel="icon" href="includes/favicon.ico">
  <title>Blog - Steganometrographia</title>

  <meta property="og:url" content=<?php echo '"'."http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".'"'?> />
  <meta property="og:site_name" content="Blog" />
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="hu_HU" />
  <meta property="og:title" content="Steganometrographia" />
  <meta property="og:description" content="Latin versek generálása" />


  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <!--------------------------- BOOTSTRAP ---------------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="smg.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/style/main.css">
  <link rel="stylesheet" href="style.css">

</head>

<?php require('../../includes/nav.php');?>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      <h1 class="page-header">
      Steganometrographia
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="posts">

  <form id="form" method='post'>
  <label>
  <input type='radio' name='valasztas' value="random" checked>
  random</label>
  <select name='sor'>
  <?php
  for($i=2; $i<23; $i+=2){
    echo "<option value='$i' ";
    if(isset($_POST['sor']) && $i == $_POST['sor']){
      echo "selected='selected'";
    }
    echo ">$i</option>";
  }
  ?>
</select> sor
<div>
<label>
<input type='radio' name='valasztas' value="kodol" max="44"> kódol:
<input id="uzenet" type='text' size='38' name='uzen' value=''>
</label>
</div>

<label>
<input type='radio' name='valasztas' value='dekodol'> dekódol
</label>
<br>
<button type="submit" class="btn btn-success" id="verset">Verset!</button> <br>

<br>
<textarea name='vers' rows='24' cols='53'>
</textarea>
</form>
</div>
