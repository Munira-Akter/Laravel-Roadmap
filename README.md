### Essential things to do after laravel project set up
***

> -   Laravel 8 Controller namespace register in RouteServiceProvider
> -   php artisan view:clear // for clear storage view
> -   php artisan vendor:publish --tag=laravel-errors // for published error handaling template



**Route Related All Document Start From Here**

## Laravel 8 Controller namespace register in RouteServiceProvider

First of all we have to set our controller namespace in RouteServiceprovide
As a global call then we can easilly write our controller name in route file without use namespace of controller

#### EXTRA ROUTE METHOD IN RESOURCE CONTROLLER

wHEN wE NEED EXTRA ROUTE METHOD IN RESOURCE CONTROLLER WE
SHOULD WRITE EXTRS ROUTE ABOVE OF MAIN RESOURCE ROUTE

#### ROUTE NESTED

ALL SIMILLER ROUTE SHOULD BE IN GROUP ROUTE YOU CAN ADD MORE
GROUP IN MAIN GROUP USING NESTED ROUTE

#### ROUTE & FOLLDER NAME

controller folder name should be in uppercase
you should take controller name based on it's feature


#### Route Chanchin
    php artisan route:clear


#### Route Model Binding

    <!-- Single Model Binding with id coloum -->

    Route::get('/user/{user}', 'UserController@show');

    Public function show(User $user){
        return $user;
    }



    <!-- Single Model Binding with custom colum -->

    Route::get('/user/{user:slug}','UserController@show');

     Public function show(User $user){
        return $user;
    }


    <!-- Multiple route binding with custom and id colum -->

    Route:get('user/{user}/posts/{post:slug}' , 'UserController@show');

     Public function show(User $user, Post $post){
        return [
            'user' => $user,
            'post' => $post,
        ];
    }


    <!-- You can redirect a route if requested data is not found -->
    Route:get('user/{user}/posts/{post:slug}' , 'UserController@show')->missing(function(){
        return view('post.notfound');
    });




### Balde Related All Document Start From Here

#### Blade Basic

> -   @forelse @empty @endforelse
> -   @auth @guest @endauth
> -   Auth::user() // auth()->user()

#### Publish Error page

> -   php artisan vendor:publish --tag=laravel-errors

you can customized default template add your own template indesign and extend it on error page

#### title tag value pass

you have to pass title value through index method

    <title>{{ $page_title ?? 'Project Name' }}</title>

     <!-- In Controller -->
    $page_title = 'Home Page';
     return view('',compact('page_title'));
     
     
 ## Access auth user from controller method
    $request -> user();


## Validation Error Message
    required|required_with:name|required_without:name|present|fill|dimension|Password::letters()->symblos() etc


### Middelwear

When assigning middleware to a group of routes, you may occasionally need to prevent the middleware from being applied to an individual route within the group. You may accomplish this using the withoutMiddleware method:

    use App\Http\Middleware\EnsureTokenIsValid;

    Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        //
    });

    Route::get('/profile', function () {
        //
    })->withoutMiddleware([EnsureTokenIsValid::class]);
    });


You acan pass perametre in middelware handle method and pass the argument when use it

    
    
    
    
    Route::put('/post/{id}', function ($id) {
    //
    })->middleware('role:editor');
