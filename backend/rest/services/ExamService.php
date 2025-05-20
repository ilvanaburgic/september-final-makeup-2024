<?php
require_once __DIR__ . "/../dao/ExamDao.php";

class ExamService
{
    protected $dao;

    public function __construct()
    {
        $this->dao = new ExamDao();
    }

    public function login($data) {}

    public function film_performance_report() {}

    public function delete_film($film_id) {}

    public function edit_film($film_id, $data) {}

    public function get_customers_report() {}

    public function get_customer_rental_details($customer_id) {}
}
