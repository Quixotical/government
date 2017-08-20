<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class BillIteration
 * @package App\Models
 * @property string $content - the content of the bill iteration
 * @property string $status - the status of the bill iteration
 * @property Carbon $voting_closed - the date/time when the voting has closed
 * @property-read \App\Models\Bill $bill
 */
class BillIteration extends BaseModel
{
    /**
     * const bill iteration has passed voting
     */
    const BILL_PASSED = 'passed';

    /**
     * const bill iteration has failed voting
     */
    const BILL_FAILED = 'failed';

    /**
     * const bill iteration is ongoing
     */
    const BILL_PENDING = 'pending';

    /**
     * Array - list of valid bill statuses
     */
    const BILL_STATUSES = [
        BillIteration::BILL_FAILED,
        BillIteration::BILL_PASSED,
        BillIteration::BILL_PENDING
    ];

    /**
     * Belongs to a bill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bill(){
        return $this->belongsTo(Bill::class);
    }
}
