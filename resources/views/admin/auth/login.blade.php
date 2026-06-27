<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        min-height: 100dvh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        padding: 1rem;
    }
    .login-card {
        width: 100%;
        max-width: 400px;
    }
</style>
</head>
<body>

<div class="login-card">
    <div class="card p-4 p-sm-5 shadow-sm">
        <h4 class="mb-4 text-center">Admin Login</h4>

        <form method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
            </div>
            <button class="btn btn-dark btn-lg w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>
