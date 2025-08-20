<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <h1>Hello From {{ $title }} Page</h1>

    <div class="">
        @foreach ($jobs as $job)
            <a href="job/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg my-4">
                <li><span class="font-bold">{{ $job['title'] }}</span>: Pays {{ $job['salary'] }} per year.</li>
            </a>
        @endforeach
    </div>
</x-layout>
This is a <span> element inside a paragraph.

