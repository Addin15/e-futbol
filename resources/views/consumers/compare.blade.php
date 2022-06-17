@extends('layouts.nav')

@section('content')
<div class="py-10 px-28">
    <h1 class="font-bold text-4xl text-center mt-2 mb-20">Compare Arena</h1>
    <!-- Choose section -->
    <div class="grid grid-cols-3 justify-items-center mb-12">
        <div class="col-span-1">
            @if($first)
            <button id="changeFirst" class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center place-items-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="First"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>
            @else
            <img src="/icons/add.png" alt="Second" class="h-48 w-48 object-cover cursor-pointer" id="btnFirst" />
            @endif
        </div>
        <div class="col-span-1 self-center">
            <img src="/icons/compare_icon.png" alt="Compare" class="h-20 w-20 object-cover" />
        </div>
        <div class="col-span-1 content-center flex flex-col justify-center">
            @if($second)
            <button id="changeSecond" class="flex flex-auto border-solid border border-black px-4 py-2 w-44 m-auto">
                <img src="/icons/change.png" alt="Change Icon" class="h-5 w-5 mx-2">
                <div class="text-center">Change Arena</div>
            </button>
            <img src="/dummy/dummy.jpg" alt="Second"
                class="h-96 w-96 object-cover border-solid border-blue-500 border-2 mt-2" />
            <h6 class="text-center font-bold text-lg my-4">Radia Arena</h6>
            @else
            <img src="/icons/add.png" alt="Second" class="h-48 w-48 object-cover cursor-pointer" id="btnSecond" />
            @endif
        </div>
    </div>

    <!-- Modal Select Arena -->
    <!-- Modal content -->
    <div id="selectArena" style="display: none;"
        class="flex-row content-end bg-white px-8 py-4 self-center z-10 fixed flex h-2/5 w-1/2 bottom-1/3 left-1/4 border-2 border-solid rounded-2xl border-color-primary">

        <!-- Modal content -->
        <div class="modal-content m-auto">
            <div class="close font-bold text-lg text-end">Close</div>
            <input type="text" class="w-full h-8 self-center my-4" placeholder="Search...">
        </div>
        <select id="arenaSelector" name="arena" class="w-full mb-10" multiple>
            @foreach ($all as $arena)
            <option value="{{ $arena->id }}">{{ $arena->arena_name }}</option>
            @endforeach
        </select>

        <div class="flex items-end">
            <button id="doneselect" type="submit"
                class="m-auto place-self-end bg-color-primary rounded-md px-4 py-1 text-white">Select</button>
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

<script>
var currentFirst = 1;
var currentSecond = 2;

// Get the modal
var modal = document.getElementById("selectArena");

var selectFor = -1;

// Get the button that opens the modal
var btnFirst = document.getElementById("btnFirst");
var changeFirst = document.getElementById("changeFirst");
var btnSecond = document.getElementById("btnSecond");
var changeSecond = document.getElementById("changeSecond");
var btnSelect = document.getElementById("doneselect");

var selector = document.getElementById("arenaSelector");

var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal


btnFirst.onclick = display(0);
changeFirst.onclick = display(0);
btnSecond.onclick = display(1);
changeSecond.onclick = display(1);

function display(val) {
    selectFor = val;
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When click select
btnSelect.onclick = function() {

    var selected = selector.value;

    alert(selectFor);

    if (selectFor == 0) {
        window.open('/compare/' + selected, "_self");
    } else if (selectFor == 1) {
        if (currentFirst == null) {
            window.open('/compare/' + selected, "_self");
        } else {
            window.open('/compare/' + currentFirst + '/' + selected, "_self");
        }
    }
}

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
</script>
@endsection