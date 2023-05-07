<?php

namespace App\Jobs;

use Throwable;
use App\Models\Sale;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SalesCsvProcess implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    Public $header;

    /**
     * Create a new job instance.
     */
    public function __construct($data ,$header)
    {
        $this->data=$data;
        $this->header=$header;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->data as $sale) {
            $saleData = array_combine($this->header, $sale);
            Sale::create($saleData);
        }
    }
}
