<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/answer.css">
    <title>spoTower</title>
</head>
<body>

    <main class="container-answer">
        @foreach ($companies as $company)
            @if ($company->zip_code_min < $zipCode && $company->zip_code_max > $zipCode)
                <div class="company">
                    <div class="company-img">
                        <img src="{{ $company->img }}" alt="">
                    </div>
                    <h2 class="company-name">{{ $company->name }}</h2>
                    <div class="company-description" name="{{$company->id}}">{{ $company->description }}</div>
                    <div class="divider">
                        <i class="fa fa-chevron-circle-down showAndHide" id="{{ $company->id }}"></i>
                        <hr class="solid">
                    </div>
                </div>

            @endif

        @endforeach
    </main>
    <script src="js/answer.js"></script>
</body>
</html>
