<?php

namespace Drupal\plupload_widget\Plugin\Field\FieldWidget;

use Drupal\Component\Utility\Bytes;

/**
 * Shared functionality between all widgets.
 */
trait PluploadWidgetTrait {

  /**
   * Get the optimum chunk size.
   *
   * @return float|int
   *   The optimum chunk size
   */
  public function getChunkSize() {
    // 500 Kb per chunk does not sound bad...
    $good_size = 1024 * 500;
    // This is what the PLUPLOAD module
    // field element takes as the default
    // chunk size.
    $size = Bytes::toInt(ini_get('post_max_size'));
    if ($size > $good_size) {
      $size = $good_size;
    }
    return $size;
  }

  /**
   * Returns the maximum configured file size for the Field stroage in Bytes.
   *
   * @return double|int
   *   The maximum file size
   */
  public function getMaxFileSize() {
    // We don't care about PHP's max post
    // or upload file size because we use
    // plupload.
    $size = $this->getFieldSetting('max_filesize');
    $size = Bytes::toInt($size);
    return $size;
  }

}
