<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Communes Controller
 *
 * @property \App\Model\Table\CommunesTable $Communes
 *
 * @method \App\Model\Entity\Commune[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommunesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $communes = $this->paginate($this->Communes);

        $this->set(compact('communes'));
    }

    /**
     * View method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commune = $this->Communes->get($id, [
            'contain' => ['Demandeurs'],
        ]);

        $this->set('commune', $commune);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commune = $this->Communes->newEntity();
        if ($this->request->is('post')) {
            $commune = $this->Communes->patchEntity($commune, $this->request->getData());
            if ($this->Communes->save($commune)) {
                $this->Flash->success(__('The commune has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commune could not be saved. Please, try again.'));
        }
        $this->set(compact('commune'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commune = $this->Communes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commune = $this->Communes->patchEntity($commune, $this->request->getData());
            if ($this->Communes->save($commune)) {
                $this->Flash->success(__('The commune has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commune could not be saved. Please, try again.'));
        }
        $this->set(compact('commune'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commune = $this->Communes->get($id);
        if ($this->Communes->delete($commune)) {
            $this->Flash->success(__('The commune has been deleted.'));
        } else {
            $this->Flash->error(__('The commune could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
