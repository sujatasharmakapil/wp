<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="text" name="s" id="s" value="type your search" onblur="if(this.value=='')this.value='type your search'"
    onfocus="if(this.value=='type your search')this.value=''" />
    <input type="hidden" value="submit" />
</form>