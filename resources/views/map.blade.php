@extends('app')

@section('content')
  <!-- This page is responsible for the display of the markers for the location of the ticket vendors. It receives information from the database and transforms them into markers -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp0Qg1G9d_wrIKtW4bLsthYxXK9tIxTrI&libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <style type="text/css">
    /*This is to style and resize the screen to make the map interface responsive on the phone*/
    #mymap {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  
  <div id="mymap"></div>

  <script type="text/javascript">
    // The information from the database is transformed into JSON format to enable the system work with the data
    var locations = <?php print_r(json_encode($locations)) ?>;
    
    // The starting coordinates bring the map of Ghana into view of the screen
    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:8
    });

    GMaps.geolocate({
      success: function(position) {
    mymap.setCenter(position.coords.latitude, position.coords.longitude);
  
    // This adds more information to each marker displayed. The name of the event, the number of tickets available, the address
    $.each( locations, function( index, value ){
      mymap.addMarker({
        lat: value.lat,
        lng: value.lng,
        title: value.name,
        click: function(e) {
          alert('This is '+value.name+', a vendor of event tickets\n'+'Address: '+value.address+'\n'+
            'The number of tickets left: '+ value.quantity);
        }
      });
   });
  }
  });

  </script>
@endsection
