<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cadastro de Veículo</title>

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
                                  <h1 class="header center orange-text">Cadastro de Veículo</h1>
                                  <div class="row center">
                                     <div class="row">
                                        <form class="col s12">
                                          <div class="row">
                                                <div class="input-field col s6">
                                          <input id="nome" type="text" class="validate">
                                          <label for="nome">Nome</label>
                                                </div>


                                                <div class="input-field col s6">
                                                  <input id="placa" type="text" class="validate">
                                                  <label for="placa">Placa</label>
                                                </div>


                                                 <div class="input-field col s6">
                                                   <input id="marca" type="text" class="validate">
                                                   <label for="marca">Marca</label>
                                                 </div>


                                                <div class="input-field col s6">
                                                  <input id="modelo" type="text" class="validate">
                                                  <label for="modelo">Modelo</label>
                                                </div>

                                                <div class="input-field col s6">
                                                  <input id="valorDoSeguro" type="text" class="validate">
                                                  <label for="valorDoSeguro">Valor do Seguro</label>
                                                </div>


                                                <div class="input-field col s6">
                                                  <input id="valorDaLocacao" type="text" class="validate">
                                                  <label for="valorDaLocacao">Valor da Locação</label>
                                                </div>

                                                <div class="input-field col s6">
                                                  <input id="cor" type="text" class="validate">
                                                  <label for="cor">Cor</label>
                                                </div>


                                                        <!-- Botao -->

                                                  <div class="switch">
                                                     <label>
                                                      Desativado
                                                      <input type="checkbox">
                                                      <span class="lever"></span>
                                                       Ativo
                                                  </label>
                                                  </div>
															
						
                                                  </div>
                                                  <div class="row center">
                                                        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Salvar</a>
                                                  </div>
                                                  <br><br>

                                                  </div>
                                                  </div>

                                                  <h1 class="header center orange-text">Tabela de Veículos</h1>

                                                    <table>
                                                    <thead>
                                                      <tr>
                                                      <th>Nome</th>
                                                      <th>Placa</th>
                                                      <th>Marca</th>
                                                      <th>Modelo</th>
                                                      <th>Valor do Seguro</th>
                                                      <th>Valor da Locação</th>
                                                      <th>Cor</th>
                                                      <th> Status Ativo/Desativo</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                  <tr>
                                                          <!-- <td></td>
                                                        <td></td>
                                                        <td></td>
                                                  </tr> -->

                                                </tbody>
                                                </table>
                                                </div>
                                                <div class="row center">
                                                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Editar</a>
                                                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Remover</a>
                                                </div>
                                                <br><br>

                                                </div>
                                                    </div>



  <div class="container">
    <div class="section">

      

            
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
																								<!--rodape-->	
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
																								   <a class="orange-text text-lighten-3" href="http://materializecss.com"></a>
																								  </div>
																								</div>
																							  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
