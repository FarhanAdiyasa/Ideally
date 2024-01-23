<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>
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