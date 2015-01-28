<?php

require_once( 'connect.php' );
$sql = "INSERT INTO
		`page`
		(
			`title`,
			`menu_title`,
			`page`,
			`body`
			) VALUES (
			'".$db->real_escape_string( $_POST['title'] ) ."',
			'".$db->real_escape_string( $_POST['menu_title'] ) ."',
			'".$db->real_escape_string( $_POST['page'] ) ."',
			'".$db->real_escape_string( $_POST['body'] ) ."'
		)";
if( !$db->query( $sql )){
    die( $db->error );
}
echo"Op l'ajout </br> Retour au panneau d'admin </br>";

echo "<a href='http://localhost/w1-j8/animetest-w1-j8/admin.php'>Administration</a>";

?>
