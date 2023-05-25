@extends('layouts.backend')

@section('breadcrumb')
    <li class="breadcrumb-item active fs-5" aria-current="page"><h1 class="fs-3">Epmloyees</h1></li>
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

                    <a class="button btn-gradient-purple m-2" href="{{route('employees.create')}}"><i class="bi bi-person-fill-add"></i> Add Employee</a>
                </div>
                <table class="table table-borderless table-hover">
                    <thead>
                    <tr >
                        <th></th>
                        <th>title</th>
                        <th>name</th>
                        <th>Birth date</th>
                        <th>E-mail</th>
                        <th>Street</th>
                        <th>Number</th>
                        <th>Zipcode</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Country</th>
                        <th>phone</th>
                        <th>mobile phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($employees)
                            @forelse($employees as $employee)
                                <tr class="{{$employee ->deleted_at == null ? ' ' : 'text-secondary'}}">
                                    <td>
                                        <button class="dropdown-toggle border-0 bg-none" id="userDropdown{{ $employee->id }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-info-circle"></i>
                                        </button>
                                        <div class="dropdown-menu  shadow "
                                             aria-labelledby="userDropdown{{ $employee->id }}">
                                            <a class="dropdown-item" href="{{route ('users.edit', $employee->id )}}">
                                                <i class="bi bi-search-heart"></i>
                                               show/Edit
                                            </a>
                                            @if($employee->deleted_at != null)
                                                <form action="{{ route('backend.userrestore', $employee->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="bi bi-rewind-btn"></i>
                                                        Restore
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('users.destroy', $employee->id) }}" method="POST">
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
                                    <td>{{$employee->title ? $employee->title->name : "" }}</td>
                                    <td>{{$employee->last_name}} {{$employee->first_name}}</td>
                                    <td>{{$employee->day_id}} {{$employee->month ? $employee->month->name : ""}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>
                                       street
                                    </td>
                                    <td>
                                       number
                                    </td>
                                    <td>
                                        Zipcode
                                    </td>
                                    <td>
                                        City
                                    </td>
                                    <td>
                                        province
                                    </td>
                                    <td>
                                        country
                                    </td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->mobile_phone}}</td>
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
{{--{{$employees->links()}}--}}
@endsection
