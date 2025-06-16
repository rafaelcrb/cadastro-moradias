# Documentação Técnica - Sistema de Cadastro de Moradias

## 1. Visão Geral

Este projeto implementa um sistema web simples para cadastro, edição, exclusão e listagem de informações de moradias. Desenvolvido em PHP com MySQL (ou similar, via `create_table.sql`), ele oferece uma interface básica para gerenciamento de dados de imóveis.

## 2. Estrutura do Projeto

A estrutura do projeto é composta por arquivos PHP e um script SQL para a criação da tabela:

```
cadastro-moradias/
├── cadastrar.php               # Formulário para cadastrar novas moradias
├── conexao.php                 # Script para conexão com o banco de dados
├── create_table.sql            # Script SQL para criar a tabela de moradias
├── editar.php                  # Formulário para editar moradias existentes
├── index.php                   # Página principal que lista as moradias
├── processar_cadastro.php      # Lógica para processar o cadastro de moradias
├── processar_edicao.php        # Lógica para processar a edição de moradias
├── processar_exclusao.php      # Lógica para processar a exclusão de moradias
└── README.md                   # Arquivo de documentação do projeto
```

## 3. Tecnologias Utilizadas

*   **PHP**: Linguagem de programação backend.
*   **MySQL/SQL**: Banco de dados relacional (o script `create_table.sql` sugere um banco de dados SQL).
*   **HTML/CSS**: Para a interface do usuário.

## 4. Funcionalidades Principais

O sistema oferece as seguintes funcionalidades:

*   **Cadastro de Moradias**: Através de `cadastrar.php` e `processar_cadastro.php`, permite adicionar novas moradias ao banco de dados.
*   **Listagem de Moradias**: A página `index.php` exibe todas as moradias cadastradas.
*   **Edição de Moradias**: Através de `editar.php` e `processar_edicao.php`, permite modificar informações de moradias existentes.
*   **Exclusão de Moradias**: Através de `processar_exclusao.php`, permite remover moradias do banco de dados.

## 5. Banco de Dados

O arquivo `create_table.sql` é responsável por criar a estrutura da tabela `moradias` (ou nome similar) no banco de dados. Os campos esperados para a tabela de moradias incluiriam:

*   `id` (chave primária, auto-incremento)
*   `endereco`
*   `cidade`
*   `estado`
*   `quartos`
*   `banheiros`
*   `area`
*   `valor`
*   Outros campos relevantes para uma moradia.

## 6. Configuração e Execução

Para configurar e executar o projeto em seu ambiente local, siga os passos abaixo:

### Pré-requisitos

*   Servidor web com suporte a PHP (ex: Apache, Nginx).
*   Servidor de banco de dados MySQL (ou compatível).

### Instalação

1.  Clone o repositório para o diretório `htdocs` (ou `www`) do seu servidor web:
    ```bash
    git clone https://github.com/rafaelcrb/cadastro-moradias.git /caminho/para/seu/servidor/web/cadastro-moradias
    ```
2.  **Configurar o Banco de Dados**:
    *   Crie um banco de dados no seu servidor MySQL (ex: `cadastro_moradias`).
    *   Execute o script `create_table.sql` no seu banco de dados para criar a tabela necessária.
3.  **Configurar a Conexão com o Banco de Dados**:
    *   Edite o arquivo `conexao.php` e atualize as credenciais do banco de dados (host, usuário, senha, nome do banco) para corresponder às suas configurações.

### Execução

1.  Inicie seu servidor web (Apache, Nginx).
2.  Acesse o projeto no seu navegador através do endereço configurado para o seu servidor web (ex: `http://localhost/cadastro-moradias/index.php`).

## 7. Considerações de Desenvolvimento

*   Este é um projeto básico que demonstra as operações CRUD em PHP com banco de dados.
*   A segurança (como prevenção de SQL Injection) e a validação de formulários podem ser aprimoradas.
*   A interface do usuário é simples e pode ser melhorada com frameworks CSS (ex: Bootstrap) ou JavaScript.


