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

            <section class="container list">
                <h1 class="title">Posts</h1>
                <ul>

                    <li>
                        <span>January 8, 2017</span><a href="/posts/detail/">Theme Demo</a>
                    </li>

                    <li>
                        <span>September 28, 2014</span><a href="/posts/detail/">Creating
                            a New Theme</a>
                    </li>

                    <li>
                        <span>April 2, 2014</span><a href="/posts/detail/">(Hu)go
                            Template Primer</a>
                    </li>

                    <li>
                        <span>April 2, 2014</span><a href="/posts/detail/">Getting
                            Started with Hugo</a>
                    </li>

                    <li>
                        <span>March 10, 2014</span><a href="/posts/detail/">Migrate
                            to Hugo from Jekyll</a>
                    </li>
                </ul>

            </section>
        </div>

    </main>
    <script src="{{ mix('blog-assets/js/app.js') }}"></script>
</body>

</html>