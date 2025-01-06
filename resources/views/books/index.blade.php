<x-layout>
    <div class="container">
        <h1 class="text-center mb-4">Book List</h1>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>
                        <a href="{{ route('books.create') }}" class="btn btn-primary">New Book</a>
                    </th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published Date</th>
                    <th>Rating</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td style="display: flex" class="d-flex justify-content-center">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">&#9998;</a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this book?')">&#10008;</button>
                            </form>
                        </td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ \Carbon\Carbon::parse($book->publishedDate)->format('M d, Y') }}</td>
                        <td>{{ $book->rating }}</td>
                        <td>{{ $book->genre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            padding: 12px 15px;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table thead {
            background-color: #f0f4f7;
            color: #495057;
        }

        .table thead th {
            font-weight: bold;
            font-size: 16px;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table tbody tr {
            margin-bottom: 5px;
        }

        @media (max-width: 768px) {
            .table {
                font-size: 0.9rem;
            }
        }
    </style>
</x-layout>
