<!DOCTYPE html>
<html>
<head>
    <title>Chopardparfumtraining</title>
</head>

<body>
<h2>How are you? {{ $user['name'] }}.</h2>
<br/>
    Your email address is changed to {{ $user['email'] }}.<br><br>
    Please click on the below link to verify your email account.<br><br>
<br/>
<a href="/account/verifyEmail/{{ $user->verifyUser->token }}">Verify Email</a>
</body>

</html>