<?php

use PHPUnit\Framework\TestCase;
use test\ArticleController;

class ArticleControllerTest extends TestCase
{

    /**
     * @var ArticleController
     */
    private $controller;

    /**
     * @before
     */
    public function setUpController()
    {
        $repositoryStub = $this->createMock(\test\ArticleRepository::class);

        $repositoryStub->method('find')
            ->willReturn([
                new class { public function getTitle(){ return 'les tests unitaires'; } },
                new class { public function getTitle(){ return 'les classes anonymes'; } },
                new class { public function getTitle(){ return 'Vive PHP 7.1'; } },
                new class { public function getTitle(){ return 'phpunit'; } },
                new class { public function getTitle(){ return 'Les patrons de conceptions'; } },
            ]);

        $this->controller = new ArticleController($repositoryStub);
    }

    public function testList()
    {
        $result = $this->controller->list();

        $this->assertCount(5, $result, 'Le controller doit retourner 5 éléments');
    }
}
