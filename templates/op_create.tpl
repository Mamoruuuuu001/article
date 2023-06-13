      <form action="{$url}/admin/index.php" method="post" enctype="multipart/form-data">

      <div class="row mb-3">
        <label for="title" class="col-md-2 col-form-label"> Article Title </label>
        <div class="col-md-10">
          <input type="text" name="title" id="title" class="form-control" placeholder="Please input the title of the article" value="{$news.title}" />
        </div>
      </div> 

      <div class="row mb-3">
        <label for="info" class="col-md-2 col-form-label"> Information </label>
        <div class="col-md-10">
          <input type="text" name="info" id="info" class="form-control" placeholder="Please input the information about the article" value="{$news.info}" />
        </div>
      </div>

      <div class="row mb-3">
        <label for="date" class="col-md-2 col-form-label"> Date </label>
        <div class="col-md-10">
          <input type="date" name="date" id="date" class="form-control" placeholder="Input the date for the article" value="{$news.date}" />
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="files" class="col-md-2 col-form-label"> Related Image </label>
        <div class="col-md-10">
          <input type="file" name="files[]" id="files" class="form-control" placeholder="Please upload images that are related to the article"
            accept=".jpg,.jpeg,.png,.gif,.mp4" multiple/>
        </div>
      </div>

      <div class="row mb-3">
        <label for="content" class="col-sm-2 col-form-label"> Article Content </label>
        <div class="col-sm-10">
          <textarea class="form-control" name="content" id="content" placeholder="Please input the content of the article" rows="10">{$news.content}</textarea>
        </div>
      </div>

      <div class="row mb-3">
        <label for="cate_id" class="col-sm-2 col-form-label"> Article Category </label>
        <div class="col-sm-10">
          {foreach $categories as $k=>$category}
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cate_id" id="cate_id_{$k}" value="{$k}" {if $news.cate_id==$k}checked{/if} />
            <label class="form-check-label" for="cate_id_{$k}">{$category}</label>
          </div>
          {/foreach}
        </div>
      </div>

      <div class="text-center">
        {if $news.id}
        <input type="hidden" name="op" value="update" />
        <input type="hidden" name="id" value="{$news.id}" />
        {else}
        <input type="hidden" name="op" value="store" />
        {/if}
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
      </form>