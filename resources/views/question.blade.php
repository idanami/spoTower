<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/question.css">
    <title>spoTower</title>
</head>
<body>
    <main class="container">
        <form class="form-container" action="addQuestion" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="zip-code">
                <input type="text" class="zip-code__input" name="zip_code" placeholder="Enter Your Zip Code">
                <img class="zip-code__icon" src="https://img.icons8.com/material-rounded/24/000000/marker.png"/>
            </div>
            <div class="age-container">
                <div class="age-container__text">Your age</div>
                <div class="age-container__lists">
                    <div class="age-container__list" id="18">&#60;18</div>
                    <div class="age-container__list" id="19-24">19-24</div>
                    <div class="age-container__list" id="25-34">25-34</div>
                    <div class="age-container__list" id="35-49">35-49</div>
                    <div class="age-container__list" id="50-64">50-64</div>
                    <div class="age-container__list" id="65">65&#62;</div>
                    <input type="hidden" id="input-age_option" value="0" name="age_option">
                </div>
            </div>
            <div class="customer-options">
                <div class="customer-option">
                    <input type="checkbox" name="married_option" id="married_option">
                    <label for="married_option">i'm married</label>
                </div>
                <div class="customer-option">
                    <input type="checkbox" name="vehicles_option" id="vehicles_option">
                    <label for="vehicles_option">i own multiple vehicles</label>
                </div>
                <div class="customer-option">
                    <input type="checkbox" name="insured_option" id="insured_option">
                    <label for="insured_option">i'm currently insured</label>
                </div>
                <div class="customer-option">
                    <input type="checkbox" name="home_option" id="home_option">
                    <label for="home_option">i own a home</label>
                </div>
            </div>
            <div class="submit-option">
                <input type="submit" value="GET QUOTES">
            </div>
        </form>
    </main>
    <script src="js/app.js"></script>
</body>
</html>
