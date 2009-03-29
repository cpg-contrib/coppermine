$(document).ready(function() {
    //convert external links to open in new window (in comments);
    jQuery.each($("a[rel*='external']"), function(){
        $(this).click(function(){
            window.open(this.href);
            return false;
        });
        $(this).keypress(function(){
            window.open(this.href);
            return false;
        });
    });
});