<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Application Details</h2>

    <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Course:</strong> <?php echo $_POST['course']; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>

    <br>
    <a href="index.html" style="text-decoration:none;">
      <button>Submit Another Application</button>
    </a>

</div>

</body>
</html>
