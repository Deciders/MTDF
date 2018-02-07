
<html>
<head>

</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <body>
 <div class="alert alert-dismissible alert-info">
     <strong>Welcome to MTDF by Deciders</strong>


 <br> <br>

 click here to change your password
 <a href="{{route('changepass',["email"=>$user->email,
"remember_token"=>$user->remember_token])}}">click here</a>
 </div>
 </body>



</html>