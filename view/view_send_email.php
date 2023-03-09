<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/event.css">
    <script src="../asset/script/event.js" defer></script>
    <title>Participation à l'événement </title>
</head>

<body>
    <main class="card_event">
        <h1>Pour participer à l'événement veuillez indiquer votre email</h1>
        <form action="" method="post" class="form_event">
            <div class="form_event_email">
                <input type="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autofocus>
                <p class="message"></p>
            </div>
            <div class="form_event_button">
                <input type="submit" value="Ajouter" name="createEvent">
            </div>
        </form>
    </main>
</body>

</html>