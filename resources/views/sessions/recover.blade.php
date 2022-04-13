<x-sessions.layout>
    <x-sessions.first_panel>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-4">
                <h1 class="mb-2">Recover</h1>
                <p style="margin-bottom: 10px;">Type your email address below,<br>to recover your password.</p>
            </div>
            <input name="email" type="email" placeholder="Email" autocomplete="username" required/>
            <button class="mt-2 hover:bg-red-500 transition duration-0 hover:duration-150" type="submit">Send
            </button>
        </form>
    </x-sessions.first_panel>

    <x-sessions.second_panel>
        <h1>Hey!</h1>
        <p>If you still not getting it, we can help you.</p>
        <div class="mt-3">
            <button class="ghost" id="signUp" onclick="window.location='mailto:email@example.com';">Contact Support</button>
        </div>
    </x-sessions.second_panel>
</x-sessions.layout>
