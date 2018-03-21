<?php
session_start(); 
if ($_SESSION['rol']=='admin') {
    
}else{
header("Location:http://localhost:8080/PROYECTO/login.html");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="initial-scale=1.0, user-scalable=no" name="viewport"/>
            <title>
                Registro de flota vehicular
            </title>
            <!-- Normalize CSS -->
            <link href="css/normalize.css" rel="stylesheet"/>
                <!-- Materialize CSS -->
                <link href="css/materialize.min.css" rel="stylesheet"/>
                    <!-- Material Design Iconic Font CSS -->
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
                        <link href="css/material-design-iconic-font.min.css" rel="stylesheet"/>
                            <!-- Malihu jQuery custom content scroller CSS -->
                            <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet"/>
                                <!-- Sweet Alert CSS -->
                                <link href="css/sweetalert.css" rel="stylesheet"/>
                                    <!-- MaterialDark CSS -->
                                    <link href="css/style.css" rel="stylesheet"/>
    <style type="text/css">
         #map {
        height: 400px;
        width: 600px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
    </style>
        </meta>
    </head>
    <body>
        <!-- Nav Lateral -->
        <section class="NavLateral full-width">
            <div class="NavLateral-FontMenu full-width ShowHideMenu">
            </div>
            <div class="NavLateral-content full-width">
                <header class="NavLateral-title full-width center-align red darken-4">
                    Administrador
                    <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu">
                    </i>
                </header>
                <figure class="full-width NavLateral-logo red darken-4">
                    <img alt="material-logo" class="responsive-img center-box grey lighten-5" src="assets/img/logo1.png">
                        <figcaption class="center-align red darken-4">
                            Bienvenido Administrador
                        </figcaption>
                    </img>
                </figure>
                <div class="NavLateral-Nav">
                    <ul class="full-width">
                        <li>
                            <a class="NavLateral-DropDown waves-effect waves-light" href="#">
                                <i class="large material-icons">
                                    directions_bus
                                </i>
                                <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Registro de la flota vehicular
                            </a>
                            <ul class="full-width">
                            <li><a href="IngresarRegistroVehicular.php" class="waves-effect waves-light"><i class="large material-icons">add</i>&nbsp;&nbsp;Agregar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">border_color</i>&nbsp;&nbsp;Modificar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">clear</i>&nbsp;&nbsp;Eliminar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">find_in_page</i>&nbsp;&nbsp;Buscar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">assignment</i>&nbsp;&nbsp;Ver Reporte de Vehiculos</a></li>
                        </ul>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class=" NavLateral-DropDown waves-effect waves-light" href="#">
                                <i class="large material-icons">
                                    assignment_ind
                                </i><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>
                                Registro de motoristas
                            </a>
                            <ul class="full-width">
                            <li><a href="IngresarMotorista.php" class="waves-effect waves-light"><i class="large material-icons">add</i>&nbsp;&nbsp;Agregar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">border_color</i>&nbsp;&nbsp;Modificar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">clear</i>&nbsp;&nbsp;Eliminar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">find_in_page</i>&nbsp;&nbsp;Buscar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">assignment</i>&nbsp;&nbsp;Ver Reporte de Motoristas</a></li>
                        </ul>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="NavLateral-DropDown waves-effect waves-light" href="#">
                                <i class="large material-icons">folder_shared</i>
                                <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Informacion de Clientes
                            </a>
                            <ul class="full-width">
                            <li><a href="IngresarCliente.php" class="waves-effect waves-light"><i class="large material-icons">add</i>&nbsp;&nbsp;Agregar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">border_color</i>&nbsp;&nbsp;Modificar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">clear</i>&nbsp;&nbsp;Eliminar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">find_in_page</i>&nbsp;&nbsp;Buscar</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="#" class="waves-effect waves-light"><i class="large material-icons">assignment</i>&nbsp;&nbsp;Ver Reporte de Clientes</a></li>
                        </ul>
                        </li>
                        <li class="NavLateralDivider">
                        </li>
                        <li>
                            <a class="waves-effect waves-light" href="#">
                                <i class="large material-icons">
                                    pin_drop
                                </i>
                                Rutas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page content -->
        <section class="ContentPage full-width">
            <!-- Nav Info -->
            <div class="ContentPage-Nav full-width red darken-4">
                <ul class="full-width">
                    <li class="btn-MobileMenu ShowHideMenu">
                        <a class="tooltipped waves-effect waves-light" data-delay="50" data-position="bottom" data-tooltip="Menu" href="#">
                            <i class="zmdi zmdi-more-vert">
                            </i>
                        </a>
                    </li>
                    <li>
                        <figure>
                            <img alt="UserImage" src="assets/img/user.png"/>
                        </figure>
                    </li>
                    <li style="padding:0 5px;">
                        User Name
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-ExitSystem" data-delay="50" data-position="bottom" data-tooltip="Logout" href="php/logout.php">
                            <i class="zmdi zmdi-power">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-Search" data-delay="50" data-position="bottom" data-tooltip="Search" href="#">
                            <i class="zmdi zmdi-search">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped waves-effect waves-light btn-Notification" data-delay="50" data-position="bottom" data-tooltip="Notifications" href="#">
                            <i class="zmdi zmdi-notifications">
                            </i>
                            <span class="ContentPage-Nav-indicator bg-danger">
                                2
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Notifications area -->
            <section class="z-depth-3 NotificationArea">
                <div class="full-width center-align NotificationArea-title">
                    Notifications
                    <i class="zmdi zmdi-close btn-Notification">
                    </i>
                </div>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-accounts-alt bg-info">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as UnRead">
                            </i>
                            <strong>
                                New User Registration
                            </strong>
                            <br>
                                <small>
                                    Just Now
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-cloud-download bg-primary">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                New Updates
                            </strong>
                            <br>
                                <small>
                                    30 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-upload bg-success">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as UnRead">
                            </i>
                            <strong>
                                Archive uploaded
                            </strong>
                            <br>
                                <small>
                                    31 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-mail-send bg-danger">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                New Mail
                            </strong>
                            <br>
                                <small>
                                    37 Mins Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
                <a class="waves-effect Notification" href="#">
                    <div class="Notification-icon">
                        <i class="zmdi zmdi-folder bg-primary">
                        </i>
                    </div>
                    <div class="Notification-text">
                        <p>
                            <i class="zmdi zmdi-circle-o tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as Read">
                            </i>
                            <strong>
                                Folder delete
                            </strong>
                            <br>
                                <small>
                                    1 hours Ago
                                </small>
                            </br>
                        </p>
                    </div>
                </a>
            </section>
            <!-- Your code here -->
            <h4 class="center-align">
                Registro de Motoristas.
            </h4>
            <!-- Your code here -->
            <div class="row">
              <div class="col s12 m4 l4 offset-m4 offset-l4">
                <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">account_box</i>
                  <input id="nombre" type="text" class="validate">
                  <label for="nombre">Nombres</label>
                </div>
                <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">call</i>
                  <input id="telefono" type="text" class="validate">
                  <label for="telefono">Telefono</label>
                </div>
                <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">location_on</i>
                  <input id="direccion" value="" type="text" class="validate">
                  <label for="direccion">Direccion</label>
                </div>
<input id="pac-input" style="
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 35px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);

        background-color: black;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;

        border-color: #4d90fe;

        font-family: Roboto;

        color: black;
        background-color: white;
        padding: 5px 11px 0px 11px;

        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;

        width: 345px;
      " type="text" placeholder="Buscador">
            <div id="map"></div>
                <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI9GmD_WQnbVAXEqGUd634lYdudeF151c&libraries=places&callback=initAutocomplete" async defer></script>
            <!-- Footer -->
                    <div class="row center-align">
                      <div class="col s12 m4 l4 offset-m4 offset-l4">
                        <div class="col s12 m12 l12">
                            <br>
                          <button class="btn waves-effect waves-light" type="submit">Añadir
                            <i class="material-icons right">add</i>
                          </button>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
            <!-- Footer -->
            <footer class="footer-MaterialDark">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">
                                Pie de Pagina
                            </h5>
                            <p class="grey-text text-lighten-4">
                                Proyeto ITCA La Trailera
                                <br>
                                    
                                </br>
                            </p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">
                                Desarrolladores:
                            </h5>
                            <ul>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://materializecss.com/">
                                        Julio Cesar
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">
                                        Edwin Ernesto
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://t4t5.github.io/sweetalert/">
                                        Miguel Alexander
                                    </a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://manos.malihu.gr/jquery-custom-content-scroller/">
                                        Google Maps API
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="NavLateralDivider">
                </div>
                <div class="footer-copyright">
                    <div class="container center-align">
                        © 2016 ITCA FEPADE
                    </div>
                </div>
            </footer>
        </section>
        <!-- Sweet Alert JS -->
        <script src="js/sweetalert.min.js">
        </script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
        </script>
        <script>
            window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')
        </script>
        <!-- Materialize JS -->
        <script src="js/materialize.min.js">
        </script>
        <!-- Malihu jQuery custom content scroller JS -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js">
        </script>
        <!-- MaterialDark JS -->
        <script src="js/main.js">
        </script>
    </body>
</html>