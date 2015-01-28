<?php

require_once( 'connect.php' );
$sql = "
        DELETE FROM
        page
		WHERE
		`id`='".$_GET['id']."'
		";
if( !$db->query( $sql )){
    die( $db->error );
}
echo"Op la suppression </br> Retour au panneau d'admin </br>";

echo "<a href='http://localhost/w1-j8/animetest-w1-j8/admin.php'>Administration</a>";

?>

