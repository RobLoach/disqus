<?php

namespace Drupal\disqus\Plugin\Block;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 *
 * @Plugin(
 *   id = "disqus_top_commenters",
 *   admin_label = @Translation("Disqus: Top Commenters"),
 *   module = "disqus"
 * )
 */
class DisqusTopCommentersBlock extends DisqusBaseBlock {
  protected $id = 'disqus_top_commenters';

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#title' => t('Top Commenters'),
      $this->render('top_commenters_widget')
    );
  }
}
