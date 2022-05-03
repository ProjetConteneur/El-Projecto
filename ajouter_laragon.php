<!DOCTYPE html> 
<html lang="fr"> 
    <head> 
        <meta charset="UTF-8"> 
    </head> 
    <body> 
        <?php 
        $mysqli = new mysqli("localhost", "root","", "port1");   
        $nom = $_POST['nom']; 
        $prenom = $_POST['prenom']; 
        $email = $_POST['email']; 
        $adresse= $_POST['adresse']; 
        $cp= $_POST['cp']; 
        $ville = $_POST['ville']; 
        $tel= $_POST['tel']; 
  
        $requete = "INSERT INTO clients(nom,prenom,email,adresse,cp,ville,tel)  VALUES('$nom','$prenom','$email','$adresse','$cp','$ville','$tel')";  $resultat = $mysqli->query($requete); 
        if($resultat){ 
        echo "Nous avons bien reçu vos données, merci !";  }else{ 
        echo $mysqli->error; 
        echo "bug"; 
        } 
        ?> 
        <p>
            <a href="index.php"> Retour au formulaire</a>
        </p> 
    </body> 
</html>
