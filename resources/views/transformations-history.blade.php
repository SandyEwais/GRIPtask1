<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Banking System</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-400">
        <div class=" bg-cyan-700 w-full p-4 shadow-2xl mb-8">
            <div class="flex justify-center space-x-32">
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('home')}}">Home</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('view-customers')}}">View Customers</a>
                <a class="font-bold text-white text-2xl hover:text-gray-300" href="{{route('transformations-history')}}">Transformations History</a>
            </div>
        </div>
        <div class="flex justify-center items-center h-auto">
            <div class="w-4/5 h-auto rounded-md shadow-2xl">
                
                <div class="">
                    <table class="w-full text-md text-left text-gray-900">
                        <thead class="text-md text-yellow-600 uppercase bg-gray-300">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Sender
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Receiver
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Amount
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transformations->reverse() as $transformation)
                                <tr class="bg-white border-b hover:bg-gray-200">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {{$transformation->sender}}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{$transformation->receiver}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$transformation->amount}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$transformation->created_at}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            
        </div>
        
        {{ $transformations->links() }}
    </body>
</html>




