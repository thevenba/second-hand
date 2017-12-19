<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dealer Controller
 *
 * @property \App\Model\Table\DealerTable $Dealer
 *
 * @method \App\Model\Entity\Dealer[] paginate($object = null, array $settings = [])
 */
class DealerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dealer = $this->paginate($this->Dealer);

        $this->set(compact('dealer'));
        $this->set('_serialize', ['dealer']);
    }

    /**
     * View method
     *
     * @param string|null $id Dealer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dealer = $this->Dealer->get($id, [
            'contain' => ['SecondHand']
        ]);

        $this->set('dealer', $dealer);
        $this->set('_serialize', ['dealer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dealer = $this->Dealer->newEntity();
        if ($this->request->is('post')) {
            $dealer = $this->Dealer->patchEntity($dealer, $this->request->getData());
            if ($this->Dealer->save($dealer)) {
                $this->Flash->success(__('The dealer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dealer could not be saved. Please, try again.'));
        }
        $this->set(compact('dealer'));
        $this->set('_serialize', ['dealer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dealer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dealer = $this->Dealer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dealer = $this->Dealer->patchEntity($dealer, $this->request->getData());
            if ($this->Dealer->save($dealer)) {
                $this->Flash->success(__('The dealer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dealer could not be saved. Please, try again.'));
        }
        $this->set(compact('dealer'));
        $this->set('_serialize', ['dealer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dealer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dealer = $this->Dealer->get($id);
        if ($this->Dealer->delete($dealer)) {
            $this->Flash->success(__('The dealer has been deleted.'));
        } else {
            $this->Flash->error(__('The dealer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
