<?php
session_start();
session_destroy();
session_unset();


header('Location:login.html');
echo "<script>alert('Desconectado'); history.back() </script>";
?>