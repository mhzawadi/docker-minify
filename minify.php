<?php

require __DIR__ . '/vendor/autoload.php';

$bits = explode('.', $argv[1]);

use MatthiasMullie\Minify;

  $sourcePath = $argv[1];
  if( $bits[1] ==='css' ){
    $minifier = new Minify\CSS($sourcePath);
  }elseif( $bits[1] ==='js' ){
    $minifier = new Minify\JS($sourcePath);
  }else{
    echo 'Not a CSS or a JS file';
    exit(1);
  }

  // save minified file to disk
  $minifiedPath = "$bits[0].min.$bits[1]";
  $minifier->minify($minifiedPath);
