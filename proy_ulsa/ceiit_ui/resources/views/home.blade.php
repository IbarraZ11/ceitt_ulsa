<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<style>
body {
    background-image: url('https://lh3.googleusercontent.com/p/AF1QipPBdzk2pu7gGyhSPmLgQtrroQ-lcbSaaR7G68s_=s680-w680-h510');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
  }
  .results-box {
    background-color: rgba(255, 255, 255, 0.7); 
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    display: inline-block; 
  }
</style>
</head>
<body>
  <h1>Bienvenido a CEIIT ULSA</h1>

  <form method="get">
    <input type="text" name="search" placeholder="Buscar por nombre">
    <button type="submit">Buscar</button>
  </form>

  <div class="results-box">
  <?php
    // Realizar una conexión a la base de datos en phpMyAdmin
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ceiit_ulsa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión tuvo éxito
    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener el término de búsqueda del formulario
    $searchTerm = $_GET['search'] ?? '';

    // Realizar la consulta SELECT con filtro por nombre
    $sql = "SELECT * FROM articulos WHERE nombre LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Mostrar los resultados
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "- Inventario: " . $row["inventario"] . "<br>";
      }
    } else {
      echo "No se encontraron resultados.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
  ?>
  </div>
</body>
</html>
