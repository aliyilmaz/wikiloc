<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikiloc.php</title>
</head>
<body>
    <?php 
    
    require_once('src/wikiloc.php');
    $trailPage = 'https://www.wikiloc.com/hiking-trails/cilingoz-cennet-selaleleri-05-08-2018-27286246';               
    if(isWikilocTrailValidation($trailPage)){
        echo '<p>This is a wikiloc page.</p>';
    }
    echo '<p>'.getWikilocTrailId($trailPage).'</p>';


    $trailMapPage = 'https://www.wikiloc.com/wikiloc/embedv2.do?id=27286246&elevation=off&images=off&maptype=H';               
    if(isWikilocTrailMapValidation($trailMapPage)){
        echo '<p>This is a Wikiloc map connection.</p>';
    } else {    
        echo '<p>This is not a Wikiloc map connection.</p>';
    }
        echo '<p>'.getWikilocTrailMapId($trailMapPage).'</p>';
    ?>
    
</body>
</html>