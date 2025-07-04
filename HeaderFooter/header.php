<?php
// Verifica se a sessão já está ativa e inicia apenas se não estiver
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
        <div class="logo-container">
            <span class="logo">Baw</span><span class="registered">®</span>
        </div>
        
        <div class="menu">
            <ul class="menu-list">
                <li><a href="#">VESTUÁRIO</a></li>
                <li><a href="#">ACESSÓRIOS</a></li>
                <li><a href="#">CALÇADOS</a></li>
                <li><a href="#">LANÇAMENTOS</a></li>
                <li><a href="#">NATAW</a></li>
            </ul>
        </div>
        
        <div class="search-container">
            <input type="text" placeholder="O que você está procurando?">
            <button type="submit">🔍</button>
        </div>
    </header>

</body>
</html>