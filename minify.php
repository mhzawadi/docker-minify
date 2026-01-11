<?php

require __DIR__ . '/vendor/autoload.php';

$bits = pathinfo($argv[1]);

use MatthiasMullie\Minify;

  $sourcePath = $argv[1];
  if( $bits['extension'] ==='css' ){
    $minifier = new Minify\CSS($sourcePath);
  }elseif( $bits['extension'] ==='js' ){
    $minifier = new Minify\JS($sourcePath);
  }else{
    echo $argv[1].' is not a CSS or a JS file';
    exit(1);
  }

  // save minified file to disk
  $minifier->minify($bits['dirname'].'/'.$bits['filename'].'.min.'.$bits['extension']);
  $minifier->gzip($bits['dirname'].'/'.$bits['filename'].'.min.gz');
  $myfile = fopen($bits['dirname'].'/'.$bits['filename'].'.min.'.$bits['extension'], "a") or die("Unable to open file!");
  fwrite($myfile, "");
  fclose($myfile);
