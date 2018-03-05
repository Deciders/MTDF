
<div class="item  col-xs-3 col-lg-3" style="background-image:url('https://www.tekreliance.com/wp-content/uploads/2016/07/tech-background-image-2.jpg')">
    <div class="thumbnail">
        <img class="group list-group-image" src="{{$devietype->imgurl}}" alt="*" />
            <div class="caption">
            <h4 class="group inner list-group-item-heading">
               {{$devietype->name}}</h4>


            <p class="group inner list-group-item-text">
                Processor - 1.4GHz quad-core<br>
                RAM-1.5GB<br>
                OS-Android 7.0<br>
                Storage-16GB <br>


            </p>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="lead">
                        $21.000</p>
                </div>
                <div class="col-xs-12 col-md-6">

                    <form action={{'/book/'.$devietype->id}} method="get">

                        <button class="btn btn-success" type="submit">Book Now </button>
                    </form>
                    {{--<button class="btn btn-success" onclick="openSearch()">Book Now </button>--}}

                </div>
            </div>
        </div>
    </div>
</div>


