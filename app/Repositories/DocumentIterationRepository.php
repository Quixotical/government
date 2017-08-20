<?php
/**
 * Created by IntelliJ IDEA.
 * User: Quixotical
 * Date: 8/20/17
 * Time: 16:22
 */
namespace App\Repositories;

use App\Contracts\Repositories\DocumentIterationRepositoryContract;
use App\Models\DocumentIteration;

/**
 * Class DocumentIterationRepository
 * @package App\Repositories
 */
class DocumentIterationRepository implements DocumentIterationRepositoryContract
{
    /**
     * @var DocumentIteration $DocumentIteration - the document model for this repository instance
     */
    protected $DocumentIteration;

    public function __construct(DocumentIteration $DocumentIteration){
        $this->DocumentIteration = $DocumentIteration;
    }
}