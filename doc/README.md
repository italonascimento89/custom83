# custom83
Repositório do projeto final - Estácio ADS P5

# CUSTOM 83


#### Descrição

O projeto visa a criação de um site de anúncios voltado para usuários que desejem encontrar produtos e serviços ligados ao mercado automotivo, produtos em geral como peças, acessórios e tudo que o mercado automotivo oferece ou as empresas queiram hospedar no site. A ideia é hospedar produtos de empresas locais  na base de dados da Custom 83 para divulgação em site no modelo macro de uma loja dentro de um só sistema.
 Sem o intuito de venda mas de divulgação das empresas interessadas em vender seus produtos e serviços com comparações de preços e negociações mais assertivas de acordo com as necessidades dos clientes finais.
 Caso o cliente necessite encontrar a loja mais próxima de uma determinada categoria de produto, o site disponibilizará parâmetros de pesquisa avançadas exibindo todas as informações detalhadas da empresa e do produto em questão. Além da pesquisa avançada o cliente poderá efetuar negociações com as empresas hospedadas através de alertas trocadas entre eles e comparações de preços e cabe a loja aceitar ou não a oferta, além de que será possível visualizar a confiabilidade de acordo com as avaliações realizadas a loja.
 
 #### Objetivo

Atualmente no mercado não existe um site com oferta de tantos serviços e produtos de lojas relacionadas ao mercado automotivo. 
Com isso o objetivo deste projeto é a entrega de um site completo com a função de pesquisa, comparações e venda de produtos e serviços de empresas terceiras objetivando mais conforto e comodidade ao consumidor do produto final.

#### Justificativa
O Custom83.com, se embasa na na questão da praticidade e comodidade dos seus futuros usuários, de poder encontrar em um único web site, tudo o que ele deseja para seu automovel, trazendo total comodidade, rapidez e facilidade em suas pesquisas e futuras compras. 

# DOCUMENTO DE VISÃO

### 1. Posicionamento
#### 1.1 Cenário Atual

 Atualmente não existe um sistema voltado a buscas específicas de mercado automotivo que promova maior comodidade aos consumidores que necessitam buscar peças ou algum serviço automotivo mais perto de sua localidade.
 Com o intuito de oferecer essa facilidade na prestação de serviços tanto das empresas promovendo seus produtos como da busca dos clientes será criado um site onde existirá a iteração entre consumidor e empresa prestadora de serviço, dando visão aos produtos oferecidos e serviços agendados com a inclusão de ofertas e negociações entre os envolvidos.
 
 DIAGRAMA DE CONTEXTO
 
 ![diagrama de contexto](https://user-images.githubusercontent.com/32046433/30527591-ebcd5746-9c00-11e7-8922-b4c70bb6818c.png)
 
 ### 2. EAP de Primeiro Nível
 
 ![eap de nivel 1](https://user-images.githubusercontent.com/32046433/30526445-ddfe4252-9bf0-11e7-80b0-97496d8c912a.png)

### 3. Envolvimento
#### 3.1 Papel dos autores
Atores são pessoas, equipamentos ou outros sistemas que interagem como sistema em questão, enviando ou recebendo mensagens.
Abaixo estão descritos de forma resumida o papel dos atores do site CUSTOM83:

#### Usuário


| Descrição | O usuário é o ator que irá utilizar diariamente o sistema |
| ------ | ------ |
| Papel | O sistema Custom83 será eficiente se as informações forem guardadas diariamente, a fim de manter um histórico de consultas. O usuário é de vital importância para o bom funcionamento do sistema, pois é quem fornece todos os dados que serão armazenados e utilizados pelo sistema. |
| Insumos ao Sistema | - Dados dos usuários / Dados das empresas hospedadas / dados de consultas diárias / Dados de desperdício diário / informações sobre o funcionamento do sistema / sugestões para aperfeiçoamento|
| Representante | Empresas do mercado automobilístico |

#### Proprietário

| Descrição | Fornece as especificações gerais que o sistema deve atender |
| ------ | ------ |
| Papel | Descrever de forma detalhada todos os requisitos do sistema. |
| Insumos ao Sistema | Informações sobre o funcionamento da empresa / Requisitos do sistema / Implementação|
| Representante | Ítalo Nascimento |

#### Empresas Fornecedoras

| Descrição | Fornece os dados necessários para alimentar a base de dados da Custom83 |
| ------ | ------ |
| Papel | Fornecedora dos dados dos produtos e serviços ofertados |
| Insumos ao Sistema |- Geração de dados a Custom83 para atender ao cliente / Melhores ofertas de trabalho|
| Representante | Lojas automotivas |

#### Custom 83

| Descrição | É o próprio sistema e suas funcionalidades. |
| ------ | ------ |
| Papel | Descrever de forma detalhada todos os requisitos do sistema.|
| Insumos ao Sistema |- Geração de dados para atender ao cliente |
| Representante | Paula, Italo, Ledhson, Lucas, Felipe |

### 4. Solução Tecnológica

#### 4.1 Ferramentas:
##### FrontEnd
  - HTML
  - CSS
  - JAVASCRIPT
  - FRAMEWORKS
  - BOOTSTRAP
  - BULMA'.IO
  
 ##### BackEnd
- LAMP / WAMP SERVERS
- LIGUAGEM PHP 7
- FRAMEWORK LARAVEL

 ##### Banco de Dados
 - MYSQL
 
##### IDE's
- SUBLIME
- ATOM


### 5.Cronograma

| Sprint 1 - 2 semanas -  28/08 à 10/09 | Responsável |
| ------ | ------ |
| Documento de Visão | Paula Soares |
|TAP | Paula Soares|
| Logomarca + identidade visual | Ítalo Nascimento |
| Backend - Desenvolver módulo de autenticação de usuário | Felipe Diniz |
|Frontend - Desenvolver frontend de autenticação | Lucas Moreira |

| Sprint 2 - 2 semanas --> 11/09 à 24/09 | Responsável |
| ------ | ------ |
| Documento de Requisitos | Paula Soares |
|EAP| Paula Soares|
| Front-End - Manutenção de clientes. | Ítalo Nascimento |
| Back End - Manutenção de clientes | Lucas Moreira |
|Crud - Manutenção de Clientes | Lucas Moreira |
|Integração do FRONT && BACKEND | Ítalo Nascimento |

| Sprint 3 - 2 semanas --> 25/09 à 08/10 | Responsável |
| ------ | ------ |
| Criar Front-End do DashBoard |Italo Nascimento |
|Criar Back End do DashBoard.|Lucas Moreira|
| Criar front end área de cadastrados para recebimento de newsletter | Ítalo Nascimento |
| Criar back end área de cadastrados para recebimento de newsletter | Lucas Moreira |
|tabela dos usuarios cadastrados para newsletter | Felipe Diniz |
|Back-end para manutenção de categorias e subcategorias | Lucas Moreira / Felipe Diniz |
|front-end de manutenção de clientes temporariamente desativados| Italo Nascimento |
|BackEnd dos clientes temporariamente desativados | Lucas Moreira / Felipe Diniz |
|Crud para Manutenção de clientes temporariamente desativados| Italo Nascimento |
|front-end para manutenção das categorias e sub-categorias | Italo Nascimento |

- Sprint 4 - 2 semanas --> 09/10 à 22/10
- Sprint 5 - 2 semanas --> 23/10 à 05/11
- Sprint 6 - 2 semanas --> 06/11 à 19/11
- Sprint 7 - 2 semanas --> 20/11 à 03/12

### 6.Análise de Riscos

| Riscos | Criticidade | Impacto | Estratégia | Plano de Ação
| ------ | ------ | ------ | ------ | ------ |
| Doenças | Alta | Cronograma | Prevenir |Manter recursos a mais 
|Escopo indefinido com prazo e custo definido| Alta | Custo / Tempo / Escopo / Qualidade | Prevenir | Definição antecipada de Escopo
| Aumento de Escopo de projeto sem ajuste de tempo, custo e recurso  | Alta | Custo / Tempo / Escopo / Qualidade | Prevenir | Realizar controle de escopo e controle integrado de mudança
| Ausência de domínio tecnológico | Média | Tempo | Prevenir | Treinamento da equipe
| Estouro de prazo devido a falhas de desenvolvimento | Média | Tempo / Custo / Escopo / Qualidade | Prevenir | Realizar mais testes afim de evitar erros imprevistos

# DOCUMENTO DE REQUISITOS

#### 1.ESCOPO
##### 1.1 REQUISITOS FUNCIONAIS

- RF1: Autenticar o usuário adm, através de login e senha.
-	RF2: Área de manutenção de dados dos clientes pessoas fisicas e juridias. (CRUD para os anunciantes).
-	RF3: Área de manuntenção de categorias e sub-catedorias dos produtos (CRUD para as categorias e subcategorias).
-	RF4: Área de manuntenção de produtos. (CRUD para os produtos).
-	RF5: Área de manuntenção de anunciantes temporariamente desabilitados.
-	RF6: Área de manuntenção de usuarios cadastrados para newsletter. (Possibilitar exportação de arquixo XLS ou CSV). 
-	RF7: O sistema deve ter uma área para manutenção de usuarios do sistema.
-	RF8: O sistema deve possuir um painel Dashboard com informações analisadas como fundamentais pela equipe.
-	RF9: O sistema deve ter uma área para manutenção de depoimentos de clientes e usuarios da página, que serão exibidas na index.
-	RF10: O sistema deve possuir uma área de manutenção dos SLIDES, que serão exibidos como destaque na INDEX.
-	RF11: O sistema deve ter uma área para manutenção de lojas.
-	RF12: Toda vez que inserir ou alterar o valor de um produto, o sistema deve guardar o mesmo em uma tabela "HISTORICO DE VALOR", o qual deve existir os seguintes atributos da entidade "PRODUTO":
-	RF13: O sistema deve guardar em tabela de "PRODUTOS", os comentários relacionados sobre o mesmo.
- RF14: Deverá ter um meio de contato através de chat para comunicação entre usuário X Loja ou prestador de serviço.
- RF15: O sistema deve guardar a informação de total de produtos de cada cliente pessoa juridica.
- RF16: O sistema deve ter uma tabela de clientes cadastrados com interesse em receber newslettrs, sendo para o cadastro básico como também para o cadastro refinado.
- RF17: O sistema deve ter um modelo de alerta, para que sejá possivel visualizar produtos que possuem alerta de proposta de valores.
- RF18: O sistema deve possuir modulo de comentários, para que os moderadores do sistema, possam analisar comentários sobre produtos, prestadores de serviços e lojas.
- RF19: O sistema deve ter um modulo para manutenção de ofertas do mês.

##### 1.2 REQUISITOS NÃO FUNCIONAIS

- RNF1: O sistema deve ser criado em linguagem de programação PHP.
- RNF2: O banco de dados utilizados deve ser usado o MySql
- RNF3: Para criação do BackEnd, será ultilizado a framework Laravel.
- RNF4: O sistema deve ter uma interface leve, intuitiva, seguindo os padrões da identidade visual do projeto
- RNF5: Para o desenvolvimento ágil do back end, será utilizado a framework Laravel.
- RNF6: Na index, deve existir no inicio do da pagina, a busca simples e avançada, para que o usuario possa fazer suas consultas. 
- RNF7: O usuário pode optar por visualizar os resultados das buscas, por uma lista ou através de mapa. 
- RNF8: Deve ser utilizado a API do GOOGLE MAPS, para indexação dos produtos no mapa. 
- RNF9: O formulário de busca simples, deve ter um auto-complete, para possibilitar o preview de uma string que o usuario esteja digitando no mesmo. 
- RNF10: Ao acessar a descrição de um produto, deve-se existir um formulário do tipo "TEXT AREA", com a finalidade o usuario final inserir comentários sobre o mesmo.
- RNF11: Para o chat deve ser utilizado a framework, ZOPIM.
- RNF12: Dentro das buscas, deve-se ter a consulta por nome do lojista ou prestador de serviço, para isso basta apenas um formulário com auto-complete, para que o usuario final passe por paramêtro a string para efetivar a consulta. 
- RNF13:  Em todos os resultados de uma consulta, deve ser exibido o total de produtos que um lojista pode ter.
Obs: Esse atributo contador deve-se existir apenas para os clientes pessoas juridicas, o quais possuem lojas no sistema.
- RNF14: Ao acessar a descrição dos produtos, o usuario final poderá, compartilhar os mesmos, nas redes sociais.
Obs: Para este modulo será usado a framework, (ADDTHIS).


#### 2.ESCOPO NEGATIVO

-	Não será possível efetuar compras diretamente no Custom 83
-	Não haverá opções de compra e venda diretamente no site Custom 83

### 3. Especificação dos Requisitos Funcionais

#### 3.1 RF1: Autenticar o usuário adm, através de login e senha
Ao acessar o sistema Custom 83 será exibido uma tela para efetuar o login do usuário juntamente com sua senha. O login será sempre o email e a senha deve possuir caracteres especiais para maior segurança.

#### 3.2 RF2: Área de manutenção de dados dos clientes pessoas fisicas e juridias. (CRUD para os anunciantes).

Deverá ser exibido ao logar uma área de atualização de dados dos clientes que será subdividido em Loja e prestador de serviço através d um CRUD. Caso o usuário esteja procurando uma loja próxima a sua localização com peças mais baratas irá selecionar a opção de loja, caso procure um serviço de manutenção por exemplo, selecionará a opção Prestador de serviço onde exibirá vários contatos mais próximos a sua localização.

#### 3.3 RF3: Área de manuntenção de categorias e sub-catedorias dos produtos (CRUD para as categorias)

 Deverá ser exibido uma área de manutenção de categorias e subcategorias dos produtos oferecidos pela loja podendo ser ordenado caso deseje e terá a opção de adicionar novas categoria. Ao selecionar uma categoria de produto deverá ser exibido uma imagem, nome, descrição e quantidade de produtos dentro daquela categoria.

#### 3.4 RF4: Área de manuntenção de produtos. (CRUD para os produtos).
Será exibido uma área para atualização de todos os produtos oferecidos pela loja hospedada.

#### 3.5 RF5: Área de manuntenção de anunciantes temporariamente desabilitados
Será exibido uma área de atualização de anunciantes desabilitados, possibilitando a manipulação dos dados do anunciante e a ativação quando solicitada.

#### 3.6 RF6: Área de manuntenção de usuarios cadastrados para newsletter. (Possibilitar exportação de arquixo XLS ou CSV). 
Deverá ser criado uma área de atualização de dados de usuários cadastrados para newsletter.

#### 3.7 RF7: O sistema deve ter uma área para manutenção de usuarios do sistema.
Deverá ser criado uma área para atualização de dados dos usuários do sistema onde o mesmo poderá alterar dados de sua conta e atualizar informações caso seja necessário.

#### 3.8 RF8: O sistema deve possuir um painel Dashboard com informações analisadas como fundamentais pela equipe.
O sistema deve exibir um painel com informações das alterações de preços dos produtos por mês, lojas que mais venderam, quantidade de acessos por dia. Os seguintes dados devem ser exibidos:

- Total de Sliders Cadastrados
- Total de Sliders Ativos
- Total Clientes
- Total de Clientes ativos
- Total de Clientes Pessoas Fisicas
- Total de Clientes Pessoas Juridicas
- Total de Lojas
- Total de anunciantes da categoria prestador de serviço
- Número de usuarios logados em tempo real

#### 3.9 RF9: O sistema deve ter uma área para manutenção de depoimentos de clientes e usuarios da página, que serão exibidas na index.
O sistema deve exibir na tela inicial uma área de avaliações e depoimentos de clientes e usuários da página. 

#### 3.10 RF10: O sistema deve possuir uma área de manutenção dos SLIDES, que serão exibidos como destaque na INDEX.

#### 3.11 RF11: O sistema deve ter uma área para manutenção de lojas.
Deverá ser possível a empresa/loja hospedada alterar os dados de sua loja como por exemplo o nome. Deve ser possível adicionar um novo produto para determinada loja. Deve ser exibido os seguintes dados da loja ou prestador de serviço:

- Nome da empresa / Prestador
- Endereço
- Telefone
- Link do site
- Logomarca

#### 3.12 RF12: Toda vez que inserir ou alterar o valor de um produto, o sistema deve guardar o mesmo em uma tabela "HISTORICO DE VALOR"
Deverá ser criada uma tabela para armazenar o log de inserções de valor de produto e de alterações do valor do produto com informações de id do produto, DATA, valor anterior, valor novo.

#### 3.13 RF13: O sistema deve guardar em tabela de "PRODUTOS", os comentários relacionados sobre o mesmo.
Deverá ser criado uma tabela para armazenamento dos comentários realizados pelos usuários em relação ao produto e loja

#### 3.14 RF14: Deverá ter um meio de contato através de chat para comunicação entre usuário X Loja ou prestador de serviço.
Derverá ser integrado um chat de comunicação para facilitar o contato entre a loja e o portador. A qualquer momento o usuário deve ter a opção de entrar em contato com a loja ou vice e versa.

#### 3.15 RF15: O sistema deve guardar a informação de total de produtos de cada cliente pessoa juridica
O sistema deve armazenar o total de produtos que cada empresa possui, como uma espécie de estoque para controle de produtos.

#### 3.16 RF16: O sistema deve ter uma tabela de clientes cadastrados com interesse em receber newslettrs, sendo para o cadastro básico como também para o cadastro refinado
Deverá ser criado uma tabela de newsletters com dados dos clientes cadastrados.

#### 3.17 RF17: O sistema deve ter um modelo de alerta, para que sejá possivel visualizar produtos que possuem alerta de proposta de valores.
O sistema deve ter a função de enviar um alerta por e-mail para a loja de uma proposta de valor enviada pelo usuário. A loja por sua vez deverá aceitar ou não a proposta. Caso seja aceita a loja tem a opção de entrar em contato via chat com o cliente para uma melhor negociação.

#### 3.18 RF18: O sistema deve possuir modulo de comentários, para que os moderadores do sistema, possam analisar comentários sobre produtos, prestadores de serviços e lojas
O sistema deve permitir que os usuários administradores do sistema possam controlar os comentários enviados pelos usuários.

#### 3.19 RF19: O sistema deve ter um modulo para manutenção de ofertas do mês.
Deverá existir uma área de atualizações e inserções de ofertas do mês, onde será possível incluir ofertas, alterar e excluir ofertas.

