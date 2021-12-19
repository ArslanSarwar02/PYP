

$(document).ready(function () {
    // $("#allow_users").submit(function () {
    //     alert("Please wait...");
    function allowUsers(id) {
        $.ajax({
            url: "allow_users.php",
            type: "POST",
            data: {id: id},
            success: function (response) {
                console.log(response);
                $("#success").append(response);
            }
        });
    }

    $("#allow_users").on("submit", function (e) {
        e.preventDefault();
        let id = $("#user_id").val();
                allowUsers(id);

    });


    });
