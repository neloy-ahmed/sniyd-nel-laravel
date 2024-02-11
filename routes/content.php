<!-- git -->

<!-- Migration -->

<!-- Model -->

<!-- Form validation -->

<!-- Blade -->

<!-- Displaying Data -->

Route::get('/send-data', function () {
    $greet = "Hello Everyone";
    return view('welcome', compact('greet'));
});

<!-- You are not limited to displaying the contents of the variables passed to the view. You may also 
echo the results of any PHP function. In fact, you can put any PHP code you wish inside of a Blade echo statement: -->

The current UNIX timestamp is {{ time() }}.

<!-- Blade Directives -->

<!-- If Statements -->

Route::get('/send-data', function () {
    $records = ["Hello Everyone"];
    return view('welcome', compact('records'));
});

@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

<!-- Including Subviews -->

<!-- Raw PHP -->

@php
    $counter = 1;
@endphp

<!-- Comments -->

{{-- This comment will not be present in the rendered HTML --}}

{{--
    @if (count($records) === 1)
    I have one record!
    @elseif (count($records) > 1)
    I have multiple records!
    @else
    I don't have any records!
    @endif
--}}

<!-- https://laravel.com/docs/10.x/blade#components -->

<!-- Eloquent, an object-relational mapper (ORM) -->

<!-- When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table. 
In addition to retrieving records from the database table, Eloquent models allow you to insert, 
update, and delete records from the table as well. -->

<!-- Generating Model Classes -->

php artisan make:model Flight

php artisan make:model Flight --migration

<!-- Eloquent Model Conventions -->

<!-- Table Names -->

<!-- By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified.
 So, in this case, Eloquent will assume the Flight model stores records in the flights table, while an AirTrafficController model would 
 store records in an air_traffic_controllers table. -->

 <!-- If your model's corresponding database table does not fit this convention, 
 you may manually specify the model's table name by defining a table property on the model: -->

 <!-- Timestamps -->

 <!-- Retrieving Models -->

 foreach (Flight::all() as $flight) {
    echo $flight->name;
}


<!-- Building Queries -->

$flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();