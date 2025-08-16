<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 3rem 2rem;
            text-align: center;
        }

        .google-btn {
            background: #fff;
            color: #444;
            border: 1px solid #ddd;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.2s;
        }

        .google-btn:hover {
            background: #222;
            color: white;
        }

        .google-icon {
            width: 24px;
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h2 class="mb-4">Admin Login</h2>
        <a href="{{ route('google.login') }}" class="google-btn" style="display: inline-flex; align-items: center; text-decoration: none; font-weight: bold;">
            <i class="fab fa-google google-icon"></i> Sign in with <span style="color: red; margin-left: 5px;">Google</span>
        </a>
    </div>
</body>

</html>