# Lab

## Removing items from the shopping cart

Add a `remove()` method to the `ShoppingCart` class. Usage of this method should look like this:

```php
$cart->remove($album);
```

Create a file called `remove-items.php` that demonstrates this behavior.

## Emptying the shopping cart

Add an `empty()` method to the `ShoppingCart` class. Usage of this method should look like this:

```php
$cart->empty();
$cart->getTotal(); // should be 0
```

Create a file called `empty-cart.php` that demonstrates this behavior.

## Fetching all tracks

Add a static `all()` method to the `Track` class that returns all tracks as `Track` objects. Usage of this method should look like this:

```php
$tracks = Track::all($pdo);
```

Create a file called `all-tracks.php` that demonstrates this behavior.

## Namespace the `Track` class

Give the `Track` class a namespace of `Apple\iTunes`. Updates all necessary files so that `example.php` still works.

## Submission

Please push up your code including the database to GitHub to a repository named EXACTLY itp405-lab1. Send an email to me and the TA with the repository URL.
