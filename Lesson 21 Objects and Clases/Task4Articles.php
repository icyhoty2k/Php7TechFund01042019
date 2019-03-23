<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 12.3.2019 г.
 * Time: 23:42
 */


class Article
{
    private $title;
    private $content;
    private $author;

    /**
     * Article constructor.
     * @param $title
     * @param $content
     * @param $author
     */
    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function __toString()
    {
        return $this->title." - ".$this->content.": ".$this->author;
    }

}

$input = explode(", ", readline());
$to = readline();
$myArticle=new Article($input[0],$input[1],$input[2]);
for ($i = 0; $i < $to; $i++) {
    $command=explode(": ",readline());
    switch ($command[0]) {
        case "Edit":
            {
                $myArticle->setContent($command[1]);
                break;
            }
            case "ChangeAuthor":
            {
                $myArticle->setAuthor($command[1]);
                break;
            }
            case "Rename":
            {
                $myArticle->setTitle($command[1]);
                break;
            }
    }
}
echo $myArticle;