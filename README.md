Cadastro de Moradias com PHP e MySQL
Descrição: Este projeto foi desenvolvido com o objetivo de criar um sistema de cadastro de moradias, utilizando PHP para a lógica de aplicação e MySQL para a persistência de dados. O sistema facilita o registro, edição e exclusão de informações sobre moradores e suas respectivas moradias. Abaixo estão os detalhes técnicos e os aspectos de segurança implementados:
Desenvolvimento e Funcionalidades:
•	Linguagem de Programação: O sistema foi desenvolvido utilizando PHP, uma linguagem de programação amplamente utilizada para o desenvolvimento web, conhecida por sua capacidade de integração com bancos de dados.
•	Banco de Dados: MySQL foi a escolha para o banco de dados, devido à sua robustez e facilidade de uso. A estrutura do banco de dados inclui uma tabela chamada moradias, que armazena as informações dos moradores, como nome, telefone, idade e local de residência.
•	Operações CRUD: O sistema permite realizar as operações básicas de CRUD (Create, Read, Update, Delete). Isso inclui:
o	Cadastro de Morador: Através de um formulário (cadastrar.php), os dados são inseridos no banco de dados.
o	Edição de Dados: O sistema permite a atualização dos dados do morador, sem a necessidade de excluir e cadastrar novamente, utilizando o formulário de edição (editar.php).
o	Exclusão de Dados: A funcionalidade de exclusão permite remover um registro com base no ID do morador.
o	Listagem de Moradores: Todos os moradores cadastrados são exibidos na página inicial (index.php), com opções para editar ou excluir cada registro.
Segurança Implementada:
•	Conexão Segura com o Banco de Dados: A conexão com o MySQL é estabelecida utilizando PDO (PHP Data Objects), que oferece suporte a prepared statements, prevenindo ataques de SQL Injection.
•	Validação de Dados: Os campos dos formulários foram validados para garantir que os dados inseridos sejam consistentes e seguros. Campos como nome e local são obrigatórios, garantindo que o registro não seja feito com informações incompletas.
•	Tratamento de Erros: O sistema inclui tratamento básico de erros na conexão com o banco de dados, oferecendo feedback ao usuário caso a conexão falhe.
Estrutura do Projeto:
•	Arquivo conexao.php: Responsável por estabelecer a conexão com o banco de dados.
•	Arquivo create_table.sql: Contém a instrução SQL para a criação da tabela moradias, definindo os campos e suas respectivas restrições.
•	Arquivo index.php: Página inicial do sistema, que exibe a lista de moradores e oferece opções para editar ou excluir registros.
•	Arquivo cadastrar.php: Formulário para cadastrar um novo morador.
•	Arquivo processar_cadastro.php: Processa os dados do formulário de cadastro e insere no banco de dados.
•	Arquivo editar.php: Formulário para editar os dados de um morador existente.
•	Arquivo processar_edicao.php: Processa os dados do formulário de edição e atualiza o banco de dados.
•	Arquivo processar_exclusao.php: Responsável por remover um registro do banco de dados.
Conclusão:
Este projeto demonstra o uso eficaz de PHP e MySQL para construir um sistema de cadastro simples, mas funcional, com atenção especial às boas práticas de segurança. Ele pode ser facilmente expandido para incluir funcionalidades adicionais, como autenticação de usuário ou exportação de dados.
