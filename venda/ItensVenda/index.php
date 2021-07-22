

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'ItensVenda.php';
require_once '../venda/Venda.php';
$venda = new Vendas();

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="script.js"></script>
 
    
  <meta charset="utf-8">

  <title>cadastrar itens da venda</title>
</head>
<body>
  <h2>cadastro de itens da venda</h2>


  <fieldset style="width: 500px;">
    <!--id fitensVendas ajudar para controlar o javascript -->
    <div id="fitensVendas">
         <form method='post' action="">

        <label class="dados"  for='venda'> venda: </label> 

            <select name="idvenda">
                        <option> selecione </option>
                        <option>
                            <?php
                                /*
                                * Método de conexão sem padrões
                                */

                                $username = 'postgres';
                                $password = '123456';

                                try {
                                    $conn = new PDO('pgsql:host=localhost;dbname=venda', $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $data = $conn->query('SELECT idvenda, datavenda FROM venda ORDER BY idvenda DESC LIMIT 1');

                                    foreach($data as $row) {
                            
                                          echo  '<option value="'.$row['idvenda'].'">'.$row['datavenda'].'-'.$row['idvenda'].'</option>';

                                    } 
                                } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>
                    
                        </option>
                 </select><br><br>   

          
        

        <label class="dados"  for='nomedoproduto'> nome do perfume </label> 
             <select name="idproduto">
                        <option> selecione </option>
                        <option>
                            <?php
                                /*
                                * Método de conexão sem padrões
                                */

                                $username = 'postgres';
                                $password = '123456';

                                try {
                                    $conn = new PDO('pgsql:host=localhost;dbname=venda', $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $data = $conn->query('SELECT nomedoproduto, idproduto FROM produto');

                                    foreach($data as $row) {
                                         echo  '<option value="'.$row['idproduto'].'">'.$row['nomedoproduto'].'-'.$row['idproduto'].'</option>';

                                    }
                                } catch(PDOException $e) {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                            ?>
                    
                        </option>
                 </select><br><br>

                  
           

     <label class="dados"  for='quantidade_itens'> quantidade: </label>    
        <input class="entrada" type="text" name="quantidade_itens"><br><br>

     <label class="dados" for='valor'> valor: </label>    
        <input class="entrada" type="text" name="valor"><br><br>

     <label class="dados"  for='desconto'>desconto: </label>    
        <input class="entrada" type="text" name="desconto"><br><br>


       <input class="botao" type="button" value="inserir dados" onclick="inserirdados(idvenda.value, idproduto.value, quantidade_itens.value, valor.value, desconto.value)">

      
        
    </form>
        

    </div>
   
  </fieldset>
  <div id="titensVendas">
            <table  id="dtitensVendas" style="width: 400px;">
                    <thead>
                        <h4>lista de itens vendas inserido</h4>
                        <tr>                    
                            <td>venda</td>
                            <td>produto</td>
                            <td>quantidade</td>
                            <td>valor</td>
                            <td>desconto</td>  
                        </tr>
                    </thead>
              
                </table>
      
  </div>

  

</body>
</html>

<?php
      $ItensVenda = new ItensVendas;
      if(isset($_POST['cadastrar'])):
        header('Location:../Lista_Compra/lista_compra.php');
            
    
            $idvenda = $_POST['idvenda'];
            $idproduto = $_POST['idproduto'];
            $quantidade_itens = $_POST['quantidade_itens'];
            $valorvenda = $_POST['valor'];
            $desconto = $_POST['desconto'];
          
           
            $ItensVenda->setIdVenda($idvenda);
            $ItensVenda->setIdProduto($idproduto);
            $ItensVenda->setQuantidade($quantidade_itens);
            $ItensVenda->setValorVenda($valor);
            $ItensVenda->setDesconto($desconto);
          
            

            if($ItensVenda-> insert_itensVenda()){
                echo "vendas ". $idvenda. " inserido com sucesso";
            }
      endif;
   
    ?>