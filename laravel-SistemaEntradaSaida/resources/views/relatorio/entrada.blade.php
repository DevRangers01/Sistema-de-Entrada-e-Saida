<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de entradas e saídas</title>
    
    @vite(['resources/css/entrada.css']);
</head>

<body>
    <div class="simulated-header">
        <center>
            <h1>Relatório de entradas e saídas</h1>
        </center>

            <a href="gerarcracha.html"><img src="img/adicao.png" class="mais" alt="logo"></a>
            <img src="img/atualizar.png" class="atualizar" alt="atualizar">

    </div>
    <div class="porteiro">Porteiro: Jessé</div>
    <div class="data">Data: 28/03/2024</div>
    <div class="search-container">
        <input type="checkbox" id="chkEntrada1" name="chkEntrada1">
        <label for="chkEntrada1">Entrada</label>
        <input type="checkbox" id="chkEntrada2" name="chkEntrada2">
        <label for="chkEntrada2">Saída</label><br><br>
        <div class="dados"><span>Dados:</span></div><br>
        <input type="text" id="searchInput" placeholder="Pesquisar...">
        <button onclick="searchFunction()">Pesquisar</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Luiz Fernando<br> AP 09 BL B 12982356798</th>
                <td scope=>Morador</td>
                <td scope=>Entrou<br> 22h25</td>
                <td scope=>Placa do veículo<br> CAI0B13</td>
                <td scope=> <a href="EditarCracha.html"><img src="img/olho.png" class="olin" alt="olho"> </a></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">Carla Souza<br> AP 09 BL B 12982356798</th>
                <td>Visitante</td>
                <td>Entrou<br> 19h21</td>
                <td>Placa do veículo<br>ISO9J24</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Marcelo Lage<br> AP 09 BL B 12982356798</th>
                <td>Morador</td>
                <td>Entrou<br> 13h40 </td>
                <td>Placa do veículo<br> JOA0M21</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Ramon Menezes<br> AP 09 BL B 12982356798</th>
                <td>Visitante</td>
                <td>Entrou<br> 09h10</td>
                <td>Placa do veículo<br>MON3I20</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Lucas Martinez<br> AP 09 BL B 12982356798</th>
                <td>Visitante</td>
                <td>Entrou<br> 23h10</td>
                <td>Placa do veículo<br>ING4D16</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Giovanna Peres<br> AP 09 BL B 12982356798</th>
                <td>Morador</td>
                <td>Entrou<br> 12h50</td>
                <td>Placa do veículo<br>ISA8E16</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Mário Aiala<br> AP 09 BL B 12982356798</th>
                <td>Morador</td>
                <td>Entrou<br> 14h34</td>
                <td>Placa do veículo<br>IGO2D44</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Maria Joaquina<br> AP 09 BL B 12982356798</th>
                <td>Visitante</td>
                <td>Entrou<br> 05h16</td>
                <td>Placa do veículo<br>ISO9J24</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Cirilo Rivera<br> AP 09 BL B 12982356798</th>
                <td>Morador</td>
                <td>Entrou<br> 08h23</td>
                <td>Placa do veículo<br>ISO9J24</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
            <tr>
                <th scope="row">Davi Augusto<br> AP 09 BL B 12982356798</th>
                <td>Visitante</td>
                <td>Entrou<br> 20h11</td>
                <td>Placa do veículo<br>ISO9J24</td>
                <td scope=> <img src="img/olho.png" class="olin" alt="olho"></td>
                <td scope=> <img src="img/lata-de-lixo.png" class="olin" alt="lixo"></td>
            </tr>
        </tbody>
    </table><br><br>

    <center>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </center>

    <center>
    <img src="img/logodevrangers.png" alt="Logo" class="logo">
    </center>

</body>

</html>