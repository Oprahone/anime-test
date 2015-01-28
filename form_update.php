<?php

require_once( 'connect.php' );

$sql = "UPDATE
		page
		SET
		`title`='".$db->real_escape_string( $_POST['title'] )."',
		`menu_title`='". $db->real_escape_string( $_POST['menu_title'] ) ."',
		`page`='". $db->real_escape_string( $_POST['page'] ) ."',
		`body`='". $db->real_escape_string( $_POST['body'] ) ."'
		WHERE
		`id`='".$_POST['id']."'
		";
if( !$db->query( $sql )){
    die( $db->error );
}
echo"Op la modif </br> Retour au panneau d'admin </br>";

echo "<a href='http://localhost/w1-j8/animetest-w1-j8/admin.php'>Administration</a>";

?>