<x-layout>
    <form method="POST" action="/loginOtp" class="mt-10">
        @csrf
    <x-form.input name="otp"/>
        <div class="mt-10 mb-20">

            <x-form.button >Submit</x-form.button>
        </div>
    </form>
</x-layout>
