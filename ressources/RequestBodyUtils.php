<?php
  /**
   *
   */
  require_once 'HrflowApiException.php';

  class RequestBodyUtils
  {
      public static function add_if_not_null(array &$to_fill, $key, $elem) {
        if ($elem != null) {
          $to_fill[$key] = $elem;
        }
      }
  }

?>
