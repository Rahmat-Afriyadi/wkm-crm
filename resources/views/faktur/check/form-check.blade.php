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

            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <a href="/faktur/check/alasan-2">Table alasan check 2</a>
            </button>

            <form action="{{ route('faktur.detail_post_barcode_check') }}" method="POST">
                @csrf
                <div class="space-y-12">

                

                    <div class="border-b border-gray-900/10 pb-12">

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12 justify-evenly">

                            <div class="sm:col-span-12">
                                <div class="grid grid-cols-12 gap-x-4 ">
                                    <div class="sm:col-span-12">
                                        <label for="no_mesin" class="block text-sm font-medium leading-6 text-gray-900">Nomor Mesin</label>
                                        <div class="mt-2">
                                            <input  type="text" name="no_mesin" id="no_mesin" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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