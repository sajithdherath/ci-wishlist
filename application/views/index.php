<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://underscorejs.org/underscore.js"></script>
    <script src="http://backbonejs.org/backbone.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/models/user.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/models/listItem.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/views/loginFormView.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/views/listView.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/views/itemView.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/routers/approuter.js"></script>

</head>
<body>
<script type="text/template" id="login-template">

    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login</h1>
        <form>

            <div class="input-container">
                <input type="text" id="login-username" value="<%= username%>" name="username" required="required"/>
                <label for="username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="login-password" value="<%= password%>" name="password" required="required"/>
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
                <input type="text" id="reg-username" value="<%= username%>" required="required"/>
                <label for="username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="reg-password" value="<%= password%>" required="required"/>
                <label for="password">Password</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="rpt-password" required="required"/>
                <label for="rpt-password">Repeat Password</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="text" id="list-name" required="required" value="<%= list_name%>"/>
                <label for="rpt-password">List Name</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <textarea name="description" id="description" rows="10" cols="30"></textarea>
                <label for="">List Name</label>
                <div class="bar"></div>
            </div>
            <div class="button-container">
                <button id="btn-register"><span>Sign Up</span></button>
            </div>
        </form>
</script>
<script type="text/template" id="list-template">
    <ul id="item">

    </ul>

</script>
<div class="container">

</div>
</div>


</body>
</html>