<?php
namespace frontend\controllers;

use yii\helpers\Html;
use common\models\Contacts;
use common\models\ContactsSearch;

use Yii;
use yii\web\Controller;

/**
 * ContactsController
 */
class ContactsController extends Controller
{
    /**
     * Displays homepage
     * 
     * @return mixed
     */
    
    public function actionIndex()
    {
        $contacts = Contacts::find()->orderBy('contact_name')->all();
        return $this->render('all',['contacts'=>$contacts]);
    }
    
    public function actionOne($url)
    {
        $contactall = Contacts::find()->all();
        foreach ($contactall as $contact) {
            if (($contact->contact_id == $url) and ($contact->contact_user == Yii::$app->user->getId())) {
                $contactone =$contact;
                return $this->render('one',['contactone'=>$contactone]);}}
    }
    
    public function actionCreate()
    {
        $model = new Contacts();
        $model->contact_user = Yii::$app->user->getId();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/contacts']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Contacts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['one', 'url' => $model->contact_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Contacts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/contacts']);
    }

        protected function findModel($id)
    {
        if (($model = Contacts::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
 
    }
