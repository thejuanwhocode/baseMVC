<?php namespace Database;
interface DatabaseDriverInterface {
     /**
      * CRUD
      **/
     public function save();
     public function update();
     public function delete();
     
     public function find($id);
     public function get();
     
     public function where();
     public function whereAnd();
     public function whereOr();
     public function whereIn();
     public function whereBetween();
     public function whereNotBetween();
     public function whereNull();
     
     public function groupBy();
     public function orderBy();
     public function sort();
     public function limit();
     
     public function select();
     public function first();
     public function pluck();
}