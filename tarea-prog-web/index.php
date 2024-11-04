<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="text-bg-dark bg-dark">
    <form action="procesar.php" method="POST">
    <div class="container justify-content-center text-center">
            <div class="row-sm-12 mb-3">
            
                <label  for="name" class="form-label">Nombres</label>
                <input  type="text" id="name" name="name">

            </div>
            <div class="row-sm-12 mb-3">
                
                <label  for="lastname">Apellidos</label>
                <input  type="text" id="lastname" name="lastname">
                
            </div>
            <div class="row-sm-12 mb-3">
                
                <label  for="nationality" class="form-label">Nacionalidad</label>
                <input  type="text" id="nationality" name="nationality">
                
            </div>
            <div class="row-sm-12 mb-3">
                <label for="Genero" class="form-label">Genero</label>
                <select name="Genero">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            

            <div class="row-sm-12 mb-3">
        
                <label  for="rut" class="form-label" >Rut</label>
                <input  type="text" id="rut" name="rut" maxlength="9" placeholder="12345678-9" >
                
            </div>


           

            
            <div class="row-sm-12 mb-3">
                
                <label  for="birthdate" class="form-label">Fecha de nacimiento</label>
                <input  type="text" id="birthdate" name="birthdate">
                
            </div>

            <div class="row-sm-12 mb-3">
                
                <label  for="carrer" class="form-label">Profesion</label>
                <input  type="text" id="carrer" name="carrer">
                
            </div>

            <div class="row-sm-12 mb-3">
                
                <label  for="carrer" class="form-label">Profesion</label>
                <input  type="text" id="carrer" name="carrer">
                
            </div>
            

        
            <!-- foto de la persona -->
            <div class="row-sm-12 mb-3">
                    <label for="imagen" class="form-label">Imagen para Carnet</label>
                    <input class="form-control" type="file" id="imagen" name="imagen">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <!-- select de la fecha -->
        
            <!-- fecha de emision   -->
        
            <!-- fecha vencimiento  -->
        
        
    
    </div>

    </form>

    
    
</body>
<script src="js/boostrap.js"></script>
</html>