@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif    
                
                
                <div class="col-12">
                    <div class="col-6">
                    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}:</label>
                    {{ auth()->user()->name }}
                    </div>
                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}:</label>
                    {{ auth()->user()->email }}
                </div>
                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}:</label>
                    {{ strtoupper(auth()->user()->gender) }}
                </div>

                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}:</label>
                    {{ date('d-m-Y',strtotime(auth()->user()->dob)) }}
                </div>
                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}:</label>
                    {{ isset(auth()->user()->country->name)? auth()->user()->country->name : ''}}
                </div>

                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('State') }}:</label>
                  {{ isset(auth()->user()->state->name)? auth()->user()->state->name : ''}}
                </div>

                <div class="col-6">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('City') }}:</label>
                    {{ isset(auth()->user()->city->name)? auth()->user()->city->name : '' }}
                </div>
                </div>
            </div>
        </div>
    </div>    
</div>
    
@endsection