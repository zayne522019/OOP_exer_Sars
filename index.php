<?php   
	class Book{
			//declaring member variable here// 
		var $price;
		var $title;
		var $author;
		var $genre;
		//declaring member functions here//
		function setPrice($prce){
			$this->price = $prce;
		}
				function getPrice(){
				echo "<p><center> $this->price.<br/> </	p></center>";
			}
		function setTitle($title){
			$this->title = $title;
			}
				function getTitle(){
				echo "<p><center> $this->title.<br/></p></center>";
			}
		function setAuthor($authr){
			$this->author = $authr;
			}
				function getAuthor(){
					echo "<p><center> $this->author.<br> </p></center>";
				}
		function setGenre($gnre){
			$this->genre = $gnre;
			}
				function getGenre(){
				echo "<p><center>$this->genre.<br/></center></p>";
				}
		}
		$price = new Book();
		$price->setPrice(500.00);
		$price->getPrice();

				$title = new Book();
			$title->setTitle("Mix");
			$title->getTitle();

		$author = new Book();
		$author->setAuthor("Noel D. Ramos");
		$author->getAuthor();

				$genre = new Book();
			$genre->setGenre("Drama");
			$genre->getGenre();
?>