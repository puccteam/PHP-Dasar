Array adalah kumpulan beberapa data yang disimpan dalam satu variabel. Jadi, disini array dapat menampung lebih dari satu nilai.

Array (atau larik, matrik dalam bahasa indonesia) bukanlah tipe data dasar seperti integer atau boolen, Array adalah sebuah tipe data bentukan yang terdiri dari kumpulan tipe data lainnya. Menggunakan array akan memudahkan dalam membuat kelompok data, serta menghemat penulisan dan penggunaan variabel.

Jenis array dalam PHP :
- Array Berindeks, merupakan tipe array yang umum, yaitu variabel array yang setiap elemennya dapat diacu dengan menggunakan nomor elemen.
- Array Asosiatif, merupakan array yang setiap key ID adalah terkait dengan nilai atau elemennya diacu dengan menggunakan nama yang berupa string atau nomor.
- Numeric array – Sebuah array dengan indeks numerik
- Multidimensional array – Sebuah array yang berisi satu atau lebih array
      
Perbedaan keduanya hanya pada penyebutan dari elemen-elemen arraynya, karena pada dasarnya keduanya sama untuk menyimpan data dalam memori komputer.

Array dapat memiliki lebih dari satu dimensi, array satu dimensi adalah array yangg indeksnya hanya satu (x), dengan array dua dimensi adalah array yang indeksnya dua (x,y), dan begitu seterusnya.

Contoh : 
#Numeric 
$cars=array(“Saab”,”Volvo”,”BMW”,”Toyota”);

$cars[0]=”Saab”;
$cars[1]=”Volvo”;
$cars[2]=”BMW”;
$cars[3]=”Toyota”;

echo $cars[0] . ” and ” . $cars[1] . ” are Swedish cars.”;

#Assosiatif
$ages = array(“Peter”=>32, “Quagmire”=>30, “Joe”=>34);

$ages[‘Peter’] = “32”;
$ages[‘Quagmire’] = “30”;
$ages[‘Joe’] = “34”;

echo "Peter is " . $ages['Peter'] . " years old.";

#multidimensi
$families = array
(
“Griffin”=>array
(
“Peter”,
“Lois”,
“Megan”
),
“Quagmire”=>array
(
“Glenn”
),
“Brown”=>array
(
“Cleveland”,
“Loretta”,
“Junior”
)
);

Array
(
[Griffin] => Array
(
[0] => Peter
[1] => Lois
[2] => Megan
)
[Quagmire] => Array
(
[0] => Glenn
)
[Brown] => Array
(
[0] => Cleveland
[1] => Loretta
[2] => Junior
)
)

echo "Is " . $families['Griffin'][2] ." a part of the Griffin family?";
