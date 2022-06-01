<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clientstatus;

class ClientStatusSeeder extends Seeder
{
    private $client = [
        [
            'id' => 1,
            'client_status' => '01 - Active'
        ],
        [
            'id' => 2,
            'client_status' => '1 - Active'
        ],
        [
            'id' => 3,
            'client_status' => '02 - Delisted by the Field Office'
        ],
        [
            'id' => 4,
            'client_status' => '3 - Graduated Due to Improved Level of Well-Being'
        ],
        [
            'id' => 5,
            'client_status' => '04 - Delisted (Fraud)'
        ],
        [
            'id' => 6,
            'client_status' => '05 - GRS (Fraud)'
        ],
        [
            'id' => 7,
            'client_status' => '5 - GRS delisted due to Misbehavior'
        ],
        [
            'id' => 8,
            'client_status' => '06 - Duplicates (within MCCT)'
        ],
        [
            'id' => 9,
            'client_status' => '6 - Duplicates'
        ],
        [
            'id' => 10,
            'client_status' => '08 - Waived'
        ],
        [
            'id' => 11,
            'client_status' => '8 - Waived'
        ],
        [
            'id' => 12,
            'client_status' => '9 - Not Registered'
        ],
        [
            'id' => 13,
            'client_status' => '10 - GRS delisted due to Disqualification'
        ],
        [
            'id' => 14,
            'client_status' => '11 - Moved to non-PP Area'
        ],
        [
            'id' => 15,
            'client_status' => '12 - Moved out of the Area Without Notice'
        ],
        [
            'id' => 16,
            'client_status' => '13 - Validated Not Poor due to Change of Address'
        ],
        [
            'id' => 17,
            'client_status' => '14 - No Eligible (0-18 y/o) for CVS Monitoring (Certified by RPMO)'
        ],
        [
            'id' => 18,
            'client_status' => '15 - No Eligible member of HH for CVS monitoring'
        ],
        [
            'id' => 19,
            'client_status' => '17 - GRS (Not Eligible - Regular Income)'
        ],
        [
            'id' => 20,
            'client_status' => '19 - Grants Temporarily On-Hold'
        ],
        [
            'id' => 21,
            'client_status' => '21 - RPMO Approved Household for NPMO Processing'
        ],
        [
            'id' => 22,
            'client_status' => '22 - Unlocated households'
        ],
        [
            'id' => 23,
            'client_status' => '26 - Deferred Exit due to NAC Resolution No. 2 s. 2020'
        ],
        [
            'id' => 24,
            'client_status' => '29 - Household Integrated to the PPIS'
        ],
        [
            'id' => 25,
            'client_status' => '51 - Graduated (Included in the PPIS)'
        ],
        [
            'id' => 26,
            'client_status' => '53 - Pending Registration (HH also Encoded in PPIS)'
        ],
        [
            'id' => 27,
            'client_status' => '54 - Delisted (HH also in PPIS)'
        ],
        [
            'id' => 28,
            'client_status' => '56 - Inactive (No Longer Interested)'
        ],
        [
            'id' => 29,
            'client_status' => '59 - Eligible Child/ren not Selected for CVS Monitoring'
        ],
        [
            'id' => 30,
            'client_status' => '61 - Graduated (Not included in the PPIS)'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = $this->client;
        foreach ($client as $key => $data) {
            Clientstatus::create($data);
        }
    }
}