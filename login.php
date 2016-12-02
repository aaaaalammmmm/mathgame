<?php session_start(); include("header.php"); ?>

        <form action="auth.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="email" class="col-sm-3">Email address:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email">
                </div>                
            </div>
            
            <div class="form-group">
                <label for="pwd" class="col-sm-3">Password:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
            </div>
            <button type="submit" class="btn btn-danger col-sm-offset-6" name="login">Submit</button>
        </form>

<?php include("footer.php"); ?>