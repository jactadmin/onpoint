<?php
/**
 * @file
 * onpoint_clients.features.inc
 */

/**
 * Implements hook_views_api().
 */
function onpoint_clients_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_default_profile2_type().
 */
function onpoint_clients_default_profile2_type() {
  $items = array();
  $items['client'] = entity_import('profile2_type', '{
    "userCategory" : true,
    "userView" : true,
    "type" : "client",
    "label" : "Client Information",
    "weight" : "0",
    "data" : { "registration" : 1 },
    "rdf_mapping" : []
  }');
  return $items;
}
