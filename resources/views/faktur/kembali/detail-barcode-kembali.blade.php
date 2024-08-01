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


            <form action="{{ route('faktur.update_kartu_kembali') }}" method="POST">
                @csrf
                <div class="space-y-12">
                    <input type="hidden" name="no_mesin" value="{{ $i->no_mesin }}">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-5 grid grid-cols-12 gap-x-6 gap-y-4 sm:grid-cols-12 justify-evenly">
                            <h2 class="col-span-5 text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                            <h2 class="col-span-2 text-base font-semibold leading-7 text-gray-900"></h2>
                            <h2 class="col-span-5 font-semibold leading-7 text-gray-900 text-[50px]">{{$i->kurir->nama_kurir}}</h2>
                        </div>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12 justify-evenly">

                            <div class="sm:col-span-5">
                                <div class="grid grid-cols-12 gap-x-4 ">
                                    <div class="sm:col-span-6">
                                        <label for="no_mesin" class="block text-sm font-medium leading-6 text-gray-900">No Mesin</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{ $i->no_mesin }}" name="no_mesin" id="no_mesin" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="no_hp" class="block text-sm font-medium leading-6 text-gray-900">Nomor Hp</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->no_hp}}" name="no_hp" id="no_hp" autocomplete="family-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-12">
                                        <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->nama_cs}}" name="nama_cs" id="nama_cs" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-12">
                                        <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->alamat}}" name="alamat" id="alamat" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="kota" class="block text-sm font-medium leading-6 text-gray-900">Kota</label>
                                        <div class="mt-2">
                                            <input disabled  name="kota" type="text" value="{{$i->kota}}" id="kota" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="rw" class="block text-sm font-medium leading-6 text-gray-900">RW</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->rw}}" id="rw" autocomplete="family-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="kelurahan" class="block text-sm font-medium leading-6 text-gray-900">Kelurahan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->kel}}" name="kelurahan" id="kelurahan" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="kecamatan" class="block text-sm font-medium leading-6 text-gray-900">Kecamatan</label>
                                        <div class="mt-2">
                                            <input type="text" disabled value="" name="kecamatan" id="kecamatan" autocomplete="family-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-span-2">
                            </div>

                            <div class="sm:col-span-5">
                                <div class="grid grid-cols-12 gap-x-4">
                                    <div class="sm:col-span-12">
                                        <label for="perusahaan" class="block text-sm font-medium leading-6 text-gray-900">Perusahaan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->nama_pt}}" name="perusahaan" id="perusahaan" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="pekerjaan" class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->pekerjaan}}" id="pekerjaan" autocomplete="given-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-6">
                                        <label for="jabatan" class="block text-sm font-medium leading-6 text-gray-900">Jabatan</label>
                                        <div class="mt-2">
                                            <input disabled  type="text" value="{{$i->jabatan}}" name="jabatan" id="jabatan" autocomplete="family-name" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-12">
                                        <label for="alasan" class="block text-sm font-medium leading-6 text-gray-900">Alasan</label>
                                        <div class="mt-2">
                                            <select id="alasan" name="alasan" value="" autocomplete="alasan-name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                <option value="" disabled selected>Silahkan Pilih Alasan</option>
                                                <option value="Konsumen tidak punya uang">Konsumen tidak punya uang</option>
                                                <option value="Rumah Kosong">Rumah Kosong</option>
                                                <option value="Konsumen tidak menitipkan uang">Konsumen tidak menitipkan uang</option>
                                                <option value="Konsumen Menodongkan Senjata Tajam">Konsumen Menodongkan Senjata Tajam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="sm:col-span-4">
                            </div>

                            <div class="col-span-full">
                                <label for="nama-customer" class="block text-sm font-medium leading-6 text-gray-900">Nama Customer</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->nama_cs}}"  name="nama-customer" id="nama-customer" autocomplete="nama-customer" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="alamat_bantuan" class="block text-sm font-medium leading-6 text-gray-900">Alamat Bantuan</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->alamat_bantuan}}" name="alamat_bantuan" id="alamat_bantuan" autocomplete="alamat_bantuan" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            
                            <div class="col-span-full">
                                <label for="nama-motor" class="block text-sm font-medium leading-6 text-gray-900">nama motor</label>
                                <div class="mt-2">
                                    <input disabled  type="text" value="{{$i->nm_mtr}}" name="nama-motor" id="nama-motor" autocomplete="alamat" class="px-2 block w-full bg-gray-200 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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