<!-- Modal untuk Tambah dan Edit Berita -->
<div class="fixed z-50 overflow-y-auto inset-0 hidden backdrop-blur-sm bg-black/30 transition-all duration-300 flex items-center justify-center" id="modal">
    <div class="p-4 mx-auto w-full max-w-xl">
        <div class="bg-white shadow-2xl w-full rounded-2xl transform transition-all">
            <div class="flex justify-between items-center p-5 border-b border-gray-100">
                <h1 class="text-xl font-bold text-gray-800" id="modal-title">Koneksi WhatsApp</h1>
                <button type="button" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center" onclick="toggleModal()">
                    &#10005;
                </button>
            </div>
            <div class="px-7 py-6">
                <div class="flex justify-center items-center" id="qrCodeContainer">
                    <img id="qrCodeImg" class="hidden md:w-54 md:h-54 rounded-lg shadow-sm" alt="QR Code">
                </div>
                <div class="text-center my-5 text-gray-600 font-medium" id="statusDiv">Loading...</div>
                <div class="flex justify-center items-center mt-4">
                    <button id="logoutBtn" class="transition-all duration-300 bg-[#228d81] hover:bg-[#1a6b62] text-white w-full py-3 rounded-xl shadow-md hover:shadow-lg font-bold hidden">
                        <span class="inline-block">Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
