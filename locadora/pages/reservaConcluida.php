<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localiza | Aluguel de Carros com a maior frota do Brasil</title>
    <link rel="stylesheet" href="../styles/reservaConcluida.css">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php 

        require_once "../class/Agendamento.php";
        require_once "../class/Carro.php";
        require_once "../class/Pessoa.php"; 

        $nascionalidade=$_POST["nascionalidade"];
        $select_documento=$_POST["select_documento"];
        $documento_numero=$_POST["documento_numero"];
        $nomeCompleto=$_POST["nomeCompleto"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];

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
        <h2 id="textReserva">Reserva concluida com sucesso.</h2>
        <article> 
            <!-- Informações do carro -->
            <div id="Carro"> 
                <h2 class="h2"> Carro </h2>
                <h3 class="h3"> Grupo </h3>
                <p class="p" class="p">  <?php echo $grupo ; ?> </p>
                <h3 class="h3"> Modelo </h3>
                <p class="p">  <?php echo $modelo ; ?> </p>
                <h3 class="h3"> Cor </h3>
                <p class="p">  <?php echo $cor ; ?> </p>
                <h3 class="h3"> Potencia </h3>
                <p class="p">  <?php echo $potencia ; ?> </p>
                <h3 class="h3"> Preço Total </h3>
                <p class="p">  <?php echo "R$ " . $agendamento->calcularPreco($preco); ?> </p>


            </div>
            <!-- Dados Pessoais -->
            <div id="dados">   
                <h2 class="h2">Dados Pessoais</h2>
                <h3 class="h3">Nome</h3>
                <p class="p"><?php echo $nomeCompleto?></p>
                <h3 class="h3">Documento</h3>
                <p class="p"><?php echo $documento_numero?></p>
                <h3 class="h3">Email</h3>
                <p class="p"><?php echo $email?></p>
                <h3 class="h3">Telefone</h3>
                <p class="p"><?php echo $telefone?></p>
            </div>
            <!-- Informações da reserva -->
            <div id="reserva">
                <h2 class="h2">Reserva</h2>
                <h3 class="h3">Retirada</h3>
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
                <p class="p"><?php echo $local_retirada ?></p>
                <h3 class="h3">Devolução</h3>
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
                <p class="p"><?php echo $local_devolucao ?></p>
            </div>
        </article>
    </main>
    <footer>

    </footer>
</body>
</html>