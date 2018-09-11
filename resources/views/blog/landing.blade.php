<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{  csrf_token() }}">

    <title>Willem Leuverink</title>

    <!-- Fonts -->
    <link href="{{ mix('blog-assets/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <main class="wrapper">
        <nav class="navigation">
            <section class="container">
                
                <input type="checkbox" id="menu-toggle" />
                <label class="menu-button float-right" for="menu-toggle"><i class="fas fa-bars"></i></label>
                <ul class="navigation-list">

                    <li class="navigation-item">
                        <a class="navigation-link" href="/about/">About</a>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="/posts/">Blog</a>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="/projects/">Projects</a>
                    </li>

                </ul>
            </section>
        </nav>

        <div class="content">
            <section class="container centered">
                <div class="about">
                    <div class="avatar"><img src="/blog-assets/images/avatar.jpg" alt="avatar"></div>
                    <h1>John Doe</h1>
                    <h2>Full Stack DevOps and Magician</h2>
                    <ul>
                        <li><a href="https://github.com/johndoe/"><i class="fab fa-github fa-2x"></i></a></li>
                        <li><a href="https://gitlab.com/johndoe/"><i class="fab fa-gitlab fa-2x"></i></a></li>
                        <li><a href="https://twitter.com/johndoe/"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/johndoe/"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="https://medium.com/@johndoe"><i class="fab fa-medium fa-2x"></i></a></li>
                    </ul>
                </div>
            </section>
        </div>


    </main>
    <script src="{{ mix('blog-assets/js/app.js') }}"></script>
</body>

</html>