@extends('layout.app')

@section('body')
<br>
<head>
	<style>
		
            .imgback{
                position: fixed;
                left: 0;
                right: 0;
                z-index: 1;

                display: block;
               
                width: 1200px;
                height: 800px;

              /*-webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -o-filter: blur(5px);
                -ms-filter: blur(5px);*/


            }

            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 200px; /* Location of the box */
                left: 90px;
                right: 90px;
                top: 20px;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */

                
            }
          /*  .modal:before{
                
                 content: "";
                position: fixed;
                left: 80px;
                right: 80px;
                z-index: -1;

                display: block;
               
                background-size:cover;
                width: 100%;
                height: 100%;
               

                -webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -o-filter: blur(5px);
                -ms-filter: blur(5px);
                filter: blur(5px);
            }*/

            /* Modal Content */
           .modal-content {
                background-color: #566573;
                margin: auto;
                padding: 10px;
                border: 20px solid  #F0F3F4;
                width: 80%;

            }

            /* The Close Button */
            .close {
                color:#F80606;
                float: center;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
               /* color: #EC0B0B ;
                text-decoration: none;*/
                cursor: pointer;
            }
	</style>
</head>



<table id="myTable"" style="text-align:center;" >
	<tr>
		<th>Version</th>
		<th>Divice Type</th>
		<th>Ram</th>
		<th>Os</th>
		<th>Memory</th>
		<th>Created at</th>
		<th>Delete</th>
	</tr>
    
@foreach($allItems as $divs)



	<tr>
		<td>{{$divs->version}}</td>
		<td>{{$divs->name}}</td>
		<td>{{$divs->ram}}</td>
		<td>{{$divs->os}}</td>
		<td>{{$divs->memory}}</td>
		<td>{{$divs->created_at }}</td>
   <!--  <td>{{$divs->created_at->diffForHumans()}}</td> -->
		<td><form action="{{'/admin/'.$divs->id}}" method="post">
			{{csrf_field()}}
			{{ method_field('DELETE')}}
			<center><button type="submit" style="color: red;" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></center></form></td>
			
	</tr>

@endforeach

</table>

@include('Admin.partials.success')  <!--Delete massge-->




       
 

  <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <center><div class="panel-heading"> 

                            </div>
                            <div class="panel-body">

                              
                                 
    {{csrf_field()}}

<div class="container">
  <h2>Registration</h2>

  <form class="form-horizontal">

  <div class="form-group">
    <label  class="col-sm-6 control-label">First Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="firstname" placeholder="Type Your Firstname" required />
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lastname" placeholder="Type Your Lastname" required />
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-6 control-label">Contact Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phonenum" placeholder="Type Your phone number" required />
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label">User Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="username" placeholder="Type Your Username" required  />
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password"  placeholder="Type Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
    </div>


   <div class="form-group">
    <label  class="col-sm-6 control-label">Confirm Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="cpassword"  placeholder="Type Your Confirm Password" required />
    </div>


    <div class="form-group">
    <label  class="col-sm-6 control-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" placeholder="Type Your Email" required />
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label">Image</label>
    <div class="col-sm-8">
      <input type="file"  name="imag" required  />
    </div>
  </div>

  

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="Sign Up" />
    </div>
  </div>

</form>
</div>


</div>
</center>
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

        <script type="text/javascript">
            
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

        </script>

<script type="text/javascript">
    var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<!-- <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script> -->





@endsection




