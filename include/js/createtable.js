var CreateTable = function(DataArr, Columns) {
    var GetHeaderNames = _.size(Columns) < 1 ? DataArr[0] : Columns;
    var GetRows = DataArr;
    var d = '';
    d += '<table class="table table-hover table-bordered " width="100%">';
    //--->Create Header- Start
    d += '<thead>';
    d += '<tr>';
    $.each(GetHeaderNames, function(index, value) {
        var col_value = _.size(Columns) < 1 ? index : value;
        d += '<th >' + _.startCase(col_value) + '</th>';
    })
    d += '</tr>';
    d += '</thead>';
    //--->Create Header- End
    //--->Create Rows - Start
    d += '<tbody>';
    $.each(GetRows, function(index, v1) {
        d += '<tr>';
        $.each(v1, function(index, v2) {
            d += '<td id="myTable" >' + v2 + '</td>';
        })
        d += '</tr>';
    })
    d += "</tbody>";
    //--->Create Rows - End
    d += " </table>";
    return d;
}