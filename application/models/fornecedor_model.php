<?php 
class Fornecedor_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function inserirFornecedor($dados){
    	$this->db->insert('fornecedores', $dados); 
    	$id_fornecedor = mysql_insert_id();
    	return $id_fornecedor;
    }
    public function inserirPecas($dados){
    	$this->db->insert('pecas_fornecedor', $dados); 
    }
    public function inserirResponsavel($dados){
    	$this->db->insert('responsaveis_fornecedor', $dados); 	
    }
    public function inserirArquivo($dados){
    	$this->db->insert('arquivos_fornecedor', $dados); 	
    }
}
 ?>