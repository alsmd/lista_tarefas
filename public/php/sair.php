<?php 
    session_start();
    session_destroy();
    header('Location: ../../src/views/index.php');

?>