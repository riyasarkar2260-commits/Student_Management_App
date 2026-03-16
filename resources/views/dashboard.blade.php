<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Dashboard
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<!-- Statistics -->
<div class="grid grid-cols-2 gap-6 mb-6">

<div class="bg-white p-6 shadow rounded">
<h3 class="text-lg font-bold">Total Students</h3>
<p class="text-2xl">{{ $totalStudents }}</p>
</div>

<div class="bg-white p-6 shadow rounded">
<h3 class="text-lg font-bold">Total Courses</h3>
<p class="text-2xl">{{ $totalCourses }}</p>
</div>

</div>

<!-- Latest Students -->
<div class="bg-white p-6 shadow rounded">

<h3 class="text-lg font-bold mb-4">Latest Students</h3>

<table class="w-full border">
<thead>
<tr class="bg-gray-200">
<th class="p-2">ID</th>
<th class="p-2">Name</th>
<th class="p-2">Email</th>
</tr>
</thead>

<tbody>
@foreach($latestStudents as $student)
<tr>
<td class="p-2">{{ $student->id }}</td>
<td class="p-2">{{ $student->name }}</td>
<td class="p-2">{{ $student->email }}</td>
</tr>
@endforeach
</tbody>

</table>

</div>

</div>
</div>
</x-app-layout>