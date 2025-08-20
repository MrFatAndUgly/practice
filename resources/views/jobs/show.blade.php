<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <h2 class="font-bold text-lg">{{ $job['title']}}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
    
</x-layout>