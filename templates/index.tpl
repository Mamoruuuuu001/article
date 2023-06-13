<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Madrid Daily</title>
    {include file='head.tpl'}
</head>

<body>
    {include file='nav.tpl'}

    <div class="container mt-3">
        {include file='intro.tpl'}
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                {include file="op_{$op}.tpl"}
            </div>

            <div class="col-md-3">
                {include file='aside.tpl'}
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>