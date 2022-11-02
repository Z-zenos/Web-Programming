<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fun Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="st-box">
    <header>Registration Form</header>
    <form action="process.php" method="post" enctype="multipart/form-data">
      <div class="st-group">
        <div class="field">
          <input type="text" name="name" id="name" class="name" autocomplete="off" value="<?= @$_POST['name'] ?? '' ?>">
          <span class="label">Name</span>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="email" name="email" id="email" class="email" autocomplete="off" value="<?= @$_POST['email'] ?? '' ?>">
          <span class="label">Email</span>
          <i class='fas fa-envelope'></i>
        </div>
      </div>


      <div class="st-group">
        <div class="field">
          <input type="text" name="uni" autocomplete="off" value="<?= @$_POST['uni'] ?? '' ?>">
          <span class="label">University</span>
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="field">
          <input type="text" name="class" autocomplete="off" value="<?= @$_POST['class'] ?? '' ?>">
          <span class="label">Class</span>
          <i class='fas fa-bolt'></i>
        </div>
      </div>

      <div class="st-flex">
        <div class="multiselect">
          <label>Hobbies</label>
          <div class="selectBox">
            <select>
              <option>Select hobbies</option>
            </select>
            <div class="overSelect"></div>
          </div>
          <div id="checkboxes">
            <label for="hobby1">
              <input type="checkbox" id="hobby1" name="hobbies[]" value="study"
                <?= in_array(1, $_POST['hobbies'] ?? [], true) ? 'checked' : '' ?>
              />
              Study
            </label>
            <label for="hobby2">
              <input type="checkbox" id="hobby2" name="hobbies[]" value="football"
                <?= in_array(2, $_POST['hobbies'] ?? [], true) ? 'checked' : '' ?>
              />
              Football
            </label>
            <label for="hobby3">
              <input type="checkbox" id="hobby3" name="hobbies[]" value="travel"
                <?= in_array(3, $_POST['hobbies'] ?? [], true) ? 'checked' : '' ?>
              />
              Travel
            </label>
          </div>
        </div>
        <div class="st-date">
          <label>Birthday</label>
          <input type="date" name="birthday" placeholder="Birthday" <?= @$_POST['birthday'] ?? '' ?>>
        </div>
      </div>

      <div class="st-group">
        <div class="upload-box">
          <input type="file" class="fileAvatar" name="avatar" accept="image/*" style="display: none;"  value="<?= @$_POST['avatar']?>">
          <img src="upload.png" alt="upload image">
          <p>Avatar</p>
        </div>
        <div class="message">
          <textarea placeholder="Write introduce yourself" name="message">
            <?= htmlspecialchars(@$_POST['message']) ?? '' ?>
          </textarea>
          <i class="material-icons">message</i>
        </div>
      </div>
      <div class="st__button">
        <button type="submit" id="submit">Submit</button>
      </div>
    </form>
  </div>

  <!-- Script -->
  <script src="script.js"></script>
</body>
</html>