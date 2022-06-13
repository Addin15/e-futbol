@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="relative w-screen">
            <img class="w-screen brightness-100 h-96 object-cover" src="images/stadium.jpg" alt="dummy-image">

        </div>


        <div class="grid grid-cols-4 p-2 justify-items-center  h-full w-screen my-10">

            <div class="bg-sky-100 rounded-lg px-5 py-2">
                <img class="object-cover h-80 w-60 " src="images/radiarena.jpg" alt="dummy-image">
                <p class="text-center">Radia Arena</p>

                <div class="grid grid-rows-1 grid-flow-col gap-4">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-slate-50 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-slate-50 hover:shadow-lg focus:bg-slate-50 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-50 active:shadow-lg transition duration-150 ease-in-out">Details</button>
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                        Now</button>
                </div>
            </div>

            <div class="bg-sky-100 rounded-lg px-5 py-2">
                <img class="object-cover h-80 w-60 " src="images/arena26.jpg" alt="dummy-image">
                <p class="text-center">Arena 26</p>

                <div class="grid grid-rows-1 grid-flow-col gap-4">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-slate-50 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-slate-50 hover:shadow-lg focus:bg-slate-50 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-50 active:shadow-lg transition duration-150 ease-in-out">Details</button>
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                        Now</button>
                </div>
            </div>

            <div class="bg-sky-100 rounded-lg px-5 py-2">
                <img class="object-cover h-80 w-60 " src="images/rhinokv.jpg" alt="dummy-image">
                <p class="text-center">Rhino KV</p>

                <div class="grid grid-rows-1 grid-flow-col gap-4">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-slate-50 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-slate-50 hover:shadow-lg focus:bg-slate-50 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-50 active:shadow-lg transition duration-150 ease-in-out">Details</button>
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                        Now</button>
                </div>
            </div>

            <div class="bg-sky-100 rounded-lg px-5 py-2">
                <img class="object-cover h-80 w-60 " src="images/amd.jpg" alt="dummy-image">
                <p class="text-center">Akademi Mokhtar Dahari</p>

                <div class="grid grid-rows-1 grid-flow-col gap-4">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-slate-50 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-slate-50 hover:shadow-lg focus:bg-slate-50 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-50 active:shadow-lg transition duration-150 ease-in-out">Details</button>
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                        Now</button>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection