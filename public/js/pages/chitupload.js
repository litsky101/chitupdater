$(document).ready(function(){

    var $cmd = $("#branchselect");
    var $table = $("#memberlist");
    //load branches
    //loadBranches();

    //click to upload excel file when selected file on dialog box
    $('#fileupload').on('change',function(){
        $("#memberlist thead").empty();
        $("#memberlist tbody").empty();
        ExportToTable();
    });


    $('#btnUpdate').on('click', function(e){
        e.preventDefault();

        Swal.fire({
            text: "Are you sure you want to update chit?.",
            icon: "question",
            confirmButtonText: 'Yes',
            showCancelButton: true
        }).then((result) =>{
            if(result.isConfirmed){
                var rowCount = $('#memberlist tbody tr').length;

                if(rowCount > 0){
                    var test = $("table tr").each(function(i, v){
                            data[i] = Array();
                            $(this).children('td').each(function(ii, vv){
                                data[i][ii] = $(this).text();
                            });
                        })

                    $('tbody').remove();
                }else{
                    Swal.fire({
                        text: "Please select file for chit update.",
                        icon: "error"
                    });
                    return false;
                }
            }
        });
    });


    // function loadBranches(){
    //     $cmd.empty();
    //
    //     $.ajax({
    //         type: 'POST',
    //         url: 'http://' + document.location.hostname + '/chitupdater/' + 'chitupload/getbranches',
    //         dataType: 'json',
    //         success: function(data){
    //             $.each(data, function(key, entry){
    //                 $cmd.append($('<option></option>').attr('value', entry.IPADDRESS).text(entry.BRANCHNAME));
    //             });
    //         },
    //         fail: function(data){
    //             alert(data.status);
    //         }
    //     });
    // }

    function updatechit(){
        let server = $('#branchselect option:selected').val();

        $.ajax({
            type: 'POST',
            url: 'http://' + document.location.hostname + '/chitupdater/' + 'chitupload/updatechitmany',
            dataType: 'json',
            sucess: function(data){

            }
        });
    }

    function ExportToTable() {
         var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
         /*Checks whether the file is a valid excel file*/
         if (regex.test($("#fileupload").val().toLowerCase())) {
             var xlsxflag = false; /*Flag for checking whether excel is .xls format or .xlsx format*/
             if ($("#fileupload").val().toLowerCase().indexOf(".xlsx") > 0) {
                 xlsxflag = true;
             }
             /*Checks whether the browser supports HTML5*/
             if (typeof (FileReader) != "undefined") {
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     var data = e.target.result;
                     /*Converts the excel data in to object*/
                     if (xlsxflag) {
                         var workbook = XLSX.read(data, { type: 'binary' });
                     }
                     else {
                         var workbook = XLS.read(data, { type: 'binary' });
                     }
                     /*Gets all the sheetnames of excel in to a variable*/
                     var sheet_name_list = workbook.SheetNames;

                     var cnt = 0; /*This is used for restricting the script to consider only first sheet of excel*/
                     sheet_name_list.forEach(function (y) { /*Iterate through all sheets*/
                         /*Convert the cell value to Json*/
                         if (xlsxflag) {
                             var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y]);
                         }
                         else {
                             var exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets[y]);
                         }
                         if (exceljson.length > 0 && cnt == 0) {
                             BindTable(exceljson, '#memberlist');
                             cnt++;
                         }
                     });
                     $('#memberlist').show();
                 }
                 if (xlsxflag) {/*If excel file is .xlsx extension than creates a Array Buffer from excel*/
                     reader.readAsArrayBuffer($("#fileupload")[0].files[0]);
                 }
                 else {
                     reader.readAsBinaryString($("#fileupload")[0].files[0]);
                 }
             }
             else {
                 alert("Sorry! Your browser does not support HTML5!");
             }
         }
         else {
             alert("Please upload a valid Excel file!");
         }
     }

     function BindTableHeader(jsondata, tableid) {/*Function used to get all column names from JSON and bind the html table header*/
         var columnSet = [];
         var headerTr$ = $('<thead class="thead-dark"><tr/>');
         for (var i = 0; i < jsondata.length; i++) {
             var rowHash = jsondata[i];
             for (var key in rowHash) {
                 if (rowHash.hasOwnProperty(key)) {
                     if ($.inArray(key, columnSet) == -1) {/*Adding each unique column names to a variable array*/
                         columnSet.push(key);
                         headerTr$.append($('<th/>').html(key));
                     }
                 }
             }
         }
         headerTr$.append($('</thead>').html());
         $(tableid).append(headerTr$);
         return columnSet;
     }

     function BindTable(jsondata, tableid) {/*Function used to convert the JSON array to Html Table*/
         var columns = BindTableHeader(jsondata, tableid); /*Gets all the column headings of Excel*/
         var row$ = $('<tbody>');
         for (var i = 0; i < jsondata.length; i++) {
             row$.append("<tr class='rw'>");
             for (var colIndex = 0; colIndex < columns.length; colIndex++) {
                 var cellValue = jsondata[i][columns[colIndex]];
                 if (cellValue == null)
                     cellValue = "";
                 row$.append($('<td/>').html(cellValue));
             }
             row$.append($('</tbody>').html());
             $(tableid).append(row$);
         }
     }
});
