<?php

use Illuminate\Database\Seeder;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contenido')->insert([
        'cont_secc'=>'subtitulo',
        'cont_con'=>'<h3>La computaci&oacute;n y la tecnolog&iacute;a son parte de nuestras vidas.</h3>\r\n\r\n<p>Crear soluciones en este nuevo mundo sin fronteras.</p>'
        //'cont_con'=>'La computación y la tecnología son parte de nuestras vidas.<br> Crear soluciones en este nuevo mundo sin fronteras.'
        ]);

        DB::table('contenido')->insert([
        'cont_secc'=>'contactanos',
        'cont_con'=>'
<h1><span style="font-size:48px"><span style="color:#ffffff">&iquest;Necesita una solucion informatica?</span></span></h1>'
        ]);

        DB::table('contenido')->insert([
         'cont_secc'=>'descripcionCliente',
         'cont_con'=>'
<div class="member-img">
<img src="{{asset("images/jefe_carrera.png")}}" alt="Jefe de carrera" class="img-fluid rounded-circle">
</div>
<div class="member-info text-center py-lg-4 py-2">
<h4>Jorge Diaz Ramirez</h4>
<p class="my-4">Jefe Carrera IECI-ICIN Universidad de Tarapacá, EUIIIS Iquique-Chile</p>
</div>'
        ]);

        DB::table('contenido')->insert([
         'cont_secc'=>'quienesSomosPerfil',
         'cont_con'=>'
<h3 class="text-center">Los egresados de Ingeniería Civil en Informática serán capaces de:</h3>
<br>
<ul>
<li>Que sea capaz de percibir, respetar y aceptar la naturaleza humana en su totalidad y que, desde esta perspectiva, sea un facilitador del desarrollo integral del individuo.</li>
<li>Dirigir proyectos que incorporen tecnologías de información y comunicación en la mejora e innovación de procesos industriales y de negocios.</li>
<li>Identificar y evaluar riesgos; aplicar aspectos de calidad y seguridad involucrados en un proceso de desarrollo, mantenimiento y operación de un sistema computacional.</li>
</ul>
<br>
<h3 class="text-center">Además, exhibirán:</h3>
<br>
<ul>
<li>Capacidad para seguir estudios avanzados y de actualización, adaptándose a nuevas responsabilidades y cambios tecnológicos.</li>
<li>Capacidad para participar en equipos multidisciplinarios aportando a la consecución de metas comunes, considerando la habilidad para escuchar y entender a los demás, estableciendo una comunicación bilingüe en un mundo globalizado.</li>
</ul>'
        ]);

        DB::table('contenido')->insert([
         'cont_secc'=>'productos',
         'cont_con'=>'
<h1 class="text-center">Productos
</h1>
<br>
<!-- DESCRIPCION PAGINA -->
<h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4> '
        ]);

        DB::table('contenido')->insert([
         'cont_secc'=>'documentos',
         'cont_con'=>'
<h1 class="text-center">Documentos
</h1>
<br>
<!-- DESCRIPCION PAGINA -->
<h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
<br>'
        ]);

    }
}
