<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And registration</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
           <div class="col-md-6 login-left">
            <h2> Login Here </h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="user" required>
                </div>
            
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary"> Login </button>
            </form>
           </div> 

           <div class="col-md-6 login-right">
            <h2> Register Here </h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="user" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary"> Register </button>
            </form>
           </div> 

        </div>
        </div>
    </div>
</body>
</html>