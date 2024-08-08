
<x-layout>
    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
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
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trxs as $item)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->tgl_byr}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->nama_cs}}
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->kirim_ke ==1)
                                <p>rumah</p>
                            @elseif ($item->kirim_ke == 2)
                                <p>kantor</p>
                            @else
                                <p>Ahhas</p>
                            @endif
                            {{-- {{$item->kirim_ke == 1 ? "Rumah" : $item->kirim_ke == 2 ? "Kantor" : $item->kirim_ke == 3 ? "AHHAS" : ""}} --}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/faktur/barcode-bawa/{{$item->no_mesin}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</main>
</x-layout>
