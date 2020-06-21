<?php
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST ['prenom']);
$classe=htmlspecialchars($_POST['classe']);
$email=htmlspecialchars($_POST['mail']);
$mdp=htmlspecialchars($_POST['mdp']);
$tel=htmlspecialchars($_POST['tel']);
$dateN=htmlspecialchars($_POST['naiss']);
$confirm=htmlspecialchars($_POST['confirm']);
$matiere=htmlspecialchars($_POST['matiere']);
$compte=htmlspecialchars($_POST['compte']);
if(!empty($nom)&&!empty($prenom)&&!empty($classe)&&!empty($email) && !empty($mdp) && $confirm==$mdp
){
    $mdp=password_hash($mdp, PASSWORD_DEFAULT);
try{
    $bd=new PDO('mysql:host=localhost;dbname=tutorat','root','');

}
catch(Exception $e){
}
$req=$bd->prepare('insert into utilisateur(nom,prenom,classe,email,mot_de_passe,matiere,telephone,date_naissance,compte)values(:nom,:prenom,:classe,:email,:pass,:matiere,:tel,:naiss,:compte)');
$req->bindParam(':nom',$nom);
$req->bindParam(':prenom',$prenom);
$req->bindParam(':classe',$classe);
$req->bindParam(':email',$email);
$req->bindParam(':pass',$mdp);
$req->bindParam(':tel',$tel);
$req->bindParam(':naiss',$dateN);
$req->bindParam(':matiere',$matiere);
$req->bindParam(':compte',$compte);
$req->execute();
}
else{
    echo 'echec d\'enregistrement';
}

?>