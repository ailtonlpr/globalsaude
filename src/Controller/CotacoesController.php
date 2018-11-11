<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cotacoes Controller
 *
 * @property \App\Model\Table\CotacoesTable $Cotacoes
 *
 * @method \App\Model\Entity\Cotaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CotacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cotacoes = $this->paginate($this->Cotacoes);

        $this->set(compact('cotacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cotaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cotaco = $this->Cotacoes->get($id, [
            'contain' => []
        ]);

        $this->set('cotaco', $cotaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cotaco = $this->Cotacoes->newEntity();
        if ($this->request->is('post')) {
            $cotaco = $this->Cotacoes->patchEntity($cotaco, $this->request->getData());
            if ($this->Cotacoes->save($cotaco)) {
                $this->Flash->success(__('The cotaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cotaco could not be saved. Please, try again.'));
        }
        $this->set(compact('cotaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cotaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cotaco = $this->Cotacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cotaco = $this->Cotacoes->patchEntity($cotaco, $this->request->getData());
            if ($this->Cotacoes->save($cotaco)) {
                $this->Flash->success(__('The cotaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cotaco could not be saved. Please, try again.'));
        }
        $this->set(compact('cotaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cotaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cotaco = $this->Cotacoes->get($id);
        if ($this->Cotacoes->delete($cotaco)) {
            $this->Flash->success(__('The cotaco has been deleted.'));
        } else {
            $this->Flash->error(__('The cotaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
