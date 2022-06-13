@extends('layouts.nav')

@section('content')
<div class="">
    <div class="relative w-screen">
        <img class="w-screen brightness-50 h-2/5" src="images/stadium.jpg" alt="dummy-image">
        <div
            class="absolute bottom-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col content-center my-2">
            <h2 class="font-extrabold text-white mb-7 text-7xl">Welcome to E-Futbol</h2>
            <button class="bg-slate-300 rounded-md px-10 py-3 text-slate-900 font-semibold self-center">Get
                Started</button>
        </div>
    </div>
    <div class="h-96 bg-white px-32 py-5 flex flex-row my-2">
        <div class="w-screen grid grid-cols-2 grid-flow-row justify-items-center">
            <div class="flex flex-col justify-center col-span-1">
                <h3 class="font-extrabold text-black mb-7 text-7xl">Live Availability</h3>
                <p>Show live availability of the arena. Easy for booking</p>
            </div>
            <img src="icons/availability.png" class="h-52 col-span-1" />
        </div>
    </div>

    <div class="h-96 bg-white px-32 py-5 flex flex-row my-2">
        <div class="w-screen grid grid-cols-2 grid-flow-row justify-items-center">
            <img src="icons/compare.png" class="h-52 col-span-1" />
            <div class="flex flex-col justify-center col-span-1">
                <h3 class="font-extrabold text-black mb-7 text-7xl">Compare</h3>
                <p>Compare between the arenas. Easy to make decision</p>
            </div>
        </div>
    </div>

    <div class="h-96 bg-white px-32 py-5 flex flex-row my-2">
        <div class="w-screen grid grid-cols-2 grid-flow-row justify-items-center">
            <div class="flex flex-col justify-center col-span-1">
                <h3 class="font-extrabold text-black mb-7 text-7xl">Online Payment</h3>
                <p>Pay for the booking process cashlessly. Easy process</p>
            </div>
            <img src="icons/payment.png" class="h-52 col-span-1" />
        </div>
    </div>
</div>
@endsection