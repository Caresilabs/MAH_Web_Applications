<!doctype html>
<html>
    <head>
        <title>Enhörningar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Enhörningar</h1>

            <hr>
            
            <form action="/home/details" method="get">
                
               <div class="form-group">
                    <label for="id">Id på en enhörning</label>
                    <input type="text" id="id" name="id" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Visa enhörning" class="btn btn-success">
                    <input onclick="location.href='/'" value="Visa alla enhörningar" class="btn btn-primary">
                </div>
            </form>
            
            <hr>
