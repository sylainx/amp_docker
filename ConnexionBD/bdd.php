<?php
 
   $servername="localhost";
   $username= 'root';
   $pwd= '';
   $bdname= 'inuka_4emeannee_projet_amp_docker';

   /*
      $username= 'root';
      $servername="db";
      $pwd= 'inuka';
      $bdname= 'inuka_4emeannee_projet_amp_docker';
    */
 
   try {
       $bdd = new PDO('mysql:host='.$servername.';dbname='.$bdname.';charset=utf8', $username, $pwd);
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (\Exception $e) {
       die('Erreur de connexion à la base de donnée: '. $e->getMessage());
   }
