<?php

require 'sistema.php';

unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: login.html');

?>