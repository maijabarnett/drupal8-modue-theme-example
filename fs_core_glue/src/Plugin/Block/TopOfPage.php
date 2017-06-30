<?php

namespace Drupal\fs_core_glue\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "top_of_page_home_buttons",
 *   admin_label = @Translation("Top of Page & Home Buttons"),
 *   category = @Translation("Top of Page & Home Buttons"),
 * )
 */
class TopOfPage extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'top_of_page',
      '#source_text' => '123'
    );
  }
}