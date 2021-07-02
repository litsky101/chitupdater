// (function(win, doc, $){
//     "use strict";
//
//     var $import = $("#btnImport");
//
//     $import.on("click", function(){
//         alert('Test');
//     })
// })(window, document, $);
$(document).ready(function(){
    var $import = $("#btnImport");
    var $table = $("table-members");

    $import.on("click", function(){
        alert('Test');
    });

    $table.on("click", function(){
        var $item = $(this).closest("tr")   // Finds the closest row <tr>
                      .find(".nr")     // Gets a descendent with class="nr"
                      .text();
        alert($item);
    });
});
