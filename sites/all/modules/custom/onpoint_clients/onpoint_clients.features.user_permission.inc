<?php
/**
 * @file
 * onpoint_clients.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function onpoint_clients_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'edit own client profile'.
  $permissions['edit own client profile'] = array(
    'name' => 'edit own client profile',
    'roles' => array(
      'clients' => 'clients',
    ),
    'module' => 'profile2',
  );

  // Exported permission: 'view own client profile'.
  $permissions['view own client profile'] = array(
    'name' => 'view own client profile',
    'roles' => array(
      'clients' => 'clients',
    ),
    'module' => 'profile2',
  );

  return $permissions;
}
