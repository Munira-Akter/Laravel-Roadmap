# ESSENTIAL THINGS TO DO AFTER INSTALL LARAVEL PROJECT

> -   Laravel 8 Controller namespace register in RouteServiceProvider
> -   php artisan view:clear // for clear storage view
> -   php artisan vendor:publish --tag=laravel-errors // for published error handaling template

# Route Related All Document Start From Here

## Laravel 8 Controller namespace register in RouteServiceProvider

First of all we have to set our controller namespace in RouteServiceprovide
As a global call then we can easilly write our controller name in route file without use namespace of controller

## EXTRA ROUTE METHOD IN RESOURCE CONTROLLER

wHEN wE NEED EXTRA ROUTE METHOD IN RESOURCE CONTROLLER WE
SHOULD WRITE EXTRS ROUTE ABOVE OF MAIN RESOURCE ROUTE

## ROUTE NESTED

ALL SIMILLER ROUTE SHOULD BE IN GROUP ROUTE YOU CAN ADD MORE
GROUP IN MAIN GROUP USING NESTED ROUTE

## ROUTE & FOLLDER NAME

controller folder name should be in uppercase
you should take controller name based on it's feature

# Route Related All Document End From Here

# Balde Related All Document Start From Here

## Blade Basic

> -   @forelse @empty @endforelse
> -   @auth @guest @endauth
> -   Auth::user() // auth()->user()

## Publish Error page

> -   php artisan vendor:publish --tag=laravel-errors

you can customized default template add your own template indesign and extend it on error page

## title tag value pass

you have to pass title value through index method

    <title>{{ $page_title ?? 'Project Name' }}</title>

     <!-- In Controller -->
    $page_title = 'Home Page';
     return view('',compact('page_title'));
