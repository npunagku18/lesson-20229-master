<?php


namespace App;


class FrontEndView
{
    public $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function article($article, $categories)
    {
        return $this->twig->render('article.twig', ['article' => $article,'categories'=>$categories  ]);
    }
    public function category($category, $categories)
    {
        return $this->twig->render('category.twig', ['category' => $category,'categories'=>$categories  ]);
    }

    public function articleList($articles, $categories)
    {
        return $this->twig->render('articles-list.twig',['articles' => $articles,'categories'=>$categories ]);
    }
    public function categoriesList($category, $categories)
    {
        return $this->twig->render('categoriesList.twig',['category' => $category,'categories'=>$categories ]);
    }

}