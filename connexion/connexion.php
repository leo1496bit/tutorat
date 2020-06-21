<?php include('../bodyform.php');?>
<div class="container" style="width:25%">
    <h1 class="text-center"> CONNEXION </h1>
    <form action="../controle/controlConne.php" method="post">

        <div class="form-group">
            <label for="email">Email: </label> <input type="email" name="email" class="form-control" value="" , id="email" />
</div>
        <div class="form-group">
            <label for="mdp">Mot de passe: </label> <input type="password" name="mdp" class="form-control" value="" , id="mdp" />
</div>
            <input type="submit"  class="btn btn-primary"value="Connecter" /> 
</div>

    </form>
    </div>
    
    <footer>
    </footer>


</body>
</html>