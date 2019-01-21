<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/models/user.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/models/listItem.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/views/loginFormView.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/routers/approuter.js"></script>
</head>
<body>
<div class="container">
    <div id="auth">
        <div class="pen-title">
            <h1>CI Wish List Login Form</h1>
        </div>

        <div class="card"></div>
        <div class="card">
            <h1 class="title">Login</h1>
            <form>
                <div class="input-container">
                    <input type="text" id="login-username" name="username" required="required"/>
                    <label for="username">Username</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="login-password" name="password" required="required"/>
                    <label for="username">Password</label>
                    <div class="bar"></div>
                </div>
                <p id="msg"></p>
                <div class="button-container">
                    <button id="btn-login"><span>Login</span></button>
                </div>

            </form>
        </div>
        <div class="card alt">
            <div class="toggle"></div>
            <h1 class="title">Sign Up
                <div class="close"></div>
            </h1>
            <form>
                <div class="input-container">
                    <input type="text" id="username" required="required"/>
                    <label for="username">Username</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="password" required="required"/>
                    <label for="password">Password</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="rpt-password" required="required"/>
                    <label for="rpt-password">Repeat Password</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="text" id="list-name" required="required"/>
                    <label for="rpt-password">List Name</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <textarea name="message" rows="10" cols="30"></textarea>
                    <label for="">List Name</label>
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                    <button><span>Sign Up</span></button>
                </div>
            </form>
        </div>
    </div>
    <div id="items">fdhb</div>
</div>


</body>
</html>