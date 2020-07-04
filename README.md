## Requisitos

- PHP
- Laravel 5.8
- NodeJs(para as dependencias do Bootstrap)
- Composer
- MySQLi(dependencia do PHP)

## Para iniciar

- Baixar o projeto do GitHub

- Deve-se configurar o arquivo .env para setar as configurações do banco de dados.

- Entrar no caminho da pasta atraves do CMD.
- Executar o comando ( npm install )
- Executar o comando ( npm run dev )
- Executar o comando ( php artisan migrate:fresh )
- Executar o comando ( php artisan serve )


## Acessar a aplicação web

- Acesse o localhost, com determinada porta configurada no PHP .ini


## Dentro do CRUD

- Na tela inicial irá ter o título 'Teste da Spigreen'.

- Clique em 'CLIENTES' para entrar no CRUD de clientes.
- Clique em 'PRODUTOS' para entrar no CRUD de produtos.

- 

## Navegação na CRUD CLIENTES

- Ao topo da página, bem no meio, irá aparecer os links 'Clientes' e 'Produtos', para facilitar a navegação.

- Irá aparecer o botão ao lado direto 'Adicionar cliente', ele enviará à tela do formulario com o nome do cliente e o registro CPF, para a inserção de um novo cliente.

- Preencha o formulário e clique em 'Salvar', ele irá te redimensionar para a tela de 'Lista de clientes'.

- Na tela de 'Lista de clientes', se caso tiver algum registro irá ter 3 botões a direita do registro.

- Botão 'Del' ( irá deletar o registro da linha ) 
- Botão 'Editar' ( irá te redimensionar para o formulário, para alterar ) 
- Botão 'Ver' ( aparecerá em linha a visualização do registro ) 


## Navegação na CRUD PRODUTOS

- Ao topo da página, bem no meio, irá aparecer os links 'Clientes' e 'Produtos', para facilitar a navegação.

- Irá aparecer o botão ao lado direto 'Adicionar produto', ele enviará à tela do formulario com o nome da descrição, quantidade e valor, para a inserção de um novo produto.

- Preencha o formulário e clique em 'Salvar', ele irá te redimensionar para a tela de 'Lista de produtos'.

- Na tela de 'Lista de produtos', se caso tiver algum registro irá ter 1 botão (Editar) a direita do card do produto.

- Botão 'Editar' ( irá te redimensionar para o formulário, para alterar ou deletar ) 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
