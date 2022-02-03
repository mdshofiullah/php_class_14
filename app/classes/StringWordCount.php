<?php


namespace App\classes;


class StringWordCount
{
    protected $givenString;
    protected $word;
    protected $character;

    public function __construct($post=null)
    {
        $this->givenString = $post['string'];
    }

    public function index()
    {
        header('Location: pages/index.php');
    }
    public function getWordString()
    {
        $this->word         = str_word_count($this->givenString);
        $this->character    = strlen($this->givenString);

        return [
            'word'      => $this->word,
            'character' => $this->character,
            'string'    => $this->givenString,
        ];
    }

}