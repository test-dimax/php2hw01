<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

//берем последние 3 записи из базы данных
$news = Article::findSomeRecords(3);

include  __DIR__.'/templates/news.php';