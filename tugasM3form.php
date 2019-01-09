<!DOCTYPE html>
<html>
  <head>
    <meta>
    <title>Form Login</title>
    <style>
    body {
      margin: 0,0,0,0;
      padding: 0,0,0,0;
      background-color: Black;
    }
    #form-login {
        margin-left: 38%;
        margin-right: 38%;
        margin-top:  18%;
        min-height: 100px;
        background-color: Black;
        padding-left: 2%;
        color: white;
    }
    #header {
      font-style: sans-serif;
      padding-top: 10%;
    }
    h2 {
      margin-left: 27%;
    }
    #button {
      margin-left: 41%;
      padding-bottom: 20%;
    }
    </style>
  </head>
  <body>
    <div id="form-login">
        <form action="tugasM3.php" method="POST" onSubmit="validasi()">
          <table>
            <tr>
              <td colspan="3">
                <div id="header">
                    <h2>Login Form</h2>
                </div>
              </td>
            </tr>
            <tr>
              <div id="username">
                <td><label for="nama" class="nama">Username :</label></td>
                <td colspan="2"><input type="text" name="username" id="nama" class="nama"></td>
              </div>
            </tr>
            <tr>
              <div id="pass">
              <td><label for="pass" class="pass">Password :</label></td>
              <td colspan="2">  <input type="password" name="password" id="pass" class="pass">
              </td>
              </div>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><div id="button"><input type="submit"></div></td>
            </tr>
          </table>
        </form>
    </div>
  </body>
  <script>
  var name = document.getElementById("nama");
  var pass = document.getElementById("pass");

  if(fname.value ==  "")
  {
    alert("Please Enter Insert Your Username");
    fname.focus();
    return false;
  }
  else if(classof.value == "")
  {
    alert("Please Enter Insert Your Password");
    return false;
  }
  </script>
</html>
