@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <form action="{{action('App\Http\Controllers\Backend\BackendUsersController@store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

{{--voorkeuren--}}

                        <p class="card-description"> preferences </p>

                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($preferences as $preference)
                                <div class="card col bg-none" >
                                    <input type="checkbox" class="btn-check" value="{{$preference->id}}" name="preferences[]" id="preference{{$preference->id}}" autocomplete="off" @checked(in_array($preference->id, old('preferences', [])))>
                                    <label class="button btn-outline-purple" for="preference{{$preference->id}}">{{$preference->name}}</label><br>
                                </div>
                            @endforeach
                            </div>
                        <p class="card-description"> I am here to... </p>
                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($ReadOrShops as $ReadOrShop)
                                <div class="card col bg-none" >
                                    <input type="radio" class="btn-check" value="{{$ReadOrShop->id}}" name="ReadOrShop" id="ReadOrShop{{$ReadOrShop->id}}" autocomplete="off" @checked($ReadOrShop->id == old('ReadOrShop'))>
                                    <label class="button btn-outline-purple" for="ReadOrShop{{$ReadOrShop->id}}">{{$ReadOrShop->name}}</label><br>
                                </div>
                            @endforeach
                        </div>
                        <p class="card-description"> keep me informed </p>
                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($newsletterinfos as $info)
                                <div class="card col bg-none" >
                                    <input type="checkbox" class="btn-check" value="{{$info->id}}" name="newsletterinfos[]" id="info{{$info->id}}" autocomplete="off" @checked(in_array($info->id, old('newsletterinfos', [])))>
                                    <label class="button btn-outline-purple" for="info{{$info->id}}">{{$info->name}}</label><br>
                                </div>
                            @endforeach
                        </div>

                        <p class="card-description mb-4"> Personal info </p>
{{--titel--}}
                        <div class="row">
                        <div class="dropdown mb-4">
                            <select  name="title" id="title" class="form-select w-25" aria-label="title select">
                                <option  value="" disabled selected hidden>Title</option>
                                @foreach($titles as $title)
                                    <option value="{{$title->id}}" class="hover-purple">{{$title->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
{{--email--}}
                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="email" name="email" type="email" placeholder="email"
                                           class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
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
                                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{old('last_name')}}">
                                    <label class="label-top" for="last_name">Last name</label>
                                </div>
                            </div>
                        </div>
{{--telfoonnummer--}}
                        <div class="row mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-group">
                                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                                           class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
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
                                           class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}">
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
                            <div class="dropdown mb-4 col-12 col-md-3">
                                <select  name="month" id="month" class="form-select" aria-label="Month">
                                    <option  value="" disabled selected hidden>Month</option>
                                    @foreach($months as $month)
                                        <option value="{{$month->id}}" {{old ('month') == $month->id ? 'selected' : ''}}>{{$month->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="dropdown mb-4 col-12 col-md-3">
                                <select  name="day" id="day" class="form-select" aria-label="Day">
                                    <option  value="" disabled selected hidden>Day</option>
                                    @foreach($days as $day)
                                        <option value="{{$day->id}}" {{ old('day') == $day->id ? 'selected' : '' }}>{{$day->id}}</option>
                                    @endforeach
                                </select>
                            </div>
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
