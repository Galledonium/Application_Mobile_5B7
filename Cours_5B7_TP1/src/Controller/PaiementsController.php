<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paiements Controller
 *
 * @property \App\Model\Table\PaiementsTable $Paiements
 *
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaiementsController extends AppController
{

    private $userEnLigne;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Applications', 'TypesPaiements']
        ];
        $paiements = $this->paginate($this->Paiements);

        $this->set(compact('paiements'));
    }

    public function isAuthorized($userCourant)
    {

        $this->userEnLigne = $userCourant;

        if($userCourant['permissions'] === 1){

            return true;

        }

    }

    /**
     * View method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Applications', 'TypesPaiements']
        ]);

        $this->set('paiement', $paiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paiement = $this->Paiements->newEntity();
        if ($this->request->is('post')) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $applications = $this->Paiements->Applications->find('list', ['limit' => 200]);
        $typesPaiements = $this->Paiements->TypesPaiements->find('list', ['limit' => 200, 'valueField' => 'typePaiement']);

        if($this->userEnLigne['permissions'] === 1){

            $users = $this->Paiements->Users->find('list', ['limit' => 200])->where(['id' => $this->userEnLigne['id']]);

        }else if($this->userEnLigne['permissions'] === 2){

            $users = $this->Paiements->Users->find('list', ['limit' => 200]);

        }
        
        $this->set(compact('paiement', 'applications', 'typesPaiements', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Evaluations']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $applications = $this->Paiements->Applications->find('list', ['limit' => 200]);
        $typesPaiements = $this->Paiements->TypesPaiements->find('list', ['limit' => 200]);
        $evaluations = $this->Paiements->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'applications', 'typesPaiements', 'evaluations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiement = $this->Paiements->get($id);
        if ($this->Paiements->delete($paiement)) {
            $this->Flash->success(__('The paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
