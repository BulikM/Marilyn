@extends('layouts.backend')


@section('breadcrumb')
    <li class="breadcrumb-item active fs-5" aria-current="page"><h1 class="fs-3">users</h1></li>
@endsection
@section('content')
    <div class="col-lg-12 grid-margin container-fluid stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="float-end pb-3">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Success!</strong> {{ session('status') }}
                        </div>
                    @endif

                    <a class="button btn-gradient-purple m-2" href="{{route('users.create')}}"><i class="bi bi-person-fill-add"></i> Add user</a>
                </div>
                <table class="table table-borderless table-hover">
                    <thead>
                    <tr >
                        <th></th>
                        <th>title</th>
                        <th>name</th>
                        <th>Birth date</th>
                        <th>E-mail</th>
                        <th>Preference</th>
                        <th>news</th>
                        <th>phone</th>
                        <th>mobile phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($customers)
                            @forelse($customers as $customer)

                                {{dd($customer)}}
                                <tr class="{{$customer ->deleted_at == null ? ' ' : 'text-secondary'}}">
                                    <td>
                                        <button class="dropdown-toggle border-0 bg-none" id="userDropdown{{ $customer->id }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-info-circle"></i>
                                        </button>
                                        <div class="dropdown-menu  shadow "
                                             aria-labelledby="userDropdown{{ $customer->id }}">
                                            <a class="dropdown-item" href="{{route ('users.edit', $customer->id )}}">
                                                <i class="bi bi-search-heart"></i>
                                               show/Edit
                                            </a>
                                            @if($customer->deleted_at != null)
                                                <form action="{{ route('backend.userrestore', $customer->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="bi bi-rewind-btn"></i>
                                                        Restore
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('users.destroy', $customer->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="bi bi-trash3-fill"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{$customer->title ? $customer->title->name : "" }}</td>
                                    <td>{{$customer->last_name}} {{$customer->first_name}}</td>
                                    <td>{{$customer->day_id}} {{$customer->month ? $customer->month->name : ""}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="badge-outline-info dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                               {{$customer->preferences->count()}} / {{$preferencTotal}}
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach($customer->preferences as $preference)
                                                    <li class="dropdown-item">{{$preference->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="badge-outline-info dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{$customer->newsletterinfos->count()}} / {{$newsletterinfosTotal}}
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach($customer->newsletterinfos as $info)
                                                    <li class="dropdown-item">{{$info->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->mobile_phone}}</td>
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
{{--{{$customers->links()}}--}}
@endsection
