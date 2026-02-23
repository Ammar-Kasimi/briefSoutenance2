<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">My Blog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('posts.index') }}">Feed</a>
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                <a class="nav-link active" href="{{ route('tags.index') }}">Tags</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">New Tag</div>
                    <div class="card-body">
                        <form action="{{ route('tags.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Tag Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Add</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">All Tags</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            #{{ $tag->name }}
                            
                           @csrf 
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">

                                <button class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">X</button>
                            </form>
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>