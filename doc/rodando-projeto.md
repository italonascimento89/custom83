Para rodar o projeto:

#BANCO DE DADOS:
Import o script do banco de dados em (custom83/doc/database-custom-v1.sql) para seu workbench ou phpmyadmin e excute, por enquanto so existe uma tabela com dados o usuario com meu email e senha 123(criptografada) caso queira fazer um usuario pra vc usar efetue uma insser com essa messa senha e modifique seu email lembrando que a senha e 123(criptografada), recomendo fazer sua inserção para vc efetuar seu login.

Este banco so tem uma tabela de usuario para login, caso aguem implemente outras tabela por favor gere o scrip para export com todos os dados ate com o de insert, não apague este arquivo "database-custom-v1.sql" e sim gere outro com outra versão "database-custom-v2.sql".

Trque a senha do usuario do banco no codigo do projeto php, para sua senha do banco de dados local, (app/model/Conexao.class.php) para que de erro na roca de efetuar uma consulta.

#ESTRUTURA DO PROJETO

|-app
|---assert
|  |----css
|  |----fonts
|  |----imgs
|  |----js
|
|---controller
|---core
|
|---model
|   |--beans
|   |--dao
|
|---view
|   |--partlals


 #INCLUDES
 Utilizando composer para não ficar utilizando include ou require do php.
 Comando principal do composer apois vc ter criado uma nova class ou novo arquivo

    composer update

#MODO DEBUG
Para linux rode o projeto em modo debug, podendo ver alguns erros de php exe: variaveis não inicializada, arquivo não encontrado entre outros

    php -S localhost:3000
