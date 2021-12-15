<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/Contact.css">
    <link rel="stylesheet" href="css/style.css">
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
                    <input type="text" class="formInput" name="firstName" placeholder="First name" id="firstName">
                    <p class="error" id="errorFirstName"></p>
                    <input type="text" class="formInput" name="lastName" placeholder="Last name" id="lastName">
                    <p class="error" id="errorLastName"></p>
                    <input type="text" class="formInput" name="email" placeholder="Email" id="email">
                    <p class="error" id="errorEmail"></p>
                    <textarea type="textarea" class="formText" name="message" placeholder="Message" id="message"></textarea>
                    <p class="error" id="errorMessage"></p>
                    <input class="formSubmit" value="submit" type="submit" id="submit">
                    <p class="success" id="successMessage"></p>
                </form>
            </div>
            <div id="formRight">
                <img src="img/SCC_SmallHeader-Cannabis.jpeg" alt="Femme" id="imgForm">
            </div>
        </div>
    </section>

    <section id="partOf">
        <div class="orange2">
            <h2 class="home2">They are part of the association</h2>
        </div>

        <div id="secPartOf">
            <div class="personnePart">
                <img src="img/photo-1544005313-94ddf0286df2.jpeg" alt="femme">
                <p>Marina</p>
                <p>I joined the association last January, and I am happy to feel useful</p>
            </div>
            <div class="personnePart">
                <img src="img/photo-1508214751196-bcfd4ca60f91.jpeg" alt="femme">
                <p>Kate</p>
                <p>I joined the association last January, and I am happy to feel useful</p>
            </div>
        </div>
    </section>

    <section id="illuFriends">
        <img src="img/SCC_SmallHeader-About.jpeg" alt="">
    </section>

    <section id="trust">
        <div class="orange3">
            <h2 class="home3">They trust us</h2>
        </div>

        <div id="containerTrust">
            <div class="trustUs">
                <img src="img/BCSS-Joint 2.png" alt="Entreprise">
                <p>To support families affected by schizophrenia and other serious mental illnesses in British Columbia through education, advocacy, and research.</p>
            </div>
            <div class="trustUs">
                <img src="img/Group2.png" alt="Entreprise">
                <p>Provide quality mental health education and value-based peer support for Manitobans and their families dealing with mental health challenges.</p>
            </div>
            <div class="trustUs">
                <img src="img/Star1.png" alt="Entreprise">
                <p>MHRP provides services and programs for people with mental illness and mental health problems regardless of their diagnosis.</p>
            </div>
        </div>
    </section>

    <?php include "repetition/footer.php" ?>

    <script type="module" src="script/scriptContact.js"></script>
</body>

</html>