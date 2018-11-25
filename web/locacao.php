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
        require_once('./conexao.php');
        $loc = $conn->query('select * from locacao');
        //var_dump($loc);
    ?>
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Locação</h1>
      <div class="row center">
        <div class="row">
            <form id="formLocacao" action="locacao_salvar.php"  method="POST" class="col s12">
              <div class="row">
                <div class="input-field col s4">
                    <input id="dataLocacao" name="dataLocacao" type="date">
                  <label for="dataLocacao">Data de Locação</label>
                </div>
                <div class="input-field col s4">
                    <input id="dataDevolucao" name="dataDevolucao" type="date">
                  <label for="dataDevolucao">Data de Devolução</label>
                </div>
                <div class="input-field col s4">
                    <input id="quilometragem" name="quilometragem" type="number" class="validate">
                  <label for="quilometragem">Quilometragem</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                    <input id="cpf_pessoa" name="cpf_pessoa" type="text" class="validate">
                  <label for="cpf_pessoa">CPF</label>
                </div>
                <div class="input-field col s4">
                  <input id="placa_carro" name="placa_carro" type="text" class="validate">
                  <label for="placa_carro">Placa do Veículo</label>
                </div>
                
                  <div class="switch">
                      <label>
                          Em andamento
                          <input name="ativo" type="checkbox">
                          <span class="lever"></span>
                          Encerrado
                      </label>
                  </div>
              </div>
              
              
            </form>
          </div>
      </div>
      <div class="row center">
          
        <button id="buttonSalvar" name="buttonSalvar" class="btn-large waves-effect waves-light orange">Salvar</button>
        <button type="submit" id="buttonEditar" value="1" name="buttonEditar" class="btn-large waves-effect waves-light orange">Editar</button>
        
      </div>
      
      <br><br>
      <div class="row"> 
        <h1 class="header center orange-text">Tabela de Locações</h1>
        <table class="highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>CPF</th>
                <th>Veículo Placa</th>  
                <th>Data de Locação</th>  
                <th>Data de Devolução</th>  
                <th>Quilometragem</th>    
            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT * FROM locacao";
                $res = $conn->query($sql);
                
                if($res->num_rows>0){
                    while($row = $res->fetch_assoc()){
                        echo "<tr data-id='".$row['id']."'class='linhas1'>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['cpf_locacao']."</td>";
                        echo "<td>".$row['placa_carro']."</td>";
                        echo "<td>".$row['dataLocacao']."</td>";
                        echo "<td>".$row['dataDevolucao']."</td>";
                        echo "<td>".$row['quilometragem']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            
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
  <script>document.getElementById("buttonEditar").disabled = true;</script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>