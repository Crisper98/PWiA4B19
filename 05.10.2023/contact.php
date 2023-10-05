<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <link href="style-con.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">HomePage</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <header>
        <h1>Contact</h1>
    </header>
    <div class="form-container">
      <form class="form">
        <div class="form-group">
          <label for="email">Company Email</label>
          <input type="text" id="email" name="email" required="">
        </div>
        <div class="form-group">
          <label for="textarea">How Can We Help You?</label>
          <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
        </div>
        <button class="form-submit-btn" type="submit">Submit</button>
      </form>
    </div>
    <footer>
        Copyright &copy; <?php echo date("Y"); ?>
    </footer>
</body>
</html>