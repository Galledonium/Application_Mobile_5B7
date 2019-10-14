<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\I18n\I18n;

    class LocalizationsController extends AppController{

        public function isAuthorized($user)
        {
            $action = $this->request->getParam('action');
            
            if($user['permissions'] === 1){

                return true;

            }

            return false;

        }
      
        public function index(){
            if($this->request->is('post')){
                $locale = $this->request->data('locale');
                I18n::locale($locale);

                return $this->redirect(['controller' => 'Users', 'action' => 'index']); //TODO Verifier la redirection apres le changement de langue
            }
        } 
    }
?>