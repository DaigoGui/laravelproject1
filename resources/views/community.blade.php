<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community Page</title>
  <!-- Add your stylesheets and scripts here -->
  <link rel="stylesheet" href="{{ asset('css/community.css') }}"> <!-- Add your custom CSS file -->
  <title>FAQ</title>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          <a class="nav-link" href="{{ URL('/') }}">Home</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Hero Section -->
<div class="hero">
    <div class="hero-content">
      <h1>Welcome to Our Community</h1>
    </div>
    <img src="{{ asset('img/LIBRARY11.jpg') }}" alt="Community Image">
  </div>
  

  <div class="faq-section">
    <h2>Frequently Asked Questions</h2>
  
    <div class="faq-item">
      <h3>Q: What is the purpose of this website?</h3>
      <p>A: This website is dedicated to fan fiction and book enthusiasts. It provides a platform to track, discover, and discuss your favorite fan fictions and books.</p>
    </div>
  
    <div class="faq-item">
      <h3>Q: How can I add a fan fiction or book to my reading list?</h3>
      <p>A: To add a fan fiction or book to your reading list, navigate to the respective page and click on the "Add to Reading List" button. You can then organize and manage your reads through your profile.</p>
    </div>
  
    <div class="faq-item">
      <h3>Q: Is there a way to see what other users are currently reading?</h3>
      <p>A: Yes, you can explore the "Currently Reading" section on the homepage to discover what other users are currently immersed in. It's a great way to find new reads and connect with fellow readers.</p>
    </div>
  
    <div class="faq-item">
      <h3>Q: Can I recommend a fan fiction or book to others?</h3>
      <p>A: Absolutely! We encourage users to share their favorite reads. You can recommend a fan fiction or book by going to the respective page and clicking on the "Recommend" button. Your recommendations may appear on the homepage for others to discover.</p>
    </div>
  
    <!-- Add more FAQ items as needed -->
  
  </div>
  
 <!-- Question Submission Form -->
<div class="question-form">
    <h2>Submit Your Question</h2>
    <form action="{{ url('question.php') }}" method="post">
      <!-- Existing fields -->
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    
      <!-- New fields for tracking fan fiction and book preferences -->
      <label for="favorite_fic">Favorite Fan Fiction:</label>
      <input type="text" id="favorite_fic" name="favorite_fic">
  
      <label for="favorite_book">Favorite Book:</label>
      <input type="text" id="favorite_book" name="favorite_book">
  
      <label for="read_books">Books Read (comma-separated):</label>
      <input type="text" id="read_books" name="read_books">
  
      <label for="downloaded_books">Books Downloaded (comma-separated):</label>
      <input type="text" id="downloaded_books" name="downloaded_books">
  
      <label for="loved_books">Books Loved (comma-separated):</label>
      <input type="text" id="loved_books" name="loved_books">
  
      <label for="question">Your Question:</label>
      <textarea id="question" name="question" rows="4" required></textarea>

      <button type="submit">Submit Question</button>
    </form>
  </div>
  
</body>
</html>
