<html>
 <head>
  <title>El mejor lenguaje es <?php echo $_GET['lengu'];?></title>
 </head>
 <body>
<?php
echo "Hola ";
echo $_COOKIE['username'];
echo ". El mejor lenguaje es ";
echo $_GET['lengu'];
echo " aunque ";
echo $_GET['lengu2'];
echo" no está mal"
?>
 </body>
</html>