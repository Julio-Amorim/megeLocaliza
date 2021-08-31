<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localiza | Aluguel de Carros com a maior frota do Brasil</title>
    <link rel="stylesheet" href="../styles/confirmar.css">
    <script src="../js/validacaoDados.js"></script>
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php 
        require_once "../class/Agendamento.php";
        require_once "../class/Carro.php";
        require_once "../class/Pessoa.php";

            $local_retirada=$_POST["local_retirada"];
            $data_retirada=$_POST["data_retirada"];
            $hora_retirada=$_POST["hora_retirada"];
            $local_devolucao=$_POST["local_devolucao"];
            $data_devolucao=$_POST["data_devolucao"];
            $hora_devolucao=$_POST["hora_devolucao"];
            
            $codigo=$_POST["codigo"];
            $grupo=$_POST["grupo"];
            $preco=$_POST["preco"];
            $cor=$_POST["cor"];
            $modelo=$_POST["modelo"];
            $potencia=$_POST["potencial"];
            $arcondicionado=$_POST["arcondicionado"];
            $marca=$_POST["marca"];
            
        $agendamento = new Agendamento(
            $local_retirada,
            $data_retirada,
            $hora_retirada,
            $local_devolucao,
            $data_devolucao,
            $hora_devolucao
        );

        $carro = new Carro(
            $grupo,
            $modelo,
            $marca,
            $preco,
            $codigo,
            $cor,
            $potencia,
            $arcondicionado
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
        <h1 id="dadosPessoais">Dados Pessoais</h1>
        <p id="pDadosPessoais">Informe seus dados para que possamos efetuar a sua reserva</p>
        <article id="article2">
                    <div id="dados">
                        <!-- Form de dados pessoais  -->
                        <form action="reservaConcluida.php" method="POST">
                        <label for="Nascionalidade">Nascionalidade</label><br>
                            <input type="text" name="nascionalidade" id="Nascionalidade" placeholder="Brasil" required><br>
                            <label for="select_documento">Documento</label><br>
                            <select name="select_documento" id="select_documento">
                                <option value="cpf">CPF</option>
                                <option value="docEstrangeiro">Doc. Estrangeiro</option>
                                <option value="passaporte">Passaporte</option>
                            </select><br>
                            <label for="documento_numero">Documento</label><br>
                            
                            <!--<input id="CPF" maxlength="14" placeholder="CPF">-->
                            <input type="text" required name="documento_numero" id="documento_numero" placeholder="Documento" maxlength="14"><br>
                            <label for="nomeCompleto">Nome Completo</label><br>
                            
                            <input type="text" required name="nomeCompleto" id="nomeCompleto" placeholder="Digite seu nome completo"><br>
                            <label for="email">Email</label><br>
                            
                            <input type="email" required name="email" id="email" placeholder="Digite seu email"><br>
                            <label for="telefone">Telefone</label><br>
                            
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
                            <input type="text" class="form-control" id="telefone" required name="telefone" placeholder="Telefone" >
                            <script type="text/javascript">
                                $("#telefone").mask("(00) 0 0000-0000");
                            </script><div></div>

                                <div id="botaoReservar">
                                        <input type="hidden" name="local_retirada" value="<?php echo $local_retirada; ?>">
                                        <input type="hidden" name="data_retirada" value="<?php echo $data_retirada; ?>">
                                        <input type="hidden" name="hora_retirada" value="<?php echo $hora_retirada; ?>">
                                        <input type="hidden" name="local_devolucao" value="<?php echo $local_devolucao; ?>">
                                        <input type="hidden" name="data_devolucao" value="<?php echo $data_devolucao; ?>">
                                        <input type="hidden" name="hora_devolucao" value="<?php echo $hora_devolucao; ?>">
                                        <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
                                        <input type="hidden" name="grupo" value="<?php echo $grupo; ?>">
                                        <input type="hidden" name="preco" value="<?php echo $preco; ?>">
                                        <input type="hidden" name="cor" value="<?php echo $cor; ?>">
                                        <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                                        <input type="hidden" name="potencial" value="<?php echo $potencia; ?>">
                                        <input type="hidden" name="arcondicionado" value="<?php echo $arcondicionado; ?>">
                                        <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                                        

                                        <button type="submit" id="reservar" onclick="validar()">RESERVAR</button>
                                </div>
                            </form>
                        </div>
                </div>
                <!-- Card Resumo da Reserva -->
                <div id="resumo_reserva">
                        <div id="resumo">
                            <h2>Resumo da Reserva</h2>
                        </div>
                        <div class="divInfor">
                            <h3 class="h3">Retirada</h3>
                            <strong>
                                <p class="p">
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
                            <p class="pGrey"><?php echo "$local_retirada"; ?></p>
                        </div>
                        <div class="divInfor">
                            <h3 class="h3">Devolução</h3>
                            <strong>
                                <p class="p">
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
                            <p class="pGrey"><?php echo "$local_devolucao"; ?></p>
                        </div>
                        <div id="grupo" class="divInfor">
                            <h3 class="h3">Grupo</h3>
                                <p class="p">
                                    <strong>
                                        <?php
                                            echo $grupo;
                                        ?>
                                    </strong>
                                </p>
                                <p class="pGrey"><?php echo "$modelo"; ?></p>
                        </div>
                        <div id="ofertaPlus" class="divInfor">
                            <h3 class="h3">Oferta</h3>
                            <div class="flex">
                                <p class="p">Diárias</p>
                                <p id="tituloTotal">Total</p>
                            </div>
                            <div class="flex">
                                <p class="pGrey">
                                    <?php
                                      echo $agendamento->calcularDias() . "x R$ " . $preco ;
                                    ?>
                                </p>
                                <p class="pGrey" id="precoTotal" >
                                    <?php
                                        //echo "R$ 2.635,92";
                                        echo "R$ " . $agendamento->calcularPreco($preco);
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div id="precofinal" class="">
                            <p id="precofinal_p_amarelo">Valor total previsto</p>
                            <h1 id="precoFinal">
                                <?php
                                    //echo "R$ 2.635,92";
                                    echo "R$ " . $agendamento->calcularPreco($preco);
                                ?>
                            </h1>
                            <p id="precofinal_p_desconto">
                              <?php
                                //$desconto = 2635 / 10;
                                 echo "Em até 10x de R$ " . $agendamento->parcela(); ;
                              ?>
                            </p>
                        </div>
                </div>
                    
        </article>
            
    </main>    
    <footer> 
    </footer>
</body>
</html>