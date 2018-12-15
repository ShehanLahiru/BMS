@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Boarding Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address ') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark ') }}</label>

                            <div class="col-md-6">
                                <input id="landmark" type="text" class="form-control{{ $errors->has('landmark') ? ' is-invalid' : '' }}" name="landmark" value="{{ old('landmark') }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="acctype" class="col-md-4 col-form-label text-md-right">{{ __('Accomadation Type ') }}</label>

                            <div class="col-md-6" >
                                <input type="radio" name="acctype"  value="{{ old('acctype') }}" required autofocus>&nbsp;&nbsp;&nbsp;House
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                <input type="radio" name="acctype"  value="{{ old('acctype') }}" >     &nbsp;&nbsp;&nbsp; Room
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Available for') }}</label>

                            <div class="col-md-6" >
                                <input type="radio" name="gender"  value="{{ old('gender') }}" required autofocus>&nbsp;&nbsp;&nbsp;Female
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender"  value="{{ old('gender') }}" >    &nbsp;&nbsp;&nbsp;  Male
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="count" class="col-md-4 col-form-label text-md-right">{{ __('Number of boarders ') }}</label>

                            <div class="col-md-6">
                                <input id="count" type="text" class="form-control{{ $errors->has('count') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>

                            </div>
                        </div>
                        
                        <!--<div class="form-group row">-->
                            <label for="count" class="col-md-12 col-form-label text-md">{{ __('Number of rooms and boarding facilites ') }}</label>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Washrooms ') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Wcount" type="text" class="form-control{{ $errors->has('Wcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Bedrooms ') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Bcount" type="text" class="form-control{{ $errors->has('Bcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Kitchen ') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Wcount" type="text" class="form-control{{ $errors->has('Wcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Fans') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Bcount" type="text" class="form-control{{ $errors->has('Bcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Cupboard') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Wcount" type="text" class="form-control{{ $errors->has('Wcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Chairs') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Bcount" type="text" class="form-control{{ $errors->has('Bcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="count" class="col-md-6 col-form-label text-md-right">{{ __('Tables') }}</label>
    
                                <div class="col-md-2">
                                    <input id="Bcount" type="text" class="form-control{{ $errors->has('Bcount') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus>
    
                                </div>
                            </div>
                        

                    <div class="form-group row">
                        <label for="charge " class="col-md-4 col-form-label text-md-right">{{ __('Monthly Payment') }}</label>

                        <div class="col-md-6">
                            <input id="charge " type="text" class="form-control{{ $errors->has('charge ') ? ' is-invalid' : '' }}" name="charge " value="{{ old('charge ') }}" required autofocus>

                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="meals" class="col-md-4 col-form-label text-md-right">{{ __('Meals ') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="meal"  value="{{ old('meal') }}" required autofocus> &nbsp;&nbsp;&nbsp;Included
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="meal"  value="{{ old('meal') }}" >  &nbsp;&nbsp;&nbsp;   Not Included
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Current" class="col-md-4 col-form-label text-md-right">{{ __('Current ') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="current"  value="{{ old('current') }}" required autofocus>&nbsp;&nbsp;&nbsp; Included
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="current"  value="{{ old('current') }}" >  &nbsp;&nbsp;&nbsp;   Not Included
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row">
                            <label for="meals" class="col-md-4 col-form-label text-md-right">{{ __('Select image to upload ') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="fileToUpload" id="fileToUpload" multiple>
                            </div>
                        </div>
                        
                           
                        <div class="form-group row">
                            <label for="agree" ></label>

                            <div class="col-md-3">
                                <input id="agree" type="checkbox" class="form-control" name="agree" required>

                            </div>

                            <div class="col-md-9">
                            This informations which I have given are true and If we get complaints about your boarding 
                            we have full rights to remove your account.
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
