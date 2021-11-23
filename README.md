# Controle de Estoque para lojas de roupas.

Com cadastro de roupas, categorias, lançamento de entrada e controle de saída, cadastro de clientes e fornecedores, controle e cadastro de vendas, geração de relatórios com filtro por data.

Este Sistema Controle Estoque foi feito com o Framework Laravel 5.5, Bootstrap 3, JavaScript,jQuery e Banco de dados MySQL.

- Para instalar esta aplicação.

```
git clone https://github.com/puppe1990/ControleEstoque.git
```

- Depois de baixado dentro da pasta use:

```
composer update.
```

- Configure seu banco de dados com as suas credenciais no arquivo

```
cp .env.example .env
```

- Para criar as tabelas utilize:

```
php artisan migrate
```

- Para rodar o projeto:

```
php artisan serve
```
