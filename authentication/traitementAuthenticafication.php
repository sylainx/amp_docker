<?php
   
   define('__ROOT__', dirname(dirname(__FILE__)));

    // On inclut la connexion à la base de données
    require_once(__ROOT__.'/ConnexionBD/bdd.php');
    // On inclut la connexion à la base de données
    require_once(__ROOT__.'/functions/functions.php');

    //ajout d'un nouvel utilisateur
    
if (isset($_POST['signUp'])) {

    // ============ reset 
    $globalErrors=array();
    
    $nameUser= htmlspecialchars($_POST['nameUser']);
    $email=htmlspecialchars($_POST['email']);
    $password=strip_tags($_POST['password']);
    $confirmPwd=htmlspecialchars($_POST['confirmPwd']);
    
    $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux comptes différents ..

    // Si l'email est correct and if the length is under 100
    if (filter_var($email, FILTER_VALIDATE_EMAIL) and strlen($email) <= 100) {

        if (strlen($password) > 0 ) {

            // verify if email exist
            $check = $bdd -> prepare('SELECT codeUser FROM users WHERE email = :email');
            $check -> execute(
                array(
                ':email' => $email
            	)
            );
    
            $row = $check ->rowCount();
    
            // IF the email exist
            if ($row == 0) {
        
            	// code...
				// echo '<br>user not exist';
                $data = $check ->fetch();

                // The length of nameUser <= 100 AND ONLY Characters
                if (strlen($nameUser) <= 100 and validateOnlyString($nameUser) ) {
					// echo '<br>name user correct';

                    if ($password === $confirmPwd) { // si les deux mdp saisis sont bons
						// echo '<br>passwords match: '.$password;
                        $password= password_hash($password, PASSWORD_BCRYPT);

                        $codeUser="user-".rand(1, 10).rand(50, 99);
						
                        $requete= $bdd->prepare("INSERT INTO `users` (`nameUser`, `email`, `codeUser`, `password`)
						VALUES ( :nameUser, :email, :codeUser, :password)");

                        $validation = $requete->execute(array(
                            ':nameUser'=> $nameUser,
                            ':email'=> $email,
                            ':codeUser'=> $codeUser,
                            ':password'=> $password,
                        ));

                        if ($validation) {
                            $clic= null;
                            
                            // header('location: ../index.php');
							
                        } else {
							$globalErrors['insert_in_bd_issue'] = "Can't add this user now, please try again later.";
                        }
                    } else {
						$globalErrors['password_dont_match'] = "The passwords are not same.";
                    }
                } else {
                    $globalErrors['nameUser_issue'] = "The name is to mush.";
                }
            } else {
                $globalErrors['email_exist'] = "This email is already exist. Please, enter another.";
            }
        } else {
            $globalErrors['password_exist'] = "The password must be at least: one lowercase char, uppercase char, one digit, one special sign of @#-_$%^&+=§!?.";
        }
    } else {
        $globalErrors['email_issue'] = "Incorrect email. Try another";
    }
}





        /* ================ U S E R   C O N N E X I O N  ================ */

if (isset($_POST['identifier']) and isset($_POST['codeUser']) && isset($_POST['password'])) {
    
    $codeUser= htmlspecialchars($_POST['codeUser']);
    $password=strip_tags($_POST['password']);
        
    // Si le codeUser n'est pas malvéillant
    if (preg_replace('/[^a-z-]/i', '', $codeUser)) {
        
        $check = $bdd -> prepare('SELECT `password` FROM users WHERE codeUser = :codeUser');
    
        $check -> execute(array(
        ':codeUser'=> $codeUser
        ));
        
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row == 1) {
            
            // $data = $check->fetch();
            $pwd = $data['password']; //stocker premiere password
            $check->closeCursor();
            
            if (password_verify($password, $pwd)) {

                $stmt = $bdd->prepare('SELECT codeUser, nameUser FROM users WHERE codeUser = :codeUser');
                $stmt->execute(array(
                    ':codeUser'=> $codeUser
                ));

                $data1 = $stmt->fetch();
                
                $alertMsgToShow="You are authorized to logged";

                echo '<script type="text/javascript">alert("' . $alertMsgToShow . '")</script>';
            // header('location: ../dashboard.php');
            } else {
                $globalErrors['password_issue'] = "Incorect password !";
            }
        } else {
            $globalErrors['codeUser_issue'] = "Your code is not exist";
        }
    } else {
        $globalErrors['codeUser_issue'] = "You need to enter a valid codeUser to continue";
    }
}
