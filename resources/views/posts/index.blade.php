<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .post-img { height: 400px; object-fit: cover; width: 100%; }
        .user-icon { width: 30px; height: 30px; border-radius: 50%; object-fit: cover; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{route('index.')}}">My Blog</a>
            
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="#">Feed</a>
                
                <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                
                <a class="nav-link" href="{{route('tags.index')}}">Tags</a>

                <a class="btn btn-primary ms-2" href="{{route('posts.create')}}">New Post</a>
                    
                <a class="nav-link" href="{{route('auth.login')}}">Login</a>
                </div>
        </div>
    </nav>

    <div class="container">
        <div class="alert alert-success">
            </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card mb-4 shadow-sm">
                    
                    <img src="" class="card-img-top post-img">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted d-flex align-items-center">
                                <img src="" class="user-icon me-1">
                                
                                <span class="fw-bold text-dark">User Name Placeholder</span> 
                                
                                <span class="mx-2">&bull;</span> 
                                
                                <span>Date Placeholder</span>
                            </small>
                            
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">•••</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('posts.edit')}}">Edit</a></li>
                                    
                                    <li>
                                        <form action="{{route('posts.destroy',$post)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item text-danger" type="submit">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            </div>

                        <p class="card-text">{{$post->content}}</p>
                        @foreach
                        <div class="mb-2">
                            <span class="badge bg-secondary">#{{}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>