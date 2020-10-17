@extends('app')

@section('content')
    <div class="col-lg-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="my-4">New Products</h1>
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            Name:
            <br/>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"/>
            <br/>

            Price($):
            <br/>
            <input type="text" name="price" value="{{old('price')}}" class="form-control"/>
            <br/>

            Category:
            <br/>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)

                    <option value="{{$category->id}}"  @if ($category->id==old('category_id')) selected @endif> {{$category->name}}</option>
                @endforeach
            </select>
            <br/>

            Description:
            <textarea name="description" class="form-control">{{old('description')}}</textarea>
            <br/>

            Photo:
            <br/>
            <input type="file" name="photo" value=""/>
            <br/>     <br/>

            <input type="submit" class="btn btn-primary" value="Save"/>
        </form>

    </div>
    <!-- /.col-lg-12-->

@endsection
