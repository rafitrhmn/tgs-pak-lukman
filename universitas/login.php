<style>
body{
 background-color: powderblue !important;
}
    /* Style the form */
form {
  max-width: 300px;
  margin: auto;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
}

/* Style the form fields */
.form-group {
  margin-bottom: 15px;
}

label,
input {
  display: block;
  width: 100%;
}

input {
  height: 40px;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 0 10px;
  font-size: 14px;
}

/* Style the submit button */
button[type="submit"] {
  height: 40px;
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  border-radius: 5px;
  font-size: 14px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}
</style>


<form action="cek_login.php" method="post">
  <div class="form-group">
    <label for="username">Nama</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Kata sandi</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>
</form>
