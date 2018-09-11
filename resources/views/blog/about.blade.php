@extends('blog.layouts.master')

@section('content')
<section class="container page">
    <article>
        <header>
            <h1>About Hugo</h1>
        </header>

        <p>Hugo is a static site engine written in Go.</p>

        <p>It makes use of a variety of open source projects including:</p>

        <ul>
            <li><a href="https://github.com/spf13/cobra">Cobra</a></li>
            <li><a href="https://github.com/spf13/viper">Viper</a></li>
            <li><a href="https://github.com/spf13/jWalterWeatherman">J Walter Weatherman</a></li>
            <li><a href="https://github.com/spf13/cast">Cast</a></li>
        </ul>

        <p>Learn more and contribute on <a href="https://github.com/spf13">GitHub</a>.</p>

        <h2 id="setup">Setup</h2>

        <p>Some fun facts about <a href="http://gohugo.io/">Hugo</a>:</p>

        <ul>
            <li>Built in <a href="http://golang.org/">Go</a></li>
            <li>Loosely inspired by <a href="http://jekyllrb.com/">Jekyll</a></li>
            <li>Primarily developed by <a href="http://spf13.com/">spf13</a> on the train while commuting
                to and from Manhattan.</li>
            <li>Coded in <a href="http://vim.org">Vim</a> using <a href="http://vim.spf13.com/">spf13-vim</a></li>
        </ul>

        <p>Have questions or suggestions? Feel free to <a href="https://github.com/spf13/hugo/issues/new">open
                an issue on GitHub</a> or <a href="https://twitter.com/spf13">ask me on Twitter</a>.</p>

        <p>Thanks for reading!</p>

    </article>
</section>
@endsection