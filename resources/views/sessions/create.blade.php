<x-layout>
    <h1 class="text-center font-bold text-xl">Log In!</h1>

    <form method="POST" action="/login" class="mt-10">
        @csrf

        <div class="mb-6">
            <x-form.input name="email"/>
        </div>

        <div class="mb-6">
            <x-form.input name="password" type="password"/>
        </div>

        <div class="mb-6">
            <x-form.button>Sign in</x-form.button>
        </div>

    </form>
</x-layout>
