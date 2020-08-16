<div>
    <ul class="uppercase border px-4 py-2 rounded-lg shadow">

        <h1 class="font-bold text-xl mb-4">dashboard</h1>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="{{ route('home') }}">
            Home
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="/donate">
            Donate Blood
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="/requests">
            Request Blood
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="/stocks">
            Stocks
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="{{ route('profile',auth()->user())}}">
            Profile
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="/aboutus">
            About Us
        </a></li>

        <li><a
            class="font-bold text-long mb-4 block text-indigo-700"
            href="/contactus">
            Contact Us
        </a></li>
        <img src="\images\pos2.png" alt="poster1" class="rounded-lg mb-4">
        <img src="\images\pos3.png" alt="poster2" class="rounded-lg mb-3">
    </ul>
</div>

