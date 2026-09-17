<div class="fixed z-50 overflow-y-auto top-0 w-full left-0 hidden backdrop-blur-sm bg-black/30 transition-all duration-300" id="modal">
    <div class="min-h-screen flex flex-col justify-center items-center sm:py-12 px-4">
        <div class="w-full max-w-md mx-auto">
            <div class="bg-white shadow-2xl w-full rounded-2xl divide-y divide-gray-100 transition-all duration-300 transform scale-95 opacity-0" id="modal-content">
                <div class="flex justify-between items-center p-5 pb-3 border-b border-gray-100">
                    <h1 class="text-xl font-bold text-gray-800">Masuk Akun</h1>
                    <button type="button" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors rounded-full w-8 h-8 flex items-center justify-center inline-flex" onclick="toggleModal()"> 
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>
                <div class="px-7 py-6">
                    
                    @if(session('error'))
                    <div class="mb-5 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl relative text-sm flex items-center shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-exclamation mr-3 text-lg"></i>
                        <span class="block sm:inline font-medium">{{ session('error') }}</span>
                    </div>
                    @endif
                    
                    @if(session('success'))
                    <div class="mb-5 bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-xl relative text-sm flex items-center shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-check mr-3 text-lg"></i>
                        <span class="block sm:inline font-medium">{{ session('success') }}</span>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="mb-5 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl relative text-sm flex items-start shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-exclamation mt-0.5 mr-3 text-lg"></i>
                        <div class="font-medium">
                            @foreach($errors->all() as $error)
                                <span class="block">{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <form action="{{Route('actionLogin')}}" method="POST" class="space-y-4">
                        @csrf    
                        <div>
                            <label class="font-semibold text-sm text-gray-700 block mb-1.5">Username</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-user text-gray-400"></i>
                                </div>
                                <input type="text" name="username" class="border border-gray-300 rounded-xl px-3 py-2.5 pl-10 text-sm w-full focus:ring-2 focus:ring-[#006E61]/50 focus:border-[#006E61] transition-all outline-none" required placeholder="Masukkan username" />
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold text-sm text-gray-700 block mb-1.5">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" name="password" class="border border-gray-300 rounded-xl px-3 py-2.5 pl-10 text-sm w-full focus:ring-2 focus:ring-[#006E61]/50 focus:border-[#006E61] transition-all outline-none" required placeholder="Masukkan password" />
                            </div>
                        </div>
                        <div class="pt-3">
                            <button type="submit" class="transition-all duration-300 bg-[#006E61] hover:bg-[#005a4f] text-white w-full py-3 rounded-xl text-sm shadow-md hover:shadow-lg font-bold text-center inline-flex items-center justify-center">
                                <span>Login</span>
                                <i class="fa-solid fa-arrow-right-to-bracket ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('error') || session('success') || $errors->any())
<script>
    document.addEventListener("DOMContentLoaded", function() {
        toggleModal();
    });
</script>
@endif
