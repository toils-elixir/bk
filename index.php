<?php

include 'Book.php';

// Create an instance of the Book class
$book = new Book("The Catcher in the Rye", "J.D. Salinger", 1951);

// Display information about the book
echo "Title: " . $book->getTitle() . "\n";
echo "Author: " . $book->getAuthor() . "\n";
echo "Publication Year: " . $book->getPublicationYear() . "\n";

?>
