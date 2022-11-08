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
            <div class="w-auto h-auto bg-white p-16 rounded-md shadow-2xl">
                <form action="{{route('transfer')}}" method="POST" class="w-full max-w-lg">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Sender
                        </label>
                        <input name="sender" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" value="{{$sender->name}}">
                        @error('sender')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Receiver
                        </label>
                        <select name="receiver" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Select</option>
                            @foreach ($customers as $customer)
                                <option>{{$customer->name}}</option>
                            @endforeach
                        </select>
                        @error('receiver')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          Amount
                        </label>
                        <input name="amount" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="amount of money">
                        @error('amount')
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                        @if (session('error'))
                            <p class="text-red-500 text-xs italic">{{session('error')}}</p>
                        @endif
                      </div>
                    </div>
                    <button class="rounded bg-yellow-500 text-white p-3 hover:bg-yellow-600">Submit</button>
                  </form>
            </div>
        </div>
    </body>
</html>
