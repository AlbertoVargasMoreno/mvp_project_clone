<?php

namespace App\Models;

use InvalidArgumentException;

class User
{
	public int $age;
	public array $favorite_movies = [];
	public string $name;

	public function __construct(int $age, string $name)
	{
		$this->age = $age;
		$this->name = $name;
	}

	public function tellName(): string
	{
		return "My name is {$this->name} ";
	}

	public function tellAge(): string
	{
		return "I am {$this->age} years old.";
	}

	public function addFavoriteMovie(string $movie_name) : bool
	{
		$this->favorite_movies[] = $movie_name;
		return true;
	}

	public function removeFavoriteMovie($movie_name) : bool
	{
		if (in_array($movie_name, $this->favorite_movies)) {
			$key = array_search($movie_name, $this->favorite_movies);
			unset($this->favorite_movies[$key]);
			return true;
		}
		return false;
	}
}
