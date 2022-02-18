<?php

use app\functions\Util;

$responser = new Util();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#353535">
    <meta name="author" content="TeamEngcria">

    <title>PromobitTeam - Login</title>
    <link rel="icon" type="image/png" href="<?php URL_BASE ?>assets/template/sistema/img/icons/Logo.svg" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--     Fontes e Icones e Estilos    -->
    <script src="https://kit.fontawesome.com/a943e04bb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php URL_BASE ?>assets/template/sistema/css/systemStyles.css" rel="stylesheet">

</head>

<body class="bg-body-login">
    <div class="main">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="card-cadastro">
                        <div class="row">
                            <div class="col-lg-6 img-card-cadastro">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-register-header">
                                    <h3 class="logo">promobit</h3>
                                    <h4 class="title">Bem vindo de volta!</h4>
                                </div>
                                <div class="col-12">
                                    <?php $responser->isSessaoExistente("genericResponser"); ?>
                                </div>
                                <div class="form-register-body">
                                    <?php $responser->isSessaoExistente("loginResponser"); ?>
                                    <form class="row" action="Login/singIn" method="POST">
                                        <div class="form-layout mb-3">
                                            <label for="cpf" class="form-label primary-color">CPF</label>
                                            <input type="text" class="form-control form-control-user custom-input" id="cpf" name="cpf" placeholder="CPF..." required>
                                        </div>
                                        <div class="form-layout mb-3">
                                            <label for="senha" class="form-label primary-color">Senha</label>
                                            <input type="password" class="form-control form-control-user custom-input" id="senha" name="senha" placeholder="Senha..." required>
                                        </div>

                                        <div class="col-12 d-grid">
                                            <button type="submit" class="btn btn-primary btn-long mb-3">
                                                Acessar Conta
                                            </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <?php $responser->isSessaoExistente("recoverPasswordResponser"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MODAL DE RECUPERAÇÃO DE SENHA -->
    <div class="modal fade" id="modalRecuperarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="title text-center" id="exampleModalLabel">🛠Funcionalidade ainda não implementada🛠</h5>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- CORPO DA MODAL DE RECUPERAÇÃO DE SENHA -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="title">🛠Funcionalidade ainda não implementada🛠</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php URL_BASE ?>assets/template/sistema/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php URL_BASE ?>assets/template/sistema/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Script Mascars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="<?php URL_BASE ?>assets/js_master/template_sistema.js"></script>

</body>

</html>