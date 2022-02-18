$(document).ready(function () {
  setInterval(totalUsuarios(), 2000);
  clearInterval();
  setInterval(totalProdutos(), 2000);
  clearInterval();
  setInterval(totalTags(), 2000);
  clearInterval();
  setInterval(totalTables(), 2000);
  clearInterval();
});
var chartdata1 = {
  //labels: nomeConcorrente,
  datasets: [{
    label: "Grafico A",
    //backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 1)',
    fillColor: "rgba(252, 172, 44,0.0)",
    backgroundColor: [
      'rgb(88, 100, 144)',
      'rgb(255, 199, 132)',
      'rgb(55, 99, 132)'
    ],
    borderRadius: 10,
    //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
    //hoverBorderColor: 'rgb(6, 35, 81, 1)',
    //borderWidth: 0.1,
    //order: 1,
    //minBarLength: 2,
    //pointStyle: 'line',
    data: [10, 5, 25],

    //backgroundColor: "#ff2200"
  }],
  labels: ['abert.', 'andam.', 'conclu.'],

};

var chartdata2 = {
  //labels: nomeConcorrente,
  datasets: [{
    label: "Grafico B",
    borderColor: 'rgba(255, 99, 132, 1)',
    backgroundColor: [
      'rgb(255, 199, 132)',
      'rgb(255, 99, 132)',
      'rgb(55, 99, 132)'
    ],
    borderRadius: 10,
    //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
    //hoverBorderColor: 'rgb(6, 35, 81, 1)',
    //borderWidth: 0.1,
    //order: 1,
    //minBarLength: 2,
    //pointStyle: 'line',
    data: [100, 300, 230],

    //backgroundColor: "#ff2200"
  }],
  labels: ['abert.', 'andam.', 'conclu.'],

};
var chartdata3 = {
  //labels: nomeConcorrente,
  datasets: [{
    label: "Grafico C",
    //backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 1)',
    backgroundColor: [
      'rgb(55, 99, 132)',
      'rgb(255, 199, 132)',
      'rgb(255, 99, 132)'

    ],
    borderRadius: 10,
    //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
    //hoverBorderColor: 'rgb(6, 35, 81, 1)',
    //borderWidth: 0.1,
    //order: 1,
    //minBarLength: 2,
    //pointStyle: 'line',
    data: [452, 333, 230],

    //backgroundColor: "#ff2200"
  }],
  labels: ['abert.', 'andam.', 'conclu.'],

};
var chartdata5 = {
  //labels: nomeConcorrente,
  datasets: [{
    label: "Grafico C",
    //backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 1)',
    backgroundColor: [
      'rgb(99, 99, 145)',
      'rgb(255, 199, 132)',
      'rgb(255, 99, 132)'
    ],
    borderRadius: 10,
    barPercentage: 1,
    //hoverBackgroundColor: 'rgba(54, 162, 235, 0.2)',
    //hoverBorderColor: 'rgb(6, 35, 81, 1)',
    //borderWidth: 0.1,
    //order: 1,
    //minBarLength: 2,
    //pointStyle: 'line',
    data: [452, 333, 230],

    //backgroundColor: "#ff2200"
  }],
  labels: ['abert.', 'andam.', 'conclu.'],

};
var ctx1 = document.getElementById("myBarChart1");
//ctx.height = 20;
var barGraph1 = new Chart(ctx1, {
  type: 'line',
  data: chartdata1
});

var ctx2 = document.getElementById("myBarChart2");
//ctx.height = 20;
var barGraph2 = new Chart(ctx2, {
  type: 'line',
  data: chartdata2
});

var ctx3 = document.getElementById("myBarChar4");
//var ctx3 = $("#myBarChart4");
//ctx.weight = 20;
var barGraph3 = new Chart(ctx3, {
  type: 'line',
  data: chartdata3
});
var ctx5 = document.getElementById("myBarChar5");
//var ctx3 = $("#myBarChart4");
//ctx.weight = 20;
var barGraph5 = new Chart(ctx5, {
  type: 'line',
  data: chartdata5
});

function totalUsuarios() {
  $.ajax({
    url: "http://192.168.1.200:8888/Promobit/Suporte/totalUsuariosCadastrados",
    success: function (resultado) {
      $("#totalUsuariosCadastrados").html(resultado);
      //$("#test").toggleClass("ocultar-componente");
    },
    error: function (resultado) {
      $("#totalUsuariosCadastrados").html("Erro ao obter dados");
    }
  });
}
function totalProdutos() {
  $.ajax({
    url: "http://192.168.1.200:8888/Promobit/Suporte/totalProdutosCadastrados",
    success: function (resultado) {
      $("#totalProdutosCadastrados").html(resultado);
      //$("#test").toggleClass("ocultar-componente");
    },
    error: function (resultado) {
      $("#totalProdutosCadastrados").html("Erro ao obter dados");
    }
  });
}
function totalTags() {
  $.ajax({
    url: "http://192.168.1.200:8888/Promobit/Suporte/totalTagsCadastradas",
    success: function (resultado) {
      $("#totalTagsCadastradas").html(resultado);
      //$("#test").toggleClass("ocultar-componente");
    },
    error: function (resultado) {
      $("#totalTagsCadastradas").html("Erro ao obter dados");
    }
  });
}
function totalTables() {
  $.ajax({
    url: "http://192.168.1.200:8888/Promobit/Suporte/totalTBCadastradas",
    success: function (resultado) {
      $("#totalTablesCadastradas").html(resultado);
      //$("#test").toggleClass("ocultar-componente");
    },
    error: function (resultado) {
      $("#totalTablesCadastradas").html("Erro ao obter dados");
    }
  });
}