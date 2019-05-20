<?php

namespace KingsCode\KlantenVertellen\Models\Reviews;

use KingsCode\KlantenVertellen\Models\Model;

class ReviewModel extends Model
{
    /**
     * @var \KingsCode\KlantenVertellen\Models\Reviews\ReviewContentModel[] $reviewContent
     */
    private $reviewContent;

    public function __construct(array $data)
    {
        parent::__construct($data);

        $this->reviewContent = array_map(function($reviewContent) {
            return new ReviewContentModel($reviewContent);
        }, $data['reviewContent']);
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getDateSince(): string
    {
        return $this->dateSince;
    }

    /**
     * @return string
     */
    public function getUpdatedSince(): string
    {
        return $this->updatedSince;
    }

    /**
     * @return string
     */
    public function reviewLanguage(): string
    {
        return $this->reviewLanguage;
    }

    /**
     * @return \KingsCode\KlantenVertellen\Models\Reviews\ReviewContentModel[]
     */
    public function getReviewContent(): array
    {
        return $this->reviewContent;
    }
}