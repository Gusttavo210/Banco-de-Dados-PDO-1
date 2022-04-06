<?php
    require_once('php/agency.crud.php');

    if(isset($_GET['id'])) 
    {
        $about = localizaSobrePeloID($_GET['id']);
    } else {
        header('location: about.list.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <?php 
            require("./header.php");
        ?>
        <!-- Cadastro-->
        <section class="page-section" id="Home">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Home</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    <?php if($_GET) : ?>
                    <h3 class="section-subheading text-danger"><strong>Ocoreu um erro ao tentar cadastrar no banco.</strong></h3>
                    <?php endif; ?>
                </div>
                <form id="servicosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="php/about.registrar.php">
                    <div class="row align-items-center mb-5 offset-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Image input-->
                                <input class="form-control" id="imagem" name="inputImagem" type="text" placeholder="Informe a imagem *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="imagem:required">A imagem é requirida.</div>
                            </div>
                            <div class="form-group">
                                <!-- Title input-->
                                <input class="form-control" id="title" name="inputTitulo" type="text" placeholder="Informe o titulo *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="title:required">O titulo é requirida.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Description input-->
                                <input class="form-control" id="description" name="inputDescricao" type="text" placeholder="Informe a descrição *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="description:required">A descrição é requirida.</div>
                            </div>
                        </div>
                    </div>
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Me</h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php foreach($about as $indice => $about): ?>
                        <div class="portfolio-caption-subheading text-muted"><?= $about->descricao ?></div>
                        <div class="portfolio-caption-subheading text-muted"><?= $about->descricao ?></div>
                        <div class="portfolio-caption-subheading text-muted"><?= $about->descricao ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>