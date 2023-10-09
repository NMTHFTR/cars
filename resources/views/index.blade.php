<x-layout>

<table class="table table-dark">
@foreach ($cars as $car)
    <tr>
        @foreach ($car as $field)
        <td>{{$field}}</td>
        @endforeach
    </tr>
@endforeach
</table>
</x-layout>