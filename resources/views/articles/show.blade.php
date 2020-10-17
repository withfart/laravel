@extends('app')

@section('page-title')
    Articles
@endsection

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Articles!</h1>

        <a href="{{route('articles.index')}}" class="btn btn-primary">Back</a>
        @csrf
        <br /> <br />
        <h1>{{$articles->title}}</h1>

        <div>
            <p> {{$articles->text}}</p>
            <p>Data created: {{$articles->created_at}}</p>

        </div>

    </div>
    <!-- /.col-lg-12-->

@endsection
