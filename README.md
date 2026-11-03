# Plant Library

# Plant Library

A small plant and herb library built in plain PHP, made while learning
PHP and Git ahead of moving on to Drupal.

## Features

- Plants, herbs and vegetables modelled as PHP classes
- Shows what can be sown in the current month
- Choose a month using the address, e.g. `?month=3`
- Each plant has sun and water needs, and the list is sorted A to Z

## Requirements

- PHP 8.x

## Running it

From the project folder:

    php -S localhost:8000

Then open http://localhost:8000 in your browser, or try
http://localhost:8000/?month=4 to see April.

## Project structure

| File            | What it does                                            |
| --------------- | ------------------------------------------------------- |
| `index.php`     | The web page listing what to sow this month             |
| `Sowable.php`   | Interface: anything sowable must have `canSowInMonth()` |
| `Plant.php`     | Base class with name, sun, sowing months and water      |
| `Herb.php`      | Extends `Plant`, adds what the herb is used for         |
| `Vegetable.php` | Extends `Plant`, adds days to harvest                   |
| `app.php`       | Command-line demo (`php app.php`)                       |

## What I practised

Classes and inheritance, interfaces, `array_filter` and `usort`,
reading query strings with `$_GET`, and working with Git branches
and GitHub.
