<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "styleshett" href = "extra.php">
    <style>
        .cuadrado{
            background-color: ##FFFFFF ;
            border-color: black ;
            width: 750px;
            height: 450px;
            border-width: 3px;
            border-style: solid;

        }
        .imagen{
    border-color: black ;
            width: 200px;
            height: 250px;
            border-width: 3px;
            border-style: solid;
            margin-bottom: 15px;
            
}
.informacion{
        border-color: black ;
            width: 700px;
            text-align: right;
}
.text2{
    text-align: center;
}

    </style>
</head>
<body>
<div class="cuadrado">      
<div class="texto">
<h5>Célula de inetidad</h5>
<div class="text2">
            <h5> Republica de chile </h5>
            <h5> servicio de registro civil e  identificación </h5>
            <div class="imagen">
            <div class = "informacion">
        <td>apellidos</td><td><input type= "text"  name ="apellido" maxlength="50" size="50"></td>
        <br>
        <br>
        <td>nombre</td><td><input type= "text" name ="nombre" maxlength="50" size="50d"></td>
        <br>
        <br>
        <td>nacionalidad</td><td><input type= "text" name ="nacionalidad" maxlength="6" size="6"></td>

        <td>sexo</td><td><input type= "text"  name ="sexo" maxlength="6" size="6"></td>
        <br>
        <br>
        <td>fecha de nacimiento</td><td><input type= "number" min = "1"  max = "100" name ="fecha de nacimiento" ></td>
        <br>
        <br>
        <td>fecha de emisión</td><td><input type= "number" min = "1"  max = "100" name ="fecha de emisión" ></td> 
        <td>fecha de vencimiento</td><td><input type= "number" min = "1"  max = "100" name ="fecha de venciento" ></td>
        <br>
        <br>
        <td>firma titular</td><td><input type= "number"  name ="firma titular" ></td>
        </div>

</div> 
</div>
        </div>
        <td>run</td><td><input type= "number"  name ="firma titular" ></td>


</body>
</html>