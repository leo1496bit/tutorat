<?php include('bodyform.php');?>
<h1 class="text-center">ajout d'une sceance</h1>
<div class="container">
<form action="traitement.php" method="post">
        <div class="form-group">
            <label for="date">Date: </label> <input type="date" name="date" class="form-control" value="" id="date" />
</div>
        <div class="form-group">
        <div class="form-group">
            <label for="matiere">Matiere: </label> <select name="matiere" id="matiere" class="form-control">
                <option value="java">Java</option>
                <option value="web">Developpement Web</option>
                <option value="boole">Algebre de boole</option>
            </select>
</div>

            <label for="desc">Description du cours: </label> <textarea name="com" class="form-control" id="desc" cols="30" rows="10"></textarea>
</div>
<div class="form-group">
            <input type="submit"  class="btn btn-primary"value="Envoyer" /> <input type="reset" class="btn btn-secondary" value="Annulez" />
</div>
</form>
</div>

    
</body>
</html>