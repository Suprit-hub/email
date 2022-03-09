<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anon Mail spoofing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="mail.css">


</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="enter keypad.jpg" alt="pre-1"><strong>Anon Mail spoofer</strong></a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contributor</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <!--Mailer-->
  <div class="mailer">
    <h3><strong>iZUuKz11's</strong> Mail spoofer</h3>
    <br>
    <div class="mail-cont">
      <table>
        <form action="" method="post">
          <tr>
            <td>Recipent: </td>
            <td><input type="text" name="email" size="50"></td>
          </tr>

          <tr>
            <td>Sender name: </td>
            <td><input type="text" name="name" size="50"></td>

          </tr>

          <tr>
            <td>Sender email address: </td>
            <td><input type="text" name="email" size="50"></td>
          </tr>

          <tr>
            <td>Subject: </td>
            <td><input type="text" name="subject" size="50"></td>
          </tr>

          <tr>
            <td>Content: </td>
            <td><textarea name="content" id="bodyofmail" cols="50" rows="5"></textarea></td>
          </tr>

          <tr>
            <td> <input type="submit" name="Send mail" size="200"></td>
          </tr>



        </form>
      </table>
    </div>
  </div>

  <!--PHP Script-->
  <?php
$email = $_POST['email'];
$content = n12br ($_POST ['content']);
$name = $_POST ['name'];
$sender = $_POST ['sender'];
$subject = $_POST ['subject'];
$headers = "From: $name "."<".$sender. ">"\r\n";
mail($email, $subject, $content, $header);
?>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>