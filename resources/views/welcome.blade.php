
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Add your custom CSS file -->
    <title>Home</title>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

   <button class="btn btn-primary" onclick="window.location.href='/login'">Login</button>
   <button class="btn btn-primary" onclick="window.location.href='/register'">Register</button>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Fics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('/community') }}">Community</a>

            </li>
        </ul>
    </div>
</nav>

<!-- Update your HTML for the Hero Section -->
<div class="container mt-4">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Top 20 Fics -->
            <div class="carousel-item active">
                <img src="{{ asset('img/hero1.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Text and buttons go here -->
                    <h2>Top 20 Fics</h2>
                    <p>Some description text here.</p>
                    <button class="btn btn-primary">Read More</button>
                </div>
            </div>
            <!-- Top 5 Books -->
            <div class="carousel-item">
                <img src="{{ asset('img/hero3.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Text and buttons go here -->
                    <h2>Top 5 Books</h2>
                    <p>Some description text here.</p>
                    <button class="btn btn-primary">Explore</button>
                </div>
            </div>
            <!-- Third Thing -->
            <div class="carousel-item">
                <img src="{{ asset('img/hero2.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Text and buttons go here -->
                    <h2>Full Library</h2>
                    <p>Some description text here.</p>
                    <button class="btn btn-primary">Browse</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<h1>All Books</h1>

    @foreach ($books as $book)
        <p>
            <a href="{{ route('books.show', ['book' => $book->id]) }}">
                {{ $book->title }} by {{ $book->author }}
            </a>
        </p>
    @endforeach


{{-- <x-layout>
    <x-setting heading="Manage Books">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/books/{{ $book->slug }}">
                                                        {{ $book->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ $book->author }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ $book->genre }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ $book->published_year }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/books/{{ $book->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" action="/admin/books/{{ $book->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout> --}}


<!-- Favorite Authors Section -->
<div class="container mt-4">
    <h2>Favorite Authors</h2>
    <div class="author-circles">
        <!-- Add your author circles here -->
        <div class="author-circle"><img src="{{ asset('img/1.jpg') }}" alt=""><span class="author-name">Author 1</span></div>
        <div class="author-circle"><img src="{{ asset('img/2.jpg') }}" alt=""><span class="author-name">Author 2</span></div>
        <div class="author-circle"><img src="{{ asset('img/3.jpg') }}" alt=""><span class="author-name">Author 3</span></div>
        <div class="author-circle"><img src="{{ asset('img/4.jpg') }}" alt=""><span class="author-name">Author 4</span></div>
        <div class="author-circle"><img src="{{ asset('img/5.jpg') }}" alt=""><span class="author-name">Author 5</span></div>
        <div class="author-circle"><img src="{{ asset('img/6.jpg') }}" alt=""><span class="author-name">Author 6</span></div>
        <div class="author-circle"><img src="{{ asset('img/7.jpg') }}" alt=""><span class="author-name">Author 7</span></div>
        <div class="author-circle"><img src="{{ asset('img/8.jpg') }}" alt=""><span class="author-name">Author 8</span></div>
        <div class="author-circle"><img src="{{ asset('img/9.jpg') }}" alt=""><span class="author-name">Author 9</span></div>
        <div class="author-circle"><img src="{{ asset('img/10.jpg') }}" alt=""><span class="author-name">Author 10</span></div>
        <!-- Add more as needed -->
    </div>
</div>

<!-- Update your HTML to include the class on the footer -->
<footer class="bg-light text-center p-3 mt-5 footer">
    <p>Fic Tracker &copy; 2023</p>
</footer>



<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>


