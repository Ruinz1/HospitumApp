<?php
include 'koneksi.php';
session_start();

 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass   = $_POST['password'];

    $query = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$pass' ");
    if($query->num_rows == 1 ){
        $row = $query->fetch_assoc();
        $user = $row['class'];
        

        if($user == 'Super Admin'){
            $_SESSION['id'] = $row['id'];
            $_SESSION['admin'] = $row['class'];
            $_SESSION['class'] = $row['class'];
            $_SESSION['nama_user'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Selamat Datang')</script>";
            header("Location: admin/index.php");
        }
        else if($user == 'admin'){
            $_SESSION['id'] = $row['id'];
            $_SESSION['class'] = $row['class'];
            $_SESSION['admin'] = $row['class'];
            $_SESSION['nama_user'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Selamat Datang')</script>";
            header("Location: admin/index.php");
        }
        else if($user == 'user'){
            $_SESSION['id'] = $row['id'];
            $_SESSION['class'] = $row['class'];
            $_SESSION['user'] = $row['class'];
            $_SESSION['nama_user'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Selamat Datang')</script>";
            header("Location: index.php");
        }
    }
    else{
        echo "<script>alert('Gagal')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="bs/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Username   " name="username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="index.php">Back to Index</a>
                                                <button value="submit" name="login" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Kelompok 9</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="bs/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
    </body>
</html>
