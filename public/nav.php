<?php
defined('CONTROL') or die('Acesso negado!'); 
?>

<hr>
     <span>
        Usuario: <strong><?= $_SESSION ['usuario'] ?></strong>
    </span>
    <span>
        <a href="index.php?rota=logout">Sair</a>
    </span>
</hr>

<nav>
    <a href="index.php?rota=home">Home</a>
    <a href="index.php?rota=page1">Pagina 1</a>
    <a href="index.php?rota=page2">Pagina 2</a>
    <a href="index.php?rota=page3">Pagina 3</a>
    <a href="index.php?rota=logout">Sair</a>
</nav>