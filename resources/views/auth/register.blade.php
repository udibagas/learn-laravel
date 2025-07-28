<x-layout title="Register">
    <div class="flex justify-center items-center mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="" method="POST">
            <h1 class="text-3xl mb-5">Register</h1>
            @csrf
            <div class="mb-5 flex flex-col gap-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="border border-gray-300 px-3 py-1 rounded" id="name" name="name"
                    required>
            </div>
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

            <div class="mb-5 flex flex-col gap-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="border border-gray-300 px-3 py-1 rounded" id="password"
                    name="password_confirmation" required>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
                <a href="/login" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Login</a>
            </div>
        </form>
    </div>

</x-layout>
