<html>
    <head>
        <title>Clube dos Livros</title>
        

        
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
       
        
    </head>
    <body>
    <header id = "topo">
        <h1>Clube dos Livros</h1>
        <div class="menu-area">
            <nav id="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Categorias</a></li>
            </ul>
        </nav>
        </div>
        <div class="busca-area">
            <div id="busca">
                <input type="search" >
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>

        <a id="inserir-link" href="#">Inserir livros</a>

        
        
    </header>
    <section>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </section>
    <footer>
    
    </footer>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"> </script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"> </script>
    </body>
</html>