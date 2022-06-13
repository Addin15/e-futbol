@extends('layout.nav')

@section('content')
<body>
    <br></br>
    <div class="flex justify-center">
      <div class="rounded-2xl shadow-2xl bg-white max-w-2xl">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="padang2.jpg" alt="radiaarena"/>
            </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">Description</h5>
            <div class="border-t border-gray-200">
                 <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                             <dt class="text-sm font-medium text-gray-500">Arena name</dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Radia Arena</dd>
                        </div>
                         <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">+60 19-3456722</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Social Media</dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">https://www.facebook.com/radiaarena/</dd>
                         </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                             <dt class="text-sm font-medium text-gray-500">Opening Hours</dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">8:30-11:30pm</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">About</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                         </div>
                     </dl>
             </div>
                        <br></br>
                        <div class="flex space-x-2 justify-center">
                            <button type="button" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View Availability</button>
                        </div>
            </div>
        </div>
    </div>
            <br></br>
</body>
@endsection