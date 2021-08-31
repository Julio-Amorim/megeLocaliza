<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localiza | Aluguel de Carros com a maior frota do Brasil</title>
    <link rel="stylesheet" href="../styles/localiza.css">
    <script src="../js/localiza.js"></script>
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php

use SebastianBergmann\Timer\Timer;
use Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame;

        require_once "../class/Agendamento.php";
        require_once "../class/Carro.php";

        $corolla = new Carro(
            "Grupo LK - Executivo Fast (GZAR)",
            "Toyota Corolla GLI FAST",
            "Toyota",
            250,
            001,
            "Branco",
            "177 HP",
            true
        );
        $corollaCross = new Carro(
            "Grupo LE - Suv Especial (XFAR)",
            "Toyota Corolla Cross XR",
            "Toyota",
            250.00,
            001,
            "Branco",
            "177 HP",
            true
        );
        $renegade = new Carro(
            "Grupo GW - Suv Aut. Fast (JFAR)",
            "Jeep Renegade Sport",
            "Jeep",
            219.00,
            003,
            "cinza",
            "139 HP",
            true
        );
        $mercedes = new Carro(
            "Grupo LP - Localiza Prime (PDAR)",
            "Mercedes C180 Avantgarde",
            "Mercedes",
            400.00,
            004,
            "cinza",
            "156 HP",
            true
        );
        $cruze = new Carro(
            "Grupo L - Executivo (FDAR)",
            "GM Cruze",
            "Chevrolet",
            320.00,
            005,
            "cobre",
            "153 HP",
            true
        );

        $local_retirada=$_POST["local_retirada"];
        $data_retirada=$_POST["data_retirada"];
        $hora_retirada=$_POST["hora_retirada"];
        $local_devolucao=$_POST["local_devolucao"];
        $data_devolucao=$_POST["data_devolucao"];
        $hora_devolucao=$_POST["hora_devolucao"];

        $agendamento = new Agendamento(
            $local_retirada,
            $data_retirada,
            $hora_retirada,
            $local_devolucao,
            $data_devolucao,
            $hora_devolucao
        );

    ?>

    <header>
        <article id="article1"> 
            <div id="headera1">
                <a class="a" id="a1" href="#">AUGUEL DE CARROS</a>
                <a class="a" id="a2" href="#">GESTÃO DE FROTA</a>
                <a class="a" id="a3" href="#">SEMINOVOS</a>
                <a class="a" id="a4" href="#">MEOOO - CARRO POR ASSINATURA</a>
                <a class="a" id="a5" href="#">ZARP</a>
                <a class="a" id="a6" href="#">BRASIL</a>
            </div>
            <div id="header2">
                <div>
                    <a href="../index.php">
                        <img src="../img/logo/Logotipo_da_Localiza.png" id="nomeLocaliza" class="nomeLocaliza" alt="Localiza">
                    </a>
                </div>
                <div id="menu2">
                    <a class="menu2" href="#">GRUPOS DE CARROS</a>
                    <a class="menu2" href="#">REDE DE AGÊNCIAS</a>
                    <a class="menu2" href="#">OFERTAS</a>
                    <a class="menu2" href="#">FIDELIDADE</a>
                    <a class="menu2" href="#">PARA EMPRESAS</a>
                    <a class="menu2" href="#">DÚVIDAS</a>
                </div>
                <div id="header_minhas_reservas">
                    <p id="minhas_reservas"><a href="#">MINHAS RESERVAS</a></p>
                    <p><a href="#">LOGIN</a></p>
                </div>
            </div>
        <article>
    </header>
    <main>
        <article id="article2">
            <!-- Card dos Carros -->
            <div class="carros">     
                <div id="titulo_carros">
                    <h1>Selecione o melhor grupo de carro e tarifa para você</h1>
                </div>     
                <div class="box-carros">
                    <div class="grupoImg">
                        <!-- Imagem e o grupo do carro -->
                        <p class="grupo"><?php echo $corolla->getGrupo(); ?></p>
                        <img class="img-carros" src="../img/cars/COLF.png" alt="Toyota Corolla GLI FAST">
                    </div>

                        <div class="card-infor">
                            <!-- Informações do carro -->
                            <h2 class="infor">Informações</h2>
                            <p class="modelo" ><?php echo $corolla->getModelo(); ?></p>

                            <p class="preco"><?php echo "R$ " . $corolla->getPreco() . ""; ?></p>

                            <p class="cor"><?php echo "Cor " . $corolla->getCor(); ?></p>

                            <p class="potencia"><?php echo "Potencia de " . $corolla->getPotencia(); ?></p>

                            <!-- Form do botão CONFIRMAR -->
                            <form action="../pages/confirmar.php" method="post">
                                
                                <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">

                                <input type="hidden" name="codigo" value="<?php echo $corolla->getCodigo() ?>">
                                <input type="hidden" name="grupo" value="<?php echo $corolla->getGrupo(); ?>">
                                <input type="hidden" name="preco" value="<?php echo $corolla->getPreco(); ?>">
                                <input type="hidden" name="cor" value="<?php echo $corolla->getCor(); ?>">
                                <input type="hidden" name="modelo" value="<?php echo $corolla->getModelo(); ?>">
                                <input type="hidden" name="potencial" value="<?php echo $corolla->getPotencia(); ?>">
                                <input type="hidden" name="arcondicionado" value="<?php echo $corolla->getArcondicionado(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $corolla->getMarca(); ?>">


                                <div id="botaoConfirmar">
                                    <input type="submit" value="CONFIRMAR" class="confirmar">
                                </div>
                            </form>
                        </div>                    
                </div>

                <div class="box-carros">
                    <div class="grupoImg">
                        <!-- Imagem e o grupo do carro -->
                        <p class="grupo"><?php echo $corollaCross->getGrupo(); ?></p>
                        <img class="img-carros" src="../img/cars/CCRO.png" alt="Toyota Corolla Cross XR">
                    </div>
                    <div class="card-infor">
                        <!-- Informações do carro -->
                            <h2 class="infor">Informações</h2>
                            <p class="modelo" ><?php echo $corollaCross->getModelo(); ?></p>

                            <p class="preco"><?php echo "R$ " . $corollaCross->getPreco() . ""; ?></p>

                            <p class="cor"><?php echo "Cor " . $corollaCross->getCor(); ?></p>

                            <p class="potencia"><?php echo "Potencia de " . $corollaCross->getPotencia(); ?></p>
                            <!-- Form do botão CONFIRMAR -->
                            <form action="../pages/confirmar.php" method="post">

                                <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">

                                <input type="hidden" name="codigo" value="<?php echo $corollaCross->getCodigo() ?>">
                                <input type="hidden" name="grupo" value="<?php echo $corollaCross->getGrupo(); ?>">
                                <input type="hidden" name="preco" value="<?php echo $corollaCross->getPreco(); ?>">
                                <input type="hidden" name="cor" value="<?php echo $corollaCross->getCor(); ?>">
                                <input type="hidden" name="modelo" value="<?php echo $corollaCross->getModelo(); ?>">
                                <input type="hidden" name="potencial" value="<?php echo $corollaCross->getPotencia(); ?>">
                                <input type="hidden" name="arcondicionado" value="<?php echo $corollaCross->getArcondicionado(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $corollaCross->getMarca(); ?>">

                                <div id="botaoConfirmar">
                                    <input type="submit" value="CONFIRMAR" class="confirmar">
                                </div>                            
                            </form>
                        </div>
                </div>

                <div class="box-carros">
                    <div class="grupoImg">
                        <!-- Imagem e o grupo do carro -->
                        <p class="grupo"><?php echo $renegade->getGrupo(); ?></p>
                        <img class="img-carros" src="../img/cars/RENE.png" alt="Jeep Renegade Sport">
                    </div>
                    <div class="card-infor">
                        <!-- Informações do carro -->
                            <h2 class="infor">Informações</h2>
                            <p class="modelo" ><?php echo $renegade->getModelo(); ?></p>

                            <p class="preco"><?php echo "R$ " . $renegade->getPreco() . ""; ?></p>

                            <p class="cor"><?php echo "Cor " . $renegade->getCor(); ?></p>

                            <p class="potencia"><?php echo "Potencia de " . $renegade->getPotencia(); ?></p>

                            <!-- Form do botão CONFIRMAR -->
                            <form action="../pages/confirmar.php" method="post">

                                <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">

                                <input type="hidden" name="codigo" value="<?php echo $renegade->getCodigo() ?>">
                                <input type="hidden" name="grupo" value="<?php echo $renegade->getGrupo(); ?>">
                                <input type="hidden" name="preco" value="<?php echo $renegade->getPreco(); ?>">
                                <input type="hidden" name="cor" value="<?php echo $renegade->getCor(); ?>">
                                <input type="hidden" name="modelo" value="<?php echo $renegade->getModelo(); ?>">
                                <input type="hidden" name="potencial" value="<?php echo $renegade->getPotencia(); ?>">
                                <input type="hidden" name="arcondicionado" value="<?php echo $renegade->getArcondicionado(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $renegade->getMarca(); ?>">
                                
                                <div id="botaoConfirmar">
                                    <input type="submit" value="CONFIRMAR" class="confirmar">
                                </div>                            
                            </form>
                        </div>
                </div>

                <div class="box-carros">
                    <div class="grupoImg">
                        <!-- Imagem e o grupo do carro -->
                        <p class="grupo"><?php echo $mercedes->getGrupo(); ?></p>
                        <img class="img-carros" src="../img/cars/MCAV.png" alt="Mercedes C180 Avantgarde">
                    </div>
                    <div class="card-infor">
                        <!-- Informações do carro -->
                            <h2 class="infor">Informações</h2>
                            <p class="modelo" ><?php echo $mercedes->getModelo(); ?></p>

                            <p class="preco"><?php echo "R$ " . $mercedes->getPreco() . ""; ?></p>

                            <p class="cor"><?php echo "Cor " . $mercedes->getCor(); ?></p>

                            <p class="potencia"><?php echo "Potencia de " . $mercedes->getPotencia(); ?></p>

                            <!-- Form do botão CONFIRMAR -->
                            <form action="../pages/confirmar.php" method="post">

                                <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">

                                <input type="hidden" name="codigo" value="<?php echo $mercedes->getCodigo() ?>">
                                <input type="hidden" name="grupo" value="<?php echo $mercedes->getGrupo(); ?>">
                                <input type="hidden" name="preco" value="<?php echo $mercedes->getPreco(); ?>">
                                <input type="hidden" name="cor" value="<?php echo $mercedes->getCor(); ?>">
                                <input type="hidden" name="modelo" value="<?php echo $mercedes->getModelo(); ?>">
                                <input type="hidden" name="potencial" value="<?php echo $mercedes->getPotencia(); ?>">
                                <input type="hidden" name="arcondicionado" value="<?php echo $mercedes->getArcondicionado(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $mercedes->getMarca(); ?>">
                                
                                <div id="botaoConfirmar">
                                    <input type="submit" value="CONFIRMAR" class="confirmar">
                                </div>                            
                            </form>
                        </div>
                </div>
                
                <div class="box-carros">
                    <div class="grupoImg">
                        <!-- Imagem e o grupo do carro -->
                        <p class="grupo"><?php echo $cruze->getGrupo(); ?></p>
                        <img class="img-carros" src="../img/cars/CRUF.png" alt="GM Cruze">
                    </div>
                    <div class="card-infor">
                        <!-- Informações do carro -->
                            <h2 class="infor">Informações</h2>
                            <p class="modelo" ><?php echo $cruze->getModelo(); ?></p>

                            <p class="preco"><?php echo "R$ " . $cruze->getPreco() . ""; ?></p>

                            <p class="cor"><?php echo "Cor " . $cruze->getCor(); ?></p>

                            <p class="potencia"><?php echo "Potencia de " . $cruze->getPotencia(); ?></p>

                            <!-- Form do botão CONFIRMAR -->
                            <form action="../pages/confirmar.php" method="post">

                                <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">

                                <input type="hidden" name="codigo" value="<?php echo $cruze->getCodigo() ?>">
                                <input type="hidden" name="grupo" value="<?php echo $cruze->getGrupo(); ?>">
                                <input type="hidden" name="preco" value="<?php echo $cruze->getPreco(); ?>">
                                <input type="hidden" name="cor" value="<?php echo $cruze->getCor(); ?>">
                                <input type="hidden" name="modelo" value="<?php echo $cruze->getModelo(); ?>">
                                <input type="hidden" name="potencial" value="<?php echo $cruze->getPotencia(); ?>">
                                <input type="hidden" name="arcondicionado" value="<?php echo $cruze->getArcondicionado(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $cruze->getMarca(); ?>">
                                
                                <div id="botaoConfirmar">
                                    <input type="submit" value="CONFIRMAR" class="confirmar">
                                </div>                            
                            </form>                            
                    </div>
                </div>
            </div>
            <!-- Card Resumo da Reserva -->
            <div id="resumo_reserva">
                    <div id="resumo">
                        <h2>Resumo da Reserva</h2>
                    </div>
                <div class="infor_agendamento">
                    <h3 class="nome_infor">Retirada</h3>
                    <strong>
                        <p class="data_hora_infor">
                            <?php
                                date_default_timezone_set('America/Sao_Paulo');

                                $data = new DateTime($data_retirada);
                                $formatter = new IntlDateFormatter('pt_BR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'America/Sao_Paulo',          
                                    IntlDateFormatter::GREGORIAN);
                            echo $formatter->format($data) . " ás $hora_retirada";
                            ?>
                        </p>
                    </strong>                
                    <p class="local_infor"><?php echo "$local_retirada"; ?></p>
                </div>
                <div class="infor_agendamento">
                    <h3 class="nome_infor">Devolução</h3>
                    <strong>
                        <p class="data_hora_infor">
                            <?php
                                date_default_timezone_set('America/Sao_Paulo');

                                $data = new DateTime($data_devolucao);
                                $formatter = new IntlDateFormatter('pt_BR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'America/Sao_Paulo',          
                                    IntlDateFormatter::GREGORIAN);
                            echo $formatter->format($data) . " ás $hora_devolucao";
                            ?>
                        </p>
                    </strong>
                    <p class="local_infor"><?php echo "$local_devolucao"; ?></p>
                </div>
            </div>
        </article>
    </main>
    <footer>
    </footer>
</body>
</html>
