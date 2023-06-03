@include('partials.backend')
@section('breadcrumbs')

@endsection
@section('content')



    <div class="row mb-4">
        <div class="col-12 col-md-6">
            {{--                                street--}}
            <div class="form-floating form-group">
                <input id="street" name="street" type="text" placeholder="street"
                       class="form-control @error('street') is-invalid @enderror"
                       value="{{old('street')}}">
                <label class="label-top" for="email">Street</label>
                @error('street')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
        {{--number--}}
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="number" name="number" type="text" placeholder="number"
                       class="form-control @error('number') is-invalid @enderror">
                <label class="label-top" for="number">number</label>
                @error('number')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="bus" name="bus" type="text" placeholder="bus"
                       class="form-control">
                <label class="label-top" for="bus">bus</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        {{--                            city--}}
        <div class="col-12 col-md-6">
            <div class="form-floating form-group">
                <input id="city" name="city" type="text" placeholder="city"
                       class="form-control @error('city') is-invalid @enderror"
                       value="{{old('city')}}">
                <label class="label-top" for="city">city</label>
                @error('city')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
        {{--postcode--}}
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="zipcode" name="zipcode" type="number" placeholder="zipcode"
                       class="form-control @error('zipcode') is-invalid @enderror">
                <label class="label-top" for="zipcode">zipcode</label>
                @error('zipcode')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
        {{--                            provincie--}}
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="province" name="province" type="number" placeholder="province"
                       class="form-control @error('province') is-invalid @enderror">
                <label class="label-top" for="province">province</label>
                @error('province')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>

    </div>
    <div class="row mb-4">
        {{--                            land--}}
        <div class="col-12 col-md-6">
            <div class="form-floating form-group">
                <input id="country" name="country" type="text" placeholder="country"
                       class="form-control @error('country') is-invalid @enderror"
                       value="{{old('country')}}">
                <label class="label-top" for="country">country</label>
                @error('country')
                <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
    </div>
@endsection
