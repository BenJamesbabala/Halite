<!DOCTYPE HTML>
<html>
<head>
    <?php include 'includes/header.php'; ?>

    <title>Visualizer</title>

    <link href="lib/bootstrap.min.css" rel="stylesheet">
    <link href="style/general.css" rel="stylesheet">
</head>
<body>
    <div id="container" class="container">
        <?php include 'includes/navbar.php'; ?>
        <div id="pageContent" class="pageContent text-center">
            <div id='dropZone' class="col-sm-12 text-center">
                <span class="glyphicon glyphicon-cloud-upload" style="font-size: 10em;"></span>
                <h2 style="margin-top: 20px;">Drop a replay file here</h2>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/2.4.0/seedrandom.min.js"></script>
    <script src="script/general.js"></script>
    <script src="script/backend.js"></script>
    <script src="lib/pixi.min.js"></script>
    <script src="script/parsereplay.js"></script>
    <script src="script/visualizer.js"></script>
    <script src="script/localVisualizer.js"></script>
</body>
</html>
