@extends('layouts.app')
@section('content')
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">{{ $post->Title }}</h1>
                <p class="lead text-muted">{{ $post->Description }}</p>
            </div>
        </section>
    </main>
@endsection