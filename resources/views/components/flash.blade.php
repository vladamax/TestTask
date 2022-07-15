@if(session()->has('logInMessage'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false,4000)"
         x-show="show"
         class="fixed right-0 bg-blue-500 text-white py-20 px-40 bottom-3">
        <p>{{session('logInMessage')}}</p>
    </div>
@endif
