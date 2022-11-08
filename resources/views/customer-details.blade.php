<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Banking System</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-400">
        <div class="fixed bg-cyan-700 w-full p-4 shadow-2xl mb-8">
            <div class="flex justify-center space-x-32">
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('home')}}">Home</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('view-customers')}}">View Customers</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('transformations-history')}}">Transformations History</a>
            </div>
        </div>
        <div class="flex justify-center items-center h-screen">
            <div class="flex flex-col items-center w-auto h-auto bg-white p-16 rounded-md shadow-2xl">
                <p class="text-cyan-600 font-extrabold text-2xl mb-3">Account Number: <span class="text-gray-600">{{$customer->account_number}}</span></p>
                <p class="text-cyan-600 font-extrabold text-2xl mb-3">Customer Name: <span class="text-gray-600">{{$customer->name}}</span></p>
                <p class="text-cyan-600 font-extrabold text-2xl mb-3">Email: <span class="text-gray-600">{{$customer->email}}</span></p>
                <p class="text-cyan-600 font-extrabold text-2xl mb-3">Balance: <span class="text-gray-600">${{$customer->balance}}</span></p>
                <a href="{{route('transferForm',$customer->id)}}"><button class="rounded bg-yellow-500 text-white text-lg font-bold p-3 hover:bg-yellow-600">Transfer Money</button></a>
            </div>
        </div>
    </body>
</html>