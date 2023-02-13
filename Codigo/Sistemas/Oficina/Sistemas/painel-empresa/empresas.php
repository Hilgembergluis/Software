<?php 
 $pag = "empresas";
  require_once("../Config/Conexao.php"); 

 @session_start();

/*    //verificar se o usuário está autenticado
>>>>>>> 9e90800f588f190f67eb1b680a322f0b61506fe7
   if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
  echo "<script language='javascript'> window.location='../index.php' </script>"; 
 }*/
 
?>

<div class="row mt-4 mb-4">
 <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo"> Nova Empresa </a>
 <a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>   
</div>

<!-- DataTales Example = Aqui é inserido o titulo de cada coluna que será apresentado na tela  -->
<div class="card shadow mb-4">
 <div class="card-body">
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
     <th>ID Proprietario</th>
      <th>Razao Social</th>
       <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>Tipo Empresa</th>
       <th>Numero Filial </th>
      <th>Status Empresa</th>
     <th>Email </th>
   <th>Telefone</th>   
  <th>Ações</th>
 </tr>
</thead>

<tbody>
<!-- Abaixo o select do banco de dados para apresentar na tela os dados selecionados  -->
<?php  
 $query = $pdoBD->query(" select a.id_Proprietario, a.razaoSocial_Proprietario, a.nomeFantasia_Proprietario,
                    a.CNPJ_Proprietario, b.descricao_TipoEmpresa, a.idFilial_proprietario, c.descricao_Status, d.Email,
                    e.nu_TelefoneFixo  from oficina.tblProprietario a 
                    join oficina.tblTipoEmpresa b on (b.id_TipoEmpresa =  a.idTipoEmpresa_Proprietario) 
                    join oficina.tblStatus c on (c.id_Status = a.idStatus_Proprietario) 
                    join oficina.tblemail d on (d.idDono_Email = a.id_Proprietario) 
                    join oficina.tbltelefoneFixo e on (e.idDono_TelefoneFixo = a.id_Proprietario and e.idTabela_TelefoneFixo = 'tblProprietario')
                    order by a.id_Proprietario ");

  $res = $query->fetchAll(PDO::FETCH_ASSOC);
   for ($i=0; $i < count($res); $i++) { 
   foreach ($res[$i] as $key => $value) {
                    }
 $id = $res[$i]['id_Proprietario'];
  $razao = $res[$i]['razaoSocial_Proprietario'];                   
   $fant = $res[$i]['nomeFantasia_Proprietario'];
    $cnpj = $res[$i]['CNPJ_Proprietario'];
   $tipoemp = $res[$i]['descricao_TipoEmpresa'];
  $numfilial = $res[$i]['idFilial_proprietario'];
 $statusemp = $res[$i]['descricao_Status'];
$emailemp = $res[$i]['Email'];
$etelefonefixo = $res[$i]['nu_TelefoneFixo'];
?>

<!-- Acima é criado as variaveis que receberam os dados que vem do banco de dados -->
<tr>
 <td><?php echo $id ?></td>
  <td><?php echo $razao ?></td>
   <td><?php echo $fant ?></td>
    <td><?php echo $cnpj ?></td> 
     <td><?php echo $tipoemp ?></td> 
    <td><?php echo $numfilial ?></td> 
   <td><?php echo $statusemp ?></td> 
  <td><?php echo $emailemp ?></td>   
 <td><?php echo $etelefonefixo ?></td>    
<td>
<!-- Acima é inserido os dados das variavés na grid queé apresentado ba tela e abaixo as duas funções editar e excluir -->

    <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Registro'><i class='far fa-edit'></i></a>
    <!--Acima fica a descrição do botão que vai editar o registro no banco de dados -->
   <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
    <!--Acima fica a descrição do botão que vai excluir o dado, aqui devemos tomar cuidado pois nem sempre podemos ecluir o ideal é efetuar uma edição no dado mudando a situação dele  para inativo e assim não carregar na tela e mantendo um historico -->
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
       $query = $pdo->query("select a.id_Proprietario, a.razaoSocial_Proprietario, a.nomeFantasia_Proprietario,
                             a.CNPJ_Proprietario, b.descricao_TipoEmpresa, a.idFilial_proprietario, c.descricao_Status, d.Email,
                             e.nu_TelefoneFixo  from oficina.tblProprietario a 
                             join oficina.tblTipoEmpresa b on (b.id_TipoEmpresa =  a.idTipoEmpresa_Proprietario) 
                             join oficina.tblStatus c on (c.id_Status = a.idStatus_Proprietario) 
                             join oficina.tblemail d on (d.idDono_Email = a.id_Proprietario) 
                             join oficina.tbltelefoneFixo e on (e.idDono_TelefoneFixo = a.id_Proprietario and e.idTabela_TelefoneFixo = 'tblProprietario')
                             where id = '" . $id2 . "' ");
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