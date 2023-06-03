@extends('layouts.backend')
@section('breadcrumb')
    <li class="breadcrumb-item"><a class="text-white text-decoration-none text-capitalize"
                                   href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                   href="{{route('employees.index')}}">Employees</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">New Employee</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{action('App\Http\Controllers\Backend\BEmployeeController@store')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')


                        <p class="card-description mb-4"> Personal info </p>
                        {{--titel--}}
                        <div class="row">
                            <div class="dropdown mb-4">
                                <select  name="salutation_id" id="salutation_id" class="form-select w-25" aria-label="salutation select">
                                    <option  value="" disabled selected hidden>Title</option>
                                    @foreach($salutations as $salutation)
                                        <option value="{{$salutation->id}}" name="salutation_id" class="hover-purple">{{$salutation->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--email--}}
                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="email" name="email" type="email" placeholder="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{old('email')}}">
                                    <label class="label-top" for="email">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{--passwoord--}}
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="password" name="password" type="password" placeholder="password"
                                           class="form-control @error('password') is-invalid @enderror">
                                    <label class="label-top" for="password">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{--naam--}}
                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="first_name" name="first_name" type="text"
                                           class="form-control"
                                           placeholder="First name" value="{{old('first_name')}}">
                                    <label class="label-top" for="first_name">First name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="last_name" name="last_name" type="text" class="form-control"
                                           placeholder="Last name" value="{{old('last_name')}}">
                                    <label class="label-top" for="last_name">Last name</label>
                                </div>
                            </div>
                        </div>
                        {{--telfoonnummer--}}
                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           value="{{old('phone')}}">
                                    <label class="label-top" for="phone">Phone</label>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="mobile_phone" name="mobile_phone" type="tel" placeholder="Mobile phone"
                                           class="form-control @error('mobile_phone') is-invalid @enderror"
                                           value="{{old('mobile_phone')}}">
                                    <label class="label-top" for="mobile_phone">Mobile phone</label>
                                    @error('mobile_phone')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{--verjaardag--}}
                        <p class="card-description mb-4"> Birthday </p>
                        <div class="row">
                            <div class="mb-4 col-12 col-md-6">
                                <input type="date" id="birthdate" name="birthdate"
                                       class="form-control @error('birthdate') is-invalid @enderror"
                                       value="{{old('birthdate')}}">
                                @error('birthdate')
                                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                           <x-sub-btn/>
                            <x-cancel-btn :href="'employees.index'"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
