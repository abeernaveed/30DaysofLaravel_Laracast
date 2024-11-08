<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:bg-white">
            <div class="text-blue-500 font-bold text-small">{{$job->employee->name}}</div>
            <div><b>{{$job['title']}}:</b> Pays {{$job['salary']}} per year.</div>
        </a>
        @endforeach
        <div class="  ">
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>