<div class="container mx-auto">
    <div class="col-lg-12 bg-light mt-5 pt-3 pb-5 rounded trans">
        <div class="col-lg-5 col-md-12 mx-auto bg-light mt-5 pt-3 pb-3 border rounded min">
            <div class="container">
                <h1 class="text-center">Admin Login</h1>
                <form class="mt-3" action="" method="post">
                    <div class="input-group mb-4 mt-4">
                        <div class="input-group-prepend">
                            <label for="user" class="input-group-text"><i class="fas fa-fw fa-user"></i></label>
                        </div>
                        <input type="text" class="form-control" name="user" id="user" placeholder="Username">
                    </div>
                    <div class="input-group mb-4 mt-4">
                        <div class="input-group-prepend">
                            <label for="pass" class="input-group-text"><i class="fas fa-fw fa-lock"></i></label>
                        </div>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                        <div class="input-group-prepend">
                            <button type="button" class="input-group-text"><i id="see" class="fas fa-fw fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>