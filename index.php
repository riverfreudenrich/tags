      <?php
      $tags = get_tags(array(
        'hide_empty' => false
      ));
      foreach ($tags as $tag) {
      ?>
      <button type="button" class="tag-<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></button>
      <?php
         }
      ?>
