<?php

namespace test;

class ArticleController
{

    /**
     * @var \test\ArticleRepository
     */
    private $repo;

    public function __construct(ArticleRepository $repository)
    {
        $this->repo = $repository;
    }

    public function list()
    {
        $articles = $this->repo->find();
        $result = [];
        foreach ($articles as $article) {
            $result[] = $article->getTitle();
        }

        return $result;
    }
}