<?php 
 $pag = "clientepj";
  require_once("../Config/Conexao.php"); 
   @session_start();
   /*
    //verificar se o usuário está autenticado
   if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
  echo "<script language='javascript'> window.location='../index.php' </script>"; 
 } 
 */
?>

<div class="row mt-4 mb-4">
 <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Novo Cliente PJ </a>
 <a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>   
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
 <div class="card-body">
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
    <th>ID PJ</th>
     <th>Razão Social</th>
      <th>Nome Fantasia</th>
       <th>Tipo Pessoa</th>
        <th>CNPJ</th>
         <th>Descricão Tipo Pessoa</th>
          <th>Status PJ</th>
           <th>Telefone Fixo</th>
            <th>Contato Telefone Fixo</th>
           <th>Ceular</th>
          <th>Contato Celular</th>
         <th>E_mail</th>
        <th>Descrição E_mail</th>
       <th>Tipo Logradouro</th>
      <th>Nome Logradouro</th>
     <th>Numero</th>
    <th>Cidade</th>
   <th>Ações</th>
 </tr>
</thead>

<tbody>

<?php 
 $query = $pdoBD->query("select
                               a.id_ClientePJ, a.razaoSocial_ClientePJ, a.nomeFantasia_ClientePJ, a.idTipoPess_ClientePJ, a.CNPJ_ClientePJ, 
                               c.descricao_tipopessoa, d.descricao_status,
                               e.nu_telefonefixo, f.descricao_tipocontato, g.nu_celular, f.descricao_tipocontato, h.email, h.observacao_Email,
                               i.tipolog_endereco, i.nomelog_endereco, i.numerolog_endereco, i.cidadelog_endereco
                               from oficina.tblclientepj a
                               join oficina.tbltipopessoa c on (c.id_tipopessoa = a.idtipopess_ClientePJ)
                               join oficina.tblstatus d on (d.id_status =  a.idstatus_ClientePJ)
                               join oficina.tbltelefonefixo e on (e.iddono_telefonefixo = a.id_ClientePJ and e.idtabela_telefonefixo = 'tblclientepj')
                               join oficina.tbltipocontato f on (f.id_tipocontato = e.idtipo_telefonefixo)
                               join oficina.tblcelular g on (g.iddono_celular = a.id_ClientePJ and g.idtabela_celular = 'tblclientepj' or g.idtipo_celular = f.id_tipocontato)
                               join oficina.tblemail h on (h.iddono_email = a.id_ClientePJ and h.idtabela_email = 'tblclientepj')
                               join oficina.tblendereco i on (i.iddono_endereco = a.id_ClientePJ and i.idtabela_endereco = 'tblclientepj') 
                               order by a.id_ClientePJ asc; ");
  $res = $query->fetchAll(PDO::FETCH_ASSOC);
   for ($i=0; $i < count($res); $i++) { 
   foreach ($res[$i] as $key => $value) {
                    }               
    $pjID = $res[$i]['id_ClientePJ'];
     $pjrazao = $res[$i]['razaoSocial_ClientePJ'];
      $pjfantasia = $res[$i]['nomeFantasia_ClientePJ'];
       $pjidtppess = $res[$i]['idtipopess_ClientePJ'];
        $pjCnpj = $res[$i]['CNPJ_ClientePJ'];
         $pjdestppess = $res[$i]['descricao_tipopessoa'];
          $pjstatus = $res[$i]['descricao_status'];
            $pjtelfixo = $res[$i]['nu_telefonefixo'];
           $pjcontfixo = $res[$i]['descricao_tipocontato'];
          $pjcel = $res[$i]['nu_celular'];
         $pjcontcel = $res[$i]['descricao_tipocontato'];
        $pjemail = $res[$i]['email'];
       $pjobsemail = $res[$i]['observacao_Email'];
      $pjtpend = $res[$i]['tipolog_endereco'];
     $pjnomelog = $res[$i]['nomelog_endereco'];
    $pjnumlog = $res[$i]['numerolog_endereco'];
   $pjcidade = $res[$i]['cidadelog_endereco'];
?>

<tr>
  <td><?php echo $pjID ?></td>
   <td><?php echo $pjrazao ?></td>
    <td><?php echo $pjfantasia ?></td>
     <td><?php echo $pjidtppess ?></td>
      <td><?php echo $pjCnpj ?></td>
       <td><?php echo $pjidtppess ?></td>
        <td><?php echo $pjCnpj ?></td>
         <td><?php echo $pjdestppess ?></td>
          <td><?php echo $pjstatus ?></td>
           <td><?php echo $pjtelfixo ?></td>
           <td><?php echo $pjcontfixo ?></td>
          <td><?php echo $pjcel ?></td>
         <td><?php echo $pjcontcel ?></td>
        <td><?php echo $pjemail ?></td>
       <td><?php echo $pjobsemail ?></td>
      <td><?php echo $pjtpend ?></td>
     <td><?php echo $pjnomelog ?></td>
    <td><?php echo $pjnumlog ?></td>
   <td><?php echo $pjcidade ?></td>
  <td>
    <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'><i class='far fa-edit'></i></a>
   <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
  </td>
 </tr>
<?php } ?>

    </tbody>
   </table>
  </div>
 </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <?php 
     if (@$_GET['funcao'] == 'editar') {
     $titulo = "Editar Registro";
      $id2 = $_GET['id'];
       $query = $pdo->query("SELECT * FROM carac where id = '" . $id2 . "' ");
      $res = $query->fetchAll(PDO::FETCH_ASSOC);
     $nome2 = $res[0]['nome'];
      } else {
      $titulo = "Inserir Registro";
      }
     ?>
    <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
 </button>
</div>
      
<form id="form" method="POST">
 <div class="modal-body">
   <div class="form-group">
  <label >Nome</label>
 <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome-cat" name="nome-cat" placeholder="Nome">
</div>

<small>
 <div id="mensagem">
  </div>
 </small> 
</div>

<div class="modal-footer">

<input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
 <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">
  <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
   <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
    </div>
   </form>
  </div>
 </div>
</div>

<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title">Excluir Registro</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
       </button>
        </div>
         <div class="modal-body">
          <p>Deseja realmente Excluir este Registro?</p>
           <div align="center" id="mensagem_excluir" class="">
          </div>
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
       <form method="post">
      <input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>
     <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
    </form>
   </div>
  </div>
 </div>
</div>


<?php 
if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
    echo "<script>$('#modalDados').modal('show');</script>";
}
if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
    echo "<script>$('#modalDados').modal('show');</script>";
}
if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
    echo "<script>$('#modal-deletar').modal('show');</script>";
}
?>

<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
 $("#form").submit(function () {
  var pag = "<?=$pag?>";
   event.preventDefault();
    var formData = new FormData(this);
     $.ajax({
      url: pag + "/inserir.php",
       type: 'POST',
        data: formData,
         success: function (mensagem) {
          $('#mensagem').removeClass()
           if (mensagem.trim() == "Salvo com Sucesso!!") {              
            //$('#nome').val('');
             //$('#cpf').val('');
              $('#btn-fechar').click();
               window.location = "index.php?pag="+pag;
                } else {
                 $('#mensagem').addClass('text-danger')
                }
               $('#mensagem').text(mensagem)
              },
             cache: false,
            contentType: false,
           processData: false,
          xhr: function () {  // Custom XMLHttpRequest
         var myXhr = $.ajaxSettings.xhr();
        if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
       myXhr.upload.addEventListener('progress', function () {
      /* faz alguma coisa durante o progresso do upload */
     }, false);
    }
   return myXhr;
  }
 });
});
</script>


<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
  $(document).ready(function () {
   var pag = "<?=$pag?>";
    $('#btn-deletar').click(function (event) {
     event.preventDefault();
      $.ajax({
       url: pag + "/excluir.php",
        method: "post",
         data: $('form').serialize(),
          dataType: "text",
           success: function (mensagem) {
          if (mensagem.trim() === 'Excluído com Sucesso!!') {
         $('#btn-cancelar-excluir').click();
        window.location = "index.php?pag=" + pag;
       }
      $('#mensagem_excluir').text(mensagem)
     },
    })
   })
  })
</script>


<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">
 function carregarImg() {
  var target = document.getElementById('target');
   var file = document.querySelector("input[type=file]").files[0];
    var reader = new FileReader();
     reader.onloadend = function () {
      target.src = reader.result;
       };
       if (file) {
      reader.readAsDataURL(file);
     } else {
    target.src = "";
   }
  }
</script>

<script type="text/javascript">
 $(document).ready(function () {
   $('#dataTable').dataTable({
    "ordering": false
   })
  });
</script>