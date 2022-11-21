<html>
    <body>
            <script src="jquery-3.6.1.js"></script>
            <link href="dist/css/lightbox.css" rel="stylesheet" type="text/css"/>
            <script src="dist/js/lightbox.js"></script>

            <a href="1.jpg.jpg" data-lightbox="image-1" data-title="my caption1">image #1</a>
            <a href="2.jpg.jpg" data-lightbox="image-2" data-title="my caption2">image #2</a>

            <a href="1.jpg.jpg" data-lightbox="image-3" data-title="my caption3"><img src="1.jpg.jpg" style="width: 100px;"></a>
            <a href="2.jpg.jpg" data-lightbox="image-4" data-title="my caption4"><img src="2.jpg.jpg" style="width: 100px;"></a>

    <script>
        lightbox.option({
        'resizeDuration': 900,
        'wrapAround': true
        })
    </script>
    </body>
</html>