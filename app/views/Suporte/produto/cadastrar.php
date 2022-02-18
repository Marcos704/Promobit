<?php
@session_start();

use app\functions\Time;
use app\functions\Util;

$time = new Time();
$responser = new Util();
?>
<div class="container p-1">
  <div class="card card-dark">
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="title">Cadastro de Produtos</h1>
          <div class="text-danger" id="retornoMsn">*Preencha os Campos</div>
        </div>
      </div>
      <div class="container container-centered">
        <div id="msn-infor-cad-product">
          <form method="POST" id="cadastrar-usuario">
            <div class="box-form-control">

              <div class="form-row">
                <div class="col-lg-12">
                  <div class="form-layout mb-3">
                    <label for="produto" class="form-label primary-color">Descrição do Produto</label>
                    <input type="text" class="form-control form-control-user custom-input custom-input-width" id="produto" name="produto" placeholder="Produto.." required>
                  </div>
                </div>
                <br>
                <div class="col-lg-12 text-center">
                  <button class="btn btn-custom-primary" type="submit">Salvar</button>
                </div>
              </div>
              <br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo URL_BASE ?>assets/js_master/cadastrarProduto.js"></script>