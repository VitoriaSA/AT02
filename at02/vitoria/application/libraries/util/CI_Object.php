<?php

class CI_Object{

   /**
     * Insere data em table; caso data ja exista em table, atualiza os pares
     * nome/valor contidos em data.
     *
     * @param String $table - o nome da tabela a ser atualizada
     * @param Array $data - os dados a serem inseridos ou atualizados na tabela table
     * @param int id do registro inserido
     */
    protected function insert_or_update($table, $data) {
        return $this->modconfig->insert_or_update($table, $data);
   }
   
    /**
     * __get magic
     *
     * Allows libraries to access CI's loaded classes using the same
     * syntax as controllers.
     *
     * @param string $key
     */
    public function __get($key) {
        return get_instance()->$key;
   }
   
}