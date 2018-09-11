<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{  csrf_token() }}">

    <title>Willem Leuverink</title>

    <link href="{{ mix('blog-assets/css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
</head>

<body>
    <main class="wrapper">
        <nav class="navigation">
            <section class="container">

                @if(! Request::is('/'))
                <div id="branding" class="navigation-title">
                    <a href="/" rel="nofollow">
                        <span class="branding-curly-brackets">{</span>
                        <span id="branding-name">
                            <span>Willem</span>
                            <span>Leuverink</span>
                        </span>
                        <span class="branding-curly-brackets">}</span>
                    </a>
                </div>
                @endif

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
            @yield('content')
        </div>

    </main>
    <script src="{{ mix('blog-assets/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>