<?php
    

        /* ================ U S E R   C O N N E X I O N  ================ */
    $data = array();

    if (
        isset($_POST['adresse'])
        and isset($_POST['city'])
        and isset($_POST['country'])
        and isset($_POST['codePostal'])
    ) {

        // 
        $successMessage = null;
        $dashboardErrors=array();

        // 



        $adresse= htmlspecialchars($_POST['adresse']);
        $city=htmlspecialchars($_POST['city']);
        $country=htmlspecialchars($_POST['country']);
        $codePostal=htmlspecialchars($_POST['codePostal']);
        
        if (strlen($adresse) <= 100) {
            if (strlen($city) <= 50) {
                if (strlen($country) <= 50) {
                    if (strlen($codePostal) <= 15) {
                        if (isset($_POST['addAddress'])) {
                            // ===== convert in array
                            $data = [
                                'adresse' => $adresse,
                                'city' => $city,
                                'country' => $country,
                                'codePostal' => $codePostal,
                                'longitude' => '',
                                'latitude' => ''
                            ];
                            // ===== call function to add address on database
                            // $output= AddAdresse($data);

                            // ---------------------- test ----------------------------------

                                $requete= $bdd->prepare("INSERT INTO `address` (`adresse`, `city`, `country`, `codepostal`, `longitude`, `latitude`)
                                VALUES ( :adresse, :city, :country, :codepostal, :longitude, :latitude)");

                                $stmt = $requete->execute(array(
                                    ':adresse'=> $data['adresse'],
                                    ':city'=> $data['city'],
                                    ':country'=> $data['country'],
                                    ':codepostal'=> $data['codePostal'],
                                    ':longitude'=> $data['longitude'],
                                    ':latitude'=> $data['latitude']
                                ));

                                // if ($stmt == true) {
                                //     return  $result = $requete->fetchAll();
                                // } else {
                                //     return false;
                                // }
                            // --------------------------------------------------------
                        } else {
                            echo "To edit";
                        }

                        if (!$stmt) {
                            $dashboardErrors['database_issue'] = "Can't add this address now, try again later!";
                        } else {
                            $successMessage= "Opération réussie!";
                            
                            // header("Location: ./dashboard.php");
                        }
                    } else {
                        $dashboardErrors['codePostal_issue'] = "Enter a valid city or it's too much";
                    }
                } else {
                    $dashboardErrors['country_issue'] = "Enter a valid city or it's too much";
                }
            } else {
                $dashboardErrors['city_issue'] = "Enter a valid city or it's too much";
            }
        } else {
            $dashboardErrors['address_issue'] = "Enter a valid adresse or it's too much";
        }
    }
