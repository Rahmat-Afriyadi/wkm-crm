<x-layout>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>- {{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('stock_card.store') }}" method="POST">
                @csrf
                <div class="space-y-12">

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12 justify-evenly">

                            <div class="sm:col-span-12">
                                <div class="grid grid-cols-12 gap-x-4 ">
                                    <div class="sm:col-span-12">
                                        <label for="no_kartu" class="block text-sm font-medium leading-6 text-gray-900">Nomor Kartu</label>
                                        <div class="mt-2">
                                            <input  type="text" name="no_kartu" id="no_kartu" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-12">
                                        <label for="tgl-bayar" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Tgl Bayar</label>
                                        <div class="relative mt-2">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div>
                                            <input id="datepicker-autohide" value="" datepicker-format="yyyy-mm-dd" name="tgl_cetak" datepicker datepicker-autohide type="text" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-9" placeholder="Select date">
                                        </div>
                                    </div>
        
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>