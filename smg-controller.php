<?php require('tabellak.php');

extract($_POST);

if (isset($sor)) { // ha random verset kell generálni
  $genVers = "";
  $i = 0;
  $sor *= 2;
  for ($i = 0; $i < $sor; $i++) {
    $tabella = $tabellak[$i];
    $key = array_rand($tabella, 1);
    $genVers .= $tabella[$key];
    }

  echo $genVers;

} elseif (isset($uzen)) { // ha üzenetet kell kódolni
  $genVers = "";
  $uzen = strtoupper($uzen);
  $uzen = preg_replace('/\PL/u', '', $uzen); //ABCDEFGHIKLMNOPQRSTVWXZabcdefghiklmnopqrstvwxz
  $len = strlen($uzen)-1;
  for( $i = 0; $i <= $len; $i++ ) {
    $char = substr( $uzen, $i, 1 );
    $tabella = $tabellak[$i];
    $genVers .= $tabella[$char];
    if ($i == 43) {break;}
  }
  echo $genVers;

} elseif (isset($vers)) { // ha verset kell dekódolni
  $vers = strtoupper($vers);
  $vers = preg_replace('/\PL/u', '', $vers);
  $uzenet = "";
  foreach ($tabellak as $key => $tabella) {
    foreach ($tabella as $betu => $sor) {
      $sor = strtoupper($sor);
      $sor = preg_replace('/\PL/u', '', $sor);
      if (is_int(strpos($vers, $sor))) {
        echo $betu;
      }

    }
  }
}

?>
