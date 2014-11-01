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
            <li class="Page-Navigation-Item"><a href="/">Home</a></li>
            <li class="Page-Navigation-Item"><a href="/variables">Variables</a></li>
            <li class="Page-Navigation-Item"><a href="/grid">Grid</a></li>
            <li class="Page-Navigation-Item"><a href="/forms">Forms</a></li>
            <li class="Page-Navigation-Item"><a href="/typography">Typography</a></li>
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
</html>