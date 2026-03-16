<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:page_tree_entry_points',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:page_tree_entry_points.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms.description',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'tablePermission',
            'selectFieldName' => 'tables_select',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
            'dbFieldLength' => 255,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.accounts:group.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'core.tca:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                title, subgroup,
                --palette--;;authentication,
            --div--;core.form.tabs:recordpermissions,
                --palette--;;permissionGeneral,
                --palette--;;permissionSpecific,
                --palette--;;permissionLanguages,
            --div--;core.form.tabs:modulepermissions,
                groupMods, availableWidgets, custom_options, workspace_perms,
            --div--;core.form.tabs:mounts,
                db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;core.form.tabs:options,
                TSconfig,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended',
        ),
      ),
      'palettes' => 
      array (
        'authentication' => 
        array (
          'label' => 'core.form.palettes:authentication',
          'showitem' => 'mfa_providers',
        ),
        'permissionGeneral' => 
        array (
          'label' => 'core.form.palettes:permission_general',
          'showitem' => '
                tables_modify,
                --linebreak--, non_exclude_fields
            ',
        ),
        'permissionLanguages' => 
        array (
          'label' => 'core.form.palettes:permission_languages',
          'showitem' => 'allowed_languages',
        ),
        'permissionSpecific' => 
        array (
          'label' => 'core.form.palettes:permission_specific',
          'showitem' => '
                pagetypes_select,
                --linebreak--, explicit_allowdeny
            ',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'nospace,trim,lower,unique',
            'autocomplete' => false,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
          'authenticationContext' => 
          array (
            'once' => true,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'dbFieldLength' => 512,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'file',
            'relationship' => 'manyToOne',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
              'tablenames' => 'be_users',
            ),
            'maxitems' => 1,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
            'softref' => 'email[subst]',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms.description',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'default',
            'items' => 
            array (
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
            'dbFieldLength' => 255,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'disable' => 
        array (
          'label' => 'core.db.accounts:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'title' => 'core.tca:be_users.types.user',
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;account,
                    usergroup,
                    --palette--;;authentication,
                --div--;core.form.tabs:personaldata,
                    realName, email, avatar, lang,
                --div--;core.form.tabs:recordpermissions,
                    --palette--;;permissionLanguages,
                --div--;core.form.tabs:modulepermissions,
                    userMods, workspace_perms,
                --div--;core.form.tabs:mounts,
                    db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
                --div--;core.form.tabs:options,
                    TSconfig,
                --div--;core.form.tabs:access,
                    --palette--;;status,
                    --palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        1 => 
        array (
          'title' => 'core.tca:be_users.types.admin',
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;account,
                    usergroup,
                    --palette--;;authentication,
                --div--;core.form.tabs:personaldata,
                    realName, email, avatar, lang,
                --div--;core.form.tabs:options,
                    TSconfig, db_mountpoints, options, file_mountpoints,
                --div--;core.form.tabs:access,
                    --palette--;;status,
                    --palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'account' => 
        array (
          'label' => 'core.form.palettes:account',
          'showitem' => '
                admin,
                --linebreak--, username, password
            ',
        ),
        'authentication' => 
        array (
          'label' => 'core.form.palettes:authentication',
          'showitem' => 'mfa',
        ),
        'permissionLanguages' => 
        array (
          'label' => 'core.form.palettes:permission_languages',
          'showitem' => 'allowed_languages',
        ),
        'status' => 
        array (
          'showitem' => 'disable, lastlogin',
        ),
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
        ),
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:doktype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                'value' => '1',
                'icon' => 'apps-pagetree-page-default',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                'value' => '6',
                'icon' => 'apps-pagetree-page-backend-users',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                'value' => '4',
                'icon' => 'apps-pagetree-page-shortcut',
                'group' => 'link',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                'value' => '7',
                'icon' => 'apps-pagetree-page-mountpoint',
                'group' => 'link',
              ),
              4 => 
              array (
                'label' => 'core.db.pages.doktype:link',
                'value' => '3',
                'icon' => 'apps-pagetree-page-shortcut-external',
                'group' => 'link',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                'value' => '254',
                'icon' => 'apps-pagetree-folder-default',
                'group' => 'special',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                'value' => '199',
                'icon' => 'apps-pagetree-spacer',
                'group' => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
              'link' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'slug' => 
        array (
          'label' => 'core.db.pages:slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:tsconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:extend_to_subpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:nav_hide',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  'value' => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'link' => 
        array (
          'label' => 'core.db.pages:link',
          'description' => 'core.db.pages:link.description',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'target',
              ),
            ),
            'default' => '',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'required' => true,
            'softref' => 'typolink',
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:last_updated',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:new_until',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                'value' => 60,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                'value' => 300,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                'value' => 900,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                'value' => 1800,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                'value' => 3600,
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                'value' => 14400,
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                'value' => 86400,
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                'value' => 172800,
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                'value' => 604800,
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                'value' => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'core.db.pages:shortcut',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                'value' => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 255,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:author_email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 23,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:media',
          'config' => 
          array (
            'type' => 'file',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                'value' => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                'value' => 'fe_users',
                'icon' => 'status-user-frontend',
              ),
            ),
            'default' => '',
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:backend_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:backend_layout_next_level',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.db.general:fe_group.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'core.db.general:fe_group.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'core.db.general:fe_group.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'core.db.general:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
          'l10n_mode' => 'exclude',
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'seo.db:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'seo.db:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
            'dbFieldLength' => 10,
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.canonical_link',
          'description' => 'seo.db:pages.canonical_link.description',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'url',
              2 => 'record',
            ),
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'seo.db:pages.canonical_link',
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.og_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'core.wizards:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.twitter_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'core.wizards:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'seo.db:pages.twitter_card.summary',
                'value' => 'summary',
              ),
              2 => 
              array (
                'label' => 'seo.db:pages.twitter_card.summary_large_image',
                'value' => 'summary_large_image',
              ),
            ),
            'dbFieldLength' => 255,
          ),
        ),
        'tx_themecamino_logo' => 
        array (
          'label' => 'theme_camino.backend_fields:pages.tx_themecamino_logo',
          'description' => 'theme_camino.backend_fields:pages.tx_themecamino_logo.description',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                ),
                3 => 
                array (
                  'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_themecamino_logo',
              'tablenames' => 'pages',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title, --div--;core.form.tabs:seo, --palette--;;seo, --palette--;;robots, --palette--;;canonical, --palette--;;sitemap, --div--;core.form.tabs:socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended',
        ),
        6 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;link,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
        4 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
        7 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
        199 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;core.form.tabs:appearance,
                    --palette--;;backend_layout,
                --div--;core.form.tabs:resources,
                    --palette--;;config,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
        254 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;core.form.tabs:appearance,
                    --palette--;;backend_layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'standard' => 
        array (
          'label' => 'core.form.palettes:standard',
          'showitem' => 'doktype',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid',
        ),
        'link' => 
        array (
          'showitem' => 'link',
        ),
        'title' => 
        array (
          'label' => 'core.form.palettes:title',
          'showitem' => 'title, --linebreak--, slug, --linebreak--, nav_title, --linebreak--, subtitle',
        ),
        'titleonly' => 
        array (
          'label' => 'core.form.palettes:title',
          'showitem' => 'title, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'core.form.palettes:visibility',
          'showitem' => 'hidden;core.db.pages:hidden, nav_hide',
        ),
        'hiddenonly' => 
        array (
          'label' => 'core.form.palettes:visibility',
          'showitem' => 'hidden;core.db.pages:hidden',
        ),
        'access' => 
        array (
          'label' => 'core.form.palettes:access',
          'showitem' => 'starttime, endtime, extendToSubpages, --linebreak--, fe_group, --linebreak--, editlock',
        ),
        'abstract' => 
        array (
          'label' => 'core.form.palettes:abstract',
          'showitem' => 'abstract',
        ),
        'metatags' => 
        array (
          'label' => 'core.form.palettes:metatags',
          'showitem' => 'keywords',
        ),
        'editorial' => 
        array (
          'label' => 'core.form.palettes:editorial',
          'showitem' => 'author, author_email, lastUpdated',
        ),
        'layout' => 
        array (
          'label' => 'core.form.palettes:layout',
          'showitem' => 'layout, --linebreak--, tx_themecamino_logo, newUntil, --linebreak--, backend_layout, backend_layout_next_level',
        ),
        'backend_layout' => 
        array (
          'label' => 'core.form.palettes:page_layout',
          'showitem' => 'backend_layout, backend_layout_next_level',
        ),
        'module' => 
        array (
          'label' => 'core.form.palettes:use_as_container',
          'showitem' => 'module',
        ),
        'replace' => 
        array (
          'label' => 'core.form.palettes:replace',
          'showitem' => 'content_from_pid',
        ),
        'links' => 
        array (
          'label' => 'core.form.palettes:links',
          'showitem' => 'target;core.db.pages:link.target',
        ),
        'caching' => 
        array (
          'label' => 'core.form.palettes:caching',
          'showitem' => 'cache_timeout, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'core.form.palettes:language',
          'showitem' => 'l18n_cfg',
        ),
        'miscellaneous' => 
        array (
          'label' => 'core.form.palettes:miscellaneous',
          'showitem' => 'is_siteroot, no_search, php_tree_stop',
        ),
        'adminsonly' => 
        array (
          'label' => 'core.form.palettes:miscellaneous',
          'showitem' => 'editlock',
        ),
        'media' => 
        array (
          'label' => 'core.form.palettes:media',
          'showitem' => 'media',
        ),
        'config' => 
        array (
          'label' => 'core.form.palettes:config',
          'showitem' => 'tsconfig_includes, --linebreak--, TSconfig',
        ),
        'seo' => 
        array (
          'label' => 'core.form.palettes:seo',
          'showitem' => 'seo_title, --linebreak--, description',
        ),
        'robots' => 
        array (
          'label' => 'core.form.palettes:robots',
          'showitem' => 'no_index, no_follow',
        ),
        'canonical' => 
        array (
          'label' => 'core.form.palettes:canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'core.form.palettes:sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'core.form.palettes:opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'core.form.palettes:twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    title, parent,
                --div--;core.form.tabs:items,
                    items,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                'value' => 3,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                'value' => 4,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                'value' => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'number',
            'size' => 8,
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'relationship' => 'oneToOne',
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'content',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
      ),
      'columns' => 
      array (
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                'value' => 'static',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                'value' => 'folder',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                'value' => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'file',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
              'tablenames' => 'sys_file_collection',
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'folder_identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'folder',
            'minitems' => 1,
            'relationship' => 'manyToOne',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,files,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,files,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,folder_identifier, recursive,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,category,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                fileinfo, alternative, description, title, --palette--;;language,
            --div--;core.form.tabs:categories,
                categories,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'relationship' => 'manyToOne',
            'allowed' => 'sys_file',
            'hideSuggest' => true,
            'maxitems' => 1,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 64,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'max' => 64,
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 20,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;imageoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        'caminoImagePalette' => 
        array (
          'showitem' => 'alternative,title,--linebreak--,crop',
          'label' => 'core.tca:sys_file_reference.imageoverlayPalette',
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'type' => 'driver',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                'label' => 'Local filesystem',
                'value' => 'Local',
              ),
            ),
            'default' => 'Local',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => '<T3DataStructure><ROOT></ROOT></T3DataStructure>',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                        name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
                --div--;core.form.tabs:accesscapabilities,
                        --palette--;;capabilities,
                --div--;core.form.tabs:access,
                        is_online,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'Local' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                        name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
                --div--;core.form.tabs:accesscapabilities,
                        --palette--;;capabilities,
                --div--;core.form.tabs:access,
                        is_online,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
          'columnsOverrides' => 
          array (
            'configuration' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'label' => 'core.form.tabs:capabilities',
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.identifier',
          'config' => 
          array (
            'type' => 'folder',
            'required' => true,
            'relationship' => 'manyToOne',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title, identifier, read_only,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    title,content,crdate,
                --div--;core.form.tabs:access,
                    hidden, --palette--;;timeRestriction,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'system',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'relationship' => 'manyToOne',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
              'tablenames' => 'backend_layout',
            ),
            'maxitems' => 1,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    title,icon,config,
                --div--;core.form.tabs:access,
                    hidden,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.accounts:group.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                title,subgroup, felogin_redirectPid,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'required' => true,
            'eval' => 'nospace,trim,lower,uniqueInPid',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
            'dbFieldLength' => 512,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
            'default' => '',
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
            'softref' => 'email[subst]',
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'maxitems' => 6,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'fe_users',
            ),
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'disable' => 
        array (
          'label' => 'core.db.accounts:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;core.form.tabs:personaldata,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;core.form.tabs:access,
                    disable,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended, tx_extbase_type',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;core.form.tabs:personaldata,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;core.form.tabs:access,
                    disable,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended, tx_extbase_type',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'groupName' => 'system',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Constants',
              ),
              1 => 
              array (
                'label' => 'Setup',
              ),
            ),
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Form (form)',
                'value' => 'EXT:form/Configuration/TypoScript/',
              ),
              1 => 
              array (
                'label' => 'Fluid Content Elements (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              2 => 
              array (
                'label' => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              3 => 
              array (
                'label' => 'XML Sitemap (seo)',
                'value' => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title, constants, config,
            --div--;core.form.tabs:advancedoptions,
                clear, root, include_static_file, basedOn, includeStaticAfterBasedOn, static_file_mode,
            --div--;core.form.tabs:access,
                hidden,--palette--;;timeRestriction,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'default' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'shortcut' => 'mimetypes-x-content-link',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'form_formframework' => 'content-form',
          'felogin_login' => 'mimetypes-x-content-login',
          'camino_author' => 'content-user',
          'camino_hero' => 'content-header',
          'camino_hero_small' => 'content-header',
          'camino_hero_text_only' => 'content-header',
          'camino_linklist' => 'content-bullets',
          'camino_sociallinks' => 'theme-camino-content-socialmedia',
          'camino_testimonial' => 'content-quote',
          'camino_textmedia_teaser' => 'content-container-columns-1',
          'camino_textmedia_teaser_grid' => 'content-container-columns-3',
          'camino_textteaser' => 'content-textmedia',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'frontend.db.tt_content:type',
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header.description',
                'value' => 'header',
                'icon' => 'content-header',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.text',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.text.description',
                'value' => 'text',
                'icon' => 'content-text',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textpic',
                'value' => 'textpic',
                'icon' => 'mimetypes-x-content-text-picture',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textpic.description',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.image',
                'value' => 'image',
                'icon' => 'mimetypes-x-content-image',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.image.description',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                'value' => 'textmedia',
                'icon' => 'mimetypes-x-content-text-media',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia.description',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.bullets',
                'value' => 'bullets',
                'icon' => 'mimetypes-x-content-list-bullets',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.bullets.description',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.table',
                'value' => 'table',
                'icon' => 'mimetypes-x-content-table',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.table.description',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.uploads',
                'value' => 'uploads',
                'icon' => 'mimetypes-x-content-list-files',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.uploads.description',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                'value' => 'menu_abstract',
                'icon' => 'content-menu-abstract',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract.description',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                'value' => 'menu_categorized_content',
                'icon' => 'content-menu-categorized',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content.description',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                'value' => 'menu_categorized_pages',
                'icon' => 'content-menu-categorized',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages.description',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                'value' => 'menu_pages',
                'icon' => 'content-menu-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages.description',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                'value' => 'menu_subpages',
                'icon' => 'content-menu-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages.description',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                'value' => 'menu_recently_updated',
                'icon' => 'content-menu-recently-updated',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated.description',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                'value' => 'menu_related_pages',
                'icon' => 'content-menu-related',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages.description',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                'value' => 'menu_section',
                'icon' => 'content-menu-section',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section.description',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                'value' => 'menu_section_pages',
                'icon' => 'content-menu-section',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages.description',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                'value' => 'menu_sitemap',
                'icon' => 'content-menu-sitemap',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap.description',
              ),
              18 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                'value' => 'menu_sitemap_pages',
                'icon' => 'content-menu-sitemap-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages.description',
              ),
              19 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.shortcut',
                'value' => 'shortcut',
                'icon' => 'mimetypes-x-content-link',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.shortcut.description',
              ),
              20 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div',
                'value' => 'div',
                'icon' => 'mimetypes-x-content-divider',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.description',
              ),
              21 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.html',
                'value' => 'html',
                'icon' => 'mimetypes-x-content-html',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.html.description',
              ),
              22 => 
              array (
                'label' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_title',
                'value' => 'form_formframework',
                'icon' => 'content-form',
                'iconOverlay' => NULL,
                'group' => 'forms',
                'description' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_description',
              ),
              23 => 
              array (
                'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.title',
                'value' => 'felogin_login',
                'icon' => 'mimetypes-x-content-login',
                'iconOverlay' => NULL,
                'group' => 'forms',
                'description' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.description',
              ),
              24 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_author.label',
                'value' => 'camino_author',
                'icon' => 'content-user',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_author.description',
              ),
              25 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_hero.label',
                'value' => 'camino_hero',
                'icon' => 'content-header',
                'iconOverlay' => NULL,
                'group' => 'camino_hero',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_hero.description',
              ),
              26 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_hero_small.label',
                'value' => 'camino_hero_small',
                'icon' => 'content-header',
                'iconOverlay' => NULL,
                'group' => 'camino_hero',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_hero_small.description',
              ),
              27 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_hero_text_only.label',
                'value' => 'camino_hero_text_only',
                'icon' => 'content-header',
                'iconOverlay' => NULL,
                'group' => 'camino_hero',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_hero_text_only.description',
              ),
              28 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_linklist.label',
                'value' => 'camino_linklist',
                'icon' => 'content-bullets',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_linklist.description',
              ),
              29 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_sociallinks.label',
                'value' => 'camino_sociallinks',
                'icon' => 'theme-camino-content-socialmedia',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_sociallinks.description',
              ),
              30 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_testimonial.label',
                'value' => 'camino_testimonial',
                'icon' => 'content-quote',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_testimonial.description',
              ),
              31 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_textmedia_teaser.label',
                'value' => 'camino_textmedia_teaser',
                'icon' => 'content-container-columns-1',
                'iconOverlay' => NULL,
                'group' => 'camino_teaser',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_textmedia_teaser.description',
              ),
              32 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_textmedia_teaser_grid.label',
                'value' => 'camino_textmedia_teaser_grid',
                'icon' => 'content-container-columns-3',
                'iconOverlay' => NULL,
                'group' => 'camino_teaser',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_textmedia_teaser_grid.description',
              ),
              33 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.CType.camino_textteaser.label',
                'value' => 'camino_textteaser',
                'icon' => 'content-textmedia',
                'iconOverlay' => NULL,
                'group' => 'camino_teaser',
                'description' => 'theme_camino.backend_fields:tt_content.CType.camino_textteaser.description',
              ),
            ),
            'itemGroups' => 
            array (
              'camino_hero' => 'theme_camino.backend_fields:tt_content.group.camino_hero',
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.default',
              'camino_teaser' => 'theme_camino.backend_fields:tt_content.group.camino_teaser',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.special',
              'plugins' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.plugins',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'dbFieldLength' => 255,
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                'value' => 'ruler-before',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                'value' => 'ruler-after',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                'value' => 'indent',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                'value' => 'indent-left',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                'value' => 'indent-right',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                'value' => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'frontend.db.tt_content:column',
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                'value' => '0',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'frontend.db.tt_content:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:header_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                'value' => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'frontend.db.tt_content:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                'value' => 'left',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 255,
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:header_link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'frontend.db.tt_content:header_link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'frontend.db.tt_content:bodytext',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 50,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url',
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:asset_references',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '3gp,aac,ai,aif,avif,bmp,flac,gif,heic,ico,jpeg,jpg,m4a,m4v,mov,mp3,mp4,ogg,opus,pdf,png,psd,svg,vimeo,wav,webm,webp,youtube',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imagewidth',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 1,
            ),
            'nullable' => true,
            'default' => NULL,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageheight',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 1,
            ),
            'nullable' => true,
            'default' => NULL,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageorientation',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                'value' => 0,
                'icon' => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                'value' => 1,
                'icon' => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                'value' => 2,
                'icon' => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                'value' => 8,
                'icon' => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                'value' => 9,
                'icon' => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                'value' => 10,
                'icon' => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                'value' => 17,
                'icon' => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                'value' => 18,
                'icon' => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                'value' => 25,
                'icon' => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                'value' => 26,
                'icon' => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
              6 => 
              array (
                'label' => '7',
                'value' => 7,
              ),
              7 => 
              array (
                'label' => '8',
                'value' => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                'value' => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:section_index',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:link_to_top',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => '
                    <T3DataStructure>
                      <ROOT>
                        <type>array</type>
                        <el>
                            <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                          <xmlTitle>
                            <label>The Title:</label>
                            <config>
                                <type>input</type>
                                <size>48</size>
                            </config>
                          </xmlTitle>
                        </el>
                      </ROOT>
                    </T3DataStructure>
                ',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.db.general:fe_group.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'core.db.general:fe_group.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'core.db.general:fe_group.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'core.db.general:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => '4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => '5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => '6',
                'value' => '6',
              ),
              7 => 
              array (
                'label' => '7',
                'value' => '7',
              ),
              8 => 
              array (
                'label' => '8',
                'value' => '8',
              ),
              9 => 
              array (
                'label' => '9',
                'value' => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.striped',
                'value' => 'striped',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.bordered',
                'value' => 'bordered',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.124',
                'value' => 124,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.59',
                'value' => 59,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.44',
                'value' => 44,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.58',
                'value' => 58,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.9',
                'value' => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.39',
                'value' => 39,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.34',
                'value' => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                'value' => 'extension',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                'value' => 'name',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                'value' => 'type',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                'value' => 'size',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                'value' => 'creation_date',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                'value' => 'modification_date',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                'value' => 'title',
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                'value' => 'asc',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                'value' => 'desc',
              ),
            ),
            'dbFieldLength' => 4,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'max' => 30,
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  'value' => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_themecamino_list_elements' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_themecamino_list_item',
            'foreign_field' => 'uid_foreign',
            'foreign_table_field' => 'tablename',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_themecamino_list_elements',
            ),
            'appearance' => 
            array (
              'showSynchronizationLink' => false,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'newRecordLinkAddTitle' => false,
              'newRecordLinkTitle' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements.appearance.newRecordLinkTitle',
              'useSortable' => true,
              'useCombination' => false,
            ),
          ),
        ),
        'tx_themecamino_link' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 30,
            'appearance' => 
            array (
              'browserTitle' => 'frontend.ttc:header_link_formlabel',
            ),
            'softref' => 'typolink',
          ),
        ),
        'tx_themecamino_link_label' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_label',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 256,
          ),
        ),
        'tx_themecamino_link_config' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.secondary',
                'value' => 'secondary',
              ),
              2 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.soft',
                'value' => 'soft',
              ),
              3 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.text',
                'value' => 'text',
              ),
              4 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted',
                'value' => 'inverted',
                'group' => 'inverted',
              ),
              5 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-secondary',
                'value' => 'inverted-secondary',
                'group' => 'inverted',
              ),
              6 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-soft',
                'value' => 'inverted-soft',
                'group' => 'inverted',
              ),
              7 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-text',
                'value' => 'inverted-text',
                'group' => 'inverted',
              ),
            ),
            'itemGroups' => 
            array (
              'inverted' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.itemgroup.inverted',
            ),
          ),
        ),
        'tx_themecamino_link_icon' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_icon',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.arrow-left',
                'value' => 'arrow-left',
              ),
              2 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.arrow-right',
                'value' => 'arrow-right',
              ),
              3 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron',
                'value' => 'chevron',
              ),
              4 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-double-left',
                'value' => 'chevron-double-left',
              ),
              5 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-double-right',
                'value' => 'chevron-double-right',
              ),
              6 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-left',
                'value' => 'chevron-left',
              ),
              7 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-right',
                'value' => 'chevron-right',
              ),
              8 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.close',
                'value' => 'close',
              ),
              9 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.download',
                'value' => 'download',
              ),
              10 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.globe',
                'value' => 'globe',
              ),
              11 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.launch',
                'value' => 'launch',
              ),
              12 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.mail',
                'value' => 'mail',
              ),
              13 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.menu',
                'value' => 'menu',
              ),
              14 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.phone',
                'value' => 'phone',
              ),
              15 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.play',
                'value' => 'play',
              ),
              16 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.search',
                'value' => 'search',
              ),
              17 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-facebook',
                'value' => 'social-facebook',
              ),
              18 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-instagram',
                'value' => 'social-instagram',
              ),
              19 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-linkedin',
                'value' => 'social-linkedin',
              ),
              20 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-x',
                'value' => 'social-x',
              ),
              21 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-xing',
                'value' => 'social-xing',
              ),
              22 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-youtube',
                'value' => 'social-youtube',
              ),
              23 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.zoom',
                'value' => 'zoom',
              ),
            ),
          ),
        ),
        'tx_themecamino_header_style' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_header_style',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_header_style.option.default',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_header_style.option.large',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_header_style.option.small',
                'value' => 2,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;;general,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription',
        ),
        'header' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'text' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:images,image,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'image' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:images,image,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'textmedia' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:media,assets,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'bullets' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'table' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext',
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;tableconfiguration,table_caption,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;tablelayout,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'uploads' => 
        array (
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'label' => 'frontend.db.tt_content:uploads.media',
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,--palette--;;uploads,--palette--;;uploadslayout,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_categorized_content' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_categorized_pages' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_section' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'shortcut' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'div' => 
        array (
          'creationOptions' => 
          array (
            'saveAndClose' => true,
          ),
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'html' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'codeEditor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:plugin,pi_flexform,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              ),
            ),
          ),
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
        ),
        'felogin_login' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:plugin,pi_flexform,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              ),
            ),
          ),
        ),
        'camino_author' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.header.types.person-palette.label',
            ),
            'subheader' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.subheader.types.person-palette.label',
            ),
            'bodytext' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.bodytext.types.camino_author.label',
              'config' => 
              array (
                'rows' => 3,
              ),
            ),
            'tx_themecamino_list_elements' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements.types.camino_author.label',
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '--palette--;;linklabel',
                    ),
                  ),
                ),
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.default',
                            'allowedAspectRatios' => 
                            array (
                              '1:1' => 
                              array (
                                'title' => '1:1',
                                'value' => 1,
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    1 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    2 => 
                    array (
                      'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                    ),
                    3 => 
                    array (
                      'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                    ),
                    4 => 
                    array (
                      'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                    ),
                    5 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;camino_person,bodytext,tx_themecamino_list_elements,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_hero' => 
        array (
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => '16:9',
                                'value' => 1.77,
                              ),
                            ),
                          ),
                          'sm' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.sm',
                            'allowedAspectRatios' => 
                            array (
                              '4:5' => 
                              array (
                                'title' => '4:5',
                                'value' => 0.8,
                              ),
                            ),
                          ),
                          'md' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.md',
                            'allowedAspectRatios' => 
                            array (
                              '1:1' => 
                              array (
                                'title' => '1:1',
                                'value' => 1,
                              ),
                            ),
                          ),
                          'lg' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.lg',
                            'allowedAspectRatios' => 
                            array (
                              '9:8' => 
                              array (
                                'title' => '9:8',
                                'value' => 1.125,
                              ),
                            ),
                          ),
                          'xl' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.xl',
                            'allowedAspectRatios' => 
                            array (
                              '3:2' => 
                              array (
                                'title' => '3:2',
                                'value' => 1.5,
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    1 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    2 => 
                    array (
                      'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                    ),
                    3 => 
                    array (
                      'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                    ),
                    4 => 
                    array (
                      'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                    ),
                    5 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:images,image,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_hero_small' => 
        array (
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => '16:9',
                                'value' => 1.77,
                              ),
                            ),
                          ),
                          'sm' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.sm',
                            'allowedAspectRatios' => 
                            array (
                              '16:15' => 
                              array (
                                'title' => '16:15',
                                'value' => 1.066,
                              ),
                            ),
                          ),
                          'md' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.md',
                            'allowedAspectRatios' => 
                            array (
                              '4:3' => 
                              array (
                                'title' => '4:3',
                                'value' => 1.333,
                              ),
                            ),
                          ),
                          'lg' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.lg',
                            'allowedAspectRatios' => 
                            array (
                              '3:2' => 
                              array (
                                'title' => '3:2',
                                'value' => 1.5,
                              ),
                            ),
                          ),
                          'xl' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.xl',
                            'allowedAspectRatios' => 
                            array (
                              '2:1' => 
                              array (
                                'title' => '2:1',
                                'value' => 2,
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    1 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    2 => 
                    array (
                      'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                    ),
                    3 => 
                    array (
                      'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                    ),
                    4 => 
                    array (
                      'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                    ),
                    5 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:images,image,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_hero_text_only' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_linklist' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.header.label.ALT',
              'description' => 'theme_camino.backend_fields:tt_content.header.description.ALT',
            ),
            'tx_themecamino_list_elements' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '--palette--;;linklabel',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,header,tx_themecamino_list_elements,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_sociallinks' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.header.label.ALT',
              'description' => 'theme_camino.backend_fields:tt_content.header.description.ALT',
            ),
            'tx_themecamino_list_elements' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements.types.camino_sociallinks.label',
              'description' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements.types.camino_sociallinks.description',
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '--palette--;;linklabel',
                    ),
                  ),
                  'columns' => 
                  array (
                    'link' => 
                    array (
                      'config' => 
                      array (
                        'allowedTypes' => 
                        array (
                          0 => 'url',
                          1 => 'email',
                          2 => 'telephone',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,header,tx_themecamino_list_elements,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_testimonial' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.header.types.person-palette.label',
            ),
            'subheader' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.subheader.types.person-palette.label',
            ),
            'bodytext' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.bodytext.types.person-palette.label',
              'config' => 
              array (
                'rows' => 3,
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.default',
                            'allowedAspectRatios' => 
                            array (
                              '1:1' => 
                              array (
                                'title' => '1:1',
                                'value' => 1,
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    1 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    2 => 
                    array (
                      'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                    ),
                    3 => 
                    array (
                      'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                    ),
                    4 => 
                    array (
                      'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                    ),
                    5 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,bodytext,--palette--;;camino_person,--div--;core.form.tabs:appearance,--palette--;;frames,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_textmedia_teaser' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'theme_camino.backend_fields:cropVariants.default',
                            'allowedAspectRatios' => 
                            array (
                              '3:2' => 
                              array (
                                'title' => '3:2',
                                'value' => 1.5,
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    1 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                    2 => 
                    array (
                      'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                    ),
                    3 => 
                    array (
                      'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                    ),
                    4 => 
                    array (
                      'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                    ),
                    5 => 
                    array (
                      'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                    ),
                  ),
                ),
              ),
            ),
            'subheader' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.subheader.types.camino_textmedia_teaser.label',
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabelicon,--div--;core.form.tabs:images,image,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_textmedia_teaser_grid' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'tx_themecamino_list_elements' => 
            array (
              'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_list_elements.types.camino_textmedia_teaser_grid.label',
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'text' => 
                    array (
                      'config' => 
                      array (
                        'rows' => 3,
                      ),
                    ),
                    'images' => 
                    array (
                      'config' => 
                      array (
                        'overrideChildTca' => 
                        array (
                          'columns' => 
                          array (
                            'crop' => 
                            array (
                              'config' => 
                              array (
                                'cropVariants' => 
                                array (
                                  'default' => 
                                  array (
                                    'title' => 'theme_camino.backend_fields:cropVariants.default',
                                    'allowedAspectRatios' => 
                                    array (
                                      '3:2' => 
                                      array (
                                        'title' => '3:2',
                                        'value' => 1.5,
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'types' => 
                  array (
                    0 => 
                    array (
                      'showitem' => 'header,
                                --palette--;;date_category,
                                text,
                                images,
                                --palette--;;linklabelicon',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabeliconconfig,--div--;theme_camino.backend_fields:tt_content.tabs.teaser,tx_themecamino_list_elements,--div--;core.form.tabs:appearance,--palette--;;frames,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'camino_textteaser' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;camino_linklabeliconconfig,--div--;core.form.tabs:appearance,--palette--;;frames,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'core.form.palettes:general',
          'showitem' => 'CType,colPos',
        ),
        'header' => 
        array (
          'label' => 'core.form.palettes:header',
          'showitem' => 'header,--linebreak--,header_layout,tx_themecamino_header_style,header_position,date,--linebreak--,header_link',
        ),
        'headers' => 
        array (
          'label' => 'core.form.palettes:headers',
          'showitem' => 'header,--linebreak--,header_layout,tx_themecamino_header_style,header_position,date,--linebreak--,header_link,--linebreak--,subheader',
        ),
        'gallerySettings' => 
        array (
          'label' => 'core.form.palettes:settings_gallery',
          'showitem' => 'imageorient,imagecols',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'core.form.palettes:media_adjustments',
          'showitem' => 'imagewidth,imageheight,imageborder',
        ),
        'imagelinks' => 
        array (
          'label' => 'core.form.palettes:media_behaviour',
          'showitem' => 'image_zoom',
        ),
        'hidden' => 
        array (
          'showitem' => 'hidden;frontend.db.tt_content:hidden',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid,l18n_parent',
        ),
        'access' => 
        array (
          'label' => 'core.form.palettes:access',
          'showitem' => '
                starttime;core.db.general:starttime, endtime;core.db.general:endtime,
                --linebreak--, fe_group;core.db.general:fe_group,
                --linebreak--, editlock',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'core.form.palettes:links_appearance',
          'showitem' => 'sectionIndex,linkToTop',
        ),
        'frames' => 
        array (
          'label' => 'core.form.palettes:content_layout',
          'showitem' => 'layout,frame_class,space_before_class,space_after_class',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => 'table_delimiter,table_enclosure',
        ),
        'tablelayout' => 
        array (
          'label' => 'core.form.palettes:table_layout',
          'showitem' => 'cols,table_class,table_header_position,table_tfoot',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => 'media,--linebreak--,file_collections,--linebreak--,filelink_sorting,filelink_sorting_direction,target',
        ),
        'uploadslayout' => 
        array (
          'label' => 'core.form.palettes:downloads_layout',
          'showitem' => 'filelink_size,uploads_description,uploads_type',
        ),
        'camino_linklabel' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.palettes.camino_linklabel',
          'showitem' => 'tx_themecamino_link,tx_themecamino_link_label',
        ),
        'camino_linklabelicon' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.palettes.camino_linklabelicon',
          'showitem' => 'tx_themecamino_link,tx_themecamino_link_label,--linebreak--,tx_themecamino_link_icon',
        ),
        'camino_linklabelconfig' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.palettes.camino_linklabelconfig',
          'showitem' => 'tx_themecamino_link,tx_themecamino_link_label,--linebreak--,tx_themecamino_link_config',
        ),
        'camino_linklabeliconconfig' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.palettes.camino_linklabeliconconfig',
          'showitem' => 'tx_themecamino_link,tx_themecamino_link_label,--linebreak--,tx_themecamino_link_icon,tx_themecamino_link_config',
        ),
        'camino_person' => 
        array (
          'label' => 'theme_camino.backend_fields:tt_content.palettes.camino_person',
          'showitem' => 'header,--linebreak--,subheader,--linebreak--,image',
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'impexp.db:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'impexp.db:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'impexp.db:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'impexp.db:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'impexp.db:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'impexp.db:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'descriptionColumn' => 'description',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'versioningWS' => false,
        'groupName' => 'system',
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => -1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'redirect_type',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
          'qrcode' => 'actions-qrcode',
        ),
        'type' => 'redirect_type',
      ),
      'types' => 
      array (
        'default' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general, --palette--;;source, --palette--;;targetdetails, protected, --palette--;;internals,
                --div--;redirects.db:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;core.form.tabs:access, --palette--;;visibility,
                --div--;core.form.tabs:notes, description, redirect_type',
          'columnsOverrides' => 
          array (
            'source_host' => 
            array (
              'config' => 
              array (
                'default' => '*',
              ),
            ),
          ),
        ),
        'qrcode' => 
        array (
          'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.redirect_type.qr_code',
          'showitem' => '
                --div--;core.form.tabs:general, --palette--;;qrcode_target,qrcode_display,
                --div--;redirects.db:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;core.form.tabs:access, --palette--;;visibility,
                --div--;core.form.tabs:notes, description, redirect_type
                ',
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, source_path, --linebreak--, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
        'internals' => 
        array (
          'showitem' => 'creation_type, integrity_status, --linebreak--, createdby',
        ),
        'qrcode_target' => 
        array (
          'showitem' => 'source_host, target, --linebreak--, createdby, force_https',
        ),
      ),
      'columns' => 
      array (
        'redirect_type' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 'default',
          ),
        ),
        'qrcode_display' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'qrCode',
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
            ),
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
            'eval' => 'trim',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                'value' => 301,
                'group' => 'change',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                'value' => 302,
                'group' => 'change',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                'value' => 303,
                'group' => 'change',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                'value' => 307,
                'group' => 'keep',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.308',
                'value' => 308,
                'group' => 'keep',
              ),
            ),
            'itemGroups' => 
            array (
              'keep' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.keep',
              'change' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.change',
            ),
            'default' => 307,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'createdon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'protected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'creation_type' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.1',
                'value' => 1,
              ),
            ),
            'default' => 1,
            'readOnly' => true,
          ),
        ),
        'createdby' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.createdby',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.createdby.description',
          'config' => 
          array (
            'type' => 'passthrough',
            'renderType' => 'creationInformation',
            'default' => 0,
          ),
        ),
        'integrity_status' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'dbFieldLength' => 180,
            'default' => 'no_conflict',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.no_conflict',
                'value' => 'no_conflict',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.self_reference',
                'value' => 'self_reference',
              ),
            ),
            'readOnly' => true,
          ),
        ),
        'disabled' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'dashboard.db:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
      ),
      'columns' => 
      array (
        'cruser_id' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'identifier' => 
        array (
          'label' => 'dashboard.db:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'title' => 
        array (
          'label' => 'dashboard.db:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291743600,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    identifier,title,
                --div--;core.form.tabs:access,
                    hidden, --palette--;;timeRestriction,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'groupName' => 'content',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.0',
                'value' => '0',
                'icon' => 'sysnote-type-0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                'value' => '1',
                'icon' => 'sysnote-type-1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                'value' => '3',
                'icon' => 'sysnote-type-3',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                'value' => '4',
                'icon' => 'sysnote-type-4',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                'value' => '2',
                'icon' => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'cruser' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                category, subject,message,position,
            --div--;core.form.tabs:access,
                personal,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'tx_themecamino_list_item' => 
    array (
      'ctrl' => 
      array (
        'title' => 'theme_camino.backend_fields:tx_themecamino_list_item',
        'label' => 'header',
        'label_alt' => 'text,link_label',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'uid_foreign:CType',
        'hideTable' => true,
        'sortby' => 'sorting_foreign',
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'theme-camino-record-listitem',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'uid_foreign' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.uid_foreign',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.sorting_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'max' => 4,
            'checkbox' => 0,
            'range' => 
            array (
              'upper' => 1000,
              'lower' => 10,
            ),
            'default' => 0,
          ),
        ),
        'tablename' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.tablename',
          'l10n_mode' => 'exclude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.fieldname',
          'l10n_mode' => 'exclude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'category' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 50,
          ),
        ),
        'date' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'nullable' => true,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 256,
          ),
        ),
        'images' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.images',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'theme_camino.backend_fields:tx_themecamino_list_item.images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
    --palette--;;caminoImagePalette,
    --palette--;;filePalette
',
                ),
                3 => 
                array (
                  'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'images',
              'tablenames' => 'tx_themecamino_list_item',
            ),
          ),
        ),
        'link' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'theme_camino.backend_fields:tx_themecamino_list_item.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'link_config' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.link_config',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.secondary',
                'value' => 'secondary',
              ),
              2 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.soft',
                'value' => 'soft',
              ),
              3 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.text',
                'value' => 'text',
              ),
              4 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted',
                'value' => 'inverted',
                'group' => 'inverted',
              ),
              5 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-secondary',
                'value' => 'inverted-secondary',
                'group' => 'inverted',
              ),
              6 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-soft',
                'value' => 'inverted-soft',
                'group' => 'inverted',
              ),
              7 => 
              array (
                'label' => 'theme_camino.backend_fields:tt_content.tx_themecamino_link_config.I.inverted-text',
                'value' => 'inverted-text',
                'group' => 'inverted',
              ),
            ),
          ),
        ),
        'link_icon' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.link_icon',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.arrow-left',
                'value' => 'arrow-left',
              ),
              2 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.arrow-right',
                'value' => 'arrow-right',
              ),
              3 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron',
                'value' => 'chevron',
              ),
              4 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-double-left',
                'value' => 'chevron-double-left',
              ),
              5 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-double-right',
                'value' => 'chevron-double-right',
              ),
              6 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-left',
                'value' => 'chevron-left',
              ),
              7 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.chevron-right',
                'value' => 'chevron-right',
              ),
              8 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.close',
                'value' => 'close',
              ),
              9 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.download',
                'value' => 'download',
              ),
              10 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.globe',
                'value' => 'globe',
              ),
              11 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.launch',
                'value' => 'launch',
              ),
              12 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.mail',
                'value' => 'mail',
              ),
              13 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.menu',
                'value' => 'menu',
              ),
              14 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.phone',
                'value' => 'phone',
              ),
              15 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.play',
                'value' => 'play',
              ),
              16 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.search',
                'value' => 'search',
              ),
              17 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-facebook',
                'value' => 'social-facebook',
              ),
              18 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-instagram',
                'value' => 'social-instagram',
              ),
              19 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-linkedin',
                'value' => 'social-linkedin',
              ),
              20 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-x',
                'value' => 'social-x',
              ),
              21 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-xing',
                'value' => 'social-xing',
              ),
              22 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.social-youtube',
                'value' => 'social-youtube',
              ),
              23 => 
              array (
                'label' => 'theme_camino.backend_fields:tx_camino.icon.zoom',
                'value' => 'zoom',
              ),
            ),
          ),
        ),
        'link_label' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.link_label',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 256,
          ),
        ),
        'text' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 10,
            'softref' => 'typolink_tag,images,email[subst],url',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_themecamino_list_item',
            'foreign_table_where' => 'AND {#tx_themecamino_list_item}.{#pid}=###CURRENT_PID### AND {#tx_themecamino_list_item}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'palettes' => 
      array (
        'linklabel' => 
        array (
          'showitem' => 'link, link_label',
        ),
        'linklabelconfig' => 
        array (
          'showitem' => 'link, link_label, --linebreak--, link_config',
        ),
        'linklabelicon' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.palettes.linklabelicon',
          'showitem' => 'link, link_label, --linebreak--, link_icon',
        ),
        'linklabeliconconfig' => 
        array (
          'label' => 'theme_camino.backend_fields:tx_themecamino_list_item.palettes.linklabeliconconfig',
          'showitem' => 'link, link_label, --linebreak--, link_icon, link_config',
        ),
        'date_category' => 
        array (
          'showitem' => 'date, category',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
  ),
);
#