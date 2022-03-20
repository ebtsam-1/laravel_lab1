@extends('layouts.app')

@section('content')
@dump($data)
<div style="background-image:linear-gradient(rgba(0,0,0,0.6),#0b0e0d), url('/images/pexels-ksenia-chernaya-4740484.jpg'); background-size:cover;background-position:center; width:100%; height:60vh; margin:0">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 style="color: #fff; text-align:center; margin-top:3rem">Welcome Home!</h1>
                <h2 style="color: #fff; text-align:center;">{{$data->name}}</h2>
                {{-- <div class="card" style="background-color:rgba(136, 49, 124, 0.575)">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection