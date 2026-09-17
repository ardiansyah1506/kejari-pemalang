<div id="modal" class="fixed inset-0 flex items-center justify-center hidden backdrop-blur-sm bg-black/30 transition-all duration-300 z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md transform transition-all">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 id="modal-title" class="text-xl font-bold text-gray-800">Tambah Jadwal Sidang</h2>
            <button type="button" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center" onclick="toggleModal('modal')">
                &#10005;
            </button>
        </div>

        <form id="form-berita" method="POST" action="{{ route('admin.sidang.store') }}">
            @csrf
            <div class="px-6 py-5 space-y-4">
                <input type="text" name="perkara" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Perkara">
                <input type="text" name="agenda" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Agenda">
                <input type="date" name="tanggal_sidang" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Tanggal Sidang">
                <input type="text" name="penggugat" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Penggugat">
                <input type="text" name="tergugat" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Tergugat">
                <textarea name="keterangan" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" placeholder="Keterangan"></textarea>
            </div>
            <div class="px-6 py-4 flex justify-end gap-2 border-t border-gray-100">
                <button type="button" class="px-5 py-2.5 text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 font-medium transition-colors" onclick="toggleModal('modal')">Batal</button>
                <button type="submit" class="px-5 py-2.5 text-white bg-[#228d81] rounded-xl hover:bg-[#1a6b62] font-medium transition-colors shadow-md hover:shadow-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

<div id="modal1" class="fixed inset-0 flex items-center justify-center hidden backdrop-blur-sm bg-black/30 transition-all duration-300 z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg transform transition-all">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 id="modalTitle" class="text-xl font-bold text-gray-800">Edit Jadwal Sidang</h3>
            <button onclick="toggleModal('modal1')" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center">&#10005;</button>
        </div>

        <form id="editForm" action="" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" class="w-full">
            <div class="px-6 py-5 space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Perkara</label>
                    <input type="text" name="perkara" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Agenda</label>
                    <input type="text" name="agenda" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Tanggal Sidang</label>
                    <input type="date" name="tanggal_sidang" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Penggugat</label>
                    <input type="text" name="penggugat" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Tergugat</label>
                    <input type="text" name="tergugat" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Keterangan</label>
                    <textarea name="keterangan" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none"></textarea>
                </div>
            </div>
            <div class="px-6 py-4 flex justify-end gap-2 border-t border-gray-100">
                <button type="button" onclick="toggleModal('modal1')" class="px-5 py-2.5 text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 font-medium transition-colors">Batal</button>
                <button type="submit" id="btnSave" class="px-5 py-2.5 text-white bg-[#228d81] rounded-xl hover:bg-[#1a6b62] font-medium transition-colors shadow-md hover:shadow-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- modal show --}}
<div id="modalShow" class="fixed inset-0 flex items-center justify-center hidden backdrop-blur-sm bg-black/30 transition-all duration-300 z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg transform transition-all">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 id="modalTitle" class="text-xl font-bold text-gray-800">Jadwal Sidang</h3>
            <button onclick="toggleModal('modalShow')" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center">&#10005;</button>
        </div>
        <div class="px-6 py-5">
            <div id="modalContent" class="space-y-3 text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100">
                <!-- Konten detail akan dimasukkan di sini -->
            </div>
        </div>
        <div class="px-6 py-4 flex justify-end gap-2 border-t border-gray-100">
            <button onclick="toggleModal('modalShow')" class="px-5 py-2.5 text-white bg-gray-500 rounded-xl hover:bg-gray-600 font-medium transition-colors shadow-sm">Tutup</button>
        </div>
    </div>
</div>
