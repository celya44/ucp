<?php
/**
 * This is the User Control Panel Object.
 *
 * License for all code of this FreePBX module can be found in the license file inside the module directory
 * Copyright 2006-2014 Schmooze Com Inc.
 */

// VIEW_UCP_FOOTER_CONTENT
$set['value'] = 'views/dashfootercontent.php';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 1;
$set['hidden'] = 1;
$set['level'] = 1;
$set['sortorder'] = 355;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'Styling and Logos';
$set['emptyok'] = 0;
$set['name'] = 'View: UCP dashfootercontent.php';
$set['description'] = 'dashfootercontent.php view. This should never be changed except for very advanced layout changes';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('VIEW_UCP_FOOTER_CONTENT',$set,true);

// UCPRSSFEEDS
$set['value'] = "";
$set['defaultval'] = "";
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 0;
$set['module'] = 'ucp';
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'RSS Feeds';
$set['description'] = 'RSS Feeds that are displayed in UCP. This overrides "System Setup" for UCP. If this is blank then the feeds will be taken from RSS Feeds under "System Setup". Separate each feed by a new line';
$set['type'] = CONF_TYPE_TEXTAREA;
FreePBX::Config()->define_conf_setting('UCPRSSFEEDS',$set);

// VIEW_UCP_FOOTER_CONTENT
$set['value'] = 'assets/icons';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 1;
$set['hidden'] = 1;
$set['level'] = 1;
$set['sortorder'] = 355;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'Styling and Logos';
$set['emptyok'] = 0;
$set['name'] = 'View: UCP icons';
$set['description'] = 'UCP icons folder. This should never be changed except for very advanced layout changes';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('VIEW_UCP_ICONS_FOLDER',$set,true);

// VIEW_UCP_IMAGE_FOLDER
$set['value'] = 'assets/images';
$set['defaultval'] = &$set['value'];
$set['readonly'] = 1;
$set['hidden'] = 1;
$set['level'] = 1;
$set['sortorder'] = 355;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'Styling and Logos';
$set['emptyok'] = 0;
$set['name'] = 'View: UCP images';
$set['description'] = 'UCP images folder. This should never be changed except for very advanced layout changes';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('VIEW_UCP_IMAGE_FOLDER', $set, true);

//UCPCHANGEUSERNAME
$set['value'] = true;
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 0;
$set['name'] = 'Allow Username Changes';
$set['description'] = 'Allow users to change their username in UCP';
$set['type'] = CONF_TYPE_BOOL;
FreePBX::Config()->define_conf_setting('UCPCHANGEUSERNAME',$set,true);

//UCPCHANGEPASSWORD
$set['value'] = true;
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 0;
$set['name'] = 'Allow Password Changes';
$set['description'] = 'Allow users to change thier password in UCP';
$set['type'] = CONF_TYPE_BOOL;
FreePBX::Config()->define_conf_setting('UCPCHANGEPASSWORD',$set,true);

// UCP_SESSION_TIMEOUT
$set['value'] = '30';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 355;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP Session Timeout';
$set['description'] = 'The number of days a session token will be valid for. Clear this setting if you want tokens to last forever (Not Recommended)';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPSESSIONTIMEOUT',$set,true);

// UCPCASENABLE
$set['value'] = false;
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 0;
$set['name'] = 'Enable CAS';
$set['description'] = 'Enable login with CAS';
$set['type'] = CONF_TYPE_BOOL;
FreePBX::Config()->define_conf_setting('UCPCASENABLE',$set,true);

// UCPCASHOST
$set['value'] = '';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS Host';
$set['description'] = 'UCP CAS Host';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASHOST',$set,true);

// UCPCASPORT
$set['value'] = '443';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS Port';
$set['description'] = 'UCP CAS Port';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASPORT',$set,true);

// UCPCASLDAP
$set['value'] = '';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS LDAP';
$set['description'] = 'UCP CAS LDAP URL';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASLDAP',$set,true);

// UCPCASLDAPDN
$set['value'] = '';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS LDAP DN';
$set['description'] = 'UCP CAS LDAP DN';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASLDAPDN',$set,true);

// UCPCASLDAPSEARCH
$set['value'] = '';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS LDAP Search';
$set['description'] = 'Search query to get the LDAP user from the CAS user. Use %s in your string';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASLDAPSEARCH',$set,true);

// UCPCASLDAPPARAM
$set['value'] = '';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP CAS LDAP Parameter';
$set['description'] = 'LDAP parameter to get the user login for UCP';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPCASLDAPPARAM',$set,true);

// UCPPOLLINGDELAY
$set['value'] = '5000';
$set['defaultval'] =& $set['value'];
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['level'] = 1;
$set['sortorder'] = 400;
$set['module'] = 'ucp'; //This will help delete the settings when module is uninstalled
$set['category'] = 'User Control Panel';
$set['emptyok'] = 1;
$set['name'] = 'UCP Polling Delay';
$set['description'] = 'Time in ms between polling time in UCP';
$set['type'] = CONF_TYPE_TEXT;
FreePBX::Config()->define_conf_setting('UCPPOLLINGDELAY',$set,true);
