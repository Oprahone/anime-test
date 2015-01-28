<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>udapte</title>
</head>
<body>
<?php
require_once( 'connect.php' );
$sql = "SELECT
        `id`,
        `title`,
        `menu_title`,
        `page`,
        `body`
        FROM
        `page`
        WHERE
        `id`='".$_GET['id']."'
        ";
if(!($result = $db-> query($sql))){
    die('erreur SQL');
}
while( $row = $result-> fetch_assoc( )) {
?>
<form action="form_update.php" method="post">
    <fieldset>
        <legend>MODIFIER</legend>
        <input type="hidden" type="int(11)" name="id" value="<?php echo $row['id'] ?>"/>
        <input type="varchar(100)" value="<?php echo $row['title']?>" name="title"/>
        <input type="varchar(100)" value="<?php echo $row['menu_title']?>" name="menu_title"/>
        <input type="varchar(100)" value="<?php echo $row['page']?>" name="page"/>
        <textarea name="body" cols="30" rows="30" ><?php echo $row['body']?></textarea>
        <input type="submit" value="valider"/>
    </fieldset>
</form>
<?php
}
?>
</body>
</html>