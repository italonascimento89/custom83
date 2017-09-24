Apos te efetuado o fork para seu usuario:

1º Todos os comandos são fetuado no terminal ou cmd, caso não esteja usando o sistema de interface git:
    
    git clone https://github.com/custom83/custom83.git


2° Apos efetuar alteção efetue um commit comandos sequecias:
    -Visualizar suas modificações
        git status

    -Preparar todo projeto para o commit usa o (.)ponto, ou so o arquivo modificado "git add meu-arquivio.php"
        git add .

    -Escreva o que foi modificado nesse commit
        git commit -m "sistema de login ok"

    -Enviar o commit para o git
        git push origin master


ESTE PASSO E MAIS COMPLICADO E PODE OCORRER ERRO CASO NÃO TENHA SEGUIDO O PASSO A PASSO DIARIAMENTE

3° Antes de começar a modificar seu projeto ou antes de efetua um commit, efetue um merge caso alguem efetue um commit ante que você e assim atualizando o seu projeto e para que não occorra erro no versionamento.

    -Busca se há alteração original
        git fetch

    -Mescla o repositorio com seus
        git merge

    -Aplica a atualização
        git pull

CASO NÃO CONSIGA COMITAR DE NENHUMA FORMA É SÓ EFETUAR O FORK NOVAMENTE DO https://github.com/custom83/custom83 RENOMEAR O SEU PROJTO NO SEU COMPUTADOR, EFETUAR O CLONE COMO NO INICIO DA PRIMEIRA DICA ACIMA 1°, AUTERAR O ARQUIVO QUE VC MODIFICOU E COMITAR NOVAMENTE COMO NO 2° PASSO ACIMA.

MAIS DICAS:

https://gist.github.com/leocomelli/2545add34e4fec21ec16

http://rogerdudler.github.io/git-guide/index.pt_BR.html
