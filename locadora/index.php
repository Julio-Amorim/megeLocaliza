<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localiza | Aluguel de Carros com a maior frota do Brasil</title>
    <link rel="stylesheet" href="./styles/index.css">
    <script src="./js/validacaoIndex.js"></script>
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
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
                
                <img src="./img/logo/Logotipo_da_Localiza.png" id="nomeLocaliza" class="nomeLocaliza" alt="Localiza">

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
            <div id="header3">
                <form action="./pages/localiza.php" method="post" id="form">
                    <div id="inputs_data_inicial">
                        <input type="text" name="local_retirada" id="local_retirada"  placeholder="Digite o local de retirada" required>
                        <input type="date" name="data_retirada" id="data_retirada"  placeholder="Data" required>
                        <input type="time" name="hora_retirada" id="hora_retirada"  placeholder="Hora"required>
                    </div>
                    <div id="inputs_data_devolucao">
                        <input type="text" name="local_devolucao" id="local_devolucao"  placeholder="Digite o local de devolução"required>
                        <input type="date" name="data_devolucao" id="data_devolucao"  placeholder="Data"required>
                        <input type="time" name="hora_devolucao" id="hora_devolucao"  placeholder="Hora"required>
                    </div>

                    <div id="bnt_continuar">
                        <div></div>
                        <button type="bnt bnt-success" name="continuar" id="continuar" onclick="validar()">CONTINUAR</button>
                        <div></div>
                    </div>
            </form>
            </div>
        </article>
    </header>
    <main>
    </main>
    <footer>
    </footer>
</body>
</html>