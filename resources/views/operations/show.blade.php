

@extends('layout.navbar');

@section('global')


<html>
    <div class="card" style="width: 18rem; margin:auto; margin-top:1rem" >
        <h3>Post Details</h3>
        <div class="card-body">
          <h5 class="card-title">{{$postId}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</html>
@endsection