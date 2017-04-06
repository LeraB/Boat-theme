// $(function(){
//     $( "#acf-field-location" ).keyup(function() {
//         $("#acf-field-location")
//             .geocomplete()
//             .bind("geocode:result", function(event, result){
///             });
//
//     });
//
//
// });

var  autocomplete;

function initAutocomplete() {

    autocomplete = new google.maps.places.Autocomplete(
        (document.getElementById('acf-field-location')),
        {types: ['country']}
    );

}
initAutocomplete();