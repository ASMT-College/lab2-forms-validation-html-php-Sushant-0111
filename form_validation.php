<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <form action="" method = "get" onsubmit="return validateform()" >
            <div>signup</div>
            <div>
                  Username: <input type="text" name="un" id="un" required minilength="6" />
            </div> 
            <div>
                  password: <input type="password" name="pw" id="pw" required />
            </div>
            <div>
                  Email1: <input type="email" name="email" id="" required />
            </div>
            <div>
                  Email2: <input type="text" name="email" id="" />
            </div>
            <div id="emailError"></div>
            <div><input type="submit" value="signup" name="submit" /></div>
      </form>
      <script>
            function Validatefor() {
                  var emailRegex = new RegExp('[]')
                  var email2 = document.getElementById('email2').value
                  if(emailRegex.test(email2)){
                        return true;
                  }
                  else{
                        return false;
                  }
            }
      </script>
</body>
</html>