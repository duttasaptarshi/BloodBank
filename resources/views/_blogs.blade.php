<div class="border border-blue-400 rounded-lg px-8 py-4 mb-6">
    <form method="POST" action="/blogs">
        @csrf
        <textarea 
            name="body" 
            class="w-full" 
            placeholder="post ?"
        ></textarea>
        <hr class="mb-4">
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
            >
            <button type="submit" class="font-bold bg-blue-500 rounded-lg text-white shadow py-2 px-2"> POST </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>