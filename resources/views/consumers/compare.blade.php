@extends('layouts.nav')

@section('content')
<div class="py-10 px-28">
    <!-- Choose section -->
    <div class="grid grid-cols-3 justify-items-center">
        <div class="col-span-1">
            <button class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center place-items-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="First"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>
        </div>
        <div class="col-span-1 self-center">
            <img src="/icons/compare_icon.png" alt="Compare" class="h-20 w-20 object-cover" />
        </div>
        <div class="col-span-1 content-center flex flex-col justify-center">
            <button class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="Second"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>

        </div>
    </div>

    <!-- Compare section -->
    <!-- Number of fields -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            3
        </div>
        <div class="col-span-1 self-center  font-bold">
            Number of fields
        </div>
        <div class="col-span-1">
            1
        </div>
    </div>

    <!-- Type of grass -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            Perennial ryegrass
        </div>
        <div class="col-span-1 self-center  font-bold">
            Type of grass
        </div>
        <div class="col-span-1">
            Tall fescue
        </div>
    </div>

    <!-- Number of lights -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            2-4
        </div>
        <div class="col-span-1 self-center font-bold">
            Number of lights
        </div>
        <div class="col-span-1">
            5
        </div>
    </div>

    <!-- Subs bench -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            Provided
        </div>
        <div class="col-span-1 self-center font-bold">
            Substitution Bench
        </div>
        <div class="col-span-1">
            Not Provided
        </div>
    </div>

    <!-- Day Price -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            RM200
        </div>
        <div class="col-span-1 self-center font-bold">
            Day Price
        </div>
        <div class="col-span-1">
            RM240
        </div>
    </div>

    <!-- Night Price -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            RM220
        </div>
        <div class="col-span-1 self-center font-bold">
            Night Price
        </div>
        <div class="col-span-1">
            RM250
        </div>
    </div>

    <!-- Refferee Services -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            Not Provided
        </div>
        <div class="col-span-1 self-center font-bold">
            Refferee Services
        </div>
        <div class="col-span-1">
            Provided
        </div>
    </div>

    <!-- Spectator Seats -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            Not Provided
        </div>
        <div class="col-span-1 self-center font-bold">
            Spectator Seats
        </div>
        <div class="col-span-1">
            Not Provided
        </div>
    </div>

</div>
@endsection