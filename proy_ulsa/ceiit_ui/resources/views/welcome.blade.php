<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
  body {
    margin: 0;
    padding: 0;
    background: url('https://prochihuahua.mx/wp-content/uploads/2021/11/243294684_5173099216040053_2048473542470921784_n-1024x683.jpg');
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
  }
  .login-container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5); 
  }
  .login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
  }
  .login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .login-form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      <h2>Login</h2>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button onclick="redireccionar()">Login</button>     
         <script>         
         function redireccionar() {            
             window.location.href = '/home';         
            }
            </script>
    </div>
  </div>
</body>
</html>