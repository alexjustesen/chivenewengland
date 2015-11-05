<?php //inc/entry-meta.php

    if ( ! function_exists( 'chivenewengland_entry_meta' ) ) {
        function chivenewengland_entry_meta() {
            // Translators: used between list items, there is a space after the comma.
            $categories_list = get_the_category_list( __( ', ', 'chivenewengland' ) );

            // Translators: used between list items, there is a space after the comma.
            $tag_list = get_the_tag_list( '', __( ', ', 'chivenewengland' ) );

            $date = sprintf( '<time class="entry-date" datetime="%2$s">%3$s</time>',
                esc_url( get_permalink() ),
                esc_attr( get_the_date( 'c' ) ),                
                esc_html( get_the_time( 'l, F jS, Y \a\t g:ia' ) )
            );

            $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_attr( sprintf( __( 'View all posts by %s', 'chivenewengland' ), get_the_author() ) ),
                get_the_author()
            );

            // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
            if ( $tag_list ) {
                $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'chivenewengland' );
            } elseif ( $categories_list ) {
                $utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'chivenewengland' );
            } else {
                $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'chivenewengland' );
            }

            printf( $utility_text,
                $categories_list,  // %1
                $tag_list, // %2
                $date, // %3
                $author // %4
            );
        }
    }

    if ( ! function_exists( 'chivenewengland_entry_meta_dt' ) ) {
        function chivenewengland_entry_meta_dt() {
            $date = sprintf( '<time class="entry-date" datetime="%1$s">%2$s</time>',
                esc_attr( get_the_date( 'c' ) ),
                esc_html( get_the_time( 'l, F jS, Y \a\t g:ia' ) )
            );
            
            return $date;
        }
    }
