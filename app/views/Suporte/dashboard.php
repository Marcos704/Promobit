<div class="container">
  <!-- Bar Chart -->
<div class="card card-dark shadow m-1">
  <div class="container text-center pt-2 mb-0">
    <h6>Status Gerais</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-xl-3">
        <div class="container m-0">
          <canvas id="myBarChart1"></canvas>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="container m-0">
          <canvas id="myBarChart2"></canvas>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="container m-0">
          <canvas id="myBarChar4"></canvas>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="container m-0">
          <canvas id="myBarChar5"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
</div>


<div class="container p-1">
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-dark border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Usuários <br>Cadastrados</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalUsuariosCadastrados">
                carregando...
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-dark border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Produtos<br> Cadastrados</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalProdutosCadastrados">
                carregando...
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-building fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-dark border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Tags<br> Cadastradas</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalTagsCadastradas">
                carregando...
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-info fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-dark border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                TB_DataBase<br> Cadastradas</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalTablesCadastradas">
                carregando...
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<script src="<?php echo URL_BASE ?>assets/js_master/graficos_sistema.js"></script>
