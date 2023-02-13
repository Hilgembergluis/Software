<?php 
//Inicio do Dashbord, e declaração das variáveis 

//Variáveis dos menus que serão passados por referência assim evita alteração em varios pontos do sistema
//O GET será passado por referência    
$pag = @$_GET["pag"];
 $menu1 = "../painel-empresa/empresas";
  $menu2 = "../painel-recepcionista/recepcionistas";
   $menu3 = "../painel-mecanico/mecanicos";
    $menu4 = "../painel-clientePF/clientePF";
    $menu5 = "../painel-clientePJ/clientePJ";
    $menu6 = "menu6";
   $menu7 = "menu7";
  $menu8 = "menu8";
 $menu9 = "menu9";
$menu10 = "menu10";

//Abaixo fica o fechamento das declarações de variáveis 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- Acima está inserido a linguagem utilizada para a pagina -->

<head>
<!-- Inicio do cabeçalho da pagina -->
    
<meta charset="utf-8">
<!-- Setando a utilização de caracteres especiais na lingugem do portugues Brasil -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Setando o modo de compatibilidade do IE e do Edge -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
<meta name="author" content="Luiz Roberto">
<!-- Define o nome do Autor do projeto -->

<title>Painel Administrativo</title>
<!-- Aqui é defenido o título que vai aparecer na aba do navegador -->

<!-- Fontes personalizadas para o modelo -->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Estilos personalizados para este modelo -->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet">
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
 <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
<link rel="shortcut icon" href="../../img/Emp/favicon0.ico" type="image/x-icon">
 <link rel="icon" href="../../img/Emp/favicon0.ico" type="image/x-icon">

<!-- Final do cabeçalho da pagina -->
</head>

<body id="page-top">
<!-- Inicio do corpo da pagina identifica o topo da pagina -->

<!-- Page Wrapper = Embrulhar a pagina -->
<div id="wrapper">

<!-- Sidebar = Barra Lateral -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Accordion = Acordeom, Inicio do efeito acorden e marca o menu lateral com a cor de fundo verde -->

 <!-- Sidebar = Barra Latreral, Brand = Marca, Indica a marcação da barra lateral e inseri o nome da pagina -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

  <div class="sidebar-brand-text mx-3"> Administração </div>
  <!-- Insere o texto Administrativo no menu que indica qual é o painel que está sendo utilizado -->
 </a>
 <!-- Final da marcação da pagina -->

 <!-- Inicio codígo para o primeiro menu -->
<hr class="sidebar-divider my-0">
<!-- Divider = Divisor, insere uma linha que vai dividir o cabeçalho do menu -->
 <hr class="sidebar-divider"> <!-- Inseri um divisor no menu -->
 <!-- Heading = Cabeçalho, vai inserir um cabeçalho no menu -->
  <div class="sidebar-heading"> Cadastro Geral </div>
   <li class="nav-item"> <!-- Nav Item = Itens de navegação aqui inicia o menu de navegação 01 -->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <!-- Nav LInk collapsed =  Linke de navegação recolhido, inicio de linke de navegação -->    
     <i class="fas fa-users"></i> <!-- Inseri um icone do site https://fontawesome.com/, que vai representar os usuarios quando o menu estive recolhido -->
      <span> Cadastro </span> <!-- Span = Período, aqui insere o texto na linha do menu -->
       </a> <!-- Final do linke de navegação -->
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <!-- aria label leadby = Etiqueta de aréa liberada, inicio da aréa liberada -->    
         <div class="bg-white py-2 collapse-inner rounded"> <!-- Inicio da definição do fundo do menu para branco -->
          <h6 class="collapse-header"> Empresas: </h6> <!-- Collapsed header = Cabeçalho recolhido, indica o que vai aparecer no subcabeçalho do menu -->
           <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>"> Empresa </a> <!-- Item do menu que tem referencia a Pessoa Fisica -->         
            <h6 class="collapse-header"> Funcionários: </h6>  <!-- Collapsed Header = Cabeçalho recolhido, indica o que vai aparecer no subcabeçalho do menu -->
           <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>"> Recepcionistas </a> <!-- Item do menu recolhido que tem referencia a recepcionista -->
          <a class="collapse-item" href="index.php?pag=<?php echo $menu3 ?>"> Mecânicos </a> <!-- Item do menu recolhido que tem referencia ao mecânico -->
         <!--Comando para criar itens do menu com separação por cabeçalho  -->
        
       <h6 class="collapse-header"> Clientes: </h6> <!-- Collapsed header = Cabeçalho recolhido, indica o que vai aparecer no subcabeçalho do menu -->
      <a class="collapse-item" href="index.php?pag=<?php echo $menu4 ?>"> Pessoa Fisíca </a> <!-- Item do menu que tem referencia a Pessoa Fisica -->
     <a class="collapse-item" href="index.php?pag=<?php echo $menu5 ?>">  Pessoa Jurídica </a> <!-- Item do menu que tem referencia a Pessoa Juridica -->
    </div>
  
 </div> <!-- Final da Aréa liberada para etiqueta -->
</li> <!-- Aqui termina o item de navegação 01 -->


<!-- Inicio do menu  02 -->
<!-- Divider -->
<hr class="sidebar-divider">
 <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMenu02" aria-expanded="true" aria-controls="collapseMenu02">
   <i class="fa fa-id-card" aria-hidden="true"></i>
    <span> Financeiro </span>
     </a>
      <div id="collapseMenu02" class="collapse" aria-labelledby="headingMenu02" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
       <h6 class="collapse-header"> Controle de contas </h6>
      <a class="collapse-item" href="index.php?pag=<?php echo $menu6 ?>"> Contas a Receber </a>
     <a class="collapse-item" href="index.php?pag=<?php echo $menu7 ?>"> Contas a Pagar </a>
    <a class="collapse-item" href="index.php?pag=<?php echo $menu8 ?>"> Menu 5 </a>
   </div>
  </div>
 </li>
<hr class="sidebar-divider">
<!-- Final teste menu  02 -->


<!-- Inicio Menu 03 -->
<li class="nav-item">
 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMenu03" aria-expanded="true" aria-controls="collapseMenu03">
 <!-- Neste ponto alteramos dois locais para indicar que o menu é outro. data-target="#collapse + Nome do Menu" e aria-controls="collapse + Nome do Menu" -->
  <i class="fa fa-microchip" aria-hidden="true"></i>
   <span> Menu 03 </span>
    </a>
     <div id="collapseMenu03" class="collapse" aria-labelledby="headingMenu03" data-parent="#accordionSidebar">
     <!-- Neste ponto alteramos dois locais para indicar que o menu é outro. id="collapse = Nome do menu" e aria-labelledby="heading + Nome do Menu" -->
      <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"> Dados Menu: </h6>
     <a class="collapse-item" href="index.php?pag=<?php echo $menu9 ?>">Menu 6</a>
    <a class="collapse-item" href="index.php?pag=<?php echo $menu10 ?>">Menu 7</a>
   <a class="collapse-item" href="index.php?pag=<?php echo $menu11 ?>">Menu 8</a>
  </div>
 </div>
</li>
<!-- Final menu 03 -->


<!-- Inicio menu 04 -->
<hr class="sidebar-divider">
 <div class="sidebar-heading"> Menu 04 </div>
  <li class="nav-item">
   <a class="nav-link" href="index.php?pag=<?php echo $menu6 ?>">
  <i class="fa fa-quora" aria-hidden="true"></i>
 <span> Dados Menu: </span></a>
</li>
<!-- Final menu 04 -->


<!-- Nav Item - Tables  = Tabela de itens de navegação -->
<!-- Divider = Divisor -->
<hr class="sidebar-divider d-none d-md-block">
 <!-- Sidebar Toggler (Sidebar) = alternancia barra lateral -->
  <div class="text-center d-none d-md-inline">
 <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar = final da barra lateral -->

<!-- Content Wrapper = Enabalando o conteúdo -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content =  Conteúdo Principal-->
<div id="content">

<!-- Topbar = Barra superior -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) = Alternância da barra lateral (barra superior) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
 <i class="fa fa-bars"></i>
  </button>
<img class="mt-2" src="../img/Emp/logo.png" width="150">

<!-- Topbar Navbar = Barra de navegação superior -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - User Information = Item de navegação - Informações do usuário -->
<li class="nav-item dropdown no-arrow">
 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Nome do usuario </span>
 <img class="img-profile rounded-circle" src="../img/User/sem-foto.jpg">
</a>

<!-- Dropdown - User Information = Lista suspensa - Informações do usuário -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
 <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
  <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
 Editar Perfil
</a>

<div class="dropdown-divider"></div>
 <a class="dropdown-item" href="../logout.php">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
   Sair
    </a>
   </div>
  </li>
 </ul>
</nav>
<!-- End of Topbar = Fim da barra superior -->


<!-- Begin Page Content = Iniciar conteúdo da página -->
<div class="container-fluid">

<?php if (@$pag == null) { 
                        @include_once("home.php"); 
                        
                        } else if (@$pag==$menu1) {
                        @include_once(@$menu1.".php");
                        
                        } else if (@$pag==$menu2) {
                        @include_once(@$menu2.".php");

                         } else if (@$pag==$menu3) {
                        include_once(@$menu3.".php");

                        } else if (@$pag==$menu4) {
                        @include_once(@$menu4.".php");

                        } else if (@$pag==$menu5) {
                        @include_once(@$menu5.".php");

                        } else if (@$pag==$menu6) {
                        @include_once(@$menu6.".php");

                        } else if (@$pag==$menu7) {
                        @include_once(@$menu7.".php");

                        } else if (@$pag==$menu8) {
                        @include_once(@$menu8.".php");

                        } else if (@$pag==$menu9) {
                        @include_once(@$menu9.".php");

                        } else if (@$pag==$menu10) {
                        @include_once(@$menu10.".php");

                        } else {
                        @include_once("home.php");
                        }
                        ?>
                        
</div>
<!-- /.container-fluid  = fluido-contêiner -->
</div>
<!-- End of Main Content = Fim do conteúdo principal -->
</div>
<!-- End of Content Wrapper = Envoltório de fim de conteúdo -->
</div>
<!-- End of Page Wrapper = Envoltório de fim de página -->

<!-- Scroll to Top Button = Role até o botão superior -->
<a class="scroll-to-top rounded" href="#page-top">
 <i class="fas fa-angle-up"></i>
</a>

<!-- Modal Perfil = Modal do Perfil -->
<div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">X</span>
 </button>
</div>


<form id="form-perfil" method="POST" enctype="multipart/form-data">
 <div class="modal-body">

<div class="row">
 <div class="col-md-6 col-sm-12">
  <div class="form-group">
   <label >Nome</label>
    <input value="<?php echo $nome ?>" type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
     <div class="form-group">
      <label >CPF</label>
     <input value="<?php echo $cpf ?>" type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
    </div>
   <div class="form-group">
  <label >Email</label>
 <input value="<?php echo $email ?>" type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>

<div class="form-group">
 <label >Senha</label>
  <input value="" type="password" class="form-control" id="text" name="senha" placeholder="Senha">
 </div>
</div>

<div class="col-md-6 col-sm-12">
 <div class="col-md-12 form-group">
  <label>Foto</label>
   <input value="<?php echo $img ?>" type="file" class="form-control-file" id="imagem" name="imagem" onchange="carregarImg();">
    </div>
    <div class="col-md-12 mb-2">
   <img src="../img/User/profiles/<?php echo $img ?>" alt="Carregue sua Imagem" id="target" width="100%">
  </div>
 </div>
</div> 


<small>
 <div id="mensagem" class="mr-4">
  </div>
   </small>
    </div>
     <div class="modal-footer">
      <input value="<?php echo $idUsuario ?>" type="hidden" name="txtid" id="txtid">
      <input value="<?php echo $cpf ?>" type="hidden" name="antigo" id="antigo">
      <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
     <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-primary">Salvar</button>
    </div>
   </form>
  </div>
 </div>
</div>

<!-- CSore plugin JavaScript = plugs do java -->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for all pages = Scripts personalizados para todas as páginas -->
<script src="../js/sb-admin-2.min.js"></script>


<!-- Page level plugins = Plug-ins de nível de página -->
<script src="../vendor/chart.js/Chart.min.js"></script>


<!-- Page level custom scripts = Scripts personalizados no nível da página -->
<script src="../js/demo/chart-area-demo.js"></script>
 <script src="../js/demo/chart-pie-demo.js"></script>


<!-- Page level plugins = Plug-ins de nível de página -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Page level custom scripts = Scripts personalizados no nível da página -->
<script src="../js/demo/datatables-demo.js"></script>

 </body>
</html>