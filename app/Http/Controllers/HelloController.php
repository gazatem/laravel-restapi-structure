<?php
namespace App\Http\Controllers;

class HelloController extends BaseController
{
   public function show()
   {
        return $this->response->array(['name' => 'Hi Token']);
   }

   public function getProfile()
   {
        return $this->response->array(['name' => 'Kemal Yenilmez']);
   }
}
