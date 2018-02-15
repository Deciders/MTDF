<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>comments</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    
<h1>My status</h1>

<h5>Comments</h5>
<hr>
<form action="{{url('/comment')}}" method="POST">
{{csrf_field()}}

<div action="form group">
<label for="comment">Write comment</label>
<input class="form control" name="comment" placeholder="Write comment" type="text">

</dv>
<input class="btn btn-primary" type="submit" value="Done">
</form>

<h5>List of comment</h5>


</body>
</html>