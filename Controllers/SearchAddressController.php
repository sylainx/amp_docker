<?php
    

        /* ================ U S E R   C O N N E X I O N  ================ */
    $dashboardErrors = array();

    function GetSearchAddres()
    {
        if ( isset($_POST['SeachAddress']) and isset($_POST['searchInput'])) {

        //
            $successMessage = null;
            $dashboardErrors=array();

            //
            $searchInput = htmlspecialchars(htmlentities(strip_tags(trim($_POST['searchInput']))));
        
            if (strlen($searchInput) <= 100 && strlen($searchInput) >= 0) {
                            
                // ===== call function to add address on database
                $output= searchAddress($searchInput);
           
                if (count($output) <= 0) {
                    $dashboardErrors['database_issue'] = "Can't find this address now, try again later!";
                    return [];
                } else {
                    return  $output;
                }
            } else {
                $dashboardErrors['address_issue'] = "Enter a valid adresse or it's too much";
            }
        }
    }
