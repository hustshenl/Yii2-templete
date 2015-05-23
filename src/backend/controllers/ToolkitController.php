<?php
namespace backend\controllers;

use admin\models\forms\EditProfile;
use admin\models\UpdateAdminForm;
use backend\models\AdminForm;
use common\models\user\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use common\models\user\LoginForm;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\auth\CompositeAuth;
use yii\filters\VerbFilter;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;


class ToolkitController extends Controller
{
    /**
     * @inheritdoc
     */
    /*public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['request-password-reset', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }*/
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                //HttpBasicAuth::className(),
                //HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];
        return $behaviors;
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', [
            'model' => Yii::$app->user->identity,
        ]);
    }

    /**
     * 初始化管理员
     * @return string|\yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionAdminAdd(){
        $model = User::findOne(['username'=>'Admin']);
        if($model != null) {
            throw new BadRequestHttpException('已经存在Admin账号');
        }
        $model = new AdminForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->add()) {
                if ($user->id > 0) {
                    return $this->redirect(['site/success']);
                }
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    /**
     * 编辑管理员
     * @return string|\yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionAdminEdit()
    {
        $model = User::findOne(['username'=>'Admin']);
        if($model == null) {
            throw new BadRequestHttpException('不存在Admin账号');
        }
        $item = $model->getOldAttributes();
        $model = new  AdminForm([],$item);
        //var_dump($model);exit;
        if ($model->load(Yii::$app->getRequest()->post())&&$model->edit()) {
            return $this->redirect(['site/success']);
        }
        return $this->render('update', ['model' => $model,]);
    }
    public function actionExecuteSql()
    {
        $sql = Yii::$app->getRequest()->post('sql','');
        if(!empty($sql))
        {
            $db = Yii::$app->db;
            $result = $db->createCommand($sql)->execute();
            //var_dump($result);exit;
            if($result>=0) return $this->redirect(['site/success']);
            //return '11';
        }
        /*if ($model->load(Yii::$app->getRequest()->post())&&$model->edit()) {
            return $this->redirect(['site/success']);
        }*/
        return $this->render('execute-sql');
    }
    protected function findEditForm()
    {
        $model = User::findOne(['username'=>'Admin']);
        if($model == NULL){
            throw new NotFoundHttpException('该用户不存在');
        }
        $item = $model->getOldAttributes();
        return new  EditProfile([],$item);
    }
}
