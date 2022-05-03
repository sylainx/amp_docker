<?php
        
    // GetAllAddress();
    //  echo '<pre>';
    //  echo var_dump(GetAllAddress());
    //  echo '</pre>';

    function GetAllAddress()
    {
        if (is_array(AllAddress()) and count(AllAddress()) > 0) {
            
            return AllAddress();
        } else {
            return [];
        }
    }
