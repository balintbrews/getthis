<?php

namespace Drupal\getthis;

/**
* Defines an interface for plugins defining service plugins.
*/
interface ServiceInterface {

  /**
   * Performs the request towards the service.
   *
   * @param string $query_parameters
   *   Query parameters to make the request.
   *
   * @return array
   *   Response from the service turned into an array.
   */
  public static function request($query_parameters);

  /**
   * Renders the output from the response.
   *
   * @param array $response
   *   Response from the service in array format.
   *
   * @return string
   *   Rendered output from the response.
   */
  public static function render($response);

}
