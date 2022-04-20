<?php

namespace Drupal\plupload_widget;

/**
 * Summary of UploadConfiguration.
 */
class UploadConfiguration {

  /**
   * Maximum number of files to upload.
   *
   * @var int
   */
  public $max_files;

  /**
   * A list of validators to apply to uploaded files.
   *
   * @var string[]
   */
  public $validators;

  /**
   * Size of each portion of submitted data.
   *
   * @var string
   */
  public $chunk_size;

  /**
   * Maximum size of uploaded files.
   *
   * @var string
   */
  public $max_size;

  /**
   * Number of files for the field.
   *
   * @var int
   */
  public $cardinality;

  /**
   * Location where files should be uploaded.
   *
   * @var string
   */
  public $upload_location;

}
