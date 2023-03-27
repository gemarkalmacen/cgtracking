<?php

use Illuminate\Database\Seeder;

use App\Models\Reasonunclaimed;

class ReasonUnclaimedSeeder extends Seeder
{



    private $reason = [
        [
            'id' => 1,
            'reason' => 'Bedridden',
        ],
        [
            'id' => 2,
            'reason' => 'Deceased',
        ],
        [
            'id' => 3,
            'reason' => 'Imprisoned',
        ],
        [
            'id' => 4,
            'reason' => 'Mentally challenged',
        ],
        [
            'id' => 5,
            'reason' => 'Family conflict',
        ],
        [
            'id' => 6,
            'reason' => 'Working abroad',
        ],
        [
            'id' => 7,
            'reason' => 'Working outside the region',
        ],
        [
            'id' => 8,    
            'reason' => 'Name discrepancy',
        ],
        [
            'id' => 9,
            'reason' => 'Transferred household',
        ],
        [
            'id' => 10,
            'reason' => 'Household moved out without notice',
        ],
        [
            'id' => 11,
            'reason' => 'Inactive and zero balance',
        ],
        [
            'id' => 12,
            'reason' => 'Waived',
        ],
        [
            'id' => 13,
            'reason' => 'For delisting of client status',
        ],
        [
            'id' => 14,
            'reason' => 'Temporarily on hold (code 19)',
        ],
        [
            'id' => 15,
            'reason' => 'With cash card of other family member',
        ],
        [
            'id' => 16,
            'reason' => 'Force Majeure',
        ],
        [
            'id' => 17,
            'reason' => 'For distribution',
        ],
        [
            'id' => 18,
            'reason' => 'Others',
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $reason = $this->reason;
        foreach ($reason as $key=>$data) {
            Reasonunclaimed::create($data);
        }
    }

    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    // public function run()
    // {
    //     //
    // }
}
