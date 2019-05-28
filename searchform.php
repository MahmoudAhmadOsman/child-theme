 <section class="custom-search-form">

 <form  action="<?php echo home_url('/'); ?>" method="get" role="search">

<div class="form-group form-group-lg">
   <input type="text" class="form-control"  name="s" id="search" placeholder="Search..." value="<?php the_search_query();?>" title="Search" />

</div>
 <input type="submit" class="btn btn-primary btn-block btn-lg" id="searchsubmit" value="SUBMIT" />
</form>
</section>