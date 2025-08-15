<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff;
            --hover-color: #0056b3;
            --light-text-color: #f8f9fa;
            --dark-text-color: #333;
        }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Animated Gradient Background */
            background: linear-gradient(45deg, #4b6cb7, #182848, #243b55, #141e30);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 2.5rem;
            box-sizing: border-box;
            /* Glassmorphism Effect */
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            /* For Safari */
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .card-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .card-header .logo {
            font-size: 2.5rem;
            color: var(--light-text-color);
            margin-bottom: 0.5rem;
        }

        .card-header .form-title {
            margin: 0;
            font-size: 1.5rem;
            color: var(--light-text-color);
            font-weight: 600;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            width: 20px;
            height: 20px;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            /* Padding left for icon */
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.15);
            color: var(--light-text-color);
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.3);
        }

        .form-button {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 8px;
            background-color: var(--primary-color);
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.1s ease;
            margin-bottom: 10px;
        }

        .form-button:hover {
            background-color: var(--hover-color);
        }

        .form-button:active {
            transform: scale(0.98);
        }

        #notification {
            position: fixed;
            top: 30px;
            right: 30px;
            z-index: 9999;
            min-width: 250px;
            padding: 16px 24px;
            border-radius: 8px;
            color: #fff;
            background: #e74c3c;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            font-size: 1rem;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    {{-- Floating Notification --}}
    @if(session('error') || session('success') || $errors->any())
        <div id="notification" style="background: {{ session('error') || $errors->any() ? '#e74c3c' : '#27ae60' }};">
            @if(session('error'))
                {{ session('error') }}
            @elseif(session('success'))
                {{ session('success') }}
            @endif
            @if($errors->any())
                <ul style="margin:0; padding-left: 18px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <script>
            setTimeout(() => {
                let n = document.getElementById('notification');
                if (n) n.style.display = 'none';
            }, 4000);
        </script>
    @endif

    <div class="login-card">
        <form action="{{ route('regi') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="logo">🔐</div>
                <h2 class="form-title">Registration</h2>
            </div>
            <div class="form-group">
                <input type="text" name="user_name" class="form-input" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-input" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="form-button">Registration</button>
        </form> <button class="form-button" onclick="window.location.href='{{ url('/login') }}'">Log in</button>
    </div>

</body>

</html>