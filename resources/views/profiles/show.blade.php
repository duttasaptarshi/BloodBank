<x-app>
    <header class="mb-4 relative">
        <img
            src="/images/poster.jpg"
            alt="bg-poster"
            class="rounded-lg"
        >

        <div class="flex px-2 py-2 justify-between ">
            <div>
                <h2 class="uppercase font-bold">{{ $user->name }}</h2>
                <p>Joined {{ $user->created_at->diffForHumans() }}</p>
                <p class="text-green-600">Units Donated : {{ $user->donated_bags }} </p>
            </div>
            <div class="py-5">
                <a href="{{ route('logout') }}" 
                class="font-bold text-white rounded-full bg-blue-500 text-xs shadow uppercase py-2 px-4"
                >Logout !
            </a>
            </div>
        </div>
        <img 
            src="{{ $user->avatar }}" 
            alt="avatar"
            class="rounded-full mr-2 absolute"
            style="width: 75px; left: calc(50% - 37px); top: 73%" 
            >

    </header>

    @include('_profiletimeline',[
            'blogs' => $user->blogs

        ]) 
</x-app>