<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{ $book->getCover() }}" height="200px">
        </div>

        <div class="card-stacked">
            <div class="card-content">E
                <h6><a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a></h6>
                <p>{{ Str::limit($book->description, 100) }}</p>
            </div>

            <div class="card-action">
                <form action="{{ route('book.borrow', $book) }}" method="POST">
                    @csrf
                    <input type="submit" class="btn green accent-1 right waves-effect" value="Pinjam Buku">
                </form>
            </div>
        </div>
    </div>
</div>
