<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Html Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>HTML FORM</h1>

  <div class="container">
    <form action="connect.php" method="post">
      <div>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email">
      </div>
      <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" placeholder="Enter your phone number">
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password">
      </div>
      <div class="genderContainer">
        <label for="gender">Gender</label>
        <input class='gender1' type="radio" name="gender" value="male">Male
        <input class='gender1' type="radio" name="gender" value="female">Female
        <input class='gender1' type="radio" name="gender" value="others">Others
      </div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>