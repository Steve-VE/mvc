<?php
    $tag_list = get_tag_list();
?>

<div class="stock-list">
    <?php
        foreach($tag_list as $tag_element){
            echo '<div class="tag">';
            echo '<a href="?tag='. substr( $tag_element, 0, -3 )  .'">';
            echo ucfirst($tag_element);
            echo '</a>';
            echo '</div>';
        }
    ?>
</div>

<hr>