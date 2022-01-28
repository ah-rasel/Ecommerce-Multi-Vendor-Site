<div class="">
    @if ($message)
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-4" role="alert">
        <p class="font-bold">Hello - {{ auth()->user()->name }}</p>
        <p>{{ $message }}</p>
    </div>
    @endif
    <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-3 xl:mb-5">
        Dashboard</h2>
    <p class=" text-sm leading-7 md:text-base md:leading-loose lowercase">
        From your account dashboard you can view your <a class=" underline font-semibold" href="#">recent orders</a>, manage your <a class=" underline font-semibold" href="#">Account Details</a> and <a class=" underline font-semibold" href="#">change your password</a>.
    </p>
</div>