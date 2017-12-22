<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Picture Controller
 *
 * @property \App\Model\Table\PictureTable $Picture
 *
 * @method \App\Model\Entity\Picture[] paginate($object = null, array $settings = [])
 */
class PictureController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $picture = $this->paginate($this->Picture);

        $this->set(compact('picture'));
        $this->set('_serialize', ['picture']);
    }

    /**
     * View method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $picture = $this->Picture->get($id, [
            'contain' => ['SecondHand']
        ]);

        $this->set('picture', $picture);
        $this->set('_serialize', ['picture']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $picture = $this->Picture->newEntity();
        if ($this->request->is('post')) {
            $target_dir = "img/pictures/";
            $target_file = $target_dir . basename($_FILES["submittedfile"]["name"]);
            $uploadOk = 1;

            $data = $this->request->getData();
            $picture = $this->Picture->patchEntity($picture, $data);
            $submittedFile = $data["submittedfile"];
            if ($submittedFile["error"] > 0) {
                $this->Flash->error(__('Sorry, there was an error uploading your file.'));
                $uploadOk = 0;
            }
            if (file_exists($target_file)) {
                $this->Flash->error(__('Sorry, file already exists.'));
                $uploadOk = 0;
            }
            if ($submittedFile["size"] > 2000000) {
                $this->Flash->error(__('Sorry, your file is too large.'));
                $uploadOk = 0;
            }
            if ($submittedFile["type"] != "image/jpeg" && $submittedFile["type"] != "image/png" && $submittedFile["type"] != "image/gif") {
                $this->Flash->error(__('Sorry, only JPEG, PNG & GIF files are allowed.'));
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $this->Flash->error(__('Sorry, your file was not uploaded.'));
            } else {
                if (move_uploaded_file($submittedFile["tmp_name"], $target_file)) {
                    $this->Flash->success(__('The file ' . basename($submittedFile["name"]) . ' has been uploaded.'));
                    $protocol = "";
                    if (isset($_SERVER['HTTPS'])) {
                        $protocol = "https://";
                    } else {
                        $protocol = "http://";
                    }
                    $picture['url'] = $protocol . $_SERVER['SERVER_NAME'] . "/" . $target_file;
                    if ($this->Picture->save($picture)) {
                        $this->Flash->success(__('The picture has been saved.'));

                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The picture could not be saved. Please, try again.'));
                } else {
                    $this->Flash->error(__('Sorry, there was an error uploading your file.'));
                }
            }
        }
        $secondHand = $this->Picture->SecondHand->find('list', ['limit' => 200]);
        $this->set(compact('picture', 'secondHand'));
        $this->set('_serialize', ['picture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $picture = $this->Picture->get($id, [
            'contain' => ['SecondHand']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $picture = $this->Picture->patchEntity($picture, $this->request->getData());
            if ($this->Picture->save($picture)) {
                $this->Flash->success(__('The picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture could not be saved. Please, try again.'));
        }
        $secondHand = $this->Picture->SecondHand->find('list', ['limit' => 200]);
        $this->set(compact('picture', 'secondHand'));
        $this->set('_serialize', ['picture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $picture = $this->Picture->get($id);
        pr($picture);
        $protocol = "";
        if (isset($_SERVER['HTTPS'])) {
            $protocol = "https://";
        } else {
            $protocol = "http://";
        }
        $url = explode($protocol . $_SERVER['SERVER_NAME'] . "/", $picture['url']);
        if (unlink($url[1])) {
            if ($this->Picture->delete($picture)) {
                $this->Flash->success(__('The picture has been deleted.'));
            } else {
                $this->Flash->error(__('The picture could not be deleted. Please, try again.'));
            }
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }


        return $this->redirect(['action' => 'index']);
    }

}
