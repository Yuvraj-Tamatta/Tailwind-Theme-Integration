@include('layout.header')

<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-slate-900 rounded-t">
            <a href="index.html"></a>
            <h3 class="font-semibold text-white text-4xl mb-1">Register</h3>
        </div>

        <form class="p-6">
            <div>
                <label for="User_Name" class="label">Username</label>
                <input type="text" id="User_Name" class="form-control dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Enter Username" required>
            </div>
            <div class="mt-4">
                <label for="email" class="label">Email</label>
                <input type="email" id="email" class="form-control  dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Enter Email" required>
            </div>
            <div class="mt-4">
                <label for="password" class="label">Your password</label>
                <input type="password" id="password" class="form-control  dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Enter Password"  required>
            </div>
            <div class="mt-4">
                <label for="Confirm_Password" class="label">Confirm Password</label>
                <input type="password" id="Confirm_Password" class="form-control  dark:bg-slate-800/60 dark:border-slate-700/50" placeholder="Enter Confirm Password"  required>
            </div>
            
           
            <div class="mt-6">
                <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Register
                </button>
            </div>
        </form>
        <p class="mb-5 text-sm font-medium text-center text-slate-500"> Already have an account ?  <a href="login.html"
            class="font-medium text-blue-600 hover:underline">Log in</a>
        </p>
    </div>
</div>