@extends('layout.app')

@section('body')

<br>
<span><a href="/admin" class="btn btn-info">Back</a></span>
<div class="col-lg-10 col-lg-offset-4">

	<div class="center">
<h2 style="text-align: center;">Add New Device</h2>

    <form class="form-horizontal" action="admin" method="post" onsubmit="return make_json(this);">
   {{csrf_field()}}
<!-- <form class="form-horizontal"> -->
  <div class="form-group">
    <label  class="col-sm-6 control-label">Mobile version</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="version" placeholder="Type Mobile version">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label">Device Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="Type Device Name">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label">Os Type</label>
    <div class="col-sm-8">
     <select name="os" >
<option value="selected">--Select Option--</option>
<option value="IOS">IOS</option>
<option value="Anroid">Anroid</option>
</select>
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label">RAM Size</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="ram" placeholder="Type RAM Size">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-6 control-label">Memory Size</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="memory" placeholder="Type Memory Size">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-6 control-label">Screen Resalution</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="screen_resolution" placeholder="Type Mobile Screen Resalution">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-8 control-label">Description About the Diviec</label>
    <div class="col-sm-10">
    	 <textarea rows="4" cols="50" name="description" class="form-control" placeholder="Write something.."></textarea>
    </div>
  </div>

   
  </div>


  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input name="submit_btn" type="submit" id="signup_btn" class="btn btn-danger" value="ADD" /><br /><br />
    </div>
  </div>
</form>

<pre id="output">
	File the above from to make json....
	</pre>

@include('Admin.partials.errors')   <!--Error massage-->

</div>
</div>

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


@endsection

