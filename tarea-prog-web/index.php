<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="text-bg-dark bg-dark">

    <form action="procesar.php" method="post">
    <div class="container justify-content-center text-center bg-secondary">
        
            <div class="row-sm-12 mb-3">
            
                <label  for="name">Nombres</label>
                <input  type="text" id="name" name="name">

            </div>
            <div class="row-sm-12 mb-3">
                
                <label  for="lastname">Apellidos</label>
                <input  type="text" id="lastname" name="lastname">
                
            </div>
            <div class="row-sm-12 mb-3">
                
                <label  for="nationality">Nacionalidad</label>
                <input  type="text" id="nationality" name="nationality">
                
            </div>
            
            <label for="Genero">Genero</label>
            <select name="Genero">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>

            <div class="row-sm-12 mb-3">
        
                <label  for="rut" >Rut</label>
                <input  type="text" id="rut" name="rut" maxlength="9" placeholder="12345678-9" >
                
            </div>


           

            
            <div class="row-sm-12 mb-3">
                
                <label  for="birthdate">Fecha de nacimiento</label>
                <input  type="text" id="birthdate" name="birthdate">
                
            </div>

            <div class="row-sm-12 mb-3">
                
                <label  for="carrer">Profesion</label>
                <input  type="text" id="carrer" name="carrer">
                
            </div>

            <div class="row-sm-12 mb-3">
                
                <label  for="carrer">Profesion</label>
                <input  type="text" id="carrer" name="carrer">
                
            </div>

        
            <!-- foto de la persona -->
            <!-- select de la fecha -->
        
            <!-- fecha de emision   -->
        
            <!-- fecha vencimiento  -->
        
        
    
    </div>

    </form>

    
    
</body>
<script src="js/boostrap.js"></script>
</html>