'use strict';

const JCD_API_KEY = 'b75fc87074e67e03300cee9a3b482294b4a717f0';
const NANTES_LAT_LNG = {lat: 47.2172500, lng: -1.5533600};
/*****************************************************************************/

var map;
var marker;
var infowindow;
/*****************************************************************************/

function loadRequest(){

    $.ajax({
        url:'https://api.jcdecaux.com/vls/v1/stations',
        type: 'GET',
        dataType:'json',
        data:{
            contract: 'Nantes',
            apiKey: JCD_API_KEY
        },
        success:function(response)
        {
            map = initMap(NANTES_LAT_LNG, 14);
            for (var i = 0 ; i < response.length ; i++)
            {

                var LatLng = {
                    lat:response[i].position.lat,
                    lng:response[i].position.lng
                };

                marker = createMarker(map, LatLng, response[i].address, response[i].number);
                marker.addListener('click', OnClickMarkerGetStationID);
            }
        },


        error : function(resultat, statut, erreur){
        console.log(erreur);
    }


    });
}

function OnChangeGetStationID (){

    var valueOption = this.value;
    OnClickShowDetails(valueOption);
}


function OnClickMarkerGetStationID (){
    var stationNumber = $(this).attr('id');
     OnClickShowDetails(stationNumber);
}

function OnClickShowDetails (StationNumber){

    $.ajax({

        url:'https://api.jcdecaux.com/vls/v1/stations/'+ StationNumber,
        type: 'GET',
        dataType:'json',
        data:{
            contract: 'Nantes',
            apiKey: JCD_API_KEY

        },
        success:function(responsedetails)
        {
            // Map Creation //
            var LatLng = {
                lat: responsedetails.position.lat,
                lng: responsedetails.position.lng
            };

            map = initMap(LatLng, 18);
            createMarker(map, LatLng,responsedetails.address, responsedetails.number);

            // Info Window creation //
            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">N°' + responsedetails.name + '</h1>'+
                '<div id="bodyContent">'+
                '<p><i class="fa fa-map-marker" aria-hidden="true"></i> Adresse: <b>'+ responsedetails.address + ' 44000 NANTES</b></p>' +
                '<p><i class="fa fa-sign-in" aria-hidden="true"></i> Places disponibles: <b>'+ responsedetails.available_bike_stands + ' / '+ responsedetails.bike_stands +'</b></p>'+
                '<p><i class="fa fa-bicycle" aria-hidden="true"></i> Vélos disponibles: <b>'+ responsedetails.available_bikes + '</b></p>'+

                '</div>'+
                '</div>';

            createInfoWindow(contentString, 300);
            infowindow.open(map, marker);

            map.addListener('click', function() {
                 infowindow.close(map, marker);

            });
        }
    });
}

function initMap(myLatLng, zoom) {

    if(map == undefined) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: zoom
        });
    } else {
        map.setCenter(myLatLng);
        map.setZoom(zoom);
    }

    return map;
}

function createMarker(map, LatLng, title, id) {
    marker = new google.maps.Marker({
        map: map,
        position: LatLng,
        title: title,
        id: id

    });
    return marker;
}

function createInfoWindow(content, maxWidth)
{
    infowindow = new google.maps.InfoWindow({
        content: content,
        maxWidth: maxWidth
    });
    return infowindow;
}