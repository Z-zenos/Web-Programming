<?php
$errors = [];

if ($_POST['name'] === '') {
  $errors[] = 'Invalid name';
}

if ($_POST['email'] === '') {
  $errors[] = 'Invalid email';
}

if (count($errors) > 0) {
  echo '<ul>';
  foreach ($errors as $e) {
    echo "<li>$e</li>";
  }
  echo '</ul>';

} else {
  if (isset($_FILES['avatar'])) {
    echo '<p>Avatar</p>';
    copy($_FILES['avatar']['tmp_name'], $_FILES['avatar']['name']);
    $src = $_FILES['avatar']['name'];
//    print_r($_FILES['avatar']);
    echo "<img src='$src' alt='avatar image'>";
  }

  echo "<p>Thử không nhập gì vào name rồi nhấn vào nút submit xem :3</p>";
  echo '<p>Name: ' . $_POST['name'] . '</p>';
  echo '<p>Birthday: ' . $_POST['birthday'] . '</p>';
  echo '<p>You are studying at ' . $_POST['class'] . ', ' . $_POST['uni'] . '</p>';
  echo "Your hobbies: <br>";

  $hobbies = $_POST['hobbies'];
  $leng = count($hobbies);
  for ($i = 0; $i < $leng; $i++) {
    echo ($i + 1) . '. ' . $hobbies[$i] . "<br>";
  }
  echo "<p>Bio: " . $_POST['message'] . "</p>";
}
