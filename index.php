<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>اس ام اس بمبر</title>
</head>
<body>
<form action="sms.php" class="bomber-form" method="POST">
    <?php
    if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
        <div id="error" class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
    <?php } elseif (isset($_GET['ok']) && $_GET['ok'] == true) { ?>
        <div id="done" class="done">ارسال پیامک ها با موفقیت به اتمام رسید</div>
    <?php } ?>

    <div id="pending" class="pending">در حال ارسال پیامک ها</div>

    <h3>اس ام اس بمبر 💣</h3>
    <label for="phone">شماره تلفن(با صفر)</label>
    <input id="phone" name="phone" placeholder="09XXXXXXXXX" type="text">
    <button onclick="sending();scrollToBottom()" name="submit">ارسال</button>
    <a href="https://github.com/amirmalek0" target="_blank"><img alt="AmirMalek-Github" class="git"
                                                                 src="assets/img/github.png"></a>
    <label for="logText">لاگ ارسال</label>
    <textarea id="logText" rows="7" cols="30" readonly></textarea>

</form>
<script>
    function sending() {
        if (document.getElementById('error') !== null) {
            let error = window.getComputedStyle(document.getElementById('error')).display
            if (error === 'block') {
                document.getElementById('error').style.display = 'none';
            }
        }

        if (document.getElementById('done') !== null) {
            let done = window.getComputedStyle(document.getElementById('done')).display
            if (done === 'block') {
                document.getElementById('done').style.display = 'none'
            }
        }

        document.getElementById("pending").style.display = "block";
    }

    function readLogFile() {
        fetch('log.txt')
            .then(response => response.text())
            .then(data => {
                document.getElementById('logText').value = data;
            });
    }
    const textarea = document.getElementById('logText');
    function scrollToBottom() {
        textarea.scrollTop = textarea.scrollHeight;
    }

    readLogFile();
    setInterval(readLogFile, 1000);

</script>
</body>
</html>