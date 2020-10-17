@extends('app')

@section('content')
    <div class="col-lg-12">

       <h1>Articles</h1>

            @foreach($articles as $article)
            <a href="{{route('articles.show', $article->id)}}""><h3> {{$article->title}}</h3></a>
            <p>Посление обновления: {{$article->updated_at}}</p>
            @endforeach

            @csrf

    </div>

    <!-- /.col-lg-12-->

@endsection
