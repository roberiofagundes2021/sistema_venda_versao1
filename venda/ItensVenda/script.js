function inserirdados (venda, produto, quantidade_itens, valor, desconto){
    /*pegar o id da tabela na html que e dtitensVendas*/
    var tb = document.getElementById("dtitensVendas");
    /*depois vou contar linhas tem a tabela*/
    var qtdLinhas = tb.rows.length;
    /*depois vou inserir linha*/
    var linha = tb.insertRow(qtdLinhas);

    /*criou as variaveis que vai recebe os dados das tabelas*/

    var cellvenda = linha.insertCell(0);
    var cellproduto = linha.insertCell(1);
    var cellquantidade = linha.insertCell(2);
    var cellvalor = linha.insertCell(3);
    var celldesconto = linha.insertCell(4);

    /*agora as variaveis criadas acima armezarão os dados dos parametros*/

    cellvenda.innerHTML = venda;
    cellproduto.innerHTML = produto;
    cellquantidade.innerHTML = quantidade_itens;
    cellvalor.innerHTML = valor;
    celldesconto.innerHTML = desconto;
}