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
    <a href="index.php"><h1>Zakashoes</h1></a>
    
    <div class='menu'>
        
    </div>


</header>

</body>
</html>