
<x-layout>
    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/stock-card/create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-9 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
        
        <Br>
        <Br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nomor Kartu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Expired
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Cetak
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stock_card as $item)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->no_kartu}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->tgl_expired}}
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->status ==0)
                                <p>Baru Vendor</p>
                            @elseif ($item->status == 1)
                                <p>Terpakai</p>
                            @elseif ($item->status == 2)
                                <p>Sudah Bayar</p>
                            @elseif ($item->status == 3)
                                <p>Kembali</p>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->tgl_cetak }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $stock_card->links()  }}
            </div>
            
        </div>
    </div>
</main>
</x-layout>
