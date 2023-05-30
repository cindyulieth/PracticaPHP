<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practicaPHP</title>
    <link rel="stylesheet" href="style.css">
  

  </head>

  <body>
  
      
  <form  method="POST" action="">
    <fieldset>
      <h2><em> Formulario de Registro</em> </h2>
      <label for="nombre">Nombre <span><em>(Requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required />

      <label for="apellido">Apellido <span><em>(Requerido)</em></span></label>
      <input type="text" name="apellido" class="form-input" required />

      <label for="email">Email <span><em>(Requerido)</em></span></label>
      <input type="email" name="email" class="form-input" required />

      <input class="form-btn" name="submit" type="submit" value="Suscribirse" />

    </fieldset>

    <?php
       if ($_POST) {
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $email = $_POST["email"];

   
    
      $servername = "localhost";
      $username = "root";
      $password = "";  
      $dbname = "cursosql";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }
     $sql = "INSERT INTO empleados(nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

     if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
      }
       
       
    ?>
    

  </form>
  </body>
 
</html>
