<!DOCTYPE html>

<html>
<head>

    <title>Login</title>
    
    <link rel="stylesheet" href='style.css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/11bfc88179.js" crossorigin="anonymous"></script>
    
</head>
<body>

 <!-- Navbar -->
 <!-- <div id='nav'></div> -->
<div class='cover'>
     <div class="container-fluid">

         <div class='row'>

             <!-- Main center column -->
             <div class='col-sm-4 offset-sm-4 text-center bg-light d-flex justify-content-center'>

                <form action="login.php" method="post" class='form-group'>

                    <h1>Health<span>Care<i class="fas fa-file-medical-alt"></i></span></h1>

                    <h3>Login</h3>
                    <hr>

                    <div class='form-group'>
                        <label class="sr-only">Username</label>
                        <input type="text" name="uname" class='form-control' placeholder="User Name" required>
                    </div>

                    <div class='form-group'>
                        <label class="sr-only">Password</label>
                        <input type="password" name="password" class='form-control' placeholder="Password" required>
                    </div>

                    <hr>
                    <button type="submit" class='btn btn-success w-50'>Login</button>
                
                </form>

             </div>

           </div>

     </div>
</div>
</body>
</html>