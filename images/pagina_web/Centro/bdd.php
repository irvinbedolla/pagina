<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=muebles;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//$base_url="http://localhost/Agenda_2020/admin.php"
?>