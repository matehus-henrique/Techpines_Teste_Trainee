# Discography Manager Tião Carreiro e Pardinho

## Resumo da Aplicação

**Discography Manager Tião Carreiro e Pardinho** é uma aplicação web desenvolvida com Laravel que permite gerenciar álbuns e faixas de música. A aplicação oferece funcionalidades para criar, visualizar, atualizar e excluir álbuns e faixas. Ela é projetada para ser um sistema simples e eficiente para gerenciar uma discografia, proporcionando uma interface amigável para gerenciar as informações dos álbuns e suas faixas associadas.

### Funcionalidades

- **Gerenciar Álbuns:** Adicionar, editar, visualizar e excluir álbuns.
- **Gerenciar Faixas:** Adicionar, editar, visualizar e excluir faixas associadas a álbuns.
- **Interface Intuitiva:** Navegue facilmente entre álbuns e faixas usando uma interface web simples.

## Requisições da API com Postman

### Endpoints

#### Álbuns

1. **Listar Álbuns**
   - **Método:** GET
   - **URL:** `/albums`
   - **Descrição:** Retorna uma lista de todos os álbuns.
   - **Exemplo de Requisição:**
     ```http
     GET /albums
     ```

2. **Criar Álbum**
   - **Método:** POST
   - **URL:** `/albums`
   - **Descrição:** Cria um novo álbum.
   - **Corpo da Requisição (JSON):**
     ```json
     {
       "name": "Nome do Álbum"
     }
     ```

3. **Visualizar Álbum**
   - **Método:** GET
   - **URL:** `/albums/{id}`
   - **Descrição:** Retorna os detalhes de um álbum específico, incluindo suas faixas.
   - **Exemplo de Requisição:**
     ```http
     GET /albums/1
     ```

4. **Atualizar Álbum**
   - **Método:** PUT
   - **URL:** `/albums/{id}`
   - **Descrição:** Atualiza os detalhes de um álbum específico.
   - **Corpo da Requisição (JSON):**
     ```json
     {
       "name": "Novo Nome do Álbum"
     }
     ```

5. **Excluir Álbum**
   - **Método:** DELETE
   - **URL:** `/albums/{id}`
   - **Descrição:** Exclui um álbum específico.
   - **Exemplo de Requisição:**
     ```http
     DELETE /albums/1
     ```

#### Faixas

1. **Listar Faixas de um Álbum**
   - **Método:** GET
   - **URL:** `/albums/{id}/tracks`
   - **Descrição:** Retorna uma lista de todas as faixas associadas a um álbum específico.
   - **Exemplo de Requisição:**
     ```http
     GET /albums/1/tracks
     ```

2. **Criar Faixa**
   - **Método:** POST
   - **URL:** `/tracks`
   - **Descrição:** Cria uma nova faixa associada a um álbum.
   - **Corpo da Requisição (JSON):**
     ```json
     {
       "name": "Nome da Faixa",
       "album_id": 1
     }
     ```

3. **Visualizar Faixa**
   - **Método:** GET
   - **URL:** `/tracks/{id}`
   - **Descrição:** Retorna os detalhes de uma faixa específica.
   - **Exemplo de Requisição:**
     ```http
     GET /tracks/1
     ```

4. **Atualizar Faixa**
   - **Método:** PUT
   - **URL:** `/tracks/{id}`
   - **Descrição:** Atualiza os detalhes de uma faixa específica.
   - **Corpo da Requisição (JSON):**
     ```json
     {
       "name": "Novo Nome da Faixa",
       "album_id": 1
     }
     ```

5. **Excluir Faixa**
   - **Método:** DELETE
   - **URL:** `/tracks/{id}`
   - **Descrição:** Exclui uma faixa específica.
   - **Exemplo de Requisição:**
     ```http
     DELETE /tracks/1
     ```

## Explicação das Telas

### Tela de Boas-vindas

A tela de boas-vindas é a página inicial da aplicação e fornece um resumo das funcionalidades da aplicação. Ela inclui:
- **Cabeçalho:** Título e descrição breve da aplicação.
- **Menu:** Botões para acessar as funcionalidades principais:
  - **Ver Álbuns:** Redireciona para a lista de álbuns.
  - **Adicionar Novo Álbum:** Redireciona para o formulário de criação de um novo álbum.
  - **Ver Faixas (Álbum 1):** Redireciona para a lista de faixas do álbum com ID 1.
 
  -![image](https://github.com/user-attachments/assets/88777290-3484-4530-a106-8393006cd0ca)



### Tela de Lista de Álbuns

Esta tela exibe todos os álbuns cadastrados na aplicação. Para cada álbum, é possível:
- **Editar:** Redireciona para o formulário de edição do álbum.
- **Excluir:** Remove o álbum da lista.

- ![image](https://github.com/user-attachments/assets/2f99099f-5336-4736-9dfd-dab907c76241)


### Tela de Criação de Álbum

Nesta tela, você pode inserir os detalhes de um novo álbum e salvar essas informações na aplicação.

![image](https://github.com/user-attachments/assets/f40cd6a9-784a-4922-a645-f35cede24c39)



### Tela de Edição de Álbum

Permite atualizar as informações de um álbum existente. Após as alterações, os dados são salvos e a lista de álbuns é atualizada.

![image](https://github.com/user-attachments/assets/ba7d255e-e66e-4933-8478-95d1e14a64ea)



### Tela de Lista de Faixas

Exibe todas as faixas associadas a um álbum específico. Para cada faixa, você pode:
- **Editar:** Redireciona para o formulário de edição da faixa.
- **Excluir:** Remove a faixa da lista.

![image](https://github.com/user-attachments/assets/935893ff-d89f-4528-8b02-439c1630c74e)



### Tela de Criação de Faixa

Nesta tela, você pode inserir os detalhes de uma nova faixa e associá-la a um álbum existente.

![image](https://github.com/user-attachments/assets/c5087850-55e1-4dff-b804-928f51328f84)



### Tela de Edição de Faixa

Permite atualizar as informações de uma faixa existente. Após as alterações, os dados são salvos e a lista de faixas é atualizada.

![image](https://github.com/user-attachments/assets/a81764a1-e726-4c01-98ae-2143778e6c39)



## Banco de Dados

Neste projeto, utilizei o **MySQL** como sistema de gerenciamento de banco de dados. O MySQL é um dos bancos de dados relacionais mais populares e confiáveis, conhecido por sua robustez e escalabilidade. 

### Estrutura do Banco de Dados

O banco de dados é utilizado para armazenar todas as informações relacionadas a álbuns e faixas. A estrutura do banco de dados inclui:

- **Tabelas para Álbuns e Faixas:** 
  - A tabela de álbuns armazena informações sobre cada álbum, como o nome do álbum.
  - A tabela de faixas contém detalhes sobre cada faixa, incluindo o nome da faixa e o ID do álbum ao qual está associada.

- **Relacionamentos:**
  - A tabela de faixas possui uma chave estrangeira que referencia a tabela de álbuns, estabelecendo um relacionamento entre faixas e seus respectivos álbuns.

A configuração do banco de dados MySQL permite que a aplicação execute operações CRUD (Criar, Ler, Atualizar e Excluir) de maneira eficiente, garantindo que os dados sejam armazenados e recuperados de forma segura e organizada.

### Configuração

Para garantir que a aplicação funcione corretamente com o MySQL, você deve configurar o arquivo `.env` da aplicação com as credenciais do banco de dados, incluindo o nome do banco de dados, o usuário e a senha. 

**Exemplo de configuração no arquivo `.env`:**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=discografia
DB_USERNAME=root
DB_PASSWORD=your_password

---

