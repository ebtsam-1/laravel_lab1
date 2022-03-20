@extends('layouts.app')

@section('content')

         <div class="container">
             <h3 class="" style="color:rgb(136 49 124 / 76%)">Edit post</h3>
             <hr>
             <br>
            <form method="post" action="/articles/{{$data['id']}}">
                @method("put")
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" value="{{old('title',$data["body"])}}" name="title" class="form-control" aria-describedby="emailHelp">
                  <label for="" class="text-danger">
                    {{$errors->first('title')}}
                  </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" value="{{old('body',$data["body"])}}" name="body" class="form-control" aria-describedby="emailHelp">
                    <label for="" class="text-danger">
                      {{$errors->first('body')}}
                    </label>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="title">rate</label>
                    <input type="number" value="{{old('rate',$data["body"])}}" name="rate" class="form-control" aria-describedby="emailHelp">
                    <label for="" class="text-danger">
                      {{$errors->first('rate')}}
                    </label>
                  </div>
                  <br>
                <button type="submit" class="btn" style="background-color:rgb(136 49 124 / 76%)">Submit</button>
              </form>
         </div>

@endsection