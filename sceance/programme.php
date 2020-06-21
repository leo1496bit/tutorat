<!DOCTYPE html>
<html>
<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    <?php
    include("../entete.html");?>
    <section class="container">
        <h1 class="text-center">Programme des sceances</h1>
        <table class="table table-striped table-bordered">
            <tr>
                <th>
                    Date et heure
                </th>
                <th>
                    Cour
                </th>
                <th>

                </th>

            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>
                    
                </td>
            </tr>
        </table>
        <div >
           <button id="addSceance" class="btn btn-secondary" onclick="ajoutDeSceance()">Nouvelle sceance</button>
        </div>

        </div>
       
    </section>
    <footer>
    </footer>

<script>
var bouton=document.createElement('input');
bouton.type='button';
bouton.value='s\'incrire';
bouton.className='btn btn-primary';
var bt=[];
function ajoutDeSceance(){
    var heure=prompt("veillez saisir l'heure");
    var cour=prompt("veillez saisir le cour");
    $('table').append("<tr><td>"+heure+"</td><td>"+cour+"</td><td></td></tr>");
}
for(var i=0; i<document.getElementsByTagName('tr').length; i++){
    bt.push(bouton.cloneNode(true));
}

    for(var i=0,j=2; j<document.getElementsByTagName('td').length; i++,j+=3){
        document.getElementsByTagName('td')[j].appendChild(bt[i])
    }
for(var i=0; i<bt.length; i++){
    console.log(document.getElementsByTagName('tr')[i+1]);
    var dat = document.getElementsByTagName('tr')[i+1].childNodes[0].textContent;
    var cour = document.getElementsByTagName('tr')[i+1].childNodes[1].textContent;
    bt[i].onclick=function(){
        if(confirm("Voulez vous vraiment vous inscrire ?")){
            inscrire(dat,cour);
        }
    };
    
}
function inscrire(date,cour){
    var xhr= new XMLHttpRequest();
    xhr.open('GET','page.php?date='+date +'&cour='+cour);
    xhr.onreadystatechange = function(){
        

    }
    $.get('page.php',{date:date,cour:cour},function(){
        alert("inscription réuissi");
    })
}

</script>
</body>
</html>