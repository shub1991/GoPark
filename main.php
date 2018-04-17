<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
    <script>
      function initMap() {
        var loc1 = {lat: 39.163576, lng: -86.526276};
        var loc2 = {lat: 39.172861, lng: -86.521765};
        var loc3 = {lat: 39.167752, lng: -86.528784};
        var loc4 = {lat: 39.169311, lng: -86.522961};
        var loc5 = {lat: 39.167411, lng: -86.514959};
        var loc6 = {lat: 39.163388, lng: -86.521822};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: loc4
        });
        var marker = new google.maps.Marker({
          position: loc1,
          name:"Henderson Parking Garage",
          map: map
        });
        var marker = new google.maps.Marker({
          position: loc2,
          name:"11th and Fee Garage",
          map: map
        });
        var marker = new google.maps.Marker({
          position: loc3,
          name:"Poplars Parking Garage",
          map: map
        });
        var marker = new google.maps.Marker({
          position: loc4,
          name:"Indiana Memorial Union",
          map: map
        });
        var marker = new google.maps.Marker({
          position: loc5,
          name:"Jordan Avenur Garage",
          map: map
        });
        var marker = new google.maps.Marker({
          position: loc6,
          name:"Atwater Parking Garage",
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqX7Ks9krfl_wBURFZ9Hk9ynghJO2ckA&callback=initMap">
    </script>
  </head>
  <body>
  <div class="container">
    <?php
      echo '<h2> Welcome '.$_SESSION['Cust_first'].'</h2>';
    ?>
    <div class="row">
    <div class=col-lg-8 id="map"></div>
    </div>
    <div class="row">
    <?php include 'includes/parking.php';
    echo '<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Parking Space</th>
      </tr>
    </thead><tbody>';
    foreach($parkings as $park)
    {echo '<tr>
      
      <td>'.$park->park_name.'</td>
      <td>'.$park->park_address.'</td>
      <td>'.$park->park_total.'</td>
    </tr>';}
      '
    </tbody>
  </table>';
    ?>
    </div>
   </div>
  </body>
</html>