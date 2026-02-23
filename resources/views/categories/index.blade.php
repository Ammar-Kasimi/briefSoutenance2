<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">My Blog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('posts.index') }}">Feed</a>
                <a class="nav-link active" href="{{ route('categories.index') }}">Categories</a>
                <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">New Category</div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                        @csrf    
                        <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Add</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">All Categories</div>
                    <ul class="list-group list-group-flush">
                    @isset($categories)
                    
                    @foreach($categories as $cat)
                    
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $cat->name }}
                            
                            <form action="{{ route('categories.destroy',$cat) }}" method="POST">
                                @csrf
                                @method("delete")
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">X</button>
                            </form>
                        </li>
                        @endforeach
                        @else
                        
                        <li>empty list</li>
                        @endif
                        </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>