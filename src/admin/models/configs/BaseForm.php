<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/19 13:09
 * @Description:
 */

namespace admin\models\configs;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class BaseForm extends Model
{
    public $siteName;
    public $siteUrl;
    public $siteTitle;
    public $siteKeywords;
    public $siteDescription;
    public $adminEmail;
    public $adminQQ;
    public $icpSN;
    public $siteCopyright;
    public $siteCode;
    public $closed;
    public $message;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['closed', 'boolean'],
            ['adminEmail', 'email'],
            [['siteName', 'siteUrl', 'siteTitle', 'siteKeywords', 'siteDescription', 'adminEmail', 'adminQQ', 'icpSN', 'siteCopyright','siteCode', 'message'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'siteName' => Yii::t('admin/config', 'Site name'),
            'siteUrl' => Yii::t('admin/config', 'Site url'),
            'apiUrl' => Yii::t('admin/config', 'Api url'),
            'interfaceUrl' => Yii::t('admin/config', 'Interface url'),
            'siteTitle' => Yii::t('admin/config', 'Site title'),
            'siteKeywords' => Yii::t('admin/config', 'Site keywords'),
            'siteDescription' => Yii::t('admin/config', 'Site description'),
            'adminEmail' => Yii::t('admin/config', 'Admin email'),
            'adminQQ' => Yii::t('admin/config', 'Admin QQ'),
            'icpSN' => Yii::t('admin/config', 'ICP SN'),
            'siteCopyright' => Yii::t('admin/config', 'Site copyright'),
            'siteCode' => Yii::t('admin/config', 'Site code'),
            'closed' => Yii::t('admin/config', 'Site closed'),
            'message' => Yii::t('admin/config', 'Site closed display message'),
        ];
    }

}
