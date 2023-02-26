<?php
use App\Http\Requests;
use Illuminate\Support\Str;

class PrintHelper {

    public static function dragDropSorting() {
        $sort_orders = explode(',', Request::get('sort_orders'));
        $ids_order = Request::get('ids_order');
        dd($ids_order);
        

        $ids_order = str_replace('sortable[]=', '', $ids_order);
        $ids_order = substr($ids_order, 1);
        $ids_order = explode('&', $ids_order);

        for ($i = 0; $i < sizeof($ids_order); $i++) {
            DB::table(Request::get('table'))
                    ->where('id', $ids_order[$i])
                    ->update(array('sort_order' => $sort_orders[$i]));
        }
    }

    public static function nextSortOrder($table) {
        return DB::table($table)->max('sort_order') + 1;
    }

    public static function updateField() {
        $field_id = strip_tags(trim(Request::get('field_id')));
        $value = strip_tags(trim(Request::get('value')));
        $split_data = explode(':', $field_id);
        $id = $split_data[1];
        $field = $split_data[0];
        if (!empty($id) && !empty($field) && !empty($value)) {
            DB::table(Request::get('table'))
                    ->where('id', $id)
                    ->update(array($field => $value));
        }
    }

    public static function resetSortOrder($table) {
        $models = DB::table($table)->select('id')->orderBy('id', 'asc')->get();
        $i = 1;
        foreach ($models as $m) {
            DB::table($table)->where('id', $m->id)->update(array('sort_order' => $i));
            $i++;
        }
    }
    
//    public static function deleteData() {
//        $id = strip_tags(trim(Request::get('id')));
//        $table = strip_tags(trim(Request::get('table')));
//        if (!empty($id) && !empty($table)) {
//            DB::table($table)
//                    ->where('id', $id)
//                    ->delete();
//        }
//    }
//    
//    public static function deleteImage() {
//        $id = strip_tags(trim(Request::get('id')));
//        $table = strip_tags(trim(Request::get('table')));
//        if (!empty($id) && !empty($table)) {
//            DB::table($table)
//                    ->where('id', $id)
//                    ->delete();
//        }
//    }

}

function p($data){
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
}

function pe($data){
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
    exit();
}

function str_limit($data,$limit,$end=null){
    $text = Str::limit($data, $limit);
    return $text;
}
// function str_slug($data,$seperator=null){
//     $seperator = ($seperator == null)?'-':$seperator;
//     $text = Str::slug($data, $seperator);
//     return $text;
// }

function chunkfullurl($fullurl){
    if ($fullurl != '') {
        $imagepath = parse_url($fullurl);
        if (!empty($imagepath['path'])) {
            $urls = array_filter(explode('/', $imagepath['path']));
            array_shift($urls);
            $chunkurl = implode('/', $urls);
            return $chunkurl;
        } else{
            return $fullurl;
        }
    }else{
        return null;
    }
}

function changeEngToNepali($num){
    $numArray = array(
        '0' => '०',
        '1' => '१',
        '2' => '२',
        '3' => '३',
        '4' => '४',
        '5' => '५',
        '6' => '६',
        '7' => '७',
        '8' => '८',
        '9' => '९',
    );
    $arr = str_split($num);
    $returnValue = '';
    for ($i = 0; $i < count($arr); $i++) {
        $new = $arr[$i];
        $returnValue .= (array_key_exists($new, $numArray)) ? $numArray[$new] : false;
    }
    return $returnValue;
}

function changeDateToNepaliFormat($requestdate){
    if ($requestdate != '') {
        $englishdate = explode('-',$requestdate);
        $year = $englishdate[0];
        $month = $englishdate[1];
        $day = $englishdate[2];
        $nepalidate = \Bsdate::eng_to_nep($year,$month,$day);
        $formatdate = $nepalidate['npyear'].' '.$nepalidate['nmonth'].' '.$nepalidate['npdate'].', '.$nepalidate['day'];
    } else{
        $formatdate = date('Y-m-d');
    }
    return $formatdate;
}

function changeDateToNepaliFormatType($type=null,$requestdate){
    if ($requestdate != '') {
        $englishdate = explode('-',$requestdate);
        $year = $englishdate[0];
        $month = $englishdate[1];
        $day = $englishdate[2];
        $nepalidate = \Bsdate::eng_to_nep($year,$month,$day);
        if ($type == 'Y') {
            $formatdate = $nepalidate['npyear'];
        }elseif ($type == 'M') {
            $formatdate = $nepalidate['nmonth'];
        }elseif ($type == 'D') {
            $formatdate = $nepalidate['npdate'];
        }elseif ($type == 'fulldate') {
            $formatdate =$nepalidate['npyear'].'-'.$nepalidate['nmonth'].'-'.$nepalidate['npdate'];
        }else{
            $formatdate = $nepalidate['npyear'].' '.$nepalidate['nmonth'].' '.$nepalidate['npdate'].', '.$nepalidate['day'];
        }
    } else{
        $formatdate = date('Y-m-d');
    }
    return $formatdate;
}

function getTodayNepaliDate(){
    $englishdate = explode('-',date('Y-m-d'));
    $year = $englishdate[0];
    $month = $englishdate[1];
    $day = $englishdate[2];
    $nepalidate = \Bsdate::eng_to_nep($year,$month,$day);
    $formatdate = $nepalidate['nmonth'].' '.$nepalidate['npdate'].', '.$nepalidate['npyear'].', '.$nepalidate['day'];
    
    return $formatdate;
}
