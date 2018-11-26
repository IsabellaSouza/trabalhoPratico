<?php
include './conexao.php';
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Nome</th>';

                    echo '</tr>';
                    var_dump($loc);
                    while($loc = mysql_fetch_assoc($loc))
                    {
                        echo '<tr>';
                        echo '<td>'. $loc['cpf_locacao'] .'</td>';
                        echo '<td>'. $loc['placa_carro'] .'</td>';
                        echo '<td>'. $loc['dataLocacao'] .'</td>';
                        echo '<td>'. $loc['dataDevolucao'] .'</td>';
                        echo '<td>'. $loc['quilometragem'] .'</td>';
                        echo '<td>'. $loc['ativo'] .'</td>';
                        echo '</tr>';   
                    }
                    echo'</table>';
                    
                   $conn->query($sql);
                   
                ?>