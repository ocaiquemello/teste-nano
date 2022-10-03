## Sobre o projeto

O cliente entrou em contato querendo desenvolver um sistema de bonificação para seus funcionários. Para não bonificar os funcionários em forma de dinheiro, ele decidiu criar uma moeda digital. Com base nisso, a ideia é criar um sistema onde os funcionários terão um saldo de moeda digital e essas moedas podem ser convertidas em recarga para celular, compra de produtos e pagamento de contas.

O MVP proposto é um Painel Administrativo para gerenciar os funcionários e seus respectivos saldos.

Futuramente a ideia é ter um portal do funcionário, onde ele realizará o login, fará a consulta o saldo e solicitará a troca de moedas por produtos e serviços. Mas esse parte do projeto não entrará no escopo atual.

## Instalação

- Baixar esse projeto em alguma pasta;
- Rodar o comando `composer create-project`;
- Substituir as variáveis DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD de acordo com a sua preferência;
- Rodar o comando para criar o banco de dados: `php artisan migrate`;
- Rodar o comando para criar um usuário de teste: `php artisan db:seed`;
- Rodar o comando para iniciar o projeto: `php artisan serve`;
- Voilá!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
