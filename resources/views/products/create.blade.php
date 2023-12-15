@extends('layouts.adm')

@section('title', 'CREATE PAGE')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('addproduct'))
        <div class="alert alert-success" role="alert">
            {{ session('addproduct') }}
        </div>
    @endif
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create product</h4>
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Content</label>
                                <textarea class="form-control" id="exampleTextarea1" name="content" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Price</label>
                                <input name="price" type="number" class="form-control"  placeholder="Price">
                            </div><div class="form-group">
                                <label for="exampleInputPassword4">Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="imgInput" class="form-label">Main IMG</label>
                                <input type="file" class="form-control" name="img1" >
                            </div>
                            <div class="form-group">
                                <label for="imgInput" class="form-label">IMG-2</label>
                                <input type="file" class="form-control" name="img2" >
                            </div>
                            <div class="form-group">
                                <label for="imgInput" class="form-label">IMG-3</label>
                                <input type="file" class="form-control" name="img3" >
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="imgInput" class="form-label">IMG-2</label>--}}
{{--                                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img1" id="imgInpute">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="imgInput" class="form-label">IMG-3</label>--}}
{{--                                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img1" id="imgInpute">--}}
{{--                            </div>--}}
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection
