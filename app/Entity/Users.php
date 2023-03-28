<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Users{

  /**
   * Identificador único da vaga
   * @var integer
   */
  public $id;

  /**
   * Título da vaga
   * @var string
   */
  public $username;

  /**
   * Descrição da vaga (pode conter html)
   * @var string
   */
  public $passw;

  /**
   * Define se a vaga ativa
   * @var string(s/n)
   */
  public $gender;

  /**
   * Data de publicação da vaga
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar uma nova vaga no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A VAGA NO BANCO
    $obDatabase = new Database('users');
    $this->id = $obDatabase->insert([
                                      'username'    => $this->username,
                                      'passw' => md5($this->passw),
                                      'gender'     => $this->gender,
                                      'data'      => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a vaga no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('users'))->update('id = '.$this->id,[
                                                                'username' => $this->username,
                                                                'passw'    => $this->passw,
                                                                'gender'   => $this->gender,
                                                                'data'     => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir a vaga do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('users'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as vagas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsers($where = null, $order = null, $limit = null){
    return (new Database('users'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma vaga com base em seu ID
   * @param  integer $id
   * @return Users
   */
  public static function getUser($id){
    return (new Database('users'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}