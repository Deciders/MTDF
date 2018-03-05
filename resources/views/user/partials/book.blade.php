

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>

{{--<div id="myOverlay" class="overlay">--}}
    {{--<span class="close" title="Close Overlay">×</span>--}}
    {{--<!-- <div class="overlay-content"> -->--}}




    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well-block">
                    <div class="well-title">

                        @foreach($devices  as $device )



                            <h2 class="text-danger" >Book an Start Your Testing With {{$device->name}} </h2>
                            <img class="group list-group-image" src="{{$device->deviceType->imgurl}}" alt="*" />
                            @break


                        @endforeach
                    </div>

                    <form class ="" action="/reservation"  method="post" >
                    {{csrf_field()}}
                    <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="date">Start Date</label>
                                <input  name="start_date" type="date" placeholder="Start Date" class="form-control input-md">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="date">End Date</label>
                                <input name="end_date" type="date" placeholder="End Date" class="form-control input-md">
                            </div>
                        </div>
                            <br>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select name="device_id" >

                                    @foreach ($devices as $data)
                                        @if(($data->availability)==1){
                                        <option value="{{ $data->id }}" >{{ $data->name }} </option>
                                            }
                                         @endif
                                    @endforeach

                                </select>
                                 </div>
                            </div>
                        <!-- Select Basic -->

                        <!-- Button -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" name="singlebutton" class="btn btn-default">Book</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        </div>
 </div>

