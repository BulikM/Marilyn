@props(['class', 'text', 'href'])


<li  class="breadcrumb-item"><a class="text-white text-decoration-none text-capitalize{{$class}}" href="{{route($href)}}">{{$text}}</a></li>
