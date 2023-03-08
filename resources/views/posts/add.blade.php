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
        <div class="container  mt-4">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Edit & Update post
                                <a href="{{url('all_posts')}}" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">category Name</label>
                                    <input type="text" name="category_id" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Post title</label>
                                    <input type="text" name="title"  class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Post content</label>
                                    <input type="text" name="content" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Post media</label>
                                    <input type="file" name="media" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Add Post</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

