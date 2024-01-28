Route::get('/test', [UserController::class, 'test']);

// Basic Routing

Route::get('/greeting', function () {
    return 'Hello World';
});

// The Default Route Files

Route::get('/user', [UserController::class, 'index']);

// Build a simple route and controller to display a basic view.

Route::get('/greet', [UserController::class, 'greet']);

// Dependency Injection
Route::get('/users', function (Request $request) {
    // ...
});

// View Routes

Route::view('/welcome', 'welcome');

// Route Parameters

// Required Parameters

Route::get('/teacher/{id}', function ($id) {
    return 'Teacher '.$id;
});

// You may define as many route parameters as required by your route:

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    // ...
});

// Optional Parameters

Route::get('/cricketer/{name?}', function ($name = 'Sakib-Al-Hasan') {
    return $name;
});

// Named Routes

Route::get('/user/profile', function () {
    // return "from user/profile";
})->name('profile');


// You may also specify route names for controller actions:

Route::get(
    '/user/profile',
    [UserController::class, 'profileShow']
)->name('profile');

// Route Groups
// Route Prefixes

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
        return 'from admin/users';
    });
});
