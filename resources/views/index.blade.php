<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel agency</title>
    </head>
    <body>
        <ul>
            @foreach ($journeys as $journey)
            <h3>From {{$journey->departure}} to {{$journey->arrival}}</h3>
            <p>{{$journey->description}}</p>
            <ul>
                <li>Departure_date: {{$journey->departure_date}}</li>
                <li>Departure_date: {{$journey->arrival_date}}</li>
                <li>Price: {{$journey->price_per_person}}&#8364;</li>
                <li>Deadline: {{$journey->registration_deadline}}</li>
            </ul>
            @endforeach
        </ul>   
    </body>
</html>