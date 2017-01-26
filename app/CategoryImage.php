<?php

namespace App;

class CategoryImage extends ObjectModel
{

    protected $table = 'category_images';
    protected $fillable = ['category_id', 'alt', 'ext'];
    protected $rules = [];

    public function getAll()
    {
	return $this->execute('SELECT * FROM category_images WHERE category_id = ? AND deleted_at IS NULL ORDER BY id ASC ', [ $_GET['id'] ] );
    }


    public function addImage($category_id, $alt, $ext)
    {

	$this->category_id = $category_id;
	$this->alt = $alt;
	$this->ext = $ext;
    
	return parent::add();

    }


    public function delete($id)
    {
		
	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	return redirect( $_SERVER['HTTP_REFERER'] , 'The image has been deleted' );

    }

    
    public function updateImage($id, $alt, $ext)
    {

	$this->alt = $alt;
	$this->ext = $ext;

	parent::update('id = :id', ['id' => $id]);
	
    }


}
