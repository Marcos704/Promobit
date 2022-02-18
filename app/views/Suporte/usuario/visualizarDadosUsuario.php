<?php
@session_start();

use app\services\UserService;

$model = new UserService();
$data = $model->callBackUsuariosCadastrados();
?>
<div class="container p-1">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="title">Visualizar Usuários Cadastrados</h1>
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
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 239px;">CPF</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 359px;">Nome</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 87px;">Tipo</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        for ($i = 0; $i < count($data); $i++) {
                          foreach ($data[$i] as $key => $value) {
                          }
                          $cpf = $data[$i]['cpf_usuario'];
                          $email = $data[$i]['email_usuario'];
                          $tipo = $data[$i]['tipo_usuario'];
                          $nome = $data[$i]['nome_usuario'];


                        ?>
                          <tr class="odd">
                            <td><?php echo $cpf ?></td>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $tipo ?></td>
                            <td>
                              <a title="Editar" href="<?php echo URL_BASE . "Suporte/edicaoDadosRapida?data=" . $cpf ?>">
                               <i class="fa fa-pencil"></i>
                              </a>
                              <a title="Editar" href="<?php echo URL_BASE . "Suporte/edicaoDadosRapida?data=" . $cpf ?>">
                               <i class="fa fa-pencil"></i>
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