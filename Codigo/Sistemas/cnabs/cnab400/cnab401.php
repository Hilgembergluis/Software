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
    <input type="file" id="txtfiletoread" /><br /> <!-- para seleção dos arquivo utilizando modo de entrada tipo File, o id do tipo file "txtfiletoread" -->
    <div>Conteúdo do arquivo:</div>
   
    <!-- abaixo é exibido o conteudo do arquivo -->
    <div id="filecontents"> 
    </div> 

    <script>

        window.onload = function () {
            //Verifica se o navegaro suporta o FileAPI
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                
                 var fileSelected = document.getElementById('txtfiletoread');
                fileSelected.addEventListener('change', function (e) {
                   
                   //Seta a extensão do arquivo
                    var fileExtension = /text.*/;

                    //Obtenha o objeto de arquivo
                    var fileTobeRead = fileSelected.files[0];

                    //Verificação da correspondência de extensão
                    if (fileTobeRead.type.match(fileExtension)) {
                        
                        //Inicialize o objeto FileReader para ler o arquivo
                        var fileReader = new FileReader();
                        
                        fileReader.onload = function (e) {
                            var fileContents = document.getElementById('filecontents');
                            fileContents.innerText = fileReader.result;

                        }
                        fileReader.readAsText(fileTobeRead);
                    }
                    else {
                        alert("Por favor selecione arquivo texto");
                    }

                }, false);
            }
            else {
                alert("Arquivo(s) não suportado(s)");
            }
        }
    </script>
  </body>
</html>