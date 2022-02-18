<?php
@session_start();

use app\functions\Time;
use app\functions\Util;

$time = new Time();
$responser = new Util();
?>
<div class="container p-1">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="title">Cadastro de Usuário</h1>
          <div class="text-danger" id="retornoMsn">*Preencha os Campos</div>
        </div>
      </div>
      <div class="container container-centered">
        <div id="inforCPF">
          <div class="box-form-control">
            <form method="POST" id="cadastrar-usuario">
              <div class="box-form-control">
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="hidden" class="form-control form-control-user" id="cpf_usuario" name="cpf_usuario" value="<?php echo @$_SESSION['novoUsuario_CPF']; ?>" required>
                    <input type="text" class="form-control form-control-user"  value="<?php echo @$_SESSION['novoUsuario_CPF']; ?>" disabled required>
                  </div>
                  <div class="col-lg-2">
                    <input type="hidden" class="form-control form-control-user" id="data_cadastro_usuario" name="data_cadastro_usuario" value="<?php echo $time->getDataHoraAtual() ?>" required>
                    <input type="text" class="form-control form-control-user" value="<?php echo $time->getDataHoraAtual() ?>" disabled="disabled" required>
                  </div>

                </div>
                <div class="form-row">
                  <div class="col-lg-3">
                    <input type="text" class="form-control form-control-user" id="nome_usuario" name="nome_usuario" placeholder="Nome" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control form-control-user" id="sobrenome_usuario" name="sobrenome_usuario" placeholder="Sobrenome" required>
                  </div>
                  <div class="col-lg-4">
                    <input type="email" class="form-control form-control-user" id="email_usuario" name="email_usuario" placeholder="Email" required>
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
                      <select name="tipo_usuario">
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

  $("#cadastrar-usuario").submit(function() {
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: '<?php echo URL_BASE . "Suporte/salvarNovoUsuario" ?>',
      type: 'POST',
      data: formData,

      success: function(retorno) {
        $('#retornoMsn').removeClass()
        if (retorno.trim() == "requisicaoCompleta") {
          // window.location = "index.php?pag=c01";
          $('#retornoMsn')
            .addClass('alert alert-success')
            .html('<strong>Informações Enviadas!</strong>');
          /*Limpando os campos preenchidos*/
          campoNomeUsuario.value = '';
          campoSobreNome.value = '';
          camoEmail.value = '';
          campoSenha.value = '';
          campoConfirmaSenha.value = '';

        } else
        if (retorno.trim() == "senhasNaoConferem") {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Confirme sua senha!</strong><br><p>Senhas não conferem.</p>');
          campoSenha.className = "form-control form-control-user-invalid";
          campoConfirmaSenha.className = "form-control form-control-user-invalid";
        } else {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Não foi possivel enviar as informações</strong><br><strong>Status.: </strong>' + retorno);

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