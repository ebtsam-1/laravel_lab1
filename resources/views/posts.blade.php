@extends('layout.navbar')

@section("global")



{{-- <P><?php print_r($data)?></P> --}}

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        {{-- <table class="table">
            @if (!empty($data))
            <thead>
                <tr>
                  <th scope="col">#Num</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Show</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
            @endif
            <tbody>
                    @forelse ($data as $item)
                        @dd($item["title"])
                         <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                {{$item["title"]}}
                            </td>
                            <td>
                                {{$item["description"]}}
                            </td>
                            <td>
                                <a type="button" class="btn btn-info"  href = "/posts/{{$loop->index}}" > Show </a>
                            </td>
                            <td>
                                <input type="button" class="btn btn-warning" value="Edit" />
                            </td>
                            <td>
                                <input type="button" class="btn btn-danger" value="Delete" />
                            </td>
                           

                        </tr>
                    @empty 
                        <h2 class="text-danger"> No Posts </h2>
                    @endforelse
            </tbody>
          </table>  --}}



          {{-- @dump($data)

          @foreach ($data as $item)
              <p>{{$item["title"]}}</p>
              <p>{{$item["description"]}}</p>
          @endforeach --}}

          <div class="container">
              <hr>
            <h2 class="text-success">Posts</h2>
            <br>
            <a href="/posts/create" class="btn btn-warning">New Post</a>
            <hr>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Slug</th>
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
                    <td>{{$item["slug"]}}</td>
                    <td><a class="btn btn-warning" href="/posts/{{$item['id']}}">show</a></td> 
                    <td>
                        <a class="btn btn-success" href="/posts/edit/{{$item['id']}}">Edit</a>
                    </td>
                    <td>
                       
                       <form action="/delete/{{$item['id']}}" method="POST">
                           @method("delete")
                           @csrf
                           <input type="submit" name="delete" id="" value="Delete"  class="btn btn-danger" >
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