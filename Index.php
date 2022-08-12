<?php

        $lasanha = [

            ['P - R$17,50'],
            ['M - R$19,55'],
            ['G - R$22,75'],
            ['Acompanha Arroz e Salada.'],
            
        ];

        $costela = [

            ['P - R$20,00'],
            ['M - R$23,00'],
            ['G - R$26,00'],
            ['Acompanha Arroz, Fritas e Salada.'],
        
        ];

        $viradap = [

            ['P - R$17,50'],
            ['M - R$19,55'],
            ['G - R$22,75'],
            ['Opcional a troca do Tutu de feixao por Feijao com Bacon.'],
      
        ];

        

     echo "<link rel=”stylesheet” type=”text/css” href=”cardapio.css” />"

?>


<!DOCTYPE html>

<html lang = "pt-br">

    <head>
        <style>
            *{
                margin: 0;
                padding: 0;

            }

            #titulo{
                font-family: sans-serif;
                color: #380B61;
                margin-left: 7%;
            }

            #subtitulo{
                font-family: sans-serif;
                color: #380B61;
                margin-left: 10%;
            }
            #rodape{
                font-family: sans-serif;
                color: #380B61;
                margin-bottom: 10%;
                margin-top: 15%;
            }
            #cardapio{
                font-family: sans-serif;
                color: #380B61;
                margin-left: 10%;
            }

            body{
                background-color: #f0f8ff;
                font-family: sans-serif;
                font-size: 1em;
                color: #59429d;
                margin-left: 36%;
                margin-top: 2%;
                justify-content: center;
            }

            .botao input[type="button"] {
                border-radius: 5px;
                box-shadow: 2px 2px 2px rgba(0, 0, 0,0.2);
                text-shadow: 1px 1px 1px rgba(0, 0, 0,0.5);
                font-size: 1.2em;
                background: #59429d;
                border: 0;
                margin-top: 1em;
                margin-bottom: 1em;
                color: #ffffff;
                padding: 0.2em 0.6em;
                position: absolute;

            }
            .botao input[type="button"]:hover {
                background: #ccbbff;
                box-shadow: inset 2px 2px 2px rgba(0, 0, 0,0.2);
                text-shadow: none;

            }

            .nome{
                font-family: sans-serif;
                font-size: 1em;
                margin-top: 16%;
                margin-bottom: 2%;
                color: #59429d;
            }

            .refeicao{

                font-family: sans-serif;
                font-size: 1em;
                margin-top: 6%;
                color: #59429d;
            }

            .texto{
                font-family: sans-serif;
                font-size: 1em;
                margin-top: 2%;
                color: #59429d;
            }
        </style>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <link rel="stylesheet" type="test/css" href="cardapio.css" media="screen">

        <Title>
            Marmitas Dona Dirce
        </Title>
    </head>
    <Body>
        <h1 id="titulo">
            Marmitas Dona Dirce
        </h1>
        <p id="subtitulo">
            O gosto de Lar em qualquer lugar!!
        </p>

        <Table>
                <thead>
                    <tr>
                        <th id="cardapio">
                            Cardapio:
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>

                        <td>
                            <p class="nome">
                                <strong>
                                    Lasanha
                                </strong>
                            </p>
                        </td>
                        <tr>
                        <td>
                            <img src="lasanha.jpg" width=300 height=200>
                        </td>
                        </tr>   
                        <?php foreach($lasanha as $item) :?>
                            <tr>
                                <td class="refeicao">
                                    <?= $item[0] ?>
                                </td>
                            </tr>
                        <?php endforeach;?>]
                        <td>
                        <form class="botao">
                            <a href="http://127.0.0.1:5500/DonaDirce/lasanha.html">
                                <input type="button" value="Veja Mais">
                            </a>
                        </form>
                        </td>
                    </tr> 

                    <tr> 
                        <td>
                            <p class="nome">
                                <strong>
                                    Costela
                                </strong>
                            </p>
                        </td> 
                        <tr>
                        <td>
                            <img src="arroz-de-costela.jpg" width=300 height=200>
                        </td>
                        </tr>  
                        <?php foreach($costela as $item) :?>
                            <tr>
                                <td class="refeicao">
                                    <?= $item[0] ?>
                                </td>
                            </tr>
                        <?php endforeach;?>]
                        <td>
                        <form class="botao">
                            <a href="http://127.0.0.1:5500/DonaDirce/costela.html">
                                <input type="button" value="Veja Mais">
                            </a>
                        </form>
                        </td>
                    </tr> 

                    <tr>  
                        <td>
                            <p class="nome">
                                <strong>
                                    Virada á Paulista
                                </strong>
                            </p>
                        </td>
                        <tr>
                        <td>
                            <img src="virado_paulista.jpg" width=300 height=200>
                        </td>
                        </tr>    
                        <?php foreach($viradap as $item) :?>
                            <tr>
                                <td class="refeicao">
                                    <?= $item[0] ?>
                                </td>
                            </tr>
                        <?php endforeach;?>]
                        <td>
                            <form class="botao">
                                <a href="http://127.0.0.1:5500/DonaDirce/virada.html">
                                    <input type="button" value="Veja Mais">
                                </a>
                            </form>
                        </td>
                    </tr> 

                </tbody>
        </Table>
    </Body>
    <footer>
        <H6 id="rodape">
            Desemvolvido por Paulo Henrique Nogueira Faria
        </H6>
    </footer>
</html>