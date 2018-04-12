$(document).ready(function () {

    $('#stockTable').on('click', '.clickable-row', function (event) {
        if ($(this).hasClass('active-row')) {
            $(this).removeClass('active-row');
        } else {
            $(this).addClass('active-row').siblings().removeClass('active-row');
        }
    });


    $('#sumbitReg').on('click', function(event){
        
    })
});