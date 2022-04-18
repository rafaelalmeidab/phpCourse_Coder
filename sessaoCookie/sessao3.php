<?php
session_start();
session_destroy();
header('Location: sessao1.php');
