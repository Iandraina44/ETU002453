<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../src/assets3/css/bootstrap.min.css" rel="stylesheet">
    <script src="../src/assets3/js/jquery.min.js"></script>
    <script src="../src/assets3/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background-image: url('../src/img/bg1.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container {
            display:  flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set height to full viewport height */
        }
        .form {
            width: 50%;
            padding: 3%;
            border-radius: 5%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }
        .form button{
            margin-top: 2%;
            background-image: linear-gradient(to right,#2193b0,#6dd5ed);
            border-style: none;
            transition: transform 0.4s ease;
            width: 100%;
            font-size: 150%;
        }

        .form button:hover {
            transform: scale(1.03); /* Grow by 1.1 times on hover */
        }

        
    </style>
</head>
<body>
<div class="container">
    <div class="form" method="post"  action="traitlogin.php" >
        <center><h2 class><span class="glyphicon glyphicon-leaf"></span> LOGIN</h2></center>
        <form role="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="admin">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="admin">
            </div>
           <center><button type="submit" class="btn btn-primary">Submit</button></center> 
        </form>
    </div>
</div>
</body>
</html>
