{{-- resources/views/vendor/notifications/custom_verify_email.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email Address</title>
    <style>
        /* Gaya untuk button hijau tosca */
        .verify-button {
            background-color: #008080; /* Tosca */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        /* Gaya untuk logo Ideally */
        .logo {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Verify Your Email Address</h2>

    <img src="https://drive.google.com/uc?id=10r4YikjKypqy81Pjx7bjnanzpc6ODTbu" alt="Ideally Logo" class="logo" width="100">

    <p>Hello!</p>
    <p>Please click the button below to verify your email address.</p>

    <a href="{{ $verificationUrl }}" class="verify-button">Verify Email Address</a>

    <p>If you did not create an account, no further action is required.</p>

    <p>Regards, Ideally</p>
</body>
</html>
