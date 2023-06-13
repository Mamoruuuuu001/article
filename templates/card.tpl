<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{$url}/index.php?op=show&id={$news.id}">{$news.title}</a>
                </h5>
                <p class="card-text">
                    <small>{$news.info}</small>
                </p>
                <p class="card-text">
                    <small class="text-muted">{$news.date} <i class="far fa-eye"> </i>{$news.counter}</small>
                </p>
                <p class="card-text">
                    {$news.summary}
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{$url}/index.php?op=show&id={$news.id}">
                {if $news.files}
                <img src="{$url}/uploads/{$news.id}/thumbs/{$news.files|reset}"
                    alt="{$news.title}" class="img-fluid img-thumbnail">

                {else}
                <img src="{$url}/images/none.png" alt="No Image" class="img-fluid img-thumbnail" />
                {/if}
            </a>
        </div>
    </div>
</div>