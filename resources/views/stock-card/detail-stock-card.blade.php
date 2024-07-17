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


            <form action="{{ route('faktur.barcode_bawa', ['id'=>$i->no_mesin]) }}" method="POST">
                @method('put')
                @csrf
                <div class="space-y-12">

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12 justify-evenly">

                            <div class="sm:col-span-5">
                                <div class="grid grid-cols-12 gap-x-4 ">
                                    <div class="sm:col-span-6">
                                        <label for="no_mesin" class="block text-sm font-medium leading-6 text-gray-900">No Mesin</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{ $i->no_mesin }}" name="no_mesin" id="no_mesin" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="no-tanda-terima" class="block text-sm font-medium leading-6 text-gray-900">Nomor Tanda Terima</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->no_tt}}" name="no-tanda-terima" id="no-tanda-terima" autocomplete="family-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-12">
                                        <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->alamat}}" name="alamat" id="alamat" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="rt" class="block text-sm font-medium leading-6 text-gray-900">RT</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->rt}}" id="rt" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="rw" class="block text-sm font-medium leading-6 text-gray-900">RW</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->rw}}" id="rw" autocomplete="family-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="kelurahan" class="block text-sm font-medium leading-6 text-gray-900">Kelurahan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->kel}}" name="kelurahan" id="kelurahan" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="kecamatan" class="block text-sm font-medium leading-6 text-gray-900">Kecamatan</label>
                                        <div class="mt-2">
                                            <input type="text" disabled value="" name="kecamatan" id="kecamatan" autocomplete="family-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-span-2">
                            </div>

                            <div class="sm:col-span-5">
                                <div class="grid grid-cols-12 gap-x-4">
                                    <div class="sm:col-span-12">
                                        <label for="no_kartu" class="block text-sm font-medium leading-6 text-gray-900">Nomor Kartu</label>
                                        <div class="mt-2">
                                            <input  type="text" name="no_kartu" id="no_kartu" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-12">
                                        <label for="perusahaan" class="block text-sm font-medium leading-6 text-gray-900">Perusahaan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->nama_pt}}" name="perusahaan" id="perusahaan" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="pekerjaan" class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->pekerjaan}}" id="pekerjaan" autocomplete="given-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="jabatan" class="block text-sm font-medium leading-6 text-gray-900">Jabatan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->jabatan}}" name="jabatan" id="jabatan" autocomplete="family-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="sm:col-span-4">
                            </div>

                            <div class="col-span-full">
                                <label for="nama-customer" class="block text-sm font-medium leading-6 text-gray-900">Nama Customer</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->nama_cs}}"  name="nama-customer" id="nama-customer" autocomplete="nama-customer" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->alamat}}" name="alamat" id="alamat" autocomplete="alamat" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            
                            <div class="col-span-full">
                                <label for="nama-motor" class="block text-sm font-medium leading-6 text-gray-900">nama motor</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->nm_mtr}}" name="nama-motor" id="nama-motor" autocomplete="alamat" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1">
                            <label for="kota" class="block text-sm font-medium leading-6 text-gray-900">kota</label>
                            <div class="mt-2">
                                <input disabled  type="text" value="{{$i->kota}}" name="kota" id="kota" autocomplete="address-level2" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="kurir" class="block text-sm font-medium leading-6 text-gray-900">kurir</label>
                            <div class="mt-2">
                                <select id="kurir" name="kurir" value="" autocomplete="kurir-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="" disabled selected>Silahkan Pilih Kurir</option>
                                    @foreach ($kurir as $item)
                                        <option value="{{ $item->kode_kurir }}">{{ $item->nama_kurir }}</option>
                                    @endforeach
                                </select>
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