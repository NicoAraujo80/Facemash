<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <hr class="invisible">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="row">
                    <a style="background-color: red;" class="col-sm-5 text-center" href="{{ route('update', [$profiles[0]->id, $profiles[1]->id]) }}">
                        <img src="{{ $profiles[0]->imageUrl }}">
                        <h1>{{ $profiles[0]->name }}</h1>
                        <h3>{{ $profiles[0]->eloRating }}</h3>
                    </a>
                    <div class="col-sm-2 text-center">
                        <h1>Vs.</h1>
                    </div>
                    <a style="background-color: blue;" class="col-sm-5 text-center" href="{{ route('update', [$profiles[1]->id, $profiles[0]->id]) }}">
                        <img src="{{ $profiles[1]->imageUrl }}">
                        <h1>{{ $profiles[1]->name }}</h1>
                        <h3>{{ $profiles[1]->eloRating }}</h3>
                    </a>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
