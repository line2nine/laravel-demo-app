<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Từ điển</h1>
<form action="/translate" method="get">
    @csrf
    <p>
        <input type="text" name="eng">
    </p>
    <p>
        <button type="submit">Translate</button>
    </p>
</form>
</body>
</html>
