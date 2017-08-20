<?php

namespace App\Models;

use Carbon\Carbon;

/**
 * Class DocumentIteration
 * @package App\Models
 * @property string $content - the content of the document iteration
 * @property string $status - the status of the document iteration
 * @property Carbon $voting_closed - the date/time when the voting has closed
 * @property-read \App\Models\Document $document
 */
class DocumentIteration extends BaseModel
{
    /**
     * Belongs to a document
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function document(){
        return $this->belongsTo(Document::class);
    }
}
