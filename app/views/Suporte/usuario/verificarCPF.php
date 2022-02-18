<?php
@session_start();
use app\functions\Util;
$responser = new Util();
?>
<div class="container p-1">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="title">Verificação de Usuário</h1>
                    <div class="form-box-control-user">
                        <div class="text-danger" id="retornoMsn">Informe o seu CPF para prosseguir com o cadastro.</div>
                    </div>
                </div>
            </div>
            <div class="container container-centered">
                <div id="inforCPF">
                    <div class="box-form-control">
                        <!-- Form Cadastrar -->
                        <div id="cadastrar">
                            <form method="POST" id="pesquisar_usuario_cpf_cadastrar">
                                <div class="box-form-control">

                                    <div class="form-box-control-user">
                                        <div class="form-row">
                                            <div class="col-lg-12 text-center">
                                                <input type="text" class="form-control form-control-user-sm text-center" id="cpf_usuario" name="cpf_usuario" placeholder="CPF" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-lg-12 text-center">
                                            <button class="btn btn-custom-primary" id="btn-form-continuar" type="submit">
                                                Continuar
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Form Editar -->
                        <div id="editar" class="ocultar-componente">
                            <form method="POST" id="pesquisar_usuario_cpf_editar">
                                <div class="box-form-control">
                                    <div class="form-box-control-user">
                                        <div class="form-row">
                                            <div class="col-lg-12 text-center">
                                                <input type="hidden" class="form-control form-control-user-sm text-center" value="<?php echo @$_SESSION['cpf_edicao'] ?>" id="cpf_usuario_editar" name="cpf_usuario_editar" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-custom-edit">
                                                Editar
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ajax para a tela por marquinhos brow-->
<script type="text/javascript">
    // Fazendo o cache do itens
    var campoCPFUsuario = document.getElementById("cpf_usuario");
    let campoCPFUsuario_value = document.getElementById("cpf_usuario").value;
    var campoCPFUsuario_Editar = document.getElementById("cpf_usuario_editar");
    var campoCPFUsuario_Editar_Exibir = document.getElementById("cpf_usuario_editar_exibir");
    document.cookie = "cpf="+campoCPFUsuario_value+";";
    var formCadastrar = document.getElementById("cadastrar");
    var formEditar = document.getElementById("editar");
    
    $("#pesquisar_usuario_cpf_cadastrar").submit(function() {
        event.preventDefault();
        var formData = new FormData(this);
        console.log("debug: to aqui!");
        $.ajax({
            url: '<?php echo URL_BASE . "Suporte/cadastrar" ?>',
            type: 'POST',
            data: formData,

            success: function(retorno) {
                $('#retornoMsn').removeClass()
                if (retorno.trim() == "CPF invalido") {
                    // window.location = "index.php?pag=c01";
                    $('#retornoMsn')
                        .addClass('alert alert-danger')
                        .html('<strong class="container">CPF inválido!</strong>');

                } else
                if (retorno.trim() == "O CPF informado ja consta na base de dados") {
                    $('#retornoMsn')
                        .addClass('alert alert-danger')
                        .html('<strong>CPF informado já consta na base de dado!</strong><br><p>Clique no botão para editar.</p>');
                    campoCPFUsuario.className = "form-control form-control-user-invalid";
                    formCadastrar.classList.toggle("ocultar-componente");
                    formEditar.classList.remove("ocultar-componente");
                    campoCPFUsuario_Editar_Exibir.value = campoCPFUsuario_value;
                    //console.log("valo:"+campoCPFUsuario_value);
                } else if (retorno.trim() == "redirecionar") {
                    $('#retornoMsn')
                        .addClass('alert alert-success')
                        .html('<strong class="container">Redirecionando... 😊</strong>');
                    window.location = "<?php echo URL_BASE ?>Suporte/cadastro_novoUsuario";
                } else if (retorno.trim() == "RequisicaoIncompleta") {
                    $('#retornoMsn')
                        .addClass('alert alert-danger')
                        .html('<strong>🛠Algo deu errado na requisição, contatar o administrador do sistema.</strong>');

                } else {
                    $('#retornoMsn')
                        .addClass('alert alert-danger')
                        .html('<strong>🛠Algo deu errado na requisição, contatar o administrador do sistema.</strong>');
                }
            },
            error: function(retorno) {
                $('#retornoMsn')
                    .addClass('alert alert-danger')
                    .html('<strong>Erro!</strong> Impossivel realizar o envio das informações. Contate o administrador do sistema<br><strong>Cod.: </strong>SD-00-N');
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress',
                        function() {
                            // progresso de upload
                        }, false);
                }
                return myXhr;
            }
        });
    });

    $("#pesquisar_usuario_cpf_editar").submit(function() {
        event.preventDefault();
        var formData2 = new FormData(this);

        $.ajax({
            url: '<?php echo URL_BASE . "Suporte/editar" ?>',
            type: 'POST',
            data: formData2,

            success: function(retorno2) {
                $('#retornoMsn').removeClass()
                if (retorno2.trim() == "redirecionar para edicao") {
                    $('#retornoMsn')
                        .addClass('alert alert-success')
                        .html('<strong class="container">Redirecionando... 😊</strong>');
                    window.location = "<?php echo URL_BASE ?>Suporte/editarUsuario";
                } else {
                    $('#retornoMsn')
                        .addClass('alert alert-danger')
                        .html('<strong>🛠Alsgo deu errado na requisição, contatar o administrador do sistema.</strong>');
                }
            },
            error: function(retorno2) {
                $('#retornoMsn')
                    .addClass('alert alert-danger')
                    .html('<strong>Erro!</strong> Impossivel realizar o envio das informações. Contate o administrador do sistema<br><strong>Cod.: </strong>SD-00-N');
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress',
                        function() {
                            // progresso de upload
                        }, false);
                }
                return myXhr;
            }
        });
    });
</script>