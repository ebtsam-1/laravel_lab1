@extends('layout.navbar')

@section('global')

         <div class="container">
             <h3 class="text-success">Create post</h3>
             <hr>
             <br>
            <form method="POST" action="/store">
              @csrf  
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">Body</label>
                    <input type="text" name="body" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="title">slug</label>
                    <input type="text" name="slug" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <br>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
         </div>

@endsection