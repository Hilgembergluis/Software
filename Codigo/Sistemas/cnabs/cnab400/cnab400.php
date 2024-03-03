<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title>FileAPI HTML5</title>
    <style type="text/css">
        #filecontents {
            border: double;
            overflow-y: scroll;
            height: 400px;
        }
    </style>
</head>
<body>
   Por favor selecione arquivo que será lido:
    <input type="file" id="txtfiletoread" /><br />
    <div>Conteúdo do arquivo:</div>
    <div id="filecontents">
    </div>

    <script>

        window.onload = function () {
            
            if (window.File && window.FileReader && window.FileList && window.Blob) {
            //Verifique o suporte para o suporte API de arquivo
            
                var fileSelected = document.getElementById('txtfiletoread');
                /*É um método importante e muito empregado para obter informações ou manipular um elemento em um documento HTML. É suportado atualmente por todos os navegadores mais comuns.
                Este método retorna o valor null se nenhum elemento com o id especificado for encontrado.
                Onde o parâmetro ID é o valor do atributo id do elemento que desejamos obter.
                Uma observação importante: o atributo ID é uma string case-sensitive, ou seja, que diferencia maiúsculas de minúsculas.
                Podemos utilizar a propriedade value para obter e manipular o valor inserido em um controle como textbox, password, textarea ou outros controles específicos em um formulário:
              */  
                fileSelected.addEventListener('change', function (e) {
                    //Defina a extensão do arquivo
                    
                    var fileExtension = /text.*/;
                    //Obter o objeto de arquivo
                    
                    var fileTobeRead = fileSelected.files[0];
                    //Verificação da correspondência da extensão
                    
                    if (fileTobeRead.type.match(fileExtension)) {
                        //Inicialize o objeto FileReader para ler o arquivo 2
                        
                        var fileReader = new FileReader();
                        /*Interface FileReader em Javascript é projetado para ler fontes de dados nos computadores dos usuários. Nota: Na verdade, o Javascript pode ler apenas recursos no computador
                        do usuário se o usuário tiver ações para permitir, por exemplo, o usuário clicar no elemento <input type="file"> para selecionar o arquivo no computador ou arrastar e soltar
                        os arquivos no navegador. */
                        
                        fileReader.onload = function (e) {
                        /*O evento load é disparado quando um arquivo é lido com sucesso.
                        Este evento não pode ser cancelado e não gera bolhas.
                        Sintaxe
                        Use o nome do evento em métodos como addEventListener() ou defina uma propriedade do manipulador de eventos. */
                        alert("1");
                            var fileContents = document.getElementById('filecontents');
                            /*É um método importante e muito empregado para obter informações ou manipular um elemento em um documento HTML. É suportado atualmente por todos os navegadores mais comuns.
                            Este método retorna o valor null se nenhum elemento com o id especificado for encontrado.
                            Onde o parâmetro ID é o valor do atributo id do elemento que desejamos obter.
                            Uma observação importante: o atributo ID é uma string case-sensitive, ou seja, que diferencia maiúsculas de minúsculas.
                            Podemos utilizar a propriedade value para obter e manipular o valor inserido em um controle como textbox, password, textarea ou outros controles específicos em um formulário: */
                            
}

                            fileContents.innerText = fileReader.result;
                            /*A propriedade de resultado FileReader retorna o conteúdo do arquivo. Essa propriedade só é válida após a conclusão da operação de leitura e o formato dos dados 
                            depende de qual dos métodos foi usado para iniciar a operação de leitura.
                            O resultado é um texto em uma string.*/ 
                        }

                        fileReader.readAsText(fileTobeRead);
                        /*O método readAsText() é usado para ler o conteúdo do Blob ou Arquivo especificado. Quando a operação de leitura é concluída, o readyState é alterado para DONE, 
                        o evento loadend é acionado e a propriedade result contém o conteúdo do arquivo como uma string de texto.
                        Observação: o método Blob.text() é uma API baseada em promessa mais recente para ler um arquivo como texto.
                        Observação: esse método carrega todo o conteúdo do arquivo na memória e não é adequado para arquivos grandes. Prefira readAsArrayBuffer() para arquivos grandes.*/
                    }
                    else {
                        alert("Por favor selecione arquivo texto");
                        //Exibi em mensagem em caixa de alerta
                    }

                }, false);
            }
            else {
                alert("Arquivo(s) não suportado(s)");
                //Exibi em mensagem em caixa de alerta
            }
        }
    </script>
  </body>
</html>