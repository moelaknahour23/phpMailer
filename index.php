<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHPMailer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

  </head>
  <body>
<div class="container">
  <h2>Stacked form</h2>
  <form method="POST" action="http://192.168.64.2/test/contact.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject">
    </div>
        <div class="form-group">
      <label for="message">Message:</label>
      <input type="text" class="form-control" id="message" placeholder="Enter message" name="message">
    </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

  </body>
</html>
