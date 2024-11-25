<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "styleshett" href = "extra.css">
    <style>
        .cuadrado_perfecto{
            min-height: 100vh;
            justify-content:space-evenly;
            align-items:center;
            display: flex;

        }
        .cuadrado{
            background-color: ##FFFFFF ;
            border-color: black ;
            width: 650px;
            height: 425px;
            border-width: 3px;
            border-style: solid;

        }
        .cuadrado2{
            background-color: ##FFFFFF ;
            border-color: black ;
            width: 650px;
            height: 425px;
            border-width: 3px;
            border-style: solid;
            float:right;
            

            
        }
        .imagen{
            border-color: black ;
            width: 175px;
            height: 225px;
            border-width: 2px;
            border-style: solid;
            margin-bottom: 15px;
            
}
.informacion{
        border-color: black ;
            width: 630px;
            text-align: right;
}
.text2{
    text-align: center;
}
.chile{
    width: 75px;
    height: 50px;
    text-align: right;
    
}
.texto2{
    border-color: black ;
            width: 650px;
            height: 50%;
            border-width: 2px;
            border-style: solid;
            position: relative;
            top: 50%;
}

    </style>
</head>
<body>
<?php require_once "informacion.php" ?>
<div class="cuadrado_perfecto">
<div class="cuadrado">      
<div class="texto">
<h5>Célula de identidad</h5>

<div class="text2">
            <h5> República de Chiles </h5>
            <h5> servicio de registro civil e identificación </h5>
            <div class="imagen">
            <div class = "informacion">
        <td>Apellidos</td><td><input type= "text"  name ="apellido" maxlength="40" size="40"></td>
        <br>
        <br>
        <td>Nombre</td><td><input type= "text" name ="nombre" maxlength="40" size="40"></td>
        <br>
        <br>
        <td>Nacionalidad</td><td><input type= "text" name ="nacionalidad" maxlength="6" size="6"></td>

        <td>Sexo</td><td><input type= "text"  name ="sexo" maxlength="6" size="6"></td>
        <br>
        <br>
        <td>Fecha de nacimiento</td><td><input type= "number" min = "1"  max = "100" name ="fecha de nacimiento" ></td>
        <br>
        <br>
        <td>Fecha de emisión</td><td><input type= "number" min = "1"  max = "100" name ="fecha de emisión" ></td> 
        <td>Fecha de vencimiento</td><td><input type= "number" min = "1"  max = "100" name ="fecha de venciento" ></td>
        <br>
        <br>
        <td>Firma titular</td><td><input type= "number"  name ="firma titular" ></td>
        </div>

</div> 
</div>
<td>RUN <input type= "text"  name ="RUN" maxlength="20" size="10"></td>
</div>
</div>
<div class="cuadrado2"> 
    <div class="texto2">
<td>Nacioen: </td><td><input type= "text" min = "1"  max = "100" name ="fecha de nacimiento" ></td>
<br>
<td>Profeción: </td><td><input type= "text" min = "1"  max = "100" name ="fecha de nacimiento" ></td>
<br>
<h5>INCHL10000000016<<<<<<<<<<<<<< 
8302217M23022CHL6738495094-k-2 </h5>
</div>
</div>
</div>
</div>
</div>
</body>
</html>