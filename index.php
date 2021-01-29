<?php

	// *** Include the class
    include ("php/class.resize.php");
 
    // *** 1) Initialize / load image
    $resizeObj = new resize('src/wp.png');
 
    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)

    // Facebook
    $resizeObj->resizeImage(1200, 628, 'exact');

    // Twitter
    $resizeObj->resizeImage(1024, 512, 'exact');

    // LinkedIn
    $resizeObj->resizeImage(1200, 627, 'exact');

    // Instagram
    $resizeObj->resizeImage(1080, 566, 'exact');

    // *** 3) Save image
    $resizeObj->saveImage('output/sample-resized.png', 100);