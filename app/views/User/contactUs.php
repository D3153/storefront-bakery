<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="container">
        <br/>
        <div class="alert alert-primary" role="alert">Fill in the information </div>
        <div id="alertBox" role="alert"></div>
        <form name="myForm">
            <legend><i class="bi bi-info-circle-fill"></i> User Info</legend>

            <div class="form-group form-inline">
                <label for="fName">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>

            <div class="form-group form-inline">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" id="emailaddress" placeholder="john@example.com" name="emailaddress">
            </div>

            <button type="reset" class="btn btn-danger" id="resetBtn">Reset</button>
            <button type="submit"  name="action" class="btn btn-primary" id="submitBtn">Submit</button>
        </form>
    </div>

    </body>
</html>