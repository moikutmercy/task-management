<?php
class Priority extends Model
{
 
    public $errors=[];
    protected $table = 'priorities';
    protected $allowedColumns =[
      'priority_name',
      'date',
      
 
    ];
    
    public function validate($data)
    {
        $this->errors = [];

         
        

        if(empty($this->errors)){

            return true;
        }
          return false;  
    }



    


}
