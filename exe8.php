<?php
// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.

namespace Loja\Financeiro; 
class Cliente
{
    public function exibirCliente()
    {
        echo "Detalhes do cliente";
    }
}

class Pedido
{
    public function exibirProduto()
    {
        echo "Detalhes do produto";
    }
}

class Pagamento
{
    public function exibirPagamento()
    {
        echo "Detalhes do pagamento";
    }
}

use Loja\Financeiro\Cliente as ClienteFinanceiro;

$cliente = new ClienteFinanceiro();
$cliente->exibirCliente();

echo "<br><br>";
?>