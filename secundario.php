<?php
session_start();
$_SESSION['usuario'] = $_POST['user'];
$_SESSION['password'] = $_POST['pass'];
$_SESSION['genero'] = $_POST['gen'];
$_SESSION['comentarios'] = $_POST['comentarios'];
$_SESSION['color'] = $_POST['color'];
$_SESSION['fuente'] = $_POST['fuente'];
$_SESSION['tamano'] = $_POST['tamano'];
$cookie = $_POST['cookie'];
$color = $_POST['color'];
$fuente = $_POST['fuente'];
$tamano = $_POST['tamano'];
$comentarios = $_POST['comentarios'];


echo "<p style='color:$color; font-family:$fuente; font-size:$tamano;'>$comentarios</p>";


?>
<?php


//Check username and password information
if ($_SESSION['authusuario'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    //exit();    
}
    
    
    
?>
<html>
 <head>
  <title>Mi web de peliculas <?php echo $_GET['favpelicula'];?></title>
 </head>
 <body>

 
<?php
echo "Bienvenido a nuestra web, ";
echo $_SESSION["Usuario"];
echo "! <br/>";

echo "Mi pelicula favorita es: ";
echo $_GET['favpelicula'];
echo "! <br/>";

$pelirate = 9;
echo "La valoracion de mi pelicula favorita es: ";
echo $pelirate;

echo "Welcome to our site, ";
echo $_COOKIE["Usuario"];
echo "! <br/>";

echo "<p style='color:$colorp; font-family:$fuenteletra; font-size:$tamanoletra;'>$cajatexto</p>";

?>
 </body>
</html>

<?php


setcookie("comentarios","$comentarios",time()+60);
setcookie("fuente","$fuente",time()+60);
setcookie("color","$color",time()+60);
setcookie("tamano","$tamano",time()+60);


//ejercicio 3 lo tengo que poner primero para que luego pueda saber cuantos dias quedan en el mes
if($cookie=="si"){
                echo "<p>Tipo de fuente: ";
                echo $_COOKIE['fuente'];
                echo "<p>Tamaño de fuente: ";
                echo $_COOKIE['tamano'];
                echo "<p>Color de texto: ";
                echo $_COOKIE['color'];
                echo "<p>Texto: ";
                echo $_COOKIE['comentarios'];
                echo "</span>";
}
echo "<br>";

//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();    
}
?>





