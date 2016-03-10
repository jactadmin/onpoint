<?php
/**
 * @file
 * onpoint_clients.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function onpoint_clients_user_default_roles() {
  $roles = array();

  // Exported role: clients.
  $roles['clients'] = array(
    'name' => 'clients',
    'weight' => 4,
  );

  return $roles;
}
