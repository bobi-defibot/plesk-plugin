<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1168d98fab8da30171e8941f6065bbaa
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'Plesk\\SDK\\' => 10,
        ),
        'M' => 
        array (
            'MicroweberPackages\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Plesk\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/plesk/pm-api-stubs/SDK',
        ),
        'MicroweberPackages\\' => 
        array (
            0 => __DIR__ . '/..' . '/microweber-packages/shared-server-scripts/src',
            1 => __DIR__ . '/..' . '/microweber-packages/composer-client/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'Zend_' => 
            array (
                0 => __DIR__ . '/..' . '/plesk/zf1/library',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'pm_ActionLog' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/ActionLog.php',
        'pm_ApiCli' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/ApiCli.php',
        'pm_ApiRpc' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/ApiRpc.php',
        'pm_Application' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Application.php',
        'pm_Auth' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Auth.php',
        'pm_Backup_Manager' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Backup/Manager.php',
        'pm_Bootstrap' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Bootstrap.php',
        'pm_Client' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Client.php',
        'pm_Config' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Config.php',
        'pm_Context' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Context.php',
        'pm_Controller_Action' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Controller/Action.php',
        'pm_Crypt' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Crypt.php',
        'pm_Dns_Record' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/Record.php',
        'pm_Dns_SoaRecord' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/SoaRecord.php',
        'pm_Dns_Template' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/Template.php',
        'pm_Dns_Template_Record' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/Template/Record.php',
        'pm_Dns_Template_SoaRecord' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/Template/SoaRecord.php',
        'pm_Dns_Zone' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Dns/Zone.php',
        'pm_Domain' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Domain.php',
        'pm_DomainAlias' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/DomainAlias.php',
        'pm_Exception' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Exception.php',
        'pm_Exception_InvalidArgumentException' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Exception/InvalidArgumentException.php',
        'pm_Exception_ResultException' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Exception/ResultException.php',
        'pm_Extension' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Extension.php',
        'pm_FileManager' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/FileManager.php',
        'pm_FileManager_Action' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/FileManager/Action.php',
        'pm_Form_Simple' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Form/Simple.php',
        'pm_Form_SubForm' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Form/SubForm.php',
        'pm_Hook_ActionLog' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ActionLog.php',
        'pm_Hook_ActiveList' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ActiveList.php',
        'pm_Hook_ApiCli' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ApiCli.php',
        'pm_Hook_ApiRest' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ApiRest.php',
        'pm_Hook_ApiRpc' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ApiRpc.php',
        'pm_Hook_Applications' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Applications.php',
        'pm_Hook_Auth' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Auth.php',
        'pm_Hook_Backup' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup.php',
        'pm_Hook_Backup_Client' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup/Client.php',
        'pm_Hook_Backup_Domain' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup/Domain.php',
        'pm_Hook_Backup_Server' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup/Server.php',
        'pm_Hook_Backup_Task' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup/Task.php',
        'pm_Hook_Backup_Transport' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Backup/Transport.php',
        'pm_Hook_ConfigDefaults' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ConfigDefaults.php',
        'pm_Hook_ContentInclude' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/ContentInclude.php',
        'pm_Hook_CustomButtons' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/CustomButtons.php',
        'pm_Hook_DynamicList' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/DynamicList.php',
        'pm_Hook_Form' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Form.php',
        'pm_Hook_Interface' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Interface.php',
        'pm_Hook_Limits' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Limits.php',
        'pm_Hook_LoginContentInclude' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/LoginContentInclude.php',
        'pm_Hook_LongTasks' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/LongTasks.php',
        'pm_Hook_Navigation' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Navigation.php',
        'pm_Hook_Notifications' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Notifications.php',
        'pm_Hook_Permissions' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Permissions.php',
        'pm_Hook_PlanItems' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/PlanItems.php',
        'pm_Hook_Promos' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Promos.php',
        'pm_Hook_Search' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/Search.php',
        'pm_Hook_SimpleList' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/SimpleList.php',
        'pm_Hook_SystemServices' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/SystemServices.php',
        'pm_Hook_WebServer' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Hook/WebServer.php',
        'pm_License' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/License.php',
        'pm_Loader' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Loader.php',
        'pm_Locale' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Locale.php',
        'pm_Log' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Log.php',
        'pm_LongTask_Manager' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/LongTask/Manager.php',
        'pm_LongTask_Task' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/LongTask/Task.php',
        'pm_Navigation_OverviewPage' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Navigation/OverviewPage.php',
        'pm_Navigation_Page' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Navigation/Page.php',
        'pm_Notification' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Notification.php',
        'pm_Notifications_EmailNotification' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Notifications/EmailNotification.php',
        'pm_Notifications_PanelNotification' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Notifications/PanelNotification.php',
        'pm_Plan' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Plan.php',
        'pm_ProductInfo' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/ProductInfo.php',
        'pm_Promo_AdminHome' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Promo/AdminHome.php',
        'pm_Promo_CustomerHome' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Promo/CustomerHome.php',
        'pm_Promo_Home' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Promo/Home.php',
        'pm_Scheduler' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Scheduler.php',
        'pm_Scheduler_Task' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Scheduler/Task.php',
        'pm_SearchIndex' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/SearchIndex.php',
        'pm_ServerFileManager' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/ServerFileManager.php',
        'pm_Session' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Session.php',
        'pm_Settings' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/Settings.php',
        'pm_SystemService_Service' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/SystemService/Service.php',
        'pm_View_Helper_ActiveList' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/ActiveList.php',
        'pm_View_Helper_BaseUrl' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/BaseUrl.php',
        'pm_View_Helper_DomainOverviewUrl' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/DomainOverviewUrl.php',
        'pm_View_Helper_Lmsg' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/Lmsg.php',
        'pm_View_Helper_RenderList' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/RenderList.php',
        'pm_View_Helper_RenderSmallTools' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/RenderSmallTools.php',
        'pm_View_Helper_RenderTabs' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/RenderTabs.php',
        'pm_View_Helper_RenderTools' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Helper/RenderTools.php',
        'pm_View_List_Simple' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/List/Simple.php',
        'pm_View_Status' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/View/Status.php',
        'pm_WebServer' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer.php',
        'pm_WebServer_Abstract' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer/Abstract.php',
        'pm_WebServer_Apache' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer/Apache.php',
        'pm_WebServer_IIS' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer/IIS.php',
        'pm_WebServer_Interface' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer/Interface.php',
        'pm_WebServer_Nginx' => __DIR__ . '/..' . '/plesk/pm-api-stubs/pm/WebServer/Nginx.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1168d98fab8da30171e8941f6065bbaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1168d98fab8da30171e8941f6065bbaa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1168d98fab8da30171e8941f6065bbaa::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1168d98fab8da30171e8941f6065bbaa::$classMap;

        }, null, ClassLoader::class);
    }
}
