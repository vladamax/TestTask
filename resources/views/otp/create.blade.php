<x-layout>
    <form method="POST" action="/loginOtp" class="mt-10">
        @csrf
    <x-form.input name="otp" type="text"/>
        <div class="mt-10 mb-20">

            <x-form.button >Submit</x-form.button>
        </div>

        <input type="hidden" name="email" value="{{ isset(session('attributes')['email']) ? session('attributes')['email'] : '' }}"/>
        <input type="hidden" name="password" value="{{ isset(session('attributes')['password']) ? session('attributes')['password'] : '' }}"/>
    </form>
</x-layout>
