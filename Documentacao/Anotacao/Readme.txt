Comandos Basicos do Git

Site do curso de git - http://rbtech.info/

Fazer download do Git no site https://git-scm.com/download/gui/win (Site para download dos arquivos para instalação no windows e linux)

Aptana Studio - Software para edição de codigos para web

Introdução Git:

E um sitema de controle de versão de dados (Codifo fonte ou outros arquivos), o mesmo tem três estagios para garantir a integridade
das atualizações.

	1º - "Working Directory" Diretorio de trabalho (Encontra se na maquina do usuario - Local)
	2º - "Staging Area" Sala de espera (Local onde o codigo fica armazenado até efetuar a atualização do repositorio do git)
	3º - "Git Directory" Repositorio final do git (Atualiza o diretorio onde está armazenado os dados e foram baixados do git)

1 - Comandos inicial para configuração de nome e email configuração global.
	git config --global user.name "Hilgemberg" (Aqui o texto entre aspas duplas e o nome que vai aparecer no git)
	git config --global user.email "hilgembergleptop@hotmail.com" (Aqui o texto entre aspas duplas e o emial configurado)

2 - Alterar o diretorio de abertura do Git, no atalho botão direito Propriedades no campo iniciar em alterar para o local onde
os seus codigos estão na maquina.

3 - Para acessar a pastas
	cd (Espaço) "Nome da pasta".
	EX: cd Local

4 - Para voltar uma pasta 
	cd (Espaço) ..
	EX: cd ..

5 - Limpar a tela para facilitar a visualização
	clear

6 - Criar um repositorio na pasta local (Inicializa um repositorio no local)
	git init

7 - Saber o Status do repositorio (Resumo das alterações efetuadas)
	git status
	
8 - Adicionar as suas modificações no segundo estagio do git
	git add (Nome do arquivo e sua extensão)
	git add *.txt (para adicionar todos os arquivos com extenção txt)
	git add . (Vai adiconar todos os arquivos modificados independente da extensão)
	
9 - Comanto para atualizar o repositorio do git no terceiro estagio
	git commit (Neste comando vai abrir uma nova tela pedindo uma mensagem)
	git commit -m "Comiteinicial" (Desta forma ele vai atualizar automaticamente sem apresentar uma tela para ser digitato a mensagem,
					"ComiteInicial" vai ser uma mensagem referente ao que representa as suas atualizações e atraves 
					desta mensagem que vai saber qual atualizações foram feitas com este comite).
	git commit -a -m "NomeAtualizacao" (Desta forma o git commit ignora a parte do git add e vai direto para o commit)

10 - Como fazer o git ignorar o controle de versão de alguns arquivos.
	.gitignore (Criar um arquivo dentro do seu repositorio sem o nome somente com o ponto e a descrição gitignore, ai dentro deste
		     arquivo vai a relação dos arquivos que você que que seja ignorado quando for atulizar os seus arquivos, um arquivo 
		     por linha. Para diretorio colocar o nome do arquivo Local/, para ignorar um diretorio)
		 
11 - Comando para saber quais atualizações e os detalhes das atualizações que foram efetuadas.
	git diff (Vermelho as deleções em verde as inserções)
	git diff --staged (Mostra as modificações que estão no segundo estagio sala de espera)

12 - Comoando para verificar todas as atualizações que foram comitadas desde o começo até a data atual.
	git log (Exibe todas as atualizações que foram comitadas até o momento)
	git log -p (Mostra também as modificações de cada commit, utiliza o Enter wpara navegar entre as linhas e a letra q, para sair da 
		    tela)
	git log -p -1 (Mostra a quantidade de comites inserido no final do comando no exemplo somente o ultimo)
	gitk (Abre a tela para consulta detalhada dos commits e suas alterações, para melhor visualização de relatorio do git)

13 - Comando para desfazer um commit errado ou atualizado antes da hora
	git log --pretty=online (Mostra a chave de cada commit e a mensagem que foi adicionada no momento do commit)
	git commit --amend -m "Mensagem do commit editado (Edicao), para sinalizar que o mesmo foi editado", depois do comaando git add.
	git reset HEAD Nome.extensao (Para remover o referido arquivo do commit atual do segundo estagio)
	git checkout -- Nome.extensao (Para desfazer as alterações efetuadas no arquivo sem necessidade)
	git add rm Nome.extensao (Para apagar um arquivo do repositorio do git)
	
14 - Tags (Etiquetas é um ponteiro para um ponto especifico do sistema) e Branch (Ramificações dentro do sistema de controle de versões)
	git tag (Comando para listar as tag criadas)
	git tag -a Nome da tag -m "Descrição da tag" (Exemplo git tag -a v0.0 -m "Versão 0.0"0)
		-a (Serve para criar uma tag marcada com os dados que a mesma foi criada)
	git show v0.0 (para exibir os dados da tag referida)
	git checkout v0.0 (Serve para acessar o codigo ou as alterações efetuadas no arquivo da referida tag)
	git tag -d v0.0 (Serve para apagar a referida tag do git)
	
	git branch Nome do branch (Serve para criar um branch de teste sem alterar o ambiente atual do sistema)
	git checout nome do branch (Serve para altera do branch atual para o novo branch)
	git checout -b Nome do branch (Serve para criar um novo branch e acessar o mesmo, somente com um comando)
	git merge Nome da Origem (Serve para buscar as alterações efetuada em outro branch para atualizar outro, sempre executar este comando dentro do
				  ambiente de destino)
	git branch -d Nome do branch (Serve para apagar um branch de teste ou que não vai ser mais utilizado, sempre fora do branch a ser deletado)
	
15 - Inicializando o git em rede local
	git init --bare (Para inicializar um git no servidor comando diferente do utilizado para uma maquina local)
	git clone file:////nomedo servidor/compartilhamento Nome do projeto(Comando para fazer uma copia dos dados doo servidor para a maquina local)
	git remote (para saber o nome do remoto local de trabalho)
	git push origin master (Serve para atualizar os dados no servidor)
	git pull origem master (Serve para baixar as atualizações do servidor para maquina local com o projeto em andamento)
	git fetch origem Novo branch (Cria um novo branch com as alterações do servidor sem alterar o branch que estou trabalhando)

16 - Git com Git Hub 
	ssh-keygen (Para gerar uma chave de acesso ssh para o git hub poder acessar via web)
	
17 - Endereço do repositorio web
	https://github.com/Hilgemberg/Software.git

18 - Apagar uma pasta do git
18.1 - Apagar os arquivos de dentro da pasta 
18.2 - git rm -rf --cached NomePasta (Neste ponto a pasta ainda existe)
18.3 - inserir a pasta no gitignore echo NomePasta > .gitignore
18.4 - git add .gitignore 
18.5 - git commit -m 'Nomedopasta'
18.6 - git push origin master
18.7 - ls -a
