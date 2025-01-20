;(function($) {
    'use strict';
    $(window).on('elementor/frontend/init', function() {
        // Hook for scroll adjustment
        elementorFrontend.hooks.addFilter('frontend/handlers/menu_anchor/scroll_top_distance', function(scrollTop) {
            console.log('scrollTop');
            return scrollTop - 20;
        });

        // Hook for custom widget initialization
        elementorFrontend.hooks.addAction('frontend/element_ready/Cr_SS_Widget.default', function(scope, $) {
            $(document).ready(function() {
                // Get width and height of the share trigger
                var Width = $(scope).find('.cr-share-trigger').css('width');
                var Height = $(scope).find('.cr-share-trigger').css('height');

                // Adjust positions of share icons
                $(scope).find('.cr-left').css({ 'left': Width });
                $(scope).find('.cr-right').css({ 'right': Width });
                $(scope).find('.cr-bottom').css({ 'top': Height });
                $(scope).find('.cr-top').css({ 'bottom': Height });

                // Add event listener for the share trigger
                $(scope).find('.cr-share-trigger').on('click', function() {
                    $(scope).find('.cr-share-icon').addClass('cr-shared');
                    console.log(true);
                });

                // Remove class on body click
                $(scope).find('body').on('click', function() {
                    $(scope).find('.cr-share-icon').removeClass('cr-shared');
                    console.log(false);
                });

                // Remove class if click is outside the share trigger
                $(document).mouseup(function(e) {
                    var container = $(".cr-share-trigger");
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        $(scope).find('.cr-share-icon').removeClass('cr-shared');
                    }
                });

                // Wrap specific characters in span with a class
                function wrapCharactersWithSpan(node) {
                    if (node.nodeType === 3) { // Text node
                        const regex = /[4()!?+\-\/=]/g; // Target characters
                        if (regex.test(node.nodeValue)) {
                            const $parent = $(node).parent();
                            const replacedText = node.nodeValue.replace(regex, (match) => {
                                return `<span class="change-font">${match}</span>`;
                            });
                            $parent.html($parent.html().replace(node.nodeValue, replacedText));
                        }
                    } else if (node.nodeType === 1 && node.nodeName !== "SCRIPT" && node.nodeName !== "STYLE") {
                        $(node).contents().each(function() {
                            wrapCharactersWithSpan(this);
                        });
                    }
                }

                // Apply the function to the current scope
                wrapCharactersWithSpan(document.body);
            });
        });
    });
})(jQuery);
