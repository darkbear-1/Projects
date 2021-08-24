<?php require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php"; ?>
<?php
  $widgetContents = get_option( 'site_settings', array() )['widget-variant'];
  $termId = get_queried_object()->term_id;
  $postId = get_the_ID();
  $get_stati_rubriks = get_the_terms( $postId, 'stati_rubriki' );
  $get_novosti_rubriks = get_the_terms( $postId, 'novosti_rubriki' );
  $get_blanki_rubriks = get_the_terms( $postId, 'razdel_blanki' );
  $checker = false;
?>

<?php foreach ($widgetContents as $keytest => $valuetest): ?>
  <?php if (!$checker && !empty($valuetest['widget-stati-pokaz']) && in_array($postId, $valuetest['widget-stati-pokaz'])): ?>
    <?php $checker = true; ?>
  <?php endif; ?>
<?php endforeach; ?>

  <?php foreach ($widgetContents as $key => $value): ?>
    <?php
    if (!empty($value['widget-rubrik-stati-pokaz'])) {
      $statiRubriks = explode(',', $value['widget-rubrik-stati-pokaz']);
    } else {
      $statiRubriks = array();
    }
    if (!empty($value['widget-rubrik-news-pokaz'])) {
      $newsRubriks = explode(',', $value['widget-rubrik-news-pokaz']);
    } else {
      $newsRubriks = array();
    }
    if (!empty($value['widget-rubrik-blanki-pokaz'])) {
      $blankiRubriks = explode(',', $value['widget-rubrik-blanki-pokaz']);
    } else {
      $blankiRubriks = array();
    }
    $show_stati_checker = false;
    $show_novosti_checker = false;
    $show_blanki_checker = false;


      if (!is_tax() && get_post_type($postId) == 'stati' && !$checker) {
        foreach ($statiRubriks as $key3 => $value3) {
          if ($value3 == $get_stati_rubriks[0]->term_id) {
            $show_stati_checker = true;
          }
          // foreach ($get_stati_rubriks as $key4 => $value4) {
          //   if (in_array($value3, (array) $value4)) {
          //     $show_stati_checker = true;
          //   }
          // }
        }
      } else {
        $show_stati_checker = false;
      }

      if (!is_tax() && get_post_type($postId) == 'novosti' && !$checker) {
        foreach ($newsRubriks as $key5 => $value6) {
          if ($value6 == $get_novosti_rubriks[0]->term_id) {
            $show_novosti_checker = true;
          }
          // foreach ($get_novosti_rubriks as $key7 => $value8) {
          //   if (in_array($value5, (array) $value8)) {
          //     $show_novosti_checker = true;
          //   }
          // }
        }
      } else {
        $show_novosti_checker = false;
      }

      if (!is_tax() && get_post_type($postId) == 'blanki' && !$checker) {
        foreach ($blankiRubriks as $key5 => $value6) {
          if ($value6 == $get_blanki_rubriks[0]->term_id) {
            $show_blanki_checker = true;
          }
          // foreach ($get_novosti_rubriks as $key7 => $value8) {
          //   if (in_array($value5, (array) $value8)) {
          //     $show_novosti_checker = true;
          //   }
          // }
        }
      } else {
        $show_blanki_checker = false;
      }
      var_dump($show_blanki_checker);


    //     var_dump((!empty($value['widget-stati-pokaz']) && !in_array($postId, $value['widget-stati-pokaz'])));
    // var_dump((!empty($value['widget-stati-pokaz']) && in_array($postId, $value['widget-stati-pokaz'])));
    ?>
    <?php if (!is_tax() && (!empty($value['widget-stati-pokaz']) && in_array($postId, $value['widget-stati-pokaz'])) || $show_stati_checker || $show_novosti_checker || $show_blanki_checker): ?>
      <div class="cat_wt" data-link="<?php echo $value['widget-link'] ?>" data-run-time="<?php echo $value['time-to-run'] ?>">
        <div class="cat_wt_body">
          <div class="cat_image"><img src="/wp-content/themes/rgtheme/images/cat.svg" alt=""></div>
          <div class="cat_wt_body_title">Онлайн-Котсультант</div>
          <div class="cat_wt_body_div">
            <?php foreach (explode('|', $value['widget-text-variants']) as $key2 => $value2): ?>
              <div class="cat_wt_body_qst message<?php echo $key2 + 1 ?>"><?php echo str_replace('\\', '', $value2) ?></div>
            <?php endforeach; ?>
          </div>
          <div class="cat_wt_body_key">
            <div class="cat_wt_body_ask_pre first" data-widget-id="<?php echo str_replace('item-', 'wtid_', $key) ?>"><?php echo $value['widget-positive-text'] ?></div>
            <div class="cat_wt_body_ask_pre last" data-widget-id="<?php echo str_replace('item-', 'wtid_', $key) ?>"><?php echo $value['widget-negative-text'] ?></div>
          </div>
          <div class="cat_wt_hide" data-widget-id="<?php echo str_replace('item-', 'wtid_', $key) ?>"><svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M19.9395 7.39966L22.0608 9.66947L12.0001 20.4344L1.93945 9.66947L4.06077 7.39966L12.0001 15.8948L19.9395 7.39966Z" fill="#C0C0C0"/></svg><?php echo $value['widget-hide-text'] ?></div>
        </div>
      </div>
      <div class="cat_wt_mini">
        <img src="<?php echo wp_get_attachment_image_src($value['widget-hide-image'], 'full')[0] ?>" alt="">
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
