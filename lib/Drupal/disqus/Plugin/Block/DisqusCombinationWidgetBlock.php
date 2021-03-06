<?php

namespace Drupal\disqus\Plugin\Block;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 *
 * @Plugin(
 *   id = "disqus_combination_widget",
 *   admin_label = @Translation("Disqus: Combination Widget"),
 *   module = "disqus"
 * )
 */
class DisqusCombinationWidgetBlock extends DisqusBaseBlock {
  protected $id = 'disqus_combination_widget';

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#title' => t('Comments'),
      $this->render('combination_widget')
    );
  }
}
