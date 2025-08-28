<?php
defined('CONTROL') or die('Acesso negado!'); 

// efetua o logout
session_destroy();

// redireciona para a pagina de login
header('Location: index.php?rota=login');