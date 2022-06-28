<div class="search-block">
    <form role="search" method="get" class="search-form" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <label class="screen-reader-text" for="s">Поиск: </label>
        <input type="search" placeholder="Search for casinos, games and more" value="<?php echo get_search_query() ?>"
               name="s" id="s"/>
        <input type="submit" id="searchsubmit" value=""/>
    </form>
    <button class="open-search">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.91927 2.16634C4.29592 2.16634 2.16927 4.29299 2.16927 6.91634C2.16927 9.53969 4.29592 11.6663 6.91927 11.6663C9.54262 11.6663 11.6693 9.53969 11.6693 6.91634C11.6693 4.29299 9.54262 2.16634 6.91927 2.16634ZM0.585938 6.91634C0.585938 3.41854 3.42147 0.583008 6.91927 0.583008C10.4171 0.583008 13.2526 3.41854 13.2526 6.91634C13.2526 8.3799 12.7562 9.72752 11.9225 10.8L16.1874 15.0649C16.4966 15.374 16.4966 15.8753 16.1874 16.1845C15.8782 16.4936 15.377 16.4936 15.0678 16.1845L10.8029 11.9196C9.73045 12.7532 8.38283 13.2497 6.91927 13.2497C3.42147 13.2497 0.585938 10.4141 0.585938 6.91634Z"
                  fill="white"/>
        </svg>

    </button>
    <div class="overlay"></div>
</div>
