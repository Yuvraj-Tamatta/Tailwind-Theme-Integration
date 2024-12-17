@include('layout.header')


<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-slate-900 rounded-t">
            <a href="index.html"></a>
            <h3 class="font-semibold text-white text-xl mb-1 text-4xl">Log-In</h3>
           
        </div>

        <form class="p-6">
            <div>
                <label for="email" class="label">Email</label>
                <input type="email" id="email" class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Your Email">
            </div>
            <div class="mt-4">
                <label for="password" class="label">Your password</label>
                <input type="password" id="password" class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Password">
            </div>
            <a href="#" class="text-xs text-gray-600 hover:underline">Forget Password?</a>          
        
            <div class="block mt-3">
                <label class="custom-label">
                    <div class="bg-white dark:bg-slate-700 dark:border-slate-600 border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                      <input type="checkbox" class="">
                      <i class="fas fa-check  text-xs text-slate-700 dark:text-slate-300"></i>
                    </div>
                    <span class="text-sm text-slate-500 font-medium">Remember me</span>                             
                </label>
            </div>                   
               
            <div class="mt-6">
                <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Login
                </button>
            </div>
        </form>
        <p class="mb-5 text-sm font-medium text-center text-slate-500"> Don't have an account? <a href="{{ route('register')}}"
            class="font-medium text-blue-600 hover:underline">Sign up</a>
        </p>
    </div>
</div>




    
