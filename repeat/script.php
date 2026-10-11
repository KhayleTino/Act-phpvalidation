<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        $(".feature").each(function (index) {
            $(this)
                .delay(index * 180)
                .animate({ opacity: 1 }, 550)
                .queue(function (next) {
                    $(this).addClass("is-visible");
                    next();
                });
        });
    });
</script>
</body>
</html>
</body>
</html>