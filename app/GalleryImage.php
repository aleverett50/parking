<?php

namespace App;

class GalleryImage extends ObjectModel
{

    protected $table = 'gallery_images';
    protected $fillable = ['alt', 'ext', 'filename'];
    protected $rules = [];

    public function getAll()
    {
	return $this->execute('SELECT * FROM gallery_images WHERE deleted_at IS NULL ORDER BY id ASC ', [] );
    }


    public function addImage($id = null, $alt, $ext, $filename)
    {

	$this->alt = $alt;
	$this->ext = $ext;
	$this->filename = $filename;
    
	return parent::add();

    }


    public function delete($id)
    {
		
	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	return redirect( $_SERVER['HTTP_REFERER'] , 'The image has been deleted' );

    }

    
    public function updateImage($id, $alt, $ext, $filename)
    {

	$this->alt = $alt;
	$this->ext = $ext;
	$this->filename = $filename;

	parent::update('id = :id', ['id' => $id]);
	
    }


}
