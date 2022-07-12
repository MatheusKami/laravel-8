<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
        <title>@yield("title")</title>
    </head>
    <body>
        <div class="header">
            <div class="titulo">
                <h1>Servidor Matheus</h1>
            </div>
            <div class="opcoes">
                <ul>
                    <li>
                        <a href="/events/create">Estudo</a>
                        <a href="/">Uteis</a>
                        <a href="/">Funcoes</a>
                        <a href="/">Links</a>
                    </li>
                </ul>
            </div>

        </div>
        @yield("content")
     
        </div>
        <footer>
            <div class = "legenda">
                <p >Mserver &copy; 2022;</p> 
            </div>
           
        </footer>
    </body>
</html>