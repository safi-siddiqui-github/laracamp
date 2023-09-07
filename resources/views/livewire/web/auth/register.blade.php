<main class="w-full flex bg-white lg:items-center lg:py-5">
    
    <form wire:submit.prevent="register" class="flex flex-col p-5 md:p-10 gap-5 w-full">

        <div class="flex flex-col gap-3 mb-5">
                        
            <h2 class="text-3xl font-bold">
                Create your new account 
            </h2>

            <div class="flex gap-3">

                <p class="text-slate-500">
                    ALready a member ?
                </p>
                
                <a href="{{route('web.login')}}" class="font-medium">
                    Sign In !
                </a>
            </div>
            
        </div>

        <div class="flex flex-col gap-1">
                
                <label for="email" class="font-medium cursor-pointer">Email</label>
                
                <input wire:model.lazy="email" id="email" type="email" placeholder="john@gmail.com" class="border rounded px-4 py-2">
                
                @error('email') <p class="text-red-500">{{$message}}</p> @enderror
            </div>
            
            <div class="flex flex-col gap-1">
                
                <label for="password" class="font-medium cursor-pointer">Password</label>
                
                <input wire:model.lazy="password" id="password" type="password" placeholder="jo********mn" class="border rounded px-4 py-2">
                
                @error('password') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="flex flex-col gap-1">
            
                <label for="password_confirmation" class="font-medium cursor-pointer">Password_confirmation</label>
                
                <input wire:model.lazy="password_confirmation" id="password_confirmation" type="password" placeholder="jo********mn" class="border rounded px-4 py-2">
                
            </div>
            @error('password_confirmation') <p class="text-red-500">{{$message}}</p> @enderror
            
            <div class="flex gap-3 justify-between">
                    
                <div class="flex gap-3 items-center">
                    
                    <input type="checkbox" id="remember" wire:model.lazy="remember">
                    
                    <label for="remember" class="cursor-pointer">
                        Remember me
                    </label>
                    
                </div>
                
                <a href="#" class="font-medium">
                    Forgot password ?
                </a>
                
            </div>
            
        <div class="border rounded flex justify-center relative my-5">
            <p class="font-medium absolute top-[-0.8rem] bg-white px-5">
                Or continue with
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 md:flex-wrap gap-3 md:justify-between">
            
            <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/icons/google.png')}}" alt="Google Icon" class="w-7">
                <span class="">Google</span>
            </button>
            
            <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/icons/github.png')}}" alt="Github Icon" class="w-7">
                <span class="">Github</span>
            </button>
            
            <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/icons/twitter.png')}}" alt="Twitter Icon" class="w-7">
                <span class="">Twitter</span>
            </button>
            
            <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/icons/facebook.png')}}" alt="Facebook Icon" class="w-7">
                <span class="">Facebook</span>
            </button>
            
        </div>

        <button type="submit" class="bg-black text-white text-center text-sm px-4 py-2 font-medium rounded">Register</button>
        
    </form>

    <img src="{{asset('storage/images/web/auth/register.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-[50rem] rounded-tl-lg rounded-bl-lg">

</main>