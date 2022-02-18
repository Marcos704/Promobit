<?php
@session_start();

use app\services\ProdutoService;
use app\services\ProductTagService;

$model  = new ProdutoService();
$modelProductTagService = new ProductTagService();
$data1   = $modelProductTagService->callObterTagsProdutoId(@$_SESSION['data']);
$data2 = $model->callBackProdutosCadastrados();
$data3  = $model->callBackTagsCadastradas();
?>
<div class="container p-1">
  <div class="card card-dark">
    <div class="card-body">
      <div id="container-cadastrar" class="container container-centered">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="title">Adicionar Tag ao Produto</h1>
            <div class="text-danger" id="retornoMsn">Selecione uma tag e clique em salvar.</div>
          </div>
        </div>
        <form method="POST" id="cadastrar-tags-produtos">
          <div class="box-form-control">
            <div class="form-row">
              <div class="col-lg-12">
                <div class="form-layout mb-3">
                  <label for="produto" class="form-label primary-color">Produto Selecionado</label>
                  <input type="text" class="form-control form-control-user custom-input text-center" value="<?php echo @$_SESSION['nameProduto']; ?>" disabled>
                  <input type="hidden" class="form-control form-control-user custom-input text-center" value="<?php echo @$_SESSION['data']; ?>" id="produto_id" name="produto_id" required>
                </div>
                <div class="col-lg-12">
                  <label for="produto" class="form-label primary-color">Tag</label>
                  <div class="text-center">
                    <select name="tag_id" id="tag_id">
                    <option selected value="null">--Selecione uma Tag--</option>
                      <?php
                      for ($i = 0; $i < count($data3); $i++) {
                        foreach ($data3[$i] as $key => $value) {
                        }
                        $id = $data3[$i]['id'];
                        $name = $data3[$i]['name'];

                      ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <br>
              <div class="col-lg-12 d-grid gap-2 text-center">
                <button class="btn btn-custom-primary " type="submit">Salvar</button>
              </div>
              <br>
              <div class="text-center">
                <h5>-- Tags cadastradas --</h5>
              </div>
              <div class="col-sm-12">
                <table class="table table-dark table-striped dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 270px;">Nome</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 0; $i < count($data1); $i++) {
                      foreach ($data1[$i] as $key => $value) {
                      }
                      $id = $data1[$i]['id'];
                      $name = $data1[$i]['name'];

                    ?>
                      <tr class="odd">
                        <td><?php echo $name ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo URL_BASE ?>assets/js_master/cadastrarTagProduto.js"></script>