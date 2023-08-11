</DOCTYPE html>
 <html lang="pt-br" -- define a linguagem da pagina
  <header>
 <meta charset="UTF-8">
<title> CNAB240 </title> <!--Titulo da pagina no navegador --> 
<!-- Fontes personalizadas para o modelo -->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script type="text/javascript"></script>
</header>

<body> <!-- Inicio do conteudo da pagina -->
 <h1> CNAB240 </h1> <!--titulo principal -->
  <h2>Conferencia do layout cnab 240</h2>  <!-- Titulo secundario da pagina -->


<!--Inicia o codigo para manupular arquivos -->
<!--
<div id="show-texto"> </div>

 <button id="sur">Selecione o arquivo</button> 

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript">

 var data;	 //variavel que vai receber o banco de dados

//Evento do botão
$('#sur').on('click', function(event){
 event.preventDefaltut();
//percore o banco de dados
for (let i=0; i <data.length; i++) {
 //mostra usuario por nome
 $('#show-texto').append('<span>'+data[i].name+'</sapn>';
 	}
});

fetch('./dados.js').then((response)=>{
 if(response.ok) {
 	return response.json(); }
}).then((dados)=>{
/*Manipule o array de dados aqui ou sete uma variavel pre-definida   */
for (let i = 0; i < dados.length; i++) {
	//sua logica aqui
}
/*atribuir para a variavel "data" */ 
data = dados;
}).catch((e)=>{
 console.log(e);
});
</script>
-->

<!-- Codigo para buscar o arquivo texto 2 -->

<header>teste<input [(ngModel)] = "folder" autofocus= 'true' tabindex="2" maxlength="100" required >
 <button mat-icon-button (click)="SelecionaDiretorio()"><span class="material-icons">Escolha o arquivo</span> </button>

component.ts
selecionaDiretorio(){
dialog.showOpenDialog({
	properties: ['openDirectory']
}).then(result => {
console.log('result.canceled: ', result.canceled)
console.log('result.filePaths: ', result.filePaths)
this.folder = result.filePaths[0];
}).catch(err => {
	console.log('erro: ', err)
})}




<p> <!-- Texto da poagina -->
</p>



</body>
</html>