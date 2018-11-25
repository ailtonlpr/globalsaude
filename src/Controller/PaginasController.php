<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Controller\FuncoesController;
use Cake\Controller\Component\FlashComponent;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Network\Session;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;



/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PaginasController extends AppController
{

	// public function initialize()
 //    {
 //        parent::initialize();

 //        $this->loadComponent('Flash');
 //    }

	public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->setHelpers(['PaginasFuncoes']);
    }

    public function lista()
    {
    	$this->Cotacoes = TableRegistry::get('Cotacoes');

    	$cotacoes = $this->paginate($this->Cotacoes);

        $this->set(compact('cotacoes'));
    }

    public function index()
    {   
    	$this->set('_csrfToken',$this->request->getParam('_csrfToken'));

    	if($this->request->is('post')){
			$data['S_COTACAO_S_NOME'] = $this->request->getData('S_COTACAO_S_NOME');
			$data['S_COTACAO_S_EMAIL'] = $this->request->getData('S_COTACAO_S_EMAIL');
			$data['S_COTACAO_I_NUMERO_MOVEL'] = FuncoesController::limpandoMascaraInteiro($this->request->getData('S_COTACAO_I_NUMERO_MOVEL'));
			$data['S_COTACAO_I_NUMERO_FIXO'] = FuncoesController::limpandoMascaraInteiro($this->request->getData('S_COTACAO_I_NUMERO_FIXO'));
			$data['S_COTACAO_C_HORARIO_CONTATO'] = $this->request->getData('S_COTACAO_C_HORARIO_CONTATO');
			$data['S_COTACAO_S_OBSERVACAO'] = $this->request->getData('S_COTACAO_S_OBSERVACAO');
			$data['S_COTACAO_I_ATIVO'] = $this->request->getData('S_COTACAO_I_ATIVO');
			
			// Validação dos telefones
			if(empty($data['S_COTACAO_I_NUMERO_MOVEL']) && empty($data['S_COTACAO_I_NUMERO_FIXO'])){
				$data['S_COTACAO_I_NUMEROS'] = '';
			} else if (!empty($data['S_COTACAO_I_NUMERO_MOVEL'])) {
				$data['S_COTACAO_I_NUMEROS'] = $data['S_COTACAO_I_NUMERO_MOVEL'];
			} else {
				$data['S_COTACAO_I_NUMEROS'] = $data['S_COTACAO_I_NUMERO_FIXO'];
			}


    		$cotacoes = TableRegistry::get('Cotacoes');
			$cotacao = $cotacoes->newEntity();
            $cotacao = $cotacoes->patchEntity($cotacao, $data);   
            //debug($cotacao); die;       
            if($cotacoes->save($cotacao)){
                $this->Flash->cotarsucesso(
                	__('Solicitação de cotação cadastrada com sucesso. Em breve faremos contato.'),
                	['key'=> 'cotarsucesso']
                );
                $this->set('sucessocotar','ok');
            } else {
            	// debug($cotacao->getErrors()); die;
            	$this->set('erros',$cotacao->getErrors());
                $this->Flash->cotar(
                	__('Não foi possível adicionar o registro'),
                	['key' => 'cotar']
                );
            }
        } 
    }

    public function cotacao()
    {
    	

    	$this->viewBuilder()->setLayout('ajax');
  		$this->render(false);
    	// debug($this->request->data);
    	// exit;

    	$cotacoes = TableRegistry::get('Cotacoes');
		// $cotacao = $this->Cotacoes->newEntity();
		$cotacao = $cotacoes->newEntity();
		// $cotacoes->save($cotacao);

    	if($this->request->is('post')){
            // $cotacao = $this->Cotacoes->patchEntity($cotacao, $this->request->data);
            $cotacao = $cotacoes->patchEntity($cotacao, $this->request->getData());
            
            if($cotacoes->save($cotacao)){
                $this->Flash->success(__('Registro salvo com sucesso'));
                return $this->redirect(['action' => 'index']);
            } else {
            	// debug($cotacao->errors()); die;
                $this->Flash->error(__('Não foi possível adicionar o registro'));
                return $this->redirect(['action' => 'index']);
            }
        } 
        
        // $this->set('tipo_usuarios',$tipo_usuarios);
        // $this->set('cotacao', $cotacao);
    }

    public function enviardados()
    {

        $this->viewBuilder()->setLayout('ajax');
        $this->render(false);

        if($this->request->is('post')){


            $data['S_OUTRO_S_DADOS'] = json_encode($this->request->data);

            $outros = TableRegistry::get('Outros');
            $outro = $outros->newEntity();
            $outro = $outros->patchEntity($outro, $data);   

            if($outros->save($outro)){
                $this->Flash->sucesso(
                    __('Solicitação de cotação cadastrada com sucesso. Em breve faremos contato.'),
                    ['key'=> 'cotarsucesso']
                );
                $this->set('sucessocotar','ok');
            } else {
                // debug($outro->getErrors()); die;
                $this->set('erros',$outro->getErrors());
                $this->Flash->cotar(
                    __('Não foi possível adicionar o registro'),
                    ['key' => 'cotar']
                );
            }
        }
    }


    public function pagamento()
    {
        $this->viewBuilder()->setLayout('defaultpagto');
        $this->set('_csrfToken',$this->request->getParam('_csrfToken'));
    }

    public function teste()
    {
        $this->viewBuilder()->setLayout('defaultpagto');
    }

    public function getTempoVida($dt_nascimento = null){
      
      if(is_null($dt_nascimento)){
        return false;
      } 

      $dt_nascimento = $dt_nascimento->format('Y-m-d');

      $agora = date('Y-m-d');
      $data_atual    = new \DateTime($agora);
      $data_anterior = new \DateTime($dt_nascimento);
      $calculo       = $data_atual->diff($data_anterior);

      // return "{$calculo->y} ".__('anos').", {$calculo->m} ".__('meses')." ".__('e')." {$calculo->d} ".__('dias')."";
      return "{$calculo->y} ".__('anos').", {$calculo->m} ".__('meses')." ".__('e')." {$calculo->d} ".__('dias')."";
    }
}