(function( $ ) {
    $.fn.starRating = function( options ) {

        // Iterate and reformat each matched element.
        return this.each(function() {

            function buildStars() {
                var html = '<div class="star-bg"></div><div class="stars">';

                for(var s=0; s<settings.stars; s++) {
                    html+= '<i class="star-cutout"></i>';
                }

                html+= '</div>';

                return html;
            }

            function getBgWidth($el) {
                var rating = $el.data('rating'),
                    starWidth = $el.find('.stars > i:eq(0)').width(),
                    spacing = 0,
                    fullStars = Math.floor(rating);

                return rating * starWidth + ((settings.stars - fullStars) * spacing) ;

            }

            var defaults = {
                "container": ".star-rating",
                "stars": 5,
            };

            var settings = $.extend( true, {}, defaults, options ),
                $elem = $( this );

            $elem.html(buildStars());
            $elem.find('.star-bg').css('width', getBgWidth($(this)));

        });

    };
})( jQuery );