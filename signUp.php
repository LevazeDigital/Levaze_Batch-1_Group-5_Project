<?php
    if(isset($_POST['submit'])){
        // ??set connection variables
        $server = "localhost";
        $username = "root";
        $password = "sequelmysql";
        $database = "signUpForm";

        // create a databse connection
        $con = mysqli_connect($server,$username,$password,$database);

        // ?check forr connection is successful or not
        if(!$con){
            die("connection to this database failed due to". mysqli_connect_error());
        }
        else {
            echo "successfylly connected";
        }
        $Username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $dt = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `signUpForm`.`logintable`(`username`,`email`,`password`) VALUES ('$username', '$email','$password')";

        if($con->query($sql) == true){
            // echo "successfully inserted";
            header("Location:index.php");
            // alert "Congratulations you have login succesfully";
        }else {
            echo "Error: " . $con->error;
        }

    }
    function checksignupform($username,$password)
{
    global $con;
    $que="select * from signupform where username='$Username'";
    $res=$con->query($que);
    return $res->num_rows>0;
    }
?>
