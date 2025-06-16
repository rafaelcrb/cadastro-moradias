# Sistema de Cadastro de Moradias

Um sistema web simples para gerenciar informações de moradias, permitindo cadastro, listagem, edição e exclusão de imóveis.

## ✨ Funcionalidades

*   **Cadastro de Moradias**: Adicione novas propriedades ao sistema.
*   **Listagem de Moradias**: Visualize todas as moradias cadastradas.
*   **Edição de Moradias**: Atualize os detalhes de imóveis existentes.
*   **Exclusão de Moradias**: Remova propriedades do banco de dados.

## 🚀 Tecnologias Utilizadas

*   **PHP**: Linguagem de programação backend.
*   **MySQL/SQL**: Banco de dados para armazenamento de dados.
*   **HTML/CSS**: Para a interface do usuário.

## ⚙️ Instalação e Execução

Para rodar este projeto em seu ambiente local, siga os passos abaixo:

### Pré-requisitos

*   Servidor web com suporte a PHP (ex: Apache, Nginx).
*   Servidor de banco de dados MySQL (ou compatível).

### Passos

1.  Clone o repositório para o diretório `htdocs` (ou `www`) do seu servidor web:
    ```bash
    git clone https://github.com/rafaelcrb/cadastro-moradias.git /caminho/para/seu/servidor/web/cadastro-moradias
    ```
2.  **Configurar o Banco de Dados**:
    *   Crie um banco de dados no seu servidor MySQL (ex: `cadastro_moradias`).
    *   Execute o script `create_table.sql` (localizado na raiz do projeto) no seu banco de dados para criar a tabela necessária.
3.  **Configurar a Conexão com o Banco de Dados**:
    *   Edite o arquivo `conexao.php` e atualize as credenciais do banco de dados (host, usuário, senha, nome do banco) para corresponder às suas configurações.

### Execução

1.  Inicie seu servidor web (Apache, Nginx).
2.  Acesse o projeto no seu navegador através do endereço configurado para o seu servidor web (ex: `http://localhost/cadastro-moradias/index.php`).

## 🤝 Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## 📄 Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.


