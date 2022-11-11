<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zat Imóveis</title>
    <link rel="stylesheet" href="css/default/style.css">
    @yield('imports')
</head>
<body>
    <header id="site-header">
        <div class="container">
            <a href=""></a>
            <a href=""></a>

            <button class="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="site-nav">
                <ul>
                    <li><a href="#" class="link-nav">Home</a></li>
                    <li><a href="#" class="link-nav">A Zat Imóveis</a></li>
                    <li><a href="#" class="link-nav">Imóveis</a></li>
                    <li><a href="#" class="link-nav">Cadastre seu imóvel</a></li>
                    <li><a href="#" class="link-nav">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>



    @yield('content')



    <section id="site-footer">
        <div class="container">
            <div class="col1">
                <a href="#"><img src="#" alt="Logo Zat Imóveis"></a>
                <h4>Creci: 241223-F</h4>
            </div>

            <div class="col2">
                <nav class="site-nav">
                    <h3>Mapa do Site</h3>
                    <ul>
                        <li><a href="#" class="link-nav">Home</a></li>
                        <li><a href="#" class="link-nav">A Zat Imóveis</a></li>
                        <li><a href="#" class="link-nav">Imóveis</a></li>
                        <li><a href="#" class="link-nav">Cadastre seu Imóvel</a></li>
                        <li><a href="#" class="link-nav">Contato</a></li>
                        <li><a href="#" class="link-nav">Políticas de Privacidade</a></li>
                        <li><a href="#" class="link-nav">Termos de Uso</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col3">
                <nav class="site-nav">
                    <ul>
                        <li class="link-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                            dircezat@creci.org.br
                        </li>
                        <li class="link-nav">
                            (13) 99154-0364
                        </li>
                        <li class="link-nav">
                            (13) 3329-2196
                        </li>
                    </ul>
                </nav>

                <h3>mapa</h3>
            </div>
        </div>
    </section>

    <footer id="dev-footer">
        <div class="overlay">
            <div class="container">
                <span class="text">Desenvolvido por <a href="https://www.linkedin.com/in/wallace-zatorski/" class="dev" target="_blank">Wallace Zatorski</a></span>
            </div>
        </div>
    </footer>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>
</html>