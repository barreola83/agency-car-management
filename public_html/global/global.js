$(document).ready(function () {

    let customErrorMessage = "Ha ocurrido un error en el servidor, intente refrescar la página presionando F5.";
    let objectStock;
    //let user =  localStorage.getItem("user");
    console.log(JSON.parse(localStorage.getItem("user")));

    $(".username").text(username);
    $("p.username > small").text(role);
    //$(".breadcrumb-item").text("¡Bienvenido, " + username + "!");
    $("#welcomeMessage").text("¡Bienvenido, " + username + "!");

    $(function () {
        $.ajax({
            url: "http://localhost/retrieve_nodes_info.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                //console.log(response);
                let html;
                $.each(response, function (index, value) {
                    html += '<tr class="clickable-row">'
                        + '<th scope="row" id="' + value.id + '">' + value.id + '</th>'
                        + '<td>' + (value.type).replace("_", " ") + '</td>'
                        + '<td>' + value.name + '</td>'
                        + '<td>' + value.neighborhood + '</td>'
                        + '<td>' + value.town_name + '</td>'
                        + '<td>' + value.state_name + '</td>'
                        + '</tr>';
                });
                $("#stock-content").html(html);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    });

    $(function () {
        $.ajax({
            url: "http://localhost/retrieve_global_stock_info.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                //console.log(response);
                let html;
                $.each(response, function (index, value) {
                    let availability;
                    if (value.quantity == 0) {
                        availability = '<td style="color:red">No disponible</td>';
                    } else {
                        availability = '<td style="color:green">Disponible</td>';
                    }
                    html += '<tr class="clickable-row">'
                        + '<th scope="row">' + value.id_node + '</th>'
                        + '<td>' + value.name + '</td>'
                        + '<td>' + value.model + '</td>'
                        + '<td id=' + value.id_version + '>' + value.version + '</td>'
                        + '<td id=' + value.id_color + '>' + value.color + '</td>'
                        + availability
                        + '<td id="stockLeft">' + value.quantity + '</td>'
                        + '</tr>';
                });
                $("#stock-body").html(html);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    });

    $(function () {
        retrieveStates();
    })

    $('#stockTable, #agencyListTable').on('click', '.clickable-row', function (event) {
        if ($(this).hasClass('active-row')) {
            $(this).removeClass('active-row');
        } else {
            $(this).addClass('active-row').siblings().removeClass('active-row');
        }
    });

    $("#carLot").on("click", function () {
        $("#addCarLotModal").modal('show');
    });

    $("#logout").on("click", function () {
        window.location.replace("../general/signin.html");
    });

    $("#agencyListTable").on("dblclick", "tr", function () {
        localStorage.setItem("id_agency", $(this).find("th:first").text());
        $("#editAgencyModal").modal("show");
    });

    $("#stockTable").on("dblclick", "tr", function () {
        objectStock = $(this);
        $("#editStockModal").modal("show");
    });

    $("#editStockModal").on("show.bs.modal", function (e) {
        //console.log(objectStock);
        //$("#automobileName").val(objectStock["0"].childNodes["0"].textContent);
        $("#automobileName").val(objectStock["0"].childNodes[2].textContent);
        $("#version").val(objectStock["0"].childNodes[3].textContent);
        let html = "<option>" + objectStock["0"].childNodes[4].textContent + "</option>";
        $("#selType").html(html);
        $("#stockQty").val(objectStock["0"].childNodes[6].textContent);
    })

    $('#addCarLotModal').on('show.bs.modal', function (e) {
        retrieveModel();
        retrieveNodes();
    });

    $("#editAgencyModal").on("show.bs.modal", function (e) {
        $.ajax({
            data: { "id_agency": localStorage.getItem("id_agency") },
            url: "http://localhost/retrieve_global_node_info.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                console.log(response);
                if (response == null || response == 'undefined') {
                    $("#editAgencyModal").html(customErrorMessage);
                } else {
                    $("#name").val(response["0"].name);
                    $("#street").val(response["0"].street);
                    $("#extNumber").val(response["0"].outdoor_number);
                    (response["0"].internal_number == 0) ? $("#intNumber").val("") : $("#intNumber").val(response.internal_number);
                    $("#zip_code").val(response["0"].zip_code);
                    $("#neighborhood").val(response["0"].neighborhood);
                    $("#selState option[value='" + response.id_state + "']").prop("selected", true);
                    $("#selTown").val(response["0"].id_town);
                    $("#selType").val(response["0"].type);
                    $("#phoneNumber").val((response["0"].phone).replace(/^\s+|\s+$/gm, ''));
                    $("#website").val(response["0"].website);

                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    });

    $("#editAgencyModal, #addCarLotModal, #editStockModal").on('hidden.bs.modal', function (event) {
        $("#editAgencyModal #addCarLotModal #editStockModal").modal('dispose');
    });

    $("#model").change(function () {
        //console.log("Se envió: " + $("#model option:selected").text());
        retrieveVersion($("#model option:selected").text());
        retrieveColors($("#model option:selected").text());
        console.log($("#selVersion option:selected").attr("id"));
        console.log($("#color option:selected").attr("id"));
        //getAmountAvailable($("#model option:selected").text(), $("#version option:selected").attr("id"), $("#color option:selected").attr("id"));
    });

    $("#selVersion").change(function(){
        getAmountAvailable($("#model option:selected").text(), $("#selVersion option:selected").attr("id"), $("#color option:selected").attr("id"));        
    });

    $("#color").change(function(){
        getAmountAvailable($("#model option:selected").text(), $("#selVersion option:selected").attr("id"), $("#color option:selected").attr("id"));        
    });

    $("#selState").change(function () {
        //console.log($("#selState option:selected").attr("id"));
        retrieveTownsPerState($("#selState option:selected").attr("id"));
    });

    function retrieveStates() {
        $.ajax({
            url: "http://localhost/retrieve_states.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                //console.log(response);
                let html;
                $.each(response, function (index, value) {
                    html += "<option id=" + value.id + ">" + value.state + "</option>";
                });
                $("#selState").html(html);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    }

    function retrieveModel() {
        $.ajax({
            url: "http://localhost/retrieve_model.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                if (response == null || response == 'undefined') {
                    $("#addCarModalBody").html(errorMessage);
                    //console.log("respone null or undefined in model select.");
                } else {
                    let html;
                    $.each(response, function (index, value) {
                        html += "<option>" + value.model + "</option>";
                    });
                    $("#model").html(html);
                }

            },
            error: function (jqXhr, textStatus, errorMessage) {
                $("#addCarModalBody").html(customErrorMessage);
                console.log('Error: ' + errorMessage);
            }
        });
    }

    function retrieveVersion(version) {
        $.ajax({
            data: { "model": version },
            url: "http://localhost/retrieve_versions.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                //console.log("VERSIONS ", response);
                if (response == null || response == 'undefined') {
                    $("#addCarModalBody").html(errorMessage);
                    //console.log("response null or undefined in version select.");
                } else {
                    let html;
                    $.each(response, function (index, value) {
                        html += "<option id=" + value.id + ">" + value.version + "</option>";
                    });
                    $("#selVersion").html(html);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $("#addCarModalBody").html(customErrorMessage);
                console.log('Error: ' + errorMessage);
            }
        });
    }

    function retrieveColors(color) {
        $.ajax({
            data: { "color": color },
            url: "http://localhost/retrieve_colors.php",
            dataType: 'json',
            type: "POST",
            crossDomain: true,
            success: function (response) {
                //console.log("COLORS ", response);
                if (response == null || response == 'undefined') {
                    $("#addCarModalBody").html(errorMessage);
                    console.log("response null or undefined in color select.");
                } else {
                    let html;
                    $.each(response, function (index, value) {
                        html += "<option id=" + value.id + ">" + value.color + "</option>";
                    });
                    $("#color").html(html);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $("#addCarModalBody").html(customErrorMessage);
                console.log('Error: ' + errorMessage);
            }
        });
    }

    function getAmountAvailable(model, id_version, id_color) {
        $.ajax({
            data: {
                "model": model,
                "id_version": id_version,
                "id_color": id_color
            },
            url: "http://localhost/retrieve_amount.php",
            type: "POST",
            crossDomain: true,
            success: function (response) {
                console.log(response);
                /*if (response == null || response == 'undefined') {
                    $("#amount_available").val("Error, por favor intente de nuevo.");
                    console.log("response null or undefined in color select.");
                } else {
                    $("#amount_available").val(response.amount_available);
                }*/
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $("#addCarModalBody").html(customErrorMessage);
                console.log('Error: ' + errorMessage);
            }
        });
    }

    $("#registerForm").submit(function (event) {
        event.preventDefault();

        if ($("#registerForm")[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            /*console.log("Submitted properly");
            console.log($("#name").val());
            console.log($("#street").val());
            console.log($("#extNumber").val());
            console.log($("#intNumber").text());
            console.log($("#zip_code").val());
            console.log($("#neighborhood").val());
            console.log($("#selState option:selected").attr("id"));
            console.log($("#selTown option:selected").text());
            console.log($("#selType option:selected").text().replace(" ", "_").toUpperCase());
            console.log($("#phoneNumber").val());
            console.log($("#website").val());
            */

            $.ajax({
                data: {
                    "type": $("#selType option:selected").text().replace(" ", "_").toUpperCase(),
                    "name": $("#name").val(),
                    "street": $("#street").val(),
                    "outdoor_number": $("#extNumber").val(),
                    "internal_number": $("#intNumber").text(),
                    "zip_code": $("#zip_code").val(),
                    "neighborhood": $("#neighborhood").val(),
                    "id_town": $("#selTown option:selected").attr("id"),
                    "id_state": $("#selState option:selected").attr("id"),
                    "phone": $("#phoneNumber").val(),
                    "website": $("#website").val()
                },
                url: "http://localhost/add_node.php",
                type: 'POST',
                crossDomain: true,
                success: function (response) {
                    console.log(response);
                    if (response == "Success") {
                        $("#navBar").append('<div class="alert alert-success" role="alert">'
                            + '<h4 class="alert-heading">¡Agencia registrada con éxito!</h4>'
                            + '<hr><p class="mb-0">Si desea registrar una nueva agencia,'
                            + '<a href="javascript:window.location.reload();" class="alert-link"> haga click aquí</a>.</p></div>');
                        $(":submit").prop("disabled", true);
                    } else {
                        $("#navBar").append('<div class="alert alert-danger" role="alert">'
                            + '<h4 class="alert-heading">Lo sentimos</h4>'
                            + '<hr><p class="mb-0">Error al registrar la agencia, intente nuevamente.</p></div>');
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error: ' + errorMessage);
                }
            });

        }

        $("#registerForm").addClass('was-validated');
    });

    $("#addCarLotForm").submit(function (event) {
        event.preventDefault();

        if ($("#addCarLotForm")[0].checkValidity() === false) {
            event.stopPropagation();
            console.log("NO");
        } else {
            console.log("Submitted properly");
            /*
            console.log($("#nodes option:selected").attr("id"));
            console.log($("#model option:selected").text());
            console.log($("#version option:selected").attr("id"));
            console.log($("#color option:selected").attr("id"));
            console.log($("#quantity").val());
            */


            $.ajax({
                data: {
                    "id_node": $("#nodes option:selected").attr("id"),
                    "model": $("#model option:selected").text(),
                    "id_version": $("#version option:selected").attr("id"),
                    "id_color": $("#color option:selected").attr("id"),
                    "n_vehicles": $("#quantity").val()
                },
                url: "http://localhost/add_car_lot.php",
                type: 'POST',
                crossDomain: true,
                success: function (response) {
                    console.log(response);
                    if (response == "Success") {
                        let html = '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                            + '<strong>Lote añadido exitosamente.</strong>'
                            + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                            + '<span aria-hidden="true">&times;</span></button></div>';
                        $("#addCarLotModal").modal('hide');
                        $("#navBar").append(html);
                    } else {
                        let html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                            + '<strong>Error.</strong> No pudo añadir el lote de carros. Intente nuevamente'
                            + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                            + '<span aria-hidden="true">&times;</span></button></div>';
                        $("#navBar").append(html);
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error: ' + errorMessage);
                }
            });


        }

        $("#addCarLotForm").addClass('was-validated');
    });

    $("#modifyForm").submit(function (event) {
        event.preventDefault();

        if ($("#modifyForm")[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            /*console.log("Submitted properly");
            console.log(localStorage.getItem("id_agency"));
            console.log($("#name").val());
            console.log($("#street").val());
            console.log($("#extNumber").val());
            console.log($("#intNumber").text());
            console.log($("#zip_code").val());
            console.log($("#neighborhood").val());
            console.log($("#selState option:selected").attr("id"));
            console.log($("#selTown option:selected").text());
            console.log($("#selType option:selected").text().replace(" ", "_").toUpperCase());
            console.log($("#phoneNumber").val());
            console.log($("#website").val());*/


            $.ajax({
                data: {
                    "id": localStorage.getItem("id_agency"),
                    "type": $("#selType option:selected").text().replace(" ", "_").toUpperCase(),
                    "name": $("#name").val(),
                    "street": $("#street").val(),
                    "outdoor_number": $("#extNumber").val(),
                    "internal_number": $("#intNumber").text(),
                    "zip_code": $("#zip_code").val(),
                    "neighborhood": $("#neighborhood").val(),
                    "id_town": $("#selTown option:selected").attr("id"),
                    "id_state": $("#selState option:selected").attr("id"),
                    "phone": $("#phoneNumber").val(),
                    "website": $("#website").val()
                },
                url: "http://localhost/update_node.php",
                type: 'POST',
                crossDomain: true,
                success: function (response) {
                    console.log(response);
                    if (response == "Success") {
                        console.log("SUCCESS");
                    } else {
                        console.log("NO");
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error: ' + errorMessage);
                }
            });
        }

        $("#modifyForm").addClass('was-validated');
    });

    $("#updateStockForm").submit(function (event) {
        event.preventDefault();

        if ($("#updateStockForm")[0].checkValidity() === false) {
            event.stopPropagation();
            //console.log("NO");
        } else {
            //console.log("Submitted properly");

            $.ajax({
                data: {
                    "id_node": objectStock["0"].childNodes["0"].textContent,
                    "model": objectStock["0"].childNodes[2].textContent,
                    "id_version": objectStock["0"].childNodes[3].id,
                    "id_color": objectStock["0"].childNodes[4].id,
                    "n_vehicles": $("#stockQty").val()
                },
                url: "http://localhost/add_car_lot.php",
                type: 'POST',
                crossDomain: true,
                success: function (response) {
                    //console.log(response);
                    if (response == "Success") {
                        //Do something
                    } else {
                        //Do something
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log('Error: ' + errorMessage);
                }
            });


        }

        $("#updateStockForm").addClass('was-validated');
    });

    function retrieveTownsPerState(id) {
        $.ajax({
            data: { "id": id },
            url: "http://localhost/retrieve_towns.php",
            dataType: 'json',
            type: 'POST',
            crossDomain: true,
            success: function (response) {
                //console.log(response);
                let html;
                $.each(response, function (index, value) {
                    html += "<option id=" + value.id + ">" + value.town_name + "</option>";
                });
                $("#selTown").html(html);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    }

    function retrieveNodes() {
        $.ajax({
            url: "http://localhost/retrieve_nodes.php",
            dataType: 'json',
            type: 'POST',
            crossDomain: true,
            success: function (response) {
                //console.log(response);
                let html;
                $.each(response, function (index, value) {
                    html += "<option id=" + value.id + ">" + value.name + "</option>";
                });
                $("#nodes").html(html);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('Error: ' + errorMessage);
            }
        });
    }

});