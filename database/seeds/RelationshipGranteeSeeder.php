<?php

use Illuminate\Database\Seeder;
use App\Models\Relationshiptograntee;
class RelationshipGranteeSeeder extends Seeder
{


    private $grantee = [
        [
            'id' => 1,
            'relationship' => '2 - Wife / Spouse',
        ],
        [
            'id' => 2,
            'relationship' => '3 - Son / Daughter',
        ],
        [
            'id' => 3,
            'relationship' => '4 - Brother / Sister',
        ],
        [
            'id' => 4,
            'relationship' => '5 - Son-in-law / Daughter-in-law',
        ],
        [
            'id' => 5,
            'relationship' => '6 - Grandson / Granddaughter',
        ],
        [
            'id' => 6,
            'relationship' => '7 - Father / Mother',
        ],
        [
            'id' => 7,
            'relationship' => '8 - Other Relatives',
        ],
        [
            'id' => 8,    
            'relationship' => '9 - Boarders',
        ],
        [
            'id' => 9,
            'relationship' => '10 - Domestic Helper',
        ],
        [
            'id' => 10,
            'relationship' => '11 - Non-relative',
        ],
        [
            'id' => 11,
            'relationship' => '12 - Guardian',
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $grantee = $this->grantee;
        foreach ($grantee as $key=>$data) {
            Relationshiptograntee::create($data);
        }
    }
}
