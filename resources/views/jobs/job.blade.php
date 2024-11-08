<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <strong>{{$job->title}}</strong>
    <p>This job pays {{$job->salary}} salary.</p>
    <div class="py-6">
        <a href="/job/{{$job->id}}/edit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit
            Job</a>
    </div>
</x-layout>