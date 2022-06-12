<?php $title = "User-Authentication" ?>
<?php include 'header.php' ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-7 pb-4 pt-md-4">
                <div class="login-header">
                    <h1 class="text-uppercase text-indigo"> Student Leave </h1>
                    <small class="mt-3">Login with your credintial</small>
                </div>
                <!-- login form  -->
                <form action="login.php" method="post">
                    <?php if(isset($_GET['login_error'])){ ?>
                        <p class="text-danger"><strong> <?php echo $_GET['login_error'] ?></strong></p>
                    <?php } ?>
                    <div class="form-group">
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                            </div>
                            <input type="text" name="username" id="username" 
                                placeholder="Username" class="form-control">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bx bx-lock-open-alt"></i></span>
                            </div>
                            <input type="password" name="password" id="password" 
                                placeholder="Password" class="form-control">
                        </div>
                        <div class="mt-4">
                            <button type="submit" name="login" class="btn btn-indigo btn-block">sing-in <i class="bx bx-log-in"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>