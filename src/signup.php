<?php

    //credencial
    include('../config/database.php');

    $fname  = $_POST['f_name'];
    $lname  = $_POST['l_name'];
    $email  = $_POST['e_mail'];
    $passwd = $_POST['passw'];

    // Para encriptar la contraseña (2 opciones)
    //$enc_pass = md5($passwd);
    $enc_pass = sha1($passwd);

    //para que el correo email no se repita 
    $sql_email_exist = 
        "SELECT 
            COUNT(email) as total 
        FROM 
            users 
        WHERE 
            email = '$email' 
            LIMIT 1 ";
    $res = pg_query($conn, $sql_email_exist);

    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total'] > 0){
            echo "Email alredy exists";
        }else {
            $sql = "INSERT INTO users (firstname, lastname, email, password)
                VALUES('$fname', '$lname', '$email', '$enc_pass')";

            $res = pg_query($conn, $sql);

            if ($res){
                echo "User has been created succesfully";
            }else {
                echo "Error";
            }
        }
    }
?>