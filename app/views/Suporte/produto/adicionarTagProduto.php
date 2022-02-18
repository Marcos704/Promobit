<?php
@session_start();

use app\services\ProdutoService;
use app\services\ProductTagService;

$model  = new ProdutoService();
$modelProductTagService = new ProductTagService();
$data = $model->callBackProdutosCadastrados();
?>
<div class="container p-1">
  <div class="card card-dark">
    <div class="card-body">
      <div id="container-pesquisar" class="container container-centered">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="title">Adicionar Tag ao Produto</h1>
            <div class="text-danger" id="retornoMsn">Selecione um produto e clique em pesquisar.</div>
          </div>
        </div>
        <form method="POST" id="pesquisar-tags-produtos">
          <div class="box-form-control">
            <div class="form-row">
              <div id="container-produto" class="col-lg-12">
                <label for="produto" class="form-label primary-color">Produto</label>
                <div class="text-center">
                  <select name="produto_id" id="produto_id">
                    <?php
                    for ($i = 0; $i < count($data); $i++) {
                      foreach ($data[$i] as $key => $value) {
                      }
                      $id = $data[$i]['id'];
                      $name = $data[$i]['name'];

                    ?>
                      <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <br>
              <div id="container-btn-carregar">
                <div id="btn-carregar" class="col-lg-12 d-grid gap-2 text-center">
                  <button class="btn btn-custom-primary " type="submit">Carregar</button>
                </div>
              </div>
              <br>
            </div>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo URL_BASE ?>assets/js_master/pesquisarTagsProduto.js"></script>