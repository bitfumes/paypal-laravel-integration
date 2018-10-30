<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="{{ route('create-payment') }}" method="post">
      @csrf
      <input type="submit" value="Pay Now">
    </form>
  </div>
</body>
</html>