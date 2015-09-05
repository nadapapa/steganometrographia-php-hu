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
<body>
  <?php require('../../includes/nav.php');?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <h2 class="page-header">
          Steganometrographia
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
        <div class="app">
          <form id="form" method='post'  class="form-horizontal">
            <fieldset>
              <div class="form-group">
                <input class="radio-inline" id="random" type='radio' name='valasztas' value="random" checked >
                <label class="input-label" for="random"> random </label>
                <select class="form-control col-lg-2 col-md-2 col-xs-2" id="sor" name='sor'>
                  <?php
                    for($i=2; $i<23; $i+=2){
                      echo "<option value='$i' ";
                      if(isset($_POST['sor']) && $i == $_POST['sor']){
                        echo "selected='selected'";
                      }
                      echo ">$i sor</option>";
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                  <input class="radio-inline" id="kodol" type='radio' name='valasztas' value="kodol">
                  <label class="input-label" for="kodol"> kódol: </label>
                  <input class="form-control" id="uzenet" type='text' name='uzen' value='' title="Az üzenet csak a következő kis- és nagybetűkből és szóközökből állhat: A, B, C, D, E, F, G, H, I, K, L, M, N, O, P, Q, R, S, T, V, W, X, Z.">
              </div>

              <div class="form-group">
                  <input class="radio-inline" id="dekodol" type='radio' name='valasztas' value='dekodol'>
                  <label class="input-label" for="dekodol"> dekódol </label>
              </div>
              <div class="form-group">
                <button id="gomb" type="submit" class="btn btn-success" id="verset">Verset!</button>
              </div>
              <div class="form-group">
                <textarea class="form-control" name='vers' rows='21' cols='53'></textarea>
              </div>
            </fieldset>
          </form>
        </div> <!-- /.app -->
      </div> <!-- /.col -->
      <div>

      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</body>
</html>
