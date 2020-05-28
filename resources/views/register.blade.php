<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    
    <form action="/register" method="post">
    {{csrf_field()}}
<input type="email" name="email" placeholder="email"/>
<input type="text" name="name" placeholder="name"/>
<input type="text" name="surname"placeholder="surname"/>
<input type="password" name="password" placeholder="password"/>
<button type="submit">submit</button>

    </form>


</body>
</html>