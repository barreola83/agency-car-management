$(document).ready(function () {

    $("#login").click(function(){
        if($("#username").val() == $("#password").val()){
            window.location.replace("../global/index.html");
        }
    });

});