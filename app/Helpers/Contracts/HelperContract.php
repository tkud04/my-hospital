<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createClient($data);
        public function createClientData($data);
        public  function getIRSNumber();
        public function getReferenceNumber();      
        public function getBatchNumber();      
        public function getWinningNumber();      
        public function getSerialNumber();     
        public function addTestimonial($data);
        public function getTestimonials();
        public function getTestimonial($url);
        public function getClients();
        public function deleteClient($id);
        public function getWinners();
}
 ?>