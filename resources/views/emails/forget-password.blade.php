<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <p>Klik link di bawah ini untuk mereset password Anda:</p>
    <a href="{{ route('reset.password', $token) }}">Reset Password</a>
    <p>Jika Anda tidak meminta reset password, abaikan email ini.</p>
</body>
</html>