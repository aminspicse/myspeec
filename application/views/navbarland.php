<!DOCTYPE html>
<html lang="en">
<head>
    <SCRIPT language=JavaScript>

        var message = "Right Button is Disabled";

        function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

        if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

        document.onmousedown = rtclickcheck;

    </SCRIPT>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myspeec Login/Signup</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-sm navbar-fixed" style="background-color: #e7eff7">
        <div class="container">
            <a href="<?= base_url()?>" class="navbar-brand">myspeec</a>
            <a href="<?= base_url('SignUp')?>" class="btn ">Create</a>
            <a href="<?= base_url('login')?>" class="btn ">Login</a>
        </div>
    </nav>