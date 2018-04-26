<?php 

/*
 * Settings metadata file
 */
return array(
  'googleCivicInformationAPIKey' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'googleCivicInformationAPIKey',
    'type' => 'Text',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Google Civic API Key',
    'help_text' => 'Add your registered Google Civic Information API Key for Open Civic Data API calls',
  ),
  'addressLocationType' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'addressLocationType',
    'type' => 'Integer',
    'default' => '1',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Address location for district lookup.',
    'help_text' => 'Select the address location type to use when looking up a contact\'s districts.',
  ),
  'includedStatesProvinces' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedStatesProvinces',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'States and Provinces included in API calls',
    'help_text' => 'Add states and provinces to include in API scheduled jobs',
  ),
  'includedCounties' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCounties',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Counties included in API calls',
    'help_text' => 'Add counties to include in API scheduled jobs',
  ),
  'includedCities' => array(
    'group_name' => 'Electoral API settings',
    'group' => 'electoral',
    'name' => 'includedCities',
    'type' => 'Array',
    'default' => '',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Cities included in API calls',
    'help_text' => 'Add cities, comma separated, to include in API scheduled jobs',
  ),
);

?>
