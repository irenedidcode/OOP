<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menggunakan Components</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
    <h1> Belajar Menggunakan Component </h1>

    <?php
    class user {
        public $id, $name, $age, $addres;
        
        
        public function __construct( $id = null, $name = null, $age = null, $addres = null)
        {
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->addres=$addres;
        }
    }
?>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai PBO
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai WEB
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai PKK
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai Rata-rata
                </th>
                <th scope="col" class="px-6 py-3">
                    Predikat
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php

class students{
    public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $class;

    public function __construct($datastudents = []) { 
        $this->id            = $datastudents['id']?? null;
        $this->nama          = $datastudents['nama']?? null;
        $this->nilai_pbo     = $datastudents['nilai_pbo']?? null;
        $this->nilai_web     = $datastudents['nilai_web']?? null;
        $this->nilai_pkk     = $datastudents['nilai_pkk']?? null;
        $this->class         = $datastudents['class']?? null;
    }

}

$datastudents = [
    [
        'id' =>1,
        'nama' => 'yawo',
        'nilai_pbo' =>69, 
        'nilai_web' =>80, 
        'nilai_pkk' =>85,
        'class' => 'XI-RPL'
    ],
    [
        'id' =>2,
        'nama' => 'iciwi',
        'nilai_pbo' =>69, 
        'nilai_web' =>69, 
        'nilai_pkk' =>96,
        'class' => 'XI-RPL'
    ],
    [
        'id' =>3,
        'nama' => 'jong',
        'nilai_pbo' =>86, 
        'nilai_web' =>50, 
        'nilai_pkk' =>65,
        'class' => 'XI-RPL'
    ],
    [
        'id' =>4,
        'nama' => 'kumar',
        'nilai_pbo' =>55, 
        'nilai_web' =>35, 
        'nilai_pkk' =>75,
        'class' => 'XI-RPL'
    ],
    [
        'id' =>5,
        'nama' => 'epos',
        'nilai_pbo' =>25, 
        'nilai_web' =>70, 
        'nilai_pkk' =>70,
         'class' => 'XI-RPL'
    ],
    [
        'id' => 6,
        'nama' => 'en',
        'nilai_pbo' =>90, 
        'nilai_web' =>80, 
        'nilai_pkk' =>85,
        'class' => 'XII-RPL'
    ],
    [
       'id' => 7,
        'nama' => 'en',
        'nilai_pbo' =>35, 
        'nilai_web' =>75, 
        'nilai_pkk' =>100,
        'class' => 'XII-RPL'
    ],
    [
        'id' => 8,
        'nama' => 'lanci',
        'nilai_pbo' =>90, 
        'nilai_web' =>65, 
        'nilai_pkk' =>70,
        'class' => 'XII-RPL'
    ],
    [
        'id' => 9,
        'nama' => 'kaco',
        'nilai_pbo' =>100, 
        'nilai_web' =>95, 
        'nilai_pkk' =>90,
        'class' => 'XII-RPL'
    ],
    [
        'id' => 10,
        'nama' => 'oy',
        'nilai_pbo' =>95, 
        'nilai_web' =>86, 
        'nilai_pkk' =>80,
        'class' => 'XII-RPL'
    ],
];

$liststudents = [];

foreach ($datastudents as $datastudent){
   $liststudents[] = new students($datastudent);
}

$dataSiswaKelasXIIRpl = [];
$dataSiswaKelasXIRpl = [];




foreach ($liststudents as $student) {

    if ($student->class == 'XII-RPL') {
        $dataSiswaKelasXIIRpl[] = $student;
    } else {
        $dataSiswaKelasXIRpl[] = $student;
    }

    $idstudents = $student->id;
    $rata = ($student->nilai_web + $student->nilai_pbo + $student->nilai_pkk) / 3;

    if ($rata > 90) {
        $grade = 'A';
    } elseif ($rata > 86) {
        $grade = 'B+';
    } elseif ($rata > 80) {
        $grade = 'B';
    } elseif ($rata > 76) {
        $grade = 'C+';
    } elseif ($rata > 70) {
        $grade = 'C';
    } elseif ($rata > 60) {
        $grade = 'D';
    } else {
        $grade = 'Remed';
    }
    
    if (count($liststudents) == 0) {
        echo "gaada data ";

    } else {
        
?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $student->id?>
                </th>
                <td class="px-6 py-4">
                <?php echo $student->nama ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $student->nilai_pbo ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $student->nilai_web ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $student->nilai_pkk ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $rata ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $grade ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $student->class ?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <?php

    }
}

    ?>
        </tbody>
    </table>
</div>


<!--       <p> ID        : <?php echo $student->id ?> </p>
         <p> NAMA      : <?php echo $student->nama ?> </p>
         <p> NILAI_PBO : <?php echo $student->nilai_pbo ?> </p>
         <p> NILAI_WEB : <?php echo $student->nilai_web ?> </p>
         <p> NILAI_PKK : <?php echo $student->nilai_pkk ?> </p>
         <p> Rata      : <?php echo $rata ?> </p>
         <p> Grade     : <?php echo $grade ?> </p>
         <p> Class     : <?php echo $student->class ?> </p> -->

<!--          <hr> -->

     <?php
        
//     }

//     echo "<H3>JUMLAH KELAS 12 RPL</H3>"; 
//     echo  count($dataSiswaKelasXIIRpl);

//     echo "<H3>JUMLAH KELAS 11 RPL</H3>"; 
//     echo  count($dataSiswaKelasXIRpl);
// ?>
    
</body>
</html>
