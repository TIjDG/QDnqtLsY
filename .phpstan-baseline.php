<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\Mail\\\\SMTP\\\\OauthProvider\\\\ProviderInterface\\:\\:getState\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/front/notificationmailingsetting.form.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type DBmysql is not subtype of native type DB\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/install/install.php',
];
$ignoreErrors[] = [
	'message' => '#^Empty array passed to foreach\\.$#',
	'identifier' => 'foreach.emptyArray',
	'count' => 2,
	'path' => __DIR__ . '/install/migrations/update_10.0.0_to_10.0.1.php',
];
$ignoreErrors[] = [
	'message' => '#^Empty array passed to foreach\\.$#',
	'identifier' => 'foreach.emptyArray',
	'count' => 3,
	'path' => __DIR__ . '/install/migrations/update_10.0.x_to_11.0.0.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 4,
	'path' => __DIR__ . '/install/migrations/update_9.1.x_to_9.2.0.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 1 on array\\{list\\<string\\>, list\\<numeric\\-string\\>\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/install/migrations/update_9.5.1_to_9.5.2.php',
];
$ignoreErrors[] = [
	'message' => '#^Empty array passed to foreach\\.$#',
	'identifier' => 'foreach.emptyArray',
	'count' => 2,
	'path' => __DIR__ . '/install/migrations/update_9.5.x_to_10.0.0.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonDBTM is not subtype of native type \'PhoneModel\'\\|\'PrinterModel\'\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/install/migrations/update_9.5.x_to_10.0.0/itemtype_pictures.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Appliance\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Appliance.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Appliance\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Appliance.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/Auth.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Auth\\:\\:connection_ldap\\(\\) never assigns null to &\\$error so it can be removed from the by\\-ref type\\.$#',
	'identifier' => 'parameterByRef.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Auth.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Auth.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$fields on object\\|false\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always false\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Method AuthLDAP\\:\\:ldapStamp2UnixStamp\\(\\) should return int but returns string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between mixed and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/src/AuthLDAP.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'connect_string\' does not exist on string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthMail.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'id\' does not exist on string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/AuthMail.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Blacklist\\:\\:\\$blacklists \\(array\\) on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.property',
	'count' => 1,
	'path' => __DIR__ . '/src/Blacklist.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between Change\\|Contract\\|Problem\\|Project\\|Ticket and Item_Devices will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Budget.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Budget\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Budget.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Budget\\:\\:showValuesByEntity\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Budget.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Cable\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Cable.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Cable\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Cable.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CableStrand\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CableStrand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(CartridgeItem\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/CartridgeItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(CartridgeItem\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/CartridgeItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Certificate\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Certificate.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Certificate\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Certificate.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property CommonGLPI\\:\\:\\$fields\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Change.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Change.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonDBTM is not subtype of native type Group\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Change.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Cluster\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Cluster.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Cluster\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Cluster.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter &\\$item by\\-ref type of method CommonDBConnexity\\:\\:canConnexityItem\\(\\) expects CommonDBTM\\|null, CommonDBTM\\|false given\\.$#',
	'identifier' => 'parameterByRef.type',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBConnexity.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBRelation\\:\\:processMassiveActionsForOneItemtype\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBRelation.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBRelation.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'identifier' => 'if.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBTM\\:\\:forwardEntityInformations\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBTM\\:\\:isActive\\(\\) should return bool but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBTM\\:\\:isDeleted\\(\\) should return bool but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBTM\\:\\:isRecursive\\(\\) should return bool but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBTM\\:\\:isTemplate\\(\\) should return bool but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type class\\-string is not subtype of native type static\\(CommonDBTM\\)\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Property CommonDBTM\\:\\:\\$right \\(int\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Property CommonDBTM\\:\\:\\$searchopt \\(array\\) does not accept default value of type false\\.$#',
	'identifier' => 'property.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBTM.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonDBVisible\\:\\:showVisibility\\(\\) with return type void returns true but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDBVisible.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between \\$this\\(CommonDropdown\\) and IPAddress will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonDropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/src/CommonDropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_integer\\(\\) with string will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonGLPI.php',
];
$ignoreErrors[] = [
	'message' => '#^Unsafe call to private method CommonGLPI\\:\\:getTabIconClass\\(\\) through static\\:\\:\\.$#',
	'identifier' => 'staticClassAccess.privateMethod',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonGLPI.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$withtemplate \\(int\\) of method CommonITILCost\\:\\:showForObject\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILCost.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$params \\(array\\{\\}\\) of method CommonITILObject\\:\\:getCommonDatatableColumns\\(\\) is incompatible with type array\\{ticket_stats\\: bool\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$params \\(array\\{\\}\\) of method CommonITILObject\\:\\:getDatatableEntries\\(\\) is incompatible with type array\\{ticket_stats\\: bool\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method CommonDBRelation\\:\\:getLinkedTo\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILObject_CommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonITILRecurrent is not subtype of native type RecurrentChange\\|TicketRecurrent\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILRecurrentCron.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Document\\:\\:getBaseComponent\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Node\\:\\:add\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILTask\\:\\:displayPlanningItem\\(\\) with return type void returns string but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILTask\\:\\:genericDisplayPlanningItem\\(\\) should return string but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 2,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILTask\\:\\:genericPopulatePlanning\\(\\) should return array but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 4,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILTask\\:\\:getItemsAsVCalendars\\(\\) should return array\\<Sabre\\\\VObject\\\\Component\\\\VCalendar\\> but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILTask\\:\\:post_updateItem\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonITILValidation\\:\\:getItilObjectItemType\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'identifier' => 'arguments.count',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonITILValidationCron.php',
];
$ignoreErrors[] = [
	'message' => '#^Method CommonItilObject_Item\\:\\:dropdown\\(\\) should return int\\|string\\|false but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/CommonItilObject_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Computer\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Computer\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Computer\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'contact\' on array\\{\\}\\|array\\{states_id\\?\\: mixed, locations_id\\?\\: mixed\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'contact_num\' on array\\{\\}\\|array\\{states_id\\?\\: mixed, locations_id\\?\\: mixed\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'groups_id\' on array\\{\\}\\|array\\{states_id\\?\\: mixed, locations_id\\?\\: mixed\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'users_id\' on array\\{\\}\\|array\\{states_id\\?\\: mixed, locations_id\\?\\: mixed\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property CommonDBTM\\:\\:\\$updates \\(array\\<mixed\\>\\) on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.property',
	'count' => 1,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always false\\.$#',
	'identifier' => 'booleanOr.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/src/Computer.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$expanded_info \\? array\\<string, \\{name\\: string, dark\\: boolean\\}\\> \\: array\\<string, string\\>\\)\\: Unexpected token "\\$expanded_info", expected type at offset 154 on line 6$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Config.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$is_deleted \\(int\\) of method Consumable\\:\\:getMassiveActionsForItemtype\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Consumable.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(ConsumableItem\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/ConsumableItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(ConsumableItem\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/ConsumableItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$first_connection on null\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/DBConnection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DBConnection\\:\\:showAllReplicateDelay\\(\\) should return string\\|null but return statement is missing\\.$#',
	'identifier' => 'return.missing',
	'count' => 1,
	'path' => __DIR__ . '/src/DBConnection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$no_display \\? string \\: null\\)\\: Unexpected token "\\$no_display", expected type at offset 236 on line 6$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/DBConnection.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/DBmysqlIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(DCRoom\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/DCRoom.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(DatabaseInstance\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/DatabaseInstance.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(DatabaseInstance\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/DatabaseInstance.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_int\\(\\) with int will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on string\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DbUtils\\:\\:getHourFromSql\\(\\) should return array but returns string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DbUtils\\:\\:getTreeLeafValueName\\(\\) should return string but returns array\\<string, mixed\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DbUtils\\:\\:getTreeValueCompleteName\\(\\) should return string but returns array\\<string, mixed\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DbUtils\\:\\:getTreeValueName\\(\\) should return string but returns array\\<int, int\\|string\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'\\.php\' and bool will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/DbUtils.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return with type array\\|null is incompatible with native type bool\\.$#',
	'identifier' => 'return.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/DisplayPreference.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Document.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Document_Item\\:\\:showForDocument\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Document_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Domain\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Domain\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Domain\\:\\:dropdownDomains\\(\\) with return type void returns int\\<0, max\\> but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Domain\\:\\:dropdownDomains\\(\\) with return type void returns int\\|string but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DomainRecord\\:\\:canCreateItem\\(\\) should return bool but returns int\\<0, max\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/DomainRecord.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Dropdown\\:\\:getDropdownConnect\\(\\) should return array\\|string but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 3,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Dropdown\\:\\:getDropdownFindNum\\(\\) should return array\\|string but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 3,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Dropdown\\:\\:getDropdownUsers\\(\\) should return array\\|string but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Dropdown\\:\\:getDropdownValue\\(\\) should return array\\|string but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 2,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Dropdown\\:\\:show\\(\\) should return int\\|string\\|false but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between float and \'0\' will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Dropdown.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonDBTM\\:\\:getAdditionalField\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/DropdownTranslation.php',
];
$ignoreErrors[] = [
	'message' => '#^Method DropdownTranslation\\:\\:post_purgeItem\\(\\) with return type void returns true but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/DropdownTranslation.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Enclosure\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Enclosure.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Enclosure\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Enclosure.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Enclosure\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Enclosure.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Entity.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Entity\\:\\:showUiCustomizationOptions\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Entity.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$val \\=\\=\\= null \\? array\\<int\\|string, string\\> \\: string\\)\\: Unexpected token "\\$val", expected type at offset 275 on line 9$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Entity.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Fieldblacklist\\:\\:isFieldBlacklisted\\(\\) should return true but returns bool\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Fieldblacklist.php',
];
$ignoreErrors[] = [
	'message' => '#^Method GLPIKey\\:\\:keyExists\\(\\) should return string but returns bool\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/GLPIKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Mime\\\\Header\\\\HeaderInterface\\:\\:getAddresses\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 4,
	'path' => __DIR__ . '/src/GLPIMailer.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 3,
	'path' => __DIR__ . '/src/GLPIMailer.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between string and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/GLPIMailer.php',
];
$ignoreErrors[] = [
	'message' => '#^Dead catch \\- Glpi\\\\Exception\\\\PasswordTooWeakException is never thrown in the try block\\.$#',
	'identifier' => 'catch.neverThrown',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/API.php',
];

$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\API\\:\\:applyMassiveAction\\(\\) with return type void returns array\\|null but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/API.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\API\\:\\:getActiveProfile\\(\\) should return int but returns array\\<string, mixed\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/API.php',
];
$ignoreErrors[] = [
	'message' => '#^You should not use the `exit` function\\. It prevents the execution of post\\-request/post\\-command routines\\.$#',
	'identifier' => 'glpi.forbidExit',
	'count' => 3,
	'path' => __DIR__ . '/src/Glpi/Api/API.php',
];
$ignoreErrors[] = [
	'message' => '#^You should not use the `http_response_code` function to change the response code\\. Due to a PHP bug, it may not provide the expected result \\(see https\\://bugs\\.php\\.net/bug\\.php\\?id\\=81451\\)\\.$#',
	'identifier' => 'glpi.forbidHttpResponseCode',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/API.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\APIRest\\:\\:parseIncomingParams\\(\\) with return type void returns string but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/APIRest.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type array is not subtype of native type array\\<int\\|string, array\\<mixed\\>\\|string\\>\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/APIRest.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between false and array will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/APIRest.php',
];
$ignoreErrors[] = [
	'message' => '#^You should not use the `exit` function\\. It prevents the execution of post\\-request/post\\-command routines\\.$#',
	'identifier' => 'glpi.forbidExit',
	'count' => 3,
	'path' => __DIR__ . '/src/Glpi/Api/APIRest.php',
];
$ignoreErrors[] = [
	'message' => '#^You should not use the `http_response_code` function to change the response code\\. Due to a PHP bug, it may not provide the expected result \\(see https\\://bugs\\.php\\.net/bug\\.php\\?id\\=81451\\)\\.$#',
	'identifier' => 'glpi.forbidHttpResponseCode',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/APIRest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Controller\\\\CoreController\\:\\:authorize\\(\\) should return Glpi\\\\Http\\\\Response but returns Psr\\\\Http\\\\Message\\\\ResponseInterface\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/CoreController.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Controller\\\\CoreController\\:\\:token\\(\\) should return Glpi\\\\Http\\\\Response but returns Psr\\\\Http\\\\Message\\\\ResponseInterface\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/CoreController.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\{name\\: string, default\\: mixed\\}\\[\\] \\$allowed_keys_mapping\\)\\: Unexpected token "\\{", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/CoreController.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Controller\\\\ITILController\\:\\:getSubitemLinkFields\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/ITILController.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Controller\\\\ITILController\\:\\:getSubitemSchemaFor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/ITILController.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'label\' does not exist on string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/ManagementController.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'schema_name\' does not exist on string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/ManagementController.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'version_introduced\' does not exist on string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Controller/ManagementController.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Doc\\\\Schema\\:\\:getUnionSchema\\(\\) should return array\\{x\\-subtypes\\: array\\{schema_name\\: string, itemtype\\: string\\}, type\\: \'object\', properties\\: array\\} but returns array\\{x\\-subtypes\\: non\\-empty\\-list\\<array\\{schema_name\\: string, itemtype\\: mixed\\}\\>, type\\: \'object\', properties\\: mixed\\}\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Doc/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Doc\\\\Schema\\:\\:validateTypeAndFormat\\(\\) should return bool but returns string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Doc/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type string is not subtype of native type bool\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Doc/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\<" between 0 and 0 is always false\\.$#',
	'identifier' => 'smaller.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/RSQL/Lexer.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression "\\$action\\(\\$input\\)" on a separate line does not do anything\\.$#',
	'identifier' => 'expr.resultUnused',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Router.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Router\\:\\:doRequestMiddleware\\(\\) never returns Glpi\\\\Http\\\\Response so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Router.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Api\\\\HL\\\\Router\\:\\:resumeSession\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Router.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Glpi\\\\Api\\\\HL\\\\Router\\:\\:\\$final_request \\(Glpi\\\\Http\\\\Request\\|null\\) is never assigned null so it can be removed from the property type\\.$#',
	'identifier' => 'property.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Router.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Glpi\\\\Api\\\\HL\\\\Router\\:\\:\\$original_request \\(Glpi\\\\Http\\\\Request\\|null\\) is never assigned null so it can be removed from the property type\\.$#',
	'identifier' => 'property.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Router.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 0 does not exist on array\\<class\\-string\\<Glpi\\\\Api\\\\HL\\\\Controller\\\\AbstractController\\>, string\\>\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 1 does not exist on array\\<class\\-string\\<Glpi\\\\Api\\\\HL\\\\Controller\\\\AbstractController\\>, string\\>\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Api/HL/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Glpi\\\\Asset\\\\Asset\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Asset.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Glpi\\\\Asset\\\\Asset\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Asset.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type Glpi\\\\Asset\\\\AssetModel is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Asset.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type Glpi\\\\Asset\\\\AssetType is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Asset.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type SplFileObject is not subtype of native type DirectoryIterator\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Asset/AssetDefinitionManager.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Asset\\\\AssetModel\\:\\:getById\\(\\) should return static\\(Glpi\\\\Asset\\\\AssetModel\\)\\|false but returns Glpi\\\\Asset\\\\AssetModel\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/AssetModel.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Asset\\\\AssetType\\:\\:getById\\(\\) should return static\\(Glpi\\\\Asset\\\\AssetType\\)\\|false but returns Glpi\\\\Asset\\\\AssetType\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/AssetType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Asset\\\\Asset_PeripheralAsset\\:\\:getTabNameForItem\\(\\) never returns array\\<string\\> so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Asset_PeripheralAsset.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$source_itemtype$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Capacity/AbstractCapacity.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$classname$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Asset/Capacity/CapacityInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Cache/CacheManager.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:\\$fields\\.$#',
	'identifier' => 'property.notFound',
	'count' => 5,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:add\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:can\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 3,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:delete\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getFromDB\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getType\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:isField\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:isNewItem\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:update\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Document\\:\\:getBaseComponent\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Calendar.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getFromDB\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Principal.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\CalDAV\\\\Backend\\\\Principal\\:\\:getPrincipalByPath\\(\\) should return array but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Backend/Principal.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getFromDB\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Plugin/Acl.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getFromDB\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Plugin/Browser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\CalDAV\\\\Plugin\\\\Browser\\:\\:httpGet\\(\\) should return bool but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Plugin/Browser.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Glpi\\\\CalDAV\\\\Contracts\\\\CalDAVCompatibleItemInterface\\:\\:getFromDB\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/CalDAV/Plugin/CalDAV.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/AbstractCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function property_exists\\(\\) with \\$this\\(Glpi\\\\Console\\\\AbstractCommand\\) and \'db\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/AbstractCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Glpi\\\\Console\\\\AbstractCommand\\:\\:\\$progress_bar \\(Symfony\\\\Component\\\\Console\\\\Helper\\\\ProgressBar\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/AbstractCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type SplFileInfo is not subtype of native type DirectoryIterator\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/CommandLoader.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Console\\\\Database\\\\InstallCommand\\:\\:shouldSetDBConfig\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Database/InstallCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Diagnostic/CheckHtmlEncodingCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Diagnostic/CheckSourceCodeIntegrityCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Match expression does not handle remaining value\\: mixed$#',
	'identifier' => 'match.unhandled',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Diagnostic/CheckSourceCodeIntegrityCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Console\\\\Migration\\\\RacksPluginToCoreCommand\\:\\:getFallbackRoomId\\(\\) never returns float so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Migration/RacksPluginToCoreCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Console\\\\Migration\\\\RacksPluginToCoreCommand\\:\\:getImportErrorsVerbosity\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Migration/RacksPluginToCoreCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Console\\\\Migration\\\\RacksPluginToCoreCommand\\:\\:getImportErrorsVerbosity\\(\\) never returns float so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Migration/RacksPluginToCoreCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Console\\\\Plugin\\\\InstallCommand\\:\\:isAlreadyInstalled\\(\\) should return array but returns bool\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Plugin/InstallCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/Security/DisableTFACommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Console/User/AbstractUserCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Symfony\\\\Component\\\\Console\\\\Helper\\\\HelperInterface\\:\\:ask\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Console/User/GrantCommand.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Controller/ApiController.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Controller/StatusController.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$interval_unit with type Glpi\\\\DBAL\\\\QueryExpression\\|int\\|string is not subtype of native type string\\.$#',
	'identifier' => 'parameter.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/DBAL/QueryFunction.php',
];
$ignoreErrors[] = [
	'message' => '#^Match expression does not handle remaining value\\: string$#',
	'identifier' => 'match.unhandled',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Dashboard/FakeProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array\\<mixed\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Dashboard/Filters/DatesModFilter.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method CommonDBVisible\\:\\:getVisibilityCriteria\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Dashboard/Provider.php',
];
$ignoreErrors[] = [
	'message' => '#^Static method Glpi\\\\Dashboard\\\\Provider\\:\\:getSearchOptionID\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Dashboard/Provider.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between int and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Debug/ProfilerSection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'cartridgeblackmatte\'\\|\'cartridgeblackphoto\' on array\\{tonerblack\\: array\\{\'tonerblack2\'\\}, tonerblackmax\\: array\\{\'tonerblack2max\'\\}, tonerblackused\\: array\\{\'tonerblack2used\'\\}, tonerblackremaining\\: array\\{\'tonerblack2remaining\'\\}\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Inventory/Asset/Cartridge.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'cartridgematteblack\'\\|\'cartridgephotoblack\' on array\\{tonerblack\\: array\\{\'tonerblack2\'\\}, tonerblackmax\\: array\\{\'tonerblack2max\'\\}, tonerblackused\\: array\\{\'tonerblack2used\'\\}, tonerblackremaining\\: array\\{\'tonerblack2remaining\'\\}\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Inventory/Asset/Cartridge.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Search\\\\CriteriaFilter\\:\\:getTabNameForItem\\(\\) never returns array\\<string\\> so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/CriteriaFilter.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$itemtype \\(string\\) of method Glpi\\\\Search\\\\Input\\\\QueryBuilder\\:\\:findCriteriaInSession\\(\\) is incompatible with type class\\-string\\<CommonDBTM\\>\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Input/QueryBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$itemtype \\(string\\) of method Glpi\\\\Search\\\\Input\\\\QueryBuilder\\:\\:getDefaultCriteria\\(\\) is incompatible with type class\\-string\\<CommonDBTM\\>\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Input/QueryBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Search/Input/QueryBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method PhpOffice\\\\PhpSpreadsheet\\\\Writer\\\\BaseWriter\\:\\:setOrientation\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Output/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Glpi\\\\Search\\\\Output\\\\Spreadsheet\\:\\:\\$writer \\(PhpOffice\\\\PhpSpreadsheet\\\\Writer\\\\BaseWriter\\) does not accept PhpOffice\\\\PhpSpreadsheet\\\\Writer\\\\IWriter\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Output/Pdf.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to static method getAssignableVisiblityCriteria\\(\\) on an unknown class Glpi\\\\Features\\\\AssignableItem\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#4 \\$meta \\(int\\) of method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:giveItem\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#4 \\$meta_type \\(string\\) of method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:getSelectCriteria\\(\\) is incompatible with type class\\-string\\<CommonDBTM\\>\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#7 \\$meta_type \\(string\\) of method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:getLeftJoinCriteria\\(\\) is incompatible with type class\\-string\\<CommonDBTM\\>\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 4,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:explodeWithID\\(\\) never returns false so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:getHavingCriteria\\(\\) should return array but returns false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:getWhereCriteria\\(\\) should return array\\|null but returns Glpi\\\\DBAL\\\\QueryExpression\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Search\\\\Provider\\\\SQLProvider\\:\\:giveItem\\(\\) should return string but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 on array\\{string, string, string\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$NOT with type string is incompatible with native type bool\\.$#',
	'identifier' => 'parameter.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return with type string is incompatible with native type array\\.$#',
	'identifier' => 'return.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var for variable \\$itemtype has invalid type Glpi\\\\Features\\\\AssignableItem\\.$#',
	'identifier' => 'varTag.trait',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type Glpi\\\\Features\\\\AssignableItem is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between 100\\|float\\|string and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between int\\|string and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Search/Provider/SQLProvider.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method CommonGLPI\\:\\:showBrowseView\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Glpi\\\\Search\\\\Input\\\\SearchInputInterface\\:\\:cleanParams\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Glpi\\\\Search\\\\Input\\\\SearchInputInterface\\:\\:manageParams\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Glpi\\\\Search\\\\Input\\\\SearchInputInterface\\:\\:showGenericSearch\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Glpi\\\\Search\\\\Provider\\\\SearchProviderInterface\\:\\:constructData\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method Glpi\\\\Search\\\\Provider\\\\SearchProviderInterface\\:\\:constructSQL\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type Glpi\\\\Search\\\\Input\\\\SearchInputInterface is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Search/SearchEngine.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\Socket\\:\\:showListForItem\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 2,
	'path' => __DIR__ . '/src/Glpi/Socket.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Glpi\\\\System\\\\Log\\\\LogViewer\\:\\:getMenuContent\\(\\) never returns false so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Glpi/System/Log/LogViewer.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$history \\(int\\) of method Group\\:\\:post_updateItem\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Group.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always false\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Group.php',
];
$ignoreErrors[] = [
	'message' => '#^Property HTMLTableGroup\\:\\:\\$new_headers is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/HTMLTableGroup.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method HTMLTableHeader\\:\\:getCompositeName\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/HTMLTableRow.php',
];
$ignoreErrors[] = [
	'message' => '#^Property HTMLTableSuperHeader\\:\\:\\$headerSets is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/HTMLTableSuperHeader.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 3,
	'path' => __DIR__ . '/src/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with bool will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/src/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$http_response_code \\(int\\) of method Html\\:\\:redirect\\(\\) is incompatible with type string\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 656 on line 13$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display is true \\? true \\: string\\)\\: Unexpected token "\\$display", expected type at offset 219 on line 9$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Html.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPAddress\\:\\:\\$binary \\(array\\<int\\>\\) does not accept string\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPAddress.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPNetwork\\:\\:\\$address \\(IPAddress\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPNetwork.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPNetwork\\:\\:\\$data_for_implicit_update \\(array\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPNetwork.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPNetwork\\:\\:\\$gateway \\(IPAddress\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPNetwork.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPNetwork\\:\\:\\$netmask \\(IPNetmask\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPNetwork.php',
];
$ignoreErrors[] = [
	'message' => '#^Property IPNetwork\\:\\:\\$networkUpdate \\(bool\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/IPNetwork.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/ITILFollowup.php',
];
$ignoreErrors[] = [
	'message' => '#^Method ITILTemplate\\:\\:showCentralPreview\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/ITILTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonITILObject is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 3,
	'path' => __DIR__ . '/src/ITILTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Method ITILTemplateField\\:\\:showForITILTemplate\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/ITILTemplateField.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$history \\(int\\) of method ITILValidationTemplate\\:\\:post_updateItem\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/ITILValidationTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Impact.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$total might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/Impact.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/ImpactItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Infocom\\:\\:showTco\\(\\) should return float but returns string\\.$#',
	'identifier' => 'return.type',
	'count' => 4,
	'path' => __DIR__ . '/src/Infocom.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Infocom.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 264 on line 9$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Infocom.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/ItemAntivirus.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/ItemVirtualMachine.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Cluster\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Cluster.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_DeviceCamera_ImageFormat\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_DeviceCamera_ImageFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_DeviceCamera_ImageResolution\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_DeviceCamera_ImageResolution.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Devices.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Disk\\:\\:showForItem\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Disk.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Enclosure\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Enclosure.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Environment.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Environment\\:\\:getTabNameForItem\\(\\) never returns array\\<string\\> so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Environment.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method forceGlobalState\\(\\) on an unknown class Glpi\\\\Features\\\\Kanban\\.$#',
	'identifier' => 'class.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/Item_Kanban.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method getFromDB\\(\\) on an unknown class Glpi\\\\Features\\\\Kanban\\.$#',
	'identifier' => 'class.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/Item_Kanban.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Kanban\\:\\:loadStateForItem\\(\\) should return array but returns null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Kanban.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var for variable \\$item has invalid type Glpi\\\\Features\\\\Kanban\\.$#',
	'identifier' => 'varTag.trait',
	'count' => 2,
	'path' => __DIR__ . '/src/Item_Kanban.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Line\\:\\:prepareInput\\(\\) should return array but returns false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Line.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_OperatingSystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 3,
	'path' => __DIR__ . '/src/Item_OperatingSystem.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Plug.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Plug\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Plug.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Process.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>" between int\\<1, max\\> and 0 is always true\\.$#',
	'identifier' => 'greater.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Project\\:\\:showForProject\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_Rack\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_Rack.php',
];
$ignoreErrors[] = [
	'message' => '#^Loose comparison using \\=\\= between \'e\'\\|\'g\'\\|\'i\'\\|\'l\'\\|\'o\'\\|\'s\'\\|\'u\' and \'_\' will always evaluate to false\\.$#',
	'identifier' => 'equal.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_SoftwareLicense.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_SoftwareLicense\\:\\:showForLicense\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_SoftwareLicense.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Item_SoftwareLicense\\:\\:showForLicenseByEntity\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_SoftwareLicense.php',
];
$ignoreErrors[] = [
	'message' => '#^Loose comparison using \\=\\= between \'d\'\\|\'e\'\\|\'g\'\\|\'i\'\\|\'l\'\\|\'o\'\\|\'s\'\\|\'u\'\\|\'v\' and \'_\' will always evaluate to false\\.$#',
	'identifier' => 'equal.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Item_SoftwareVersion.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Itil_Project\\:\\:showForItil\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Itil_Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Itil_Project\\:\\:showForProject\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Itil_Project.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(true;\\)\\: Unexpected token ";", expected TOKEN_HORIZONTAL_WS at offset 126 on line 6$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/KnowbaseItemTranslation.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property LevelAgreement\\:\\:\\$levelclass \\(class\\-string\\<LevelAgreementLevel\\>\\) does not accept default value of type string\\.$#',
	'identifier' => 'property.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/LevelAgreement.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property LevelAgreement\\:\\:\\$levelticketclass \\(class\\-string\\<CommonDBTM\\>\\) does not accept default value of type string\\.$#',
	'identifier' => 'property.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/LevelAgreement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type OlaLevel\\|SlaLevel is not subtype of native type static\\(LevelAgreementLevel\\)\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/LevelAgreementLevel.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$is_deleted \\(int\\) of method Line\\:\\:getMassiveActionsForItemtype\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Line.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$params \\(array\\{\\}\\) of method Link\\:\\:getAllLinksFor\\(\\) is incompatible with type array\\{id\\: int, name\\: string, link\\: string, data\\: string, open_window\\: bool\\|null\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Link.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(array\\<int, \\{name\\: string, type\\: string\\}\\>\\)\\: Unexpected token "\\{", expected type at offset 119 on line 5$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Link.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Location\\:\\:showItems\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Location.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Log.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Laminas\\\\Mail\\\\Storage\\\\Message\\:\\:\\$date\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Laminas\\\\Mail\\\\Storage\\\\AbstractStorage\\:\\:getFolders\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Laminas\\\\Mail\\\\Storage\\\\AbstractStorage\\:\\:moveMessage\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getAddressList\\(\\) on array\\|ArrayIterator\\|Laminas\\\\Mail\\\\Header\\\\HeaderInterface\\|string\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Method MailCollector\\:\\:cronMailgate\\(\\) should return \\-1 but returns 0\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Method MailCollector\\:\\:cronMailgate\\(\\) should return \\-1 but returns 1\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Method MailCollector\\:\\:getRecursiveAttached\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 4,
	'path' => __DIR__ . '/src/MailCollector.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/MassiveAction.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_countable\\(\\) with array\\<array\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/MassiveAction.php',
];
$ignoreErrors[] = [
	'message' => '#^Property MassiveAction\\:\\:\\$remainings \\(array\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/src/MassiveAction.php',
];
$ignoreErrors[] = [
	'message' => '#^Property MassiveAction\\:\\:\\$remainings \\(array\\) on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.property',
	'count' => 1,
	'path' => __DIR__ . '/src/MassiveAction.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Monitor\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Monitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Monitor\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Monitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Monitor\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Monitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(NetworkEquipment\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(NetworkEquipment\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(NetworkEquipment\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:isDynamic\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPort.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonDBTM is not subtype of native type class\\-string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPort.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$val \\!\\=\\= null \\? string \\: array\\)\\: Unexpected token "\\$val", expected type at offset 218 on line 7$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPortEthernet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$val \\!\\=\\= null \\? string \\: array\\)\\: Unexpected token "\\$val", expected type at offset 220 on line 7$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPortEthernet.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between NetworkPort and CommonDBChild will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPortInstantiation.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between mixed~\'NetworkEquipment\' and \'NetworkEquipment\' will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/NetworkPort_NetworkPort.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Notepad.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationEventMailing.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 on array\\{list\\<string\\>, list\\<\'"\'\\|\'\\\\\'\'\\>, list\\<numeric\\-string\\>, list\\<\'"\'\\|\'\\\\\'\'\\>\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationEventMailing.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property NotificationEventMailing\\:\\:\\$mailer \\(GLPIMailer\\) on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.property',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationEventMailing.php',
];
$ignoreErrors[] = [
	'message' => '#^Method NotificationTarget\\:\\:showForGroup\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationTarget.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationTargetCommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method NotificationTargetCommonITILObject\\:\\:addAdditionnalUserInfo\\(\\) should return 0\\|0\\.0\\|\'\'\\|\'0\'\\|array\\{\\}\\|false\\|null but returns array\\{show_private\\: mixed, is_self_service\\: mixed\\}\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationTargetCommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method NotificationTemplate\\:\\:getTemplateByLanguage\\(\\) should return int\\|false but returns non\\-falsy\\-string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/NotificationTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Notification_NotificationTemplate\\:\\:getName\\(\\) should return string but returns int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Notification_NotificationTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Notification_NotificationTemplate\\:\\:showForNotification\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Notification_NotificationTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Notification_NotificationTemplate\\:\\:showForNotificationTemplate\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Notification_NotificationTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(array\\: empty array if itemtype is not lockable; else returns UNLOCK right\\)\\: Unexpected token "\\:", expected TOKEN_HORIZONTAL_WS at offset 96 on line 5$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/ObjectLock.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(bool\\|ObjectLock\\: returns ObjectLock if locked, else false\\)\\: Unexpected token "\\:", expected TOKEN_HORIZONTAL_WS at offset 104 on line 5$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/ObjectLock.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$type$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/OlaLevel_Ticket.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(PDU\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/PDU.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(PDU\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/PDU.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(PDU\\) and PDU will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/PDU.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(PassiveDCEquipment\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/PassiveDCEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(PassiveDCEquipment\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/PassiveDCEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(PassiveDCEquipment\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/PassiveDCEquipment.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.expr',
	'count' => 1,
	'path' => __DIR__ . '/src/PendingReason_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always false\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/PendingReason_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/PendingReason_Item.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Peripheral\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Peripheral.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Peripheral\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Peripheral.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Peripheral\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Peripheral.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Phone\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Phone.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Phone\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Phone.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Planning\\:\\:updateEventTimes\\(\\) should return bool but empty return statement found\\.$#',
	'identifier' => 'return.empty',
	'count' => 1,
	'path' => __DIR__ . '/src/Planning.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Planning.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'itemtype\' does not exist on class\\-string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Planning.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'planning_type\' does not exist on class\\-string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Planning.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type class\\-string is not subtype of native type array\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Planning.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Document\\:\\:getBaseComponent\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/PlanningExternalEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Node\\:\\:add\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/PlanningExternalEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PlanningExternalEvent\\:\\:displayPlanningItem\\(\\) with return type void returns string but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/PlanningExternalEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'plan\' on non\\-empty\\-array in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 2,
	'path' => __DIR__ . '/src/PlanningExternalEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PlanningExternalEventTemplate\\:\\:displayPlanningItem\\(\\) with return type void returns string but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/PlanningExternalEventTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'plan\' on non\\-empty\\-array in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 2,
	'path' => __DIR__ . '/src/PlanningExternalEventTemplate.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'identifier' => 'if.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Plugin.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Plugin.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/src/Plugin.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Plugin.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Printer\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Printer.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Printer\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Printer.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with non\\-empty\\-array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Printer_CartridgeInfo.php',
];
$ignoreErrors[] = [
	'message' => '#^Loose comparison using \\!\\= between \'\' and \'\' will always evaluate to false\\.$#',
	'identifier' => 'notEqual.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Problem.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonDBTM is not subtype of native type Group\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/Problem.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 2,
	'path' => __DIR__ . '/src/Profile.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$interface \\=\\= \'all\' \\? array\\<string, array\\<string, array\\<string, RightDefinition\\[\\]\\>\\>\\> \\: \\(\\$form \\=\\= \'all\' \\? array\\<string, array\\<string, RightDefinition\\[\\]\\>\\> \\: \\(\\$group \\=\\= \'all\' \\? array\\<string, RightDefinition\\[\\]\\> \\: RightDefinition\\[\\]\\)\\)\\)\\: Unexpected token "\\$interface", expected type at offset 517 on line 12$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Profile.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Profile\\:\\:\\$profileRight \\(array\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 2,
	'path' => __DIR__ . '/src/Profile.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getID\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Project.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$withtemplate \\(int\\) of method ProjectCost\\:\\:showForProject\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/ProjectCost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method ProjectCost\\:\\:showForProject\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/ProjectCost.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Document\\:\\:getBaseComponent\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/ProjectTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Node\\:\\:add\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/ProjectTask.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonDBTM\\:\\:setVolume\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/QueuedNotification.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between array and false will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/QueuedWebhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Rack\\) and PDU will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Rack.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Rack\\:\\:showForRoom\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Rack.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Document\\:\\:getBaseComponent\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Reminder.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Sabre\\\\VObject\\\\Node\\:\\:add\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Reminder.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between static\\(Reminder\\) and ExtraVisibilityCriteria will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Reminder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'plan\' on non\\-empty\\-array in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 2,
	'path' => __DIR__ . '/src/Reminder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 219 on line 8$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Reminder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call static method getSystemSQLCriteria\\(\\) on \\(int\\|string\\)\\.$#',
	'identifier' => 'staticMethod.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call static method getTypeName\\(\\) on \\(int\\|string\\)\\.$#',
	'identifier' => 'staticMethod.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^Match expression does not handle remaining value\\: string$#',
	'identifier' => 'match.unhandled',
	'count' => 2,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Report\\:\\:getAssetCounts\\(\\) should return array\\<class\\-string\\<CommonDBTM\\>, array\\<string, array\\>\\> but returns array\\<array\\<string, mixed\\>\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Report\\:\\:getOSInstallCounts\\(\\) should return array\\<string, array\\<int, array\\>\\> but returns array\\<array\\<string, mixed\\>\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$by_itemtype contains unresolvable type\\.$#',
	'identifier' => 'parameter.unresolvableType',
	'count' => 1,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(array\\<class\\-string\\<CommonDBTM\\>, array\\<int, array\\>\\)\\: Unexpected token "\\*/", expected \'\\>\' at offset 74 on line 3$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Report.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$event \\(array\\{\\}\\) of method Reservation\\:\\:updateEvent\\(\\) is incompatible with type array\\{id\\: int, start\\: string, end\\: string\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Reservation.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$is_deleted \\(int\\) of method Reservation\\:\\:getMassiveActionsForItemtype\\(\\) is incompatible with type bool\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Reservation.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$options \\(array\\{\\}\\) of method Reservation\\:\\:computePeriodicities\\(\\) is incompatible with type array\\{type\\: \'day\'\\|\'month\'\\|\'week\', end\\: string, subtype\\?\\: string, days\\?\\: int\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Reservation.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Reservation\\:\\:processMassiveActionsForOneItemtype\\(\\) with return type void returns false but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Reservation.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between float and 0 will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/Reservation.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\*" between string and 3600 results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/ReservationItem.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$options \\(array\\{\\}\\) of method RuleAction\\:\\:dropdownActions\\(\\) is incompatible with type array\\{subtype\\: string, name\\: string, field\\: string, value\\?\\: string, alreadyused\\?\\: bool, display\\?\\: bool\\}\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/RuleAction.php',
];
$ignoreErrors[] = [
	'message' => '#^Method RuleAction\\:\\:dropdownActions\\(\\) should return int\\|string but returns false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/RuleAction.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonITILObject is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 2,
	'path' => __DIR__ . '/src/RuleCommonITILObject.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonITILObject is not subtype of native type string\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/RuleCommonITILObjectCollection.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<0, max\\> and 0 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/RuleCriteria.php',
];
$ignoreErrors[] = [
	'message' => '#^Property RuleImportAsset\\:\\:\\$restrict_entity is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/RuleImportAsset.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Search\\:\\:displayData\\(\\) with return type void returns false\\|null but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Session\\:\\:loadLanguage\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Session.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Laminas\\\\I18n\\\\Translator\\\\Translator\\:\\:\\$cache \\(Laminas\\\\Cache\\\\Storage\\\\StorageInterface\\|null\\) does not accept Glpi\\\\Cache\\\\I18nCache\\|null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/Session.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Software\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Software.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(Software\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/Software.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'_system_category\' does not exist on array\\{name\\: string, manufacturers_id\\: int, entities_id\\: int, is_recursive\\: 0\\|1, is_helpdesk_visible\\: mixed\\}\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Software.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(SoftwareLicense\\) and \'prepareGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/SoftwareLicense.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \\$this\\(SoftwareLicense\\) and \'updateGroupFields\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/SoftwareLicense.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined static method CommonGLPI\\:\\:getTypes\\(\\)\\.$#',
	'identifier' => 'staticMethod.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Stat.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#6 \\$value \\(string\\) of method Stat\\:\\:constructEntryValues\\(\\) is incompatible with type array\\.$#',
	'identifier' => 'parameter.defaultValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Stat.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 301 on line 10$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Stat.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 621 on line 16$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Stat.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @phpstan\\-return has invalid value \\(\\$display \\? void \\: string\\)\\: Unexpected token "\\$display", expected type at offset 622 on line 16$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/Stat.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>" between int\\<1, max\\> and 0 is always true\\.$#',
	'identifier' => 'greater.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Supplier.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Telemetry\\:\\:cronTelemetry\\(\\) with return type void returns int but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Telemetry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Telemetry\\:\\:cronTelemetry\\(\\) with return type void returns null but should not return anything\\.$#',
	'identifier' => 'return.void',
	'count' => 1,
	'path' => __DIR__ . '/src/Telemetry.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>" between int\\<1, max\\> and 0 is always true\\.$#',
	'identifier' => 'greater.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Ticket.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Ticket.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type CommonDBTM is not subtype of native type Group\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 2,
	'path' => __DIR__ . '/src/Ticket.php',
];
$ignoreErrors[] = [
	'message' => '#^Static method Ticket\\:\\:getListForItemSearchOptionsCriteria\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/src/Ticket.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \'Session\' and \'getLoginUserID\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 2,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^Loose comparison using \\=\\= between null and null will always evaluate to true\\.$#',
	'identifier' => 'equal.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'function\' on array\\{function\\: string, line\\?\\: int, file\\?\\: string, class\\?\\: class\\-string, type\\?\\: \'\\-\\>\'\\|\'\\:\\:\', args\\?\\: array\\<mixed\\>, object\\?\\: object\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between null and CommonDBTM will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Toolbox.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Update\\:\\:\\$dbversion is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/Update.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property CommonGLPI\\:\\:\\$fields\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/User.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/User.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var with type array is not subtype of native type array\\{\\}\\|array\\{list\\<string\\>, list\\<string\\>\\}\\.$#',
	'identifier' => 'varTag.nativeType',
	'count' => 1,
	'path' => __DIR__ . '/src/User.php',
];
$ignoreErrors[] = [
	'message' => '#^Method ValidatorSubstitute\\:\\:getTabNameForItem\\(\\) never returns array\\<string\\> so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/ValidatorSubstitute.php',
];
$ignoreErrors[] = [
	'message' => '#^Method ValidatorSubstitute\\:\\:prepareInputForUpdate\\(\\) never returns false so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/src/ValidatorSubstitute.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/ValidatorSubstitute.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property CommonGLPI\\:\\:\\$fields\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:getSentQueriesSearchParams\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:showCustomHeaders\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:showPayloadEditor\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:showPreviewForm\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:showSecurityForm\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method CommonGLPI\\:\\:showSentQueries\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return with type bool is incompatible with native type array\\.$#',
	'identifier' => 'return.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$list_itemtype in PHPDoc tag @var does not match assigned variable \\$recursive_search\\.$#',
	'identifier' => 'varTag.differentVariable',
	'count' => 1,
	'path' => __DIR__ . '/src/Webhook.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method save_run\\(\\) on an unknown class XHProfRuns_Default\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/XHProf.php',
];
$ignoreErrors[] = [
	'message' => '#^Function getDateCriteria\\(\\) should return string but returns array\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/autoload/dbutils-aliases.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
