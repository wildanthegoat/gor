<style>

.container{
    width: 100%;
    height: 100%;
    background-image: url("{{ asset('img/image.jpg') }}");
    background-size: cover;
}

.center h1 {
  text-align: center;
  padding: 20px 0;
  color: var(--primary);
}
.center form {
  padding: 0 40px;
  box-sizing: border-box;
}
    .center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: var(--bg);
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
  background-color: whitesmoke;
  
}

.center h1 {
  text-align: center;
  padding: 20px 0;
  color: yellowgreen;
}
.center form {
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field {
  position: relative;
  border-bottom: 2px solid black;
  margin: 30px 0;
}
.txt_field input {
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label {
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: 0.5s;
}
.txt_field span::before {
  content: "";
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: var(--primary);
  transition: 0.5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
  top: -5px;
  color: var(--primary);
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before {
  width: 100%;
}
.pass {
  margin: -5px 0 20px 5px;
  color: black;
  cursor: pointer;
}
.pass:hover {
  text-decoration: underline;
}
.button {
  width: 100%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;
  color: yellowgreen;
}

.signup_link {
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a {
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover {
  text-decoration: underline;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <section class="container">
        <div class="center">
          <div class="card">


            <h1>Login</h1>
            <form method="POST">
              <div class="txt_field">
                <input type="email" name="username" required>
                <span></span>
                <label>Email</label>
              </div>
              <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
              </div>
              <div class="pass">Lupa Sandi?</div>
              <button class="button btn-inti" name="login" id="login">Login</button>
              <div class="signup_link">
                Belum punya akun? <a href="register">Daftar</a>
              </div>
            </form>
          </div>
        
          </div>
        </section>
</body>
</html>