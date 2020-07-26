<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$article =new Article();

$article->title = 'Обновленная статья';
$article->contents = 'Текст обновленной статьи';

$article->update(4);

$article4 = Article::findById(4);
var_dump($article4);