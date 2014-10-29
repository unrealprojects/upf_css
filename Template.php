<!doctype HTML>
<html>
    <head>
        <title>UPF</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="/css/main.css.gz"/>
        <script src="/js/app/example/main.js.gz" type="text/javascript"></script>

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="/css/main.css"/>
            <script src="/js/libs/ie8/respond.js" type="text/javascript"></script>
            <script src="/js/app/example/main.js" type="text/javascript"></script>
        <![endif]-->
        <!--[if lt IE 10]>
            <script src="/js/libs/ie8/jquery.placeholder.js" type="text/javascript"></script>
        <![endif]-->


    </head>
    <body>
    <div class="Page-Wrapper">
    <nav class="Page-Header">
        <script>
            $(document).ready(function(){
                $('Navicon-Toggle').click(function(){
                    alert('a');
                });
            });

        </script>
        <div class="Navicon-Toggle Spinning White Visible-Mobile Hidden-XS">
            <span class="Icon"></span>
        </div>
        <ul class="Page-Navigation Visible-XS">
            <li class="Page-Navigation-Item"><a href="#">About</a></li>
            <li class="Page-Navigation-Item"><a href="#">Grid</a></li>
            <li class="Page-Navigation-Item"><a href="#">Forms</a></li>
            <li class="Page-Navigation-Item"><a href="#">Typography</a></li>
            <li class="Page-Navigation-Item"><a href="#">Test Room</a></li>
        </ul>
    </nav>

        <aside>
            <?php

                if(strlen($_SERVER['REQUEST_URI'])>1){
                    require './pages' . $_SERVER['REQUEST_URI'] . '.php';
                }else{
                    require './pages/home.php';
                }
            ?>
        </aside>
        <main>

        </main>
        <hr class="Page-Wrapper-Stop"/>
    </div>
    <footer class="Page-Footer" role="contentinfo">
        &copy; 2014 Unreal Projects Framework
    </footer>


        <!--
        <section class="Grid Split Multi-Row Test">
            <h1>Grid Split Multi-Row</h1>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>

            <div class="Node-XS-2">Placeholder Images for every case.</div>
            <div class="Node-XS-4">Placeholder Images for every case.</div>
            <div class="Node-XS-4">Placeholder Images for every case.</div>
            <div class="Node-XS-2">Placeholder Images for every case.</div>

            <div class="Node-XS-6">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
        </section>

        <section class="Grid Multi-Row Test">
            <h1>Grid Merge Multi-Row</h1>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>

            <div class="Node-XS-2">Placeholder Images for every case.</div>
            <div class="Node-XS-4">Placeholder Images for every case.</div>
            <div class="Node-XS-4">Placeholder Images for every case.</div>
            <div class="Node-XS-2">Placeholder Images for every case.</div>

            <div class="Node-XS-6">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
            <div class="Node-XS-3">Placeholder Images for every case.</div>
        </section>

        <section class="Grid Split Multi-Row Test">
            <h1>Fraction Grid Split Multi-Row</h1>
            <div class="Node-1-3">Placeholder Images for every case.</div>
            <div class="Node-1-3">Placeholder Images for every case.</div>
            <div class="Node-1-3">Placeholder Images for every case.</div>

            <div class="Node-2-5">Placeholder Images for every case.</div>
            <div class="Node-3-5">Placeholder Images for every case.</div>

            <div class="Node-2-7">Placeholder Images for every case.</div>
            <div class="Node-3-7">Placeholder Images for every case.</div>
            <div class="Node-2-7">Placeholder Images for every case.</div>
        </section>

        <section class="Grid Multi-Row Test">
            <h1>Fraction Grid Merge Multi-Row</h1>
            <div class="Node-1-3">Placeholder Images for every case.</div>
            <div class="Node-1-3">Placeholder Images for every case.</div>
            <div class="Node-1-3">Placeholder Images for every case.</div>

            <div class="Node-2-5">Placeholder Images for every case.</div>
            <div class="Node-3-5">Placeholder Images for every case.</div>

            <div class="Node-2-7">Placeholder Images for every case.</div>
            <div class="Node-3-7">Placeholder Images for every case.</div>
            <div class="Node-2-7">Placeholder Images for every case.</div>
        </section>
        -->
</html>