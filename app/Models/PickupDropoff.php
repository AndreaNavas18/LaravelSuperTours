<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PickupDropoff
 * 
 * @property int $id
 * @property int $id_area
 * @property string $place
 * @property string $address
 * @property string $instructions
 * @property int $valid
 * @property int $posicion
 * @property int $pos_exp
 * @property int $trip100
 * @property int $trip200
 * @property int $trip300
 * @property int $trip101
 * @property int $trip201
 * @property int $trip301
 * @property int $trip400
 * @property int $trip401
 * @property int $trip700
 * @property int $trip710
 * @property int $trip720
 * @property int $trip722
 * @property int $trip724
 * @property int $trip726
 * @property int $trip730
 * @property int $trip736
 * @property int $trip740
 * @property int $trip744
 * @property int $trip750
 * @property int $trip760
 * @property int $trip770
 * @property int $trip774
 * @property int $trip776
 * @property int $trip780
 * @property int $trip790
 * @property int $trip705
 * @property int $trip711
 * @property int $trip713
 * @property int $trip721
 * @property int $trip723
 * @property int $trip731
 * @property int $trip741
 * @property int $trip751
 * @property int $trip761
 * @property int $trip759
 * @property int $trip773
 * @property int $trip763
 * @property int $trip771
 * @property int $trip775
 * @property int $trip781
 * @property int $trip783
 * @property int $trip791
 * @property int $trip793
 * @property int $trip810
 * @property int $trip820
 * @property int $trip830
 * @property int $trip840
 * @property int $trip811
 * @property int $trip821
 * @property int $trip831
 * @property int $trip841
 * @property int $trip851
 * @property int $trip8000
 * @property int $trip8820
 * @property int $trip8830
 * @property int $trip8840
 * @property int $trip8004
 * @property int $trip8001
 * @property int $trip8811
 * @property int $trip8821
 * @property int $trip8005
 * @property int $trip8841
 * @property int $trip8851
 * @property int $tripw100
 * @property int $tripw200
 * @property int $tripw300
 * @property int $tripw101
 * @property int $tripw201
 * @property int $tripw301
 * @property int $tripw400
 * @property int $tripw401
 * @property int $tripw700
 * @property int $tripw710
 * @property int $tripw720
 * @property int $tripw722
 * @property int $tripw724
 * @property int $tripw726
 * @property int $tripw730
 * @property int $tripw736
 * @property int $tripw740
 * @property int $tripw744
 * @property int $tripw750
 * @property int $tripw760
 * @property int $tripw770
 * @property int $tripw774
 * @property int $tripw776
 * @property int $tripw780
 * @property int $tripw790
 * @property int $tripw705
 * @property int $tripw711
 * @property int $tripw713
 * @property int $tripw721
 * @property int $tripw723
 * @property int $tripw731
 * @property int $tripw741
 * @property int $tripw751
 * @property int $tripw761
 * @property int $tripw759
 * @property int $tripw773
 * @property int $tripw763
 * @property int $tripw771
 * @property int $tripw775
 * @property int $tripw781
 * @property int $tripw783
 * @property int $tripw791
 * @property int $tripw793
 * @property int $tripw810
 * @property int $tripw820
 * @property int $tripw830
 * @property int $tripw840
 * @property int $tripw811
 * @property int $tripw821
 * @property int $tripw831
 * @property int $tripw841
 * @property int $tripw851
 * @property int $tripw8000
 * @property int $tripw8820
 * @property int $tripw8830
 * @property int $tripw8840
 * @property int $tripw8004
 * @property int $tripw8001
 * @property int $tripw8811
 * @property int $tripw8821
 * @property int $tripw8005
 * @property int $tripw8841
 * @property int $tripw8851
 * @property int $tript100
 * @property int $tript200
 * @property int $tript300
 * @property int $tript101
 * @property int $tript201
 * @property int $tript301
 * @property int $tript400
 * @property int $tript401
 * @property int $tript700
 * @property int $tript710
 * @property int $tript720
 * @property int $tript722
 * @property int $tript724
 * @property int $tript726
 * @property int $tript730
 * @property int $tript736
 * @property int $tript740
 * @property int $tript744
 * @property int $tript750
 * @property int $tript760
 * @property int $tript770
 * @property int $tript774
 * @property int $tript776
 * @property int $tript780
 * @property int $tript790
 * @property int $tript705
 * @property int $tript711
 * @property int $tript713
 * @property int $tript721
 * @property int $tript723
 * @property int $tript731
 * @property int $tript741
 * @property int $tript751
 * @property int $tript761
 * @property int $tript759
 * @property int $tript773
 * @property int $tript763
 * @property int $tript771
 * @property int $tript775
 * @property int $tript781
 * @property int $tript783
 * @property int $tript791
 * @property int $tript793
 * @property int $tript810
 * @property int $tript820
 * @property int $tript830
 * @property int $tript840
 * @property int $tript811
 * @property int $tript821
 * @property int $tript831
 * @property int $tript841
 * @property int $tript851
 * @property int $tript8000
 * @property int $tript8820
 * @property int $tript8830
 * @property int $tript8840
 * @property int $tript8004
 * @property int $tript8001
 * @property int $tript8811
 * @property int $tript8821
 * @property int $tript8005
 * @property int $tript8841
 * @property int $tript8851
 * @property int $tripop100
 * @property int $tripop200
 * @property int $tripop300
 * @property int $tripop101
 * @property int $tripop201
 * @property int $tripop301
 * @property int $tripop400
 * @property int $tripop401
 * @property int $tripop700
 * @property int $tripop710
 * @property int $tripop720
 * @property int $tripop722
 * @property int $tripop724
 * @property int $tripop726
 * @property int $tripop730
 * @property int $tripop736
 * @property int $tripop740
 * @property int $tripop744
 * @property int $tripop750
 * @property int $tripop760
 * @property int $tripop770
 * @property int $tripop774
 * @property int $tripop776
 * @property int $tripop780
 * @property int $tripop790
 * @property int $tripop705
 * @property int $tripop711
 * @property int $tripop713
 * @property int $tripop721
 * @property int $tripop723
 * @property int $tripop731
 * @property int $tripop741
 * @property int $tripop751
 * @property int $tripop761
 * @property int $tripop759
 * @property int $tripop773
 * @property int $tripop763
 * @property int $tripop771
 * @property int $tripop775
 * @property int $tripop781
 * @property int $tripop783
 * @property int $tripop791
 * @property int $tripop793
 * @property int $tripop810
 * @property int $tripop820
 * @property int $tripop830
 * @property int $tripop840
 * @property int $tripop811
 * @property int $tripop821
 * @property int $tripop831
 * @property int $tripop841
 * @property int $tripop851
 * @property int $tripop8000
 * @property int $tripop8820
 * @property int $tripop8830
 * @property int $tripop8840
 * @property int $tripop8004
 * @property int $tripop8001
 * @property int $tripop8811
 * @property int $tripop8821
 * @property int $tripop8005
 * @property int $tripop8841
 * @property int $tripop8851
 * @property int $tripopf100
 * @property int $tripopf200
 * @property int $tripopf300
 * @property int $tripopf101
 * @property int $tripopf201
 * @property int $tripopf301
 * @property int $tripopf400
 * @property int $tripopf401
 * @property int $tripopf700
 * @property int $tripopf710
 * @property int $tripopf720
 * @property int $tripopf722
 * @property int $tripopf724
 * @property int $tripopf726
 * @property int $tripopf730
 * @property int $tripopf736
 * @property int $tripopf740
 * @property int $tripopf744
 * @property int $tripopf750
 * @property int $tripopf760
 * @property int $tripopf770
 * @property int $tripopf774
 * @property int $tripopf776
 * @property int $tripopf780
 * @property int $tripopf790
 * @property int $tripopf705
 * @property int $tripopf711
 * @property int $tripopf713
 * @property int $tripopf721
 * @property int $tripopf723
 * @property int $tripopf731
 * @property int $tripopf741
 * @property int $tripopf751
 * @property int $tripopf761
 * @property int $tripopf759
 * @property int $tripopf773
 * @property int $tripopf763
 * @property int $tripopf771
 * @property int $tripopf775
 * @property int $tripopf781
 * @property int $tripopf783
 * @property int $tripopf791
 * @property int $tripopf793
 * @property int $tripopf810
 * @property int $tripopf820
 * @property int $tripopf830
 * @property int $tripopf840
 * @property int $tripopf811
 * @property int $tripopf821
 * @property int $tripopf831
 * @property int $tripopf841
 * @property int $tripopf851
 * @property int $tripopf8000
 * @property int $tripopf8820
 * @property int $tripopf8830
 * @property int $tripopf8840
 * @property int $tripopf8004
 * @property int $tripopf8001
 * @property int $tripopf8811
 * @property int $tripopf8821
 * @property int $tripopf8005
 * @property int $tripopf8841
 * @property int $tripopf8851
 * @property string $type_pick
 * @property int $active_sur
 * @property int $active_web
 * @property int $active_travelag
 * @property int $active_opl
 * @property int $active_oppr
 * @property int $estado
 *
 * @package App\Models
 */
class PickupDropoff extends Model
{
	protected $table = 'pickup_dropoff';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_area' => 'int',
		'valid' => 'int',
		'posicion' => 'int',
		'pos_exp' => 'int',
		'trip100' => 'int',
		'trip200' => 'int',
		'trip300' => 'int',
		'trip101' => 'int',
		'trip201' => 'int',
		'trip301' => 'int',
		'trip400' => 'int',
		'trip401' => 'int',
		'trip700' => 'int',
		'trip710' => 'int',
		'trip720' => 'int',
		'trip722' => 'int',
		'trip724' => 'int',
		'trip726' => 'int',
		'trip730' => 'int',
		'trip736' => 'int',
		'trip740' => 'int',
		'trip744' => 'int',
		'trip750' => 'int',
		'trip760' => 'int',
		'trip770' => 'int',
		'trip774' => 'int',
		'trip776' => 'int',
		'trip780' => 'int',
		'trip790' => 'int',
		'trip705' => 'int',
		'trip711' => 'int',
		'trip713' => 'int',
		'trip721' => 'int',
		'trip723' => 'int',
		'trip731' => 'int',
		'trip741' => 'int',
		'trip751' => 'int',
		'trip761' => 'int',
		'trip759' => 'int',
		'trip773' => 'int',
		'trip763' => 'int',
		'trip771' => 'int',
		'trip775' => 'int',
		'trip781' => 'int',
		'trip783' => 'int',
		'trip791' => 'int',
		'trip793' => 'int',
		'trip810' => 'int',
		'trip820' => 'int',
		'trip830' => 'int',
		'trip840' => 'int',
		'trip811' => 'int',
		'trip821' => 'int',
		'trip831' => 'int',
		'trip841' => 'int',
		'trip851' => 'int',
		'trip8000' => 'int',
		'trip8820' => 'int',
		'trip8830' => 'int',
		'trip8840' => 'int',
		'trip8004' => 'int',
		'trip8001' => 'int',
		'trip8811' => 'int',
		'trip8821' => 'int',
		'trip8005' => 'int',
		'trip8841' => 'int',
		'trip8851' => 'int',
		'tripw100' => 'int',
		'tripw200' => 'int',
		'tripw300' => 'int',
		'tripw101' => 'int',
		'tripw201' => 'int',
		'tripw301' => 'int',
		'tripw400' => 'int',
		'tripw401' => 'int',
		'tripw700' => 'int',
		'tripw710' => 'int',
		'tripw720' => 'int',
		'tripw722' => 'int',
		'tripw724' => 'int',
		'tripw726' => 'int',
		'tripw730' => 'int',
		'tripw736' => 'int',
		'tripw740' => 'int',
		'tripw744' => 'int',
		'tripw750' => 'int',
		'tripw760' => 'int',
		'tripw770' => 'int',
		'tripw774' => 'int',
		'tripw776' => 'int',
		'tripw780' => 'int',
		'tripw790' => 'int',
		'tripw705' => 'int',
		'tripw711' => 'int',
		'tripw713' => 'int',
		'tripw721' => 'int',
		'tripw723' => 'int',
		'tripw731' => 'int',
		'tripw741' => 'int',
		'tripw751' => 'int',
		'tripw761' => 'int',
		'tripw759' => 'int',
		'tripw773' => 'int',
		'tripw763' => 'int',
		'tripw771' => 'int',
		'tripw775' => 'int',
		'tripw781' => 'int',
		'tripw783' => 'int',
		'tripw791' => 'int',
		'tripw793' => 'int',
		'tripw810' => 'int',
		'tripw820' => 'int',
		'tripw830' => 'int',
		'tripw840' => 'int',
		'tripw811' => 'int',
		'tripw821' => 'int',
		'tripw831' => 'int',
		'tripw841' => 'int',
		'tripw851' => 'int',
		'tripw8000' => 'int',
		'tripw8820' => 'int',
		'tripw8830' => 'int',
		'tripw8840' => 'int',
		'tripw8004' => 'int',
		'tripw8001' => 'int',
		'tripw8811' => 'int',
		'tripw8821' => 'int',
		'tripw8005' => 'int',
		'tripw8841' => 'int',
		'tripw8851' => 'int',
		'tript100' => 'int',
		'tript200' => 'int',
		'tript300' => 'int',
		'tript101' => 'int',
		'tript201' => 'int',
		'tript301' => 'int',
		'tript400' => 'int',
		'tript401' => 'int',
		'tript700' => 'int',
		'tript710' => 'int',
		'tript720' => 'int',
		'tript722' => 'int',
		'tript724' => 'int',
		'tript726' => 'int',
		'tript730' => 'int',
		'tript736' => 'int',
		'tript740' => 'int',
		'tript744' => 'int',
		'tript750' => 'int',
		'tript760' => 'int',
		'tript770' => 'int',
		'tript774' => 'int',
		'tript776' => 'int',
		'tript780' => 'int',
		'tript790' => 'int',
		'tript705' => 'int',
		'tript711' => 'int',
		'tript713' => 'int',
		'tript721' => 'int',
		'tript723' => 'int',
		'tript731' => 'int',
		'tript741' => 'int',
		'tript751' => 'int',
		'tript761' => 'int',
		'tript759' => 'int',
		'tript773' => 'int',
		'tript763' => 'int',
		'tript771' => 'int',
		'tript775' => 'int',
		'tript781' => 'int',
		'tript783' => 'int',
		'tript791' => 'int',
		'tript793' => 'int',
		'tript810' => 'int',
		'tript820' => 'int',
		'tript830' => 'int',
		'tript840' => 'int',
		'tript811' => 'int',
		'tript821' => 'int',
		'tript831' => 'int',
		'tript841' => 'int',
		'tript851' => 'int',
		'tript8000' => 'int',
		'tript8820' => 'int',
		'tript8830' => 'int',
		'tript8840' => 'int',
		'tript8004' => 'int',
		'tript8001' => 'int',
		'tript8811' => 'int',
		'tript8821' => 'int',
		'tript8005' => 'int',
		'tript8841' => 'int',
		'tript8851' => 'int',
		'tripop100' => 'int',
		'tripop200' => 'int',
		'tripop300' => 'int',
		'tripop101' => 'int',
		'tripop201' => 'int',
		'tripop301' => 'int',
		'tripop400' => 'int',
		'tripop401' => 'int',
		'tripop700' => 'int',
		'tripop710' => 'int',
		'tripop720' => 'int',
		'tripop722' => 'int',
		'tripop724' => 'int',
		'tripop726' => 'int',
		'tripop730' => 'int',
		'tripop736' => 'int',
		'tripop740' => 'int',
		'tripop744' => 'int',
		'tripop750' => 'int',
		'tripop760' => 'int',
		'tripop770' => 'int',
		'tripop774' => 'int',
		'tripop776' => 'int',
		'tripop780' => 'int',
		'tripop790' => 'int',
		'tripop705' => 'int',
		'tripop711' => 'int',
		'tripop713' => 'int',
		'tripop721' => 'int',
		'tripop723' => 'int',
		'tripop731' => 'int',
		'tripop741' => 'int',
		'tripop751' => 'int',
		'tripop761' => 'int',
		'tripop759' => 'int',
		'tripop773' => 'int',
		'tripop763' => 'int',
		'tripop771' => 'int',
		'tripop775' => 'int',
		'tripop781' => 'int',
		'tripop783' => 'int',
		'tripop791' => 'int',
		'tripop793' => 'int',
		'tripop810' => 'int',
		'tripop820' => 'int',
		'tripop830' => 'int',
		'tripop840' => 'int',
		'tripop811' => 'int',
		'tripop821' => 'int',
		'tripop831' => 'int',
		'tripop841' => 'int',
		'tripop851' => 'int',
		'tripop8000' => 'int',
		'tripop8820' => 'int',
		'tripop8830' => 'int',
		'tripop8840' => 'int',
		'tripop8004' => 'int',
		'tripop8001' => 'int',
		'tripop8811' => 'int',
		'tripop8821' => 'int',
		'tripop8005' => 'int',
		'tripop8841' => 'int',
		'tripop8851' => 'int',
		'tripopf100' => 'int',
		'tripopf200' => 'int',
		'tripopf300' => 'int',
		'tripopf101' => 'int',
		'tripopf201' => 'int',
		'tripopf301' => 'int',
		'tripopf400' => 'int',
		'tripopf401' => 'int',
		'tripopf700' => 'int',
		'tripopf710' => 'int',
		'tripopf720' => 'int',
		'tripopf722' => 'int',
		'tripopf724' => 'int',
		'tripopf726' => 'int',
		'tripopf730' => 'int',
		'tripopf736' => 'int',
		'tripopf740' => 'int',
		'tripopf744' => 'int',
		'tripopf750' => 'int',
		'tripopf760' => 'int',
		'tripopf770' => 'int',
		'tripopf774' => 'int',
		'tripopf776' => 'int',
		'tripopf780' => 'int',
		'tripopf790' => 'int',
		'tripopf705' => 'int',
		'tripopf711' => 'int',
		'tripopf713' => 'int',
		'tripopf721' => 'int',
		'tripopf723' => 'int',
		'tripopf731' => 'int',
		'tripopf741' => 'int',
		'tripopf751' => 'int',
		'tripopf761' => 'int',
		'tripopf759' => 'int',
		'tripopf773' => 'int',
		'tripopf763' => 'int',
		'tripopf771' => 'int',
		'tripopf775' => 'int',
		'tripopf781' => 'int',
		'tripopf783' => 'int',
		'tripopf791' => 'int',
		'tripopf793' => 'int',
		'tripopf810' => 'int',
		'tripopf820' => 'int',
		'tripopf830' => 'int',
		'tripopf840' => 'int',
		'tripopf811' => 'int',
		'tripopf821' => 'int',
		'tripopf831' => 'int',
		'tripopf841' => 'int',
		'tripopf851' => 'int',
		'tripopf8000' => 'int',
		'tripopf8820' => 'int',
		'tripopf8830' => 'int',
		'tripopf8840' => 'int',
		'tripopf8004' => 'int',
		'tripopf8001' => 'int',
		'tripopf8811' => 'int',
		'tripopf8821' => 'int',
		'tripopf8005' => 'int',
		'tripopf8841' => 'int',
		'tripopf8851' => 'int',
		'active_sur' => 'int',
		'active_web' => 'int',
		'active_travelag' => 'int',
		'active_opl' => 'int',
		'active_oppr' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id',
		'id_area',
		'place',
		'address',
		'instructions',
		'valid',
		'posicion',
		'pos_exp',
		'trip100',
		'trip200',
		'trip300',
		'trip101',
		'trip201',
		'trip301',
		'trip400',
		'trip401',
		'trip700',
		'trip710',
		'trip720',
		'trip722',
		'trip724',
		'trip726',
		'trip730',
		'trip736',
		'trip740',
		'trip744',
		'trip750',
		'trip760',
		'trip770',
		'trip774',
		'trip776',
		'trip780',
		'trip790',
		'trip705',
		'trip711',
		'trip713',
		'trip721',
		'trip723',
		'trip731',
		'trip741',
		'trip751',
		'trip761',
		'trip759',
		'trip773',
		'trip763',
		'trip771',
		'trip775',
		'trip781',
		'trip783',
		'trip791',
		'trip793',
		'trip810',
		'trip820',
		'trip830',
		'trip840',
		'trip811',
		'trip821',
		'trip831',
		'trip841',
		'trip851',
		'trip8000',
		'trip8820',
		'trip8830',
		'trip8840',
		'trip8004',
		'trip8001',
		'trip8811',
		'trip8821',
		'trip8005',
		'trip8841',
		'trip8851',
		'tripw100',
		'tripw200',
		'tripw300',
		'tripw101',
		'tripw201',
		'tripw301',
		'tripw400',
		'tripw401',
		'tripw700',
		'tripw710',
		'tripw720',
		'tripw722',
		'tripw724',
		'tripw726',
		'tripw730',
		'tripw736',
		'tripw740',
		'tripw744',
		'tripw750',
		'tripw760',
		'tripw770',
		'tripw774',
		'tripw776',
		'tripw780',
		'tripw790',
		'tripw705',
		'tripw711',
		'tripw713',
		'tripw721',
		'tripw723',
		'tripw731',
		'tripw741',
		'tripw751',
		'tripw761',
		'tripw759',
		'tripw773',
		'tripw763',
		'tripw771',
		'tripw775',
		'tripw781',
		'tripw783',
		'tripw791',
		'tripw793',
		'tripw810',
		'tripw820',
		'tripw830',
		'tripw840',
		'tripw811',
		'tripw821',
		'tripw831',
		'tripw841',
		'tripw851',
		'tripw8000',
		'tripw8820',
		'tripw8830',
		'tripw8840',
		'tripw8004',
		'tripw8001',
		'tripw8811',
		'tripw8821',
		'tripw8005',
		'tripw8841',
		'tripw8851',
		'tript100',
		'tript200',
		'tript300',
		'tript101',
		'tript201',
		'tript301',
		'tript400',
		'tript401',
		'tript700',
		'tript710',
		'tript720',
		'tript722',
		'tript724',
		'tript726',
		'tript730',
		'tript736',
		'tript740',
		'tript744',
		'tript750',
		'tript760',
		'tript770',
		'tript774',
		'tript776',
		'tript780',
		'tript790',
		'tript705',
		'tript711',
		'tript713',
		'tript721',
		'tript723',
		'tript731',
		'tript741',
		'tript751',
		'tript761',
		'tript759',
		'tript773',
		'tript763',
		'tript771',
		'tript775',
		'tript781',
		'tript783',
		'tript791',
		'tript793',
		'tript810',
		'tript820',
		'tript830',
		'tript840',
		'tript811',
		'tript821',
		'tript831',
		'tript841',
		'tript851',
		'tript8000',
		'tript8820',
		'tript8830',
		'tript8840',
		'tript8004',
		'tript8001',
		'tript8811',
		'tript8821',
		'tript8005',
		'tript8841',
		'tript8851',
		'tripop100',
		'tripop200',
		'tripop300',
		'tripop101',
		'tripop201',
		'tripop301',
		'tripop400',
		'tripop401',
		'tripop700',
		'tripop710',
		'tripop720',
		'tripop722',
		'tripop724',
		'tripop726',
		'tripop730',
		'tripop736',
		'tripop740',
		'tripop744',
		'tripop750',
		'tripop760',
		'tripop770',
		'tripop774',
		'tripop776',
		'tripop780',
		'tripop790',
		'tripop705',
		'tripop711',
		'tripop713',
		'tripop721',
		'tripop723',
		'tripop731',
		'tripop741',
		'tripop751',
		'tripop761',
		'tripop759',
		'tripop773',
		'tripop763',
		'tripop771',
		'tripop775',
		'tripop781',
		'tripop783',
		'tripop791',
		'tripop793',
		'tripop810',
		'tripop820',
		'tripop830',
		'tripop840',
		'tripop811',
		'tripop821',
		'tripop831',
		'tripop841',
		'tripop851',
		'tripop8000',
		'tripop8820',
		'tripop8830',
		'tripop8840',
		'tripop8004',
		'tripop8001',
		'tripop8811',
		'tripop8821',
		'tripop8005',
		'tripop8841',
		'tripop8851',
		'tripopf100',
		'tripopf200',
		'tripopf300',
		'tripopf101',
		'tripopf201',
		'tripopf301',
		'tripopf400',
		'tripopf401',
		'tripopf700',
		'tripopf710',
		'tripopf720',
		'tripopf722',
		'tripopf724',
		'tripopf726',
		'tripopf730',
		'tripopf736',
		'tripopf740',
		'tripopf744',
		'tripopf750',
		'tripopf760',
		'tripopf770',
		'tripopf774',
		'tripopf776',
		'tripopf780',
		'tripopf790',
		'tripopf705',
		'tripopf711',
		'tripopf713',
		'tripopf721',
		'tripopf723',
		'tripopf731',
		'tripopf741',
		'tripopf751',
		'tripopf761',
		'tripopf759',
		'tripopf773',
		'tripopf763',
		'tripopf771',
		'tripopf775',
		'tripopf781',
		'tripopf783',
		'tripopf791',
		'tripopf793',
		'tripopf810',
		'tripopf820',
		'tripopf830',
		'tripopf840',
		'tripopf811',
		'tripopf821',
		'tripopf831',
		'tripopf841',
		'tripopf851',
		'tripopf8000',
		'tripopf8820',
		'tripopf8830',
		'tripopf8840',
		'tripopf8004',
		'tripopf8001',
		'tripopf8811',
		'tripopf8821',
		'tripopf8005',
		'tripopf8841',
		'tripopf8851',
		'type_pick',
		'active_sur',
		'active_web',
		'active_travelag',
		'active_opl',
		'active_oppr',
		'estado'
	];
}
