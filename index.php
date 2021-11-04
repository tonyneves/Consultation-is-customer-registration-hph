<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    <title>Sistema de cadastro e consulta</title>
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            if ($url != 'consult' && $url != 'feedback' && $url != 'insert_new' && $url != 'result') {
                $pagina404 = true;
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }
    ?>
</body>
</html>