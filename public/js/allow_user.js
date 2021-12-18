

$(document).ready(function () {
    // $("#allow_users").submit(function () {
    //     alert("Please wait...");
    function allowUsers(id) {
        $.ajax({
            url: "allow_users.php",
            type: "POST",
            data: {id: id},
            success: function (data) {
                console.log(data);
                $("#success").append(data);
            }
        });
    }

    $('#submit').on("click", function (e) {
        e.preventDefault();
        let id = $("#user_id").val();
                allowUsers(id);

    });


    });
