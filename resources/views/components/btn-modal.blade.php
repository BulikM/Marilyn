@props(['class','target'=>'','text'])

<!-- Button trigger modal -->
{{--<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$target}}">--}}
{{--    {{$text}}--}}
{{--</a>--}}
<a class="{{$class}}" data-bs-toggle="modal" data-bs-target="#{{$target}}" href="#">{{$text }}</a>
