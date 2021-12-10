<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="login-panel text-center text-muted">COMP 3015</h1>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form name="signup" role="form" action="redirect.php?type=sign-up" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="username" placeholder="Username" type="text" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" placeholder="Password" type="password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="verify_password" placeholder="Confirm Password" type="password" />
                                </div>
                                <input type="submit" class="btn btn-lg btn-info btn-block" value="Sign Up!"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
