<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">My Blog</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                        
                        <form action="{{ route('posts.update', $post->id) }}" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Image URL</label>
                                <input type="text" name="img" class="form-control" value="{{ $post->img }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <select name="tags[]" class="form-control" multiple>
                                    <option value="{{ $tag->id }}" 
                                        {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
                                        {{ $tag->name }}
                                    </option>
                                    </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>