

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
                $('#user').append(data);
            }
        });
    }

    $('#allow_users').submit(function (e) {
        let id = $("#user_id").val();
        e.preventDefault();
        allowUsers(id);

    });


    });
