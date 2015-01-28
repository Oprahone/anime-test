<?php
    require( 'connect.php' );
	if(!isset($title)){
		$title = "Le dev est un boulet";
	}
$sql = "SELECT
        `menu_title`,
        `page`
        FROM
        `page`
        ";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
<div id="header" class="largeur-de-la-balle">Le header</div>
<div id="menu" class="largeur-de-la-balle">
<?php
if(!($result = $db-> query($sql))){
    die('erreur SQL');
}
while( $row = $result-> fetch_assoc()):
 ?>
	<a href="index.php?page=<?php echo $row['page'];?>"><?php echo $row['menu_title']?></a>
<?php endwhile;?>
</div>
<div id="content" class="largeur-de-la-balle">