<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * SecondHand Controller
 *
 * @property \App\Model\Table\SecondHandTable $SecondHand
 *
 * @method \App\Model\Entity\SecondHand[] paginate($object = null, array $settings = [])
 */
class SecondHandController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Dealer', 'VehicleModel']
        ];
        $secondHand = $this->paginate($this->SecondHand);

        $this->set(compact('secondHand'));
        $this->set('_serialize', ['secondHand']);
    }

    /**
     * View method
     *
     * @param string|null $id Second Hand id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $secondHand = $this->SecondHand->get($id, [
            'contain' => ['Dealer', 'VehicleModel', 'Picture']
        ]);

        $this->set('secondHand', $secondHand);
        $this->set('_serialize', ['secondHand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $secondHand = $this->SecondHand->newEntity();
        if ($this->request->is('post')) {
            $secondHand = $this->SecondHand->patchEntity($secondHand, $this->request->getData());
            if ($this->SecondHand->save($secondHand)) {
                $this->Flash->success(__('The second hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The second hand could not be saved. Please, try again.'));
        }
        $dealer = $this->SecondHand->Dealer->find('list', ['limit' => 200]);
        $allBrands = $this->SecondHand->VehicleModel->find()->select(['brand'])->distinct(['brand']);
        $allBrandsArray = array();
        $vehicleModel = array();
        foreach ($allBrands as $brand) {
            $allBrandsArray[] = $brand['brand'];
            $vehicleModel[$brand['brand']] = $brand['brand'];
            $vehicleModelsByBrand = $this->SecondHand->VehicleModel->find('list')->where(['brand' => $brand['brand']]);
            foreach ($vehicleModelsByBrand as $vehicleModelByBrand) {
                array_push($vehicleModel, $vehicleModelByBrand);
            }
        }
//        $vehicleModel = $this->SecondHand->VehicleModel->find('list', ['limit' => 200]);
        $picture = $this->SecondHand->Picture->find();
        $this->set(compact('secondHand', 'dealer', 'vehicleModel', 'picture'));
        $this->set('_serialize', ['secondHand']);
        $this->set('allBrandsArray', $allBrandsArray);
    }

    /**
     * Edit method
     *
     * @param string|null $id Second Hand id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $secondHand = $this->SecondHand->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secondHand = $this->SecondHand->patchEntity($secondHand, $this->request->getData());
            if ($this->SecondHand->save($secondHand)) {
                $this->Flash->success(__('The second hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The second hand could not be saved. Please, try again.'));
        }
        $dealer = $this->SecondHand->Dealer->find('list', ['limit' => 200]);
        $vehicleModel = $this->SecondHand->VehicleModel->find('list', ['limit' => 200]);
        $picture = $this->SecondHand->Picture->find('list');
        $this->set(compact('secondHand', 'dealer', 'vehicleModel', 'picture'));
        $this->set('_serialize', ['secondHand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Second Hand id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $secondHand = $this->SecondHand->get($id);
        if ($this->SecondHand->delete($secondHand)) {
            $this->Flash->success(__('The second hand has been deleted.'));
        } else {
            $this->Flash->error(__('The second hand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
