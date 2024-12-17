<x-layout>
    <x-slot:layoutTitle>{{ $pagetitle }}</x-slot:layoutTitle>
    <section class="bg-white">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-24 w-auto" src="images/logos.png" alt="Logo">
            </div>
            <!-- Tambahkan border dengan warna #E2CEB1 di sini -->
            <div class="w-full bg-white rounded-lg shadow border border-[#E2CEB1] md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- Username Input -->
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
                        </div>
                        
                        <!-- Email Input -->
                        <div>
                            <label for="email">Your email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                        </div>
                        
                        <!-- Password Input -->
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                    
                        <!-- Confirm Password Input -->
                        <div>
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit">Create an account</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
  </x-layout>
  