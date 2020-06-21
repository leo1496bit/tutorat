<!DOCTYPE html>
<html>
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="mesCSS/bootstrap.min.css">
</head>
<body style="background-color:white;">
<?php
include('../entete.html');
?>
<section class="container">
        <h1 class="text-center"> Demande d'ajout</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Action
                </th>

            </tr>
            <tr>
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
            </tr>
            <tr>
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
            </tr>
            <tr>
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
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </section>
    <footer>
    </footer>
<script>
    var tab=document.getElementsByTagName('td');
    for(var i=0; i<tab.length; i++){
        if(i%2!=0){
            var tem = document.createElement('button');
            var tem2 = document.createElement('button');
            tem2.href='#';
            tem.href='#';
            tem.className="btn btn-primary"
            tem2.className="btn btn-danger"
            tem.appendChild(document.createTextNode('accepter'));
            tem2.appendChild(document.createTextNode('Refuser'));
            tab[i].appendChild(tem);
            tab[i].appendChild(tem2);
            tab[i].className="text-right";
        }
    }
</script>

</body>
</html>