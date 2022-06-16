<!-- 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once(ROUTE_DIR.'vue/inc/menu.html.php'); ?>
    

    <br>
    <div>
    <?php if(empty($users)):?>
        <h1>Aucun résultat</h1>
    <?php endif;?>
    <?php if(!empty($users)):?>
            <table border="2">
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Téléphone</td>
                    <td>Email</td>
                </tr>
                <?php foreach ($users as $key => $val):?>
                    <tr>
                        <td><?php echo $val['nom'];?></td>
                        <td><?php echo $val['prenom'];?></td>
                        <td><?php echo $val['telephone'];?></td>
                        <td><?php echo $val['email'];?></td>
                    </tr>
                <?php endforeach;?>
            </table>
    <?php endif;?>
    </div>
</body>

</html> -->