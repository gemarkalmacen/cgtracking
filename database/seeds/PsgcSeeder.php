<?php

use App\Models\Psgc;
use Illuminate\Database\Seeder;

class PsgcSeeder extends Seeder
{

    private $psgc = [
        [
            'id'=>1	,
            'name_new' => 'Agusan del Norte',
            'name_old' => 'Agusan del Norte',
            'code' => '1600200000',
            'geographic_level' => 'province'
        ],
        [
            'id'=>2	,
            'name_new' => 'Agusan del Sur',
            'name_old' => 'Agusan del Sur',
            'code' => '1600300000',
            'geographic_level' => 'province'
        ],
        [
            'id'=>3	,
            'name_new' => 'Dinagat Islands',
            'name_old' => 'Dinagat Islands',
            'code' => '1608500000',
            'geographic_level' => 'province'
        ],
        [
            'id'=>4	,
            'name_new' => 'Surigao del Norte',
            'name_old' => 'Surigao del Norte',
            'code' => '1606700000',
            'geographic_level' => 'province'
        ],
        [
            'id'=>5	,
            'name_new' => 'Surigao del Sur',
            'name_old' => 'Surigao del Sur',
            'code' => '1606800000',
            'geographic_level' => 'province'
        ],
        [
            'id'=>6	,
            'name_new' => 'BUENAVISTA',
            'name_old' => 'Buenavista',
            'code' => '1600201000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>7	,
            'name_new' => 'BUTUAN CITY (Capital)',
            'name_old' => 'City of Butuan (Capital)',
            'code' => '1630400000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>8	,
            'name_new' => 'CARMEN',
            'name_old' => 'Carmen',
            'code' => '1600204000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>9	,
            'name_new' => 'CITY OF CABADBARAN',
            'name_old' => 'City of Cabadbaran',
            'code' => '1600203000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>10	,
            'name_new' => 'JABONGA',
            'name_old' => 'Jabonga',
            'code' => '1600205000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>11	,
            'name_new' => 'KITCHARAO',
            'name_old' => 'Kitcharao',
            'code' => '1600206000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>12	,
            'name_new' => 'LAS NIEVES',
            'name_old' => 'Las Nieves',
            'code' => '1600207000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>13	,
            'name_new' => 'MAGALLANES',
            'name_old' => 'Magallanes',
            'code' => '1600208000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>14	,
            'name_new' => 'NASIPIT',
            'name_old' => 'Nasipit',
            'code' => '1600209000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>15	,
            'name_new' => 'REMEDIOS T. ROMUALDEZ',
            'name_old' => 'Remedios T. Romualdez',
            'code' => '1600212000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>16	,
            'name_new' => 'SANTIAGO',
            'name_old' => 'Santiago',
            'code' => '1600210000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>17	,
            'name_new' => 'TUBAY',
            'name_old' => 'Tubay',
            'code' => '1600211000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>18	,
            'name_new' => 'BUNAWAN',
            'name_old' => 'Bunawan',
            'code' => '1600302000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>19	,
            'name_new' => 'CITY OF BAYUGAN',
            'name_old' => 'City of Bayugan',
            'code' => '1600301000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>20	,
            'name_new' => 'ESPERANZA',
            'name_old' => 'Esperanza',
            'code' => '1600303000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>21	,
            'name_new' => 'LA PAZ',
            'name_old' => 'La Paz',
            'code' => '1600304000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>22	,
            'name_new' => 'LORETO',
            'name_old' => 'Loreto',
            'code' => '1600305000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>23	,
            'name_new' => 'PROSPERIDAD (Capital)',
            'name_old' => 'Prosperidad (Capital)',
            'code' => '1600306000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>24	,
            'name_new' => 'ROSARIO',
            'name_old' => 'Rosario',
            'code' => '1600307000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>25	,
            'name_new' => 'SAN FRANCISCO',
            'name_old' => 'San Francisco',
            'code' => '1600308000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>26	,
            'name_new' => 'SAN LUIS',
            'name_old' => 'San Luis',
            'code' => '1600309000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>27	,
            'name_new' => 'SANTA JOSEFA',
            'name_old' => 'Santa Josefa',
            'code' => '1600310000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>28	,
            'name_new' => 'SIBAGAT',
            'name_old' => 'Sibagat',
            'code' => '1600314000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>29	,
            'name_new' => 'TALACOGON',
            'name_old' => 'Talacogon',
            'code' => '1600311000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>30	,
            'name_new' => 'TRENTO',
            'name_old' => 'Trento',
            'code' => '1600312000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>31	,
            'name_new' => 'VERUELA',
            'name_old' => 'Veruela',
            'code' => '1600313000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>32	,
            'name_new' => 'BASILISA (RIZAL)',
            'name_old' => 'Basilisa',
            'code' => '1608501000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>33	,
            'name_new' => 'CAGDIANAO',
            'name_old' => 'Cagdianao',
            'code' => '1608502000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>34	,
            'name_new' => 'DINAGAT',
            'name_old' => 'Dinagat',
            'code' => '1608503000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>35	,
            'name_new' => 'LIBJO (ALBOR)',
            'name_old' => 'Libjo',
            'code' => '1608504000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>36	,
            'name_new' => 'LORETO',
            'name_old' => 'Loreto',
            'code' => '1608505000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>37	,
            'name_new' => 'SAN JOSE (Capital)',
            'name_old' => 'San Jose (Capital)',
            'code' => '1608506000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>38	,
            'name_new' => 'TUBAJON',
            'name_old' => 'Tubajon',
            'code' => '1608507000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>39	,
            'name_new' => 'ALEGRIA',
            'name_old' => 'Alegria',
            'code' => '1606701000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>40	,
            'name_new' => 'BACUAG',
            'name_old' => 'Bacuag',
            'code' => '1606702000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>41	,
            'name_new' => 'BURGOS',
            'name_old' => 'Burgos',
            'code' => '1606704000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>42	,
            'name_new' => 'CLAVER',
            'name_old' => 'Claver',
            'code' => '1606706000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>43	,
            'name_new' => 'DAPA',
            'name_old' => 'Dapa',
            'code' => '1606707000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>44	,
            'name_new' => 'DEL CARMEN',
            'name_old' => 'Del Carmen',
            'code' => '1606708000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>45	,
            'name_new' => 'GENERAL LUNA',
            'name_old' => 'General Luna',
            'code' => '1606710000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>46	,
            'name_new' => 'GIGAQUIT',
            'name_old' => 'Gigaquit',
            'code' => '1606711000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>47	,
            'name_new' => 'MAINIT',
            'name_old' => 'Mainit',
            'code' => '1606714000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>48	,
            'name_new' => 'MALIMONO',
            'name_old' => 'Malimono',
            'code' => '1606715000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>49	,
            'name_new' => 'PILAR',
            'name_old' => 'Pilar',
            'code' => '1606716000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>50	,
            'name_new' => 'PLACER',
            'name_old' => 'Placer',
            'code' => '1606717000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>51	,
            'name_new' => 'SAN BENITO',
            'name_old' => 'San Benito',
            'code' => '1606718000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>52	,
            'name_new' => 'SAN FRANCISCO (ANAO-AON)',
            'name_old' => 'San Francisco',
            'code' => '1606719000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>53	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606720000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>54	,
            'name_new' => 'SANTA MONICA (SAPAO)',
            'name_old' => 'Santa Monica',
            'code' => '1606721000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>55	,
            'name_new' => 'SISON',
            'name_old' => 'Sison',
            'code' => '1606722000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>56	,
            'name_new' => 'SOCORRO',
            'name_old' => 'Socorro',
            'code' => '1606723000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>57	,
            'name_new' => 'SURIGAO CITY (Capital)',
            'name_old' => 'City of Surigao (Capital)',
            'code' => '1606724000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>58	,
            'name_new' => 'TAGANA-AN',
            'name_old' => 'Tagana-An',
            'code' => '1606725000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>59	,
            'name_new' => 'TUBOD',
            'name_old' => 'Tubod',
            'code' => '1606727000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>60	,
            'name_new' => 'BAROBO',
            'name_old' => 'Barobo',
            'code' => '1606801000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>61	,
            'name_new' => 'BAYABAS',
            'name_old' => 'Bayabas',
            'code' => '1606802000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>62	,
            'name_new' => 'CAGWAIT',
            'name_old' => 'Cagwait',
            'code' => '1606804000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>63	,
            'name_new' => 'CANTILAN',
            'name_old' => 'Cantilan',
            'code' => '1606805000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>64	,
            'name_new' => 'CARMEN',
            'name_old' => 'Carmen',
            'code' => '1606806000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>65	,
            'name_new' => 'CARRASCAL',
            'name_old' => 'Carrascal',
            'code' => '1606807000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>66	,
            'name_new' => 'CITY OF BISLIG',
            'name_old' => 'City of Bislig',
            'code' => '1606803000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>67	,
            'name_new' => 'CITY OF TANDAG (Capital)',
            'name_old' => 'City of Tandag (Capital)',
            'code' => '1606819000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>68	,
            'name_new' => 'CORTES',
            'name_old' => 'Cortes',
            'code' => '1606808000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>69	,
            'name_new' => 'HINATUAN',
            'name_old' => 'Hinatuan',
            'code' => '1606809000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>70	,
            'name_new' => 'LANUZA',
            'name_old' => 'Lanuza',
            'code' => '1606810000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>71	,
            'name_new' => 'LIANGA',
            'name_old' => 'Lianga',
            'code' => '1606811000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>72	,
            'name_new' => 'LINGIG',
            'name_old' => 'Lingig',
            'code' => '1606812000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>73	,
            'name_new' => 'MADRID',
            'name_old' => 'Madrid',
            'code' => '1606813000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>74	,
            'name_new' => 'MARIHATAG',
            'name_old' => 'Marihatag',
            'code' => '1606814000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>75	,
            'name_new' => 'SAN AGUSTIN',
            'name_old' => 'San Agustin',
            'code' => '1606815000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>76	,
            'name_new' => 'SAN MIGUEL',
            'name_old' => 'San Miguel',
            'code' => '1606816000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>77	,
            'name_new' => 'TAGBINA',
            'name_old' => 'Tagbina',
            'code' => '1606817000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>78	,
            'name_new' => 'TAGO',
            'name_old' => 'Tago',
            'code' => '1606818000',
            'geographic_level' => 'municipality'
        ],
        [
            'id'=>79	,
            'name_new' => 'ABILAN',
            'name_old' => 'Abilan',
            'code' => '1600201001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>80	,
            'name_new' => 'AGONG-ONG',
            'name_old' => 'Agong-ong',
            'code' => '1600201002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>81	,
            'name_new' => 'ALUBIJID',
            'name_old' => 'Alubijid',
            'code' => '1600201003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>82	,
            'name_new' => 'GUINABSAN',
            'name_old' => 'Guinabsan',
            'code' => '1600201004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>83	,
            'name_new' => 'LOWER OLAVE',
            'name_old' => 'Lower Olave',
            'code' => '1600201027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>84	,
            'name_new' => 'MACALANG',
            'name_old' => 'Macalang',
            'code' => '1600201007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>85	,
            'name_new' => 'MALAPONG',
            'name_old' => 'Malapong',
            'code' => '1600201008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>86	,
            'name_new' => 'MALPOC',
            'name_old' => 'Malpoc',
            'code' => '1600201009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>87	,
            'name_new' => 'MANAPA',
            'name_old' => 'Manapa',
            'code' => '1600201010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>88	,
            'name_new' => 'MATABAO',
            'name_old' => 'Matabao',
            'code' => '1600201011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>89	,
            'name_new' => 'POBLACION 1',
            'name_old' => 'Poblacion 1',
            'code' => '1600201013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>90	,
            'name_new' => 'POBLACION 2',
            'name_old' => 'Poblacion 2',
            'code' => '1600201014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>91	,
            'name_new' => 'POBLACION 3',
            'name_old' => 'Poblacion 3',
            'code' => '1600201015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>92	,
            'name_new' => 'POBLACION 4',
            'name_old' => 'Poblacion 4',
            'code' => '1600201016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>93	,
            'name_new' => 'POBLACION 5',
            'name_old' => 'Poblacion 5',
            'code' => '1600201017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>94	,
            'name_new' => 'POBLACION 6',
            'name_old' => 'Poblacion 6',
            'code' => '1600201018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>95	,
            'name_new' => 'POBLACION 7',
            'name_old' => 'Poblacion 7',
            'code' => '1600201019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>96	,
            'name_new' => 'POBLACION 8',
            'name_old' => 'Poblacion 8',
            'code' => '1600201020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>97	,
            'name_new' => 'POBLACION 9',
            'name_old' => 'Poblacion 9',
            'code' => '1600201021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>98	,
            'name_new' => 'POBLACION 10',
            'name_old' => 'Poblacion 10',
            'code' => '1600201022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>99	,
            'name_new' => 'RIZAL',
            'name_old' => 'Rizal',
            'code' => '1600201023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>100	,
            'name_new' => 'SACOL',
            'name_old' => 'Sacol',
            'code' => '1600201024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>101	,
            'name_new' => 'SANGAY',
            'name_old' => 'Sangay',
            'code' => '1600201025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>102	,
            'name_new' => 'SIMBALAN',
            'name_old' => 'Simbalan',
            'code' => '1600201028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>103	,
            'name_new' => 'TALO-AO',
            'name_old' => 'Talo-ao',
            'code' => '1600201026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>104	,
            'name_new' => 'AGAO POB. (BGY. 3)',
            'name_old' => 'Agao Pob.',
            'code' => '1630400002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>105	,
            'name_new' => 'AGUSAN PEQUEÑO',
            'name_old' => 'Agusan Pequeño',
            'code' => '1630400003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>106	,
            'name_new' => 'AMBAGO',
            'name_old' => 'Ambago',
            'code' => '1630400004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>107	,
            'name_new' => 'AMPARO',
            'name_old' => 'Amparo',
            'code' => '1630400006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>108	,
            'name_new' => 'AMPAYON',
            'name_old' => 'Ampayon',
            'code' => '1630400007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>109	,
            'name_new' => 'ANTICALA',
            'name_old' => 'Anticala',
            'code' => '1630400008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>110	,
            'name_new' => 'ANTONGALON',
            'name_old' => 'Antongalon',
            'code' => '1630400009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>111	,
            'name_new' => 'AUPAGAN',
            'name_old' => 'Aupagan',
            'code' => '1630400010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>112	,
            'name_new' => 'BAAN KM 3',
            'name_old' => 'Baan KM 3',
            'code' => '1630400012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>113	,
            'name_new' => 'BAAN RIVERSIDE POB. (BGY. 20)',
            'name_old' => 'Baan Riverside Pob.',
            'code' => '1630400033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>114	,
            'name_new' => 'BABAG',
            'name_old' => 'Babag',
            'code' => '1630400013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>115	,
            'name_new' => 'BADING POB. (BGY. 22)',
            'name_old' => 'Bading Pob.',
            'code' => '1630400014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>116	,
            'name_new' => 'BANCASI',
            'name_old' => 'Bancasi',
            'code' => '1630400016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>117	,
            'name_new' => 'BANZA',
            'name_old' => 'Banza',
            'code' => '1630400017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>118	,
            'name_new' => 'BAOBAOAN',
            'name_old' => 'Baobaoan',
            'code' => '1630400018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>119	,
            'name_new' => 'BASAG',
            'name_old' => 'Basag',
            'code' => '1630400019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>120	,
            'name_new' => 'BAYANIHAN POB. (BGY. 27)',
            'name_old' => 'Bayanihan Pob.',
            'code' => '1630400020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>121	,
            'name_new' => 'BILAY',
            'name_old' => 'Bilay',
            'code' => '1630400021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>122	,
            'name_new' => 'BITAN-AGAN',
            'name_old' => 'Bitan-agan',
            'code' => '1630400023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>123	,
            'name_new' => 'BIT-OS',
            'name_old' => 'Bit-os',
            'code' => '1630400022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>124	,
            'name_new' => 'BOBON',
            'name_old' => 'Bobon',
            'code' => '1630400024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>125	,
            'name_new' => 'BONBON',
            'name_old' => 'Bonbon',
            'code' => '1630400025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>126	,
            'name_new' => 'BUGABUS',
            'name_old' => 'Bugabus',
            'code' => '1630400026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>127	,
            'name_new' => 'BUGSUKAN',
            'name_old' => 'Bugsukan',
            'code' => '1630400092',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>128	,
            'name_new' => 'BUHANGIN POB. (BGY. 19)',
            'name_old' => 'Buhangin Pob.',
            'code' => '1630400027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>129	,
            'name_new' => 'CABCABON',
            'name_old' => 'Cabcabon',
            'code' => '1630400029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>130	,
            'name_new' => 'CAMAYAHAN',
            'name_old' => 'Camayahan',
            'code' => '1630400031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>131	,
            'name_new' => 'NA',
            'name_old' => 'Dagohoy Pob.',
            'code' => '1630400044',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>132	,
            'name_new' => 'DANKIAS',
            'name_old' => 'Dankias',
            'code' => '1630400036',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>133	,
            'name_new' => 'DE ORO',
            'name_old' => 'De Oro',
            'code' => '1630400093',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>134	,
            'name_new' => 'DIEGO SILANG POB. (BGY. 6)',
            'name_old' => 'Diego Silang Pob.',
            'code' => '1630400038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>135	,
            'name_new' => 'DON FRANCISCO',
            'name_old' => 'Don Francisco',
            'code' => '1630400102',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>136	,
            'name_new' => 'DOONGAN',
            'name_old' => 'Doongan',
            'code' => '1630400039',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>137	,
            'name_new' => 'DULAG',
            'name_old' => 'Dulag',
            'code' => '1630400094',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>138	,
            'name_new' => 'DUMALAGAN',
            'name_old' => 'Dumalagan',
            'code' => '1630400040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>139	,
            'name_new' => 'FLORIDA',
            'name_old' => 'Florida',
            'code' => '1630400095',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>140	,
            'name_new' => 'GOLDEN RIBBON POB. (BGY. 2)',
            'name_old' => 'Golden Ribbon Pob.',
            'code' => '1630400043',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>141	,
            'name_new' => 'HOLY REDEEMER POB. (BGY. 23)',
            'name_old' => 'Holy Redeemer Pob.',
            'code' => '1630400047',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>142	,
            'name_new' => 'NA',
            'name_old' => 'Humabon Pob.',
            'code' => '1630400048',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>143	,
            'name_new' => 'IMADEJAS POB. (BGY. 24)',
            'name_old' => 'Imadejas Pob.',
            'code' => '1630400037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>144	,
            'name_new' => 'JOSE RIZAL POB. (BGY. 25)',
            'name_old' => 'Jose Rizal Pob.',
            'code' => '1630400045',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>145	,
            'name_new' => 'KINAMLUTAN',
            'name_old' => 'Kinamlutan',
            'code' => '1630400049',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>146	,
            'name_new' => 'LAPU-LAPU POB. (BGY. 8)',
            'name_old' => 'Lapu-lapu Pob.',
            'code' => '1630400051',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>147	,
            'name_new' => 'LEMON',
            'name_old' => 'Lemon',
            'code' => '1630400052',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>148	,
            'name_new' => 'NA',
            'name_old' => 'Leon Kilat Pob.',
            'code' => '1630400053',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>149	,
            'name_new' => 'LIBERTAD',
            'name_old' => 'Libertad',
            'code' => '1630400054',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>150	,
            'name_new' => 'LIMAHA POB. (BGY. 14)',
            'name_old' => 'Limaha Pob.',
            'code' => '1630400055',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>151	,
            'name_new' => 'LOS ANGELES',
            'name_old' => 'Los Angeles',
            'code' => '1630400056',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>152	,
            'name_new' => 'LUMBOCAN',
            'name_old' => 'Lumbocan',
            'code' => '1630400057',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>153	,
            'name_new' => 'MAGUINDA',
            'name_old' => 'Maguinda',
            'code' => '1630400060',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>154	,
            'name_new' => 'MAHAY',
            'name_old' => 'Mahay',
            'code' => '1630400061',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>155	,
            'name_new' => 'MAHOGANY POB. (BGY. 21)',
            'name_old' => 'Mahogany Pob.',
            'code' => '1630400062',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>156	,
            'name_new' => 'MAIBU',
            'name_old' => 'Maibu',
            'code' => '1630400063',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>157	,
            'name_new' => 'MANDAMO',
            'name_old' => 'Mandamo',
            'code' => '1630400064',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>158	,
            'name_new' => 'MANILA DE BUGABUS',
            'name_old' => 'Manila de Bugabus',
            'code' => '1630400065',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>159	,
            'name_new' => 'MAON POB. (BGY. 1)',
            'name_old' => 'Maon Pob.',
            'code' => '1630400066',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>160	,
            'name_new' => 'MASAO',
            'name_old' => 'Masao',
            'code' => '1630400067',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>161	,
            'name_new' => 'MAUG',
            'name_old' => 'Maug',
            'code' => '1630400068',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>162	,
            'name_new' => 'NEW SOCIETY VILLAGE POB. (BGY. 26)',
            'name_old' => 'New Society Village Pob.',
            'code' => '1630400070',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>163	,
            'name_new' => 'NONG-NONG',
            'name_old' => 'Nong-nong',
            'code' => '1630400096',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>164	,
            'name_new' => 'OBRERO POB. (BGY. 18)',
            'name_old' => 'Obrero Pob.',
            'code' => '1630400091',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>165	,
            'name_new' => 'ONG YIU POB. (BGY. 16)',
            'name_old' => 'Ong Yiu Pob.',
            'code' => '1630400071',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>166	,
            'name_new' => 'PAGATPATAN',
            'name_old' => 'Pagatpatan',
            'code' => '1630400097',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>167	,
            'name_new' => 'PANGABUGAN',
            'name_old' => 'Pangabugan',
            'code' => '1630400098',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>168	,
            'name_new' => 'PIANING',
            'name_old' => 'Pianing',
            'code' => '1630400072',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>169	,
            'name_new' => 'PIGDAULAN',
            'name_old' => 'Pigdaulan',
            'code' => '1630400103',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>170	,
            'name_new' => 'PINAMANCULAN',
            'name_old' => 'Pinamanculan',
            'code' => '1630400073',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>171	,
            'name_new' => 'PORT POYOHON POB. (BGY. 17 - NEW ASIA)',
            'name_old' => 'Port Poyohon Pob.',
            'code' => '1630400069',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>172	,
            'name_new' => 'RAJAH SOLIMAN POB. (BGY. 4)',
            'name_old' => 'Rajah Soliman Pob.',
            'code' => '1630400074',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>173	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1630400099',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>174	,
            'name_new' => 'SAN IGNACIO POB. (BGY. 15)',
            'name_old' => 'San Ignacio Pob.',
            'code' => '1630400075',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>175	,
            'name_new' => 'SAN MATEO',
            'name_old' => 'San Mateo',
            'code' => '1630400076',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>176	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1630400077',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>177	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1630400100',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>178	,
            'name_new' => 'SIKATUNA POB. (BGY. 10)',
            'name_old' => 'Sikatuna Pob.',
            'code' => '1630400078',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>179	,
            'name_new' => 'SILONGAN POB. (BGY. 5)',
            'name_old' => 'Silongan Pob.',
            'code' => '1630400079',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>180	,
            'name_new' => 'SUMILE',
            'name_old' => 'Sumile',
            'code' => '1630400101',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>181	,
            'name_new' => 'SUMILIHON',
            'name_old' => 'Sumilihon',
            'code' => '1630400080',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>182	,
            'name_new' => 'TAGABACA',
            'name_old' => 'Tagabaca',
            'code' => '1630400082',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>183	,
            'name_new' => 'TAGUIBO',
            'name_old' => 'Taguibo',
            'code' => '1630400083',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>184	,
            'name_new' => 'TALIGAMAN',
            'name_old' => 'Taligaman',
            'code' => '1630400084',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>185	,
            'name_new' => 'TANDANG SORA POB. (BGY. 12)',
            'name_old' => 'Tandang Sora Pob.',
            'code' => '1630400085',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>186	,
            'name_new' => 'TINIWISAN',
            'name_old' => 'Tiniwisan',
            'code' => '1630400086',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>187	,
            'name_new' => 'TUNGAO',
            'name_old' => 'Tungao',
            'code' => '1630400087',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>188	,
            'name_new' => 'NA',
            'name_old' => 'Urduja Pob.',
            'code' => '1630400089',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>189	,
            'name_new' => 'VILLA KANANGA',
            'name_old' => 'Villa Kananga',
            'code' => '1630400090',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>190	,
            'name_new' => 'CAHAYAGAN',
            'name_old' => 'Cahayagan',
            'code' => '1600204001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>191	,
            'name_new' => 'GOSOON',
            'name_old' => 'Gosoon',
            'code' => '1600204002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>192	,
            'name_new' => 'MANOLIGAO',
            'name_old' => 'Manoligao',
            'code' => '1600204004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>193	,
            'name_new' => 'POBLACION (CARMEN)',
            'name_old' => 'Poblacion',
            'code' => '1600204009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>194	,
            'name_new' => 'ROJALES',
            'name_old' => 'Rojales',
            'code' => '1600204010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>195	,
            'name_new' => 'SAN AGUSTIN',
            'name_old' => 'San Agustin',
            'code' => '1600204011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>196	,
            'name_new' => 'TAGCATONG',
            'name_old' => 'Tagcatong',
            'code' => '1600204012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>197	,
            'name_new' => 'VINAPOR',
            'name_old' => 'Vinapor',
            'code' => '1600204014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>198	,
            'name_new' => 'ANTONIO LUNA',
            'name_old' => 'Antonio Luna',
            'code' => '1600203002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>199	,
            'name_new' => 'BAYABAS',
            'name_old' => 'Bayabas',
            'code' => '1600203006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>200	,
            'name_new' => 'BAY-ANG',
            'name_old' => 'Bay-ang',
            'code' => '1600203005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>201	,
            'name_new' => 'CAASINAN',
            'name_old' => 'Caasinan',
            'code' => '1600203007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>202	,
            'name_new' => 'CABINET',
            'name_old' => 'Cabinet',
            'code' => '1600203009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>203	,
            'name_new' => 'CALAMBA',
            'name_old' => 'Calamba',
            'code' => '1600203010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>204	,
            'name_new' => 'CALIBUNAN',
            'name_old' => 'Calibunan',
            'code' => '1600203011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>205	,
            'name_new' => 'COMAGASCAS',
            'name_old' => 'Comagascas',
            'code' => '1600203012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>206	,
            'name_new' => 'CONCEPCION',
            'name_old' => 'Concepcion',
            'code' => '1600203013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>207	,
            'name_new' => 'DEL PILAR',
            'name_old' => 'Del Pilar',
            'code' => '1600203014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>208	,
            'name_new' => 'KATUGASAN',
            'name_old' => 'Katugasan',
            'code' => '1600203016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>209	,
            'name_new' => 'KAUSWAGAN',
            'name_old' => 'Kauswagan',
            'code' => '1600203017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>210	,
            'name_new' => 'LA UNION',
            'name_old' => 'La Union',
            'code' => '1600203018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>211	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1600203019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>212	,
            'name_new' => 'MAHABA',
            'name_old' => 'Mahaba',
            'code' => '1600203041',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>213	,
            'name_new' => 'POBLACION 1',
            'name_old' => 'Poblacion 1',
            'code' => '1600203021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>214	,
            'name_new' => 'POBLACION 10',
            'name_old' => 'Poblacion 10',
            'code' => '1600203022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>215	,
            'name_new' => 'POBLACION 11',
            'name_old' => 'Poblacion 11',
            'code' => '1600203023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>216	,
            'name_new' => 'POBLACION 12',
            'name_old' => 'Poblacion 12',
            'code' => '1600203024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>217	,
            'name_new' => 'POBLACION 2',
            'name_old' => 'Poblacion 2',
            'code' => '1600203025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>218	,
            'name_new' => 'POBLACION 3',
            'name_old' => 'Poblacion 3',
            'code' => '1600203026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>219	,
            'name_new' => 'POBLACION 4',
            'name_old' => 'Poblacion 4',
            'code' => '1600203027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>220	,
            'name_new' => 'POBLACION 5',
            'name_old' => 'Poblacion 5',
            'code' => '1600203028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>221	,
            'name_new' => 'POBLACION 6',
            'name_old' => 'Poblacion 6',
            'code' => '1600203029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>222	,
            'name_new' => 'POBLACION 7',
            'name_old' => 'Poblacion 7',
            'code' => '1600203030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>223	,
            'name_new' => 'POBLACION 8',
            'name_old' => 'Poblacion 8',
            'code' => '1600203031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>224	,
            'name_new' => 'POBLACION 9',
            'name_old' => 'Poblacion 9',
            'code' => '1600203032',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>225	,
            'name_new' => 'PUTING BATO',
            'name_old' => 'Puting Bato',
            'code' => '1600203033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>226	,
            'name_new' => 'SANGHAN',
            'name_old' => 'Sanghan',
            'code' => '1600203037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>227	,
            'name_new' => 'SORIANO',
            'name_old' => 'Soriano',
            'code' => '1600203038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>228	,
            'name_new' => 'TOLOSA',
            'name_old' => 'Tolosa',
            'code' => '1600203040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>229	,
            'name_new' => 'A. BELTRAN (CAMALIG)',
            'name_old' => 'A. Beltran',
            'code' => '1600205003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>230	,
            'name_new' => 'BALEGUIAN',
            'name_old' => 'Baleguian',
            'code' => '1600205001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>231	,
            'name_new' => 'BANGONAY',
            'name_old' => 'Bangonay',
            'code' => '1600205002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>232	,
            'name_new' => 'BUNGA',
            'name_old' => 'Bunga',
            'code' => '1600205004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>233	,
            'name_new' => 'COLORADO',
            'name_old' => 'Colorado',
            'code' => '1600205005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>234	,
            'name_new' => 'CUYAGO',
            'name_old' => 'Cuyago',
            'code' => '1600205006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>235	,
            'name_new' => 'LIBAS',
            'name_old' => 'Libas',
            'code' => '1600205007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>236	,
            'name_new' => 'MAGDAGOOC',
            'name_old' => 'Magdagooc',
            'code' => '1600205008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>237	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1600205009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>238	,
            'name_new' => 'MARAIGING',
            'name_old' => 'Maraiging',
            'code' => '1600205010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>239	,
            'name_new' => 'POBLACION (JABONGA)',
            'name_old' => 'Poblacion',
            'code' => '1600205011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>240	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1600205012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>241	,
            'name_new' => 'SAN PABLO',
            'name_old' => 'San Pablo',
            'code' => '1600205013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>242	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1600205014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>243	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1600205015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>244	,
            'name_new' => 'BANGAYAN',
            'name_old' => 'Bangayan',
            'code' => '1600206001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>245	,
            'name_new' => 'CANAWAY',
            'name_old' => 'Canaway',
            'code' => '1600206002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>246	,
            'name_new' => 'CROSSING',
            'name_old' => 'Crossing',
            'code' => '1600206010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>247	,
            'name_new' => 'HINIMBANGAN',
            'name_old' => 'Hinimbangan',
            'code' => '1600206003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>248	,
            'name_new' => 'JALIOBONG',
            'name_old' => 'Jaliobong',
            'code' => '1600206004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>249	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1600206005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>250	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600206006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>251	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600206007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>252	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1600206008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>253	,
            'name_new' => 'SANGAY',
            'name_old' => 'Sangay',
            'code' => '1600206009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>254	,
            'name_new' => 'SONGKOY',
            'name_old' => 'Songkoy',
            'code' => '1600206011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>255	,
            'name_new' => 'AMBACON',
            'name_old' => 'Ambacon',
            'code' => '1600207001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>256	,
            'name_new' => 'BALUNGAGAN',
            'name_old' => 'Balungagan',
            'code' => '1600207015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>257	,
            'name_new' => 'BONIFACIO',
            'name_old' => 'Bonifacio',
            'code' => '1600207002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>258	,
            'name_new' => 'CASIKLAN',
            'name_old' => 'Casiklan',
            'code' => '1600207021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>259	,
            'name_new' => 'CONSORCIA',
            'name_old' => 'Consorcia',
            'code' => '1600207003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>260	,
            'name_new' => 'DURIAN',
            'name_old' => 'Durian',
            'code' => '1600207017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>261	,
            'name_new' => 'EDUARDO G. MONTILLA (CAMBOAYON)',
            'name_old' => 'Eduardo G. Montilla',
            'code' => '1600207016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>262	,
            'name_new' => 'IBUAN',
            'name_old' => 'Ibuan',
            'code' => '1600207018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>263	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1600207004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>264	,
            'name_new' => 'LINGAYAO',
            'name_old' => 'Lingayao',
            'code' => '1600207005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>265	,
            'name_new' => 'MALICATO',
            'name_old' => 'Malicato',
            'code' => '1600207006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>266	,
            'name_new' => 'MANINGALAO',
            'name_old' => 'Maningalao',
            'code' => '1600207007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>267	,
            'name_new' => 'MARCOS CALO',
            'name_old' => 'Marcos Calo',
            'code' => '1600207008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>268	,
            'name_new' => 'MAT-I',
            'name_old' => 'Mat-i',
            'code' => '1600207009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>269	,
            'name_new' => 'PINANA-AN',
            'name_old' => 'Pinana-an',
            'code' => '1600207010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>270	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600207011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>271	,
            'name_new' => 'ROSARIO',
            'name_old' => 'Rosario',
            'code' => '1600207019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>272	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600207013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>273	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1600207020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>274	,
            'name_new' => 'TINUCORAN',
            'name_old' => 'Tinucoran',
            'code' => '1600207014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>275	,
            'name_new' => 'BUHANG',
            'name_old' => 'Buhang',
            'code' => '1600208001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>276	,
            'name_new' => 'CALOC-AN',
            'name_old' => 'Caloc-an',
            'code' => '1600208002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>277	,
            'name_new' => 'GUIASAN',
            'name_old' => 'Guiasan',
            'code' => '1600208003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>278	,
            'name_new' => 'MARCOS',
            'name_old' => 'Marcos',
            'code' => '1600208009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>279	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600208005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>280	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1600208010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>281	,
            'name_new' => 'SANTO ROSARIO',
            'name_old' => 'Santo Rosario',
            'code' => '1600208011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>282	,
            'name_new' => 'TAOD-OY',
            'name_old' => 'Taod-oy',
            'code' => '1600208008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>283	,
            'name_new' => 'ACLAN',
            'name_old' => 'Aclan',
            'code' => '1600209001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>284	,
            'name_new' => 'AMONTAY',
            'name_old' => 'Amontay',
            'code' => '1600209002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>285	,
            'name_new' => 'ATA-ATAHON',
            'name_old' => 'Ata-atahon',
            'code' => '1600209004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>286	,
            'name_new' => 'BARANGAY 1 (POB.)',
            'name_old' => 'Barangay 1 (Pob.)',
            'code' => '1600209010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>287	,
            'name_new' => 'BARANGAY 2 (POB.)',
            'name_old' => 'Barangay 2 (Pob.)',
            'code' => '1600209011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>288	,
            'name_new' => 'BARANGAY 3 (POB.)',
            'name_old' => 'Barangay 3 (Pob.)',
            'code' => '1600209012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>289	,
            'name_new' => 'BARANGAY 4 (POB.)',
            'name_old' => 'Barangay 4 (Pob.)',
            'code' => '1600209013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>290	,
            'name_new' => 'BARANGAY 5 (POB.)',
            'name_old' => 'Barangay 5 (Pob.)',
            'code' => '1600209014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>291	,
            'name_new' => 'BARANGAY 6 (POB.)',
            'name_old' => 'Barangay 6 (Pob.)',
            'code' => '1600209015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>292	,
            'name_new' => 'BARANGAY 7 (POB.)',
            'name_old' => 'Barangay 7 (Pob.)',
            'code' => '1600209016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>293	,
            'name_new' => 'CAMAGONG',
            'name_old' => 'Camagong',
            'code' => '1600209005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>294	,
            'name_new' => 'CUBI-CUBI',
            'name_old' => 'Cubi-cubi',
            'code' => '1600209006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>295	,
            'name_new' => 'CULIT',
            'name_old' => 'Culit',
            'code' => '1600209007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>296	,
            'name_new' => 'JAGUIMITAN',
            'name_old' => 'Jaguimitan',
            'code' => '1600209008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>297	,
            'name_new' => 'KINABJANGAN',
            'name_old' => 'Kinabjangan',
            'code' => '1600209009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>298	,
            'name_new' => 'PUNTA',
            'name_old' => 'Punta',
            'code' => '1600209017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>299	,
            'name_new' => 'SANTA ANA',
            'name_old' => 'Santa Ana',
            'code' => '1600209018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>300	,
            'name_new' => 'TALISAY',
            'name_old' => 'Talisay',
            'code' => '1600209019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>301	,
            'name_new' => 'TRIANGULO',
            'name_old' => 'Triangulo',
            'code' => '1600209020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>302	,
            'name_new' => 'BALANGBALANG',
            'name_old' => 'Balangbalang',
            'code' => '1600212002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>303	,
            'name_new' => 'BASILISA',
            'name_old' => 'Basilisa',
            'code' => '1600212003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>304	,
            'name_new' => 'HUMILOG',
            'name_old' => 'Humilog',
            'code' => '1600212004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>305	,
            'name_new' => 'PANAYTAYON',
            'name_old' => 'Panaytayon',
            'code' => '1600212005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>306	,
            'name_new' => 'POBLACION I (AGAY)',
            'name_old' => 'Poblacion I',
            'code' => '1600212001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>307	,
            'name_new' => 'POBLACION II',
            'name_old' => 'Poblacion II',
            'code' => '1600212008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>308	,
            'name_new' => 'SAN ANTONIO',
            'name_old' => 'San Antonio',
            'code' => '1600212006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>309	,
            'name_new' => 'TAGBONGABONG',
            'name_old' => 'Tagbongabong',
            'code' => '1600212007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>310	,
            'name_new' => 'CURVA',
            'name_old' => 'Curva',
            'code' => '1600210002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>311	,
            'name_new' => 'ESTANISLAO MORGADO',
            'name_old' => 'Estanislao Morgado',
            'code' => '1600210010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>312	,
            'name_new' => 'JAGUPIT',
            'name_old' => 'Jagupit',
            'code' => '1600210003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>313	,
            'name_new' => 'LA PAZ',
            'name_old' => 'La Paz',
            'code' => '1600210005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>314	,
            'name_new' => 'Pangaylan-IP',
            'name_old' => 'Pangaylan-IP',
            'code' => '1600210012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>315	,
            'name_new' => 'POBLACION I',
            'name_old' => 'Poblacion I',
            'code' => '1600210007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>316	,
            'name_new' => 'POBLACION II',
            'name_old' => 'Poblacion II',
            'code' => '1600210011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>317	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600210008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>318	,
            'name_new' => 'TAGBUYACAN',
            'name_old' => 'Tagbuyacan',
            'code' => '1600210009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>319	,
            'name_new' => 'BINUANGAN',
            'name_old' => 'Binuangan',
            'code' => '1600211001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>320	,
            'name_new' => 'CABAYAWA',
            'name_old' => 'Cabayawa',
            'code' => '1600211002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>321	,
            'name_new' => 'DOÑA ROSARIO',
            'name_old' => 'Doña Rosario',
            'code' => '1600211003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>322	,
            'name_new' => 'DOÑA TELESFORA',
            'name_old' => 'Doña Telesfora',
            'code' => '1600211013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>323	,
            'name_new' => 'LA FRATERNIDAD',
            'name_old' => 'La Fraternidad',
            'code' => '1600211004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>324	,
            'name_new' => 'LAWIGAN',
            'name_old' => 'Lawigan',
            'code' => '1600211005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>325	,
            'name_new' => 'POBLACION 1',
            'name_old' => 'Poblacion 1',
            'code' => '1600211006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>326	,
            'name_new' => 'POBLACION 2',
            'name_old' => 'Poblacion 2',
            'code' => '1600211007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>327	,
            'name_new' => 'SANTA ANA',
            'name_old' => 'Santa Ana',
            'code' => '1600211008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>328	,
            'name_new' => 'TAGMAMARKAY',
            'name_old' => 'Tagmamarkay',
            'code' => '1600211009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>329	,
            'name_new' => 'TAGPANGAHOY',
            'name_old' => 'Tagpangahoy',
            'code' => '1600211010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>330	,
            'name_new' => 'TINIGBASAN',
            'name_old' => 'Tinigbasan',
            'code' => '1600211011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>331	,
            'name_new' => 'VICTORY',
            'name_old' => 'Victory',
            'code' => '1600211012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>332	,
            'name_new' => 'BUNAWAN BROOK',
            'name_old' => 'Bunawan Brook',
            'code' => '1600302001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>333	,
            'name_new' => 'CONSUELO',
            'name_old' => 'Consuelo',
            'code' => '1600302002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>334	,
            'name_new' => 'IMELDA',
            'name_old' => 'Imelda',
            'code' => '1600302008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>335	,
            'name_new' => 'LIBERTAD',
            'name_old' => 'Libertad',
            'code' => '1600302003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>336	,
            'name_new' => 'MAMBALILI',
            'name_old' => 'Mambalili',
            'code' => '1600302004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>337	,
            'name_new' => 'NUEVA ERA',
            'name_old' => 'Nueva Era',
            'code' => '1600302009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>338	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600302005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>339	,
            'name_new' => 'SAN ANDRES',
            'name_old' => 'San Andres',
            'code' => '1600302006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>340	,
            'name_new' => 'SAN MARCOS',
            'name_old' => 'San Marcos',
            'code' => '1600302007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>341	,
            'name_new' => 'SAN TEODORO',
            'name_old' => 'San Teodoro',
            'code' => '1600302010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>342	,
            'name_new' => 'BERSEBA',
            'name_old' => 'Berseba',
            'code' => '1600301028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>343	,
            'name_new' => 'BUCAC',
            'name_old' => 'Bucac',
            'code' => '1600301029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>344	,
            'name_new' => 'CAGBAS',
            'name_old' => 'Cagbas',
            'code' => '1600301030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>345	,
            'name_new' => 'CALAITAN',
            'name_old' => 'Calaitan',
            'code' => '1600301001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>346	,
            'name_new' => 'CANAYUGAN',
            'name_old' => 'Canayugan',
            'code' => '1600301031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>347	,
            'name_new' => 'CHARITO',
            'name_old' => 'Charito',
            'code' => '1600301002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>348	,
            'name_new' => 'CLARO CORTEZ',
            'name_old' => 'Claro Cortez',
            'code' => '1600301032',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>349	,
            'name_new' => 'FILI',
            'name_old' => 'Fili',
            'code' => '1600301003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>350	,
            'name_new' => 'GAMAO',
            'name_old' => 'Gamao',
            'code' => '1600301033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>351	,
            'name_new' => 'GETSEMANE',
            'name_old' => 'Getsemane',
            'code' => '1600301034',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>352	,
            'name_new' => 'GRACE ESTATE',
            'name_old' => 'Grace Estate',
            'code' => '1600301035',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>353	,
            'name_new' => 'HAMOGAWAY',
            'name_old' => 'Hamogaway',
            'code' => '1600301004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>354	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1600301006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>355	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1600301007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>356	,
            'name_new' => 'MAGKIANGKANG',
            'name_old' => 'Magkiangkang',
            'code' => '1600301036',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>357	,
            'name_new' => 'MAHAYAG',
            'name_old' => 'Mahayag',
            'code' => '1600301037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>358	,
            'name_new' => 'MARCELINA',
            'name_old' => 'Marcelina',
            'code' => '1600301009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>359	,
            'name_new' => 'MAYGATASAN',
            'name_old' => 'Maygatasan',
            'code' => '1600301010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>360	,
            'name_new' => 'MONTIVESTA',
            'name_old' => 'Montivesta',
            'code' => '1600301038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>361	,
            'name_new' => 'MT. ARARAT',
            'name_old' => 'Mt. Ararat',
            'code' => '1600301039',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>362	,
            'name_new' => 'MT. CARMEL',
            'name_old' => 'Mt. Carmel',
            'code' => '1600301040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>363	,
            'name_new' => 'MT. OLIVE',
            'name_old' => 'Mt. Olive',
            'code' => '1600301041',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>364	,
            'name_new' => 'NEW SALEM',
            'name_old' => 'New Salem',
            'code' => '1600301042',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>365	,
            'name_new' => 'NOLI',
            'name_old' => 'Noli',
            'code' => '1600301011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>366	,
            'name_new' => 'OSMEÑA',
            'name_old' => 'Osmeña',
            'code' => '1600301013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>367	,
            'name_new' => 'PANAYTAY',
            'name_old' => 'Panaytay',
            'code' => '1600301014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>368	,
            'name_new' => 'PINAGALAAN',
            'name_old' => 'Pinagalaan',
            'code' => '1600301043',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>369	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600301016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>370	,
            'name_new' => 'SAGMONE',
            'name_old' => 'Sagmone',
            'code' => '1600301017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>371	,
            'name_new' => 'SAGUMA',
            'name_old' => 'Saguma',
            'code' => '1600301018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>372	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1600301019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>373	,
            'name_new' => 'SAN AGUSTIN',
            'name_old' => 'San Agustin',
            'code' => '1600301044',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>374	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600301020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>375	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1600301045',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>376	,
            'name_new' => 'SANTA IRENE',
            'name_old' => 'Santa Irene',
            'code' => '1600301023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>377	,
            'name_new' => 'SANTA TERESITA',
            'name_old' => 'Santa Teresita',
            'code' => '1600301046',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>378	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1600301047',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>379	,
            'name_new' => 'TAGLATAWAN',
            'name_old' => 'Taglatawan',
            'code' => '1600301024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>380	,
            'name_new' => 'TAGLIBAS',
            'name_old' => 'Taglibas',
            'code' => '1600301048',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>381	,
            'name_new' => 'TAGUBAY',
            'name_old' => 'Tagubay',
            'code' => '1600301049',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>382	,
            'name_new' => 'VERDU',
            'name_old' => 'Verdu',
            'code' => '1600301025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>383	,
            'name_new' => 'VILLA UNDAYON',
            'name_old' => 'Villa Undayon',
            'code' => '1600301050',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>384	,
            'name_new' => 'WAWA',
            'name_old' => 'Wawa',
            'code' => '1600301027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>385	,
            'name_new' => 'AGSABU',
            'name_old' => 'Agsabu',
            'code' => '1600303031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>386	,
            'name_new' => 'AGUINALDO',
            'name_old' => 'Aguinaldo',
            'code' => '1600303032',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>387	,
            'name_new' => 'ANOLINGAN',
            'name_old' => 'Anolingan',
            'code' => '1600303001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>388	,
            'name_new' => 'BAKINGKING',
            'name_old' => 'Bakingking',
            'code' => '1600303002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>389	,
            'name_new' => 'BALUBO',
            'name_old' => 'Balubo',
            'code' => '1600303033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>390	,
            'name_new' => 'BENTAHON',
            'name_old' => 'Bentahon',
            'code' => '1600303003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>391	,
            'name_new' => 'BUNAGUIT',
            'name_old' => 'Bunaguit',
            'code' => '1600303004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>392	,
            'name_new' => 'CATMONON',
            'name_old' => 'Catmonon',
            'code' => '1600303006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>393	,
            'name_new' => 'CEBULAN',
            'name_old' => 'Cebulan',
            'code' => '1600303034',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>394	,
            'name_new' => 'CONCORDIA',
            'name_old' => 'Concordia',
            'code' => '1600303007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>395	,
            'name_new' => 'CROSSING LUNA',
            'name_old' => 'Crossing Luna',
            'code' => '1600303035',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>396	,
            'name_new' => 'CUBO',
            'name_old' => 'Cubo',
            'code' => '1600303036',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>397	,
            'name_new' => 'DAKUTAN',
            'name_old' => 'Dakutan',
            'code' => '1600303008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>398	,
            'name_new' => 'DUANGAN',
            'name_old' => 'Duangan',
            'code' => '1600303009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>399	,
            'name_new' => 'GUADALUPE',
            'name_old' => 'Guadalupe',
            'code' => '1600303011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>400	,
            'name_new' => 'GUIBONON',
            'name_old' => 'Guibonon',
            'code' => '1600303037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>401	,
            'name_new' => 'HAWILIAN',
            'name_old' => 'Hawilian',
            'code' => '1600303012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>402	,
            'name_new' => 'KALABUAN',
            'name_old' => 'Kalabuan',
            'code' => '1600303038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>403	,
            'name_new' => 'KINAMAYBAY',
            'name_old' => 'Kinamaybay',
            'code' => '1600303039',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>404	,
            'name_new' => 'LABAO',
            'name_old' => 'Labao',
            'code' => '1600303013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>405	,
            'name_new' => 'LANGAG',
            'name_old' => 'Langag',
            'code' => '1600303040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>406	,
            'name_new' => 'MAASIN',
            'name_old' => 'Maasin',
            'code' => '1600303014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>407	,
            'name_new' => 'MAC-ARTHUR',
            'name_old' => 'Mac-Arthur',
            'code' => '1600303010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>408	,
            'name_new' => 'MAHAGCOT',
            'name_old' => 'Mahagcot',
            'code' => '1600303015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>409	,
            'name_new' => 'MALIWANAG',
            'name_old' => 'Maliwanag',
            'code' => '1600303041',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>410	,
            'name_new' => 'MILAGROS',
            'name_old' => 'Milagros',
            'code' => '1600303016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>411	,
            'name_new' => 'NATO',
            'name_old' => 'Nato',
            'code' => '1600303017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>412	,
            'name_new' => 'NEW GINGOOG',
            'name_old' => 'New Gingoog',
            'code' => '1600303042',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>413	,
            'name_new' => 'ODIONG',
            'name_old' => 'Odiong',
            'code' => '1600303043',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>414	,
            'name_new' => 'ORO',
            'name_old' => 'Oro',
            'code' => '1600303018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>415	,
            'name_new' => 'PIGLAWIGAN',
            'name_old' => 'Piglawigan',
            'code' => '1600303044',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>416	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600303019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>417	,
            'name_new' => 'REMEDIOS',
            'name_old' => 'Remedios',
            'code' => '1600303020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>418	,
            'name_new' => 'SALUG',
            'name_old' => 'Salug',
            'code' => '1600303021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>419	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600303045',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>420	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1600303046',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>421	,
            'name_new' => 'SAN TORIBIO',
            'name_old' => 'San Toribio',
            'code' => '1600303022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>422	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1600303047',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>423	,
            'name_new' => 'SANTA FE',
            'name_old' => 'Santa Fe',
            'code' => '1600303023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>424	,
            'name_new' => 'SEGUNDA',
            'name_old' => 'Segunda',
            'code' => '1600303024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>425	,
            'name_new' => 'SINAKUNGAN',
            'name_old' => 'Sinakungan',
            'code' => '1600303048',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>426	,
            'name_new' => 'TAGABASE',
            'name_old' => 'Tagabase',
            'code' => '1600303026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>427	,
            'name_new' => 'TAGANAHAW',
            'name_old' => 'Taganahaw',
            'code' => '1600303027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>428	,
            'name_new' => 'TAGBALILI',
            'name_old' => 'Tagbalili',
            'code' => '1600303028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>429	,
            'name_new' => 'TAHINA',
            'name_old' => 'Tahina',
            'code' => '1600303029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>430	,
            'name_new' => 'TANDANG SORA',
            'name_old' => 'Tandang Sora',
            'code' => '1600303030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>431	,
            'name_new' => 'VALENTINA',
            'name_old' => 'Valentina',
            'code' => '1600303049',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>432	,
            'name_new' => 'ANGELES',
            'name_old' => 'Angeles',
            'code' => '1600304009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>433	,
            'name_new' => 'BATAAN',
            'name_old' => 'Bataan',
            'code' => '1600304001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>434	,
            'name_new' => 'COMOTA',
            'name_old' => 'Comota',
            'code' => '1600304002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>435	,
            'name_new' => 'HALAPITAN',
            'name_old' => 'Halapitan',
            'code' => '1600304003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>436	,
            'name_new' => 'KASAPA II',
            'name_old' => 'Kasapa II',
            'code' => '1600304010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>437	,
            'name_new' => 'LANGASIAN',
            'name_old' => 'Langasian',
            'code' => '1600304004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>438	,
            'name_new' => 'LYDIA',
            'name_old' => 'Lydia',
            'code' => '1600304011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>439	,
            'name_new' => 'OSMEÑA,SR.',
            'name_old' => 'Osmeña,Sr.',
            'code' => '1600304005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>440	,
            'name_new' => 'PANAGANGAN',
            'name_old' => 'Panagangan',
            'code' => '1600304012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>441	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600304006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>442	,
            'name_new' => 'SABANG ADGAWAN',
            'name_old' => 'Sabang Adgawan',
            'code' => '1600304013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>443	,
            'name_new' => 'SAGUNTO',
            'name_old' => 'Sagunto',
            'code' => '1600304007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>444	,
            'name_new' => 'SAN PATRICIO',
            'name_old' => 'San Patricio',
            'code' => '1600304014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>445	,
            'name_new' => 'VALENTINA',
            'name_old' => 'Valentina',
            'code' => '1600304015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>446	,
            'name_new' => 'VILLA PAZ',
            'name_old' => 'Villa Paz',
            'code' => '1600304008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>447	,
            'name_new' => 'BINUCAYAN',
            'name_old' => 'Binucayan',
            'code' => '1600305001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>448	,
            'name_new' => 'JOHNSON',
            'name_old' => 'Johnson',
            'code' => '1600305002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>449	,
            'name_new' => 'KASAPA',
            'name_old' => 'Kasapa',
            'code' => '1600305013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>450	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1600305014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>451	,
            'name_new' => 'KAUSWAGAN',
            'name_old' => 'Kauswagan',
            'code' => '1600305015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>452	,
            'name_new' => 'MAGAUD',
            'name_old' => 'Magaud',
            'code' => '1600305003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>453	,
            'name_new' => 'NUEVA GRACIA',
            'name_old' => 'Nueva Gracia',
            'code' => '1600305004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>454	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600305005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>455	,
            'name_new' => 'SABUD',
            'name_old' => 'Sabud',
            'code' => '1600305017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>456	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600305006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>457	,
            'name_new' => 'SAN MARIANO',
            'name_old' => 'San Mariano',
            'code' => '1600305007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>458	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1600305008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>459	,
            'name_new' => 'SANTA TERESA',
            'name_old' => 'Santa Teresa',
            'code' => '1600305009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>460	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1600305016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>461	,
            'name_new' => 'SANTO TOMAS',
            'name_old' => 'Santo Tomas',
            'code' => '1600305010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>462	,
            'name_new' => 'VIOLANTA',
            'name_old' => 'Violanta',
            'code' => '1600305011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>463	,
            'name_new' => 'WALOE',
            'name_old' => 'Waloe',
            'code' => '1600305012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>464	,
            'name_new' => 'AURORA',
            'name_old' => 'Aurora',
            'code' => '1600306001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>465	,
            'name_new' => 'AWA',
            'name_old' => 'Awa',
            'code' => '1600306002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>466	,
            'name_new' => 'AZPETIA',
            'name_old' => 'Azpetia',
            'code' => '1600306003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>467	,
            'name_new' => 'LA CARIDAD',
            'name_old' => 'La Caridad',
            'code' => '1600306006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>468	,
            'name_new' => 'LA PERIAN',
            'name_old' => 'La Perian',
            'code' => '1600306033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>469	,
            'name_new' => 'LA PURISIMA',
            'name_old' => 'La Purisima',
            'code' => '1600306034',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>470	,
            'name_new' => 'LA SUERTE',
            'name_old' => 'La Suerte',
            'code' => '1600306007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>471	,
            'name_new' => 'LA UNION',
            'name_old' => 'La Union',
            'code' => '1600306008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>472	,
            'name_new' => 'LAS NAVAS',
            'name_old' => 'Las Navas',
            'code' => '1600306009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>473	,
            'name_new' => 'LIBERTAD',
            'name_old' => 'Libertad',
            'code' => '1600306010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>474	,
            'name_new' => 'LOS ARCOS',
            'name_old' => 'Los Arcos',
            'code' => '1600306011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>475	,
            'name_new' => 'LUCENA',
            'name_old' => 'Lucena',
            'code' => '1600306012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>476	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1600306013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>477	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1600306014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>478	,
            'name_new' => 'MAPAGA',
            'name_old' => 'Mapaga',
            'code' => '1600306015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>479	,
            'name_new' => 'NAPO',
            'name_old' => 'Napo',
            'code' => '1600306017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>480	,
            'name_new' => 'NEW MAUG',
            'name_old' => 'New Maug',
            'code' => '1600306016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>481	,
            'name_new' => 'PATIN-AY',
            'name_old' => 'Patin-ay',
            'code' => '1600306018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>482	,
            'name_new' => 'POBLACION (BAHBAH)',
            'name_old' => 'Poblacion',
            'code' => '1600306004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>483	,
            'name_new' => 'SALIMBOGAON',
            'name_old' => 'Salimbogaon',
            'code' => '1600306020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>484	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1600306021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>485	,
            'name_new' => 'SAN JOAQUIN',
            'name_old' => 'San Joaquin',
            'code' => '1600306022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>486	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1600306023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>487	,
            'name_new' => 'SAN LORENZO',
            'name_old' => 'San Lorenzo',
            'code' => '1600306024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>488	,
            'name_new' => 'SAN MARTIN',
            'name_old' => 'San Martin',
            'code' => '1600306025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>489	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1600306026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>490	,
            'name_new' => 'SAN RAFAEL',
            'name_old' => 'San Rafael',
            'code' => '1600306027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>491	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1600306035',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>492	,
            'name_new' => 'SAN SALVADOR',
            'name_old' => 'San Salvador',
            'code' => '1600306029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>493	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1600306030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>494	,
            'name_new' => 'SANTA IRENE',
            'name_old' => 'Santa Irene',
            'code' => '1600306031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>495	,
            'name_new' => 'SANTA MARIA',
            'name_old' => 'Santa Maria',
            'code' => '1600306032',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>496	,
            'name_new' => 'BAYUGAN 3',
            'name_old' => 'Bayugan 3',
            'code' => '1600307001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>497	,
            'name_new' => 'CABANTAO',
            'name_old' => 'Cabantao',
            'code' => '1600307002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>498	,
            'name_new' => 'CABAWAN',
            'name_old' => 'Cabawan',
            'code' => '1600307003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>499	,
            'name_new' => 'LIBUAC',
            'name_old' => 'Libuac',
            'code' => '1600307010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>500	,
            'name_new' => 'MALIGAYA',
            'name_old' => 'Maligaya',
            'code' => '1600307011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>501	,
            'name_new' => 'MARFIL',
            'name_old' => 'Marfil',
            'code' => '1600307004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>502	,
            'name_new' => 'NOVELE',
            'name_old' => 'Novele',
            'code' => '1600307005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>503	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600307006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>504	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1600307007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>505	,
            'name_new' => 'TAGBAYAGAN',
            'name_old' => 'Tagbayagan',
            'code' => '1600307008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>506	,
            'name_new' => 'WASI-AN',
            'name_old' => 'Wasi-an',
            'code' => '1600307009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>507	,
            'name_new' => 'ALEGRIA',
            'name_old' => 'Alegria',
            'code' => '1600308001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>508	,
            'name_new' => 'BARANGAY 1 (POB.)',
            'name_old' => 'Barangay 1 (Pob.)',
            'code' => '1600308015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>509	,
            'name_new' => 'BARANGAY 2 (POB.)',
            'name_old' => 'Barangay 2 (Pob.)',
            'code' => '1600308016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>510	,
            'name_new' => 'BARANGAY 3 (POB.)',
            'name_old' => 'Barangay 3 (Pob.)',
            'code' => '1600308017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>511	,
            'name_new' => 'BARANGAY 4 (POB.)',
            'name_old' => 'Barangay 4 (Pob.)',
            'code' => '1600308018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>512	,
            'name_new' => 'BARANGAY 5 (POB.)',
            'name_old' => 'Barangay 5 (Pob.)',
            'code' => '1600308019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>513	,
            'name_new' => 'BAYUGAN 2',
            'name_old' => 'Bayugan 2',
            'code' => '1600308002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>514	,
            'name_new' => 'BITAN-AGAN',
            'name_old' => 'Bitan-agan',
            'code' => '1600308025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>515	,
            'name_new' => 'BORBON',
            'name_old' => 'Borbon',
            'code' => '1600308003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>516	,
            'name_new' => 'BUENASUERTE',
            'name_old' => 'Buenasuerte',
            'code' => '1600308026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>517	,
            'name_new' => 'CAIMPUGAN',
            'name_old' => 'Caimpugan',
            'code' => '1600308005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>518	,
            'name_new' => 'DAS-AGAN',
            'name_old' => 'Das-agan',
            'code' => '1600308027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>519	,
            'name_new' => 'EBRO',
            'name_old' => 'Ebro',
            'code' => '1600308006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>520	,
            'name_new' => 'HUBANG',
            'name_old' => 'Hubang',
            'code' => '1600308007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>521	,
            'name_new' => 'KARAUS',
            'name_old' => 'Karaus',
            'code' => '1600308028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>522	,
            'name_new' => 'LADGADAN',
            'name_old' => 'Ladgadan',
            'code' => '1600308029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>523	,
            'name_new' => 'LAPINIGAN',
            'name_old' => 'Lapinigan',
            'code' => '1600308008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>524	,
            'name_new' => 'LUCAC',
            'name_old' => 'Lucac',
            'code' => '1600308009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>525	,
            'name_new' => 'MATE',
            'name_old' => 'Mate',
            'code' => '1600308010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>526	,
            'name_new' => 'NEW VISAYAS',
            'name_old' => 'New Visayas',
            'code' => '1600308011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>527	,
            'name_new' => 'ORMACA',
            'name_old' => 'Ormaca',
            'code' => '1600308030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>528	,
            'name_new' => 'PASTA',
            'name_old' => 'Pasta',
            'code' => '1600308012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>529	,
            'name_new' => 'PISA-AN',
            'name_old' => 'Pisa-an',
            'code' => '1600308013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>530	,
            'name_new' => 'RIZAL',
            'name_old' => 'Rizal',
            'code' => '1600308020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>531	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600308021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>532	,
            'name_new' => 'SANTA ANA',
            'name_old' => 'Santa Ana',
            'code' => '1600308022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>533	,
            'name_new' => 'TAGAPUA',
            'name_old' => 'Tagapua',
            'code' => '1600308024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>534	,
            'name_new' => 'ANISLAGAN',
            'name_old' => 'Anislagan',
            'code' => '1600309001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>535	,
            'name_new' => 'BALIT',
            'name_old' => 'Balit',
            'code' => '1600309008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>536	,
            'name_new' => 'BAYLO',
            'name_old' => 'Baylo',
            'code' => '1600309002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>537	,
            'name_new' => 'BINICALAN',
            'name_old' => 'Binicalan',
            'code' => '1600309009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>538	,
            'name_new' => 'CECILIA',
            'name_old' => 'Cecilia',
            'code' => '1600309010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>539	,
            'name_new' => 'COALICION',
            'name_old' => 'Coalicion',
            'code' => '1600309003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>540	,
            'name_new' => 'CULI',
            'name_old' => 'Culi',
            'code' => '1600309004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>541	,
            'name_new' => 'DIMASALANG',
            'name_old' => 'Dimasalang',
            'code' => '1600309011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>542	,
            'name_new' => 'DON ALEJANDRO',
            'name_old' => 'Don Alejandro',
            'code' => '1600309012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>543	,
            'name_new' => 'DON PEDRO',
            'name_old' => 'Don Pedro',
            'code' => '1600309013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>544	,
            'name_new' => 'DOÑA FLAVIA',
            'name_old' => 'Doña Flavia',
            'code' => '1600309014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>545	,
            'name_new' => 'DOÑA MAXIMA',
            'name_old' => 'Doña Maxima',
            'code' => '1600309025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>546	,
            'name_new' => 'MAHAGSAY',
            'name_old' => 'Mahagsay',
            'code' => '1600309015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>547	,
            'name_new' => 'MAHAPAG',
            'name_old' => 'Mahapag',
            'code' => '1600309016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>548	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1600309017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>549	,
            'name_new' => 'MURITULA',
            'name_old' => 'Muritula',
            'code' => '1600309018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>550	,
            'name_new' => 'NUEVO TRABAJO',
            'name_old' => 'Nuevo Trabajo',
            'code' => '1600309005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>551	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600309006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>552	,
            'name_new' => 'POLICARPO',
            'name_old' => 'Policarpo',
            'code' => '1600309019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>553	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600309020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>554	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1600309021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>555	,
            'name_new' => 'SANTA INES',
            'name_old' => 'Santa Ines',
            'code' => '1600309007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>556	,
            'name_new' => 'SANTA RITA',
            'name_old' => 'Santa Rita',
            'code' => '1600309022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>557	,
            'name_new' => 'SANTIAGO',
            'name_old' => 'Santiago',
            'code' => '1600309023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>558	,
            'name_new' => 'WEGGUAM',
            'name_old' => 'Wegguam',
            'code' => '1600309024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>559	,
            'name_new' => 'ANGAS',
            'name_old' => 'Angas',
            'code' => '1600310001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>560	,
            'name_new' => 'AURORA',
            'name_old' => 'Aurora',
            'code' => '1600310002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>561	,
            'name_new' => 'AWAO',
            'name_old' => 'Awao',
            'code' => '1600310003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>562	,
            'name_new' => 'CONCEPCION',
            'name_old' => 'Concepcion',
            'code' => '1600310010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>563	,
            'name_new' => 'PAG-ASA',
            'name_old' => 'Pag-asa',
            'code' => '1600310011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>564	,
            'name_new' => 'PATROCINIO',
            'name_old' => 'Patrocinio',
            'code' => '1600310005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>565	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600310006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>566	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1600310007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>567	,
            'name_new' => 'SANTA ISABEL',
            'name_old' => 'Santa Isabel',
            'code' => '1600310008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>568	,
            'name_new' => 'SAYON',
            'name_old' => 'Sayon',
            'code' => '1600310009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>569	,
            'name_new' => 'TAPAZ',
            'name_old' => 'Tapaz',
            'code' => '1600310004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>570	,
            'name_new' => 'AFGA',
            'name_old' => 'Afga',
            'code' => '1600314001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>571	,
            'name_new' => 'ANAHAWAN',
            'name_old' => 'Anahawan',
            'code' => '1600314002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>572	,
            'name_new' => 'BANAGBANAG',
            'name_old' => 'Banagbanag',
            'code' => '1600314003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>573	,
            'name_new' => 'DEL ROSARIO',
            'name_old' => 'Del Rosario',
            'code' => '1600314004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>574	,
            'name_new' => 'EL RIO',
            'name_old' => 'El Rio',
            'code' => '1600314005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>575	,
            'name_new' => 'ILIHAN',
            'name_old' => 'Ilihan',
            'code' => '1600314006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>576	,
            'name_new' => 'KAUSWAGAN',
            'name_old' => 'Kauswagan',
            'code' => '1600314007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>577	,
            'name_new' => 'KIOYA',
            'name_old' => 'Kioya',
            'code' => '1600314008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>578	,
            'name_new' => 'KOLAMBUGAN',
            'name_old' => 'Kolambugan',
            'code' => '1600314024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>579	,
            'name_new' => 'MAGKALAPE',
            'name_old' => 'Magkalape',
            'code' => '1600314009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>580	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1600314010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>581	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1600314011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>582	,
            'name_new' => 'NEW TUBIGON',
            'name_old' => 'New Tubigon',
            'code' => '1600314012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>583	,
            'name_new' => 'PADIAY',
            'name_old' => 'Padiay',
            'code' => '1600314013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>584	,
            'name_new' => 'PEREZ',
            'name_old' => 'Perez',
            'code' => '1600314014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>585	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600314015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>586	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600314016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>587	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1600314017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>588	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1600314018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>589	,
            'name_new' => 'SANTA MARIA',
            'name_old' => 'Santa Maria',
            'code' => '1600314019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>590	,
            'name_new' => 'SINAI',
            'name_old' => 'Sinai',
            'code' => '1600314020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>591	,
            'name_new' => 'TABON-TABON',
            'name_old' => 'Tabon-tabon',
            'code' => '1600314021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>592	,
            'name_new' => 'TAG-UYANGO',
            'name_old' => 'Tag-uyango',
            'code' => '1600314022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>593	,
            'name_new' => 'VILLANGIT',
            'name_old' => 'Villangit',
            'code' => '1600314023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>594	,
            'name_new' => 'BALUCAN',
            'name_old' => 'Batucan',
            'code' => '1600311017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>595	,
            'name_new' => 'BUENAGRACIA',
            'name_old' => 'BuenaGracia',
            'code' => '1600311001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>596	,
            'name_new' => 'CAUSWAGAN',
            'name_old' => 'Causwagan',
            'code' => '1600311002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>597	,
            'name_new' => 'CULI',
            'name_old' => 'Culi',
            'code' => '1600311004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>598	,
            'name_new' => 'DEL MONTE',
            'name_old' => 'Del Monte',
            'code' => '1600311005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>599	,
            'name_new' => 'DESAMPARADOS',
            'name_old' => 'Desamparados',
            'code' => '1600311006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>600	,
            'name_new' => 'LA FLORA',
            'name_old' => 'La Flora',
            'code' => '1600311014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>601	,
            'name_new' => 'LABNIG',
            'name_old' => 'Labnig',
            'code' => '1600311007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>602	,
            'name_new' => 'MAHARLIKA',
            'name_old' => 'Maharlika',
            'code' => '1600311015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>603	,
            'name_new' => 'MARBON',
            'name_old' => 'Marbon',
            'code' => '1600311016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>604	,
            'name_new' => 'SABANG GIBUNG',
            'name_old' => 'Sabang Gibung',
            'code' => '1600311008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>605	,
            'name_new' => 'SAN AGUSTIN (POB.)',
            'name_old' => 'San Agustin (Pob.)',
            'code' => '1600311009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>606	,
            'name_new' => 'SAN ISIDRO (POB.)',
            'name_old' => 'San Isidro (Pob.)',
            'code' => '1600311010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>607	,
            'name_new' => 'SAN NICOLAS (POB.)',
            'name_old' => 'San Nicolas (Pob.)',
            'code' => '1600311011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>608	,
            'name_new' => 'ZAMORA',
            'name_old' => 'Zamora',
            'code' => '1600311012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>609	,
            'name_new' => 'ZILLOVIA',
            'name_old' => 'Zillovia',
            'code' => '1600311013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>610	,
            'name_new' => 'BASA',
            'name_old' => 'Basa',
            'code' => '1600312001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>611	,
            'name_new' => 'CEBOLIN',
            'name_old' => 'Cebolin',
            'code' => '1600312014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>612	,
            'name_new' => 'CUEVAS',
            'name_old' => 'Cuevas',
            'code' => '1600312002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>613	,
            'name_new' => 'KAPATUNGAN',
            'name_old' => 'Kapatungan',
            'code' => '1600312003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>614	,
            'name_new' => 'LANGKILA-AN',
            'name_old' => 'Langkila-an',
            'code' => '1600312004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>615	,
            'name_new' => 'MANAT',
            'name_old' => 'Manat',
            'code' => '1600312015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>616	,
            'name_new' => 'NEW VISAYAS',
            'name_old' => 'New Visayas',
            'code' => '1600312005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>617	,
            'name_new' => 'PANGYAN',
            'name_old' => 'Pangyan',
            'code' => '1600312016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>618	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600312006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>619	,
            'name_new' => 'PULANG-LUPA',
            'name_old' => 'Pulang-lupa',
            'code' => '1600312007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>620	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1600312008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>621	,
            'name_new' => 'SAN IGNACIO',
            'name_old' => 'San Ignacio',
            'code' => '1600312009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>622	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1600312010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>623	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1600312011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>624	,
            'name_new' => 'SANTA MARIA',
            'name_old' => 'Santa Maria',
            'code' => '1600312012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>625	,
            'name_new' => 'TUDELA',
            'name_old' => 'Tudela',
            'code' => '1600312013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>626	,
            'name_new' => 'ANITAP',
            'name_old' => 'Anitap',
            'code' => '1600313013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>627	,
            'name_new' => 'BACAY II',
            'name_old' => 'Bacay II',
            'code' => '1600313014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>628	,
            'name_new' => 'BINONGAN',
            'name_old' => 'Binongan',
            'code' => '1600313001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>629	,
            'name_new' => 'CAIGANGAN',
            'name_old' => 'Caigangan',
            'code' => '1600313015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>630	,
            'name_new' => 'CANDIIS',
            'name_old' => 'Candiis',
            'code' => '1600313016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>631	,
            'name_new' => 'DEL MONTE',
            'name_old' => 'Del Monte',
            'code' => '1600313002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>632	,
            'name_new' => 'DON MATEO',
            'name_old' => 'Don Mateo',
            'code' => '1600313003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>633	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1600313017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>634	,
            'name_new' => 'LA FORTUNA',
            'name_old' => 'La Fortuna',
            'code' => '1600313004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>635	,
            'name_new' => 'LIMOT',
            'name_old' => 'Limot',
            'code' => '1600313005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>636	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1600313006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>637	,
            'name_new' => 'MASAYAN',
            'name_old' => 'Masayan',
            'code' => '1600313007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>638	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1600313008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>639	,
            'name_new' => 'SAMPAGUITA',
            'name_old' => 'Sampaguita',
            'code' => '1600313009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>640	,
            'name_new' => 'SAN GABRIEL',
            'name_old' => 'San Gabriel',
            'code' => '1600313010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>641	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1600313018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>642	,
            'name_new' => 'SANTA EMELIA',
            'name_old' => 'Santa Emelia',
            'code' => '1600313011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>643	,
            'name_new' => 'SAWAGAN',
            'name_old' => 'Sawagan',
            'code' => '1600313019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>644	,
            'name_new' => 'SINOBONG',
            'name_old' => 'Sinobong',
            'code' => '1600313012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>645	,
            'name_new' => 'SISIMON',
            'name_old' => 'Sisimon',
            'code' => '1600313020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>646	,
            'name_new' => 'BENGLEN',
            'name_old' => 'Benglen',
            'code' => '1608501019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>647	,
            'name_new' => 'CATADMAN',
            'name_old' => 'Catadman',
            'code' => '1608501002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>648	,
            'name_new' => 'COLUMBUS',
            'name_old' => 'Columbus',
            'code' => '1608501003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>649	,
            'name_new' => 'CORING',
            'name_old' => 'Coring',
            'code' => '1608501004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>650	,
            'name_new' => 'CORTES',
            'name_old' => 'Cortes',
            'code' => '1608501005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>651	,
            'name_new' => 'DIEGAS',
            'name_old' => 'Diegas',
            'code' => '1608501020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>652	,
            'name_new' => 'DOÑA HELENE',
            'name_old' => 'Doña Helene',
            'code' => '1608501006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>653	,
            'name_new' => 'EDERA',
            'name_old' => 'Edera',
            'code' => '1608501021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>654	,
            'name_new' => 'FERDINAND',
            'name_old' => 'Ferdinand',
            'code' => '1608501007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>655	,
            'name_new' => 'GEOTINA',
            'name_old' => 'Geotina',
            'code' => '1608501008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>656	,
            'name_new' => 'IMEE (BACTASAN)',
            'name_old' => 'Imee',
            'code' => '1608501009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>657	,
            'name_new' => 'MELGAR',
            'name_old' => 'Melgar',
            'code' => '1608501010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>658	,
            'name_new' => 'MONTAG',
            'name_old' => 'Montag',
            'code' => '1608501011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>659	,
            'name_new' => 'NAVARRO',
            'name_old' => 'Navarro',
            'code' => '1608501012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>660	,
            'name_new' => 'NEW NAZARETH',
            'name_old' => 'New Nazareth',
            'code' => '1608501022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>661	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1608501013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>662	,
            'name_new' => 'PUERTO PRINCESA',
            'name_old' => 'Puerto Princesa',
            'code' => '1608501014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>663	,
            'name_new' => 'RITA GLENDA',
            'name_old' => 'Rita Glenda',
            'code' => '1608501015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>664	,
            'name_new' => 'ROMA',
            'name_old' => 'Roma',
            'code' => '1608501023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>665	,
            'name_new' => 'ROXAS',
            'name_old' => 'Roxas',
            'code' => '1608501016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>666	,
            'name_new' => 'SANTA MONICA',
            'name_old' => 'Santa Monica',
            'code' => '1608501024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>667	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1608501025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>668	,
            'name_new' => 'SERING',
            'name_old' => 'Sering',
            'code' => '1608501017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>669	,
            'name_new' => 'SOMBRADO',
            'name_old' => 'Sombrado',
            'code' => '1608501026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>670	,
            'name_new' => 'TAG-ABACA',
            'name_old' => 'Tag-abaca',
            'code' => '1608501018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>671	,
            'name_new' => 'VILLA ECLEO',
            'name_old' => 'Villa Ecleo',
            'code' => '1608501027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>672	,
            'name_new' => 'VILLA PANTINOPLE',
            'name_old' => 'Villa Pantinople',
            'code' => '1608501028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>673	,
            'name_new' => 'BOA',
            'name_old' => 'Boa',
            'code' => '1608502001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>674	,
            'name_new' => 'CABUNGA-AN',
            'name_old' => 'Cabunga-an',
            'code' => '1608502002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>675	,
            'name_new' => 'DEL PILAR',
            'name_old' => 'Del Pilar',
            'code' => '1608502003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>676	,
            'name_new' => 'LAGUNA',
            'name_old' => 'Laguna',
            'code' => '1608502004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>677	,
            'name_new' => 'LEGASPI',
            'name_old' => 'Legaspi',
            'code' => '1608502005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>678	,
            'name_new' => 'MA-ATAS',
            'name_old' => 'Ma-atas',
            'code' => '1608502006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>679	,
            'name_new' => 'MABINI (BORJA)',
            'name_old' => 'Mabini',
            'code' => '1608502013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>680	,
            'name_new' => 'NUEVA ESTRELLA',
            'name_old' => 'Nueva Estrella',
            'code' => '1608502007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>681	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1608502008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>682	,
            'name_new' => 'R. ECLEO,SR.',
            'name_old' => 'R. Ecleo,Sr.',
            'code' => '1608502014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>683	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1608502009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>684	,
            'name_new' => 'SANTA RITA',
            'name_old' => 'Santa Rita',
            'code' => '1608502010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>685	,
            'name_new' => 'TIGBAO',
            'name_old' => 'Tigbao',
            'code' => '1608502011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>686	,
            'name_new' => 'VALENCIA',
            'name_old' => 'Valencia',
            'code' => '1608502012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>687	,
            'name_new' => 'BAGUMBAYAN',
            'name_old' => 'Bagumbayan',
            'code' => '1608503014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>688	,
            'name_new' => 'CABAYAWAN',
            'name_old' => 'Cabayawan',
            'code' => '1608503003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>689	,
            'name_new' => 'CAB-ILAN',
            'name_old' => 'Cab-ilan',
            'code' => '1608503002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>690	,
            'name_new' => 'CAYETANO',
            'name_old' => 'Cayetano',
            'code' => '1608503022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>691	,
            'name_new' => 'ESCOLTA (POB.)',
            'name_old' => 'Escolta (Pob.)',
            'code' => '1608503004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>692	,
            'name_new' => 'GOMEZ',
            'name_old' => 'Gomez',
            'code' => '1608503005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>693	,
            'name_new' => 'JUSTINIANA EDERA',
            'name_old' => 'Justiniana Edera',
            'code' => '1608503023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>694	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1608503007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>695	,
            'name_new' => 'MAUSWAGON (POB.)',
            'name_old' => 'Mauswagon (Pob.)',
            'code' => '1608503009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>696	,
            'name_new' => 'NEW MABUHAY',
            'name_old' => 'New Mabuhay',
            'code' => '1608503016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>697	,
            'name_new' => 'WADAS',
            'name_old' => 'Wadas',
            'code' => '1608503021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>698	,
            'name_new' => 'WHITE BEACH (POB.)',
            'name_old' => 'White Beach (Pob.)',
            'code' => '1608503012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>699	,
            'name_new' => 'ALBOR (POB.)',
            'name_old' => 'Albor (Pob.)',
            'code' => '1608504001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>700	,
            'name_new' => 'ARELLANO',
            'name_old' => 'Arellano',
            'code' => '1608504002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>701	,
            'name_new' => 'BAYANIHAN',
            'name_old' => 'Bayanihan',
            'code' => '1608504003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>702	,
            'name_new' => 'DOÑA HELEN',
            'name_old' => 'Doña Helen',
            'code' => '1608504004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>703	,
            'name_new' => 'GARCIA',
            'name_old' => 'Garcia',
            'code' => '1608504005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>704	,
            'name_new' => 'GENERAL AGUINALDO (BOLOD-BOLOD)',
            'name_old' => 'General Aguinaldo',
            'code' => '1608504006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>705	,
            'name_new' => 'KANIHAAN',
            'name_old' => 'Kanihaan',
            'code' => '1608504007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>706	,
            'name_new' => 'LLAMERA',
            'name_old' => 'Llamera',
            'code' => '1608504015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>707	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1608504008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>708	,
            'name_new' => 'OSMEÑA',
            'name_old' => 'Osmeña',
            'code' => '1608504009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>709	,
            'name_new' => 'PLARIDEL',
            'name_old' => 'Plaridel',
            'code' => '1608504010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>710	,
            'name_new' => 'QUEZON',
            'name_old' => 'Quezon',
            'code' => '1608504011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>711	,
            'name_new' => 'ROSITA',
            'name_old' => 'Rosita',
            'code' => '1608504016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>712	,
            'name_new' => 'SAN ANTONIO (POB.)',
            'name_old' => 'San Antonio (Pob.)',
            'code' => '1608504012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>713	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1608504013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>714	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1608504014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>715	,
            'name_new' => 'CARMEN (POB.)',
            'name_old' => 'Carmen (Pob.)',
            'code' => '1608505001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>716	,
            'name_new' => 'ESPERANZA',
            'name_old' => 'Esperanza',
            'code' => '1608505002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>717	,
            'name_new' => 'FERDINAND',
            'name_old' => 'Ferdinand',
            'code' => '1608505003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>718	,
            'name_new' => 'HELENE',
            'name_old' => 'Helene',
            'code' => '1608505004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>719	,
            'name_new' => 'LIBERTY',
            'name_old' => 'Liberty',
            'code' => '1608505006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>720	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1608505008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>721	,
            'name_new' => 'PANAMAON',
            'name_old' => 'Panamaon',
            'code' => '1608505011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>722	,
            'name_new' => 'SAN JUAN (POB.)',
            'name_old' => 'San Juan (Pob.)',
            'code' => '1608505013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>723	,
            'name_new' => 'SANTA CRUZ (POB.)',
            'name_old' => 'Santa Cruz (Pob.)',
            'code' => '1608505015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>724	,
            'name_new' => 'SANTIAGO (POB.)',
            'name_old' => 'Santiago (Pob.)',
            'code' => '1608505017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>725	,
            'name_new' => 'AURELIO',
            'name_old' => 'Aurelio',
            'code' => '1608506001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>726	,
            'name_new' => 'CUARINTA',
            'name_old' => 'Cuarinta',
            'code' => '1608506002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>727	,
            'name_new' => 'DON RUBEN ECLEO (BALTAZAR)',
            'name_old' => 'Don Ruben Ecleo',
            'code' => '1608506003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>728	,
            'name_new' => 'JACQUEZ',
            'name_old' => 'Jacquez',
            'code' => '1608506004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>729	,
            'name_new' => 'JUSTINIANA EDERA',
            'name_old' => 'Justiniana Edera',
            'code' => '1608506005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>730	,
            'name_new' => 'LUNA',
            'name_old' => 'Luna',
            'code' => '1608506006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>731	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1608506007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>732	,
            'name_new' => 'MATINGBE',
            'name_old' => 'Matingbe',
            'code' => '1608506008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>733	,
            'name_new' => 'SAN JOSE (POB.)',
            'name_old' => 'San Jose (Pob.)',
            'code' => '1608506009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>734	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1608506010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>735	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1608506011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>736	,
            'name_new' => 'WILSON',
            'name_old' => 'Wilson',
            'code' => '1608506012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>737	,
            'name_new' => 'DIAZ (ROMUALDEZ)',
            'name_old' => 'Diaz',
            'code' => '1608507005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>738	,
            'name_new' => 'IMELDA',
            'name_old' => 'Imelda',
            'code' => '1608507001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>739	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1608507002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>740	,
            'name_new' => 'MALINAO',
            'name_old' => 'Malinao',
            'code' => '1608507003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>741	,
            'name_new' => 'NAVARRO',
            'name_old' => 'Navarro',
            'code' => '1608507004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>742	,
            'name_new' => 'ROXAS',
            'name_old' => 'Roxas',
            'code' => '1608507006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>743	,
            'name_new' => 'SAN ROQUE (POB.)',
            'name_old' => 'San Roque (Pob.)',
            'code' => '1608507007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>744	,
            'name_new' => 'SAN VICENTE (POB.)',
            'name_old' => 'San Vicente (Pob.)',
            'code' => '1608507008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>745	,
            'name_new' => 'SANTA CRUZ (POB.)',
            'name_old' => 'Santa Cruz (Pob.)',
            'code' => '1608507009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>746	,
            'name_new' => 'ALIPAO',
            'name_old' => 'Alipao',
            'code' => '1606701002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>747	,
            'name_new' => 'ANAHAW',
            'name_old' => 'Anahaw',
            'code' => '1606701011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>748	,
            'name_new' => 'BUDLINGIN',
            'name_old' => 'Budlingin',
            'code' => '1606701003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>749	,
            'name_new' => 'CAMP EDUARD (GEOTINA)',
            'name_old' => 'Camp Eduard',
            'code' => '1606701004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>750	,
            'name_new' => 'FERLDA',
            'name_old' => 'Ferlda',
            'code' => '1606701008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>751	,
            'name_new' => 'GAMUTON',
            'name_old' => 'Gamuton',
            'code' => '1606701012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>752	,
            'name_new' => 'JULIO OUANO (POB.)',
            'name_old' => 'Julio Ouano (Pob.)',
            'code' => '1606701009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>753	,
            'name_new' => 'OMBONG',
            'name_old' => 'Ombong',
            'code' => '1606701005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>754	,
            'name_new' => 'POBLACION (ALEGRIA)',
            'name_old' => 'Poblacion',
            'code' => '1606701001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>755	,
            'name_new' => 'PONGTUD',
            'name_old' => 'Pongtud',
            'code' => '1606701006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>756	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1606701010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>757	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1606701007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>758	,
            'name_new' => 'CABUGAO',
            'name_old' => 'Cabugao',
            'code' => '1606702001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>759	,
            'name_new' => 'CAMBUAYON',
            'name_old' => 'Cambuayon',
            'code' => '1606702002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>760	,
            'name_new' => 'CAMPO',
            'name_old' => 'Campo',
            'code' => '1606702003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>761	,
            'name_new' => 'DUGSANGON',
            'name_old' => 'Dugsangon',
            'code' => '1606702004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>762	,
            'name_new' => 'PAUTAO',
            'name_old' => 'Pautao',
            'code' => '1606702005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>763	,
            'name_new' => 'PAYAPAG',
            'name_old' => 'Payapag',
            'code' => '1606702006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>764	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606702007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>765	,
            'name_new' => 'PUNGTOD',
            'name_old' => 'Pungtod',
            'code' => '1606702008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>766	,
            'name_new' => 'SANTO ROSARIO',
            'name_old' => 'Santo Rosario',
            'code' => '1606702009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>767	,
            'name_new' => 'BAYBAY',
            'name_old' => 'Baybay',
            'code' => '1606704001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>768	,
            'name_new' => 'BITAUG',
            'name_old' => 'Bitaug',
            'code' => '1606704002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>769	,
            'name_new' => 'MATIN-AO',
            'name_old' => 'Matin-ao',
            'code' => '1606704006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>770	,
            'name_new' => 'POBLACION 1',
            'name_old' => 'Poblacion 1',
            'code' => '1606704003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>771	,
            'name_new' => 'POBLACION 2',
            'name_old' => 'Poblacion 2',
            'code' => '1606704004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>772	,
            'name_new' => 'SAN MATEO',
            'name_old' => 'San Mateo',
            'code' => '1606704005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>773	,
            'name_new' => 'BAGAKAY (POB. WEST)',
            'name_old' => 'Bagakay',
            'code' => '1606706010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>774	,
            'name_new' => 'CABUGO',
            'name_old' => 'Cabugo',
            'code' => '1606706001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>775	,
            'name_new' => 'CAGDIANAO',
            'name_old' => 'Cagdianao',
            'code' => '1606706002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>776	,
            'name_new' => 'DAYWAN',
            'name_old' => 'Daywan',
            'code' => '1606706003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>777	,
            'name_new' => 'HAYANGGABON',
            'name_old' => 'Hayanggabon',
            'code' => '1606706004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>778	,
            'name_new' => 'LADGARON (POB.)',
            'name_old' => 'Ladgaron (Pob.)',
            'code' => '1606706005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>779	,
            'name_new' => 'LAPINIGAN',
            'name_old' => 'Lapinigan',
            'code' => '1606706006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>780	,
            'name_new' => 'MAGALLANES',
            'name_old' => 'Magallanes',
            'code' => '1606706007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>781	,
            'name_new' => 'PANATAO',
            'name_old' => 'Panatao',
            'code' => '1606706008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>782	,
            'name_new' => 'SAPA',
            'name_old' => 'Sapa',
            'code' => '1606706011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>783	,
            'name_new' => 'TAGANITO',
            'name_old' => 'Taganito',
            'code' => '1606706012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>784	,
            'name_new' => 'TAYAGA (POB. EAST)',
            'name_old' => 'Tayaga',
            'code' => '1606706009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>785	,
            'name_new' => 'URBIZTONDO',
            'name_old' => 'Urbiztondo',
            'code' => '1606706013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>786	,
            'name_new' => 'WANGKE',
            'name_old' => 'Wangke',
            'code' => '1606706014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>787	,
            'name_new' => 'BAGAKAY',
            'name_old' => 'Bagakay',
            'code' => '1606707001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>788	,
            'name_new' => 'BARANGAY 1 (POB.)',
            'name_old' => 'Barangay 1 (Pob.)',
            'code' => '1606707002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>789	,
            'name_new' => 'BARANGAY 10 (POB.)',
            'name_old' => 'Barangay 10 (Pob.)',
            'code' => '1606707014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>790	,
            'name_new' => 'BARANGAY 11 (POB.)',
            'name_old' => 'Barangay 11 (Pob.)',
            'code' => '1606707015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>791	,
            'name_new' => 'BARANGAY 12 (POB.)',
            'name_old' => 'Barangay 12 (Pob.)',
            'code' => '1606707016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>792	,
            'name_new' => 'BARANGAY 13 (POB.)',
            'name_old' => 'Barangay 13 (Pob.)',
            'code' => '1606707003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>793	,
            'name_new' => 'BARANGAY 2 (POB.)',
            'name_old' => 'Barangay 2 (Pob.)',
            'code' => '1606707017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>794	,
            'name_new' => 'BARANGAY 3 (POB.)',
            'name_old' => 'Barangay 3 (Pob.)',
            'code' => '1606707018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>795	,
            'name_new' => 'BARANGAY 4 (POB.)',
            'name_old' => 'Barangay 4 (Pob.)',
            'code' => '1606707019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>796	,
            'name_new' => 'BARANGAY 5 (POB.)',
            'name_old' => 'Barangay 5 (Pob.)',
            'code' => '1606707020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>797	,
            'name_new' => 'BARANGAY 6 (POB.)',
            'name_old' => 'Barangay 6 (Pob.)',
            'code' => '1606707021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>798	,
            'name_new' => 'BARANGAY 7 (POB.)',
            'name_old' => 'Barangay 7 (Pob.)',
            'code' => '1606707022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>799	,
            'name_new' => 'BARANGAY 8 (POB.)',
            'name_old' => 'Barangay 8 (Pob.)',
            'code' => '1606707023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>800	,
            'name_new' => 'BARANGAY 9 (POB.)',
            'name_old' => 'Barangay 9 (Pob.)',
            'code' => '1606707024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>801	,
            'name_new' => 'BUENAVISTA',
            'name_old' => 'Buenavista',
            'code' => '1606707004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>802	,
            'name_new' => 'CABAWA',
            'name_old' => 'Cabawa',
            'code' => '1606707005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>803	,
            'name_new' => 'CAMBAS-AC',
            'name_old' => 'Cambas-ac',
            'code' => '1606707006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>804	,
            'name_new' => 'CONSOLACION',
            'name_old' => 'Consolacion',
            'code' => '1606707007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>805	,
            'name_new' => 'CORREGIDOR',
            'name_old' => 'Corregidor',
            'code' => '1606707008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>806	,
            'name_new' => 'DAGOHOY',
            'name_old' => 'Dagohoy',
            'code' => '1606707009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>807	,
            'name_new' => 'DON PAULINO',
            'name_old' => 'Don Paulino',
            'code' => '1606707010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>808	,
            'name_new' => 'JUBANG',
            'name_old' => 'Jubang',
            'code' => '1606707011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>809	,
            'name_new' => 'MONTSERRAT',
            'name_old' => 'Montserrat',
            'code' => '1606707012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>810	,
            'name_new' => 'OSMEÑA',
            'name_old' => 'Osmeña',
            'code' => '1606707013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>811	,
            'name_new' => 'SAN CARLOS',
            'name_old' => 'San Carlos',
            'code' => '1606707025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>812	,
            'name_new' => 'SAN MIGUEL',
            'name_old' => 'San Miguel',
            'code' => '1606707026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>813	,
            'name_new' => 'SANTA FE',
            'name_old' => 'Santa Fe',
            'code' => '1606707027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>814	,
            'name_new' => 'SANTA FELOMINA',
            'name_old' => 'Santa Felomina',
            'code' => '1606707029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>815	,
            'name_new' => 'UNION',
            'name_old' => 'Union',
            'code' => '1606707028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>816	,
            'name_new' => 'ANTIPOLO',
            'name_old' => 'Antipolo',
            'code' => '1606708002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>817	,
            'name_new' => 'BAGAKAY (ALBURO)',
            'name_old' => 'Bagakay',
            'code' => '1606708001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>818	,
            'name_new' => 'BITOON',
            'name_old' => 'Bitoon',
            'code' => '1606708004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>819	,
            'name_new' => 'CABUGAO',
            'name_old' => 'Cabugao',
            'code' => '1606708006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>820	,
            'name_new' => 'CANCOHOY',
            'name_old' => 'Cancohoy',
            'code' => '1606708007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>821	,
            'name_new' => 'CAUB',
            'name_old' => 'Caub',
            'code' => '1606708008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>822	,
            'name_new' => 'DEL CARMEN (POB.)',
            'name_old' => 'Del Carmen (Pob.)',
            'code' => '1606708009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>823	,
            'name_new' => 'DOMOYOG',
            'name_old' => 'Domoyog',
            'code' => '1606708010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>824	,
            'name_new' => 'ESPERANZA',
            'name_old' => 'Esperanza',
            'code' => '1606708011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>825	,
            'name_new' => 'HALIAN',
            'name_old' => 'Halian',
            'code' => '1606708028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>826	,
            'name_new' => 'JAMOYAON',
            'name_old' => 'Jamoyaon',
            'code' => '1606708012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>827	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1606708013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>828	,
            'name_new' => 'LOBOGON',
            'name_old' => 'Lobogon',
            'code' => '1606708014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>829	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1606708016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>830	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1606708017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>831	,
            'name_new' => 'QUEZON',
            'name_old' => 'Quezon',
            'code' => '1606708019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>832	,
            'name_new' => 'SAN FERNANDO',
            'name_old' => 'San Fernando',
            'code' => '1606708021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>833	,
            'name_new' => 'SAN JOSE (POB.)',
            'name_old' => 'San Jose (Pob.)',
            'code' => '1606708022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>834	,
            'name_new' => 'SAYAK',
            'name_old' => 'Sayak',
            'code' => '1606708025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>835	,
            'name_new' => 'TUBORAN',
            'name_old' => 'Tuboran',
            'code' => '1606708027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>836	,
            'name_new' => 'ANAJAWAN',
            'name_old' => 'Anajawan',
            'code' => '1606710001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>837	,
            'name_new' => 'CABITOONAN',
            'name_old' => 'Cabitoonan',
            'code' => '1606710002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>838	,
            'name_new' => 'CATANGNAN',
            'name_old' => 'Catangnan',
            'code' => '1606710003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>839	,
            'name_new' => 'CONSUELO',
            'name_old' => 'Consuelo',
            'code' => '1606710004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>840	,
            'name_new' => 'CORAZON',
            'name_old' => 'Corazon',
            'code' => '1606710005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>841	,
            'name_new' => 'DAKU',
            'name_old' => 'Daku',
            'code' => '1606710006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>842	,
            'name_new' => 'LA JANUZA',
            'name_old' => 'La Januza',
            'code' => '1606710012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>843	,
            'name_new' => 'LIBERTAD',
            'name_old' => 'Libertad',
            'code' => '1606710013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>844	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1606710014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>845	,
            'name_new' => 'MALINAO',
            'name_old' => 'Malinao',
            'code' => '1606710015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>846	,
            'name_new' => 'POBLACION I (PUROK I)',
            'name_old' => 'Poblacion I',
            'code' => '1606710007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>847	,
            'name_new' => 'POBLACION II (PUROK II)',
            'name_old' => 'Poblacion II',
            'code' => '1606710008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>848	,
            'name_new' => 'POBLACION III (PUROK III)',
            'name_old' => 'Poblacion III',
            'code' => '1606710009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>849	,
            'name_new' => 'POBLACION IV (PUROK IV)',
            'name_old' => 'Poblacion IV',
            'code' => '1606710010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>850	,
            'name_new' => 'POBLACION V (PUROK V)',
            'name_old' => 'Poblacion V',
            'code' => '1606710011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>851	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606710017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>852	,
            'name_new' => 'SANTA FE',
            'name_old' => 'Santa Fe',
            'code' => '1606710018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>853	,
            'name_new' => 'SUYANGAN',
            'name_old' => 'Suyangan',
            'code' => '1606710019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>854	,
            'name_new' => 'TAWIN-TAWIN',
            'name_old' => 'Tawin-tawin',
            'code' => '1606710020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>855	,
            'name_new' => 'ALAMBIQUE (POB.)',
            'name_old' => 'Alambique (Pob.)',
            'code' => '1606711001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>856	,
            'name_new' => 'ANIBONGAN',
            'name_old' => 'Anibongan',
            'code' => '1606711002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>857	,
            'name_new' => 'CAMAM-ONAN',
            'name_old' => 'Camam-onan',
            'code' => '1606711003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>858	,
            'name_new' => 'CAM-BOAYON',
            'name_old' => 'Cam-boayon',
            'code' => '1606711004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>859	,
            'name_new' => 'IPIL (POB.)',
            'name_old' => 'Ipil (Pob.)',
            'code' => '1606711005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>860	,
            'name_new' => 'LAHI',
            'name_old' => 'Lahi',
            'code' => '1606711006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>861	,
            'name_new' => 'MAHANUB',
            'name_old' => 'Mahanub',
            'code' => '1606711007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>862	,
            'name_new' => 'PONIENTE',
            'name_old' => 'Poniente',
            'code' => '1606711008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>863	,
            'name_new' => 'SAN ANTONIO (BONOT)',
            'name_old' => 'San Antonio',
            'code' => '1606711009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>864	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606711010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>865	,
            'name_new' => 'SICO-SICO',
            'name_old' => 'Sico-sico',
            'code' => '1606711011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>866	,
            'name_new' => 'VILLAFLOR',
            'name_old' => 'Villaflor',
            'code' => '1606711012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>867	,
            'name_new' => 'VILLAFRANCA',
            'name_old' => 'Villafranca',
            'code' => '1606711013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>868	,
            'name_new' => 'BINGA',
            'name_old' => 'Binga',
            'code' => '1606714001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>869	,
            'name_new' => 'BOBONA-ON',
            'name_old' => 'Bobona-on',
            'code' => '1606714002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>870	,
            'name_new' => 'CANTUGAS',
            'name_old' => 'Cantugas',
            'code' => '1606714003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>871	,
            'name_new' => 'DAYANO',
            'name_old' => 'Dayano',
            'code' => '1606714004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>872	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1606714005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>873	,
            'name_new' => 'MAGPAYANG',
            'name_old' => 'Magpayang',
            'code' => '1606714006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>874	,
            'name_new' => 'MAGSAYSAY (POB.)',
            'name_old' => 'Magsaysay (Pob.)',
            'code' => '1606714007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>875	,
            'name_new' => 'MANSAYAO',
            'name_old' => 'Mansayao',
            'code' => '1606714009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>876	,
            'name_new' => 'MARAYAG',
            'name_old' => 'Marayag',
            'code' => '1606714010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>877	,
            'name_new' => 'MATIN-AO',
            'name_old' => 'Matin-ao',
            'code' => '1606714011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>878	,
            'name_new' => 'PACO',
            'name_old' => 'Paco',
            'code' => '1606714012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>879	,
            'name_new' => 'QUEZON (POB.)',
            'name_old' => 'Quezon (Pob.)',
            'code' => '1606714013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>880	,
            'name_new' => 'ROXAS',
            'name_old' => 'Roxas',
            'code' => '1606714014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>881	,
            'name_new' => 'SAN FRANCISCO',
            'name_old' => 'San Francisco',
            'code' => '1606714015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>882	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606714016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>883	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1606714017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>884	,
            'name_new' => 'SIANA',
            'name_old' => 'Siana',
            'code' => '1606714018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>885	,
            'name_new' => 'SILOP',
            'name_old' => 'Silop',
            'code' => '1606714019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>886	,
            'name_new' => 'TAGBUYAWAN',
            'name_old' => 'Tagbuyawan',
            'code' => '1606714020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>887	,
            'name_new' => 'TAPI-AN',
            'name_old' => 'Tapi-an',
            'code' => '1606714021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>888	,
            'name_new' => 'TOLINGON',
            'name_old' => 'Tolingon',
            'code' => '1606714022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>889	,
            'name_new' => 'BUNYASAN',
            'name_old' => 'Bunyasan',
            'code' => '1606715002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>890	,
            'name_new' => 'CAGTINAE',
            'name_old' => 'Cagtinae',
            'code' => '1606715004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>891	,
            'name_new' => 'CAN-AGA',
            'name_old' => 'Can-aga',
            'code' => '1606715015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>892	,
            'name_new' => 'CANSAYONG',
            'name_old' => 'Cansayong',
            'code' => '1606715014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>893	,
            'name_new' => 'CANTAPOY',
            'name_old' => 'Cantapoy',
            'code' => '1606715003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>894	,
            'name_new' => 'CAYAWAN',
            'name_old' => 'Cayawan',
            'code' => '1606715005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>895	,
            'name_new' => 'DORO (BINOCARAN)',
            'name_old' => 'Doro',
            'code' => '1606715001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>896	,
            'name_new' => 'HANAGDONG',
            'name_old' => 'Hanagdong',
            'code' => '1606715007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>897	,
            'name_new' => 'KARIHATAG',
            'name_old' => 'Karihatag',
            'code' => '1606715008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>898	,
            'name_new' => 'MASGAD',
            'name_old' => 'Masgad',
            'code' => '1606715009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>899	,
            'name_new' => 'PILI',
            'name_old' => 'Pili',
            'code' => '1606715010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>900	,
            'name_new' => 'SAN ISIDRO (POB.)',
            'name_old' => 'San Isidro (Pob.)',
            'code' => '1606715012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>901	,
            'name_new' => 'TINAGO',
            'name_old' => 'Tinago',
            'code' => '1606715013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>902	,
            'name_new' => 'VILLARIZA',
            'name_old' => 'Villariza',
            'code' => '1606715016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>903	,
            'name_new' => 'ASINAN (POB.)',
            'name_old' => 'Asinan (Pob.)',
            'code' => '1606716008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>904	,
            'name_new' => 'CARIDAD',
            'name_old' => 'Caridad',
            'code' => '1606716001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>905	,
            'name_new' => 'CENTRO (POB.)',
            'name_old' => 'Centro (Pob.)',
            'code' => '1606716009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>906	,
            'name_new' => 'CONSOLACION',
            'name_old' => 'Consolacion',
            'code' => '1606716012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>907	,
            'name_new' => 'DATU',
            'name_old' => 'Datu',
            'code' => '1606716013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>908	,
            'name_new' => 'DAYAOHAY',
            'name_old' => 'Dayaohay',
            'code' => '1606716014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>909	,
            'name_new' => 'JABOY',
            'name_old' => 'Jaboy',
            'code' => '1606716015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>910	,
            'name_new' => 'KATIPUNAN',
            'name_old' => 'Katipunan',
            'code' => '1606716002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>911	,
            'name_new' => 'MAASIN',
            'name_old' => 'Maasin',
            'code' => '1606716003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>912	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1606716004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>913	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1606716005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>914	,
            'name_new' => 'PILARING (POB.)',
            'name_old' => 'Pilaring (Pob.)',
            'code' => '1606716010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>915	,
            'name_new' => 'PUNTA (POB.)',
            'name_old' => 'Punta (Pob.)',
            'code' => '1606716011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>916	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1606716006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>917	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606716007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>918	,
            'name_new' => 'AMOSLOG',
            'name_old' => 'Amoslog',
            'code' => '1606717002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>919	,
            'name_new' => 'ANISLAGAN',
            'name_old' => 'Anislagan',
            'code' => '1606717003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>920	,
            'name_new' => 'BAD-AS',
            'name_old' => 'Bad-as',
            'code' => '1606717004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>921	,
            'name_new' => 'BOYONGAN',
            'name_old' => 'Boyongan',
            'code' => '1606717005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>922	,
            'name_new' => 'BUGAS-BUGAS',
            'name_old' => 'Bugas-bugas',
            'code' => '1606717006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>923	,
            'name_new' => 'CENTRAL (POB.)',
            'name_old' => 'Central (Pob.)',
            'code' => '1606717007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>924	,
            'name_new' => 'ELLAPERAL (NONOK)',
            'name_old' => 'Ellaperal',
            'code' => '1606717008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>925	,
            'name_new' => 'IPIL (POB.)',
            'name_old' => 'Ipil (Pob.)',
            'code' => '1606717009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>926	,
            'name_new' => 'LAKANDULA',
            'name_old' => 'Lakandula',
            'code' => '1606717010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>927	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1606717011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>928	,
            'name_new' => 'MACALAYA',
            'name_old' => 'Macalaya',
            'code' => '1606717012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>929	,
            'name_new' => 'MAGSAYSAY (POB.)',
            'name_old' => 'Magsaysay (Pob.)',
            'code' => '1606717013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>930	,
            'name_new' => 'MAGUPANGE',
            'name_old' => 'Magupange',
            'code' => '1606717014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>931	,
            'name_new' => 'PANANAY-AN',
            'name_old' => 'Pananay-an',
            'code' => '1606717015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>932	,
            'name_new' => 'PANHUTONGAN',
            'name_old' => 'Panhutongan',
            'code' => '1606717016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>933	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606717017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>934	,
            'name_new' => 'SANI-SANI',
            'name_old' => 'Sani-sani',
            'code' => '1606717021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>935	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606717018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>936	,
            'name_new' => 'SUYOC',
            'name_old' => 'Suyoc',
            'code' => '1606717019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>937	,
            'name_new' => 'TAGBONGABONG',
            'name_old' => 'Tagbongabong',
            'code' => '1606717020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>938	,
            'name_new' => 'BONGDO',
            'name_old' => 'Bongdo',
            'code' => '1606718001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>939	,
            'name_new' => 'MARIBOJOC',
            'name_old' => 'Maribojoc',
            'code' => '1606718002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>940	,
            'name_new' => 'NUEVO CAMPO',
            'name_old' => 'Nuevo Campo',
            'code' => '1606718003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>941	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1606718005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>942	,
            'name_new' => 'SANTA CRUZ (POB.)',
            'name_old' => 'Santa Cruz (Pob.)',
            'code' => '1606718006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>943	,
            'name_new' => 'TALISAY (POB.)',
            'name_old' => 'Talisay (Pob.)',
            'code' => '1606718007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>944	,
            'name_new' => 'AMONTAY',
            'name_old' => 'Amontay',
            'code' => '1606719001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>945	,
            'name_new' => 'BALITE',
            'name_old' => 'Balite',
            'code' => '1606719002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>946	,
            'name_new' => 'BANBANON',
            'name_old' => 'Banbanon',
            'code' => '1606719003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>947	,
            'name_new' => 'DIAZ',
            'name_old' => 'Diaz',
            'code' => '1606719004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>948	,
            'name_new' => 'HONRADO',
            'name_old' => 'Honrado',
            'code' => '1606719005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>949	,
            'name_new' => 'JUBGAN',
            'name_old' => 'Jubgan',
            'code' => '1606719006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>950	,
            'name_new' => 'LINONGGANAN',
            'name_old' => 'Linongganan',
            'code' => '1606719007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>951	,
            'name_new' => 'MACOPA',
            'name_old' => 'Macopa',
            'code' => '1606719008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>952	,
            'name_new' => 'MAGTANGALE',
            'name_old' => 'Magtangale',
            'code' => '1606719009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>953	,
            'name_new' => 'OSLAO',
            'name_old' => 'Oslao',
            'code' => '1606719010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>954	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606719011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>955	,
            'name_new' => 'BUHING CALIPAY',
            'name_old' => 'Buhing Calipay',
            'code' => '1606720001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>956	,
            'name_new' => 'DEL CARMEN (POB.)',
            'name_old' => 'Del Carmen (Pob.)',
            'code' => '1606720002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>957	,
            'name_new' => 'DEL PILAR',
            'name_old' => 'Del Pilar',
            'code' => '1606720003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>958	,
            'name_new' => 'MACAPAGAL',
            'name_old' => 'Macapagal',
            'code' => '1606720004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>959	,
            'name_new' => 'PACIFICO',
            'name_old' => 'Pacifico',
            'code' => '1606720006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>960	,
            'name_new' => 'PELAEZ',
            'name_old' => 'Pelaez',
            'code' => '1606720007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>961	,
            'name_new' => 'ROXAS',
            'name_old' => 'Roxas',
            'code' => '1606720008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>962	,
            'name_new' => 'SAN MIGUEL',
            'name_old' => 'San Miguel',
            'code' => '1606720009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>963	,
            'name_new' => 'SANTA PAZ',
            'name_old' => 'Santa Paz',
            'code' => '1606720010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>964	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1606720011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>965	,
            'name_new' => 'TAMBACAN',
            'name_old' => 'Tambacan',
            'code' => '1606720012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>966	,
            'name_new' => 'TIGASAO',
            'name_old' => 'Tigasao',
            'code' => '1606720013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>967	,
            'name_new' => 'ABAD SANTOS',
            'name_old' => 'Abad Santos',
            'code' => '1606721001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>968	,
            'name_new' => 'ALEGRIA',
            'name_old' => 'Alegria',
            'code' => '1606721002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>969	,
            'name_new' => 'BAILAN',
            'name_old' => 'Bailan',
            'code' => '1606721004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>970	,
            'name_new' => 'GARCIA',
            'name_old' => 'Garcia',
            'code' => '1606721005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>971	,
            'name_new' => 'LIBERTAD',
            'name_old' => 'Libertad',
            'code' => '1606721006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>972	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1606721007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>973	,
            'name_new' => 'MABUHAY (POB.)',
            'name_old' => 'Mabuhay (Pob.)',
            'code' => '1606721008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>974	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1606721009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>975	,
            'name_new' => 'RIZAL',
            'name_old' => 'Rizal',
            'code' => '1606721010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>976	,
            'name_new' => 'T. ARLAN (POB.)',
            'name_old' => 'T. Arlan (Pob.)',
            'code' => '1606721003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>977	,
            'name_new' => 'TANGBO',
            'name_old' => 'Tangbo',
            'code' => '1606721012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>978	,
            'name_new' => 'BIYABID',
            'name_old' => 'Biyabid',
            'code' => '1606722001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>979	,
            'name_new' => 'GACEPAN',
            'name_old' => 'Gacepan',
            'code' => '1606722003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>980	,
            'name_new' => 'IMA',
            'name_old' => 'Ima',
            'code' => '1606722004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>981	,
            'name_new' => 'LOWER PATAG',
            'name_old' => 'Lower Patag',
            'code' => '1606722005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>982	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1606722006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>983	,
            'name_new' => 'MAYAG',
            'name_old' => 'Mayag',
            'code' => '1606722007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>984	,
            'name_new' => 'POBLACION (SAN PEDRO)',
            'name_old' => 'Poblacion',
            'code' => '1606722008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>985	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606722009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>986	,
            'name_new' => 'SAN PABLO',
            'name_old' => 'San Pablo',
            'code' => '1606722010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>987	,
            'name_new' => 'TAGBAYANI',
            'name_old' => 'Tagbayani',
            'code' => '1606722011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>988	,
            'name_new' => 'TINOGPAHAN',
            'name_old' => 'Tinogpahan',
            'code' => '1606722012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>989	,
            'name_new' => 'UPPER PATAG',
            'name_old' => 'Upper Patag',
            'code' => '1606722013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>990	,
            'name_new' => 'ALBINO TARUC',
            'name_old' => 'Albino Taruc',
            'code' => '1606723014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>991	,
            'name_new' => 'DEL PILAR',
            'name_old' => 'Del Pilar',
            'code' => '1606723001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>992	,
            'name_new' => 'HELENE',
            'name_old' => 'Helene',
            'code' => '1606723002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>993	,
            'name_new' => 'HONRADO',
            'name_old' => 'Honrado',
            'code' => '1606723003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>994	,
            'name_new' => 'NAVARRO (POB.)',
            'name_old' => 'Navarro (Pob.)',
            'code' => '1606723004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>995	,
            'name_new' => 'NUEVA ESTRELLA',
            'name_old' => 'Nueva Estrella',
            'code' => '1606723005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>996	,
            'name_new' => 'PAMOSAINGAN',
            'name_old' => 'Pamosaingan',
            'code' => '1606723006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>997	,
            'name_new' => 'RIZAL (POB.)',
            'name_old' => 'Rizal (Pob.)',
            'code' => '1606723007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>998	,
            'name_new' => 'SALOG',
            'name_old' => 'Salog',
            'code' => '1606723008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>999	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606723009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1000	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606723010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1001	,
            'name_new' => 'SERING',
            'name_old' => 'Sering',
            'code' => '1606723011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1002	,
            'name_new' => 'SONGKOY',
            'name_old' => 'Songkoy',
            'code' => '1606723012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1003	,
            'name_new' => 'SUDLON',
            'name_old' => 'Sudlon',
            'code' => '1606723013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1004	,
            'name_new' => 'ALANG-ALANG',
            'name_old' => 'Alang-alang',
            'code' => '1606724001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1005	,
            'name_new' => 'ALEGRIA',
            'name_old' => 'Alegria',
            'code' => '1606724002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1006	,
            'name_new' => 'ANOMAR',
            'name_old' => 'Anomar',
            'code' => '1606724003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1007	,
            'name_new' => 'AURORA',
            'name_old' => 'Aurora',
            'code' => '1606724004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1008	,
            'name_new' => 'BALIBAYON',
            'name_old' => 'Balibayon',
            'code' => '1606724006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1009	,
            'name_new' => 'BAYBAY',
            'name_old' => 'Baybay',
            'code' => '1606724007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1010	,
            'name_new' => 'BILABID',
            'name_old' => 'Bilabid',
            'code' => '1606724008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1011	,
            'name_new' => 'BITAUGAN',
            'name_old' => 'Bitaugan',
            'code' => '1606724010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1012	,
            'name_new' => 'BONIFACIO',
            'name_old' => 'Bonifacio',
            'code' => '1606724011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1013	,
            'name_new' => 'BUENAVISTA',
            'name_old' => 'Buenavista',
            'code' => '1606724012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1014	,
            'name_new' => 'CABONGBONGAN',
            'name_old' => 'Cabongbongan',
            'code' => '1606724013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1015	,
            'name_new' => 'CAGNIOG',
            'name_old' => 'Cagniog',
            'code' => '1606724014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1016	,
            'name_new' => 'CAGUTSAN',
            'name_old' => 'Cagutsan',
            'code' => '1606724015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1017	,
            'name_new' => 'CANLANIPA',
            'name_old' => 'Canlanipa',
            'code' => '1606724096',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1018	,
            'name_new' => 'CANTIASAY',
            'name_old' => 'Cantiasay',
            'code' => '1606724016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1019	,
            'name_new' => 'CAPALAYAN',
            'name_old' => 'Capalayan',
            'code' => '1606724017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1020	,
            'name_new' => 'CATADMAN',
            'name_old' => 'Catadman',
            'code' => '1606724018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1021	,
            'name_new' => 'DANAO',
            'name_old' => 'Danao',
            'code' => '1606724019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1022	,
            'name_new' => 'DANAWAN',
            'name_old' => 'Danawan',
            'code' => '1606724020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1023	,
            'name_new' => 'DAY-ASAN',
            'name_old' => 'Day-asan',
            'code' => '1606724021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1024	,
            'name_new' => 'IPIL',
            'name_old' => 'Ipil',
            'code' => '1606724022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1025	,
            'name_new' => 'LIBUAC',
            'name_old' => 'Libuac',
            'code' => '1606724023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1026	,
            'name_new' => 'LIPATA',
            'name_old' => 'Lipata',
            'code' => '1606724024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1027	,
            'name_new' => 'LISONDRA',
            'name_old' => 'Lisondra',
            'code' => '1606724025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1028	,
            'name_new' => 'LUNA',
            'name_old' => 'Luna',
            'code' => '1606724026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1029	,
            'name_new' => 'MABINI',
            'name_old' => 'Mabini',
            'code' => '1606724027',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1030	,
            'name_new' => 'MABUA',
            'name_old' => 'Mabua',
            'code' => '1606724028',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1031	,
            'name_new' => 'MANYAGAO',
            'name_old' => 'Manyagao',
            'code' => '1606724029',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1032	,
            'name_new' => 'MAPAWA',
            'name_old' => 'Mapawa',
            'code' => '1606724030',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1033	,
            'name_new' => 'MAT-I',
            'name_old' => 'Mat-i',
            'code' => '1606724031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1034	,
            'name_new' => 'NABAGO',
            'name_old' => 'Nabago',
            'code' => '1606724032',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1035	,
            'name_new' => 'NONOC',
            'name_old' => 'Nonoc',
            'code' => '1606724033',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1036	,
            'name_new' => 'OROK',
            'name_old' => 'Orok',
            'code' => '1606724067',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1037	,
            'name_new' => 'POCTOY',
            'name_old' => 'Poctoy',
            'code' => '1606724034',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1038	,
            'name_new' => 'PUNTA BILAR',
            'name_old' => 'Punta Bilar',
            'code' => '1606724035',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1039	,
            'name_new' => 'QUEZON',
            'name_old' => 'Quezon',
            'code' => '1606724036',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1040	,
            'name_new' => 'RIZAL',
            'name_old' => 'Rizal',
            'code' => '1606724037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1041	,
            'name_new' => 'SABANG',
            'name_old' => 'Sabang',
            'code' => '1606724038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1042	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606724039',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1043	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1606724040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1044	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1606724041',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1045	,
            'name_new' => 'SAN PEDRO (HANIGAD)',
            'name_old' => 'San Pedro',
            'code' => '1606724042',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1046	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606724043',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1047	,
            'name_new' => 'SEMA (BAD-ASAY)',
            'name_old' => 'Serna',
            'code' => '1606724005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1048	,
            'name_new' => 'SIDLAKAN',
            'name_old' => 'Sidlakan',
            'code' => '1606724044',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1049	,
            'name_new' => 'SILOP',
            'name_old' => 'Silop',
            'code' => '1606724045',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1050	,
            'name_new' => 'SUGBAY',
            'name_old' => 'Sugbay',
            'code' => '1606724046',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1051	,
            'name_new' => 'SUKAILANG',
            'name_old' => 'Sukailang',
            'code' => '1606724047',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1052	,
            'name_new' => 'TAFT (POB.)',
            'name_old' => 'Taft (Pob.)',
            'code' => '1606724048',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1053	,
            'name_new' => 'TALISAY',
            'name_old' => 'Talisay',
            'code' => '1606724064',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1054	,
            'name_new' => 'TOGBONGON',
            'name_old' => 'Togbongon',
            'code' => '1606724065',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1055	,
            'name_new' => 'TRINIDAD',
            'name_old' => 'Trinidad',
            'code' => '1606724066',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1056	,
            'name_new' => 'WASHINGTON (POB.)',
            'name_old' => 'Washington (Pob.)',
            'code' => '1606724068',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1057	,
            'name_new' => 'ZARAGOZA',
            'name_old' => 'Zaragoza',
            'code' => '1606724095',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1058	,
            'name_new' => 'AURORA (POB.)',
            'name_old' => 'Aurora (Pob.)',
            'code' => '1606725001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1059	,
            'name_new' => 'AZUCENA (POB.)',
            'name_old' => 'Azucena (Pob.)',
            'code' => '1606725002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1060	,
            'name_new' => 'BANBAN',
            'name_old' => 'Banban',
            'code' => '1606725003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1061	,
            'name_new' => 'CAWILAN',
            'name_old' => 'Cawilan',
            'code' => '1606725004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1062	,
            'name_new' => 'FABIO',
            'name_old' => 'Fabio',
            'code' => '1606725005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1063	,
            'name_new' => 'HIMAMAUG',
            'name_old' => 'Himamaug',
            'code' => '1606725007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1064	,
            'name_new' => 'LAUREL',
            'name_old' => 'Laurel',
            'code' => '1606725008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1065	,
            'name_new' => 'LOWER LIBAS',
            'name_old' => 'Lower Libas',
            'code' => '1606725009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1066	,
            'name_new' => 'OPONG',
            'name_old' => 'Opong',
            'code' => '1606725010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1067	,
            'name_new' => 'PATINO',
            'name_old' => 'Patino',
            'code' => '1606725015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1068	,
            'name_new' => 'SAMPAGUITA (POB.)',
            'name_old' => 'Sampaguita (Pob.)',
            'code' => '1606725011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1069	,
            'name_new' => 'TALAVERA',
            'name_old' => 'Talavera',
            'code' => '1606725012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1070	,
            'name_new' => 'UNION',
            'name_old' => 'Union',
            'code' => '1606725013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1071	,
            'name_new' => 'UPPER LIBAS',
            'name_old' => 'Upper Libas',
            'code' => '1606725014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1072	,
            'name_new' => 'CAPAYAHAN',
            'name_old' => 'Capayahan',
            'code' => '1606727001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1073	,
            'name_new' => 'CAWILAN',
            'name_old' => 'Cawilan',
            'code' => '1606727002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1074	,
            'name_new' => 'DEL ROSARIO',
            'name_old' => 'Del Rosario',
            'code' => '1606727003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1075	,
            'name_new' => 'MARGA',
            'name_old' => 'Marga',
            'code' => '1606727004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1076	,
            'name_new' => 'MOTORPOOL',
            'name_old' => 'Motorpool',
            'code' => '1606727005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1077	,
            'name_new' => 'POBLACION (TUBOD)',
            'name_old' => 'Poblacion',
            'code' => '1606727006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1078	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606727007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1079	,
            'name_new' => 'SAN PABLO',
            'name_old' => 'San Pablo',
            'code' => '1606727009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1080	,
            'name_new' => 'TIMAMANA',
            'name_old' => 'Timamana',
            'code' => '1606727008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1081	,
            'name_new' => 'AMAGA',
            'name_old' => 'Amaga',
            'code' => '1606801001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1082	,
            'name_new' => 'BAHI',
            'name_old' => 'Bahi',
            'code' => '1606801002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1083	,
            'name_new' => 'CABACUNGAN',
            'name_old' => 'Cabacungan',
            'code' => '1606801003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1084	,
            'name_new' => 'CAMBAGANG',
            'name_old' => 'Cambagang',
            'code' => '1606801005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1085	,
            'name_new' => 'CAUSWAGAN',
            'name_old' => 'Causwagan',
            'code' => '1606801006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1086	,
            'name_new' => 'DAPDAP',
            'name_old' => 'Dapdap',
            'code' => '1606801007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1087	,
            'name_new' => 'DUGHAN',
            'name_old' => 'Dughan',
            'code' => '1606801008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1088	,
            'name_new' => 'GAMUT',
            'name_old' => 'Gamut',
            'code' => '1606801009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1089	,
            'name_new' => 'JAVIER',
            'name_old' => 'Javier',
            'code' => '1606801010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1090	,
            'name_new' => 'KINAYAN',
            'name_old' => 'Kinayan',
            'code' => '1606801011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1091	,
            'name_new' => 'MAMIS',
            'name_old' => 'Mamis',
            'code' => '1606801013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1092	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606801015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1093	,
            'name_new' => 'RIZAL',
            'name_old' => 'Rizal',
            'code' => '1606801016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1094	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1606801017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1095	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606801025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1096	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1606801019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1097	,
            'name_new' => 'SUA',
            'name_old' => 'Sua',
            'code' => '1606801020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1098	,
            'name_new' => 'SUDLON',
            'name_old' => 'Sudlon',
            'code' => '1606801021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1099	,
            'name_new' => 'TAMBIS',
            'name_old' => 'Tambis',
            'code' => '1606801026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1100	,
            'name_new' => 'UNIDAD',
            'name_old' => 'Unidad',
            'code' => '1606801023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1101	,
            'name_new' => 'WAKAT',
            'name_old' => 'Wakat',
            'code' => '1606801024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1102	,
            'name_new' => 'AMAG',
            'name_old' => 'Amag',
            'code' => '1606802001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1103	,
            'name_new' => 'BALETE (POB.)',
            'name_old' => 'Balete (Pob.)',
            'code' => '1606802002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1104	,
            'name_new' => 'CABUGO',
            'name_old' => 'Cabugo',
            'code' => '1606802003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1105	,
            'name_new' => 'CAGBAOTO',
            'name_old' => 'Cagbaoto',
            'code' => '1606802004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1106	,
            'name_new' => 'LA PAZ',
            'name_old' => 'La Paz',
            'code' => '1606802005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1107	,
            'name_new' => 'MAGOBAWOK',
            'name_old' => 'Magobawok',
            'code' => '1606802006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1108	,
            'name_new' => 'PANAOSAWON',
            'name_old' => 'Panaosawon',
            'code' => '1606802007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1109	,
            'name_new' => 'ARAS-ASAN',
            'name_old' => 'Aras-Asan',
            'code' => '1606804001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1110	,
            'name_new' => 'BACOLOD',
            'name_old' => 'Bacolod',
            'code' => '1606804002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1111	,
            'name_new' => 'BITAUGAN EAST',
            'name_old' => 'Bitaugan East',
            'code' => '1606804003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1112	,
            'name_new' => 'BITAUGAN WEST',
            'name_old' => 'Bitaugan West',
            'code' => '1606804004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1113	,
            'name_new' => 'LA PURISIMA (PALHE)',
            'name_old' => 'La Purisima',
            'code' => '1606804008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1114	,
            'name_new' => 'LACTUDAN',
            'name_old' => 'Lactudan',
            'code' => '1606804006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1115	,
            'name_new' => 'MAT-E',
            'name_old' => 'Mat-e',
            'code' => '1606804007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1116	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606804009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1117	,
            'name_new' => 'TAWAGAN',
            'name_old' => 'Tawagan',
            'code' => '1606804005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1118	,
            'name_new' => 'TUBO-TUBO',
            'name_old' => 'Tubo-tubo',
            'code' => '1606804012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1119	,
            'name_new' => 'UNIDAD',
            'name_old' => 'Unidad',
            'code' => '1606804011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1120	,
            'name_new' => 'BUGSUKAN',
            'name_old' => 'Bugsukan',
            'code' => '1606805002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1121	,
            'name_new' => 'BUNTALID',
            'name_old' => 'Buntalid',
            'code' => '1606805003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1122	,
            'name_new' => 'CABANGAHAN',
            'name_old' => 'Cabangahan',
            'code' => '1606805004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1123	,
            'name_new' => 'CABAS-AN',
            'name_old' => 'Cabas-an',
            'code' => '1606805005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1124	,
            'name_new' => 'CALAGDAAN',
            'name_old' => 'Calagdaan',
            'code' => '1606805006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1125	,
            'name_new' => 'CONSUELO',
            'name_old' => 'Consuelo',
            'code' => '1606805007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1126	,
            'name_new' => 'GENERAL ISLAND',
            'name_old' => 'General Island',
            'code' => '1606805008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1127	,
            'name_new' => 'LININTI-AN (POB.)',
            'name_old' => 'Lininti-an (Pob.)',
            'code' => '1606805009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1128	,
            'name_new' => 'LOBO',
            'name_old' => 'Lobo',
            'code' => '1606805017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1129	,
            'name_new' => 'MAGASANG',
            'name_old' => 'Magasang',
            'code' => '1606805010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1130	,
            'name_new' => 'MAGOSILOM (POB.)',
            'name_old' => 'Magosilom (Pob.)',
            'code' => '1606805011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1131	,
            'name_new' => 'PAG-ANTAYAN',
            'name_old' => 'Pag-Antayan',
            'code' => '1606805012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1132	,
            'name_new' => 'PALASAO',
            'name_old' => 'Palasao',
            'code' => '1606805013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1133	,
            'name_new' => 'PARANG',
            'name_old' => 'Parang',
            'code' => '1606805014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1134	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1606805018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1135	,
            'name_new' => 'TAPI',
            'name_old' => 'Tapi',
            'code' => '1606805015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1136	,
            'name_new' => 'TIGABONG',
            'name_old' => 'Tigabong',
            'code' => '1606805016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1137	,
            'name_new' => 'ANTAO',
            'name_old' => 'Antao',
            'code' => '1606806001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1138	,
            'name_new' => 'CANCAVAN',
            'name_old' => 'Cancavan',
            'code' => '1606806002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1139	,
            'name_new' => 'CARMEN (POB.)',
            'name_old' => 'Carmen (Pob.)',
            'code' => '1606806003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1140	,
            'name_new' => 'ESPERANZA',
            'name_old' => 'Esperanza',
            'code' => '1606806004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1141	,
            'name_new' => 'HINAPOYAN',
            'name_old' => 'Hinapoyan',
            'code' => '1606806008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1142	,
            'name_new' => 'PUYAT',
            'name_old' => 'Puyat',
            'code' => '1606806005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1143	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1606806006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1144	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606806007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1145	,
            'name_new' => 'ADLAY',
            'name_old' => 'Adlay',
            'code' => '1606807001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1146	,
            'name_new' => 'BABUYAN',
            'name_old' => 'Babuyan',
            'code' => '1606807002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1147	,
            'name_new' => 'BACOLOD',
            'name_old' => 'Bacolod',
            'code' => '1606807003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1148	,
            'name_new' => 'BAYBAY (POB.)',
            'name_old' => 'Baybay (Pob.)',
            'code' => '1606807004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1149	,
            'name_new' => 'BON-OT',
            'name_old' => 'Bon-ot',
            'code' => '1606807005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1150	,
            'name_new' => 'CAGLAYAG',
            'name_old' => 'Caglayag',
            'code' => '1606807006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1151	,
            'name_new' => 'DAHICAN',
            'name_old' => 'Dahican',
            'code' => '1606807007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1152	,
            'name_new' => 'DOYOS (POB.)',
            'name_old' => 'Doyos (Pob.)',
            'code' => '1606807008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1153	,
            'name_new' => 'EMBARCADERO (POB.)',
            'name_old' => 'Embarcadero (Pob.)',
            'code' => '1606807009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1154	,
            'name_new' => 'GAMUTON',
            'name_old' => 'Gamuton',
            'code' => '1606807010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1155	,
            'name_new' => 'PANIKIAN',
            'name_old' => 'Panikian',
            'code' => '1606807011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1156	,
            'name_new' => 'PANTUKAN',
            'name_old' => 'Pantukan',
            'code' => '1606807012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1157	,
            'name_new' => 'SACA (POB.)',
            'name_old' => 'Saca (Pob.)',
            'code' => '1606807013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1158	,
            'name_new' => 'TAG-ANITO',
            'name_old' => 'Tag-Anito',
            'code' => '1606807014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1159	,
            'name_new' => 'BUCTO',
            'name_old' => 'Bucto',
            'code' => '1606803002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1160	,
            'name_new' => 'BURBOANAN',
            'name_old' => 'Burboanan',
            'code' => '1606803003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1161	,
            'name_new' => 'CAGUYAO',
            'name_old' => 'Caguyao',
            'code' => '1606803005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1162	,
            'name_new' => 'COLETO',
            'name_old' => 'Coleto',
            'code' => '1606803006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1163	,
            'name_new' => 'COMAWAS',
            'name_old' => 'Comawas',
            'code' => '1606803025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1164	,
            'name_new' => 'KAHAYAG',
            'name_old' => 'Kahayag',
            'code' => '1606803023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1165	,
            'name_new' => 'LABISMA',
            'name_old' => 'Labisma',
            'code' => '1606803007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1166	,
            'name_new' => 'LAWIGAN',
            'name_old' => 'Lawigan',
            'code' => '1606803008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1167	,
            'name_new' => 'MAHARLIKA',
            'name_old' => 'Maharlika',
            'code' => '1606803024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1168	,
            'name_new' => 'MANGAGOY',
            'name_old' => 'Mangagoy',
            'code' => '1606803009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1169	,
            'name_new' => 'MONE',
            'name_old' => 'Mone',
            'code' => '1606803010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1170	,
            'name_new' => 'PAMANLINAN',
            'name_old' => 'Pamanlinan',
            'code' => '1606803022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1171	,
            'name_new' => 'PAMAYPAYAN',
            'name_old' => 'Pamaypayan',
            'code' => '1606803011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1172	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606803012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1173	,
            'name_new' => 'SAN ANTONIO',
            'name_old' => 'San Antonio',
            'code' => '1606803013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1174	,
            'name_new' => 'SAN FERNANDO',
            'name_old' => 'San Fernando',
            'code' => '1606803014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1175	,
            'name_new' => 'SAN ISIDRO (BAGNAN)',
            'name_old' => 'San Isidro',
            'code' => '1606803015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1176	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1606803016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1177	,
            'name_new' => 'SAN ROQUE (CADANGLASAN)',
            'name_old' => 'San Roque',
            'code' => '1606803004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1178	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1606803017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1179	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606803018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1180	,
            'name_new' => 'SIBAROY',
            'name_old' => 'Sibaroy',
            'code' => '1606803019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1181	,
            'name_new' => 'TABON',
            'name_old' => 'Tabon',
            'code' => '1606803020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1182	,
            'name_new' => 'TUMANAN',
            'name_old' => 'Tumanan',
            'code' => '1606803021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1183	,
            'name_new' => 'AWASIAN',
            'name_old' => 'Awasian',
            'code' => '1606819001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1184	,
            'name_new' => 'BAGONG LUNGSOD (POB.)',
            'name_old' => 'Bagong Lungsod (Pob.)',
            'code' => '1606819002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1185	,
            'name_new' => 'BIOTO',
            'name_old' => 'Bioto',
            'code' => '1606819003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1186	,
            'name_new' => 'BONGTOD POB. (EAST WEST)',
            'name_old' => 'Bongtod Pob.',
            'code' => '1606819005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1187	,
            'name_new' => 'BUENAVISTA',
            'name_old' => 'Buenavista',
            'code' => '1606819004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1188	,
            'name_new' => 'DAGOCDOC (POB.)',
            'name_old' => 'Dagocdoc (Pob.)',
            'code' => '1606819006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1189	,
            'name_new' => 'MABUA',
            'name_old' => 'Mabua',
            'code' => '1606819008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1190	,
            'name_new' => 'MABUHAY',
            'name_old' => 'Mabuhay',
            'code' => '1606819009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1191	,
            'name_new' => 'MAITUM',
            'name_old' => 'Maitum',
            'code' => '1606819010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1192	,
            'name_new' => 'MATICDUM',
            'name_old' => 'Maticdum',
            'code' => '1606819011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1193	,
            'name_new' => 'PANDANON',
            'name_old' => 'Pandanon',
            'code' => '1606819012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1194	,
            'name_new' => 'PANGI',
            'name_old' => 'Pangi',
            'code' => '1606819013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1195	,
            'name_new' => 'QUEZON',
            'name_old' => 'Quezon',
            'code' => '1606819014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1196	,
            'name_new' => 'ROSARIO',
            'name_old' => 'Rosario',
            'code' => '1606819015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1197	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1606819016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1198	,
            'name_new' => 'SAN AGUSTIN NORTE',
            'name_old' => 'San Agustin Norte',
            'code' => '1606819017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1199	,
            'name_new' => 'SAN AGUSTIN SUR',
            'name_old' => 'San Agustin Sur',
            'code' => '1606819018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1200	,
            'name_new' => 'SAN ANTONIO',
            'name_old' => 'San Antonio',
            'code' => '1606819019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1201	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606819020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1202	,
            'name_new' => 'SAN JOSE',
            'name_old' => 'San Jose',
            'code' => '1606819021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1203	,
            'name_new' => 'TELAJE',
            'name_old' => 'Telaje',
            'code' => '1606819022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1204	,
            'name_new' => 'BALIBADON',
            'name_old' => 'Balibadon',
            'code' => '1606808001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1205	,
            'name_new' => 'BURGOS',
            'name_old' => 'Burgos',
            'code' => '1606808002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1206	,
            'name_new' => 'CAPANDAN',
            'name_old' => 'Capandan',
            'code' => '1606808003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1207	,
            'name_new' => 'MABAHIN',
            'name_old' => 'Mabahin',
            'code' => '1606808004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1208	,
            'name_new' => 'MADRELINO',
            'name_old' => 'Madrelino',
            'code' => '1606808005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1209	,
            'name_new' => 'MANLICO',
            'name_old' => 'Manlico',
            'code' => '1606808006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1210	,
            'name_new' => 'MATHO',
            'name_old' => 'Matho',
            'code' => '1606808007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1211	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606808008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1212	,
            'name_new' => 'TAG-ANONGAN',
            'name_old' => 'Tag-Anongan',
            'code' => '1606808009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1213	,
            'name_new' => 'TIGAO',
            'name_old' => 'Tigao',
            'code' => '1606808010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1214	,
            'name_new' => 'TUBORAN',
            'name_old' => 'Tuboran',
            'code' => '1606808011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1215	,
            'name_new' => 'UBA',
            'name_old' => 'Uba',
            'code' => '1606808012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1216	,
            'name_new' => 'BACULIN',
            'name_old' => 'Baculin',
            'code' => '1606809002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1217	,
            'name_new' => 'BENIGNO AQUINO (ZONE I POB.)',
            'name_old' => 'Benigno Aquino',
            'code' => '1606809041',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1218	,
            'name_new' => 'BIGAAN',
            'name_old' => 'Bigaan',
            'code' => '1606809004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1219	,
            'name_new' => 'CAMBATONG',
            'name_old' => 'Cambatong',
            'code' => '1606809005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1220	,
            'name_new' => 'CAMPA',
            'name_old' => 'Campa',
            'code' => '1606809006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1221	,
            'name_new' => 'DUGMANON',
            'name_old' => 'Dugmanon',
            'code' => '1606809009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1222	,
            'name_new' => 'HARIP',
            'name_old' => 'Harip',
            'code' => '1606809010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1223	,
            'name_new' => 'LA CASA (POB.)',
            'name_old' => 'La Casa (Pob.)',
            'code' => '1606809012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1224	,
            'name_new' => 'LOYOLA',
            'name_old' => 'Loyola',
            'code' => '1606809014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1225	,
            'name_new' => 'MALIGAYA',
            'name_old' => 'Maligaya',
            'code' => '1606809017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1226	,
            'name_new' => 'PAGTIGNI-AN (BITOON)',
            'name_old' => 'Pagtigni-an',
            'code' => '1606809021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1227	,
            'name_new' => 'POCTO',
            'name_old' => 'Pocto',
            'code' => '1606809022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1228	,
            'name_new' => 'PORT LAMON',
            'name_old' => 'Port Lamon',
            'code' => '1606809023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1229	,
            'name_new' => 'ROXAS',
            'name_old' => 'Roxas',
            'code' => '1606809025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1230	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1606809026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1231	,
            'name_new' => 'SASA',
            'name_old' => 'Sasa',
            'code' => '1606809031',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1232	,
            'name_new' => 'TAGASAKA',
            'name_old' => 'Tagasaka',
            'code' => '1606809034',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1233	,
            'name_new' => 'TAGBOBONGA',
            'name_old' => 'Tagbobonga',
            'code' => '1606809044',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1234	,
            'name_new' => 'TALISAY',
            'name_old' => 'Talisay',
            'code' => '1606809037',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1235	,
            'name_new' => 'TARUSAN',
            'name_old' => 'Tarusan',
            'code' => '1606809038',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1236	,
            'name_new' => 'TIDMAN',
            'name_old' => 'Tidman',
            'code' => '1606809039',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1237	,
            'name_new' => 'TIWI',
            'name_old' => 'Tiwi',
            'code' => '1606809040',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1238	,
            'name_new' => 'ZONE II (POB.)',
            'name_old' => 'Zone II (Pob.)',
            'code' => '1606809042',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1239	,
            'name_new' => 'ZONE III MAHARLIKA (POB.)',
            'name_old' => 'Zone III Maharlika (Pob.)',
            'code' => '1606809043',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1240	,
            'name_new' => 'AGSAM',
            'name_old' => 'Agsam',
            'code' => '1606810001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1241	,
            'name_new' => 'BOCAWE',
            'name_old' => 'Bocawe',
            'code' => '1606810003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1242	,
            'name_new' => 'BUNGA',
            'name_old' => 'Bunga',
            'code' => '1606810004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1243	,
            'name_new' => 'GAMUTON',
            'name_old' => 'Gamuton',
            'code' => '1606810008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1244	,
            'name_new' => 'HABAG',
            'name_old' => 'Habag',
            'code' => '1606810009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1245	,
            'name_new' => 'MAMPI',
            'name_old' => 'Mampi',
            'code' => '1606810010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1246	,
            'name_new' => 'NURCIA',
            'name_old' => 'Nurcia',
            'code' => '1606810011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1247	,
            'name_new' => 'PAKWAN',
            'name_old' => 'Pakwan',
            'code' => '1606810017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1248	,
            'name_new' => 'SIBAHAY',
            'name_old' => 'Sibahay',
            'code' => '1606810015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1249	,
            'name_new' => 'ZONE I (POB.)',
            'name_old' => 'Zone I (Pob.)',
            'code' => '1606810016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1250	,
            'name_new' => 'ZONE II (POB.)',
            'name_old' => 'Zone II (Pob.)',
            'code' => '1606810018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1251	,
            'name_new' => 'ZONE III (POB.)',
            'name_old' => 'Zone III (Pob.)',
            'code' => '1606810019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1252	,
            'name_new' => 'ZONE IV (POB.)',
            'name_old' => 'Zone IV (Pob.)',
            'code' => '1606810020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1253	,
            'name_new' => 'ANIBONGAN',
            'name_old' => 'Anibongan',
            'code' => '1606811001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1254	,
            'name_new' => 'BANAHAO',
            'name_old' => 'Banahao',
            'code' => '1606811002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1255	,
            'name_new' => 'BAN-AS',
            'name_old' => 'Ban-as',
            'code' => '1606811003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1256	,
            'name_new' => 'BAUCAWE',
            'name_old' => 'Baucawe',
            'code' => '1606811004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1257	,
            'name_new' => 'DIATAGON',
            'name_old' => 'Diatagon',
            'code' => '1606811005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1258	,
            'name_new' => 'GANAYON',
            'name_old' => 'Ganayon',
            'code' => '1606811006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1259	,
            'name_new' => 'LIATIMCO',
            'name_old' => 'Liatimco',
            'code' => '1606811007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1260	,
            'name_new' => 'MANYAYAY',
            'name_old' => 'Manyayay',
            'code' => '1606811008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1261	,
            'name_new' => 'PAYASAN',
            'name_old' => 'Payasan',
            'code' => '1606811009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1262	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606811010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1263	,
            'name_new' => 'SAINT CHRISTINE',
            'name_old' => 'Saint Christine',
            'code' => '1606811011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1264	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606811012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1265	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1606811013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1266	,
            'name_new' => 'ANIBONGAN',
            'name_old' => 'Anibongan',
            'code' => '1606812001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1267	,
            'name_new' => 'BARCELONA',
            'name_old' => 'Barcelona',
            'code' => '1606812002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1268	,
            'name_new' => 'BOGAK',
            'name_old' => 'Bogak',
            'code' => '1606812004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1269	,
            'name_new' => 'BONGAN',
            'name_old' => 'Bongan',
            'code' => '1606812003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1270	,
            'name_new' => 'HANDAMAYAN',
            'name_old' => 'Handamayan',
            'code' => '1606812005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1271	,
            'name_new' => 'MAHAYAHAY',
            'name_old' => 'Mahayahay',
            'code' => '1606812006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1272	,
            'name_new' => 'MANDUS',
            'name_old' => 'Mandus',
            'code' => '1606812007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1273	,
            'name_new' => 'MANSA-ILAO',
            'name_old' => 'Mansa-ilao',
            'code' => '1606812008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1274	,
            'name_new' => 'PAGTILA-AN',
            'name_old' => 'Pagtila-an',
            'code' => '1606812009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1275	,
            'name_new' => 'PALO ALTO',
            'name_old' => 'Palo Alto',
            'code' => '1606812010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1276	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606812011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1277	,
            'name_new' => 'RAJAH CABUNGSO-AN',
            'name_old' => 'Rajah Cabungso-an',
            'code' => '1606812012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1278	,
            'name_new' => 'SABANG',
            'name_old' => 'Sabang',
            'code' => '1606812013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1279	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1606812014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1280	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606812015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1281	,
            'name_new' => 'TAGPOPORAN',
            'name_old' => 'Tagpoporan',
            'code' => '1606812016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1282	,
            'name_new' => 'UNION',
            'name_old' => 'Union',
            'code' => '1606812017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1283	,
            'name_new' => 'VALENCIA',
            'name_old' => 'Valencia',
            'code' => '1606812018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1284	,
            'name_new' => 'BAGSAC',
            'name_old' => 'Bagsac',
            'code' => '1606813001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1285	,
            'name_new' => 'BAYOGO',
            'name_old' => 'Bayogo',
            'code' => '1606813002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1286	,
            'name_new' => 'LINIBONAN',
            'name_old' => 'Linibonan',
            'code' => '1606813014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1287	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1606813003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1288	,
            'name_new' => 'MANGA',
            'name_old' => 'Manga',
            'code' => '1606813004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1289	,
            'name_new' => 'PANAYOGON',
            'name_old' => 'Panayogon',
            'code' => '1606813005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1290	,
            'name_new' => 'PATONG PATONG',
            'name_old' => 'Patong Patong',
            'code' => '1606813006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1291	,
            'name_new' => 'QUIRINO (POB.)',
            'name_old' => 'Quirino (Pob.)',
            'code' => '1606813007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1292	,
            'name_new' => 'SAN ANTONIO',
            'name_old' => 'San Antonio',
            'code' => '1606813008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1293	,
            'name_new' => 'SAN JUAN',
            'name_old' => 'San Juan',
            'code' => '1606813009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1294	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606813010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1295	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1606813011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1296	,
            'name_new' => 'SONGKIT',
            'name_old' => 'Songkit',
            'code' => '1606813012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1297	,
            'name_new' => 'UNION',
            'name_old' => 'Union',
            'code' => '1606813013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1298	,
            'name_new' => 'ALEGRIA',
            'name_old' => 'Alegria',
            'code' => '1606814001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1299	,
            'name_new' => 'AMONTAY',
            'name_old' => 'Amontay',
            'code' => '1606814002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1300	,
            'name_new' => 'ANTIPOLO',
            'name_old' => 'Antipolo',
            'code' => '1606814003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1301	,
            'name_new' => 'AROROGAN',
            'name_old' => 'Arorogan',
            'code' => '1606814004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1302	,
            'name_new' => 'BAYAN',
            'name_old' => 'Bayan',
            'code' => '1606814005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1303	,
            'name_new' => 'MAHABA',
            'name_old' => 'Mahaba',
            'code' => '1606814006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1304	,
            'name_new' => 'MARARAG',
            'name_old' => 'Mararag',
            'code' => '1606814007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1305	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606814008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1306	,
            'name_new' => 'SAN ANTONIO',
            'name_old' => 'San Antonio',
            'code' => '1606814009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1307	,
            'name_new' => 'SAN ISIDRO',
            'name_old' => 'San Isidro',
            'code' => '1606814010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1308	,
            'name_new' => 'SAN PEDRO',
            'name_old' => 'San Pedro',
            'code' => '1606814011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1309	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606814012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1310	,
            'name_new' => 'BRETANIA',
            'name_old' => 'Bretania',
            'code' => '1606815001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1311	,
            'name_new' => 'BUATONG',
            'name_old' => 'Buatong',
            'code' => '1606815002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1312	,
            'name_new' => 'BUHISAN',
            'name_old' => 'Buhisan',
            'code' => '1606815003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1313	,
            'name_new' => 'GATA',
            'name_old' => 'Gata',
            'code' => '1606815004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1314	,
            'name_new' => 'HORNASAN',
            'name_old' => 'Hornasan',
            'code' => '1606815005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1315	,
            'name_new' => 'JANIPAAN',
            'name_old' => 'Janipaan',
            'code' => '1606815006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1316	,
            'name_new' => 'KAUSWAGAN',
            'name_old' => 'Kauswagan',
            'code' => '1606815007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1317	,
            'name_new' => 'OTEIZA',
            'name_old' => 'Oteiza',
            'code' => '1606815008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1318	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606815009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1319	,
            'name_new' => 'PONG-ON',
            'name_old' => 'Pong-on',
            'code' => '1606815010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1320	,
            'name_new' => 'PONGTOD',
            'name_old' => 'Pongtod',
            'code' => '1606815011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1321	,
            'name_new' => 'SALVACION',
            'name_old' => 'Salvacion',
            'code' => '1606815012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1322	,
            'name_new' => 'SANTO NIÑO',
            'name_old' => 'Santo Niño',
            'code' => '1606815013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1323	,
            'name_new' => 'BAGYANG',
            'name_old' => 'Bagyang',
            'code' => '1606816001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1324	,
            'name_new' => 'BARAS',
            'name_old' => 'Baras',
            'code' => '1606816002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1325	,
            'name_new' => 'BITAUGAN',
            'name_old' => 'Bitaugan',
            'code' => '1606816003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1326	,
            'name_new' => 'BOLHOON',
            'name_old' => 'Bolhoon',
            'code' => '1606816004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1327	,
            'name_new' => 'CALATNGAN',
            'name_old' => 'Calatngan',
            'code' => '1606816005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1328	,
            'name_new' => 'CARROMATA',
            'name_old' => 'Carromata',
            'code' => '1606816006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1329	,
            'name_new' => 'CASTILLO',
            'name_old' => 'Castillo',
            'code' => '1606816007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1330	,
            'name_new' => 'LIBAS GUA',
            'name_old' => 'Libas Gua',
            'code' => '1606816008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1331	,
            'name_new' => 'LIBAS SUD',
            'name_old' => 'Libas Sud',
            'code' => '1606816009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1332	,
            'name_new' => 'MAGROYONG',
            'name_old' => 'Magroyong',
            'code' => '1606816010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1333	,
            'name_new' => 'MAHAYAG (MAITUM)',
            'name_old' => 'Mahayag',
            'code' => '1606816011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1334	,
            'name_new' => 'PATONG',
            'name_old' => 'Patong',
            'code' => '1606816012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1335	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606816013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1336	,
            'name_new' => 'SAGBAYAN',
            'name_old' => 'Sagbayan',
            'code' => '1606816014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1337	,
            'name_new' => 'SAN ROQUE',
            'name_old' => 'San Roque',
            'code' => '1606816016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1338	,
            'name_new' => 'SIAGAO',
            'name_old' => 'Siagao',
            'code' => '1606816017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1339	,
            'name_new' => 'TINA',
            'name_old' => 'Tina',
            'code' => '1606816019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1340	,
            'name_new' => 'UMALAG',
            'name_old' => 'Umalag',
            'code' => '1606816018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1341	,
            'name_new' => 'BATUNAN',
            'name_old' => 'Batunan',
            'code' => '1606817001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1342	,
            'name_new' => 'CARPENITO',
            'name_old' => 'Carpenito',
            'code' => '1606817002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1343	,
            'name_new' => 'DOÑA CARMEN',
            'name_old' => 'Doña Carmen',
            'code' => '1606817025',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1344	,
            'name_new' => 'HINAGDANAN',
            'name_old' => 'Hinagdanan',
            'code' => '1606817026',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1345	,
            'name_new' => 'KAHAYAGAN',
            'name_old' => 'Kahayagan',
            'code' => '1606817003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1346	,
            'name_new' => 'LAGO',
            'name_old' => 'Lago',
            'code' => '1606817004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1347	,
            'name_new' => 'MAGLAMBING',
            'name_old' => 'Maglambing',
            'code' => '1606817006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1348	,
            'name_new' => 'MAGLATAB',
            'name_old' => 'Maglatab',
            'code' => '1606817007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1349	,
            'name_new' => 'MAGSAYSAY',
            'name_old' => 'Magsaysay',
            'code' => '1606817008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1350	,
            'name_new' => 'MALIXI',
            'name_old' => 'Malixi',
            'code' => '1606817009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1351	,
            'name_new' => 'MANAMBIA',
            'name_old' => 'Manambia',
            'code' => '1606817010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1352	,
            'name_new' => 'OSMEÑA',
            'name_old' => 'Osmeña',
            'code' => '1606817011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1353	,
            'name_new' => 'POBLACION',
            'name_old' => 'Poblacion',
            'code' => '1606817012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1354	,
            'name_new' => 'QUEZON',
            'name_old' => 'Quezon',
            'code' => '1606817013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1355	,
            'name_new' => 'SAN VICENTE',
            'name_old' => 'San Vicente',
            'code' => '1606817014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1356	,
            'name_new' => 'SANTA CRUZ',
            'name_old' => 'Santa Cruz',
            'code' => '1606817015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1357	,
            'name_new' => 'SANTA FE',
            'name_old' => 'Santa Fe',
            'code' => '1606817016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1358	,
            'name_new' => 'SANTA JUANA',
            'name_old' => 'Santa Juana',
            'code' => '1606817017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1359	,
            'name_new' => 'SANTA MARIA',
            'name_old' => 'Santa Maria',
            'code' => '1606817018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1360	,
            'name_new' => 'SAYON',
            'name_old' => 'Sayon',
            'code' => '1606817019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1361	,
            'name_new' => 'SORIANO',
            'name_old' => 'Soriano',
            'code' => '1606817020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1362	,
            'name_new' => 'TAGONGON',
            'name_old' => 'Tagongon',
            'code' => '1606817021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1363	,
            'name_new' => 'TRINIDAD',
            'name_old' => 'Trinidad',
            'code' => '1606817022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1364	,
            'name_new' => 'UGOBAN',
            'name_old' => 'Ugoban',
            'code' => '1606817023',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1365	,
            'name_new' => 'VILLAVERDE',
            'name_old' => 'Villaverde',
            'code' => '1606817024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1366	,
            'name_new' => 'ALBA',
            'name_old' => 'Alba',
            'code' => '1606818001',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1367	,
            'name_new' => 'ANAHAO BAG-O',
            'name_old' => 'Anahao Bag-o',
            'code' => '1606818002',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1368	,
            'name_new' => 'ANAHAO DAAN',
            'name_old' => 'Anahao Daan',
            'code' => '1606818003',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1369	,
            'name_new' => 'BADONG',
            'name_old' => 'Badong',
            'code' => '1606818004',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1370	,
            'name_new' => 'BAJAO',
            'name_old' => 'Bajao',
            'code' => '1606818005',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1371	,
            'name_new' => 'BANGSUD',
            'name_old' => 'Bangsud',
            'code' => '1606818006',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1372	,
            'name_new' => 'CABANGAHAN',
            'name_old' => 'Cabangahan',
            'code' => '1606818024',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1373	,
            'name_new' => 'CAGDAPAO',
            'name_old' => 'Cagdapao',
            'code' => '1606818007',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1374	,
            'name_new' => 'CAMAGONG',
            'name_old' => 'Camagong',
            'code' => '1606818008',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1375	,
            'name_new' => 'CARAS-AN',
            'name_old' => 'Caras-an',
            'code' => '1606818009',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1376	,
            'name_new' => 'CAYALE',
            'name_old' => 'Cayale',
            'code' => '1606818010',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1377	,
            'name_new' => 'DAYO-AN',
            'name_old' => 'Dayo-an',
            'code' => '1606818011',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1378	,
            'name_new' => 'GAMUT',
            'name_old' => 'Gamut',
            'code' => '1606818012',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1379	,
            'name_new' => 'JUBANG',
            'name_old' => 'Jubang',
            'code' => '1606818013',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1380	,
            'name_new' => 'KINABIGTASAN',
            'name_old' => 'Kinabigtasan',
            'code' => '1606818014',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1381	,
            'name_new' => 'LAYOG',
            'name_old' => 'Layog',
            'code' => '1606818015',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1382	,
            'name_new' => 'LINDOY',
            'name_old' => 'Lindoy',
            'code' => '1606818016',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1383	,
            'name_new' => 'MERCEDES',
            'name_old' => 'Mercedes',
            'code' => '1606818017',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1384	,
            'name_new' => 'PURISIMA (POB.)',
            'name_old' => 'Purisima (Pob.)',
            'code' => '1606818018',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1385	,
            'name_new' => 'SUMO-SUMO',
            'name_old' => 'Sumo-sumo',
            'code' => '1606818019',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1386	,
            'name_new' => 'UMBAY',
            'name_old' => 'Umbay',
            'code' => '1606818020',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1387	,
            'name_new' => 'UNABAN',
            'name_old' => 'Unaban',
            'code' => '1606818021',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1388	,
            'name_new' => 'UNIDOS',
            'name_old' => 'Unidos',
            'code' => '1606818022',
            'geographic_level' => 'barangay'
        ],
        [
            'id'=>1389	,
            'name_new' => 'VICTORIA',
            'name_old' => 'Victoria',
            'code' => '1606818023',
            'geographic_level' => 'barangay'
        ],
        
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $psgc = $this->psgc;
        foreach ($psgc as $key => $data) {
            Psgc::create($data);
        }
    }
}
