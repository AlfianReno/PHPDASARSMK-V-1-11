<?php 



/*function tulisan() {
    echo "Saya belajar PHP";
}

tulisan();
*/

function luasPersegiPanjang ($p = 0, $l = 0) {
    

    $luas = $p * $l;

    echo $luas;

}

luasPersegiPanjang(10,3);

function output () {
    return "belajar function";


}

echo '<h1>'.output(). '</h1>';

echo luasPersegiPanjang(20,3) *5;



?>