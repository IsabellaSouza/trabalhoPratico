
<html>
    <head>
        <title>Veiculos terceiros</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <!--HEADER-->
        <?php require_once('nav.php'); ?>
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="left-align">Veículos de Terceiros</h2>
                </div>
                <!-- Modal Triger Para Terceiros -->
                <a class="waves-effect waves-light btn modal-trigger orange white-text" href="#modalTerceiro"><i class="material-icons left">add</i>Cadastrar</a>

                <!-- Modal Cadastro de Terceiros -->
                <div id="modalTerceiro" class="modal">
                    <div class="modal-content">
                        <h3>Cadastro Veículo terceiro</h3>
                        <p>Cadastro de Veículos de terceiros.</p>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Insira o Nome do Proprietário" id="nome_proprietario" type="text" class="validate">
                                        <label for="nome_proprietario">Nome Proprietário</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Insira o Sobrenome do Proprietário" id="nome_proprietario" type="text" class="validate">
                                        <label for="nome_proprietario">Sobrenome Proprietário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Insira o Endereço do Proprietário" id="endereco_proprietario" type="text" class="validate">
                                        <label for="endereco_proprietario">Endereco Proprietário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Insira o RG do Proprietário" id="rg_proprietario" type="text" class="validate">
                                        <label for="rg_proprietario">RG Proprietário</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Insira o Telefone do Proprietário" id="telefone_proprietario" type="text" class="validate">
                                        <label for="telefone_proprietario">Telefone Proprietário</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: Onix LTZ" id="modelo_veiculo" type="text" class="validate">
                                        <label for="modelo_veiculo">Modelo Veículo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: Fiat" id="marca_veiculo" type="text" class="validate">
                                        <label for="marca_veiculo">Marca</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: AAA-0000" id="placa_veiculo" type="text" class="validate">
                                        <label for="placa_veiculo">Placa</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: Do dia 01/10/2018 ao dia 05/10/2018" id="disponibilidade_veiculo" type="text" class="validate">
                                        <label for="disponibilidade_veiculo">Disponibilidade</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: R$ 2500,00" id="seguro_veiculo" type="text" class="validate">
                                        <label for="seguro_veiculo">Seguro</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Ex: R$ 50,00" id="locacao_veiculo" type="text" class="validate">
                                        <label for="locacao_veiculo">Locação Diária</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="observacao" class="materialize-textarea"></textarea>
                                        <label for="observacao_veiculo">Observações</label>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat green-text">Cadastrar</a>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">Cancelar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="centered highlight">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Endereco</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Seguro</th>
                            <th>Locação</th>
                            <th>Disponibilidadeo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>0</th>
                            <th>Rodrigo</th>
                            <th>de Jesus Claus</th>
                            <th>Vilson Gabiatti, 3100</th>
                            <th>000000.0</th>
                            <th>Onix ltz</th>
                            <th>AAA-0000</th>
                            <th>Fiat</th>
                            <th>R$3400,00</th>
                            <th>R$50,00</th>
                            <th>Do dia 01/10/2018 a 31/10/2018</th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <!--FOOTER-->
        <?php require_once('footer.php'); ?>

        <!--SCRIPTS-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>