<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Banking System</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-300">
        <div class=" bg-cyan-700 w-full p-4 shadow-2xl mb-8">
            <div class="flex justify-center space-x-32">
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('home')}}">Home</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('view-customers')}}">View Customers</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('transformations-history')}}">Transformations History</a>
            </div>
        </div>
        <div class="flex justify-center items-center h-auto">
            <div class="flex flex-col w-4/5 h-auto mt-28 bg-white p-28 rounded-md shadow-2xl items-center justify-center">
                <img src="{{asset('images/My project.png')}}" alt="logo" class="w-24 h-24">
                <p class="text-cyan-600 font-extrabold text-[50px]">Banking <span class="text-yellow-400 font-extrabold text-[50px] italic">System</span></p>
                
            </div>
        </div>
    </body>
</html>
