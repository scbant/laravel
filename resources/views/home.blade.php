@extends('_layouts.default')

@section('content')
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">The Bootstrap Blog</h1>

            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                @foreach ($pages as $page)
                    <div class="blog-post">
                        <a href="{{ URL('pages/'.$page->id) }}"><h2 class="blog-post-title">{{ $page->title }}</h2></a>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                        <p>{{ $page->body }}</p>
                        <hr>
                    </div>
                @endforeach
                <nav>
                    <ul class="pager">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.blog-main -->
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>me</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                    </ol>
                </div>
            </div>
            <!-- /.blog-sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
