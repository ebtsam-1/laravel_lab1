@extends('layouts.app')

@section('content')

@dump($data['articles']);


     <div class="container" style="margin-top: 2rem;">
      <div class="card">
        <div class="card-header">
           <h2 style="color:rgb(136 49 124 / 76%)">{{$data['name']}}'s Profile</h2>
        </div>
        <div class="card-body">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Post Body</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data['articles'] as $article)
              <tr>
                <th scope="row">{{$article['title']}}</th>
                <td>{{$article['body']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/articles" class="btn text-light" style="background-color:rgb(136 49 124 / 76%)" href="/articles">Back</a>
        </div>
      </div>
     </div>
     
    {{-- <div class="card" style="width: 18rem; margin:auto; margin-top:1rem; padding:1rem; background-color:#333; color:#fff" >
        <h4 class="text-light" >User Details</h4>
        <hr>
        <br>
        <div class="card-body">
          <h5 class="card-title">User ID: {{$data['id']}}</h5>
          <h5 class="card-text">Username: {{$data['name']}}</h5>
          <h5 class="card-text">User Email: {{$data['email']}}</h5>
          <br>
          <a class="btn text-light" style="background-color:rgb(136 49 124 / 76%)" href="/articles">Back</a>
        </div>
      </div> --}}

@endsection