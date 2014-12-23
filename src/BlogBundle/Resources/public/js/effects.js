$(document).ready(function(){
    var bar;
    bar = '<h4></h4>';
    $('.blog-header').html(bar);

    //set nav-item active;
    var url = window.location;
    // Will only work if string in href matches with location
    $('nav.blog-nav a[href="' + url + '"]').addClass('active');

    // Will also work for relative and absolute hrefs
    $('nav.blog-nav a').filter(function () {
        return this.href == url;
    }).addClass('active').parent().addClass('active');

});