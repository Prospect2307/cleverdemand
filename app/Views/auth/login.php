<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - CleverDemand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: rgba(37, 77, 112, 0.22);
            height: 100vh;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            position: relative;
        }

        .avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            position: absolute;
            top: -45px;
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            border: 2px solid #ddd;
            padding: 5px;
        }

        .login-header {
            margin-top: 60px;
        }

        .login-btn {
            background: #007bff;
            color: #fff;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .text-small {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="col-md-4">
            <div class="login-card text-center">
                <img src="https://icons.veryicon.com/png/o/internet--web/web-interface-flat/6606-male-user.png"
                    alt="user" class="avatar">

                <div class="login-header mb-3">
                    <h4 class="fw-bold">Sign In</h4>
                    <p class="text-muted">Sign in to manage all your devices</p>
                </div>

                <form action="#" method="post">
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required
                            placeholder="Enter your password">
                    </div>
                    <div class="mb-3 text-end">
                        <a href="#" class="text-decoration-none text-small">Forget password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn login-btn fw-semibold">SIGN IN</button>
                    </div>
                </form>

                <div class="mt-3 text-muted text-small">
                    Do not have an account? <a href="#" class="text-decoration-none">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>