@extends('layout.navbar')

@section('global')

         <div class="container">
             <h3 class="text-success">Edit post</h3>
             <hr>
             <br>
            <form method="post" action="/update/{{$data['id']}}">
                @method("put")
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" value="{{$data["title"]}}" name="title" class="form-control" aria-describedby="emailHelp">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" value="{{$data["body"]}}" name="body" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="title">slug</label>
                    <input type="text" value="{{$data["slug"]}}" name="slug" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <br>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
         </div>

@endsection