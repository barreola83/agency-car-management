$(document).ready(function () {

    $("#login").click(function () {
        $.get("mysql_connection.js", function (data, status) {
            alert("Data: " + data + "\nStatus: " + status);
        });
    });

});