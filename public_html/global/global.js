$(document).ready(function () {

    let username = localStorage.getItem("username");
    let role = localStorage.getItem("role");

    console.log(username);
    console.log(role);
    $(".username").text(username);
    $("p.username > small").text(role);
    $(".breadcrumb-item").text("¡Bienvenido, " + username + "!");


    $('#stockTable, #agencyListTable').on('click', '.clickable-row', function (event) {
        if ($(this).hasClass('active-row')) {
            $(this).removeClass('active-row');
        } else {
            $(this).addClass('active-row').siblings().removeClass('active-row');
        }
    });

    $("#agencyListTable").on("dblclick", "tr", function () {
        console.log($(this).find("th:first").text());
        $("#editAgencyModal").modal("show");
        /*$('#name, #street, #extNumber, #intNumber, #zip_code, #neighborhood, #phoneNumber, #website').keyup(function () {
            if ($(this).val() == '') {
                $('#acceptButton').prop('disabled', true);
            } else {
                $('#acceptButton').prop('disabled', false);
            }
        });*/
    });

    $("#stockTable").on("dblclick", "tr", function () {
        console.log($(this).find("th:first").text());
        $("#editStockModal").modal("show");
    });


});