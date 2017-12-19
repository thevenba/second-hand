<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleModel Controller
 *
 * @property \App\Model\Table\VehicleModelTable $VehicleModel
 *
 * @method \App\Model\Entity\VehicleModel[] paginate($object = null, array $settings = [])
 */
class VehicleModelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vehicleModel = $this->paginate($this->VehicleModel);

        $this->set(compact('vehicleModel'));
        $this->set('_serialize', ['vehicleModel']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Model id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleModel = $this->VehicleModel->get($id, [
            'contain' => ['SecondHand']
        ]);

        $this->set('vehicleModel', $vehicleModel);
        $this->set('_serialize', ['vehicleModel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleModel = $this->VehicleModel->newEntity();
        if ($this->request->is('post')) {
            $vehicleModel = $this->VehicleModel->patchEntity($vehicleModel, $this->request->getData());
            if ($this->VehicleModel->save($vehicleModel)) {
                $this->Flash->success(__('The vehicle model has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle model could not be saved. Please, try again.'));
        }
        $this->set(compact('vehicleModel'));
        $this->set('_serialize', ['vehicleModel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Model id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleModel = $this->VehicleModel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleModel = $this->VehicleModel->patchEntity($vehicleModel, $this->request->getData());
            if ($this->VehicleModel->save($vehicleModel)) {
                $this->Flash->success(__('The vehicle model has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle model could not be saved. Please, try again.'));
        }
        $this->set(compact('vehicleModel'));
        $this->set('_serialize', ['vehicleModel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Model id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleModel = $this->VehicleModel->get($id);
        if ($this->VehicleModel->delete($vehicleModel)) {
            $this->Flash->success(__('The vehicle model has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle model could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
