// Fazendo o cache do itens
 var campoNomeProduto = document.getElementById("produto");

 $("#cadastrar-usuario").submit(function() {
   event.preventDefault();
   var formData = new FormData(this);

   $.ajax({
     url: "http://192.168.1.200:8888/Promobit/Suporte/salvarNovoProduto",
     type: 'POST',
     data: formData,

     success: function(retorno) {
       $('#retornoMsn').removeClass()
       if (retorno.trim() == "requisicaoCompleta") {
         // window.location = "index.php?pag=c01";
         $('#retornoMsn')
           .addClass('alert alert-success')
           .html('<strong>Informações Enviadas!(obs: Produto não possui tag atrelado)</strong>');
         /*Limpando os campos preenchidos*/
         campoNomeProduto.value = '';

       }else if(retorno.trim() == "RequisicaoIncompleta") {
         $('#retornoMsn')
           .addClass('alert alert-danger')
           .html('<strong>Não foi possivel enviar as informações</strong><br><strong>Status.: </strong>' + retorno);
       }
       if(retorno.trim() == 'duplicidade'){
        $('#retornoMsn')
        .addClass('alert alert-danger')
        .html('<strong>Erro!</strong><br><strong>O produto já está na base de dados! </strong>');

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