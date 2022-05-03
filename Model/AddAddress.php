<?php

function AdAddresse($data)
{
    global $bdd;

    $requete= $bdd->prepare("INSERT INTO `address` (`adresse`, `city`, `country`, `codepostal`, `longitude`, `latitude`)
						VALUES ( :adresse, :city, :country, :codepostal, :longitude, :latitude)");

    $stmt = $requete->execute(array(
            ':adresse'=> $data['adresse'],
            ':city'=> $data['city'],
            ':country'=> $data['country'],
            ':codepostal'=> $data['codepostal'],
            ':longitude'=> $data['longitude'],
            ':latitude'=> $data['latitude']
        ));

    if ($stmt == true) {
        return  $result = $requete->fetchAll();
    } else {
        return false;
    }
}
