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
                        echo '<td>'. $dados['rg'] .'</td>';
                        echo '<td>'. $dados['cpf'] .'</td>';
                        echo '<td>'. $dados['endereco'] .'</td>';
                        echo '<td>'. $dados['data_admissao'] .'</td>';
                        echo '<td>'. $dados['data_demissao'] .'</td>';
                        echo '<td>'. $dados['status'] .'</td>';
                        
                        echo '</tr>';   
                    }
                    echo'</table>';
                    
                   $conn->query($sql);
                   
                ?>

