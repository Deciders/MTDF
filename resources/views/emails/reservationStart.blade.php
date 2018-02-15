<html>
<head>

</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<strong> Your reservation due to tomorrow  </strong>
<div class="alert alert-dismissible alert-info">
    <P> your reservation  <br> <strong> id </strong> is  {{ $Reservation->id}} </P>
    <br> <P> <strong> start_date </strong>{{ $Reservation->start_date}} </P>
    <br> <P> <strong> End _date </strong>{{ $Reservation->end_date}} </P>
</div>
</body>



</html>