
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VKapi</title>
</head>
<body>


    <h2>удалить беседу</h2>
    <form action="conversationdel.php" method="post">
        <p>токен: <input type="text" name="tkn" /></p>
        <p>айди собеседника: <input type="text" name="id" /></p>
        <p><input type="submit" /></p>
    </form>
    <br>
    
    
    <h2>отправить сообщение</h2>
    <form action="sendmessage.php" method="post">
        <p>токен: <input type="text" name="tkn" /></p>
        <p>айди собеседника: <input type="text" name="id" /></p>
        <p>рандом(рандомное число для проверки <br>уникальности сообщения за последний час): <input type="text" name="rnd" /></p>
        <p>сообщение: <input type="text" name="soo" /></p>
        <p><input type="submit" /></p>
    </form>
    
    
    <h2>показать переписку</h2>
    <form action="showconversation.php" method="post">
        <p>токен: <input type="text" name="tkn" /></p>
        <p>айди: <input type="text" name="id" /></p>
        <p>введите 0: <input type="text" name="soonum" /></p>
        <p><input type="submit" /></p>
    </form>
    <br>
    
    
    <br>
    <p>токен информатички</p>
    <p>eae8ad41f020402f0f964b166edf8e6e9f85d544e631e36e4c80190ce98f680fec06eab9a9acb96f808bb</p>
    <br><br>
    <p>токен той рандомки</p>
    <p>07f1415ab39c3f2df764d441bab8137cc7635fbc90b9d62cfe08f5c9f05e2b5dee8a71f02a250f44c56de</p>
</body>
</html>