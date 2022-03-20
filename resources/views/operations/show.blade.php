

@extends('layout.navbar')

@section('global')


<html>
    <div class="card" style="width: 18rem; margin:auto; margin-top:1rem; padding:1rem; background-color:#333; color:#fff" >
        <h4 class="text-warning">Post Details</h4>
        <hr>
        <br>
        <div class="card-body">
          <h5 class="card-title">{{$data['title']}}</h5>
          <p class="card-text">{{$data['body']}}</p>
          <p class="card-text">{{$data['slug']}}</p>
          <br>
          <a class="btn btn-warning" href="/posts">Back</a>
        </div>
      </div>
</html>
@endsection