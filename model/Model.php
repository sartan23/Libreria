<?php 


include_once("model/Book.php");

class Model {

public function getBookList()
    {


        return  array(
	        "libro1" => new Book ("libro1","autor libro1","descripcion libro uno"),
	        "libro2" => new Book ("libro2","autor libro2","descripcion libro uno"),
	        "libro3" => new Book ("libro3","autor libro3","descripcion libro uno")

                        );


            }
        public function getBook($title){
            
	        $allBooks = $this ->getBookList();
	        return $allBooks[$title];

            }
}

?>
