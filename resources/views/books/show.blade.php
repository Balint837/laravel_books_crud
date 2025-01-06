<x-layout>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="mb-0">{{ $book->title }}</h1>
            </div>
            <div class="card-body">
                
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Author</h5>
                        <p class="fs-5">{{ $book->author }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Published Date</h5>
                        <p class="fs-5">{{ \Carbon\Carbon::parse($book->publishedDate)->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Rating</h5>
                        <p class="fs-5">{{ $book->rating }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Genre</h5>
                        <p class="fs-5">{{ $book->genre }}</p>
                    </div>
                </div>
            </div>
            
            <div class="card-footer bg-light text-center">
                <div class="d-flex justify-content-center gap-3">
                    
                    <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left"></i> Back to Book List
                    </a>
                    
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-lg">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg"
                            onclick="return confirm('Are you sure you want to delete this book?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
