@extends('layouts.app')

@section('content')

         <div class="container">
             <h3 class=""style="color:rgb(136 49 124 / 76%); margin-top:2rem">Create Article</h3>
             <hr>
             <br>
            <form method="POST" action="/articles">
              @csrf  
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="{{old('title')}}">
                  <label for="" class="text-danger">
                    {{$errors->first('title')}}
                  </label>
                </div>
                
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" name="body" class="form-control" aria-describedby="emailHelp" value="{{old('title')}}">
                    <label for="" class="text-danger">
                      {{$errors->first('body')}}
                    </label>
                  </div>
                  
                  <div class="form-group">
                    <label for="title">Rate</label>
                    <input type="number" name="rate" class="form-control" aria-describedby="emailHelp" value="{{old('title')}}">
                    <label for="" class="text-danger">
                      {{$errors->first('rate')}}
                    </label>
                  </div>
                  <br>
                <button type="submit" class="btn text-light" style="background-color:rgb(136 49 124 / 76%)">Submit</button>
              </form>
         </div>

@endsection