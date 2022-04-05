<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>localStrage にテキストデータを保存する</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>
/* PC */
@media screen and ( min-width:480px ) {
    #content {
        margin: 26px;
    }
    #text {
        width: 480px;
        height: 360px
    }
}
/* スマホ */
@media screen and ( max-width:479px ) {
    #content {
        padding: 0px;
    }
    .btn, #key {
        width: 100%;
    }
    #text {
        width: 100%;
        height: 400px
    }
}
</style>

</head>
<body>
<h3 class="alert alert-primary"><a href="control.php">localStrage にテキストデータを保存する</a></h3>
<div id="content">
    <div>
        <div class="right">
            <input
                required
                type="text"
                id="key"
                required
                class="me-4">

            <input type="button" class="btn btn-secondary me-4" value="保存" id="save">

            <a href="." class="btn btn-secondary">フォルダ</a>
        </div>
    </div>
    <div>
        <textarea id="text" class="mt-4"></textarea>
    </div>
</div>
<div id="result" class="m-4"></div>
</body>
</html>
