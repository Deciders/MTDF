
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
        <div class="item  col-xs-3 col-lg-3" style="background-image:url('https://www.tekreliance.com/wp-content/uploads/2016/07/tech-background-image-2.jpg')">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://i.gadgets360cdn.com/products/large/1515508820_635_samsung_galaxy_j2_pro_2018.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Samsung galaxy j2 pro</h4>
                    <p class="group inner list-group-item-text">
                        Processor - 1.4GHz quad-core<br>
                        RAM-1.5GB<br>
                        OS-Android 7.0<br>
                        Storage-16GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpLZcgrEMTgzwXcSuT8upyxa2jF9RQVXy4JXWVnzFqk2BIOkeMNw" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                       Samsung Galaxy On7 Prime</h4>
                    <p class="group inner list-group-item-text">
                        Processor - 1.6GHz octa-core<br>
                        RAM-4GB<br>
                        OS-Android 7.1.1<br>
                        Storage-64GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="item  col-xs-4 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Samsung Galaxy C8</h4>
                    <p class="group inner list-group-item-text">
                        Processor - 1.69GHz octa-core<br>
                        RAM-3GB<br>
                        OS-Android<br>
                        Storage-32GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Samsung Galaxy J7 Nxt</h4>
                    <p class="group inner list-group-item-text">
                        Processor - 1.6GHz octa-core<br>
                        RAM-2GB<br>
                        OS-Android 7.0<br>
                        Storage-16GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Huawei Mate 10 Pro</h4>
                    <p class="group inner list-group-item-text">
                        Processor-Octa-core<br> (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex-A53)<br>
                        RAM-4GB<br>
                        OS-Android 8.0 (Oreo)<br>
                        Storage-128GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        HUAWEI Y6 2017</h4>
                    <p class="group inner list-group-item-text">
                       Processor - Quad-core 1.4 GHz Cortex-A53<br>
                        RAM-2GB<br>
                        OS-Android 6.0<br>
                        Storage-16GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Huawei Mate 10 Pro</h4>
                    <p class="group inner list-group-item-text">
                        Processor-Octa-core<br> (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex-A53)<br>
                        RAM-4GB<br>
                        OS-Android 8.0 (Oreo)<br>
                        Storage-128GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="data:image/jpeg;base64,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" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Huawei Mate 10 Pro</h4>
                    <p class="group inner list-group-item-text">
                        Processor-Octa-core<br> (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex-A53)<br>
                        RAM-4GB<br>
                        OS-Android 8.0 (Oreo)<br>
                        Storage-128GB</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <button class="btn btn-success" onclick="openSearch()">Book Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div> 


        <div id="myOverlay" class="overlay">
           <span class="close" onclick="closeSearch()" title="Close Overlay">×</span>
                        <!-- <div class="overlay-content"> -->

<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Book an Start Your Testing</h2>
                        </div>
                        <form class ="" action="/register"  method="post" onsubmit="return make_json(this);"au>
                           
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Start Date</label>
                                        <input id="date" name="start_date" type="text" placeholder="Start Date" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">End Date</label>
                                        <input id="date" name="end_date" type="text" placeholder="End Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Book</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </form>
                        </div>
                        </div>
                        <!-- form end -->
                    </div>
                </div>
               
            </div>
        </div>
        







        <script>
function openSearch() {
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