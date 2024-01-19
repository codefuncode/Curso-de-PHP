<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
      Document
    </title>
  </head>
  <body>
    <div>
      <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
      <link href="css/css.css" rel="stylesheet" type="text/css"/>
      <div class="w3-container">
        <h1>
          Introducción a PHP
        </h1>
        <p>
          Existe una muchos lenguajes de programación que pueden ejecutarse del lado de servidor. Sin embargo yo realizo una especialización en este lenguaje. Por lo que mis publicaciones están destinadas al uso del el lenguaje  e implementación  de librearías del lenguaje.
        </p>
        <p>
          Ahora vemos una descripción de lo que es PHP y otros detalles.
        </p>
        <p>
          Primeo recalcamos que PHP se ejecuta en el servidor. Además deberías saber HTML CSS, JavaScript y MySQL. Ya que estos se complementan para hacer aplicaciones únicas, que se ejecutan en un servidor Apache. También estaré publicando entradas de estos lenguajes en este Blog.
        </p>
        <blockquote>
          <p>
            PHP es un lenguaje de secuencias de comandos de propósito general orientado al desarrollo web. Fue creado originalmente por el programador danés-canadiense Rasmus Lerdorf en 1994. La implementación de referencia de PHP ahora es producida por The PHP Group. PHP originalmente significaba Página de inicio personal, pero ahora significa el inicialismo recursivo PHP: Preprocesador de hipertexto.
          </p>
          <p>
            El código PHP generalmente se procesa en un servidor web mediante un intérprete de PHP implementado como un módulo, un demonio o como un ejecutable de interfaz de puerta de enlace común (CGI). En un servidor web, el resultado del código PHP interpretado y ejecutado, que puede ser cualquier tipo de datos, como HTML generado o datos de imágenes binarias, formaría la totalidad o parte de una respuesta HTTP. Existen varios sistemas de plantillas web, sistemas de administración de contenido web y marcos web que se pueden emplear para orquestar o facilitar la generación de esa respuesta. Además, PHP se puede usar para muchas tareas de programación fuera del contexto web, como aplicaciones gráficas independientes y control de drones robóticos. El código PHP también se puede ejecutar directamente desde la línea de comandos.
          </p>
          <p>
            El intérprete de PHP estándar, impulsado por Zend Engine, es un software gratuito publicado bajo la licencia de PHP. PHP ha sido ampliamente portado y se puede implementar en la mayoría de los servidores web en una variedad de sistemas operativos y plataformas.
          </p>
          <p>
            El lenguaje PHP evolucionó sin una especificación o estándar formal escrito hasta 2014, con la implementación original actuando como el estándar de facto que otras implementaciones pretendían seguir. Desde 2014, se ha continuado trabajando para crear una especificación PHP formal.
          </p>
          <p>
            W3Techs informa que, a partir de enero de 2022, "PHP es utilizado por el 78,1% de todos los sitios web cuyo lenguaje de programación del lado del servidor conocemos". La versión 7.4 de PHP es la versión más utilizada. El soporte para la versión 7.3 se eliminó el 6 de diciembre de 2021.
          </p>
        </blockquote>
        <div class="">
          <table class="w3-table-all w3-hoverable w3-responsive">
            <thead>
              <tr>
                <th class="uno">
                  Versión
                </th>
                <th class="dos" style="min-width: 10em;">
                  Fecha de lanzamiento
                </th>
                <th class="tres" style="min-width: 10em;">
                  Compatible hasta
                </th>
                <th class="cuatro">
                  Notas
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-sort-value="1.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  1.0
                </td>
                <td>
                  8 de junio de 1995
                </td>
                <td>
                </td>
                <td>
                  Oficialmente llamado 'Herramientas de página de inicio personal (Herramientas PHP)'. Este es el primer uso del nombre 'PHP'.
                </td>
              </tr>
              <tr>
                <td data-sort-value="2.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  2.0
                </td>
                <td>
                  1 de noviembre de 1997
                </td>
                <td>
                </td>
                <td>
                  Oficialmente llamado 'PHP/FI 2.0'. Esta es la primera versión que en realidad podría caracterizarse como PHP, siendo un lenguaje independiente con muchas características que han perdurado hasta el día de hoy.
                </td>
              </tr>
              <tr>
                <td data-sort-value="3.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  3.0
                </td>
                <td>
                  6 de junio de 1998
                </td>
                <td>
                  20 de octubre de 2000
                </td>
                <td>
                  El desarrollo pasa de una persona a varios desarrolladores. Zeev Suraski y Andi Gutmans reescriben la base de esta versión.
                </td>
              </tr>
              <tr>
                <td data-sort-value="4.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  4.0
                </td>
                <td>
                  22 de mayo de 2000
                </td>
                <td>
                  23 de junio de 2001
                </td>
                <td>
                  Se agregó un sistema de análisis de etiquetas de análisis/ejecución de dos etapas más avanzado llamado motor Zend.
                </td>
              </tr>
              <tr>
                <td data-sort-value="4.1" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  4.1
                </td>
                <td>
                  10 de diciembre de 2001
                </td>
                <td>
                  12 de marzo de 2002
                </td>
                <td>
                  'superglobales' introducidas ($_GET , $_POST , $_SESSION , etc.)
                </td>
              </tr>
              <tr>
                <td data-sort-value="4.2" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  4.2
                </td>
                <td>
                  22 April 2002
                  <sup class="reference" id="cite_ref-88">
                    <a href="#cite_note-88">
                      [88]
                    </a>
                  </sup>
                </td>
                <td>
                  6 September 2002
                  <sup class="reference" id="cite_ref-eol_84-4">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Disabled
                  <code>
                    register_globals
                  </code>
                  by default. Data received over the network is not inserted directly into the
                  <a href="/wiki/Global_variable" title="Global variable">
                    global
                  </a>
                  namespace anymore, closing possible security holes in applications.
                  <sup class="reference" id="cite_ref-php4changelog_86-2">
                    <a href="#cite_note-php4changelog-86">
                      [86]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="4.3" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  4.3
                </td>
                <td>
                  27 December 2002
                  <sup class="reference" id="cite_ref-89">
                    <a href="#cite_note-89">
                      [89]
                    </a>
                  </sup>
                </td>
                <td>
                  31 March 2005
                  <sup class="reference" id="cite_ref-eol_84-5">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Introduced the
                  <a href="/wiki/Command-line_interface" title="Command-line interface">
                    command-line interface
                  </a>
                  (CLI), to supplement the CGI.
                  <sup class="reference" id="cite_ref-php4changelog_86-3">
                    <a href="#cite_note-php4changelog-86">
                      [86]
                    </a>
                  </sup>
                  <sup class="reference" id="cite_ref-phpclidocs_90-0">
                    <a href="#cite_note-phpclidocs-90">
                      [90]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="4.4" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  4.4
                </td>
                <td>
                  11 July 2005
                  <sup class="reference" id="cite_ref-91">
                    <a href="#cite_note-91">
                      [91]
                    </a>
                  </sup>
                </td>
                <td>
                  7 August 2008
                  <sup class="reference" id="cite_ref-eol_84-6">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Fixed a memory corruption bug, which required breaking binary compatibility with extensions compiled against PHP version 4.3.x.
                  <sup class="reference" id="cite_ref-php44announcement_92-0">
                    <a href="#cite_note-php44announcement-92">
                      [92]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.0
                </td>
                <td>
                  13 July 2004
                  <sup class="reference" id="cite_ref-93">
                    <a href="#cite_note-93">
                      [93]
                    </a>
                  </sup>
                </td>
                <td>
                  5 September 2005
                  <sup class="reference" id="cite_ref-eol_84-7">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Zend Engine II with a new object model.
                  <sup class="reference" id="cite_ref-php5changelog_94-0">
                    <a href="#cite_note-php5changelog-94">
                      [94]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.1" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.1
                </td>
                <td>
                  24 November 2005
                  <sup class="reference" id="cite_ref-95">
                    <a href="#cite_note-95">
                      [95]
                    </a>
                  </sup>
                </td>
                <td>
                  24 August 2006
                  <sup class="reference" id="cite_ref-eol_84-8">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Performance improvements with introduction of compiler variables in re-engineered PHP Engine.
                  <sup class="reference" id="cite_ref-php5changelog_94-1">
                    <a href="#cite_note-php5changelog-94">
                      [94]
                    </a>
                  </sup>
                  Added PHP Data Objects (PDO) as a consistent interface for accessing databases.
                  <sup class="reference" id="cite_ref-phpPdoDocs_96-0">
                    <a href="#cite_note-phpPdoDocs-96">
                      [96]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.2" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.2
                </td>
                <td>
                  2 November 2006
                  <sup class="reference" id="cite_ref-97">
                    <a href="#cite_note-97">
                      [97]
                    </a>
                  </sup>
                </td>
                <td>
                  6 January 2011
                  <sup class="reference" id="cite_ref-eol_84-9">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  Enabled the filter extension by default. Native
                  <a href="/wiki/JSON" title="JSON">
                    JSON
                  </a>
                  support.
                  <sup class="reference" id="cite_ref-php5changelog_94-2">
                    <a href="#cite_note-php5changelog-94">
                      [94]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.3" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.3
                </td>
                <td>
                  30 June 2009
                  <sup class="reference" id="cite_ref-98">
                    <a href="#cite_note-98">
                      [98]
                    </a>
                  </sup>
                </td>
                <td>
                  14 August 2014
                  <sup class="reference" id="cite_ref-eol_84-10">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  <a href="/wiki/Namespace" title="Namespace">
                    Namespace
                  </a>
                  support;
                  <a href="/wiki/Name_binding" title="Name binding">
                    late static bindings
                  </a>
                  , jump label (limited
                  <a href="/wiki/Goto" title="Goto">
                    goto
                  </a>
                  ),
                  <a href="/wiki/Anonymous_function" title="Anonymous function">
                    anonymous functions
                  </a>
                  ,
                  <a href="/wiki/Closure_(computer_programming)" title="Closure (computer programming)">
                    closures
                  </a>
                  , PHP archives (phar),
                  <a href="/wiki/Garbage_collection_(computer_science)" title="Garbage collection (computer science)">
                    garbage collection
                  </a>
                  for circular references, improved
                  <a href="/wiki/Microsoft_Windows" title="Microsoft Windows">
                    Windows
                  </a>
                  support, sqlite3, mysqlnd as a replacement for libmysql as underlying library for the extensions that work with
                  <a href="/wiki/MySQL" title="MySQL">
                    MySQL
                  </a>
                  , fileinfo as a replacement for mime_magic for better
                  <a href="/wiki/MIME" title="MIME">
                    MIME
                  </a>
                  support, the Internationalization extension, and deprecation of ereg extension.
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.4" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.4
                </td>
                <td>
                  1 March 2012
                  <sup class="reference" id="cite_ref-99">
                    <a href="#cite_note-99">
                      [99]
                    </a>
                  </sup>
                </td>
                <td>
                  3 September 2015
                  <sup class="reference" id="cite_ref-eol_84-11">
                    <a href="#cite_note-eol-84">
                      [84]
                    </a>
                  </sup>
                </td>
                <td>
                  <a href="/wiki/Trait_(computer_programming)" title="Trait (computer programming)">
                    Trait
                  </a>
                  support, short array syntax support. Removed items:
                  <code>
                    register_globals
                  </code>
                  ,
                  <code>
                    safe_mode
                  </code>
                  ,
                  <code>
                    allow_call_time_pass_reference
                  </code>
                  ,
                  <code class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr" id="" style="">
                    <span class="nb">
                      session_register
                    </span>
                    <span class="p">
                      ()
                    </span>
                  </code>
                  ,
                  <code class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr" id="" style="">
                    <span class="nb">
                      session_unregister
                    </span>
                    <span class="p">
                      ()
                    </span>
                  </code>
                  and
                  <code class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr" id="" style="">
                    <span class="nb">
                      session_is_registered
                    </span>
                    <span class="p">
                      ()
                    </span>
                  </code>
                  . Built-in web server.
                  <sup class="reference" id="cite_ref-100">
                    <a href="#cite_note-100">
                      [100]
                    </a>
                  </sup>
                  Several improvements to existing features, performance and reduced memory requirements.
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.5" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.5
                </td>
                <td>
                  20 June 2013
                  <sup class="reference" id="cite_ref-101">
                    <a href="#cite_note-101">
                      [101]
                    </a>
                  </sup>
                </td>
                <td>
                  10 July 2016
                  <sup class="reference" id="cite_ref-supportedversions_102-0">
                    <a href="#cite_note-supportedversions-102">
                      [102]
                    </a>
                  </sup>
                </td>
                <td>
                  Support for
                  <a href="/wiki/Generator_(computer_programming)" title="Generator (computer programming)">
                    generators
                  </a>
                  ,
                  <code>
                    finally
                  </code>
                  blocks for exceptions handling, OpCache (based on Zend Optimizer+) bundled in official distribution.
                  <sup class="reference" id="cite_ref-55changes_103-0">
                    <a href="#cite_note-55changes-103">
                      [103]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="5.6" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  5.6
                </td>
                <td>
                  28 August 2014
                  <sup class="reference" id="cite_ref-104">
                    <a href="#cite_note-104">
                      [104]
                    </a>
                  </sup>
                </td>
                <td>
                  31 December 2018
                  <sup class="reference" id="cite_ref-supportedversions_102-1">
                    <a href="#cite_note-supportedversions-102">
                      [102]
                    </a>
                  </sup>
                </td>
                <td>
                  Constant scalar expressions,
                  <a href="/wiki/Variadic_function" title="Variadic function">
                    variadic functions
                  </a>
                  , argument unpacking, new exponentiation operator, extensions of the
                  <code>
                    use
                  </code>
                  statement for functions and constants, new
                  <code>
                    phpdbg
                  </code>
                  debugger as a SAPI module, and other smaller improvements.
                  <sup class="reference" id="cite_ref-56changes_105-0">
                    <a href="#cite_note-56changes-105">
                      [105]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td style="background:silver;">
                  6.x
                </td>
                <td class="table-na" data-sort-value="" style="background: #ececec; color: #2C2C2C; vertical-align: middle; text-align: center;">
                  Not released
                </td>
                <td class="table-na" data-sort-value="" style="background: #ececec; color: #2C2C2C; vertical-align: middle; text-align: center;">
                  N/A
                </td>
                <td>
                  Abandoned version of PHP that planned to include native Unicode support.
                  <sup class="reference" id="cite_ref-106">
                    <a href="#cite_note-106">
                      [106]
                    </a>
                  </sup>
                  <sup class="reference" id="cite_ref-107">
                    <a href="#cite_note-107">
                      [107]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="7.0" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  7.0
                </td>
                <td>
                  3 December 2015
                  <sup class="reference" id="cite_ref-php7final_108-0">
                    <a href="#cite_note-php7final-108">
                      [108]
                    </a>
                  </sup>
                </td>
                <td>
                  10 January 2019
                  <sup class="reference" id="cite_ref-releaseprocess_52-1">
                    <a href="#cite_note-releaseprocess-52">
                      [52]
                    </a>
                  </sup>
                </td>
                <td>
                  Zend Engine 3 (performance improvements
                  <sup class="reference" id="cite_ref-phpng_50-1">
                    <a href="#cite_note-phpng-50">
                      [50]
                    </a>
                  </sup>
                  and 64-bit integer support on Windows
                  <sup class="reference" id="cite_ref-109">
                    <a href="#cite_note-109">
                      [109]
                    </a>
                  </sup>
                  ), uniform variable syntax,
                  <sup class="reference" id="cite_ref-uvs_54-1">
                    <a href="#cite_note-uvs-54">
                      [54]
                    </a>
                  </sup>
                  <a class="mw-redirect" href="/wiki/Abstract_Syntax_Tree" title="Abstract Syntax Tree">
                    AST
                  </a>
                  -based compilation process,
                  <sup class="reference" id="cite_ref-110">
                    <a href="#cite_note-110">
                      [110]
                    </a>
                  </sup>
                  added
                  <code class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr" id="" style="">
                    <span class="nx">
                      Closure
                    </span>
                    <span class="o">
                      ::
                    </span>
                    <span class="na">
                      call
                    </span>
                    <span class="p">
                      ()
                    </span>
                  </code>
                  ,
                  <sup class="reference" id="cite_ref-111">
                    <a href="#cite_note-111">
                      [111]
                    </a>
                  </sup>
                  bitwise shift consistency across platforms,
                  <sup class="reference" id="cite_ref-112">
                    <a href="#cite_note-112">
                      [112]
                    </a>
                  </sup>
                  <code class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr" id="" style="">
                    <span class="o">
                      ??
                    </span>
                  </code>
                  (
                  <a href="/wiki/Null_coalescing_operator" title="Null coalescing operator">
                    null coalesce
                  </a>
                  ) operator,
                  <sup class="reference" id="cite_ref-113">
                    <a href="#cite_note-113">
                      [113]
                    </a>
                  </sup>
                  <a href="/wiki/Unicode" title="Unicode">
                    Unicode
                  </a>
                  code point
                  <a href="/wiki/String_literal#Escape_sequences" title="String literal">
                    escape syntax
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-114">
                    <a href="#cite_note-114">
                      [114]
                    </a>
                  </sup>
                  return type declarations,
                  <sup class="reference" id="cite_ref-return-types_65-1">
                    <a href="#cite_note-return-types-65">
                      [65]
                    </a>
                  </sup>
                  scalar type (integer, float, string and boolean) declarations,
                  <sup class="reference" id="cite_ref-scalar-types_66-1">
                    <a href="#cite_note-scalar-types-66">
                      [66]
                    </a>
                  </sup>
                  <code>
                    <=>
                  </code>
                  "spaceship"
                  <a href="/wiki/Three-way_comparison" title="Three-way comparison">
                    three-way comparison
                  </a>
                  operator,
                  <sup class="reference" id="cite_ref-115">
                    <a href="#cite_note-115">
                      [115]
                    </a>
                  </sup>
                  <a href="/wiki/Generator_(computer_programming)" title="Generator (computer programming)">
                    generator
                  </a>
                  delegation,
                  <sup class="reference" id="cite_ref-116">
                    <a href="#cite_note-116">
                      [116]
                    </a>
                  </sup>
                  <a class="mw-redirect" href="/wiki/Anonymous_class" title="Anonymous class">
                    anonymous classes
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-117">
                    <a href="#cite_note-117">
                      [117]
                    </a>
                  </sup>
                  simpler and more consistently available
                  <a class="mw-redirect" href="/wiki/CSPRNG" title="CSPRNG">
                    CSPRNG
                  </a>
                  API,
                  <sup class="reference" id="cite_ref-118">
                    <a href="#cite_note-118">
                      [118]
                    </a>
                  </sup>
                  replacement of many remaining internal PHP "errors" with the more modern
                  <a class="mw-redirect" href="/wiki/Exception_(computer_science)" title="Exception (computer science)">
                    exceptions
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-engine_exceptions_53-1">
                    <a href="#cite_note-engine_exceptions-53">
                      [53]
                    </a>
                  </sup>
                  and shorthand syntax for importing multiple items from a namespace.
                  <sup class="reference" id="cite_ref-119">
                    <a href="#cite_note-119">
                      [119]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="7.1" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  7.1
                </td>
                <td>
                  1 December 2016
                </td>
                <td>
                  1 December 2019
                  <sup class="reference" id="cite_ref-supportedversions_102-2">
                    <a href="#cite_note-supportedversions-102">
                      [102]
                    </a>
                  </sup>
                </td>
                <td>
                  <a href="/wiki/Void_type" title="Void type">
                    void return type
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-120">
                    <a href="#cite_note-120">
                      [120]
                    </a>
                  </sup>
                  class constant
                  <a href="/wiki/Information_hiding" title="Information hiding">
                    visibility modifiers
                  </a>
                  <sup class="reference" id="cite_ref-121">
                    <a href="#cite_note-121">
                      [121]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="7.2" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  7.2
                </td>
                <td>
                  30 November 2017
                </td>
                <td>
                  30 November 2020
                  <sup class="reference" id="cite_ref-supportedversions_102-3">
                    <a href="#cite_note-supportedversions-102">
                      [102]
                    </a>
                  </sup>
                </td>
                <td>
                  Object parameter and return type declaration,
                  <sup class="reference" id="cite_ref-122">
                    <a href="#cite_note-122">
                      [122]
                    </a>
                  </sup>
                  Libsodium extension,
                  <sup class="reference" id="cite_ref-123">
                    <a href="#cite_note-123">
                      [123]
                    </a>
                  </sup>
                  abstract method overriding,
                  <sup class="reference" id="cite_ref-124">
                    <a href="#cite_note-124">
                      [124]
                    </a>
                  </sup>
                  parameter type widening
                  <sup class="reference" id="cite_ref-125">
                    <a href="#cite_note-125">
                      [125]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td data-sort-value="7.3" style="background-color: #FDB3AB;" title="Old version, no longer maintained">
                  <span style="display: none;">
                    Old version, no longer maintained:
                  </span>
                  7.3
                </td>
                <td>
                  6 December 2018
                  <sup class="reference" id="cite_ref-126">
                    <a href="#cite_note-126">
                      [126]
                    </a>
                  </sup>
                </td>
                <td>
                  6 December 2021
                </td>
                <td>
                  Flexible
                  <a href="/wiki/Here_document#PHP" title="Here document">
                    Heredoc
                  </a>
                  and Nowdoc syntax,
                  <sup class="reference" id="cite_ref-127">
                    <a href="#cite_note-127">
                      [127]
                    </a>
                  </sup>
                  support for reference assignment and array deconstruction with list(),
                  <sup class="reference" id="cite_ref-128">
                    <a href="#cite_note-128">
                      [128]
                    </a>
                  </sup>
                  PCRE2 support,
                  <sup class="reference" id="cite_ref-129">
                    <a href="#cite_note-129">
                      [129]
                    </a>
                  </sup>
                  hrtime() function
                  <sup class="reference" id="cite_ref-130">
                    <a href="#cite_note-130">
                      [130]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td class="templateVersion co" data-sort-value="7.4" style="background-color: #FEF8C6;" title="Older version, yet still maintained">
                  <span style="display: none;">
                    Older version, yet still maintained:
                  </span>
                  7.4
                </td>
                <td>
                  28 November 2019
                  <sup class="reference" id="cite_ref-131">
                    <a href="#cite_note-131">
                      [131]
                    </a>
                  </sup>
                </td>
                <td>
                  28 November 2022
                </td>
                <td>
                  Typed properties 2.0,
                  <sup class="reference" id="cite_ref-132">
                    <a href="#cite_note-132">
                      [132]
                    </a>
                  </sup>
                  preloading,
                  <sup class="reference" id="cite_ref-133">
                    <a href="#cite_note-133">
                      [133]
                    </a>
                  </sup>
                  null-coalescing assignment operator,
                  <sup class="reference" id="cite_ref-134">
                    <a href="#cite_note-134">
                      [134]
                    </a>
                  </sup>
                  improve openssl_random_pseudo_bytes,
                  <sup class="reference" id="cite_ref-135">
                    <a href="#cite_note-135">
                      [135]
                    </a>
                  </sup>
                  Weak References,
                  <sup class="reference" id="cite_ref-php-8-weak-refs_79-1">
                    <a href="#cite_note-php-8-weak-refs-79">
                      [79]
                    </a>
                  </sup>
                  FFI –
                  <a href="/wiki/Foreign_function_interface" title="Foreign function interface">
                    foreign function interface
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-136">
                    <a href="#cite_note-136">
                      [136]
                    </a>
                  </sup>
                  always available hash extension,
                  <sup class="reference" id="cite_ref-137">
                    <a href="#cite_note-137">
                      [137]
                    </a>
                  </sup>
                  password hash registry,
                  <sup class="reference" id="cite_ref-138">
                    <a href="#cite_note-138">
                      [138]
                    </a>
                  </sup>
                  multibyte string splitting,
                  <sup class="reference" id="cite_ref-139">
                    <a href="#cite_note-139">
                      [139]
                    </a>
                  </sup>
                  reflection for references,
                  <sup class="reference" id="cite_ref-140">
                    <a href="#cite_note-140">
                      [140]
                    </a>
                  </sup>
                  unbundle ext/wddx,
                  <sup class="reference" id="cite_ref-141">
                    <a href="#cite_note-141">
                      [141]
                    </a>
                  </sup>
                  new custom object serialization mechanism
                  <sup class="reference" id="cite_ref-142">
                    <a href="#cite_note-142">
                      [142]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td class="templateVersion co" data-sort-value="8.0" style="background-color: #FEF8C6;" title="Older version, yet still maintained">
                  <span style="display: none;">
                    Older version, yet still maintained:
                  </span>
                  8.0
                </td>
                <td>
                  26 November 2020
                  <sup class="reference" id="cite_ref-143">
                    <a href="#cite_note-143">
                      [143]
                    </a>
                  </sup>
                </td>
                <td>
                  26 November 2023
                </td>
                <td>
                  <a href="/wiki/Just-in-time_compilation" title="Just-in-time compilation">
                    Just-In-Time (JIT) compilation
                  </a>
                  ,
                  <sup class="reference" id="cite_ref-php-8-JIT_69-1">
                    <a href="#cite_note-php-8-JIT-69">
                      [69]
                    </a>
                  </sup>
                  arrays starting with a negative index,
                  <sup class="reference" id="cite_ref-144">
                    <a href="#cite_note-144">
                      [144]
                    </a>
                  </sup>
                  stricter/saner language semantics (validation for abstract trait methods),
                  <sup class="reference" id="cite_ref-145">
                    <a href="#cite_note-145">
                      [145]
                    </a>
                  </sup>
                  saner string to number comparisons,
                  <sup class="reference" id="cite_ref-146">
                    <a href="#cite_note-146">
                      [146]
                    </a>
                  </sup>
                  saner numeric strings,
                  <sup class="reference" id="cite_ref-147">
                    <a href="#cite_note-147">
                      [147]
                    </a>
                  </sup>
                  TypeError on invalid arithmetic/bitwise operators,
                  <sup class="reference" id="cite_ref-148">
                    <a href="#cite_note-148">
                      [148]
                    </a>
                  </sup>
                  reclassification of various engine errors,
                  <sup class="reference" id="cite_ref-149">
                    <a href="#cite_note-149">
                      [149]
                    </a>
                  </sup>
                  consistent type errors for internal functions,
                  <sup class="reference" id="cite_ref-150">
                    <a href="#cite_note-150">
                      [150]
                    </a>
                  </sup>
                  fatal error for incompatible method signatures
                  <sup class="reference" id="cite_ref-151">
                    <a href="#cite_note-151">
                      [151]
                    </a>
                  </sup>
                  ), locale-independent float to string conversion,
                  <sup class="reference" id="cite_ref-152">
                    <a href="#cite_note-152">
                      [152]
                    </a>
                  </sup>
                  variable syntax tweaks,
                  <sup class="reference" id="cite_ref-153">
                    <a href="#cite_note-153">
                      [153]
                    </a>
                  </sup>
                  attributes,
                  <sup class="reference" id="cite_ref-154">
                    <a href="#cite_note-154">
                      [154]
                    </a>
                  </sup>
                  <sup class="reference" id="cite_ref-155">
                    <a href="#cite_note-155">
                      [155]
                    </a>
                  </sup>
                  <sup class="reference" id="cite_ref-156">
                    <a href="#cite_note-156">
                      [156]
                    </a>
                  </sup>
                  <sup class="reference" id="cite_ref-157">
                    <a href="#cite_note-157">
                      [157]
                    </a>
                  </sup>
                  named arguments,
                  <sup class="reference" id="cite_ref-158">
                    <a href="#cite_note-158">
                      [158]
                    </a>
                  </sup>
                  match expression,
                  <sup class="reference" id="cite_ref-159">
                    <a href="#cite_note-159">
                      [159]
                    </a>
                  </sup>
                  constructor property promotion,
                  <sup class="reference" id="cite_ref-160">
                    <a href="#cite_note-160">
                      [160]
                    </a>
                  </sup>
                  union types,
                  <sup class="reference" id="cite_ref-161">
                    <a href="#cite_note-161">
                      [161]
                    </a>
                  </sup>
                  mixed type,
                  <sup class="reference" id="cite_ref-162">
                    <a href="#cite_note-162">
                      [162]
                    </a>
                  </sup>
                  static return type,
                  <sup class="reference" id="cite_ref-163">
                    <a href="#cite_note-163">
                      [163]
                    </a>
                  </sup>
                  nullsafe operator,
                  <sup class="reference" id="cite_ref-nullsafe-operator-rfc_78-1">
                    <a href="#cite_note-nullsafe-operator-rfc-78">
                      [78]
                    </a>
                  </sup>
                  non-capturing catches,
                  <sup class="reference" id="cite_ref-164">
                    <a href="#cite_note-164">
                      [164]
                    </a>
                  </sup>
                  throw expression,
                  <sup class="reference" id="cite_ref-throw-expression-php8_77-1">
                    <a href="#cite_note-throw-expression-php8-77">
                      [77]
                    </a>
                  </sup>
                  JSON extension is always available.
                  <sup class="reference" id="cite_ref-ext-json-always-available_165-0">
                    <a href="#cite_note-ext-json-always-available-165">
                      [165]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr>
                <td class="templateVersion c" data-sort-value="8.1" style="background-color: #D4F4B4;" title="Current stable version">
                  <span style="display: none;">
                    Current stable version:
                  </span>
                  <b>
                    8.1
                  </b>
                </td>
                <td>
                  25 November 2021
                </td>
                <td>
                  25 November 2024
                </td>
                <td>
                  Explicit octal integer literal notation,
                  <sup class="reference" id="cite_ref-166">
                    <a href="#cite_note-166">
                      [166]
                    </a>
                  </sup>
                  enumerations,
                  <sup class="reference" id="cite_ref-167">
                    <a href="#cite_note-167">
                      [167]
                    </a>
                  </sup>
                  readonly properties,
                  <sup class="reference" id="cite_ref-168">
                    <a href="#cite_note-168">
                      [168]
                    </a>
                  </sup>
                  first-class callable syntax,
                  <sup class="reference" id="cite_ref-169">
                    <a href="#cite_note-169">
                      [169]
                    </a>
                  </sup>
                  new in initializers,
                  <sup class="reference" id="cite_ref-170">
                    <a href="#cite_note-170">
                      [170]
                    </a>
                  </sup>
                  pure intersection types,
                  <sup class="reference" id="cite_ref-171">
                    <a href="#cite_note-171">
                      [171]
                    </a>
                  </sup>
                  never return type,
                  <sup class="reference" id="cite_ref-172">
                    <a href="#cite_note-172">
                      [172]
                    </a>
                  </sup>
                  final class constraints,
                  <sup class="reference" id="cite_ref-173">
                    <a href="#cite_note-173">
                      [173]
                    </a>
                  </sup>
                  fibers
                  <sup class="reference" id="cite_ref-174">
                    <a href="#cite_note-174">
                      [174]
                    </a>
                  </sup>
                </td>
              </tr>
              <tr class="sortbottom">
                <td colspan="4">
                  <div class="templateVersion l" style="margin-left: -1em;">
                    <div style="float: left; margin-left: 1em;">
                      <span style="white-space: nowrap;">
                        <b>
                          Legend:
                        </b>
                      </span>
                    </div>
                    <div style="float: left; margin-left: 1em;">
                      <span style="border-left: 1.2em solid #FDB3AB; padding-left: 0.3em; white-space: nowrap;" title="Old version, no longer maintained">
                        Old version
                      </span>
                    </div>
                    <div style="float: left; margin-left: 1em;">
                      <span style="border-left: 1.2em solid #FEF8C6; padding-left: 0.3em; white-space: nowrap;" title="An older version, yet still maintained">
                        Older version, still maintained
                      </span>
                    </div>
                    <div style="float: left; margin-left: 1em;">
                      <span style="border-left: 1.2em solid #D4F4B4; padding-left: 0.3em; white-space: nowrap;" title="Latest stable version">
                        <b>
                          Latest version
                        </b>
                      </span>
                    </div>
                    <div style="float: left; margin-left: 1em;">
                      <span style="border-left: 1.2em solid #FED1A0; padding-left: 0.3em; white-space: nowrap;" title="Latest preview of a future release">
                        Latest preview version
                      </span>
                    </div>
                    <div style="float: left; margin-left: 1em;">
                      <span style="border-left: 1.2em solid #C1E6F5; padding-left: 0.3em; white-space: nowrap;" title="A future release">
                        Future release
                      </span>
                    </div>
                    <div style="clear: left;">
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
  <script src="js/js.js" type="text/javascript">
  </script>
</html>
