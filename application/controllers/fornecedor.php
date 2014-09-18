<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

	public function index()
	{
		

		if($this->input->post('nome_pessoa')!==false){

			$this->load->model("fornecedor_model",'Fornecedor');

			$nome_pessoa = $this->input->post('nome_pessoa');
			$tipo_pessoa = $this->input->post('tipo_pessoa');
			$documento = $this->input->post('documento');
			$nome_fantasia = $this->input->post('nome_fantasia');
			$pecas_fornecedor = $this->input->post('pecas_fornecedor');
			$obs = $this->input->post('obs');
			
			$nome_responsavel = $this->input->post('nome');
			$celular = $this->input->post('celular');
			$telefone = $this->input->post('telefone');
			$fax = $this->input->post('fax');
			$nextel = $this->input->post('nextel');
			$email = $this->input->post('email');
			$skype = $this->input->post('skype');
			$site = $this->input->post('site');
			$endereco = $this->input->post('endereco');
			$numero = $this->input->post('numero');
			$complemento = $this->input->post('complemento');
			$bairro = $this->input->post('bairro');
			$cidade = $this->input->post('cidade');
			$estado = $this->input->post('estado');
			$pais = $this->input->post('pais');	


			//cadastramos fornecedor
			$dadosF['id_empresa'] = 1;
			$dadosF['nome'] = $nome_pessoa;
			$dadosF['nome_fantasia'] = $nome_fantasia;
			$dadosF['documento'] = $documento;
			$dadosF['tipo_pessoa'] = $tipo_pessoa=='pf'?'fisica':'juridica';
			$dadosF['endereco'] = $endereco;
			$dadosF['numero'] = $numero;
			$dadosF['complemento'] = $complemento;
			$dadosF['bairro'] = $bairro;
			$dadosF['cidade'] = $cidade;
			$dadosF['estado'] = $estado;
			$dadosF['pais'] = $pais;
			$dadosF['obs'] = $obs;
			$dadosF['status'] = 'ativo';
			$idFornecedor = $this->Fornecedor->inserirFornecedor($dadosF);

			//Cadastramos as peças que este fornecedor trabalha
			$pecas_fornecedor = explode(',',$pecas_fornecedor);
			foreach ($pecas_fornecedor as $key => $value) {
				$dadosP['id_fornecedor'] = $idFornecedor;
				$dadosP['nome_peca'] = $value;
				$this->Fornecedor->inserirPecas($dadosP);
			}

			//cadastramos os responsáveis
			foreach ($nome_responsavel as $key => $value) {
				$dadosR['id_fornecedor'] = $idFornecedor;
				$dadosR['nome'] = $nome_responsavel[$key];
				$dadosR['celular'] = $celular[$key];
				$dadosR['telefone'] = $telefone[$key];
				$dadosR['fax'] = $fax[$key];
				$dadosR['nextel'] = $nextel[$key];
				$dadosR['email'] = $email[$key];
				$dadosR['skype'] = $skype[$key];
				$dadosR['site'] = $site[$key];
				$this->Fornecedor->inserirResponsavel($dadosR);
			}
			$arquivos = $_FILES['arquivos'];
			foreach ($arquivos['tmp_name'] as $key => $value) {

				$nome_arquivo = uniqid().'.'.substr($arquivos['name'][$key],-3,3);
					
				move_uploaded_file($value, './public/upload/fornecedor/'.$nome_arquivo);
				$dadosA['nome_arquivo'] = $nome_arquivo;
				$dadosA['id_fornecedor'] = $idFornecedor;
				$this->Fornecedor->inserirArquivo($dadosA);
			}
			$dados['sucesso']=true;
			$this->load->view('header.php');
			$this->load->view('fornecedor/cadastro.php',$dados);
			$this->load->view('footer.php');

		}else{
			$this->load->view('header.php');
			$this->load->view('fornecedor/cadastro.php');
			$this->load->view('footer.php');	
		}

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */