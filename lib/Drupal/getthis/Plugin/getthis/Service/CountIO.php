<?php

namespace Drupal\getthis\Plugin\getthis\Service;
use Drupal\getthis\ServiceInterface;

$plugin = array(
  'class' => '\Drupal\getthis\Plugin\getthis\Service\CountIO',
);

class CountIO implements ServiceInterface {

  public static function request($query_parameters) {
    $response = drupal_http_request('http://count.io/vb/' . $query_parameters['group'] . '/' . $query_parameters['item']);
    return drupal_json_decode($response->data);
  }

  public static function render($response) {
    $variables = array(
      'header' => array_keys($response),
      'rows' => array(array_values($response)),
    );
    return theme('table', $variables);
  }

}
