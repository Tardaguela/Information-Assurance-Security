<?php
    session_start();
    session_destroy();
    ?>
        <script>
            alert("Do you want to logout?")
            window.location.href="login.php";
        </script>
    <?php
    exit();
?>