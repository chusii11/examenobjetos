<?php

class Paginaweb {
    protected string $html;
    public string $css;

    function __construct(){
        $this->css='<link rel="stylesheet" href="estilosweb.css">';
        $this->html='<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            '.$this->css.'
        </head>
        <body>
        <form action="formularioweb.php" method="post">
        <label>
            Nombre:
        </label>
        <input type="text" name="nombre">
    </br>
    <label>
            Apellidos:
        </label>
        <input type="text" name="apellidos">
    </br>
    <label>
            Ciudad:
        </label>
        <input type="text" name="ciudad">
    </br>
    <label>
            Código Postal:
        </label>
        <input type="text" name="cpostal">
    </br>
    <input type="submit">
    </br>
    </form>
        </body>
        </html>';
        
    }
    function paginaweb(){
        echo '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            '.$this->css.'
        </head>
        <body>
            <img src="/armadillo.jpg">
        </body>
        </html>';
    }
}
class Formulario extends Paginaweb {
    function formulario(){
        echo $this->html;
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>Estos son tus datos:</h1>
</br>
            <p>Nombre:<?php echo $_POST['nombre'] ?></p>
            </br>
            <p>Apellidos:<?php echo $_POST['apellidos'] ?></p>
            </br>
            <p>Ciudad:<?php echo $_POST['ciudad'] ?></p>
            </br>
            <p>Codigo Postal:<?php echo $_POST['cpostal'] ?></p>
        </body>
        </html>
        <?php
    }
}

?>


