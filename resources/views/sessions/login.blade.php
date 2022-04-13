<x-sessions.layout>
    <x-sessions.first_panel>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-4">
                <h1 class="mb-2">Sign In</h1>
                <p style="margin-bottom: 10px;">to start a journey with us.</p>
            </div>
            <input name="email" type="email" placeholder="Email" autocomplete="username" required/>
            <input name="password" type="password" placeholder="Password" autocomplete="current-password"
                   required/>
            <a href="/recover">Forgot your password?</a>
            <button class="hover:bg-red-500 transition duration-0 hover:duration-150" type="submit">Login
            </button>
        </form>
    </x-sessions.first_panel>

    <x-sessions.second_panel>
        <h1>Hey!</h1>
        <p>If you don't have an account, <br>you can create one!</p>
        <div class="mt-3">
            <button class="ghost" id="signUp" onclick="window.location='/register';">Sign Up</button>
        </div>
    </x-sessions.second_panel>
</x-sessions.layout>
