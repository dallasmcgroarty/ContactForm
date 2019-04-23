<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dallas McGroarty</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body class="container">
  <header>    
    <h1>Contact Us</h1>
  </header>
  <div class="form-body">
    <form action="processfeedback.php" method="post">
        <div class="form-group">
            <label for="nameInput">Name</label>
            <input class="form-control" name="name" id="nameInput" placeholder="John Smith" autofocus>
        </div>
        <div class="form-group">
            <label for="emailInput">Email Address</label>
            <input class="form-control" name="email" id="emailInput" placeholder="me@gmail.com" autofocus >
        </div>
        <div class="form-group">
            <label for="commentField">Comments</label>
            <textarea class="form-control" name="comments" id="commentField" rows="3" placeholder="Enter any comments here"></textarea> 
        </div>
        <fieldset class="form-group">
            <label for="faveColors">Choose Your Favorite Color</label>
            <div class="btn-group btn-group-toggle" role="group" aria-label="buttonGroup">
                <button type="input" class="btn btn-danger" name="fColor" value="red">Red</button>
                <button type="input" class="btn btn-success" name= "fColor" value="green">Green</button>
                <button type="input" class="btn btn-primary" name="fColor" value="blue">Blue</button>
                <button type="input" class="btn btn-warning" name="fColor" value="yellow">Yellow</button>
                <button type="input" class="btn btn-secondary" name="fColor" value="grey">Grey</button>
                <button type="input" class="btn btn-light" name="fColor" value="white">White</button>
                <button type="input" class="btn btn-dark" name="fColor" value="black">Black</button>
            </div>
        </fieldset>
        <div class="note">
            <p class="text-danger">NOTE: Clicking a color will submit the form!</p>
        </div>
    </form>
  </div>