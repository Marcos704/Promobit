<?php
@session_start();

use app\services\TagService;

$model = new TagService();
$data = $model->callBackTagsCadastrados();
?>
<div class="container p-1">
  <div class="card card-dark">
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="title">Visualizar Produtos Cadastrados</h1>
          <div id="retornoMsn"></div>
          <hr>
        </div>
        <div class="container container-centered">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-dark table-striped dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">Id</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">Nome</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 90px;">Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        for ($i = 0; $i < count($data); $i++) {
                          foreach ($data[$i] as $key => $value) {
                          }
                          $id = $data[$i]['id'];
                          $name = $data[$i]['name'];

                        ?>
                          <tr class="odd">
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td>
                              <a title="Editar" href="<?php echo URL_BASE . "Suporte/edicaoDadosRapidaTags?data=" . $id ?>">
                               <i class="fa fa-pencil"></i>Editar
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>