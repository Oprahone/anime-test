<?php 
    try{
        $db = new mysqli( 'localhost' , 'root' , '' , 'cms' );
    }catch (mysqli_sql_exception $e){
        die('probleme de connection');
	}
?>