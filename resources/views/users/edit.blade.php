@extends('layouts.app')

@section('content')
    @foreach($errors->all() as $message)
        <div>{{ $message }}</div>
    @endforeach

    @if(Session::has('message'))
        <div>{{ Session::get('message') }}</div>
    @endif

    <form method="POST" action="{{ route('users.update') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">名前:</label>

            <div class="col-md-6">                  
                <input name="name" type="text" value="{{ $user->name }}" />
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">  
             <input name="email" type="email" value="{{ $user->email }}" />
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">変更</button>
            </div>
        </div>
    </form>
@endsection