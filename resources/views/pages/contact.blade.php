@extends('layouts/master')

@section('content')
    <div class="ps-contact ps-contact--2 ps-section pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="ps-section__header pt-50">
                        <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                        <form class="ps-contact__form" action="{{url('add/feedback')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name <sub>*</sub></label>
                                <input class="form-control" type="text" placeholder="Enter your full name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email <sub>*</sub></label>
                                <input class="form-control" type="email" placeholder="Enter your email" name="email">
                            </div>
                            <div class="form-group mb-25">
                                <label>Your Message <sub>*</sub></label>
                                <textarea class="form-control" rows="6" name="message" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div id="map" style="width: 100%;height: 400px" class="mt-50"></div>
                </div>
            </div>
        </div>
    </div>
   @endsection
<script>
    function initMap() {
        let options={
            zoom:17,
            center:{lat: 23.6850,lng:90.3563}
        }
        let Map = new google.maps.Map(document.getElementById('map'),options);
        let marker =new google.maps.Marker({
            position:{lat: 23.6850,lng:90.3563},
            map: Map,
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
        });
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-9BEkToLm5WgSHp20vRFusyqSvJzbQc&callback=initMap&region=bd" ></script


