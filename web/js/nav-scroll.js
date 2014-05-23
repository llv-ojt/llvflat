/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).scroll(function() {
    var def_logowidth = '60%';
    var logowidth;
    var navpaddingtop;
    var scroll_tolerance = 91;

    // If out of tolerance and width is desktop
    if ($(window).scrollTop() >= scroll_tolerance && $('body').width() >= 1184) {
        logowidth = '50%';
        navpaddingtop = '50px';
    } 
    // If inbounds tolerance and width is desktop
    else if ($('body').width() >= 1184) {
        // Default
        logowidth = def_logowidth;
        navpaddingtop = '64px';
    }
    else {
        logowidth = '20%';
    }
    
    $('img.img-responsive').css({
        width: logowidth
    });

    $('.main-navigation').css({
        paddingTop: navpaddingtop
    }, 250);
});