<?php
if($_POST){

  // print_r($_POST);
  $register = new Register;
  $register->__constructor(trim($_POST["userName"]),trim($_POST["email"]),trim($_POST["password"]));
  
  $data=$register->insertIntoDataBase();
  
  $email= $data["email"];
  $password= $data["password"];
  echo $data["email"];
  echo $data["password"];
  
  $connToDataBase = new SqlHandler;

  $connToDataBase->insertNewUser($email,$password);


}








?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/logIn.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
<?php echo isset($_GET['error'])?$_GET['error']:""?>
        <section class="vh-1000" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                          <form action="./index.php?view=payment" method="post">
          
                            <div class="d-flex align-items-center mb-3 pb-1">
                              <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                              <span class="h1 fw-bold mb-0">Logo</span>
                            </div>
          
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
          
                            <p style="color: #ff6219;"><?php echo isset($_GET['error'])?$_GET['error']:"";       ?></p>
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" placeholder="Email address"/>
                              <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                            </div>
                            <div class="form-outline mb-4">
                              <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password"/>
                              <!-- <label class="form-label" for="form2Example27">Password</label> -->
                            </div>
          
                            <div class="pt-1 mb-4">
                              </div>
                              
                              <input type="checkbox"   name="Remember" value="Remember Me" >
                              
                              
                              <button type="submit" class="btn btn-dark btn-lg btn-block" >Login</button>
                          </form>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>    
</body>
</html>