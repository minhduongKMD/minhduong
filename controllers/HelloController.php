<?php 

namespace app\controllers;
use yii\web\Controller;
use app\models\Hello;

class HelloController extends Controller
{
	public function actionIndex()
	{
		return  $this->render('index');
	}
	public function actionUser()
	{
		$model=new Hello();
		$user->getUser('minhduong','facebook','minhduongkieu');
		echo $model->getUser();
	}
}
?>