<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .auth-card { width: 100%; max-width: 500px; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <div class="auth-card">
        <h3 class="text-center mb-4">Register</h3>

        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Select Role</label>
                <select name="" class="form-select" required>
                    <option value="" selected disabled>Choose role...</option>
                    <option value="client">Client</option>
                    <option value="manager">Manager</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

            <div class="text-center mt-3">
                <a href="login.html">Already have an account? Login</a>
            </div>
        </form>
    </div>

</body>
</html>