<?php
session_start();
session_destroy();
header('location: loginadm.php?login=logout');
?>
