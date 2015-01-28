<?php
// declaration des pages
//$les_pages = array();
//$les_pages['accueil'] = array(
//	'file' => 'accueil.php' ,
//		'menu_title' => 'Accueil',
//		'title' => 'J\'aime les accueils'
//	);
//	$les_pages['anime'] = array(
//		'file' => 'anime.php' ,
//		'menu_title' => 'Animemememe',
//		'title' => 'J\'aime les anime!'
//	);
//	$les_pages['chatons'] = array(
//		'file' => 'chatons.php' ,
//		'menu_title' => 'Petits chats',
//		'title' => 'J\'aime les chatons!'
//	);
//	$les_pages['teletubbies'] = array(
//		'file' => 'teletubbies.php' ,
//		'menu_title' => 'Teletubbies',
//		'title' => 'Tinky winky, Lala, Po, Dipsy!'
//	);
    require( 'connect.php' );
    $sql = "SELECT
        `title`,
        `body`
        FROM
        `page`
        WHERE
        `page`='".$_GET['page']."'
        ;";
    if(!($result = $db-> query($sql))){
        die('erreur SQL');
    };
	if( isset( $_GET['page'] ) && $result->num_rows > 0 ) {
	$page_courante = $_GET['page'];
	} else {
	header( 'Location: index.php?page=accueil' );
	die();
	}
    $row = $result-> fetch_assoc( );
	$title = $row['title'];
    $body = $row['body'];
	// afficher le header
	include( 'header.php' );
	// afficher le contenu
	echo $body;
	// afficher le footer
	include( 'footer.php' );
    echo "<a href='http://localhost/w1-j8/animetest-w1-j8/admin.php'>Administration</a>";
