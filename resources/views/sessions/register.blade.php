<x-sessions.layout>
    <x-sessions.first_panel>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-4">
                        <h1 class="mb-2">Register</h1>
                        <p style="margin-bottom: 10px;">Fill the fields with your personal information.</p>
                    </div>
                    <input name="name" placeholder="Name" required/>
                    <input name="username" placeholder="Username" required/>
                    <input name="email" type="email" placeholder="Email" required/>
                    <input name="password" type="password" placeholder="Password" autocomplete="new-password" required/>
                    <button class="mt-2 hover:bg-red-500 transition duration-0 hover:duration-150" type="submit">
                        Register
                    </button>
                </form>
    </x-sessions.first_panel>

    <x-sessions.second_panel>
        <h1>Hello!</h1>
        <p>Already have an account?</p>
        <div class="mt-3">
            <button class="ghost" id="signUp" onclick="window.location='/login';">Sign Up</button>
        </div>
    </x-sessions.second_panel>
</x-sessions.layout>
