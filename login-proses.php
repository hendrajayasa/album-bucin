<?php
    if(isset($_POST["login"])){
        if($_POST["username"]=="hencha" && $_POST["password"]=="17-02-2024"){
            session_start();
            $_SESSION['username']= $_POST['username'];
            header("location: home.php");
        }
        else{
            echo"
            <script>
            alert('username atau password yang anda masukkan salah')
            </script>
            ";
        }
    }
    ?>