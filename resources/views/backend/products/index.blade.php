@extends('layouts.backend')
@section('breadcrumb')
    <li class="breadcrumb-item active fs-5" aria-current="page"><h1 class="fs-3">users</h1></li>
@endsection
@section('content')
    product
    <div class="col-lg-12 grid-margin container-fluid stretch-card">
        <div class="card">
            <div class="card-body">
                @if (session('alert'))
                    <x-alert :type="session('alert')['type']" :message="session('alert')['message']">
                        <x-slot name="title">Users</x-slot>
                    </x-alert>
                @endif
                <div class="float-end pb-3">
                    <a class="button btn-gradient-purple m-2" href="{{route('products.create')}}"><i
                            class="bi bi-person-fill-add"></i> Add Product</a>
                </div>
                <table class="table table-borderless table-hover">
                    <thead>
                    <tr>
{{--                        <th>Actions</th>--}}
                        <th>id</th>
                        <th>image</th>
                        <th>Price</th>
                        <th>Categories</th>
                        <th>Brand</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Keyword</th>
                        <th>Body</th>
                        <th>Created</th>
                        <th>Updated</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($products)
                        @forelse($products as $product)
                            <tr class="{{$product ->deleted_at == null ? ' ' : 'text-secondary'}}">
{{--                                                                        <td>--}}
{{--                                --}}{{--                                        <button class="dropdown-toggle border-0 bg-none" id="userDropdown{{ $product->id }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                                {{--                                            <i class="bi bi-info-circle"></i>--}}
                                {{--                                        </button>--}}
                                {{--                                        <div class="dropdown-menu  shadow "--}}
                                {{--                                             aria-labelledby="userDropdown{{ $user->id }}">--}}
                                {{--                                            <a class="dropdown-item" href="{{route ('users.edit', $user->id )}}">--}}
                                {{--                                                <i class="bi bi-search-heart"></i>--}}
                                {{--                                               show/Edit--}}
                                {{--                                            </a>--}}
                                {{--                                            @if($user->deleted_at != null)--}}
                                {{--                                                <form action="{{ route('users.restore', $user->id) }}" method="POST">--}}
                                {{--                                                    @csrf--}}
                                {{--                                                    @method('POST')--}}
                                {{--                                                    <button type="submit" class="dropdown-item">--}}
                                {{--                                                        <i class="bi bi-rewind-btn"></i>--}}
                                {{--                                                        Restore--}}
                                {{--                                                    </button>--}}
                                {{--                                                </form>--}}
                                {{--                                            @else--}}
                                {{--                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">--}}
                                {{--                                                    @csrf--}}
                                {{--                                                    @method('DELETE')--}}
                                {{--                                                    <button type="submit" class="dropdown-item">--}}
                                {{--                                                        <i class="bi bi-trash3-fill"></i>--}}
                                {{--                                                        Delete--}}
                                {{--                                                    </button>--}}
                                {{--                                                </form>--}}
                                {{--                                            @endif--}}
                                {{--                                        </div>--}}
                                {{--                                    </td>--}}
                                <td>{{$product->id}}</td>
                                @foreach($product->images as $image)
                                    @if($loop->first)
                                <td><img class="img-thumbnail" width="62" height="62"
                                         src="{{$image->file ? $image->file : "/assets/img.png"}}"
                                         alt="{{$product->name}}"></td>
                                    @endif
                                @endforeach
                                <td> {{$product->price}}</td>
                                <td>
                                </td>
                                @foreach($product->brand as $brand)
                                <td>{{$brand->name}}</td>
                                @endforeach
                                <td>  {{Str::limit($product->name,18,'...')}} </td>
{{--                                @foreach($products->color as $col)--}}
{{--                                <td>{{$col->name}}</td>--}}
{{--                                @endforeach--}}
                                <td>  {{Str::limit($product->body,18,'...')}}</td>
                                <td>{{$product->created_at ? $product->created_at->diffForHumans() : ''}}</td>
                                <td>{{$product->updated_at ? $product->updated_at->diffForHumans() : ''}}</td>
                            </tr>
                        @empty
                            <td>Sorry no records where found</td>
                        @endforelse
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{$products->links()}}
@endsection
