// $(function(){
//     $( "#acf-field-location" ).keyup(function() {
//         $("#acf-field-location")
//             .geocomplete()
//             .bind("geocode:result", function(event, result){
//
//             });
//
//     });
//
//
// });

var  autocomplete;

function initAutocomplete() {

    autocomplete = new google.maps.places.Autocomplete(
        (document.getElementById('acf-field-location')),
        {types: ['country']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}