<?php
  if(!isset($_COOKIE['color'])){ // si no existe la cookie
    if(isset($_POST['color'])){ // pero si sí existe la llamada previa del formulario
        //se crea cookie
        setcookie("color", $_POST['color'], time() + (30) );
        header('Location: ejemplotarea3.php'); // se vuelve a cargar
        exit;

    }

  }
 ?>


<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario con CSS</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        <?php
            if (isset($_COOKIE['color'])){
              echo "color: ". $_COOKIE['color'] .";";
            }

         ?>
    }

    .formulario {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        width: 100%;
    }

    .formulario h2 {
        margin-top: 0;
        font-size: 24px;
        text-align: center;
    }

    .formulario input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .formulario button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .formulario button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<?php
  if(isset($_COOKIE['color'])){
    echo "Texto del color " . $_COOKIE['color'];
  }
  else{
    echo '<div class="formulario">


          <h2>Bienvenido al Formulario</h2>


        <form method="post" action="ejemplotarea3.php">
            Selecciona el color:
            <select name="color">
              <option value="red">Rojo</option>
              <option value="blue">Azul</option>
              <option value="green">Verde</option>
              <option value="yellow">Amarillo</option>
            </select><br><br>
            <button type="submit">Elegir</button>
        </form>
        <br>

    </div>


    ';

  }

 ?>

</body>
</html>
