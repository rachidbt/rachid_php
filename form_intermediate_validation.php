<?php
echo "Funcio 1<br>";
function ValidationMail($email)
{
return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (ValidationMail("rachidbt8@gmail.com"))
{
  echo "VALID<br><br>";
}
else
{
  echo "ERROR<br><br>";
}

echo "Funcio 2<br>";
function ValidationPass($pass1,$pass2)
{
  if (strcmp($pass1,$pass2) !==0)
  return true;
  return false;
}

echo ValidationPass('1234', '1234');
?>
