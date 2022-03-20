@extends('layouts.app')

@section("content")



@dump($data)

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

          <div class="container">
              <hr>
            <h2 class="" style="color:rgb(136 49 124 / 76%)">Articles</h2>
            <br>
            <a href="/articles/create" class="btn text-light" style="background-color:rgb(136 49 124 / 76%);">New Article</a>
            <hr>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Author</th>
                    <th scope="col">show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                  <tr class="">
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item["title"]}}</td>
                    <td>{{$item["body"]}}</td>
                    <td>{{$item["rate"]}}</td>
                    <td><a href="users/{{$item->user->id}}" style="color:rgb(136 49 124 / 76%); font-weight:bold; text-decoration:none">
                      {{$item->user->name}}  
                       
                    </a></td>
                    <td><a class="btn text-light" style="background-color:rgb(136 49 124 / 76%)" href="/articles/{{$item['id']}}">show</a></td> 
                    <td>
                        <a class="btn text-light" style="background-color:rgb(136 49 124 / 76%)" href="/articles/{{$item['id']}}/edit">Edit</a>
                    </td>
                    <td>
                       
                       <form action="/articles/{{$item['id']}}" method="POST">
                           @method("delete")
                           @csrf
                           <input type="submit" name="delete" id="" value="Delete"  class="btn btn-dark" >
                       </form>
                        
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

@endsection