<form class="d-flex tm-search-form" action="/trang-suc-0" method="get">
    <!-- the_search_query already sanitized -->
    <input class="form-control tm-search-input" type="text" name="s" value="<?php the_search_query(); ?>"
        placeholder="Tìm kiếm" aria-label="Search" required>
    <button class="btn btn-outline-success tm-search-btn" type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>