<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher PDF</title>
</head>
<body style="margin: 0;">

    <object type="application/x-shockwave-flash" data="{{ asset('assets/a.swf') }}" style="width: 100%; height:100vh" >
        <param name="movie" value="{{ asset('assets/a.swf') }}" />
        <param name="quality" value="high" />
    </object>
    
</body>
</html>
