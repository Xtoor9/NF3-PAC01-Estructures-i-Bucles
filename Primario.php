<?php
session_unset();
?>
<html>
<head>
 <title>Mi web de peliculas</title>
</head>
<body>
 <form method="post" action="secundario.php">
  <p>Pon tu puto Usuario:
   <input type="text" name="Usuario"/>
  </p>
  <p>Introduze la contraseña:
   <input type="password" name="Contraseña"/>
  </p>
  <p>Introduze el telefono:
   <input type="text" name="Telefono"/>
  </p>
  <p>
  <textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
  </p>
  <p>Introduze el color que quieras:
  <input type="color" name="color"/>
  </p>
  <p>Introduze el tipo de fuente que quieras:
  <input type="text" name="fuente" />
  </p>
  <p>Introduze el tamaño de la letra que quieras:
  <input type="text" name="tamano" />
  </p>
  //ejercicio 5
  <p>Quieres guardar las cookie:
  <input type="checkbox" name="cookie" value="si"/>
  </p>
  <p>
   <input type="submit" name="submit" value="Submit"/>
  </p>
 </form>
</body>
</html>


<?php
$mipelifav = urlencode("My little bitch");
echo "<a href='secundario.php?favpelicula=$mipelifav'>";
echo "Click aquí para descubrir cuál es mi película favorita!";
echo "</a>";
?>



<?php
date_default_timezone_set("America/New_York");
$leapyear = date("L");
if ($leapyear == 1) {
echo "Hooray! It\"s a leap year!";
}
else {
echo "Aww, sorry, mate. No es un año bisiesto.";
}
?>

<?php
date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }

?>

<?php
$mipelifav = urlencode("Go");
echo "<a href='N2P1CristianTortosaComments.php?favpelicula=$mipelifav'>";
echo "Click aquí para las notas";
echo "</a>";
?>



<?php
//para decir feliz navidad o verano ejercicio 4 tiene que estar primero para que sepa cuantos dias quedan en el mes
          if ($month == 1) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 2) {
                 $date1 = date("d");  
                 $date2 = 28 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 3) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 4) {
                 $date1 = date("d");  
                 $date2 = 30 ; 
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 5) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 6) {
                 $date1 = date("d"); 
                 $date2 = 30 ; 
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 7) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 8) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 9) {
                $date1 = date("d");  
                 $date2 = 30;  
                 $daysLeft = $date1 - $date2 ;  
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 10) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 11) {
                 $date1 = date("d");  
                 $date2 = 30 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 12) {
                 $date1 = date("d");  
                 $date2 = 31 ;  
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }

            
//para decir el dia el mes ejercicio 1
$diaAnterior = date('l', strtotime('-1 day')) ;
echo "<p>Yesterday it was $diaAnterior</p>";
$mesAnterior = date("F", strtotime("+1 month"));
echo "<p>The previous month is $mesAnterior</p>";
echo "Hay ";
$mes = date("n");
$ano = date("o");
$diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
echo $diasMes;
echo " días en este mes.";
echo "<br>";
$mesFinal = (12);
$resultado = $mesFinal - $mes;
echo "Faltan ";
echo $resultado;
echo " meses para acabar este año.";
echo "<br>";
$mesestotales = 12;
echo "<p>Quedan $daysLeft dais para que se acaben el mes</p>";
            
            include 'include.php';
            echo "<p>$developed</p> <br/>";

//ejercicio 6 contar las veces que entras
echo "U visited the page that times: ";
$_SESSION['number']=$_SESSION['number']+1;
echo $_SESSION['number'];


//ejercicio 2 nombre del desarollador 
$developed = "Site developed by: <a href=\"cristian.tortosa.ov@gmail.com\">Cristian Tortosa</a>";

//ejercicio 7 notas
echo "<br><a href='N3P117comments.php?favpelicula=$mipelifav'>";
echo "Click aquí para cometarios";
?>
</body>
</html>







