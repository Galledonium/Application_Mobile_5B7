<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvaluationsPaiements Controller
 *
 * @property \App\Model\Table\EvaluationsPaiementsTable $EvaluationsPaiements
 *
 * @method \App\Model\Entity\EvaluationsPaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EvaluationsPaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Paiements', 'Evaluations']
        ];
        $evaluationsPaiements = $this->paginate($this->EvaluationsPaiements);

        $this->set(compact('evaluationsPaiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Evaluations Paiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluationsPaiement = $this->EvaluationsPaiements->get($id, [
            'contain' => ['Paiements', 'Evaluations']
        ]);

        $this->set('evaluationsPaiement', $evaluationsPaiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluationsPaiement = $this->EvaluationsPaiements->newEntity();
        if ($this->request->is('post')) {
            $evaluationsPaiement = $this->EvaluationsPaiements->patchEntity($evaluationsPaiement, $this->request->getData());
            if ($this->EvaluationsPaiements->save($evaluationsPaiement)) {
                $this->Flash->success(__('The evaluations paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluations paiement could not be saved. Please, try again.'));
        }
        $paiements = $this->EvaluationsPaiements->Paiements->find('list', ['limit' => 200]);
        $evaluations = $this->EvaluationsPaiements->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('evaluationsPaiement', 'paiements', 'evaluations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluations Paiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluationsPaiement = $this->EvaluationsPaiements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluationsPaiement = $this->EvaluationsPaiements->patchEntity($evaluationsPaiement, $this->request->getData());
            if ($this->EvaluationsPaiements->save($evaluationsPaiement)) {
                $this->Flash->success(__('The evaluations paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluations paiement could not be saved. Please, try again.'));
        }
        $paiements = $this->EvaluationsPaiements->Paiements->find('list', ['limit' => 200]);
        $evaluations = $this->EvaluationsPaiements->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('evaluationsPaiement', 'paiements', 'evaluations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluations Paiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluationsPaiement = $this->EvaluationsPaiements->get($id);
        if ($this->EvaluationsPaiements->delete($evaluationsPaiement)) {
            $this->Flash->success(__('The evaluations paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluations paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
