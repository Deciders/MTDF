
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<style>
    .overlay {
    height: 50%;
    width: 50%;
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow: auto;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}


/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #F7F9F9;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
</style>



</head>
<body style="background-image:url('https://www.tekreliance.com/wp-content/uploads/2016/07/tech-background-image-2.jpg')">
<h1 style="color:white;">Mobile Test Device Farm</h1>
    <div class="well well-sm">
        <strong>Device
        list</strong>
        
    </div>

    <div id="products" class="row list-group">
          @foreach($devietypes  as $devietype )
            @include('user.partials.deviceType',['devietype'=> $devietype])

          @endforeach

              {{--@include('user.partials.book')--}}
    </div>



                        <!-- form end -->
                    </div>
                </div>
               
            </div>
        </div>
        







   <script>
function openSearch($id) {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
  function make_json(from){
    var json=(
      "start_date":from.start_date.value,
      "end_date":from.end_date.value,
      
    );
    var html=JSON.stringify(json,0.4);
    document.getElementById("output").innerHTML=html;
    return true;
  }
</script>


</body>
</html>