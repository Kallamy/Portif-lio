<html>
    <head>
        <title>Clube dos Livros</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
        
    </head>
    <body>
    <header>
        <h1>Clube dos Livros</h1>
    </header>
    <section>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </section>
    <footer>
        Todos os direitos reservados!
    </footer>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"> </script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"> </script>
    </body>
</html>