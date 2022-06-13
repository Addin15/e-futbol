@extends('layouts.nav')

@section('content')
<div class="py-10 px-28">
    <!-- Choose section -->
    <div class="grid grid-cols-3 justify-items-center mb-12">
        <div class="col-span-1">
            @if($first)
            <button class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center place-items-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="First"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>
            @else
            <img src="/icons/add.png" alt="Second" class="h-48 w-48 object-cover cursor-pointer" onclick="" />
            @endif
        </div>
        <div class="col-span-1 self-center">
            <img src="/icons/compare_icon.png" alt="Compare" class="h-20 w-20 object-cover" />
        </div>
        <div class="col-span-1 content-center flex flex-col justify-center">
            @if($second)
            <button class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="Second"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>
            @else
            <img src="/icons/add.png" alt="Second" class="h-48 w-48 object-cover cursor-pointer" onclick="" />
            @endif
        </div>
    </div>

    <!-- Compare section -->
    <!-- Number of fields -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->number_field)
            {{ $first->number_field }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center  font-bold">
            Number of fields
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->number_field)
            {{ $second->number_field }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Type of grass -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->grass_type)
            {{ $first->grass_type }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center  font-bold">
            Type of grass
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->grass_type)
            {{ $second->grass_type }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Number of lights -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->number_light)
            {{ $first->number_light }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Number of lights
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->number_light)
            {{ $second->number_light }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Subs bench -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->subs_bench)
            {{ $first->subs_bench }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Substitution Bench
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->subs_bench)
            {{ $second->subs_bench }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Day Price -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->day_price)
            {{ $first->day_price }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Day Price
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->day_price)
            {{ $second->day_price }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Night Price -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->night_price)
            {{ $first->night_price }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Night Price
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->night_price)
            {{ $second->night_price }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Refferee Services -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->refferee)
            {{ $first->refferee }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Refferee Services
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->refferee)
            {{ $second->refferee }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

    <!-- Spectator Seats -->
    <div class="grid grid-cols-3 justify-items-center mb-6">
        <div class="col-span-1">
            @if($first)
            @if($first->spectators_seat)
            {{ $first->spectators_seat }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
        <div class="col-span-1 self-center font-bold">
            Spectator Seats
        </div>
        <div class="col-span-1">
            @if($second)
            @if($second->spectators_seat)
            {{ $second->spectators_seat }}
            @else
            None
            @endif
            @else
            -
            @endif
        </div>
    </div>

</div>
@endsection