<?php
    require('connect.php');
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $email = $_POST['emailAddress'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    //Database connection
    $conn =mysqli_connect('localhost', 'root', '', 'viswadb1');
    if(isset($_POST["submit"])){
        if($query = mysqli_query($connect,"INSERT INTO users (`idRegistration`, `userName`, `gender`, `emailAddress`, `password`,
         `contact`) VALUES ('', '".$userName."', '".$gender."', '".$email."', '".$password ."', '".$contact."')")){
            echo "Completed registration successfully...";
        }else{
            echo "Failure" . mysqli_error($connect);
        }
    }
?>