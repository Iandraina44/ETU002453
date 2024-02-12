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
            background-image: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('../src/img/bg1.jpg');
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
            color: black;
            background-image: linear-gradient(to right,moccasin,beige);
            border-style: none;
            transition: transform 0.4s ease;
            width: 100%;
            font-size: 150%;
        }

        .form button:hover {
            transform: scale(1.03); /* Grow by 1.1 times on hover */
            color: black;
        }
        label {
            color: moccasin;
        }
        
        h2 {
            color: moccasin;
        }
        input {
            color: moccasin;
        }
        
    </style>
</head>
<body>
<div class="container">
    <div class="form">
        <center><h2 class><span class="glyphicon glyphicon-leaf"></span> LEAF YOUR LIFE</h2></center>
        <form  method="post"  action="traitlogin.php" >
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="admin@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="admin">
            </div>
           <center><button type="submit" class="btn btn-primary">Log on</button></center> 
        </form>
    </div>
</div>
</body>
</html>
