$(".user").focusin(function() {
    $(".inputUserIcon").css("color", "#ec2745");
}).focusout(function() {
    $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function() {
    $(".inputPassIcon").css("color", "#ec2745");
}).focusout(function() {
    $(".inputPassIcon").css("color", "white");
});

$("#frmAcceso").on('submit', function(e) {
    e.preventDefault();


    logina = $("#logina").val();
    clavea = $("#clavea").val();
    $.ajax({
        data: {
            'op': 'verificar',
            'logina': logina,
            'clavea': clavea,
        },
        url: '../ajax/users.php?=verificar',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.data) {
                $(location).attr("href", "../cms/formlist.php");
            }


        },
        error: function(response) {
            alert("User or Password incorrect");
            console.log(response);
            $(location).attr("href", "../views/logout.php");
            console.log(response);
        }
    });


});