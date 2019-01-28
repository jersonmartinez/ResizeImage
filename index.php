<?php

	// *** Include the class
    include ("php/class.resize.php");
 
    // *** 1) Initialize / load image
    $resizeObj = new resize('src/wp.png');
 
    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
    $resizeObj->resizeImage(450, 300, 'crop');
 
    // *** 3) Save image
    $resizeObj->saveImage('output/sample-resized.png', 100);