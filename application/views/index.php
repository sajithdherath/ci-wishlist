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
    <button id="btn-add">Add</button>
    <div class="pen-title">
        <h1><%=username%>'s List</h1><span><%=list_description%></span>
    </div>
    <div id="item">

    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form>
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input class="form-control" type="text" id="url">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category">
                        <option value="1">Birthday</option>
                        <option value="2">Anniversary</option>
                        <option value="3">Christmas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status">
                        <option value="1">Must Have</option>
                        <option value="1">Would be Nice to Have</option>
                        <option value="1">If You Can</option>
                    </select>
                </div>
                <button id="submit-add" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div id="editModal" class="modal">


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
            <button id="btn-edit" data-id="<%=id%>">Edit</button>
            <button id="btn-delete" data-id="<%=id%>">Delete</button>
        </div>
    </div>
</script>
<script type="text/template" id="edit-template">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form>
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" value="<%=title%>" id="edit-title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="edit-description" value="<%=description%>" class="form-control">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input class="form-control" type="text" value="<%=url%>" id="edit-url">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" value="<%=price%>" class="form-control" id="edit-price">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="edit-category">
                    <option value="1"
                    <%if(category==1){%>selected<%}%>>Birthday</option>
                    <option value="2"
                    <%if(category==2){%>selected<%}%>>Anniversary</option>
                    <option value="3"
                    <%if(category==3){%>selected<%}%>>Christmas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="edit-status">
                    <option value="1"
                    <%if(category==1){%>selected<%}%> >Must Have</option>
                    <option value="2"
                    <%if(category==1){%>selected<%}%> >Would be Nice to Have</option>
                    <option value="3"
                    <%if(category==1){%>selected<%}%> >If You Can</option>
                </select>
            </div>
            <input type="hidden" value="<%=id%>" id="id">
            <button id="submit-edit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</script>
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