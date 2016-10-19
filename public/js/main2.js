'use strict';

$(function() {

    loadRequest();
    $(document).on('change', '#All-Contracts', OnChangeGetStationID);
    $(document).on('click', 'marker.label', OnClickMarkerGetStationID);

});