<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>






 <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <strong class="">Registration</strong>

                            </div>
                            <div class="panel-body">

                                <div class="form-group">
                                    <form class="myform" action="admin/register" method="post">
    {{csrf_field()}}
<label>First Name:</label><br />
<input name="firstname" type="text" class="inputvales" placeholder="Type Your Firstname" required /><br />
<label>Last Name:</label><br />
<input name="lastname" type="text" class="inputvales" placeholder="Type Your Lastname" required /><br />

<label>Contact Number:</label><br />
<input name="phonenum" type="text" class="inputvales" placeholder="Type Your phone number" required /><br />

 <label>Email:</label><br />
 <input name="email" type="text" class="inputvales" placeholder="Type Your Email" required /><br />

 <label>Password:</label><br />
<input name="password" type="password" class="inputvales" placeholder="Type Your Password" required /><br/>

<label>Confirm Password:</label><br />
<input  name="password_confirmation " type="password" class="inputvales" placeholder="Type Your Confirm Password" required /><br/>

<label>Image:</label><br />
<input name="imag" type="file" class="inputvales" required /><br /><br />
<input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="Sign Up" /><br /> 

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>










    

<script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
           

        </script>
</body>
</html>