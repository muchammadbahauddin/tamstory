<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LOGIN ADMIN</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .input-box {
            width: 100%;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 10px;
            padding-left: 15px;
            font-size: 1.25rem;
            color: #fff;
            margin-bottom: 20px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .input-box::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-box:focus {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.02);
        }

        .button-login {
            width: 100%;
            height: 60px;
            background: linear-gradient(to right, #fbbd61, #ec9f05);
            border: none;
            border-radius: 50px;
            color: #000;
            font-size: 1.5rem;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-login:hover {
            background: linear-gradient(to right, #ec9f05, #fbbd61);
            transform: scale(1.05);
        }

        .forgot-password {
            text-align: right;
            color: #fbbd61;
            font-size: 1rem;
            margin-bottom: 20px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #ec9f05;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>

<body class="bg-black flex justify-center items-center h-screen">
    <div class="flex bg-black rounded-[10px] shadow-lg overflow-hidden w-[90%] max-w-[1440px] h-[90%] max-h-[988px]">
        <!-- Left Image Section -->
        <div class="w-1/2 relative">
            <img class="w-full h-full object-cover" src="{{ asset('images/loginadmin.png') }}" alt="Login Image" />
        </div>

        <!-- Right Login Section -->
        <div class="w-1/2 flex items-center justify-center p-10">
            <div class="w-full max-w-[500px] bg-white bg-opacity-10 backdrop-blur-lg p-10 rounded-[20px] shadow-2xl">
                <div class="text-center mb-8">
                    <h1 class="text-white text-[37px] font-bold mb-4">Login Admin</h1>
                    <div class="w-[80px] h-[4px] bg-yellow-400 mx-auto"></div>
                </div>
                <input type="text" placeholder="Username" class="input-box" />
                <input type="email" placeholder="Email Address" class="input-box" />
                <input type="password" placeholder="Password" class="input-box" />
                <div class="forgot-password">Forgot Password?</div>
                <button class="button-login">LOGIN</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.button-login').addEventListener('click', function() {
            window.location.href = 'datacustomer.html';
        });
    </script>
</body>

</html>
