<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/registeruser">
            @csrf
                <div>
                    <x-label for="role" :value="__('Role')" />
                    <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="role" name="role" :value="old('role')" required autofocus>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Student">Student</option>
                        <option value="Industry">Industry</option>
                    </select>
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="hidden">
                    <x-label for="level" :value="__('Lavel')" />
                    <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="level" id="level" :value="old('level')" autofocus>
                        <option value="error">please select...</option>
                        <option value="1G">Level 1G</option>
                        <option value="1S">Level 1S</option>
                        <option value="2G">Level 2G</option>
                        <option value="2S">Level 2S</option>
                        <option value="3G">Level 3G</option>
                        <option value="3S">Level 3S</option>
                        <option value="3M">Level 3M</option>
                        <option value="4M">Level 4M</option>
                        <option value="4S">Level 4S</option>
                    </select>
                </div>
            <div>
                <x-label for="fname" :value="__('First Name')" />

                <x-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus />
            </div>
            <!-- Name -->
            <div>
                <x-label for="lname" :value="__('Last Name')" />

                <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
<<<<<<< HEAD
            @if($msg = session()->get('msg'))
            <h3>{{$msg}}</h3>
            @endif
=======

>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
<<<<<<< HEAD
    
</x-guest-layout>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($msg = session()->get('msg'))
@if($msg == "Wait for the acceptance")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @endif
     @endif
=======
</x-guest-layout>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95

