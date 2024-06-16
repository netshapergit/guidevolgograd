<?php

class PageCustom extends Model {

							public function fieldObjectCategory()
							{
								return $this->belongsTo('Option');
							}
						
}
