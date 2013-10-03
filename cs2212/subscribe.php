<?php>
  
  include 'header.php.inc';

  $database = "addresses.txt"; 
  $email = $_POST['email'];

  if ($email) {
    # Open a file handle
    $fh = fopen($database, 'a') or die("<h1>Can't open file</h1>");

    # Write the email address to the file
    fwrite($fh, $email);

    # Write a new line to the file
    fwrite($fh, "\n");

    # Close the file
    fclose($fh);
    echo "Thank you. $email has been added to my mailing list.";
  }
  else {
    echo "Please enter your email address.";
  }

  include 'footer.php.inc';

?>

