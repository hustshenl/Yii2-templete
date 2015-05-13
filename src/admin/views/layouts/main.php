<?php
/**
 * $this->params结构
 * [
 * 'subTitle'=>'二级标题',
 * 'breadcrumbs'=>[
 *      'links' => [
 *           [
 *           'label' => 'Sample Post',
 *           'url' => ['post/edit', 'id' => 1]
 *          ],
 *          'Edit',
 *      ],
 *      'actions' => [
 * 'label' => 'Action',
 * 'button' => [
 * 'type' => Button::TYPE_FIT_HEIGHT ,
 * 'color' => Button::COLOR_GREY_SALT,
 * 'options' => ['data-hover' => 'dropdown', 'delay' => '1000'],
 * ],
 * 'dropdown' => [
 * 'items' => [
 * ['label' => 'DropdownA', 'url' => '/'],
 * ['divider'],
 * ['label' => 'DropdownB', 'url' => '#'],
 * ],
 * ],
 *      ]
 *  ],
 * ]
 */
/** @var $this \yii\web\View */
use yii\helpers\Html;
use hustshenl\metronic\helpers\Layout;
use admin\widgets\Menu;
use hustshenl\metronic\widgets\NavBar;
use hustshenl\metronic\widgets\Nav;
use hustshenl\metronic\widgets\Breadcrumbs;
use hustshenl\metronic\widgets\Button;
use admin\widgets\HorizontalMenu;
use hustshenl\metronic\Metronic;
use admin\widgets\Badge;
use hustshenl\metronic\widgets\Alert;
use hustshenl\metronic\bundles\NotificationAsset;

$this->beginPage();
Metronic::registerThemeAsset($this);
//NotificationAsset::register($this);
$this->registerCssFile('@web/css/common.css');
$this->registerCssFile('@web/css/form.css');
$this->registerJs('Metronic.init();Layout.init(); QuickSidebar.init();Demo.init();');
//$this->registerJs('Notify.init();');
//$this->registerJsFile("@web/js/notify.js",['position'=>$this::POS_END,'depends'=>'hustshenl\metronic\bundles\CoreAsset']);
?>
    <!DOCTYPE html>
    <!--[if IE 8]>
    <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]>
    <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="<?= Yii::$app->language ?>" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta name="MobileOptimized" content="320">
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body <?= Layout::getHtmlOptions('body', ['class' => 'page-quick-sidebar-over-content'], true) ?> >
    <?php $this->beginBody() ?>
    <!-- BEGIN NAV BAR -->
    <?php
    NavBar::begin(
        [
            'brandLabel' => 'My Company',
            'brandLogoUrl' => Metronic::getAssetsUrl($this) . '/img/logo.png',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => Layout::getHtmlOptions('header', false),
        ]
    );
    echo HorizontalMenu::widget(
        [
            'items' => [
                /*[
                    'label' => \Yii::t('admin', 'Home'),
                    'type' => HorizontalMenu::ITEM_TYPE_NORMAL,
                    'url' => ['/site/index'],
                    //'active' => true,
                ],*/
                /*[
                    'label' => \Yii::t('admin', 'All Menu'),
                    'type' => HorizontalMenu::ITEM_TYPE_MEGA,
                    'items' => [
                        [
                            //'options' => '',
                            'label' => '产品管理',
                            'items' => [
                                ['label' => '产品列表', 'url' => ['/product/index']],
                                ['label' => '产品分类', 'url' => ['/product/category']],
                            ]
                        ],
                        [
                            //'options' => '',
                            'label' => '权限管理',
                            'childUrl' => 'permission/index',
                            'items' => [
                                ['label' => 'Promo Page 2'],
                                ['label' => 'Email Templates 2'],
                            ]
                        ],
                    ]
                ],*/
            ],
            'search' => ['visible' => false],
        ]
    );
    echo '<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>';
    echo '<div class="top-menu">';
    echo Nav::widget(
        [
            'position' => Nav::POS_RIGHT,
            'items' => [
                [
                    'icon' => 'fa icon-bell',
                    'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-all']]),
                    'label' => \Yii::t('common', 'Home'),
                    'url' => ['/site/index'],
                    // dropdown title
                    //'title' => 'N条待处理信息',
                    //'more' => ['label' => 'More ', 'url' => '/', 'icon' => 'm-icon-swapright'],
                    // scroller
                    //'scroller' => ['height' => 200],
                    // end dropdown
                    'items' => [
                        [
                            //'icon' => 'icon-user',
                            'label' => '5分钟提醒',
                            'url' => ['order/min5'],
                            'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-min5']]),
                        ],
                        [
                            //'icon' => 'icon-user',
                            'label' => '45分钟提醒',
                            'url' => ['order/min45'],
                            'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-min45']]),
                        ],
                        [
                            //'icon' => 'icon-user',
                            'label' => '超时订单',
                            'url' => ['order/overtime'],
                            'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-timeout']]),
                        ],
                        [
                            //'icon' => 'icon-user',
                            'label' => '投诉订单',
                            'url' => ['order/complaint'],
                            'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-complaint']]),
                        ],
                        [
                            //'icon' => 'icon-user',
                            'label' => '黑名单订单',
                            'url' => ['order/hidden'],
                            'badge' => Badge::widget(['label' => '0', 'type' => Badge::TYPE_DANGER, 'options' => ['id' => 'notify-forbidden']]),
                        ],

                    ]
                ],
                [
                    'label' => Nav::userItem(\Yii::$app->user->identity->username, Metronic::getAssetsUrl($this) . '/img/avatar.png'),
                    'icon' => 'fa fa-angle-down',
                    'url' => '#',
                    'type' => Nav::TYPE_USER,
                    'items' => [
                        [
                            'icon' => 'icon-user',
                            'label' => '个人资料',
                            'url' => ['/account/index'],
                            //'badge' => Badge::widget(['label' => 'xxx', 'type' => Badge::TYPE_SUCCESS]),
                        ],
                        [
                            'icon' => 'fa fa-edit ',
                            'label' => '修改资料',
                            'url' => ['/account/edit'],
                            //'badge' => Badge::widget(['label' => 'xxx', 'type' => Badge::TYPE_SUCCESS]),
                        ],
                        ['divider'],
                        [
                            'icon' => 'icon-logout',
                            'label' => '退出登陆',
                            'url' => ['/account/logout'],
                        ],
                    ]
                ],
                /*[
                    'icon' => 'fa icon-logout',
                    'type' => Nav::TYPE_LOGOUT,
                    'label' => 'logout',
                    'url' => ['/admin/logout'],
                ],*/
                // [ 'label' => 'Contact', 'url' => ['/site/contact']],
            ],
        ]
    );
    echo '</div>';
    NavBar::end();
    ?>
    <!-- END NAV BAR -->
    <?=
    (Metronic::getComponent()->layoutOption == Metronic::LAYOUT_BOXED) ?
        Html::beginTag('div', ['class' => 'container']) : '';
    ?>
    <div class="clearfix"></div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?=
        Menu::widget(
            [
                'visible' => true,
                'items' => [
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default action is used.
                    ['icon' => 'fa fa-home', 'label' => \Yii::t('common', 'Home'), 'url' => ['site/index']],
                    // 'Products' menu item will be selected as long as the route is 'product/index'
                    [
                        'icon' => 'icon-handbag',
                        //'badge' => Badge::widget(['label' => 'New', 'round' => false, 'type' => Badge::TYPE_SUCCESS]),
                        'label' => '产品管理',
                        'url' => ['/product/index'],
                        'items' => [
                            ['label' => '产品列表', 'url' => ['product/index'],],
                            [
                                'label' => '标签管理',
                                'url' => ['product/tag'],
                                'childUrls' => ['product/createtag'],
                                /*'items' => [
                                    ['label' => '标签列表', 'url' => ['product/tag']],
                                    ['label' => '添加标签', 'url' => ['product/createtag']]
                                ]*/
                            ],
                            [
                                'label' => '分类管理',
                                'url' => ['product/category'],
                                'childUrls' => ['product/createcategory'],
                                /*'items' => [
                                    ['label' => '分类管理', 'url' => ['product/category']],
                                    ['label' => '添加分类', 'url' => ['product/createcategory']]
                                ]*/
                            ],
                            [
                                'label' => '单位管理',
                                'url' => ['product/unit'],
                                'childUrls' => ['product/createunit'],
                                /*'items' => [
                                    ['label' => '单位管理', 'url' => ['product/unit']],
                                    ['label' => '添加单位', 'url' => ['product/createunit']]
                                ]*/
                            ],
                            ['label' => '产品统计', 'url' => ['product/statistics']],
                        ]
                    ],
                    [
                        'icon' => 'icon-basket',
                        'label' => '订单管理',
                        'url' => ['/order/index'],
                        'items' => [
                            [
                                'label' => '订单列表',
                                'url' => ['/order/index'],
                            ],
                            [

                                'label' => '5分钟提醒',

                                'url' => ['/order/min5?all=1'],

                            ],

                            [

                                'label' => '45分钟提醒',

                                'url' => ['/order/min45?all=1'],

                            ],

                            [

                                'label' => '超时订单',
                                'url' => ['/order/overtime?all=1']
                            ],
                            [
                                'label' => '投诉订单',
                                'url' => ['/order/complaint?all=1']
                            ],
                            [
                                'label' => '黑名单订单',
                                'url' => ['/order/hidden?all=1']
                            ],
                            [
                                'label' => '订单统计',
                                'url' => ['/order/statistic']
                            ],
                        ]
                    ],
                    [
                        'icon' => 'fa fa-user',
                        'label' => '用户管理',
                        'url' => ['customer/index'],
                        'items' => [
                            [
                                'label' => '用户列表',
                                'url' => ['customer/index'],
                                'childUrls' => ['customer/view', 'customer/order'],
                            ],
                            [
                                'label' => '用户统计',
                                'url' => ['customer/statistic'],
                            ],
                        ],
                    ],
                    [
                        'icon' => 'fa fa-cube',
                        'label' => '商户管理',
                        'url' => ['shop/index'],
                        'items' => [
                            [
                                'label' => '商户列表',
                                'url' => ['shop/index'],
                                'childUrls' => ['shop/view', 'shop/order', 'goods/index', 'shop/comment', 'shop/member', 'shop/merchant'],
                            ],
                            [
                                'label' => '添加商户',
                                'url' => ['shop/create-merchant'],
                                'childUrls' => ['shop/create'],
                            ],
                            [
                                'label' => '商户类别',
                                'url' => ['shop/category'],
                                'childUrls' => ['shop/create-category'],
                            ],
                            [
                                'label' => '商户申请',
                                'url' => ['shop/apply'],
                                'childUrls' => ['shop/view-apply', 'shop/reply-apply'],
                            ],
                            [
                                'label' => '商户账号',
                                'url' => ['shop/merchants'],
                                'childUrls' => ['shop/merchant-edit'],
                            ],
                            [
                                'label' => '商户统计',
                                'url' => ['shop/statistic'],
                            ],
                        ],
                    ],
                    [
                        'icon' => 'icon-present',
                        'label' => '促销管理',
                        'url' => ['promotion/firstorder'],
                        'items' => [
                            [
                                'label' => '首单优惠',
                                'url' => ['promotion/firstorder?all=1'],
                            ],
                            [
                                'label' => '满减优惠',

                                'url' => ['promotion/fullorder?all=1'],

                            ],

                            [
                                'label' => '促销统计',
                                'url' => ['promotion/statistic'],
                            ],

                        ]
                    ],
                    [
                        'icon' => 'icon-docs',
                        'label' => '内容管理',
                        'url' => ['article/index'],
                        'items' => [
                            [
                                'label' => '资讯列表',
                                'url' => ['article/index'],
                                'childUrls' => ['article/view'],
                            ],
                            [
                                'label' => '资讯分类管理',
                                'url' => ['article/category'],
                            ],
                            [
                                'label' => '发布资讯',
                                'url' => ['article/create'],
                            ],
                            [
                                'label' => '租房列表',
                                'url' => ['zufang/index'],
                            ],
                            [
                                'label' => '黄页商户管理',
                                'url' => ['huangye/index'],
                                'childUrls' => ['huangye/view', 'huangye/create', 'huangye/update',],
                            ],

                        ],
                    ],
                    [
                        'icon' => 'fa fa-thumbs-up',
                        'label' => '评价管理',
                        'url' => ['evaluation/index'],
                        'items' => [
                            [
                                'label' => '评论列表',
                                'url' => ['evaluation/index'],
                            ],
                            [
                                'label' => '评分列表',
                                'url' => ['evaluation/scores'],
                            ],
                        ],
                    ],
                    [
                        'icon' => 'fa fa-comments',
                        'label' => '投诉管理',
                        'url' => ['feedback/index'],
                        'items' => [
                            [
                                'label' => '投诉列表',
                                'url' => ['feedback/index'],
                                'childUrls' => ['feedback/reply', 'feedback/view'],
                            ],
                        ],
                    ],
                    [
                        'icon' => 'icon-settings',
                        'label' => '系统设置',
                        //'url' => ['config/index'],
                        'items' => [
                            [
                                'label' => '基本设置',
                                'url' => ['config/index'],
                            ],
                            [
                                'label' => '运营设置',
                                'url' => ['config/operation'],
                            ],
                            [
                                'label' => '微信设置',
                                'url' => ['weixin/index'],
                                'childUrls' => ['weixin/create', 'weixin/update', 'weixin/view'],
                            ],
                            [
                                'label' => '区域设置',
                                'url' => ['config/area'],
                                'childUrls' => ['config/create-area'],
                            ],
                        ],
                    ],

                    [
                        'icon' => 'fa fa-bookmark-o',
                        'label' => '权限管理',
                        //'url' => ['role/index'],
                        'items' => [
                            [
                                'label' => '角色管理',
                                'url' => ['role/index'],
                                'childUrls' => ['role/create', 'role/update', 'role/view'],
                            ],
                            [
                                'label' => '路由管理',
                                'url' => ['route/index'],
                                'childUrls' => ['route/create', 'route/update', 'route/view'],
                            ],
                            [
                                'label' => '权限管理',
                                'url' => ['permission/index'],
                                'childUrls' => ['permission/create', 'permission/update', 'permission/view'],
                            ],
                            [
                                'label' => '权限分配',
                                'url' => ['assignment/index'],
                                'childUrls' => ['assignment/create', 'assignment/update', 'assignment/view'],
                            ],
                        ],
                    ],

                ],
            ]
        );
        ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE TITLE -->
                <!--<h3 class="page-title">
                    <? /*= Html::encode($this->title) */ ?>
                    <small><? /*= Html::encode(@$this->params['subTitle']) */ ?></small>
                </h3>-->
                <!-- END PAGE TITLE -->
                <div class="page-bar">
                    <!-- BEGIN BREADCRUMB-->
                    <?= Breadcrumbs::widget(
                        [
                            'actions' => @$this->params['breadcrumbs']['actions'],
                            'homeLink' => [
                                'label' => \Yii::t('common', 'Home'),
                                'icon' => 'fa fa-home',
                                'url' => ['/']
                            ],
                            'links' => @$this->params['breadcrumbs']['links'],
                        ]
                    );
                    ?>
                </div>
                <?php
                $session = Yii::$app->getSession();
                $flashes = $session->getAllFlashes();
                foreach ($flashes as $type => $message) {
                    echo Alert::widget([
                        'type' => $type,
                        'body' => $message,
                        'options' => ['class' => 'Metronic-alerts']
                    ]);
                    $session->removeFlash($type);
                }
                ?>
                <?/*= Alert::widget(['options' => ['class' => 'Metronic-alerts']]) */?>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <?= $content ?>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            <?= \yii\helpers\ArrayHelper::getValue(Yii::$app->config->get('siteInfo'),'siteCopyright','2014-'.date('Y').' &copy; SHENL.COM.'); ?>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <?= (Metronic::getComponent()->layoutOption == Metronic::LAYOUT_BOXED) ? Html::endTag('div') : ''; ?>
    <?php $this->endBody() ?>
    </body>
    <!-- END BODY -->
    </html>
<?php $this->endPage() ?>