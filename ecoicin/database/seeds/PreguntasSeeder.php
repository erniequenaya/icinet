<?php

use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* 1 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Entiendo algo mejor después de que yo',
          'enun_ing' => 'I understand something better after I',
          'alt_a_esp' => 'Probarlo',
          'alt_a_ing' => 'Try it out',
          'alt_b_esp' => 'Pensarlo bien',
          'alt_b_ing' => 'Think it through'
      ]);

      /* 2 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero ser considerado',
          'enun_ing' => 'I would rather be considered',
          'alt_a_esp' => 'Realista',
          'alt_a_ing' => 'Realistic',
          'alt_b_esp' => 'Innovador',
          'alt_b_ing' => 'Innovative'
      ]);

      /* 3 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando pienso en lo que hice ayer, es más probable que obtenga',
          'enun_ing' => 'When I think about what I did yesterday, I am most likely to get',
          'alt_a_esp' => 'Una foto',
          'alt_a_ing' => 'A picture',
          'alt_b_esp' => 'Palabras',
          'alt_b_ing' => 'Words'
      ]);

      /* 4 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Tiendo a',
          'enun_ing' => 'I tend to',
          'alt_a_esp' => 'Entender los detalles de un tema, pero a confundirme acerca de su estructura general',
          'alt_a_ing' => 'Understand details of a subject but may be fuzzy about its overall structure',
          'alt_b_esp' => 'Entender la estructura general, pero a confundirme acerca de los detalles',
          'alt_b_ing' => 'Understand the overall structure but may be fuzzy about details'
      ]);

      /* 5 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando estoy aprendiendo algo nuevo, me ayuda',
          'enun_ing' => 'When I am learning something new, it helps me to',
          'alt_a_esp' => 'Hablar de ello',
          'alt_a_ing' => 'Talk about it',
          'alt_b_esp' => 'Pensar en ello',
          'alt_b_ing' => 'Think about it'
      ]);

      /* 6 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Si fuera profesor, preferiría dar un curso',
          'enun_ing' => 'If I were a teacher, I would rather teach a course',
          'alt_a_esp' => 'Que trata de hechos y situaciones de la vida real',
          'alt_a_ing' => 'That deals with facts and real life situations',
          'alt_b_esp' => 'Que trata de ideas y teorías',
          'alt_b_ing' => 'That deals with ideas and theories'
      ]);

      /* 7 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero obtener nueva información en',
          'enun_ing' => 'I prefer to get new information in',
          'alt_a_esp' => 'Imágenes, diagramas, gráficos, o mapas',
          'alt_a_ing' => 'Pictures, diagrams, graphs, or maps',
          'alt_b_esp' => 'Instrucciones escritas o información verbal',
          'alt_b_ing' => 'Written directions or verbal information'
      ]);

      /* 8 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Una vez que entiendo',
          'enun_ing' => 'Once I understand',
          'alt_a_esp' => 'Todas las partes, entiendo el todo',
          'alt_a_ing' => 'All the parts, I understand the whole thing',
          'alt_b_esp' => 'El todo, veo cómo encajan las partes',
          'alt_b_ing' => 'The whole thing, I see how the parts fit'
      ]);

      /* 9 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'En un grupo de estudio, trabajando materia difícil, es más probable que',
          'enun_ing' => 'In a study group working on difficult material, I am more likely to',
          'alt_a_esp' => 'Entre y aporte ideas',
          'alt_a_ing' => 'Jump in and contribute ideas',
          'alt_b_esp' => 'Me siente y escuche',
          'alt_b_ing' => 'Sit back and listen'
      ]);

      /* 10 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Me resulta más fácil',
          'enun_ing' => 'I find it easier',
          'alt_a_esp' => 'Aprender hechos',
          'alt_a_ing' => 'To learn facts',
          'alt_b_esp' => 'Aprender conceptos',
          'alt_b_ing' => 'To learn concepts'
      ]);

      /* 11 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'En un libro con muchas fotos y cuadros, es más probable que',
          'enun_ing' => 'In a book with lots of pictures and charts, I am likely to',
          'alt_a_esp' => 'Mire las fotos y cuadros cuidadosamente',
          'alt_a_ing' => 'Look over the pictures and charts carefully',
          'alt_b_esp' => 'Me centre en el texto escrito',
          'alt_b_ing' => 'Focus on the written text'
      ]);

      /* 12 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando resuelvo problemas de matemáticas',
          'enun_ing' => 'When I solve math problems',
          'alt_a_esp' => 'Generalmente me abro camino a las soluciones paso a paso',
          'alt_a_ing' => 'I usually work my way to the solutions one step at a time',
          'alt_b_esp' => 'A menudo solo veo las soluciones, pero luego tengo que luchar para descubrir los pasos para llegar a ellos',
          'alt_b_ing' => 'I often just see the solutions but then have to struggle to figure out the steps to get to them'
      ]);

      /* 13 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'En las clases que he tomado',
          'enun_ing' => 'In classes I have taken',
          'alt_a_esp' => 'Por lo general he llegado a conocer a muchos de los estudiantes',
          'alt_a_ing' => 'I have usually gotten to know many of the students',
          'alt_b_esp' => 'Raras veces he llegado a conocer a muchos de los estudiantes',
          'alt_b_ing' => 'I have rarely gotten to know many of the students'
      ]);

      /* 14 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Al leer algo sin ficción, prefiero',
          'enun_ing' => 'In reading nonfiction, I prefer',
          'alt_a_esp' => 'Algo que me enseñe nuevos hechos o me diga cómo hacer algo',
          'alt_a_ing' => 'Something that teaches me new facts or tells me how to do something',
          'alt_b_esp' => 'Algo que me de nuevas ideas para pensar',
          'alt_b_ing' => 'Something that gives me new ideas to think about'
      ]);

      /* 15 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Me gustan los profesores',
          'enun_ing' => 'I like teachers',
          'alt_a_esp' => 'Que ponen muchos diagramas en la pizarra',
          'alt_a_ing' => 'Who put a lot of diagrams on the board',
          'alt_b_esp' => 'Que pasan mucho tiempo explicando',
          'alt_b_ing' => 'Who spend a lot of time explaining'
      ]);

      /* 16 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando estoy analizando una historia o novela',
          'enun_ing' => 'When I’m analyzing a story or a novel',
          'alt_a_esp' => 'Pienso en los eventos y trato de juntarlos para descubrir los temas',
          'alt_a_ing' => 'I think of the incidents and try to put them together to figure out the themes',
          'alt_b_esp' => 'Solo sé cuáles son los temas cuando termino de leer y luego tengo que regresar y encontrar los eventos que los demuestran',
          'alt_b_ing' => 'I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them'
      ]);

      /* 17 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando empiezo a trabajar en un problema enviado como tarea, es más probable que',
          'enun_ing' => 'When I start a homework problem, I am more likely to',
          'alt_a_esp' => 'Empiece a trabajar en la solución inmediatamente',
          'alt_a_ing' => 'Start working on the solution immediately',
          'alt_b_esp' => 'Trate de entender completamente el problema primero',
          'alt_b_ing' => 'Try to fully understand the problem first'
      ]);

      /* 18 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero la idea de',
          'enun_ing' => 'I prefer the idea of',
          'alt_a_esp' => 'La certeza',
          'alt_a_ing' => 'Certainty',
          'alt_b_esp' => 'La teoría',
          'alt_b_ing' => 'Theory'
      ]);

      /* 19 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Recuerdo mejor',
          'enun_ing' => 'I remember best',
          'alt_a_esp' => 'Lo que veo',
          'alt_a_ing' => 'What I see',
          'alt_b_esp' => 'Lo que oigo',
          'alt_b_ing' => 'What I hear'
      ]);

      /* 20 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Es más importante para mí que un instructor',
          'enun_ing' => 'It is more important to me that an instructor',
          'alt_a_esp' => 'Coloque el material en pasos secuenciales claros',
          'alt_a_ing' => 'Lay out the material in clear sequential steps',
          'alt_b_esp' => 'Me dé una imagen general y relacione el material con otros temas',
          'alt_b_ing' => 'Give me an overall picture and relate the material to other subjects'
      ]);

      /* 21 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero estudiar',
          'enun_ing' => 'I prefer to study',
          'alt_a_esp' => 'En un grupo de estudio',
          'alt_a_ing' => 'In a study group',
          'alt_b_esp' => 'Solo',
          'alt_b_ing' => 'Alone'
      ]);

      /* 22 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Tengo más probabilidades de ser considerado',
          'enun_ing' => 'I am more likely to be considered',
          'alt_a_esp' => 'Cuidadoso con los detalles de mi trabajo',
          'alt_a_ing' => 'Careful about the details of my work',
          'alt_b_esp' => 'Creativo sobre cómo hacer mi trabajo',
          'alt_b_ing' => 'Creative about how to do my work'
      ]);

      /* 23 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando me dan direcciones hacia un nuevo lugar, prefiero',
          'enun_ing' => 'When I get directions to a new place, I prefer',
          'alt_a_esp' => 'Un mapa',
          'alt_a_ing' => 'A map',
          'alt_b_esp' => 'Instrucciones escritas',
          'alt_b_ing' => 'Written instructions'
      ]);

      /* 24 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Yo aprendo',
          'enun_ing' => 'I learn',
          'alt_a_esp' => 'A un ritmo bastante regular. Si estudio mucho, lo conseguiré',
          'alt_a_ing' => 'At a fairly regular pace. If I study hard, I’ll get it.',
          'alt_b_esp' => 'En ataques y arranques. Estoy totalmente confundido y luego, de repente, todo hace clics',
          'alt_b_ing' => 'In fits and starts. I’ll be totally confused and then suddenly it all clicks'
      ]);

      /* 25 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero primero',
          'enun_ing' => 'I would rather first',
          'alt_a_esp' => 'Probar las cosas',
          'alt_a_ing' => 'Try things out',
          'alt_b_esp' => 'Pensar en cómo lo voy a hacer',
          'alt_b_ing' => 'Think about how I’m going to do it'
      ]);

      /* 26 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando leo por placer, me gustan que los escritores',
          'enun_ing' => 'When I am reading for enjoyment, I like writers to',
          'alt_a_esp' => 'Digan claramente lo que quieren decir',
          'alt_a_ing' => 'Clearly say what they mean',
          'alt_b_esp' => 'Digan las cosas de manera creativa y/o interesante',
          'alt_b_ing' => 'Say things in creative, interesting ways'
      ]);

      /* 27 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando veo un diagrama o boceto en clase, es más probable que recuerde',
          'enun_ing' => 'When I see a diagram or sketch in class, I am most likely to remember',
          'alt_a_esp' => 'La imagen',
          'alt_a_ing' => 'The picture',
          'alt_b_esp' => 'Lo que dijo el instructor al respecto',
          'alt_b_ing' => 'What the instructor said about it'
      ]);

      /* 28 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Al encontrarme con un párrafo de información, es más probable que',
          'enun_ing' => 'When considering a body of information, I am more likely to',
          'alt_a_esp' => 'Me centre en los detalles y pierda el panorama general',
          'alt_a_ing' => 'Focus on details and miss the big picture',
          'alt_b_esp' => 'Trate de entender el panorama general antes de entrar en los detalles',
          'alt_b_ing' => 'Try to understand the big picture before getting into the details'
      ]);

      /* 29 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Recuerdo más fácilmente',
          'enun_ing' => 'I more easily remember',
          'alt_a_esp' => 'Algo que he hecho',
          'alt_a_ing' => 'Something I have done',
          'alt_b_esp' => 'Algo en lo que he pensado mucho',
          'alt_b_ing' => 'Something I have thought a lot about'
      ]);

      /* 30 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando tengo que realizar una tarea, prefiero',
          'enun_ing' => 'When I have to perform a task, I prefer to',
          'alt_a_esp' => 'Dominar una forma de hacerlo',
          'alt_a_ing' => 'Master one way of doing it',
          'alt_b_esp' => 'Idear nuevas formas de hacerlo',
          'alt_b_ing' => 'Come up with new ways of doing it'
      ]);

      /* 31 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando alguien me está mostrando datos, prefiero',
          'enun_ing' => 'When someone is showing me data, I prefer',
          'alt_a_esp' => 'Tablas o gráficos',
          'alt_a_ing' => 'Charts or graphs',
          'alt_b_esp' => 'Texto que resuma los resultados',
          'alt_b_ing' => 'Text summarizing the results'
      ]);

      /* 32 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Al escribir un informe, es más probable que',
          'enun_ing' => 'When writing a paper, I am more likely to',
          'alt_a_esp' => 'Trabaje en (piense o escriba) el comienzo del documento y avance hacia adelante',
          'alt_a_ing' => 'Work on (think about or write) the beginning of the paper and progress forward',
          'alt_b_esp' => 'Trabaje en (piense o escriba) diferentes partes del documento y luego ordenarlas',
          'alt_b_ing' => 'Work on (think about or write) different parts of the paper and then order them'
      ]);

      /* 33 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando tengo que trabajar en un proyecto de grupo, primero quiero',
          'enun_ing' => 'When I have to work on a group project, I first want to',
          'alt_a_esp' => 'Tener una lluvia de ideas donde todos aporten ideas',
          'alt_a_ing' => 'Have group brainstorming where everyone contributes ideas',
          'alt_b_esp' => 'Haga una lluvia de ideas individualmente y luego forme un grupo para comparar ideas',
          'alt_b_ing' => 'Brainstorm individually and then come together as a group to compare ideas'
      ]);

      /* 34 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Considero un elogio más grande llamar a alguien',
          'enun_ing' => 'I consider it higher praise to call someone',
          'alt_a_esp' => 'Sensato',
          'alt_a_ing' => 'Sensible',
          'alt_b_esp' => 'Imaginativo',
          'alt_b_ing' => 'Imaginative'
      ]);

      /* 35 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando me encuentro con gente en una fiesta, es más probable que recuerde',
          'enun_ing' => 'When I meet people at a party, I am more likely to remember',
          'alt_a_esp' => 'Cómo se veían',
          'alt_a_ing' => 'What they looked like',
          'alt_b_esp' => 'Lo que dijeron de ellos mismos',
          'alt_b_ing' => 'What they said about themselves'
      ]);

      /* 36 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando estoy aprendiendo un nuevo tema, prefiero',
          'enun_ing' => 'When I am learning a new subject, I prefer to',
          'alt_a_esp' => 'Mantener el enfoque en ese tema, aprendiendo lo que más pueda sobre éste',
          'alt_a_ing' => 'Stay focused on that subject, learning as much about it as I can',
          'alt_b_esp' => 'Tratar de hacer conexiones entre ese tema y temas relacionados',
          'alt_b_ing' => 'Try to make connections between that subject and related subjects'
      ]);

      /* 37 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Tengo más probabilidades de ser considerado',
          'enun_ing' => 'I am more likely to be considered',
          'alt_a_esp' => 'Extrovertido',
          'alt_a_ing' => 'Outgoing',
          'alt_b_esp' => 'Reservado',
          'alt_b_ing' => 'Reserved'
      ]);

      /* 38 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Prefiero cursos que enfaticen',
          'enun_ing' => 'I prefer courses that emphasize',
          'alt_a_esp' => 'Material concreto (hechos, datos)',
          'alt_a_ing' => 'Concrete material (facts, data)',
          'alt_b_esp' => 'Material abstracto (conceptos, teorías)',
          'alt_b_ing' => 'Abstract material (concepts, theories)'
      ]);

      /* 39 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Para el entretenimiento, preferiría',
          'enun_ing' => 'For entertainment, I would rather',
          'alt_a_esp' => 'Ver televisión',
          'alt_a_ing' => 'Watch television',
          'alt_b_esp' => 'Leer un libro',
          'alt_b_ing' => 'Read a book'
      ]);

      /* 40 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Algunos maestros comienzan sus clases con un resumen de lo que cubrirán. Estos resúmenes son',
          'enun_ing' => 'Some teachers start their lectures with an outline of what they will cover. Such outlines are',
          'alt_a_esp' => 'Algo útil para mi',
          'alt_a_ing' => 'Somewhat helpful to me',
          'alt_b_esp' => 'Muy útil para mí',
          'alt_b_ing' => 'Very helpful to me'
      ]);

      /* 41 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'La idea de hacer la tarea en grupos, con un grado para todo el grupo',
          'enun_ing' => 'The idea of doing homework in groups, with one grade for the entire group',
          'alt_a_esp' => 'Me atrae',
          'alt_a_ing' => 'Appeals to me',
          'alt_b_esp' => 'No me atrae',
          'alt_b_ing' => 'Does not appeal to me'
      ]);

      /* 42 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Cuando estoy haciendo largos cálculos',
          'enun_ing' => 'When I am doing long calculations',
          'alt_a_esp' => 'Tiendo a repetir todos mis pasos y revisar mi trabajo cuidadosamente',
          'alt_a_ing' => 'I tend to repeat all my steps and check my work carefully',
          'alt_b_esp' => 'Me resulta cansador revisar mi trabajo y tengo que obligarme a hacerlo',
          'alt_b_ing' => 'I find checking my work tiresome and have to force myself to do it'
      ]);

      /* 43 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Tiendo a imaginar lugares en los que he estado',
          'enun_ing' => 'I tend to picture places I have been',
          'alt_a_esp' => 'Fácil y de manera bastante precisa',
          'alt_a_ing' => 'Easily and fairly accurately',
          'alt_b_esp' => 'Con dificultad y sin mucho detalle',
          'alt_b_ing' => 'With difficulty and without much detail'
      ]);

      /* 44 */
      DB::table('preguntas')->insert([
          'enun_esp' => 'Al resolver problemas en grupo, sería más probable que',
          'enun_ing' => 'When solving problems in a group, I would be more likely to',
          'alt_a_esp' => 'Piense en los pasos del proceso a la solución',
          'alt_a_ing' => 'Think of the steps in the solution process',
          'alt_b_esp' => 'Piense en las posibles consecuencias o aplicaciones de la solución en una amplia gama de áreas',
          'alt_b_ing' => 'Think of possible consequences or applications of the solution in a wide range of areas'
      ]);
    }
}
