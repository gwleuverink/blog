@extends('blog.layouts.master')

@section('content')
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
@endsection