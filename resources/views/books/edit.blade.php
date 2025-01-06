<x-layout>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Edit Book</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('books.update', $book->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title', $book->title) }}" placeholder="Enter the book title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author"
                            name="author" value="{{ old('author', $book->author) }}"
                            placeholder="Enter the author's name">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publishedDate" class="form-label">Published Date</label>
                        <input type="date" class="form-control @error('publishedDate') is-invalid @enderror"
                            id="publishedDate" name="publishedDate"
                            value="{{ old('publishedDate', $book->publishedDate) }}">
                        @error('publishedDate')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating"
                            name="rating" value="{{ old('rating', $book->rating) }}" placeholder="Rate the book (0-5)"
                            step="0.1" min="0" max="5">
                        @error('rating')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                            name="genre" value="{{ old('genre', $book->genre) }}"
                            placeholder="Enter the genre's name">
                        @error('genre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="bi bi-check-circle"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
