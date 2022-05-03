<?php
 
    echo "Verification pwd<br>";
    $pass= '1234';
    $pass_hash= null;
    
    // $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    
    $msg = "je suis un homme de grande valeur";
    $msg1 = "i am a man with a big valous";
    $msg2 = "soy un informaticano";

    echo str_replace(' ', '+', $msg."+".$msg1."+".$msg2);

    // echo "pwd HASH: ".$pass_hash."<br>";

    // if (password_verify($pass, '$2y$10$QRw3zDUdVGSKeWcbHg.T5.njxSpmXE1AXY4uc.nHSBx01aPtYFXXG' )) {
    //     echo "Pasw correct<br>";
    // }
    // else {
    //     echo "Not correct<br>";
    // }

    
// 
// `<?php

// $address = "1600 Pennsylvania Ave NW Washington DC 20500";
// $address = str_replace(" ", "+", $address);
// $region = "USA";

// $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
// $json = json_decode($json);

// $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
// $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
// echo $lat."
// ".$long;

// ?> 
