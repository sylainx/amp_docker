<?php

    //-----------------------------  L I S T E R
    function AllAddress()
    {
        global $bdd;
        $requete = $bdd->prepare("SELECT * FROM `address` ORDER BY id DESC");
        $stmt = $requete->execute();

        return  $result = $requete->fetchAll();
    }
    
    //-----------------------------  R E C H E R C H E R
    function searchAddress($value)
    {
        global $bdd;

        // $requete = $bdd->prepare("SELECT * FROM `address` WHERE id = :value ");
        $requete = $bdd->prepare("SELECT * FROM `address` WHERE id = :value 
            OR adresse = :value OR city = :value OR country = :value OR codePostal = :value ");

        $stmt = $requete->execute(array(
            ':value'=> $value
        ));
        return  $result = $requete->fetchAll();
    }
    

    //-----------------------------  A J O U T E R
    function AddAddress($datas)
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

        if($stmt == true)
            return  $result = $requete->fetchAll();
        else
            return false;
    }
    
    //-----------------------------  S U P P R I M E R
    function DeleteAddress($id)
    {
        global $bdd;

        $requete = $bdd->prepare("DELETE FROM `address` WHERE id = :id ");

        $stmt = $requete->execute(array(
            ':id'=> $id
        ));
        return  $result = $requete->fetchAll();
    }
