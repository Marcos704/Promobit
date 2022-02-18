<?php
@session_start();

use app\functions\Time;
use app\functions\Util;
use app\models\UserModel;

$time = new Time();
$responser = new Util();
$userModel = new UserModel();
$DATA = $userModel->obterUsuarioCadastradoPorCPF($_SESSION['cpf_edicao']);
?>
<div class="container p-1">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="title">Ediçao de Usuário</h1>
          <div class="text-danger" id="retornoMsn">*Preencha os Campos</div>
        </div>
      </div>
      <div class="container container-centered">
        <div id="inforCPF">
          <div class="box-form-control">
            <form method="POST" id="editar-usuario">
              <div class="box-form-control">
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="hidden" class="form-control form-control-user" id="cpf_usuario" name="cpf_usuario" value="<?php echo @$_SESSION['cpf_edicao']; ?>">
                    <input type="text" class="form-control form-control-user" value="<?php echo @$_SESSION['cpf_edicao']; ?>" disabled required>
                  </div>
                  <div class="col-lg-2">
                    <input type="hidden" class="form-control form-control-user" id="data_cadastro_usuario" name="data_cadastro_usuario" value="<?php echo $time->getDataHoraAtual() ?>">
                    <input type="text" class="form-control form-control-user" value="<?php echo $time->getDataHoraAtual() ?>" disabled="disabled">
                  </div>

                </div>
                <div class="form-row">
                  <div class="col-lg-3">
                    <input type="text" class="form-control form-control-user" id="nome_usuario" value="<?php echo $DATA[0]->nome_usuario ?>" name="nome_usuario" placeholder="Nome" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control form-control-user" id="sobrenome_usuario" value="<?php echo $DATA[0]->sobrenome_usuario ?>" name="sobrenome_usuario" placeholder="Sobrenome" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="email" class="form-control form-control-user" id="email_usuario" value="<?php echo $DATA[0]->email_usuario ?>" name="email_usuario" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="password" class="form-control form-control-user" id="senha_usuario" name="senha_usuario" placeholder="Senha" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="password" class="form-control form-control-user" id="confirm_senha_usuario" name="confirm_senha_usuario" placeholder="Confirme sua senha" required>
                  </div>
                  <div class="col-lg-4 ">
                    <div>
                      <select name="tipo_usuario" required>
                        <option selected value="null"> - Tipo de usuário - </option>
                        <option value="Suporte">Suporte</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Funcionario">Funcionário</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-lg-12 text-center">
                    <button class="btn btn-custom-primary" type="submit">Salvar</button>
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

<script type="text/javascript">
  // Fazendo o cache do itens
  var campoNomeUsuario = document.getElementById("nome_usuario");
  var campoSobreNome = document.getElementById("sobrenome_usuario");
  var camoEmail = document.getElementById("email_usuario");
  var campoSenha = document.getElementById("senha_usuario");
  var campoConfirmaSenha = document.getElementById("confirm_senha_usuario");

  $("#editar-usuario").submit(function() {
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: '<?php echo URL_BASE . "Suporte/edicaoDados" ?>',
      type: 'POST',
      data: formData,

      success: function(retorno) {
        $('#retornoMsn').removeClass()
        if (retorno.trim() == "requisicaoCompleta") {
          $('#retornoMsn')
            .addClass('alert alert-success')
            .html('<strong>🛠</strong>Dados Editados com sucesso!Redirecionando...');
          /*Limpando os campos preenchidos*/
          campoNomeUsuario.value = '';
          campoSobreNome.value = '';
          camoEmail.value = '';
          campoSenha.value = '';
          campoConfirmaSenha.value = '';
          setTimeout(function() {
            window.location = "<?php echo URL_BASE ?>Suporte/dashboard";
          }, 800);
        }
        if (retorno.trim() == "senhasNaoConferem") {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Confirme sua senha!</strong><br><p>Senhas não conferem.</p>');
          campoSenha.className = "form-control form-control-user-invalid";
          campoConfirmaSenha.className = "form-control form-control-user-invalid";
        }if(retorno.trim() == "digiteSuaSenha"){
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Erro!</strong><br><p>Informe a senha</p>');
          campoSenha.className = "form-control form-control-user-invalid";
          campoConfirmaSenha.className = "form-control form-control-user-invalid";
        } else
        if(retorno.trim() == "senhainvalida"){
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Senha Inválida!</strong><br><p>A senha deve conter no minimo 8 caracteres e 1 caracter especial.</p>');
          campoSenha.className = "form-control form-control-user-invalid";
          campoConfirmaSenha.className = "form-control form-control-user-invalid";
        }else
        if (retorno.trim() == "Tipo de usuario invalido") {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Informe o tipo para o usuário!</strong><br><p>Campo Obrigatório.</p>');
        } else
        if (retorno.trim() == "RequisicaoIncompleta") {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Informe o tipo para o usuário!</strong><br><p>Campo Obrigatório.</p>');
        } else {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Erro!</strong><br><p>Não foi possivel realizar a requisição. Avisar a TI!</p>');
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
</script>