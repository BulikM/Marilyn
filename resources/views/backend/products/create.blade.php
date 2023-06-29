@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{action('App\Http\Controllers\Backend\BUsersController@store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

{{--voorkeuren--}}

                        <p class="card-description"> Category </p>

                        <div class="form-group mb-3">
                            <input name="name" type="text" class="form-control" id="floatingInputValue" placeholder="Name">
                            @error('name')
                            <p class="text-danger fs-6">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input name="price" type="number" class="form-control" id="price" placeholder="price" value="0.00">
                            @error('price')
                            <p class="text-danger fs-6">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-around border border-1 my-3 py-3 bg-white">
                            <div class="form-group mb-3 d-flex flex-column">
                                <label>Brands</label>
                                <div class="btn-group-vertical">
                                    @foreach($brands as $brand)
                                        <label>
                                            <input type="radio" name="brand_id" value="{{ $brand->id }}" autocomplete="off"> {{ $brand->name }}
                                        </label>
                                    @endforeach
                                </div>
                                @error('brand_id')
                                <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb3">
                                <label>Categorieën</label>
                                @foreach($categories as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$category->id}}" id="category{{$category->id}}" name="productcategories[]">
                                        <label class="form-check-label" for="category{{$category->id}}">{{$category->name}}</label>
                                    </div>
                                @endforeach
                                @error('categories')
                                <p class="text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <textarea name="body" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            @error('body')
                            <p class="text-danger fs-6">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="photo_id" id="ChooseFile">
                        </div>


<div class="d-flex justify-content-center gap-3">
                        <button type="submit" class="button btn-gradient-submit">SUBMIT</button>
        <a type="button" href="{{route('users.index')}}" class="button btn-gradient-cancel">Cancel</a>
</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
