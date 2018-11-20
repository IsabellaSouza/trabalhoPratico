<?php
include './conexao.php';
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Nome</th>';

                    echo '</tr>';
                    var_dump($dados);
                    while($dados = mysql_fetch_assoc($dados))
                    {
                        echo '<tr>';
                        echo '<td>'. $dados['nome'] .'</td>';
                        echo '<td>'. $dados['placa'] .'</td>';
                        echo '<td>'. $dados['marca'] .'</td>';
                        echo '<td>'. $dados['modelo'] .'</td>';
                        echo '<td>'. $dados['valorDoSeguro'] .'</td>';
                        echo '<td>'. $dados['valoDoModelo'] .'</td>';
                        echo '<td>'. $dados['cor'] .'</td>';
                        echo '<td>'. $dados['ativo'] .'</td>';
                        echo '<td>'. $dados['status'] .'</td>';
                        echo '</tr>';   
                    }
                    echo'</table>';
                    
                   $conn->query($sql);
                   
                ?>

