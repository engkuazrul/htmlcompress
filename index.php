<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML COMPRESS</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>HTML Compresser</h1>
        <p>Compress HTML files to make them much smaller and save space</p>
    </div>
    <div class="container">
        <div class="content">
            <div class="box">
                <div class="card">
                    <h3 class="card-title text-center">INSERT YOUR HTML</h3>
                    <p class="card-text text-center">Paste your html code in the box below and then click the convert button.</p>
                    <textarea class="form-control" name="htmlcode" id="htmlcode" rows="15"></textarea>
                    <p class="text-center"><a href="#" class="btn btn-primary" id="submit">Convert</a><a href="#" class="btn btn-warning" id="resetValue">Reset</a></p>
                </div>
                <div class="card">
                    <h3 class="card-title text-center">NEW COMPRESSED HTML</h3>
                    <p class="card-text text-center">Copy your new smaller html code from the box below.</p>
                    <textarea class="form-control" name="htmlconvert" id="htmlconvert" rows="15"></textarea>
                    <p class="text-center"><a href="#" class="btn btn-primary" id="copyclip">Copy to clipboard</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery/dist/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="base.js"></script>
</body>

</html>
<!-- -->
