<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
setcookie("username","David",time()+60);

//Check username and password information
if (($_SESSION['username'] == 'David') and
    ($_SESSION['userpass'] == '2003')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Algo ha salido mal';
    exit();     
}
?>
<html>
 <head>
  <title>Bienvenido</title>
 </head>
 <body>
<?php
echo "<a href='EX1P2.php?lengu=JavaScript&lengu2=PHP'>";
echo "Pulsa para ver verdades como punyos"; 
echo "</a>";
?>
 </body>
</html>