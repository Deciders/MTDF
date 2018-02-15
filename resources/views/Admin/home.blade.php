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


    
<table id="myTable" style="text-align:center;" >
	<tr>
		<th>Version</th>
		<th>Divice Type</th>
		<th>Ram</th>
		<th>Os</th>
		<th>Memory</th>
		<th>Created at</th>
    <th>View Device</th>
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
    

     
     
     
     
      <td>

      <center><button id="{{$divs->id}}" type="submit" class="btn btn-info"  onclick="openSearch(this.id)">View Device</button>
      </td>

      
   <!--  <td>{{$divs->created_at->diffForHumans()}}</td> -->
		  
      <td><form action="{{'/admin/'.$divs->id}}" method="post">
			{{csrf_field()}}
			{{ method_field('DELETE')}}
			<center><button  type="submit" style="color: red;" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></center></form></td>

			
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
  <h2 style="color: #D7DBDD;">Registration</h2>

  <form class="form-horizontal"  action="admin/register" method="post" onsubmit="return make_json(this);">

  <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">First Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="firstname" placeholder="Type Your Firstname" required />
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lastname" placeholder="Type Your Lastname" required />
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-6 control-label" style="color:#D7DBDD;">Contact Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phonenum" placeholder="Type Your phone number" required />
    </div>
  </div>

      <div class="form-group">
          <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Email</label>
          <div class="col-sm-8">
              <input type="email" class="form-control" name="email" placeholder="Type Your Email" required />
          </div>
      </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password"  placeholder="Type Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
    </div>
  </div>


   <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Confirm Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password_confirmation"  placeholder="Type Your Confirm Password" required />
    </div>
  </div>



    <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Image </label>
    <div class="col-sm-8">
      <input type="file"  name="imag" required  />
    </div>
  </div>

  

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="Sign Up" />
    </div>
  </div>

   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  <input type="reset" value="Clear" class="btn btn-success" />
  </div>
  </div>

 </form>

</div>
</center>
</div>
</div>
</div>
</div>
</div>

<div id="myOverlay" class="overlay" style="background: #AAB7B8;">
  <span class="close" onclick="closeSearch()" title="Close Overlay">×</span>
 <div class="form-group">
   <center><h1 style="color: #2C3E50;">DEVICE DETAILS</h1></center>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <input type="text" id="myInput" onkeyup="myFunction2()" placeholder="Search for version.." title="Type in a name">
   </nav>

 <div class="center" style="border: none;">
<table id="myTable" style="text-align:center;" >
  <tr>
    <th>Mac Addres</th>
    <th>Delete</th>
  </tr>


@foreach ($classname2_array as $data)

 @if($data->device_type_id==1)

 {
  <tr>
  <td>{{ $data->macAddres }}</td>
      <td><form action="{{'/admin/'.$divs->id}}" method="post">
      {{csrf_field()}}
      {{ method_field('DELETE')}}
      <center><button  type="submit" style="color: red;" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></center></form></td></tr>


   }



@else{


}
@endif

@endforeach

  </table>
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

<script>
  function make_json(from){
    var json=(
      "firstname":from.firstname.value,
      "lastname":from.lastname.value,
      "phonenum":from.phonenum.value,
      "email":from.email.value,
      "password":from.password.value,
      "password_confirmation":from.password_confirmation.value,
      "imag":from.imag.value,
    );
    var html=JSON.stringify(json,0.4);
    document.getElementById("output").innerHTML=html;
    return true;
  }
</script>



<script>
function openSearch(clicked_id) {
alert(clicked_id);
document.getElementById("myOverlay").style.display = "block";
       function getMessage(){
             $.ajax({
                type:'POST',
                url:'/getmsg?id=clicked_id',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                   $("#myOverlay").html(data.msg);
                }
             });
          }
 }

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>



 <script type="text/javascript">
            
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
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




@endsection





