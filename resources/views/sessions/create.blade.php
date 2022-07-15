<x-layout>

    @guest
    <h1 class="text-center font-bold text-xl">Log In!</h1>

    <form method="POST" action="/login" class="mt-10">
        @csrf

        <div class="mb-6">
            <x-form.input name="email" type="email"/>
        </div>

        <div class="mb-6">
            <x-form.input name="password" type="password"/>
        </div>

        <div class="mb-6">
            <x-form.button>Sign in</x-form.button>
        </div>

    </form>
    @else
        <h1>
            Welcome back , {{ auth()->user()->name }}
        </h1>
    @endguest
</x-layout>
