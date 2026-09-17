<div id="modal" class="fixed inset-0 flex items-center justify-center hidden backdrop-blur-sm bg-black/30 transition-all duration-300 z-50">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md px-6 transform transition-all">
        <div class="py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 id="modal-title" class="text-xl font-bold text-gray-800">Tambah User</h2>
            <button type="button" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center" onclick="toggleModal()">
                &#10005;</button>
        </div>
        <form action="{{Route('admin.user.store')}}" method="POST" class="py-4">
            @csrf    
            <div class="mb-4">
                <label class="font-semibold text-sm text-gray-700 block mb-1.5">Username</label>
                <input type="text" name="username" class="border border-gray-300 rounded-xl px-3 py-2.5 text-sm w-full focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" required />
            </div>
            <div class="mb-5">
                <label class="font-semibold text-sm text-gray-700 block mb-1.5">Password</label>
                <input type="password" name="password" class="border border-gray-300 rounded-xl px-3 py-2.5 text-sm w-full focus:ring-2 focus:ring-[#228d81]/50 focus:border-[#228d81] transition-all outline-none" required />
            </div>
            <div class="pt-2 flex justify-end gap-2">
                <button type="button" class="px-5 py-2.5 text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 font-medium transition-colors" onclick="toggleModal()">Batal</button>
                <button type="submit" class="px-5 py-2.5 text-white bg-[#228d81] rounded-xl hover:bg-[#1a6b62] font-medium transition-colors shadow-md hover:shadow-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>
