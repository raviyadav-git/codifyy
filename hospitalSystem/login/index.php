<!DOCTYPE html>

<html>
<head>

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="./logic.js"></script> -->


    <!-- <script>
            $(function () {
                $("#nav").load("../navbar.html");
            });
    </script> -->
</head>
<body>

 <!-- Navbar -->
 <!-- <div id='nav'></div> -->

     <div class="container-fluid">
         <div class='row'>
             <div class='col-sm-3'>
            
             </div>

             <div class='col-sm-6'>
                <form action="login.php" method="post" class='form-group'>

                    <table border='0' class="table">
                        <thead>
                            <tr>
                                <th colspan='2'><center><h1>Login</h1></center></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><label>User Name</label></td>
                                <td><input type="text" name="uname" class='form-control' placeholder="User Name" required></td>
                            </tr>

                            <tr>
                                <td><label>Password</label></td>
                                <td><input type="password" name="password" class='form-control' placeholder="Password" required></td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="2"><button type="submit" class='btn btn-success w-100'>Login</button></td>
                            </tr>

                        </tfoot>
                    </table>
                    
                    

                </form>
             </div>

             <div class='col-sm-3'>
                
             </div>
         </div>
     </div>
</body>
</html>