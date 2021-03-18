<?php

include_once('item.php');

$elementos = array(array(
    '1 <br> H <br> Hidrogeno',
    '2 <br> He <br> Helio',
    '3 <br> Li <br> Litio',
    '4 <br> Be <br> Berilio',
    '5 <br> B <br> Boro',
    '6 <br> C <br> Carbono',
    '7 <br> N <br> Nitrogeno',
    '8 <br> O <br> Oxigeno',
    '9 <br> F <br> Fluor',
    '10 <br> Ne <br> Neon',
    '11 <br> Na <br> Sodio',
    '12 <br> Mg <br> Magnesio',
    '13 <br> Al <br> Aluminio',
    '14 <br> Si <br> Silico',
    '15 <br> P <br> fosforo',
    '16 <br> S <br> Azufre',
    '17 <br> Ci <br> Cloro',
    '18 <br> Ar <br> Argon',
    '19 <br> K <br> Potasio',
    '20 <br> Ca <br> Calcio',
    '21 <br> Sc <br> Escandio',
    '22 <br> Ti <br> Titanio',
    '23 <br> V <br> Vanadio',
    '24 <br> Cr <br> Cromo',
    '25 <br> Mn <br> Mangnesio',
    '26 <br> Fe <br> Hierro',
    '27 <br> Co <br> Cobalto',
    '28 <br> Ni <br> Niquel',
    '29 <br> Cu <br> Cobre',
    '30 <br> Zn <br> Zinc',
    '31 <br> Ga <br> Galio',
    '32 <br> Ge <br> Germanio',
    '33 <br> As <br> Arsenico',
    '34 <br> Se <br> Arsenico',
    '35 <br> Br <br> Selenio',
    '36 <br> Kr <br> Kripton',
    '37 <br> Rb <br> Rubidio',
    '38 <br> Sr <br> Estroncio',
    '39 <br> Y <br> Itrio',
    '40 <br> Zr <br> Zirconio',
    '41 <br> Nb <br> Niobio',
    '42 <br> Mo <br> Molibdeno',
    '43 <br> Tc <br> Tecnecio',
    '44 <br> Ru <br> Rutenio',
    '45 <br> Rh <br> Rodio',
    '46 <br> Pd <br> Paladio',
    '47 <br> Ag <br> Plata',
    '48 <br> Cd <br> Cadmnio',
    '49 <br> In <br> Indio',
    '50 <br> Sn <br> Estaño',
    '51 <br> Sb <br> Antimonio',
    '52 <br> Te <br> Telurio',
    '53 <br> I <br> Yodo',
    '54 <br> Xe <br> Xenon',
    '55 <br> Cs <br> Calsio',
    '56 <br> Ba <br> Bario',
    '57 71<br>La-Lu<br>Lantanidos',
    '72 <br> Hf <br> Hanfnio',
    '73 <br> Ta <br> Tantalo',
    '74 <br> W <br> Wolframio',
    '75 <br> Re <br> Renio',
    '76 <br> Os <br> Osmio',
    '77 <br> Ir <br> Iridio',
    '78 <br> Pt <br> Platino',
    '79 <br> Au <br> Oro',
    '80 <br> Hg <br> Mercurio',
    '81 <br> Tl <br> Talio',
    '82 <br> Pb <br> Plomo',
    '83 <br> Bi <br> Bismuto',
    '84 <br> Po <br> Polonio',
    '85 <br> At <br> Astato',
    '86 <br> Rn <br> Randon',
    '87 <br> Fr <br> Francio',
    '88 <br> Ra <br> Radio',
    '89 103<br>Ac-Lr<br>Actinidos',
    '104 <br> Rf <br> Rutherfordio',
    '105 <br> Db <br> Dubnio',
    '106 <br> Sg <br> Seaborgio',
    '107 <br> Bh <br> Bohirio',
    '108 <br> Hs <br> Hasio',
    '109 <br> Mt <br> Meltnerio',
    '110 <br> Ds <br> Darmstatio',
    '111 <br> Rg <br> Roetgenio',
    '112 <br> Cn <br> Copernicio',
    '113 <br> Nh <br> Nihonio',
    '114 <br> Fl <br> Flerovio',
    '115 <br> Mc <br> Mascovio',
    '116 <br> Lv <br> Livermorio',
    '117 <br> Ts <br> Teneso',
    '118 <br> Og <br> Oganeson',
    '57 <br> La <br> Lantano',
    '58 <br> Ce <br> Cerio',
    '59 <br> Pr <br> Proseodimio',
    '60 <br> Nd <br> Neodimio',
    '61 <br> Pm <br> Prometio',
    '62 <br> Sm <br> Samario',
    '63 <br> Eu <br> Europio',
    '64 <br> Gd <br> Gadolinio',
    '65 <br> Tb <br> Terbio',
    '66 <br> Dy <br> Disprosio',
    '67 <br> Ho <br> Holmio',
    '68 <br> Er <br> Erbio',
    '69 <br> Tm <br> Tulio',
    '70 <br> Yb <br> Iterbio',
    '71 <br> Lu <br> Lutecio',
    '89 <br> Ac <br> Actinio',
    '90 <br> Th <br> Torio',
    '91 <br> Pa <br> Protactinio',
    '92 <br> U <br> Uranio',
    '93 <br> Np <br> Neptunio',
    '94 <br> Pu <br> Plutonio',
    '95 <br> Am <br> Amercio',
    '96 <br> Cm <br> Curio',
    '97 <br> Bk <br> Berkilio',
    '98 <br> Cf <br> Californio',
    '99 <br> Es <br> Einstenio',
    '100 <br> Fm <br> Fermio',
    '101 <br> Md <br> Mendelevio',
    '102 <br> No <br> Nobello',
    '103  <br> Lr <br> Lawrencio',

    'Alcalinos',
    'Alcalinoterreos',
    'Metales de Trancision/Bloque D',
    'Lantanidos',
    'Actinidos',
    'Otros Metales',
    'Metaloides',
    'Otros no Metales',
    'Halogeneos',
    'Gases Nobles'

));



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='css/estilo.css'>

</head>

<body>
    <h1>Tabla periodica en PHP</h1>
    <div class="tabla">
        <table>
            <?php

            for ($x = 0; $x < count($elementos); $x++) { 
                ?>

                <tr>

                    <th class="oNoMetales"><?php echo $elementos[$x][0] ?></th>



                    <td colspan="16"></td>
                    <th class="GasesNobles"><?php echo $elementos[$x][1] ?></th>

                </tr>

                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][2] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][3] ?></th>
                    <td colspan="10"></td>
                    <th class="Metaloides"><?php echo $elementos[$x][4] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][5] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][6] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][7] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][8] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][9] ?></th>

                </tr>

                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][10] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][11] ?></th>
                    <td colspan="10"></td>
                    <th class="Ometales"><?php echo $elementos[$x][12] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][13] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][14] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][15] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][16] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][17] ?></th>


                </tr>
                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][18] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][19] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][20] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][21] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][22] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][23] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][24] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][25] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][26] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][27] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][28] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][29] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][30] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][31] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][32] ?></th>
                    <th class="oNoMetales"><?php echo $elementos[$x][33] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][34] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][35] ?></th>


                </tr>
                </tr>
                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][36] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][37] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][38] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][39] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][40] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][41] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][42] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][43] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][44] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][45] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][46] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][47] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][48] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][49] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][50] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][51] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][52] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][53] ?></th>


                </tr>
                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][54] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][55] ?></th>
                    <th class="Lantanidos"><?php echo $elementos[$x][56] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][57] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][58] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][59] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][60] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][61] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][62] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][63] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][64] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][65] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][66] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][67] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][68] ?></th>
                    <th class="Metaloides"><?php echo $elementos[$x][69] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][70] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][71] ?></th>

                </tr>
                <tr>
                    <th class="Alcalinos"><?php echo $elementos[$x][72] ?></th>
                    <th class="alcalinoterreos"><?php echo $elementos[$x][73] ?></th>
                    <th class="actinidos"><?php echo $elementos[$x][74] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][75] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][76] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][77] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][78] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][79] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][80] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][81] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][82] ?></th>
                    <th class="MetalesTransicion"><?php echo $elementos[$x][83] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][84] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][85] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][86] ?></th>
                    <th class="Ometales"><?php echo $elementos[$x][87] ?></th>
                    <th class="Halogenos"><?php echo $elementos[$x][88] ?></th>
                    <th class="GasesNobles"><?php echo $elementos[$x][89] ?></th>


                </tr>


        </table>

        <div class="tabla2">

            <table>
                <tr>
                    <th class="Lantanidos"> <?php echo $elementos[$x][90] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][91] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][92] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][93] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][94] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][95] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][96] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][97] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][98] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][99] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][100] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][101] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][102] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][103] ?></th>
                    <th class="Lantanidos"> <?php echo $elementos[$x][104] ?></th>
                </tr>

                <tr>
                    <th class="actinidos"> <?php echo $elementos[$x][105] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][106] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][107] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][108] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][109] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][110] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][111] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][112] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][113] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][114] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][115] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][116] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][117] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][118] ?></th>
                    <th class="actinidos"> <?php echo $elementos[$x][119] ?></th>

                </tr>

        </div>
        </table>

        <table class="tabla3">
            <tr>

                <td class="metales" colspan="6">
                    <h3>Metales</h3>
                </td>
                <td class="Metaloides" colspan="1"></td>
                <td class="metales" colspan="3">
                    <h3>No Metales</h3>
                </td>

            </tr>
            <tr>
                <th class="Alcalinos"> <?php echo $elementos[$x][120] ?></th>
                <th class="alcalinoterreos"> <?php echo $elementos[$x][121] ?></th>
                <th class="MetalesTransicion"> <?php echo $elementos[$x][122] ?></th>
                <th class="Lantanidos"> <?php echo $elementos[$x][123] ?></th>
                <th class="actinidos"> <?php echo $elementos[$x][124] ?></th>
                <th class="Ometales"> <?php echo $elementos[$x][125] ?></th>
                <th class="Metaloides"> <?php echo $elementos[$x][126] ?></th>
                <th class="oNoMetales"> <?php echo $elementos[$x][127] ?></th>
                <th class="Halogenos"> <?php echo $elementos[$x][128] ?></th>
                <th class="GasesNobles"> <?php echo $elementos[$x][129] ?></th>
            </tr>

        </table>


    <?php
            } ?>


    </div>

</body>

</html>