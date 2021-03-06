<?php

namespace Midnox\Controller;

use PDO;
use Midnox\Model\InsuranceModel as Insurance;

class InsuranceController
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchInsurances()
    {
        $sql = 'SELECT * FROM insurance';
        $result = $this->pdo->query($sql);

        return $result->fetchAll(PDO::FETCH_CLASS, Insurance::class);
    }

    /**
     * @param array $insurances
     *@return array
     */
    public function convertInsuranceTypeNames(array $insurances): array
    {
        foreach ($insurances as $insurance) {
            switch ($insurance->getBillingType()) {
                case 'monthly':
                    $insurance->setBillingType('Monatlich');
                    break;
                case 'yearly':
                    $insurance->setBillingType('Jährlich');
                    break;
            }
        }

        return $insurances;
    }

    public function addInsurances()
    {
        $count = count($_POST['date']);

        for ($i = 0; $i < $count; $i++) {
            $date = $_POST['date'][$i];
            $billingType = $_POST['billingType'][$i];
            $price = $_POST['price'][$i];
            $insuranceType = $_POST['insuranceType'][$i];

            $sql = 'INSERT INTO insurance (date, billingType, price, insuranceType) VALUES (?,?,?,?)';
            $this->pdo->prepare($sql)->execute([$date, $billingType, $price, $insuranceType]);
        }
    }
}
