<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/Contact.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/script/script.js"></script>
</head>

<body>
    <?php include "repetition/header.php" ?>

    <section id="head">
        <div class="orange">
            <h1 class="home">Contact</h1>
        </div>

        <div id="formulaire">
            <div id="formLeft">
                <form method="post" action="#" id="contactForm">
                    <input type="text" class="formInput" name="firstName" placeholder="First name">
                    <input type="text" class="formInput" name="lastName" placeholder="Last name">
                    <input type="text" class="formInput" name="email" placeholder="Email">
                    <textarea type="textarea" class="formText" name="message" placeholder="Message"></textarea>
                    <input class="formSubmit" value="submit" type="submit">
                </form>
            </div>
            <div id="formRight">
                <img src="img/SCC_SmallHeader-Cannabis.jpeg" alt="Femme" id="imgForm">
            </div>
        </div>
    </section>

    <?php include "repetition/footer.php" ?>
</body>

</html>