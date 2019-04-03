<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Check Username Same</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="margin-top:20px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Username</label>
                    <input type="email" class="form-control" id="username" aria-describedby="emailHelp"
                        placeholder="Enter you name">

                </div>
            </div>
            <div class="col-2" style="margin-top:43px;">
                <span id="checkUserName"></span>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#username').blur(function() {
            var username = $(this).val();
            console.log(username);

            $.ajax({
                url: 'check.php',
                method: "POST",
                data: {
                    user_name: username
                },
                success: function(data) {
                    $('#checkUserName').html(data);
                }
            });
        });
    });
    </script>

</body>

</html>