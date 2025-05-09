<?php
    include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <td>...</td>
        </tr>
        <tr>
            <td>Oscar</td>
            <td>Quiroz</td>
            <td>oscarquiroz118@mail.com</td>
            <td>Active</td>
            <td>
                <img src = "icons/edit.png" width="15">
                <img src = "icons/search.png" width="15">
                <img src = "icons/trash.png" width="15">
            </td>
        </tr>
        <?php
            //Here code
            $sql = "SELECT";
        ?>
    </table>    
</body>
</html>