<?php

require __DIR__ . '/vendor/autoload.php';

$bits = pathinfo($argv[1]);

use MatthiasMullie\Minify;

  $sourcePath = $argv[1];
  if( $extension['extension'] ==='css' ){
    $minifier = new Minify\CSS($sourcePath);
  }elseif( $extension['extension'] ==='js' ){
    $minifier = new Minify\JS($sourcePath);
  }else{
    echo $argv[1].' is not a CSS or a JS file';
    exit(1);
  }

  // save minified file to disk
  $minifiedPath = "$bits['filename'].min.$bits['extension']";
  $minifier->minify($minifiedPath);
