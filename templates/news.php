<h1>Новости</h1>

<?php foreach ($news as $article) { ?>
    <article>
        <h2>
            <a href="<?php echo '/article.php?id=' . $article->id; ?>"><?php echo $article->title ?></a>
        </h2>
        <p><?php echo $article->contents ?></p>
        <br>
    </article>
    <hr>
<?php } ?>