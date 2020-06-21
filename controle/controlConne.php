<?php
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);
try{
    $bd=new PDO('mysql:host=localhost;dbname=tutorat','root','');

}
catch(Exception $e){

}
$req=$bd->prepare('select email, mot_de_passe,compte from utilisateur
where email=:email;');
$req->bindParam(':email',$email);
$req->execute();
while($donnees=$req->fetch()){
    if(password_verify($mdp,$donnees['mot_de_passe'])){
        session_start();
        $_SESSION['login']=$email;
        $_SESSION['droits']=$donnees['compte'];
    }
    else{
        echo 'Adresse ou Mot de passe incorrect';
    }
}

$req->closeCursor();

?>