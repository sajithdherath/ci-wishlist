<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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

    <div class="card-cust"></div>
    <div class="card-cust">
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
    <div class="card-cust alt" style="background-color: #f6002c">
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
            <div class="input-container ">
                <input type="text" id="description" name="description" required="required" value="<%= list_name%>"/>
                <label for="">Description</label>
                <div class="bar"></div>

            </div>
            <div class="button-container">
                <button id="btn-register"><span>Sign Up</span></button>
            </div>
        </form>
</script>
<script type="text/template" id="list-template">
    <div class="pen-title">
        <h1><%=username%>'s List</h1><span><%=list_description%></span>
    </div>
    <div id="item">

    </div>

</script>
<script type="text/template" id="item-template">
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title"><%=title%></h5>
            <h6 class="card-subtitle mb-2 text-muted">Rs.<%=price%></h6>
            <p class="card-text"><%if(status_id=='1'){%>
                Must Have
                <%}else if(status_id=='2'){%>
                Would be Nice to Have
                <%}else{%>
                If you can<%}%></p>
            <a href="<%=url%>" class="card-link">View</a>
            <button><a href='#edit/<%= id %>'>Edit</button>
        </div>
    </div>
</script>
<script type="text/template" id="item-add-template">
<form>
    <label>Name</label>
    <input type="text"id="title">
    <label>URL</label>
    <input type="text"id="url">
    <label>Price</label>
    <input type="text"id="price">
    <select id="category"></select>
    <select id="status"></select>
</form>
</script>
<script type="text/template" id="cat-template"></script>
<script type="text/template" id="status-template"></script>
<div class="container container-cust">
</div>
</div>
</body>
</html>

<style>
    .container {
        position: relative !important;
        max-width: 460px !important;
        width: 100% !important;
        margin: 0 auto 100px !important;
    }

    .input-container textarea {
        width: 100%;
        background-color: white;
        color: black;
    }
</style>