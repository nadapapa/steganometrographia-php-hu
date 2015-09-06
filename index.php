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

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
body{background-image:url("bg.jpg");background-repeat:no-repeat;background-position:top center;background-attachment:fixed;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-size:100% auto;}label{font-size:1.3em;}#gomb{width:90%;}button > b{font-size:1.5em;}input[type=radio]{margin-left:0.5em;}form{margin:1em 1em;}
</style>

</head>
<body>
  <?php require('../../includes/nav.php');?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <h2 class="page-header text-center">
          <b>Steganometrographia</b>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
          <form id="form" method='post'  class="form-horizontal">
            <fieldset>
              <div class="form-group center-block">
                <input class="radio-inline" id="random" type='radio' name='valasztas' value="random" checked >
                <label class="input-label" for="random"> random </label>
                <select class="form-control" id="sor" name='sor'>
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

              <div class="form-group center-block">
                  <input class="radio-inline" id="kodol" type='radio' name='valasztas' value="kodol">
                  <label class="input-label" for="kodol"> kódol: </label>
                  <input class="form-control" id="uzenet" type='text' name='uzen' value='' title="Az üzenet csak a következő kis- és nagybetűkből és szóközökből állhat: A, B, C, D, E, F, G, H, I, K, L, M, N, O, P, Q, R, S, T, V, W, X, Z.">
              </div>

              <div class="form-group center-block">
                  <input class="radio-inline" id="dekodol" type='radio' name='valasztas' value='dekodol'>
                  <label class="input-label" for="dekodol"> dekódol </label>
              </div>
              <div class="form-group">
                <button id="gomb" type="submit" class="btn btn-success center-block" id="verset"><b>Verset! <i class="fa fa-magic"></i></b></button>
              </div>
              <div class="form-group">
                <textarea class="form-control" name='vers' rows='23' cols='53'></textarea>
              </div>
            </fieldset>
          </form>
        </div> <!-- /.panel-body -->
        </div><!-- /.panel-default -->
      </div> <!-- /.col -->

      <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    Az oldalról
                  </h4>
                </div><!-- /.panel-heading -->
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                  <p>A honlap <em>Melchias Uken</em> <a href="https://archive.org/details/steganometrogra00ukengoog">Steganometrographia, sive Artificium novum & inauditum</a> című 1751-ben megjelent könyve alapján készült. A könyv egy steganometrographia nevű rejtjelező eljárást ismertet, aminek a segítségével rövid üzeneteket lehet latin disztichonokba rejteni. Az alapelve, hogy az ABC betűihez félsorokat rendel. A könyvben található táblázatok segítségével ki lehet keresni az üzenet betűihez tartozó verssordarabokat. A végeredmény egy latin nyelvű disztichonos költemény, ami témáját tekintve egy verses levél, de közben ott lapul benne a titkos üzenet. A levél címzettje, ha szintén rendelkezik a könyvvel, könnyen dekódolhatja az üzenetet. Ezzel az oldallal ezt a folyamatot lehet könnyebben, gyorsabban és egyszerűbben elvégezni. Ezen kívül véletlenszerűen is lehet verset generálni.</p>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel-collapse collapse -->
              </div><!-- /.panel panel-default -->
              <div class="panel panel-default">
                <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="panel-heading collapsed" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    Random versgenerálás
                  </h4>
                </div><!-- /.panel-heading -->
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
              <p>Ahhoz, hogy a program véletlenszerűen generáljon egy verset, ki kell jelölni a "random" opciót, majd megnyomni a "Verset!" gombot. Az opció melletti legördülő listából kiválasztható a generált vers hossza. Maximum 22 soros vers generálható.</p>
             </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse collapse -->
          </div><!-- /.panel panel-default -->
          <div class="panel panel-default">
            <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="panel-heading collapsed" role="tab" id="headingThree">
              <h4 class="panel-title">
              Rövid üzenet kódolása versben
              </h4>
            </div><!-- /.panel-heading -->
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
              <p>A könyv eredetileg rövid üzenetek rejtjelezésére íródott. Ezt az oldallal is el lehet végezni Ilyenkor ki kell jelölni a "kódol" opciót és a mellette lévő mezőbe írni a kódolandó üzenetet, majd megnyomni a "Verset!" gombot. Csak betűket lehet kódolni és maximum 44 betű hosszúságú szöveg kódolható.</p>
              </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse collapse -->
          </div><!-- /.panel panel-default -->
          <div class="panel panel-default">
            <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="panel-heading collapsed" role="tab" id="headingFour">
              <h4 class="panel-title">
                Kódolt vers dekódolása
              </h4>
            </div><!-- /.panel-heading -->
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
              <p>Az előző folyamat megfordítása. A verset a nagy mezőbe kell bemásolni, majd megnyomni a "Verset!" gombot. A dekódolt üzenetben nincsenek szóközök és teljesen nagybetűs.</p>
              </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse collapse -->
          </div><!-- /.panel panel-default -->
          <div class="panel panel-default">
            <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="panel-heading collapsed" role="tab" id="headingFive">
              <h4 class="panel-title">
                Betűk
              </h4>
            </div><!-- /.panel-heading -->
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
              <p>Melchias Uken eredetileg a német nyelvterületre szánta a könyvet, ezért az alábbi betűk titkosíthatóak:</p>
              <p>A, B, C, D, E, F, G, H, I, K, L, M, N, O, P, Q, R, S, T, V, W, X,</p>
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel-collapse collapse -->
          </div><!-- /.panel panel-default -->
        </div><!-- /.panel-group-->
      </div><!-- /.col-md-4 col-lg-4 col-sm-12 col-xs-12 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->

  <script async src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script async src="smg.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
  <link rel="stylesheet" href="/style/main.min.css">
</body>
</html>
