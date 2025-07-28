<x-layout title="Register">
    <div class="flex justify-center items-center mt-5">




        <form action="" method="POST">
            <h1 class="text-3xl mb-5">Login</h1>
            @if ($errors->any())
                <div class="text-red-500 mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="mb-5 flex flex-col gap-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="border border-gray-300 px-3 py-1 rounded" id="email" name="email"
                    required>
            </div>
            <div class="mb-5 flex flex-col gap-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="border border-gray-300 px-3 py-1 rounded" id="password" name="password"
                    required>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
            </div>
        </form>
    </div>

</x-layout>
