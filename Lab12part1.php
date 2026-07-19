<?php
$theme = $_GET['set_theme'] ?? 'light';
$next_theme = ($theme=='dark' ? 'light' : 'dark');
?>

<html>
<body style="background:<?= ($theme=='dark' ? '#222' : '#fff') ?>">

<div>
    <a href="?set_theme=<?= $next_theme ?>">
        Switch to <?= $next_theme ?>
    </a>
</div>

</body>
</html>