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

                    <a class="btn btn-outline-primary m-2" href="{{route('users.create')}}"><i class="bi bi-person-fill-add"></i> Add user</a>
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
                        @if($users)
                            @forelse($users as $user)
                                <tr class="{{$user ->deleted_at == null ? 'opacity-100' : 'opacity-50'}}">
                                    <td>
                                        <div class="">
                                            <button class="dropdown-toggle border-0 bg-none" id="userDropdown{{ $user->id }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-info-circle"></i>
                                            </button>
                                            <div class="dropdown-menu  shadow "
                                                 aria-labelledby="userDropdown{{ $user->id }}">
                                                <a class="dropdown-item" href="{{route ('users.edit', $user->id )}}">
                                                    <i class="bi bi-search-heart"></i>
                                                   show/Edit
                                                </a>
                                                @if($user->deleted_at != null)
                                                    <form action="{{ route('backend.userrestore', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-rewind-btn"></i>
                                                            Restore
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-trash3-fill"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user->title ? $user->title->name : "" }}</td>
                                    <td>{{$user->last_name}} {{$user->first_name}}</td>
                                    <td>{{$user->day_id}} {{$user->month ? $user->month->name : ""}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="badge-outline-info dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                               {{$user->preferences->count()}} / {{$preferencTotal}}
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach($user->preferences as $preference)
                                                    <li class="dropdown-item">{{$preference->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="badge-outline-info dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{$user->newsletterinfos->count()}} / {{$newsletterinfosTotal}}
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach($user->newsletterinfos as $info)
                                                    <li class="dropdown-item">{{$info->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->mobile_phone}}</td>
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
{{$users->links()}}
@endsection
