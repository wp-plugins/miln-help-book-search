<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"; ?>
<!DOCTYPE plist PUBLIC "-//Apple Computer//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
    <array> <!-- miln-helpbooksearch: <?php echo get_search_query() ?> -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
        <dict>
            <key>title</key>
            <string><?php the_title(); ?></string>
            <key>url</key>
            <string><?php the_permalink(); ?>helpbook</string>
            <key>abstract</key>
            <string><?php echo helpbooksearch_shorten(get_the_excerpt(),15); ?></string>
        </dict>
<?php endwhile; ?>
<?php else : ?>
        <dict>
            <key>NoResultsFound</key>
            <string>No results were found.</string>
        </dict>
<?php endif; ?>
    </array>
</plist>
