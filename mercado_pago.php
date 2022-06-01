
require '/vendor/autoload.php'

MercadoPago\SDK::setAccessToken('');


$preference = new MercadoPago\Preference();
$item = new MercadoPago\Item();
$item->id='0001';
$item->title='Producto CDP';
$item->quantity=1;
$item->unit_price=150.00;
$item->currency_id="COP";

$preference->items = array(&item);
$preference->save();










