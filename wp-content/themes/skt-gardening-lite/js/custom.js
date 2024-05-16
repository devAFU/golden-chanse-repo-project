/* Search Form Toggle */
jQuery(document).ready(function() {
	jQuery(".header-search-toggle").click(function() {
	   jQuery(".header-search-form").toggle();
	   jQuery(".header-search-form .search-field").focus();
	 });
});

/*Mobile Menu Handle*/
jQuery(document).ready(function () {
/* MOBILE TOGLLE MENU HANDLE*/
var menuFocus, navToggleItem, focusBackward;
var menuToggle = document.querySelector('.menu-toggle');
var navMenu = document.querySelector('.nav-menu');
var navMenuLinks = navMenu.getElementsByTagName('a');
var navMenuListItems = navMenu.querySelectorAll('li');
var nav_lastIndex = navMenuListItems.length - 1;
var navLastParent = document.querySelectorAll('.main-navigation > ul > li').length - 1;

document.addEventListener('menu_focusin', function () {
    menuFocus = document.activeElement;
    if (navToggleItem && menuFocus !== navMenuLinks[0]) {
        document.querySelectorAll('.main-navigation > ul > li')[navLastParent].querySelector('a').focus();
    }
    if (menuFocus === menuToggle) {
        navToggleItem = true;
    } else {
        navToggleItem = false;
    }
}, true);


document.addEventListener('keydown', function (e) {
    if (e.shiftKey && e.keyCode == 9) {
        focusBackward = true;
    } else {
        focusBackward = false;
    }
});


for (el of navMenuLinks) {
    el.addEventListener('blur', function (e) {
        if (!focusBackward) {
            if (e.target === navMenuLinks[nav_lastIndex]) {
                menuToggle.focus();
            }
        }
    });
}
menuToggle.addEventListener('blur', function (e) {
    if (focusBackward) {
        navMenuLinks[nav_lastIndex].focus();
    }
});


});

jQuery(document).ready(function() {
        jQuery('.logo h2').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;
            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together
            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});	