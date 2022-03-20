
@extends('layouts.app')

@section('content')


<html>
    <div class="card" style="width: 18rem; margin:auto; margin-top:1rem; padding:1rem; background-color:#333; color:#fff" >
        <h4 class="" style="color:#fff)">Article Details</h4>
        <hr>
        <br>
        <div class="card-body">
          <h5 class="card-title">Title: {{$data['title']}}</h5>
          <h5 class="card-text">Body: {{$data['body']}}</h5>
          <h5 class="card-text">Rate: {{$data['rate']}}</h5>
          <br>
          <a class="btn text-light" style="background-color:rgb(136 49 124 / 76%)" href="/articles">Back</a>
        </div>
      </div>
</html>
@endsection