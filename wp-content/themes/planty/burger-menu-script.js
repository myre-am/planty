jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.main-menu ul').slideToggle(500);
 
        e.preventDefault();
    });
    
});