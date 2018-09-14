@extends('blog.layouts.master')

@section('content')
<section class="container centered">
    <div class="about">
        <div class="avatar"><img src="/blog-assets/images/avatar.jpg" alt="avatar"></div>

        <div id="branding">
            <h1>
                <a href="/" rel="nofollow">
                    <span class="branding-curly-brackets">{</span>
                    <span id="branding-name">
                        <span>Willem</span>
                        <span>Leuverink</span>
                    </span>
                    <span class="branding-curly-brackets">}</span>
                </a>
            </h1>
            <h2>Engineer of webrelated things</h2>
        </div>

        <ul>
            <li><a href="https://github.com/gwleuverink/"><i class="fab fa-github fa-2x"></i></a></li>
            <li><a href="https://gitlab.com/gwleuverink/"><i class="fab fa-gitlab fa-2x"></i></a></li>
            <li><a href="https://twitter.com/gwleuverink/"><i class="fab fa-twitter fa-2x"></i></a></li>
            <li><a href="https://www.linkedin.com/in/gwleuverink/"><i class="fab fa-linkedin fa-2x"></i></a></li>
            <li><a href="https://medium.com/@gwleuverink"><i class="fab fa-medium fa-2x"></i></a></li>
        </ul>
    </div>
</section>

@endsection

@push('scripts')
<canvas id="interactive-canvas"></canvas>
@endpush