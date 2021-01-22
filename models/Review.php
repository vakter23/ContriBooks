<?php


class Review
{

    private $_id_review;
    private $_ISBN;
    private $_id_user;
    private $_id_genre;
    private $_score;
    private $_opinion;
    private $_like;
    private $_dislike;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this,$method))
                $this->$method($value);
        }
    }

    public function getId_review()
    {
        return $this->_id_review;
    }

    public function setId_review($id_review)
    {
        $this->_id_review = $id_review;
    }

    public function getISBN()
    {
        return $this->_ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->_ISBN = $ISBN;
    }

    public function getId_genre()
    {
        return $this->_id_genre;
    }

    public function setId_genre($IdGenre)
    {
        $this->_id_genre = $IdGenre;
    }


    public function getId_user()
    {
        return $this->_id_user;
    }

    public function setId_user($id_user)
    {
        $this->_id_user = $id_user;
    }

    public function getScore()
    {
        return $this->_score;
    }

    public function setScore($score)
    {
        $this->_score = $score;
    }

    public function getOpinion()
    {
        return $this->_opinion;
    }

    public function setOpinion($opinion)
    {
        $this->_opinion = $opinion;
    }

    public function getLike()
    {
        return $this->_like;
    }

    public function setLike($like)
    {
        $this->_like = $like;
    }

    public function getDislike()
    {
        return $this->_dislike;
    }

    public function setDislike($dislike)
    {
        $this->_dislike = $dislike;
    }


}