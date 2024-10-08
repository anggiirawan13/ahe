<x-layout>
    <div class="container mt-5">

        <x-navbar-table addUrl="/category-create"></x-navbar-table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach ($categories as $cat)
                <tr>
                    <th scope="row">{{ $cat->id }}</th>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->description }}</td>
                    <td class="text-center">
                        <x-button-edit actionUrl="/category-edit/{{ $cat->id }}"></x-button-edit>
                        <x-button-delete actionUrl="/{{ $cat->id }}"></x-button-delete>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <x-pagination></x-pagination>
    </div>

</x-layout>