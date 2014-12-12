<!doctype HTML>
<html>
    <head>
        <title>UPF</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <link rel="stylesheet" type="text/css" href="/css/main.css.gz"/>
        <script src="/js/app/example/main.js.gz" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('.Hamburger').click(function () {
                    $(this).toggleClass('Active');
                    $('.Page-Navigation').toggleClass('Expanded');
                });

                $('.Search').click(function () {
                    $(this).toggleClass('Active');
                    $('.Search-Content').toggleClass('Expanded');
                });

                var scrollTimeout;  // global for any pending scrollTimeout
                var Header_Height = 50;
                var Header_Container = $('#Page-Header');

                $(window).scroll(function()
                {
                    if (scrollTimeout)
                    {
                        clearTimeout(scrollTimeout);
                        scrollTimeout = null;
                    }
                    scrollTimeout = setTimeout(scrollHandler, 250);
                });

                scrollHandler = function () {

                    if ($(window).scrollTop() > Header_Height)
                    {
                        Header_Container.addClass('Sticky');
                    }
                    else
                    {
                        Header_Container.removeClass('Sticky');
                    }
                };

                var Active_Tab;
                var Previous_Tab;

                $('.Tab-Button-Item').click(function(){
                    $('.Tab-Button-Item').removeClass('Active');
                    $(this).addClass('Active');
                });

            });
        </script>

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="/css/main.css"/>
            <script src="js/libs/html5shiv.js"></script>
            <script src="/js/libs/ie8/respond.js" type="text/javascript"></script>
            <script src="/js/app/example/main.js" type="text/javascript"></script>
        <![endif]-->
        <!--[if lt IE 10]>
            <script src="/js/libs/ie8/jquery.placeholder.js" type="text/javascript"></script>
        <![endif]-->
    </head>
    <body>
    <div class="Page-Wrapper">
    <div id="Page-Header">
        <div id="Page-Header-Wrap">
            <span class="Hamburger" href="#"></span>
            <a class="Page-Logotype" href="/"><span class="Darken">Uni</span>formity</a>
            <a class="Search" href="#"></a>
            <nav class="Page-Navigation">
                <ul class="Page-Navigation-List">
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/variables">Variables</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link Active" href="/grid">Grid</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/forms">Forms</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/typography">Typography</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/elements">Elements</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/transform">Transform</a>
                    </li>
                    <li class="Page-Navigation-Item">
                        <a class="Page-Navigation-Link" href="/testroom1">Test Room One</a>
                    </li>
                </ul>
            </nav>
            <div class="Search-Content">
                <div class="Control-Group">
                    <div class="Input-Group Addon Grid">
                        <input class="Col-9" type="text"/>
                        <button class="Button Primary Col-3 Postfix">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <hr id="Page-Header-Shadow"/>
    </div>


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