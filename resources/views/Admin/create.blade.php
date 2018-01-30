@extends('layout.app')


@section('body')

<br>
<!-- <span><a href="/admin" class="btn btn-info">Back</a></span>
<div class="col-lg-10 col-lg-offset-4" -->



<div id="myOverlay" class="overlay">
  <span class="close" onclick="closeSearch()" title="Close Overlay">×</span>
  <!-- <div class="overlay-content"> -->


<div class="center">
<h3 style="text-align: center; color: #D7DBDD;">Add Device Type</h3>

    <form class="form-horizontal" action="admin" method="post" onsubmit="return make_json(this);">
   {{csrf_field()}}
<!-- <form class="form-horizontal"> -->
  <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Mobile version</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="version" placeholder="Type Mobile version">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Device Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="Type Device Name">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Os Type</label>
    <div class="col-sm-8">
     <select name="os" >
<option value="selected">--Select Option--</option>
<option value="IOS">IOS</option>
<option value="Anroid">Anroid</option>
</select>
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">RAM Size</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="ram" placeholder="Type RAM Size">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Memory Size</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="memory" placeholder="Type Memory Size">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Screen Resalution</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="screen_resolution" placeholder="Type Mobile Screen Resalution">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-8 control-label" style="color:#D7DBDD;">Description About the Diviec</label>
    <div class="col-sm-10">
    	 <textarea rows="4" cols="10" name="description" class="form-control" placeholder="Write something.."></textarea>
    </div>
  </div>

   
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="ADD" />
    </div>
  </div>

</div>
</div>
</form>
</div>
</div>


<center><div style="width: 60%; height: 20%;"><button  class="btn btn-primary btn-lg btn-block" onclick="openSearch()">Add New Device Type</button> 


<!--Form 2-->

  <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger btn-lg btn-block">Add New Device</button>
</div></center>


<div id="id01" class="overlay">
  <div class="center">
<h3 style="text-align: center; color: #D7DBDD;">Add New Device</h3>
  
<<<<<<< HEAD
    <form class="form-horizontal" action="admin/device" method="post" onsubmit="return make_json(this);"> 
=======
    <form class="form-horizontal" action="/action_page.php" method="post" onsubmit="return make_jsonobj(this);"> 
>>>>>>> 11cd88e78e10b4fd52960d8282fc7c55ad79782c
  
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>




   {{csrf_field()}}
<!-- <form class="form-horizontal"> -->

  <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Device Name</label>
    <div class="col-sm-8">
     <select name="device_type_id" >

@foreach ($classname_array as $data)
<option value="{{ $data->id }}" >{{ $data->name }} </option>

@endforeach

</select>
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-8 control-label" style="color:#D7DBDD;">Mac Address</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="macAddres" placeholder="Type A Mac Address">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-8 control-label" style="color:#D7DBDD;">State</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="state" placeholder="Type Device State">
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-6 control-label" style="color:#D7DBDD;">Added Date</label>
    <div class="col-sm-8">
      <input type="date"  class="form-control" name="date">
    </div>
  </div>


  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="ADD" /><br /><br />
    </div>
  </div>


      <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></div> -->

</div>
</form>
</form>
</div>





<!-- <pre id="output">
	File the above from to make json....
	</pre> -->


@include('Admin.partials.errors')   <!--Error massage-->





<script>
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script>
	function make_json(from){
		var json=(
			"version":from.version.value,
			"name":from.name.value,
			"os":from.os.value,
			"ram":from.ram.value,
			"memory":from.memory.value,
			"screen_resolution":from.screen_resolution.value,
			"description":from.description.value,
		);
		var html=JSON.stringify(json,0.4);
		document.getElementById("output").innerHTML=html;
		return true;
	}
</script>

<!--form 2-->
<script>
  function make_jsonobj(from){
    var json=(
      "device_type_id":from.device_type_id.value,
      "macAddres":from.macAddres.value,
      "state":from.state.value,
      "date":from.ram.value,
    );
    var html=JSON.stringify(json,0.4);
    document.getElementById("output").innerHTML=html;
    return true;
  }
</script>


@endsection

