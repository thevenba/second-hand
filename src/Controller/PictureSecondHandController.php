<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PictureSecondHand Controller
 *
 * @property \App\Model\Table\PictureSecondHandTable $PictureSecondHand
 *
 * @method \App\Model\Entity\PictureSecondHand[] paginate($object = null, array $settings = [])
 */
class PictureSecondHandController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SecondHand', 'Picture']
        ];
        $pictureSecondHand = $this->paginate($this->PictureSecondHand);

        $this->set(compact('pictureSecondHand'));
        $this->set('_serialize', ['pictureSecondHand']);
    }

    /**
     * View method
     *
     * @param string|null $id Picture Second Hand id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pictureSecondHand = $this->PictureSecondHand->get($id, [
            'contain' => ['SecondHand', 'Picture']
        ]);

        $this->set('pictureSecondHand', $pictureSecondHand);
        $this->set('_serialize', ['pictureSecondHand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pictureSecondHand = $this->PictureSecondHand->newEntity();
        if ($this->request->is('post')) {
            $pictureSecondHand = $this->PictureSecondHand->patchEntity($pictureSecondHand, $this->request->getData());
            if ($this->PictureSecondHand->save($pictureSecondHand)) {
                $this->Flash->success(__('The picture second hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture second hand could not be saved. Please, try again.'));
        }
        $secondHand = $this->PictureSecondHand->SecondHand->find('list', ['limit' => 200]);
        $picture = $this->PictureSecondHand->Picture->find('list', ['limit' => 200]);
        $this->set(compact('pictureSecondHand', 'secondHand', 'picture'));
        $this->set('_serialize', ['pictureSecondHand']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Picture Second Hand id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pictureSecondHand = $this->PictureSecondHand->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pictureSecondHand = $this->PictureSecondHand->patchEntity($pictureSecondHand, $this->request->getData());
            if ($this->PictureSecondHand->save($pictureSecondHand)) {
                $this->Flash->success(__('The picture second hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture second hand could not be saved. Please, try again.'));
        }
        $secondHand = $this->PictureSecondHand->SecondHand->find('list', ['limit' => 200]);
        $picture = $this->PictureSecondHand->Picture->find('list', ['limit' => 200]);
        $this->set(compact('pictureSecondHand', 'secondHand', 'picture'));
        $this->set('_serialize', ['pictureSecondHand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Picture Second Hand id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pictureSecondHand = $this->PictureSecondHand->get($id);
        if ($this->PictureSecondHand->delete($pictureSecondHand)) {
            $this->Flash->success(__('The picture second hand has been deleted.'));
        } else {
            $this->Flash->error(__('The picture second hand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
