<?php
require_once('./conexao.php');
$loc = $conn->query('select * from locacao');
var_dump($loc);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Locação</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <?php
require_once('./nav.php');
?>
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Locação</h1>
      <div class="row center">
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s4">
                  <input id="dataDeLocacao" type="text" class="datepicker">
                  <label for="dataDeLocacao">Data de Locação</label>
                </div>
                <div class="input-field col s4">
                  <input id="dataDeDevolucao" type="text" class="datepicker">
                  <label for="dataDeDevolucao">Data de Devolução</label>
                </div>
                <div class="input-field col s4">
                  <input id="quilometragem" type="text" class="validate">
                  <label for="quilometragem">Quilometragem</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <input id="cpf" type="text" class="validate">
                  <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s8">
                  <input id="nomeCliente" type="text" class="validate">
                  <label for="nomeCliente">Nome do Cliente</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <select>
                    <option value="" disabled selected>Veículo placa</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Veículo </label>
                </div>
              </div>
              
            </form>
          </div>
      </div>
      <div class="row center">
        <a id="buttonSalvar" class="btn-large waves-effect waves-light orange">Salvar</a>
        
      </div>
      
      <br><br>
      <div class="row"> 
        <h1 class="header center orange-text">Tabela de Locações</h1>
        <table class="highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>CPF</th>
                <th>Nome do Cliente</th>  
                <th>Veículo Placa</th>  
                <th>Data de Locação</th>  
                <th>Data de Devolução</th>  
                <th>Quilometragem</th>    
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT `pessoa`.`id`,`pessoa`.`nome`,`pessoa`.`rg`,`pessoa`.`cpf`,`funcionario`.`dataAdmissao` FROM `pessoa` INNER JOIN `funcionario` ON `pessoa`.`id`=`funcionario`.`idPessoa`";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr data-id='".$row['id']."' class='linhas'>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['cpf']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['placa']."</td>";
                        echo "<td>".$row['dataLocacao']."</td>";
                        echo "<td>".$row['dataDevolucao']."</td>";
                        echo "<td>".$row['status']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            <td>
                <a class="waves-effect waves-light btn"><i class="material-icons left">edit</i></a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">delete</i></a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">close</i></a>
            </td>
          </tr>

        </tbody>
        </table>
    </div>
    </div>
  </div>
             
    
  <div class="container">
    <div class="section">

      

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <p class="grey-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
     
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
