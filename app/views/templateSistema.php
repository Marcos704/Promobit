<?php
@session_start();

use app\functions\Util;

$responser = new Util();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Desafio">
    <meta name="author" content="Marcos">
    <title>Promobit</title>
    <link rel="icon" type="image/png" href="<?php echo URL_BASE ?>assets/template/sistema/img/icons/Logo.svg" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--     Fontes e Icones e Estilos    -->
    <script src="https://kit.fontawesome.com/a943e04bb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/template/sistema/css/systemStyles.css" rel="stylesheet">

    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body class="bg-body-login">
    <nav class="navbar navbar-expand-lg navbar-dark custom-bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo URL_BASE . "Suporte/dashboard" ?>">
                <img src="<?php echo URL_BASE ?>assets/template/sistema/img/icons/promobit-logo.svg" alt="" width="100" height="35" class="d-inline-block align-text-top">
            </a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo URL_BASE . "Suporte/dashboard" ?>">
                            <i class="fas fa-home"></i> Página Principal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-database"></i> Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "Suporte/cadastrarProduto" ?>">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "Suporte/adicionarTagProduto" ?>">Adicionar Tag</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "Suporte/visualizarDadosProdutos" ?>">Visualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-database"></i> Tags
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item"  href="<?php echo URL_BASE . "Suporte/cadastrarTag" ?>">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="<?php echo URL_BASE . "Suporte/visualizarDadosTag" ?>">Visualizar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-print"></i> Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#">Visualizar</a></li>
                            <li><a class="dropdown-item" href="#">Editar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URL_BASE . "templateSistema/longOut" ?>">
                                <i class="fas fa-sign-out-alt"></i> Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Begin Page Content -->
    <div class="container-fluid p-0 m-0">
        <?php
        //include_once("suporte/dashboard.php");
        $this->load($view, $viewData);
        ?>

    </div>
    <!-- /.container-fluid -->
    <!-- Page Wrapper -->
    <!-- Footer -->
    <div>
        <footer class="py-2 custom-bg-dark">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; engcriateams 2020</span>
                </div>
            </div>
        </footer>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php URL_BASE ?>assets/template/sistema/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL_BASE ?>assets/template/sistema/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo URL_BASE ?>assets/template/sistema/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/template/sistema/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL_BASE ?>assets/template/sistema/js/demo/datatables-demo.js"></script>
    <!-- Script Mascars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!--Script de funcionamento do site por marquinhos-->
    <script src="<?php echo URL_BASE ?>assets/js_master/template_sistema.js"></script>

</body>

</html>