<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand toplogo" href="index.php">
            <img src="./image/Real_Madrid_CF.png" alt="Real Madrid C.F." width="250" height="75">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NEWS CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {foreach $categories as $k=>$category}
                        <a class="dropdown-item {if $cate_id==$k}active{/if}" href="{$url}/index.php?cate_id={$k}">{$category}</a>
                        <div class="dropdown-divider"></div>
                        {/foreach}
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">MEMBERSHIP</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" action="{$url}/index.php">
                <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search for articles" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                        class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>