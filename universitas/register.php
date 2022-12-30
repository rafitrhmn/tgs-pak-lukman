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
<form action="/register" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
  </div>
  <div class="form-group">
    <label for="password2">Confirm Password</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm your password">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
