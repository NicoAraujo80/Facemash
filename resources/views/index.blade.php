<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
        <hr class="invisible">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="row">
                    
                    <div style="background-color: red;" class="col-sm-5 text-center">
                        <img src="{{ $profileOne->imageUrl }}">
                        <h1>{{ $profileOne->name }}</h1>
                        <h3>{{ $profileOne->eloRating }}</h3>
                    </div>
                    <div class="col-sm-2 text-center">
                        <h1>Vs.</h1>
                    </div>
                    <div style="background-color: blue;" class="col-sm-5 text-center">
                        <img src="{{ $profileTwo->imageUrl }}">
                        <h1>{{ $profileTwo->name }}</h1>
                        <h3>{{ $profileTwo->eloRating }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h1 class="text-center">{{ $firstElo }} - {{ $randomElo }}</h1>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
