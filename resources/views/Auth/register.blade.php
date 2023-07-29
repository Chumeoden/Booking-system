<style>
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

/* Start form attributes */
.register-form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
}

.register-form h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
    text-align: center; /* Để căn giữa tiêu đề "Register" */
}

.register-form .form-group {
    margin-bottom: 20px;
}

.register-form label {
    display: block;
    font-size: 18px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
}

.register-form input[type="text"],
.register-form input[type="email"],
.register-form input[type="password"] {
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

.register-form input[type="text"]:focus,
.register-form input[type="email"]:focus,
.register-form input[type="password"]:focus {
    border-color: #aaa;
}

.register-form button[type="submit"] {
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

.register-form button[type="submit"]:hover {
    background-color: #78DEC7;
}

</style>
<div class="register-form">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
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
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>