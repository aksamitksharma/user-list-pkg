<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
</head>
<body>
  <h2>
    This is a contact page
    <form action="{{route('save')}}" method="post">
      @csrf
      <input type="text" name="name">
      <input type="text" name="email">
      <input type="text" name="message">
      <input type="submit" value="save">
    </form>
  </h2>
</body>
</html>