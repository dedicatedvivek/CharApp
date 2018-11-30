<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANCTION STATUS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>SANCTION STATUS</h2>
            <form class="form-inline" action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Applicant Name" required/>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>

            <h3>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];

                    $url = "http://localhost/RestFulServer/api.php?name=" . $name;

                    $client = curl_init($url);
                    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($client);
                    
                    $result = json_decode($response);
                    
                    echo $result->data;
                } // Refer above PHP code
                ?>
            </h3>
        </div>
    </body>
</html>