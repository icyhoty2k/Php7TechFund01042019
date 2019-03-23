<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 9.3.2019 г.
 * Time: 21:38
 */

class Library{
    private $name;
    private $listOfBooks=[];

    /**
     * Library constructor.
     * @param $name
     * @param $listOfBooks
     */
    public function __construct($name, array $listOfBooks)
    {
        $this->name = $name;
        $this->listOfBooks = $listOfBooks;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getListOfBooks(): array
    {
        return $this->listOfBooks;
    }

    /**
     * @param array $listOfBooks
     */
    public function setListOfBooks($listOfBooks): void
    {
        array_push($this->getListOfBooks(),$listOfBooks);
    }
}

class Book {
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $Isbn;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $publisher
     * @param $releaseDate
     * @param $Isbn
     * @param $price
     */
    public function __construct($title, $author, $publisher, $releaseDate, $Isbn, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
        $this->Isbn = $Isbn;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->Isbn;
    }

    /**
     * @param mixed $Isbn
     */
    public function setIsbn($Isbn): void
    {
        $this->Isbn = $Isbn;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

}
$myLib=new Library("GlobalLib",[]);
$booksInput=readline();
$bookContainer=[];
while($booksInput-- >0){

    list($title , $author ,$publisher ,$releaseDate , $Isbn , $price)=explode(" ",readline());
    $currentBook = new Book($title , $author ,$publisher ,$releaseDate , $Isbn , $price);

    array_push($bookContainer,$currentBook);
}
$totals=[];
foreach($bookContainer as $bc){
    if(in_array($totals,$bc->getAuthor(),$totals)){

    }
   array_push($totals,$bc->getAuthor(),$bc->getPrice());

}


