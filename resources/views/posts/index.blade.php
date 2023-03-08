<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>task</title>
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{url('/')}}">task</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('all_posts')}}">All Posts</a>
                  </li>

                </ul>
              </div>
            </div>
        </nav>
          <div class="container mt-4">
            <h2>All Posts</h2>
            <div>
                <a href="{{url('/post/add')}}" class="btn btn-success">Add post</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>category</th>
                        <th>title</th>
                        <th>content</th>
                        <th>media</th>
                        <th>Edit</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $po)
                    <tr class="{{$po->id}}">
                        <td>{{$po->id}}</td>
                        <td>{{$po->category}}</td>
                        <td>{{$po->title}}</td>
                        <td>{{$po->content}}</td>
                        <td>
                            <img class="mb-2" width="76px" height="41px" src="{{ asset('/media/'.$po->media) }}" alt="img">
                        </td>
                        <td>
                            <a href="{{ url('post/edit/'.$po->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{route('posts.show',$po->id)}}">Show</a>
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy', $po->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
          </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
