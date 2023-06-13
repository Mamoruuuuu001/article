<div class="row">
    <div class="col-md-9">
        <h3>{$news.title}</h3>
        <p class="text-muted">{$news.info}</p>
        <article>
            {$news.content|nl2br}
        </article>

            <div class="mt-5">
                <a href="{$url}/index.php" class="btn btn-outline-primary">
                    <i class="fas fa-undo-alt"></i>Return
                </a>
                {if $is_admin}
                <a href="{$url}/admin/index.php?op=edit&id={$news.id}" class="btn btn-outline-warning">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a href="{$url}/admin/index.php?op=destroy&id={$news.id}" class="btn btn-outline-danger">
                    <i class="fas fa-trash-alt"></i>Delete
                </a>
                {/if}
            </div>
    </div>
    <div class="col-md-3">
        <!-- 縮圖列表 -->
{foreach $news.files as $file => $thumb}
<a data-fancybox="gallery" href="{$url}/uploads/{$news.id}/{$file}">
    <img src="{$url}/uploads/{$news.id}/thumbs/{$thumb}" alt="{$file}" class="img-fluid img-thumbnail mb-3" />
</a>
{foreachelse}
<img src="{$url}/images/none.png" alt="無圖檔" class="img-fluid img-thumbnail mb-3" />
{/foreach}
    </div>
</div>