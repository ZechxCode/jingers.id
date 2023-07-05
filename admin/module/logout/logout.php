<?php 

session_start();



        session_destroy();

        echo '<script>

        alert("Anda Logout");

        document.location.href="../../index.php";

        </script>';

?>