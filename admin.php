<?php
try{
    $db = new mysqli( 'localhost' , 'root' , '' , 'cms' );
}catch (mysqli_sql_exception $e){
    die('probleme de connection');
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <table>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Menu_title</td>
                <td>Page</td>
                <td>Body</td>
                <td>modifier</td>
                <td>supprimer</td>
            </tr>
    <?php

        $sql = "SELECT
                    `id`,
                    `title`,
                    `menu_title`,
                    `page`,
                    `body`
                FROM
                    `page`";

        if(!($result = $db-> query($sql))){
            die('erreur SQL');
        }
        while( $row = $result-> fetch_assoc( )) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['menu_title'];?></td>
                <td><?php echo $row['page'];?></td>
                <td><?php echo $row['body'];?></td>
                <td><?php echo "<a href=\"http://localhost/w1-j8/animetest-w1-j8/udapte.php?id="?><?php echo $row['id']?><?php echo "\">modifier</a>";?></td>
                <td><?php echo "<a href=\"http://localhost/w1-j8/animetest-w1-j8/form_delete.php?id="?><?php echo $row['id']?><?php echo "\">supprimer</a>";?></td>
            </tr>
            <?php
        }
    ?>
        <tr>
            <form action="form_add.php" method="post">
                    <td></td>
                    <td><input type="varchar(100)" value="" name="title" placeholder="title"/></td>
                    <td><input type="varchar(100)" value="" name="menu_title" placeholder="menu_title"/></td>
                    <td><input type="varchar(100)" value="" name="page" placeholder="page"/></td>
                    <td><input type="text" name="body" value="" placeholder="body"/> <input type="submit" value="valider"/></td>
            </form>
        </tr>
    </table>

</body>
</html>