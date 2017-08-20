<?php
/**
 * Created by IntelliJ IDEA.
 * User: Quixotical
 * Date: 8/20/17
 * Time: 16:22
 */
namespace App\Repositories;

use App\Contracts\Repositories\BillRepositoryContract;
use App\Models\Bill;

/**
 * Class BillRepository
 * @package App\Repositories
 */
class BillRepository implements BillRepositoryContract
{
    /**
     * @var Bill $bill the bill model for this instance
     */
    protected $bill;

    public function __construct(Bill $bill){
        $this->bill = $bill;
    }
}