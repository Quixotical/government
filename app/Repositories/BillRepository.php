<?php
/**
 * Created by IntelliJ IDEA.
 * User: Quixotical
 * Date: 8/20/17
 * Time: 16:22
 */
namespace App\Repositories;

use App\Contracts\Repositories\DocumentRepositoryContract;
use App\Models\Document;

/**
 * Class BillRepository
 * @package App\Repositories
 */
class DocumentRepository implements DocumentRepositoryContract
{
    /**
     * @var Document $bill the bill model for this instance
     */
    protected $bill;

    public function __construct(Document $bill){
        $this->bill = $bill;
    }
}