@extends('layout')

@include('include/header')

@section('main')
<script src="{{asset('js/Chart/dist/Chart.js')}}"></script>

  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Encuesta'</li>
  </ol>
  <!-- banner-text -->
  <section class="banner-bottom-wthree">

    <!-- <h3 class="tittle text-center mb-lg-5 mb-3">.</h3> -->



    <div class="container">
        <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">Resultado encuesta
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h3>

        </div>
        @php
          //var_dump($cuestionario);
        @endphp
        <canvas id="myChart" height="50"></canvas>

        <br>

        <div class="container">
          <h4>Diferencias finales</h4>
          <h4>Activo/Reflexivo: {{abs($cuestionario[0]['puntaje']).$cuestionario[0]['alt_mayor']}}</h4>
          <h4>Sensitivo/Intuitivo: {{abs($cuestionario[1]['puntaje']).$cuestionario[1]['alt_mayor']}}</h4>
          <h4>Visual/Verbal:{{abs($cuestionario[2]['puntaje']).$cuestionario[2]['alt_mayor']}}</h4>
          <h4>Secuencial/Global:{{abs($cuestionario[3]['puntaje']).$cuestionario[3]['alt_mayor']}}</h4>
        </div>

        <div class="text-justify">
          <p>
            De acuerdo con el modelo en el que se basa el ILS, hay cuatro dimensiones del estilo de aprendizaje, y cada dimensión tiene dos categorías opuestas (como activa y reflexiva). La puntuación informada para una dimensión indica su preferencia por una categoría u otra.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 1 o 3, está bastante bien equilibrado en las dos categorías de esa dimensión, con solo una leve preferencia por una u otra.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 5 o 7, tiene una preferencia moderada por una categoría de esa dimensión. Es posible que aprenda menos fácilmente en un entorno que no logra abordar esa preferencia al menos parte del tiempo que lo haría en un entorno más equilibrado.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 9 u 11, tiene una fuerte preferencia por una categoría de esa dimensión. Es posible que tenga dificultades para aprender en un entorno que no logra abordar esa preferencia al menos parte del tiempo.
          </p>

          {{ csrf_field() }}
          <span>Recomendaciones</span>
          <div class="input-group container col-2 ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Idioma</label>
            </div>
            <select class="custom-select" id="idioma" name='idioma'>
              <option selected value="espanol">Español</option>
              <option value="ingles">Ingles</option>
            </select>
          </div>
          <br>
          <div id="espanol">
              <div class="container-fluid">
                <div class="row">
                  ESTUDIANTES ACTIVOS Y REFLEXIVOS<br>
                  • Los estudiantes activos tienden a retener y entender mejor la información haciendo algo activo con ella, discutiéndola, aplicándola o explicándola a otros. Los estudiantes reflexivos prefieren pensar en ello primero en silencio.<br>
                  • “Probemos y veamos cómo funciona” es una frase de un alumno activo; "Pensemoslo primero" es la respuesta de un alumno reflexivo.<br>
                  • A los estudiantes activos les suele gustar el trabajo en grupo más que los estudiantes reflexivos, que prefieren trabajar solos.<br>
                  • Sentarse a través de las clases sin llegar a hacer nada físico pero tomar notas es difícil para ambos tipos de aprendizaje, pero particularmente difícil para los activos alumnos.<br>
                  Todo el mundo es activo a veces y reflexivo otras. Su preferencia por una categoría u otra puede ser fuerte, moderada o leve. Un equilibrio entre los dos es deseable. Si siempre actúas antes de reflexionar, puedes saltar a las cosas prematuramente y meterte en problemas, mientras que si pasas demasiado tiempo reflexionando, es posible que nunca puedas hacer nada.<br>
                  ¿Cómo pueden ayudarse los alumnos activos?<br>
                  Si eres un aprendiz activo en una clase que permite poco o ningún tiempo de clase para el debate o actividades de resolución de problemas, debes tratar de compensar estas carencias cuando estudias. Estudia en un grupo en el que los miembros se turnen para explicar diferentes temas entre sí. Trabaje con otros para adivinar lo que se le pedirá en la próxima prueba y averiguar cómo responderá. Siempre retendrá mejor la información si encuentra maneras de hacer algo con ella.<br>
                  ¿Cómo pueden ayudarse los alumnos reflexivos a sí mismos?<br>
                  Si eres un alumno reflexivo en una clase que permite poco o ningún tiempo para pensar en nueva información, debes tratar de compensar esta falta cuando estudias. No se limite a leer o memorizar el material; deténgase periódicamente para revisar lo que ha leído y para pensar en posibles preguntas o aplicaciones. Puede que le resulte útil escribir resúmenes cortos de lecturas o apuntes de clase con sus propias palabras. Si lo hace, puede llevar tiempo adicional, pero le permitirá retener el contenido de manera más efectiva.<br>
                  <br>
                  <br>
                  ALUMNOS PERCEPTIVOS E INTUITIVOS<br>
                  • Los estudiantes perceptivos tienen tendencia a preferir aprender hechos, los estudiantes intuitivos a menudo prefieren descubrir posibilidades y relaciones.<br>
                  • A los perceptivos a menudo les gusta resolver problemas con métodos bien establecidos y no les gustan las complicaciones y sorpresas; los intuitivos prefieren la innovación y no les gusta la repetición. Es más probable que los perceptivos, más que los intuitivos, resientan haber sido evaluados por material que no se haya cubierto explícitamente en clase.<br>
                  • Los perceptivos tienden a ser pacientes con los detalles y buenos para memorizar hechos y realizar trabajos prácticos (de laboratorio); Los intérpretes pueden ser mejores para captar nuevos conceptos y, a menudo, son más cómodos que los perceptivos con abstracciones y formulaciones matemáticas.<br>
                  • Los perceptivos tienden a ser más prácticos y cuidadosos que los intuitivos; Los intuitivos tienden a trabajar más rápido y son más innovadores que los perceptivos.<br>
                  • A los perceptivos no les gustan los cursos que no tienen una conexión aparente con el mundo real; a los intérpretes no les gustan los cursos "plug-and-chug" que involucran mucha memorización y cálculos de rutina.<br>
                  <br>
                  Todo el mundo es perceptivo a veces e intuitivo otras. Su preferencia por uno u otro puede ser fuerte, moderada o leve. Para ser efectivo como estudiante y solucionador de problemas, debe poder funcionar en ambos sentidos. Si hace demasiado hincapié en la intuición, puede olvidar detalles importantes o cometer errores por descuido en cálculos o trabajo práctico; si hace demasiado hincapié en la percepción, puede confiar demasiado en la memorización y los métodos familiares y no concentrarse lo suficiente en comprensión y pensamiento innovador.<br>
                  <br>
                  ¿Cómo pueden ayudarse a sí mismos los estudiantes perceptivos?<br>
                  Los perceptivos recuerdan y comprenden mejor la información si pueden ver cómo se conecta con el mundo real. Si estás en una clase donde la mayoría del material es abstracto y teórico, puedes tener dificultades. Pídale a su instructor ejemplos específicos de conceptos y procedimientos, y descubra cómo se aplican los conceptos en la práctica. Si el profesor no proporciona suficientes detalles específicos, intente encontrar alguno en el texto del curso u otras referencias o intercambie ideas con amigos o compañeros de clase.<br>
                  <br>
                  ¿Cómo pueden ayudarse los aprendices intuitivos?<br>
                  Muchas cátedras universitarias están dirigidas a gente intuitiva. Sin embargo, si usted es un intuidor y está en una clase que ocupa principalmente memorización y sustitución en fórmulas, puede tener problemas de aburrimiento. Pídale a su instructor interpretaciones o teorías que vinculan los hechos, o intente encontrar las conexiones usted mismo. También puede ser propenso a cometer errores por descuido en pruebas porque es impaciente con los detalles y no le gusta la repetición (como el verificar tus soluciones). Tómese tiempo para leer la pregunta completa antes de comenzar a responder y asegúrese de verificar sus resultados.<br>
                  <br>
                  ESTUDIANTES VISUALES Y VERBALES<br>
                  Los alumnos visuales recuerdan mejor lo que ven: imágenes, diagramas, diagramas de flujo, líneas de tiempo, películas y demostraciones. Los estudiantes verbales obtienen más de las palabras: explicaciones escritas y habladas. Todos aprenden más cuando la información se presenta tanto visual como verbalmente.<br>
                  En la mayoría de las clases universitarias se presenta muy poca información visual: los estudiantes escuchan principalmente cátedras y leen material escrito en pizarras,libros de texto y folletos.<br>
                  <br>
                  Desafortunadamente, la mayoría de las personas son aprendices visuales, lo que significa que la mayoría de los estudiantes no obtienen tanto como lo harían si se usara una presentación más visual en clases. Los buenos alumnos son capaces de procesar la información presentada de forma visual o verbal.<br>
                  <br>
                  ¿Cómo pueden ayudarse los alumnos visuales?<br>
                  Si eres un alumno visual, intenta encontrar diagramas, bocetos, esquemas, fotografías, diagramas de flujo o cualquier otra representación visual del material del curso que sea predominantemente verbal. Pregunte a su instructor, consulte libros de referencia y vea si hay algun video del material del curso disponible. Prepare un mapa conceptual al enumerar los puntos clave, encerrándolos en cuadros o círculos, y dibujando líneas con flechas entre los conceptos para mostrar las conexiones. Coloree sus notas con un marcador para que todo lo relacionado con un tema sea del mismo color.<br>
                  ¿Cómo pueden ayudarse los estudiantes verbales?<br>
                  Escriba resúmenes o esquemas del material del curso en sus propias palabras. Trabajar en grupo puede ser particularmente efectivo: puedes comprender mejor el material al escuchar las explicaciones de tus compañeros y aprendes aún más cuando tu haces la explicación.<br>
                  <br>
                  ESTUDIANTES SECUENCIALES Y GLOBALES<br>
                  • Los estudiantes secuenciales tienden a ganar entendimiento en pasos lineales, con cada paso siguiendo lógicamente el anterior. Los estudiantes globales tienden a aprender en saltos grandes, absorbiendo material casi al azar sin ver las conexiones, y luego de repente "lo entienden".<br>
                  • Los estudiantes secuenciales tienden a seguir caminos lógicos por pasos para encontrar soluciones; los estudiantes globales pueden ser capaces de resolver problemas complejos rápidamente o juntar las cosas de una manera novedosa una vez que han captado el panorama general, pero pueden tener dificultades para explicar cómo lo hicieron.<br>
                  <br>
                  Muchas personas que leen esta descripción pueden concluir incorrectamente que son globales, ya que todos han experimentado desconcierto seguido de un repentino destello de comprensión. Lo que te hace global o no es lo que sucede antes de que se encienda la bombilla. Es posible que los estudiantes secuenciales no entiendan completamente el material, pero sin embargo pueden hacer algo con él (como resolver los problemas de la tarea o pasar una prueba) ya que las piezas que han absorbido están conectadas lógicamente. Por otro lado, los estudiantes fuertemente globales que carecen de buenas habilidades de pensamiento secuencial pueden tener serias dificultades hasta que tengan una visión general. Incluso después de que lo tienen, pueden sentirse confusos acerca de los detalles de la asignatura, mientras que los estudiantes secuenciales pueden saber mucho sobre aspectos específicos de una asignatura, pero pueden tener problemas para relacionarlos con diferentes aspectos de la misma asignatura o con otras diferentes.<br>
                  <br>
                  ¿Cómo pueden ayudarse los alumnos secuenciales?<br>
                  La mayoría de los cursos universitarios se imparten de manera secuencial. Sin embargo, si eres un estudiante secuencial y tienes un instructor que salta de un tema a otro o salta pasos, es posible que tengas dificultades para seguir y recordar. Pídale al instructor que complete los pasos omitidos o llénelos usted mismo consultando referencias. Cuando esté estudiando, tómese el tiempo para delinear el material de la clase en un orden lógico. A la larga, hacerlo te ahorrará tiempo. También puede tratar de fortalecer sus habilidades de pensamiento global relacionando cada nuevo tema que estudie con cosas que ya sabe. Cuanto más pueda hacerlo, más profundo será su comprensión del tema.<br>
                  <br>
                  ¿Cómo pueden ayudarse los estudiantes globales?<br>
                  Si eres un estudiante global, tan solo reconocer que no eres lento, sino que solamente funcionas de manera diferente a la mayoría de tus compañeros de clase puede ser de gran ayuda. Sin embargo, hay algunos pasos que puedes tomar para ayudarte a tener una visión general. mas rapido. Antes de comenzar a estudiar la primera sección de un capítulo en un texto, repase todo el capítulo para obtener una descripción general. Hacerlo inicialmente puede llevar mucho tiempo, pero puede evitar que vuelva a repasar las partes individuales más tarde. En lugar de dedicar poco tiempo a cada tema todas las noches, puede que le resulte más productivo sumergirse en temas individuales a grandes bloques.<br>
                  Intente relacionar el tema con cosas que ya sabe, ya sea pidiéndole al instructor que lo ayude a ver las conexiones o consultando referencias. Por encima de todo, no pierdas la fe en ti mismo; eventualmente entenderá la nueva materia, y una vez que comprenda cómo se conecta con otros temas y disciplinas, podrás aplicarlo de maneras que la mayoría de los pensadores secuenciales nunca hubieran soñado.<br>

                </div>
              </div>
          </div>
          <div id="ingles">
              <div class="container-fluid">
                <div class="row">
                  ACTIVE AND REFLECTIVE LEARNERS<br>
                  • Active learners tend to retain and understand information best by doing something active with it—discussing or applying it or explaining it to others. Reflective learners prefer to think about it quietly first.<br>
                  • “Let’s try it out and see how it works” is an active learner’s phrase; “Let’s think it through first” is the reflective learner’s response.<br>
                  • Active learners tend to like group work more than reflective learners, who prefer working alone.<br>
                  • Sitting through lectures without getting to do anything physical but take notes is hard for both learning types, but particularly hard for active learners.<br>
                  Everybody is active sometimes and reflective sometimes. Your preference for one category or the other may be strong, moderate, or mild. A balance of the two is desirable. If you always act before reflecting you can jump into things prematurely and get into trouble, while if you spend too much time reflecting you may never get anything done.<br>
                  How can active learners help themselves?<br>
                  If you are an active learner in a class that allows little or no class time for discussion or problem-solving activities, you should try to compensate for these lacks when you study. Study in a group in which the members take turns explaining different topics to each other. Work with others to guess what you will be asked on the next test and figure out how you will answer. You will always retain information better if you find ways to do something with it.<br>
                  How can reflective learners help themselves?<br>
                  If you are a reflective learner in a class that allows little or not class time for thinking about new information, you should try to compensate for this lack when you study. Don’t simply read or memorize the material; stop periodically to review what you have read and to think of possible questions or applications. You might find it helpful to write short summaries of readings or class notes in your own words. Doing so may take extra time but will enable you to retain the<br>
                  material more effectively.<br>
                  <br>
                  SENSING AND INTUITIVE LEARNERS<br>
                  • Sensing learners tend to like learning facts, intuitive learners often prefer discovering possibilities and relationships.<br>
                  • Sensors often like solving problems by well-established methods and dislike complications and surprises; intuitors like innovation and dislike repetition. Sensors are more likely than intuitors to resent being tested on material that has not been explicitly covered in class.<br>
                  • Sensors tend to be patient with details and good at memorizing facts and doing hands-on (laboratory) work; intuitors may be better at grasping new concepts and are often more comfortable than sensors with abstractions and mathematical formulations.<br>
                  • Sensors tend to be more practical and careful than intuitors; intuitors tend to work faster and to be more innovative than sensors.<br>
                  • Sensors don’t like courses that have no apparent connection to the real world; intuitors don’t like “plug-and-chug” courses that involve a lot of memorization and routine calculations.<br>
                  Everybody is sensing sometimes and intuitive sometimes. Your preference for one or the other may be strong, moderate, or mild. To be effective as a learner and problem solver, you need to be able to function both ways. If you overemphasize intuition, you may miss important details or make careless mistakes in calculations or hands-on work; if you overemphasize sensing, you may rely too much on memorization and familiar methods and not concentrate enough on understanding and innovative thinking.<br>
                  How can sensing learners help themselves?<br>
                  Sensors remember and understand information best if they can see how it connects to the real world. If you are in a class where most of the material is abstract and theoretical, you may have difficulty. Ask your instructor for specific examples of concepts and procedures, and find out how the concepts apply in practice. If the teacher does not provide enough specifics, try to find some in your course text or other references or by brainstorming with friends or classmates.<br>
                  How can intuitive learners help themselves?<br>
                  Many college lecture classes are aimed at intuitors. However, if you are an intuitor and you happen to be in a class that deals primarily with memorization and rote substitution in formulas, you may have trouble with boredom. Ask your instructor for interpretations or theories that link the facts, or try to find the connections yourself. You may also be prone to careless mistakes on test because you are impatient with details and don’t like repetition (as in checking your completed solutions). Take time to read the entire question before you start answering and<br>
                  be sure to check your results.<br>
                  <br>
                  VISUAL AND VERBAL LEARNERS<br>
                  Visual learners remember best what they see—pictures, diagrams, flow charts, time lines, films, and demonstrations. Verbal learners get more out of words—written and spoken explanations. Everyone learns more when information is presented both visually and verbally.<br>
                  In most college classes very little visual information is presented: students mainly listen to lectures and read material written on chalkboards and in textbooks and handouts.<br>
                  Unfortunately, most people are visual learners, which means that most students do not get nearly as much as they would if more visual presentation were used in class. Good learners are capable of processing information presented either visually or verbally.<br>
                  How can visual learners help themselves?<br>
                  If you are a visual learner, try to find diagrams, sketches, schematics, photographs, flow charts, or any other visual representation of course material that is predominantly verbal. Ask your instructor, consult reference books, and see if any videotapes or CD-ROM displays of the course material are available. Prepare a concept map by listing key points, enclosing them in boxes or circles, and drawing lines with arrows between concepts to show connections. Color-code your notes with a highlighter so that everything relating to one topic is the same color.<br>
                  How can verbal learners help themselves?<br>
                  Write summaries or outlines of course material in your own words. Working in groups can be particularly effective: you gain understanding of material by hearing classmates’ explanations and you learn even more when you do the explaining.<br>
                  <br>
                  SEQUENTIAL AND GLOBAL LEARNERS<br>
                  • Sequential learners tend to gain understanding in linear steps, with each step following logically from the previous one. Global learners tend to learn in large jumps, absorbing material almost randomly without seeing connections, and then suddenly “getting it.”<br>
                  • Sequential learners tend to follow logical stepwise paths in finding solutions; global learners may be able to solve complex problems quickly or put things together in novel ways once they have grasped the big picture, but they may have difficulty explaining how they did it.<br>
                  Many people who read this description may conclude incorrectly that they are global, since everyone has experienced bewilderment followed by a sudden flash of understanding.<br>
                  What makes you global or not is what happens before the light bulb goes on. Sequential learners may not fully understand the material but they can nevertheless do something with it (like solve the homework problems or pass the test) since the pieces they have absorbed are logically connected. Strongly global learners who lack good sequential thinking abilities, on the other hand, may have serious difficulties until they have the big picture. Even after they have it, they may be fuzzy about the details of the subject, while sequential learners may know a lot about specific aspects of a subject but may have trouble relating them to different aspects of the same subject or to different subjects.<br>
                  <br>
                  How can sequential learners help themselves?<br>
                  Most college courses are taught in a sequential manner. However, if you are a sequential learner and you have an instructor who jumps around from topic to topic or skips steps, you may have difficulty following and remembering. Ask the instructor to fill in the skipped steps, or fill them in yourself by consulting references. When you are studying, take the time to outline the lecture material for yourself in logical order. In the long run doing so will save you time. You might also try to strengthen your global thinking skills by relating each new topic you study to things you already know. The more you can do so, the deeper your understanding of the topic is likely to be.<br>
                  <br>
                  How can global learners help themselves?<br>
                  If you are a global learner, just recognizing that you aren’t slow or stupid but simply function differently from most of your classmates can help a great deal. 4 However, there are some steps you can take that may help you get the big picture more quickly. Before you begin to study the first section of a chapter in a text, skim through the entire chapter to get an overview.<br>
                  Doing so may be time-consuming initially but it may save you from going over and over individual parts later. Instead of spending a short time on every subject every night, you might find it more productive to immerse yourself in individual subjects for large blocks. Try to relate the subject to things you already know, either by asking the instructor to help you see connections or by consulting references. Above all, don’t lose faith in yourself; you will eventually understand the new material, and once you do your understanding of how it connects to other topics and disciplines may enable you to apply it in ways that most sequential thinkers would never dream of.<br>
                  </div>
              </div>
          </div>


        </div>
    </div>

    <br>
  </section>
@endsection

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <script>
    //document.write(JSON.parse("{{ json_encode($cuestionario[0]['puntaje']) }}"));
    //document.write("aaaaaaaaaaa");
    var ctx = document.getElementById("myChart").getContext('2d');
    //<h4>Activo/Reflexivo: {{$cuestionario[0]['puntaje'].$cuestionario[0]['alt_mayor']}}</h4>

    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["Activo/Reflexivo", "Sensitivo/Auditivo", "Visual/Verbal", "Secuencial/Global"],
            datasets: [{
                label: '',
                data: [{{$cuestionario[0]['puntaje'] }},{{ $cuestionario[1]['puntaje'] }}, {{ $cuestionario[2]['puntaje'] }}, {{$cuestionario[3]['puntaje'] }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }
          ],
        },
        options: {
          legend: {
            display: false,
          },
          tooltips: {
       enabled: false
  },
            responsive: true,
            scales: {
                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero:true
                    }
                }],
                xAxes: [{
                  stacked: true,
                  ticks: {
                    max: 11,
                    min: -11,
                  }
                }]
            }
        }
    });
    </script>
@endsection
