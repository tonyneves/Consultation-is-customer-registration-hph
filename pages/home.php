<div class="full_container">
        <div class="div_log_cont">
            <h1>Sistema <br> cadastro de clientes</h1>
            <img src="img/logo.png" alt="">
        </div>
        <div class="div_form_cont">

        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            if (file_exists('pages/' . $url . '.php')) {
                include('pages/' . $url . '.php');
            } else {
                if ($url != 'consult' && $url != 'feedback' && $url != 'insert_new' && $url != 'result') {
                    $pagina404 = true;
                    include('pages/404.php');
                } else {
                    // include('pages/home.php');
                }
            }
        ?>
            <h2>Bem vindo!</h2>
            <h2>O que deseja fazer?</h2>
            <br>
            <button><a href="<?php echo INCLUDE_PATH; ?>consult">Buscar cliente</a></button>
            <button><a href="<?php echo INCLUDE_PATH; ?>insert_new">Novo cadastro</a></button>
        </div>
    </div>