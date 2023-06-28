@extends('layouts.frontend')
@section('content')
    <!--main-->

    @isset($title)
        <div class="px-5"><h1 class="line d-flex align-items-center title___1Ikv6">{{$title}}</h1></div>
    @endif
    @isset($hero)
        @livewire('searchbox', ['originalProducts'=> $products, 'products'=> $products, 'hero'=>$hero, 'brands'=>$brands, 'sizes'=>$sizes, 'colors'=>$colors])
    @else
        @livewire('searchbox', ['products'=> $products ])
    @endif

@endsection
