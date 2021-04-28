<?php 
ob_start();

	if(isset($_POST['objet'])){

		if (!empty($_POST['email']) and !empty($_POST['message']) and !empty($_POST['nom'])){

			$TO = "dmoujabber@gmail.com"; 

								$nom = ($_POST['nom']);
								$email = ($_POST['email']);
								$message = ($_POST['message']);

								

									while (list($key, $val) = each($HTTP_POST_VARS)) { 
									$message .= "$key : $val\n"; 
									} 

									mail($TO, $objet, $nom, $message, $email); 
									header("Location:page_redirection.html"); 

		
		}							
	else {

		$error = "<label style='color:red'>*Veuillez remplir tous les champs.</label>";
		$return = "<p style='color:red;font-size:16px'>Une erreur c'est produite, pour retournez au formulaire de contact, <a href='#s7'> cliquez ici </a></p>";
		}					
	}

ob_flush();
?> 
