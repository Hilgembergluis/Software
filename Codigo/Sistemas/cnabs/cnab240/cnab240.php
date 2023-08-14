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
            //Check the support for the File API support
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                var fileSelected = document.getElementById('txtfiletoread');
                fileSelected.addEventListener('change', function (e) {
                    //Set the extension for the file
                    var fileExtension = /text.*/;
                    //Get the file object
                    var fileTobeRead = fileSelected.files[0];
                    //Check of the extension match
                    if (fileTobeRead.type.match(fileExtension)) {
                        //Initialize the FileReader object to read the 2file
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