<?php include('../bodyform.php');?>
<h1 class="text-center">Annulation de la sceance</h1>
<div class="container">
<form action="traitement.php" method="post">
<div class="form-group">
            <label for="motif">Motif: </label> <input type="text" name="motif" class="form-control" value="" id="motif" />
</div>
<div class="form-group">
            <label for="com">Commentaire: </label> <textarea name="com" class="form-control" id="com" cols="30" rows="10"></textarea>
</div>
<div class="form-group">
            <input type="submit"  class="btn btn-primary"value="Envoyer" /> <input type="reset" class="btn btn-secondary" value="Annulez" />
</div>
</form>
</div>

    
</body>
</html>