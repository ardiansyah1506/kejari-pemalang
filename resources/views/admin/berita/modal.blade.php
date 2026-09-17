<!-- Modal untuk Tambah Berita -->
<div id="modal" class="fixed inset-0 flex items-center justify-center hidden backdrop-blur-sm bg-black/30 transition-all duration-300 z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg px-6 transform transition-all">
        <div class="py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 id="modal-title" class="text-xl font-bold text-gray-800">Tambah Berita</h2>
            <button type="button" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center" onclick="toggleModal()">
                &#10005;</button>
        </div>
        <form id="form-berita" method="POST" enctype="multipart/form-data" class="py-4">
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="mb-4">
                <label class="font-semibold text-sm text-gray-700 block mb-1.5">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="border border-gray-300 rounded-xl px-3 py-2.5 text-sm w-full focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" required />
            </div>

            <div class="mb-4">
                <label class="font-semibold text-sm text-gray-700 block mb-1.5">Isi Berita</label>
                <div id="editor" class="border border-gray-300 rounded-xl px-3 py-2 text-sm w-full focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all" style="height: 120px;"></div>
                <input type="hidden" name="deskripsi" id="deskripsi" />
            </div>
            
            <div class="mb-2">
                <label for="foto" class="block mb-2 text-sm font-semibold text-gray-700">Foto</label>
                <div class="flex items-center justify-center w-full">
                    <label for="foto" class="flex flex-col items-center justify-center w-full h-28 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
                        <div class="flex flex-col items-center justify-center pt-5 pb-2">
                            <svg class="w-6 h-6 mb-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-1 text-sm text-gray-500">
                                <span class="font-semibold text-[#228d81]">Click to upload</span> or drag
                                and drop
                            </p>
                        </div>
                        <input id="foto" name="foto" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            
            <small id="link" class="flex w-full justify-end text-sm text-gray-500"></small> 
            
            <div class="pt-3 flex justify-end gap-2 border-t border-gray-100 mt-2">
                <button type="button" class="px-5 py-2.5 text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 font-medium transition-colors" onclick="toggleModal()">Batal</button>
                <button type="submit" class="px-5 py-2.5 text-white bg-[#228d81] rounded-xl hover:bg-[#1a6b62] font-medium transition-colors shadow-md hover:shadow-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>
    


