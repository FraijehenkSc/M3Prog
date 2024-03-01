<?php
    //TEST strtoupper
    $uOrL = "hoofdletters" ;
    $upperTest = "dit zijn nu ";
    $upperTest = strtoupper($upperTest);
    $uOrL = strtoupper($uOrL);
    echo "$upperTest $uOrL" ;

    //TEST strpos
    $search = "ZIJN" ;
    $pos = strpos($upperTest, $search) ;

    if ($pos === false) {
        echo " <br> <br> The string '$search' was not found in the string '$upperTest'";
    } else {
        echo " <br> <br> The string '$search' was found in the string '$upperTest'";
        echo " and exists at position $pos";
    }

    //TEST file_exists
    $filename = 'functions.php';

    if (file_exists($filename)) {
        echo " <br> <br> The file $filename exists";
    } else {
        echo " <br> <br> The file $filename does not exist";
    }

?>