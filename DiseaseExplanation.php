
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explication de la maladie</title>
    <link rel="stylesheet" href="css/DiseaseExplanation.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/script/script.js"></script>
</head>

<body>

<?php
// Integration header avec php
include './repetition/header.php';
?>

<h1>The Disease</h1>

<section class="first-section">
    <div class="text-left">
        <p class="text">
            Schizophrenia is a serious mental illness that affects 300,000 
            Canadians. Although it affects men and women with equal frequency, schizophrenia 
            most often appears in men in their late teens or early twenties, while it appears 
            in women in their late twenties or early thirties. Finding the causes for 
            schizophrenia proves to be difficult as the cause and course of the illness is 
            unique for each person.
        </p>
        <img src="./img/faces.png" alt="Faces">
    </div>
    <div class="text-right">
        <img src="./img/cables.png" alt="Cables">
        <p class="text">
            Interfering with a person’s ability to think clearly, manage emotions, make decisions 
            and relate to others, schizophrenia impairs a person’s ability to function to their 
            potential when it is not treated. Unfortunately, no single, simple course of schizophrenia 
            treatment exists. Research has linked schizophrenia to a multitude of possible causes, including 
            aspects of brain chemistry and structure, as well as environmental causes.
        </p>
    </div>
</section>

<section class="second-section">
    <img src="./img/shadow_person.png" alt="Man with two shadows talking to him">
    <p class=text>
        Early Psychosis (psyche = mind, osis = illness) is defined as the experience of loss of contact with 
        reality and usually involves hallucinations and delusions. Early psychosis is a common symptom of 
        schizophrenia. Learn more about early psychosis, including first episodes, to gain more insight into 
        this condition, including early intervention options.
    </p>
    <div class="pictures">
        <img src="./img/person_1.png" alt="Man" class="picturePerson">
        <img src="./img/person_2.png" alt="Young man" class="picturePerson">
        <img src="./img/person_3.png" alt="womman" class="picturePerson">
    </div>
</section>

<?php
// Integration footer avec php
include './repetition/footer.php';
?>
    
</body>
</html>