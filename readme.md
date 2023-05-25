# Formulário com PHP

Este projeto consiste em um formulário de cadastro de usuários com armazenamento em um banco de dados. Além disso, o projeto implementa uma funcionalidade de proteção contra acesso não autorizado ao site.

## Pré-requisitos

Antes de utilizar este projeto, certifique-se de ter os seguintes pré-requisitos:

- XAMPP instalado em seu ambiente.
- Ter criado um banco de dados chamado "usuários".
- Ter criado uma tabela chamada "usuario" para armazenar os dados de cadastro e posteriormente serem utilizados no login.

## Instalação

1. Faça o download e instale o XAMPP em seu computador, se ainda não o tiver.
2. Inicie o XAMPP e inicie os serviços Apache e MySQL.
3. Abra seu navegador e acesse "http://localhost/phpmyadmin" para abrir o phpMyAdmin.
4. Crie um banco de dados chamado "usuários".
5. Dentro do banco de dados "usuários", crie uma tabela chamada "usuario" com os seguintes campos:
   - `id` (chave primária, autoincremento)
   - `nome` (varchar)
   - `email` (varchar)
   - `senha` (varchar)
6. Certifique-se de que o servidor Apache esteja apontando para o diretório onde você salvou os arquivos deste projeto.

## Uso

O uso deste projeto é bastante simples. Siga as etapas abaixo:

1. Abra o navegador e acesse o formulário de cadastro, geralmente em "http://localhost/caminho-para-o-projeto/formulario-cadastro.php".
2. Preencha todos os campos necessários, como nome, e-mail e senha.
3. Clique em "Cadastrar" para enviar os dados para o banco de dados.
4. Após o cadastro, vá para a tela de login, geralmente em "http://localhost/caminho-para-o-projeto/formulario-login.php".
5. Insira as informações de login (e-mail e senha) que você cadastrou anteriormente.
6. Se as informações estiverem corretas, você será redirecionado para uma página protegida, com acesso restrito a usuários autorizados.

## Contribuição

Atualmente, não estamos aceitando contribuições para este projeto.

## Licença

Este projeto é licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

## Contato

Se você tiver alguma dúvida, sugestão ou problema relacionado a este projeto, sinta-se à vontade para entrar em contato conosco pelo seguinte endereço de e-mail: [joaovitordan@hotmail.com](mailto:joaovitordan@hotmail.com).

Agradecemos o seu interesse e estamos à disposição para ajudar!