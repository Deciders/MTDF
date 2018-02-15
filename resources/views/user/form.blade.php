<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div id="myOverlay" class="overlay">
  <span class="close" onclick="closeSearch()" title="Close Overlay">×</span>
  <!-- <div class="overlay-content"> -->

<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2 style="color:white;">Book an Start Your Testing</h2>
                        </div>
                        <form method="post">
                           
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" style="color:white;" for="date">Start Date</label>
                                        <input id="date" name="date" type="text" placeholder="Start Date" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" style="color:white;" for="date">End Date</label>
                                        <input id="date" name="date" type="text" placeholder="End Date" class="form-control input-md">
                                    </div>
                                </div>
                               
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Book</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
               
            </div>
        </div>
</body>
</html>