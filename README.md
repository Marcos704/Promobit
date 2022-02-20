<div align="center">
<img align="center" height="94px" width="94px"  src="https://blogger.googleusercontent.com/img/a/AVvXsEiA8MWybvTFiqot7azX6-QnLt7plr4VgpFhPtTOleBrKfuurv-KTA52T_NbV155EFcZZ1HLeUqRCTy4-rum5R9WQ8msLO1mw1acvvrWGjMOycIY5xohEqUvf99JEqRXgYzInyPt_5kC10avB-hymyhGrJjYqEi57f8gqMsO_PzXueyB2p-_CgljyZf0Zw"/>

</div>
<!---Esses são exemplos. Veja https://shields.io para outras pessoas ou para personalizar este conjunto de escudos. Você pode querer incluir dependências, status do projeto e informações de licença aqui--->
<div align="center">
<h1>Promobit</h1>
<h5>🛠Desafio proposto para a vaga de php júnior🛠</h5>
<small>@Marcos704</small>
</div>

> (Desafio Promobit) - Teste-Cadastro-Produtos
### ✔Funcionalidades
O projeto possui as seguintes funcionalidades.:

1. 📎 Cadastro
- Cadastro de Produtos
- Cadastro de Tags
2. 📎 Edição
- Edição de Produtos
- Edição de Tags
3. 📎 Relatórios
- Produtos/Tags


🔏Arquitetural
- Basta ter o banco de dados criado que o sistema irá cadastrar um usuário de testes! 😁

## 💻 Pré-requisitos para instalação do sistema

Antes de começar, verifique se você atendeu aos seguintes requisitos:
* Você instalou a versão mais recente de `<Versão do php 8.0 ou +/ Última versão da base de dados  / Última vesão do sistema>`.
* Você tem uma máquina `<Windows / Linux>`.
* Servidor Local instalado e configurado `<Xampp>`.

## 📟 Preparando o ambiente < Promobit >

Para instalar o < Promobit >, siga estas etapas:

Windows:
```
1. Baixe a nova versão do projeto no github;
2. Baixe a última versão da base de dados no github;
3. Tenha a última versão do servidor local Xampp instalada;
```
## 📟 Criação do banco de dados
Para realizar os testes de sessão no < FizCardSystem >, siga estas etapas:

Banco de dados - SCRIPT:
```
### DATABASE NAME: promobit
### Username: suport
### password: swu@660031
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
);
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
);
CREATE TABLE `product_tag` (
   `product_id` int NOT NULL,
   `tag_id` int NOT NULL,
   PRIMARY KEY (`product_id`,`tag_id`),
   CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
   CONSTRAINT `tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`)
);
CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fisrtname` VARCHAR (255) NOT NULL,
    `lastname` VARCHAR (255) NOT NULL,
    `password` VARCHAR (255) NOT NULL,
    `cpf` VARCHAR (255) NOT NULL,
    `status` TINYINT NOT NULL
)
```
## 📟 Realizando os testes
Para realizar os testes de sessão no < FizCardSystem >, siga estas etapas:

Banco de dados:
```
1. CPF de teste: 500.376.342-59
2. Senha : swu@660031
```
## Prints do sistema
<h4>Login</h4>
<img src="https://i.ibb.co/1njccrT/login-promobit.png">
<h4>Dashboard</h4>
<img src="https://i.ibb.co/hYygYFY/dashboard-promobit.png">
<h4>Listar Produtos</h4>
<img src="https://i.ibb.co/w0h9n8T/produtos-promobit.png">
<h4>Cadastrar Produto</h4>
<img src="https://i.ibb.co/861ZF1Z/cadastro-promobit.png">

