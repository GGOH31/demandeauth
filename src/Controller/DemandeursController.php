<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Demandeurs Controller
 *
 * @property \App\Model\Table\DemandeursTable $Demandeurs
 *
 * @method \App\Model\Entity\Demandeur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandeursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Communes'],
        ];
        $demandeurs = $this->paginate($this->Demandeurs);

        $this->set(compact('demandeurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Demandeur id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demandeur = $this->Demandeurs->get($id, [
            'contain' => ['Communes', 'Demandes'],
        ]);

        $this->set('demandeur', $demandeur);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demandeur = $this->Demandeurs->newEntity();
        if ($this->request->is('post')) {
            $demandeur = $this->Demandeurs->patchEntity($demandeur, $this->request->getData());
            if ($this->Demandeurs->save($demandeur)) {
                $this->Flash->success(__('The demandeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demandeur could not be saved. Please, try again.'));
        }
        $communes = $this->Demandeurs->Communes->find('list', ['limit' => 200]);
        $this->set(compact('demandeur', 'communes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demandeur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demandeur = $this->Demandeurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demandeur = $this->Demandeurs->patchEntity($demandeur, $this->request->getData());
            if ($this->Demandeurs->save($demandeur)) {
                $this->Flash->success(__('The demandeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demandeur could not be saved. Please, try again.'));
        }
        $communes = $this->Demandeurs->Communes->find('list', ['limit' => 200]);
        $this->set(compact('demandeur', 'communes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demandeur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demandeur = $this->Demandeurs->get($id);
        if ($this->Demandeurs->delete($demandeur)) {
            $this->Flash->success(__('The demandeur has been deleted.'));
        } else {
            $this->Flash->error(__('The demandeur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
