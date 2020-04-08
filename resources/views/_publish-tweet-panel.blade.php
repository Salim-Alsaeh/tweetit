<div class="border border-blue-400 rounded-lg py-6 px-8 p-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="What's' up doc?"

                    >
                    </textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
                <img class="rounded-full mr-2" src="{{ auth()->user()->avatar }}" alt="profile pic">
            <button class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"  type="submit">Prrrrrrrr!</button>

        </footer>

        @error('body')
            <p class="text-red-500 text-sm mt-6">{{ $message }}</p>
        @enderror

    </form>
</div>
