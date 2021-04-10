<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>
        Show goods
    </h1>
    <table>
        <tr>
            <td>
                <a href = "add_good.php">Add goods</a>
            </td>
            <td>
                <a href = "#">Log out</a>
            </td>
        </tr>
    </table>
    <table border = "1" >
        <tr align = "center">
            <td id = "SH" >
                #
            </td>
            <td id = "id"  >
                Goods id
            </td>
            <td id = "name" >
                Goods name
            </td>
            <td id = "pr" >
                Good price (bath)
            </td>
            <td id = "gq" >
                Good quantity
            </td>
            <td id = "ed" >
                Edit
            </td>
            <td id = "de" >
                Delete
            </td>
        </tr>
        <?php 
            include 'condb.php';
            $sql = "SELECT * FROM `goods` ";
            $result = mysqli_query($conn,$sql);
            $row = 1;
            while ($rs = mysqli_fetch_array($result)){?>
            <tr>
                <td id = "SH">
                    <?php echo $row ;?>
                </td>
                <td id = "id">
                    <?php echo $rs[0]; ?>
                </td>
                <td align = "left" id = name>
                    <?php echo $rs[1]; ?>
                </td>
                <td align = "right" id = pr>
                    <?php echo $rs[2]; ?>
                </td>
                <td align = "right" id = gq>
                    <?php echo $rs[3]; ?>
                </td>
                <td id = ed>
                    <a href="edit_good.php?id=<?php echo $rs[0] ?>">[Edit]</a>
                </td>
                <td id = de>
                    <a href="process_delete.php?id=<?php echo $rs[0] ?>">[Delete]</a>
                </td>
            </tr>
            <?php $row++;}
        ?>
    </table>
    </center>
</body>

</html>