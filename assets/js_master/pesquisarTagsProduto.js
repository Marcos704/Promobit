

// Fazendo o cache do itens
var campoNomeProduto = document.getElementById("tag");
var containerPesquisar = document.getElementById("container-pesquisar");
var containerCadastrar = document.getElementById("container-cadastrar");

$("#pesquisar-tags-produtos").submit(function () {
  //event.preventDefault();
  var formData = new FormData(this);

  $.ajax({
    //url: "http://192.168.1.200:8888/Promobit/Suporte/pesquisarTagsProduto",
    url: "http://localhost/Promobit/Suporte/pesquisarTagsProduto",
    type: 'POST',
    data: formData,

    success: function (retorno) {
      if (retorno.trim() == "requisicaoCompleta") {
        $('#retornoMsn')
          .addClass('alert alert-success')
          .html('<strong>Informações Enviadas!<br> ⚙Redirecionando...</strong>');
        //window.location = "http://192.168.1.200:8888/Promobit/Suporte/cadastrarTagProduto";
        window.location = "http://localhost/Promobit/Suporte/cadastrarTagProduto";
      } else
        if (retorno.trim() == 'duplicidade') {
          $('#retornoMsn')
            .addClass('alert alert-danger')
            .html('<strong>Erro!</strong><br><strong>A tag já está na base de dados! </strong>');

        }else if(retorno.trim() == 'nenhumaTagEncontrada'){
          $('#retornoMsn')
          .addClass('alert alert-danger')
          .html('<strong>Produto sem Tags Cadastradas<br> ⚙Redirecionando...</strong>');
        //window.location = "http://192.168.1.200:8888/Promobit/Suporte/cadastrarTagProduto";
        window.location = "http://localhost/Promobit/Suporte/cadastrarTagProduto";
        }
    },
    error: function (retorno) {
      $('#retornoMsn')
        .addClass('alert alert-danger')
        .html('<strong>Erro!</strong> Impossivel realizar o envio das informações. Contate o administrador do sistema<br><strong>Cod.: </strong>SD-00-N');
    },
    cache: false,
    contentType: false,
    processData: false,
    xhr: function () {
      var myXhr = $.ajaxSettings.xhr();
      if (myXhr.upload) {
        myXhr.upload.addEventListener('progress',
          function () {
            // progresso de upload
          }, false);
      }
      return myXhr;
    }
  });
});