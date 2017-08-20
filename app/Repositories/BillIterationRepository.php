<?php
/**
 * Created by IntelliJ IDEA.
 * User: Quixotical
 * Date: 8/20/17
 * Time: 16:22
 */
namespace App\Repositories;

use App\Contracts\Repositories\BillIterationRepositoryContract;
use App\Models\BillIteration;

/**
 * Class BillIterationRepository
 * @package App\Repositories
 */
class BillIterationRepository implements BillIterationRepositoryContract
{
    /**
     * @var BillIteration $billIteration - the bill model for this repository instance
     */
    protected $billIteration;

    public function __construct(BillIteration $billIteration){
        $this->billIteration = $billIteration;
    }
}