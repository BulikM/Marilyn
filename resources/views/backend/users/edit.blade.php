@extends('layouts.backend')
@section('breadcrumb')
    <nav aria-label="breadcrumb page-header">
        <ol class="breadcrumb p-0 d-flex align-items-center text-center">
            <li class="breadcrumb-custom me-1">
                <h3 class="page-title text-primary">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home p-0"></i>
                </span> <a href="{{route('backend')}}">Home <i class="bi bi-chevron-double-right text-primary h4 pt-1"></i></a>
                </h3>
            </li>
            <li class="breadcrumb-custom me-1" >
                <h3 class="page-title text-primary">
                    Users
                    <i class="bi bi-chevron-double-right text-primary h4 pt-1"></i>
                </h3>
            </li>
            <li class="breadcrumb-custom me-1" >
                <h3 class="page-title text-primary">
                    {{$user->first_name ? $user->first_name : 'Edit'}}
                </h3>
            </li>

        </ol>
    </nav>
@endsection
@section('content')
    <div class="modal fade ozeifez" id="register1" data-bs-backdrop="modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0 ">
                <div class="">
                    <button type="button" class="btn-close knKOjn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="bvMGHA d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="jIrrng fWvPnl">
                        Your Profile</h2>
                    <p class="crzGSJ">Interest 1/3</p>
                    <div class="jtMBnU">
                        <h1 class="iXhRDe iHueCX">
                            All set!</h1>
                        <p class="RbpsV">First things first: <br
                                class=" bEcUgx">Help us get to
                            know you better.</p>
                        <form action="{{action('App\Http\Controllers\BackendUsersController@UpdateInterests', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <fieldset class="lghJJp">
                                <legend class="iPIjsH">
                                    <p class="jRxSXL">1. Which of these
                                        topics are you interested in exploring on goop?
                                        <em class="jtfttS">(Select all that
                                            apply.)</em>
                                    </p>
                                </legend>
                                <div class="row row-cols-1 row-cols-lg-2 ">
                                    @foreach($preferences as $preference)
                                        <div class="card col bg-none" >
                                            <input type="checkbox" class="btn-check" value="{{$preference->id}}" name="preferences[]" id="preference{{$preference->id}}" autocomplete="off" @checked($user->preferences->contains($preference->id))>
                                            <label class="btn btn-outline-primary" for="preference{{$preference->id}}">{{$preference->name}}</label><br>
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="OnboardingModalContainerstyles__ButtonContainer-sc-1y49z04-10 hSTBlt">
                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-gradient-success" data-bs-dismiss="modal">SUBMIT</button>
                            <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{action('App\Http\Controllers\BackendUsersController@update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

{{--                        interests--}}
                        <div class="col-6 px-3">
                            <div class="panel panel-default panel-body row">
                                <div class="col-6 my-3">
                                    <b><span class="" title="">Interests</span></b>
                                    <p>3/3 complete</p>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center">
                                    <a class="text-uppercase" data-bs-toggle="modal" data-bs-target="#register1" href="#">edit</a>
                                </div>
                            </div>
                        </div>

                        {{--voorkeuren--}}
                        <p class="card-description"> preferences </p>
                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($preferences as $preference)
                                <div class="card col bg-none" >
                                    <input type="checkbox" class="btn-check" value="{{$preference->id}}" name="preferences[]" id="preference{{$preference->id}}" autocomplete="off" @checked($user->preferences->contains($preference->id))>
                                    <label class="btn btn-outline-primary" for="preference{{$preference->id}}">{{$preference->name}}</label><br>
                                </div>
                            @endforeach
                        </div>
                        <p class="card-description"> I am here to... </p>
                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($ReadOrShops as $ReadOrShop)
                                <div class="card col bg-none" >
                                    <input type="radio" class="btn-check" value="{{$ReadOrShop->id}}" name="ReadOrShop" id="ReadOrShop{{$ReadOrShop->id}}" autocomplete="off" @checked($user->ReadOrShop->contains($ReadOrShop->id))>
                                    <label class="btn btn-outline-primary" for="ReadOrShop{{$ReadOrShop->id}}">{{$ReadOrShop->name}}</label><br>
                                </div>
                            @endforeach
                        </div>
                        <p class="card-description"> keep me informed </p>
                        <div class="row row-cols-1 row-cols-lg-3">
                            @foreach($newsletterinfos as $info)
                                <div class="card col bg-none" >
                                    <input type="checkbox" class="btn-check" value="{{$info->id}}" name="newsletterinfos[]" id="info{{$info->id}}" autocomplete="off" @checked($user->newsletterinfos->contains($info->id))>
                                    <label class="btn btn-outline-primary" for="info{{$info->id}}">{{$info->name}}</label><br>
                                </div>
                            @endforeach
                        </div>

                        <p class="card-description"> Personal info </p>
                        {{--titel--}}

                        <div class="dropdown mb-4">
                            <select  name="title" id="title" class="form-select w-25" aria-label="title select" >
                                <option  value="" disabled selected hidden>Title</option>

                                @foreach($titles as $title)
                                    <option value="{{$title->id}}"  @selected($user->title_id == $title->id) class="hover-purple">{{$title->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{--email--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-group">
                                    <input id="email" name="email" type="email" placeholder="email"
                                           class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}">
                                    <label class="label-top" for="email">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{--passwoord--}}
                            <div class="col-md-6">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-group">
                                    <input id="first_name" name="first_name" type="text"
                                           class="form-control"
                                           placeholder="First name" value="{{$user->first_name}}">
                                    <label class="label-top" for="first_name">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-group">
                                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{$user->last_name}}">
                                    <label class="label-top" for="last_name">Last name</label>
                                </div>
                            </div>
                        </div>
                        {{--telfoonnummer--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-group">
                                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                                           class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}">
                                    <label class="label-top" for="phone">Phone</label>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-group">
                                    <input id="mobile_phone" name="mobile_phone" type="tel" placeholder="Mobile phone"
                                           class="form-control @error('mobile_phone') is-invalid @enderror" value="{{$user->mobile_phone}}">
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
                        <p class="card-description"> Birthday </p>
                        <div class="row">
                            <div class="dropdown mb-4 col-12 col-md-3">
                                <select  name="month" id="month" class="form-select" aria-label="Month">
                                    <option  value="" disabled selected hidden>Month</option>
                                    @foreach($months as $month)
                                        <option value="{{$month->id}}" @selected($user->month_id == $month->id)>{{$month->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="dropdown mb-4 col-12 col-md-3">
                                <select  name="day" id="day" class="form-select" aria-label="Day">
                                    <option  value="" disabled selected hidden>Day</option>
                                    @foreach($days as $day)
                                        <option value="{{$day->id}}"@selected($user->day_id == $day->id)>{{$day->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-gradient-success">SUBMIT</button>
                            <a type="button" href="{{route('users.index')}}" class="btn btn-outline-danger ">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
