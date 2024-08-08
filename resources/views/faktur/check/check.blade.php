
<x-layout>
    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nomor Mesin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan Check  1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan Check  2
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trxs as $item)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->no_mesin}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->nama_cs}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->alsn_blm_byr}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->alasan_check_2}}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</main>
</x-layout>
