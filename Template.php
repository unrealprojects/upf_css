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

        </aside>
        <main>
            <section class="Node">
                <h3 class="Underlined">Framework Variables</h3>
                <p>
                    <code class="Inline">$Core-Grid-Enable</code> Toggles <strong>Grid Generator</strong>
                </p>
                <p>
                    <code class="Inline">$Core-Reset-Enable</code> Toggles global reset
                </p>
            </section>
            <section class="Node">
                <h3 class="Underlined">Testing page</h3>
                <p class="Leading">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quae velit fugit tempora doloremque veritatis possimus magnam error.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quae velit fugit tempora doloremque veritatis possimus magnam error, ab ratione, quia minus vero nesciunt deleniti, dolore sunt. Iure, quo, animi.
                </p>
                <p class="Secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quae velit fugit tempora doloremque veritatis possimus magnam error, ab ratione, quia minus vero nesciunt deleniti, dolore sunt. Iure, quo, animi.
                </p>
            </section>
            <section class="Node">
                <form>
                    <h4 class="Underlined">Form testing</h4>
                    <div class="Control-Group">
                        <label class="Node-XS-1-4" for="demo-1-1">Consectetur adipisicing</label>
                        <input class="Node-XS-3-4" id="demo-1-1" type="text"/>
                    </div>
                    <div class="Control-Group">
                        <label class="Node-XS-1-4" for="demo-1-2">Molestiae quae</label>
                        <input class="Node-XS-3-4" id="demo-1-2" type="text"/>
                    </div>
                    <div class="Control-Group">
                        <button class="Button">I'm a button</button>
                    </div>
                </form>
            </section>
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