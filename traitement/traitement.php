<?php 
try{
	$bd=new PDO('mysql:host=localhost;dbname=tutorat','root','');
}
catch(Exception $e){

}
$req=$bd->prepare('insert into etudiant(nom,prenom,classe,date_naissance,email, telephone, matiere) values(:nom,:prenom,:ine,:classe,:email,:matiere)');
$req->execute(array('nom'=>$_POST['nom'],
	'prenom'=>$_POST['prenom'],
	'ine'=>$_POST['ine'],
	'classe'=>$_POST['classe'],
	'email'=>$_POST['email'],
	'matiere'=>$_POST['matiere']));
 ?>