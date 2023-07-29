<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Paste CSS styles here */
        /* Fonts Form Google Font ::- https://fonts.google.com/ -:: */
        @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
        /* End Fonts */

        /* Start Global rules */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        /* End Global rules */

        /* Start body rules */
        body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;
            font-family: 'Vibur', cursive;
            /* the main font */
            font-family: 'Abel', sans-serif;
            opacity: .95;
        }
        /* End body rules */

        /* Start form attributes */
        .login-form {
            width: 450px;
            min-height: 500px;
            height: auto;
            border-radius: 5px;
            margin: 2% auto;
            box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
            padding: 2%;
            background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
        }

        .login-form h2 {
            font-size: 28px;
            font-family: 'Playfair Display', serif;
            color: #3e403f;
            text-align: center; /* Để căn giữa tiêu đề "Login" */
            margin-bottom: 20px;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form label {
            display: block;
            font-size: 18px;
            font-family: 'Abel', sans-serif;
            color: #5E6472;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            height: 50px;
            padding: 15px;
            font-size: 16px;
            font-family: 'Abel', sans-serif;
            color: #5E6472;
            outline: none;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: 0.2s linear;
        }

        .login-form input[type="email"]:focus,
        .login-form input[type="password"]:focus {
            border-color: #aaa;
        }

        .login-form button[type="submit"] {
            display: block;
            width: 100%;
            height: 50px;
            font-size: 18px;
            font-family: 'Abel', sans-serif;
            color: #fff;
            background-color: #B8F2E6;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.2s linear;
        }

        .login-form button[type="submit"]:hover {
            background-color: #78DEC7;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
=======
<!-- resources/views/auth/login.blade.php -->

>>>>>>> Stashed changes

<style>
    /* Paste CSS styles here */
    /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
    @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
    /* End Fonts */

    /* Start Global rules */
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    /* End Global rules */

    /* Start body rules */
    body {
        background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;

<<<<<<< Updated upstream
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
=======
        font-family: 'Vibur', cursive;
        /*   the main font */
        font-family: 'Abel', sans-serif;
        opacity: .95;
    }
    /* End body rules */

    /* Start form  attributes */
    .login-form {
        width: 450px;
        min-height: 500px;
        height: auto;
        border-radius: 5px;
        margin: 2% auto;
        box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
        padding: 2%;
        background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
    }

    /* form Container */
    .login-form .form-group {
        margin-bottom: 15px;
    }

    /* the header form form */
    .login-form h2 {
        font-size: 250%;
        font-family: 'Playfair Display', serif;
        color: #3e403f;
        text-align: center;
        margin-bottom: 20px;
    }
    /*  A welcome message or an explanation of the login form */
    .login-form p {
        letter-spacing: 0.05em;
        text-align: center;
    }

    /* inputs form  */
    .login-form input {
        width: 100%;
        height: 50px;
        margin-top: 2%;
        padding: 15px;
        font-size: 16px;
        font-family: 'Abel', sans-serif;
        color: #5E6472;
        outline: none;
        border: none;
        background-color: #fff;
        border-radius: 5px;
        transition: 0.2s linear;
    }

    /* focus  */
    .login-form input:focus {
        border: 1px solid #B8F2E6;
        border-radius: 5px;
    }

    /* buttons  */
    .login-form button {
        display: inline-block;
        color: #252537;
        width: 100%;
        height: 50px;
        padding: 0 20px;
        background: #B8F2E6;
        border-radius: 5px;
        outline: none;
        border: none;
        cursor: pointer;
        text-align: center;
        transition: all 0.2s linear;
        margin-top: 15px;
        letter-spacing: 0.05em;
    }

    /* buttons hover */
    .login-form button:hover {
        transform: translateY(3px);
        box-shadow: none;
    }

    /* buttons hover Animation */
    .login-form button:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
    }

    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }
        100% {
            transform: translateY(5px);
        }
    }

    /* cảnh i */
    .login-form .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }

    ul {
        list-style: none;
    }
</style>

<div class="login-form">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="role">Select Role:</label>
            <select name="role" id="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>
>>>>>>> Stashed changes
