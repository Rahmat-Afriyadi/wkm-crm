
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
                            Tanggal Janji Bayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat Tujuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Kartu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trxs as $item)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->no_mesin}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->tgl_byr}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->nama_cs}}
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->kirim_ke == 1)
                                <p>rumah</p>
                            @elseif ($item->kirim_ke == 2)
                                <p>kantor</p>
                            @else
                                <p>Ahhas</p>
                                
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{$item->card_1}}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</main>
</x-layout>
