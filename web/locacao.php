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
        <a id="download-button" class="btn-large waves-effect waves-light orange">Cadastrar</a>
      </div>
      <br><br>

    </div>
  </div>

   <table>
        <thead>
          <tr>
              <th>CPF</th>
              <th>Nome do Cliente</th>
              <th>Veículo Placa</th>
              <th>Data de Locação</th>
              <th>Data de Devolução</th>
              <th>Quilometragem</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <!--<td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>-->
          
        </tbody>
      </table>
            

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
