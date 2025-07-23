<x-layout title='Create Todo'>
    <div class="flex justify-center items-center bg-slate-100 min-h-screen">
        <div class="w-[600px] bg-white shadow-md rounded-lg p-6 mt-10">
            <h1 class="text-3xl">Edit Todo</h1>

            <form action="/todo/{{ $todo->id }}" method="POST" class="mt-10 space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" placeholder="Todo title"
                        class="w-full border border-gray-300 rounded-lg p-2" value="{{ $todo->title }}">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" placeholder="Todo description"
                        class="mt-2 w-full h-24 border border-gray-300 rounded-lg p-2">{{ $todo->description }}</textarea>
                </div>

                <div>
                    <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                    <input type="date" name="due_date" class="mt-2 w-full border border-gray-300 rounded-lg p-2"
                        value="{{ $todo->due_date }}">
                </div>


                <div>
                    <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                    <select name="priority" class="mt-2 w-full border border-gray-300 rounded-lg p-2">
                        <option value="low" @if ($todo->priority === 'low') selected @endif>Low</option>
                        <option value="medium" @if ($todo->priority === 'medium') selected @endif>Medium</option>
                        <option value="high" @if ($todo->priority === 'high') selected @endif>High</option>
                    </select>
                </div>

                <br>
                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2 w-full">Update</button>
            </form>
        </div>
    </div>
</x-layout>
