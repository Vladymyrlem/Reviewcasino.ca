<div class="search-block">
    <form role="search" method="get" class="search-form" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <label class="screen-reader-text" for="s">Поиск: </label>
        <input type="search" placeholder="Search for casinos, games and more" value="<?php echo get_search_query() ?>"
               name="s" id="s"/>
        <input type="submit" id="searchsubmit" value=""/>
    </form>
    <svg class="close-search" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4.8125 4.8125L17.1875 17.1875" stroke="black" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
        <path d="M17.1875 4.8125L4.8125 17.1875" stroke="black" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>

    <div class="overlay"></div>
</div>
