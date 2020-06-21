
<?php include('../bodyform.php');?>
<div class="container">
            <h1 class="text-center"> INSCRIPTION </h1>
            <form action="../controle/inscription.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom: </label> <input type="text" class="form-control" name="nom" value="" , id="nom" />
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom: </label> <input type="text" class="form-control" name="prenom" value="" , id="prenom" />
                </div>
                <div class="form-group">
                    <label for="classe">Classe: </label> <input type="text" class="form-control" name="classe" value="" placeholder="i1 par exemple", id="classe" />
                </div>
                <div class="form-group">
                    <label for="naiss">Date de Naissance: </label> <input type="date" class="form-control" name="naiss" , id="naiss" />
                </div>
                <div class="form-group">
                    <label for="mail">Email: </label> <input type="email" class="form-control" name="mail" value="" , id="mail" />
                </div>
                <div class="form-group">
                        <label for="tel">Telephone: </label> <input type="text" class="form-control" name="tel" value="" , id="tel" />
                    </div>
                    <div class="form-group">
            <label for="mdp">Mot de passe: </label> <input type="password" name="mdp" class="form-control" value="" , id="mdp" />
                </div>
                <div class="form-group">
            <label for="confirm">Retapez le mot de passe: </label> <input type="password" name="confirm" class="form-control" value="" , id="confirm" />
                </div>
                <div class="form-group">
                    <label for="mat">Matiere: </label> <select class="form-control" name="matiere">
            <option value="java">Java</option>
            <option value="javaAv">Java Avancee</option>
            <option value="poo">POO</option>
            <option value="web">Developpement Web</option>
            <option value="system">Systeme d'exploitation</option>
            <option value="boole">Algebre de boole</option>
            <option value="bdd">Base de donnees</option>
            <option value="electricite">Electricite</option>
            <option value="c">Programation en C</option>
            <option value="c">Aucune</option>
        </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Envoyer" /> <input type="reset" value="Annulez" class="btn btn-secondary" />
                </div>
                <input type="hidden" name="compte" value=<?php echo $_GET['compte'];?>>
        
            </form>
    </div>
    
    <footer>
    </footer>


</body>
</html>