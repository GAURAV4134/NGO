<?php
// $noinsert=false;
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO `ngo`.`ngo-contactus` (`Name`, `Email`, `Message`, `Date`) VALUES ('$name', '$email', '$message', current_timestamp())";

  if ($con->query($sql) == true) {
    $insert=true;
  }
  else {
    echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="index.php">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Care4U-NGO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>


  <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!---------------------------------------------------------------------------------------------------------->
    <div class="main">
      <header class="text-gray-400 body-font">
        <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-500 mb-1 md:mb-0">
            <img src="logo.png" class="image-fluid w-12" alt="Logo">
            <span class="ml-2 text-2xl white font-extrabold font-serif zoom" id="cursor">Care4U</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center cur relative sticky" id="cur">
            <a href="#home" class="ml-1 mr-4 yellow font-medium hover:text-black hover:font-extrabold">Home</a>
            <a href="#aboutus" class="ml-1 mr-4 white font-medium black hover:font-extrabold">About Us</a>
            <a href="#works" class="ml-1 mr-4 yellow font-medium hover:text-black hover:font-extrabold">Works</a>
            <a href="#whyus" class="ml-1 mr-4 white font-medium black hover:font-extrabold">Why Us?</a>
            <a href="#album" class="ml-1 mr-4 yellow font-medium hover:text-black hover:font-extrabold">Album</a>
            <a href="#contactus" class="ml-1 mr-4 white font-medium black hover:font-extrabold">Contact Us</a>
          </nav>
          <button id="btn"
            class="inline-flex items-center border-0 py-0.5 px-2 bg-yellow-400 focus:outline-none rounded text-black hover:bg-black hover:text-white mt-1 ml-0 md:mt-0 mr-3 zoom">
             <a href="donateus.php" class="abc">Donate Us</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
      </header>
    </div>
    <!---------------------------------------------------------------------------------------------------------->
    <div class="bg-pink-300">
      <section class="text-gray-600 body-font" id="#home">
        <div class="container mx-auto flex px-0 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl mt-5 text-3xl mb-4 font-medium text-pink-700">“Don’t tell us all the
              reasons <br class="hidden lg:inline-block"> this might not work.
              <br class="hidden lg:inline-block">Tell us all the ways it could work.”
            </h1>
            <p class="mb-8 text-black text-lg font-semibold">“Fear is useless. What is needed is trust. As social innovators
              we’ve got to be tenacious, gritty, and courageous. We deal with cynicism and rejection, especially when
              what we’re working on is important. So we can never give up. Ever."</p>
            <div class="flex align-self-center ">
              <button class="inline-flex text-black bg-pink-600 border-0 py-2 px-6 focus:outline-none hover:bg-black hover:text-white rounded-full text-lg font-bold zoom"><a href="#contactus" class="abc">Contact Us</a></button>
              <button
                class="ml-4 inline-flex text-black bg-yellow-400 border-0 py-2 px-6 focus:outline-none hover:bg-black hover:text-white rounded-full text-lg font-bold zoom"> <a href="donateus.php" class="abc">Donate Us</a></button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="Image" src="4.jpg">
          </div>
        </div>
      </section>
    </div>
    <!---------------------------------------------------------------------------------------------------------->
    <section class="text-gray-600 body-font mx-auto bg-black" id="box1">
      <div class="container px-5 py-24 mx-auto" data-aos="zoom-in" id="aboutus">
        <div class="flex flex-col text-center w-full mb-20">
          <h2 class="text-xs text-pink-300 tracking-widest text-base title-font mb-1">Let's Talk About Ourself</h2>
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 yellow font-serif font-bold"><span
              class="text-5xl">A</span>BOUT <span class="text-5xl">U</span>S</h1>
          <p class="lg:w-2/3 mx-auto text-white text-base">The <span class="font-serif"> Care4U</span> is an NGO
            in India headquartered in Bengaluru. Our organisation strives to eliminate hunger & poverty across the
            country. Alongside, <span class="font-serif"> Care4U</span> also aims at Women Empowerment and supports the
            rights given to children.</p>
        </div>
        <div class="flex flex-wrap">
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-400 border-opacity-60">
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 font-medium title-font mb-2 ">Awards Received</h2>
            <p class="text-grey-300 text-4xl mb-4">350+</p>
            
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-400 border-opacity-60">
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 font-medium title-font mb-2 ">Projects Completed
            </h2>
            <p class="text-grey-300 text-4xl mb-4">500+</p>
            
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-400 border-opacity-60">
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 font-medium title-font mb-2 ">Members</h2>
            <p class="text-grey-300 text-4xl mb-4">9K+</p>
            
          </div>
          <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-400 border-opacity-60">
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 font-medium title-font mb-2 ">Happy Clients</h2>
            <p class="text-grey-300 text-4xl mb-4">100K+</p>
            
          </div>
        </div>
        <button
          class="flex mx-auto mt-16 text-gray-900 bg-pink-500 py-2 px-4 font-bold focus:outline-none hover:bg-yellow-500 hover:text-black hover:font-extrabold rounded-3xl text-lg zoom"><a href="donateus.php" class="abcd">Donate Us</a>
        </button>
      </div>
    </section>
    <!--------------------------------------------------------------------------------------->
    <section class="text-gray-600 body-font overflow-hidden bg-black" id="works">
      <div class="container px-5 py-20 mx-auto mb-20" id="bc">
        <div class="-my-8 divide-y-2 divide-gray-100">
          <div class="py-8 flex flex-wrap md:flex-nowrap">
            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col nw">
              <span class="font-bold title-font text-4xl text-blue-600">OUR PROJECTS</span><br><br>
            </div>
            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium text-gray-900 title-font mb-2 text-yellow-600">...Project on Hunger and
                Poverty across the
                Country...</h2>
              <p class="text-blue-200 mb-0">India, with a population of over 1.3 billion, has seen tremendous growth in the
                past two decades. Food grain production has increased almost 2 times. However, despite
                phenomenal industrial and economic growth and while India produces sufficient food to feed its
                population, it is unable to provide access to food to a large number of people, especially women and
                children.</p>
            </div>
          </div>
          <!---------------------------------->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-warning border-0 mb-4 zoom" data-toggle="modal" data-target="#pov">
            Learn More
          </button>
          <!-- Modal -->
          <div class="modal fade" id="pov" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="povLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-bold text-black" id="povLabel">Project on Hunger and Poverty across the Country</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body font-medium text-black">
                  <img src="12.jpg" alt="Image"><br>
                  India, with a population of over 1.3 billion, has seen tremendous growth in the
                  past two decades. Food grain production has increased almost 2 times. However, despite
                  phenomenal industrial and economic growth and while India produces sufficient food to feed its
                  population, it is unable to provide access to food to a large number of people, especially women and
                  children. <br>
                  It is estimated that nearly one third of the food produced in the world for human consumption
                  every year gets lost or wasted. 40 percent of the fruits and vegetables, and 30 percent of cereals
                  that
                  are produced are lost due to inefficient supply chain management and do not reach the consumer
                  markets.
                  <br><br>
                  Key facts about hunger in India: <br>
                  ->India is home to the largest undernourished population in the world <br>
                  ->189.2 million people i.e. 14% of our population is undernourished<br>
                  ->20% of children under 5 are underweight<br>
                  ->34.7% of children under 5 years of age are stunted<br>
                  ->51.4% women in the reproductive age (15-49 years) are anaemic<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info zoom" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger zoom"><a href="donateus.php" class="abcd white">Donate Us</a></button>
                </div>

              </div>
            </div>
          </div>
          <!-------------------------------- -->

          <div class="py-8 flex flex-wrap md:flex-nowrap">

            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium title-font mb-2 text-red-600">...Project on Women Empowerment in India...
              </h2>
              <p class="text-blue-200">The term women empowerment is all about authority, or the power embarked on
                women sharing indistinguishable rights. The term refers to the liberation of women from socio-economic
                restraints of reliance. Women comprise around 50% of the country’s population, and a bulk of them stays
                economically dependent on each other without employment.</p>
              <button type="button" class="btn btn-danger border-0 mb-0 zoom" data-toggle="modal" data-target="#wom">
                Learn More
              </button>
              <!-- Modal -->
              <div class="modal fade" id="wom" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="womLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title font-bold text-black" id="womLabel">Project on Women Empowerment in India
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body font-medium text-black">
                      <img src="13.jpg" class="mb-2" alt="Image">
                      The term women empowerment is all about authority, or the power embarked on
                      women sharing indistinguishable rights. The term refers to the liberation of women from
                      socio-economic
                      restraints of reliance. Women comprise around 50% of the country’s population, and a bulk of them
                      stays
                      economically dependent on each other without employment. <br>
                      In the age of feminism, a small portion of
                      women in India are freed and can employ their free will and are permitted to carve out their lives
                      the
                      way they want. But there is a considerable division of the women in this nation who require
                      optimistic
                      support. In most Indian villages and semi-urban cities, women are still denied fundamental
                      education and
                      are never authorized to continue higher education despite amassing the understanding required.
                      </p> <br>
                      Factors Affecting Women’s Empowerment in India: <br>
                      ->Gender Discrimination <br>
                      ->Educational Factor<br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info zoom" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-danger zoom"><a href="donateus.php" class="abcd white">Donate Us</a></button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-8 flex flex-wrap md:flex-nowrap">

            <div class="md:flex-grow">
              <h2 class="text-2xl font-medium title-font mb-2 text-green-500">...Project on Safeguarding Child Rights in
                India...</h2>
              <p class="text-blue-200">Children's rights are a subset of human rights with particular attention to the
                rights of special protection and care afforded to minors. Children have two types of human rights under
                international human rights law.</p>
              <button type="button" class="btn btn-success border-0 mb-0 zoom" data-toggle="modal" data-target="#child">
                Learn More
              </button>
              <!-- Modal -->
              <div class="modal fade" id="child" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="childLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title font-bold text-black" id="childLabel">Project on Safeguarding Child Rights in
                        India
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body font-medium text-black">
                      <img src="14.png" class="mb-2" alt="Image">
                      Children's rights are a subset of human rights with particular attention to the
                      rights of special protection and care afforded to minors. Children have two types of human rights
                      under
                      international human rights law. They have the same fundamental general human rights as adults,
                      although
                      some human rights, such as the right to marry, are dormant until they are of age, Secondly, they
                      have
                      special human rights that are necessary to protect them during their minority.
                      <br>

                      United Nations educational guides for children classify the rights outlined in the Convention on
                      the
                      Rights of the Child as the "3 Ps": Provision, Protection, and Participation. They may be
                      elaborated
                      as follows: <br>

                      -> Provision: Children have the right to an adequate standard of living, health care, education
                      and
                      services, and to play and recreation. These include a balanced diet, a warm bed to sleep in, and
                      access
                      to schooling. <br>
                      -> Protection: Children have the right to protection from abuse, neglect, exploitation and
                      discrimination.
                      This includes the right to safe places for children to play; constructive child rearing behavior,
                      and
                      acknowledgment of the evolving capacities of children. <br>
                      -> Participation: Children have the right to participate in communities and have programs and
                      services
                      for
                      themselves. This includes children's involvement in libraries and community programs, youth voice
                      activities, and involving children as decision-makers. <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info zoom" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-danger zoom"><a href="donateus.php" class="abcd white">Donate Us</a></button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
    <!---------------------------------------------------------------------------------------------------------->
    <section class="text-white body-font bg-black" id="album">
      <div class="container px-0 mx-auto flex flex-wrap" data-aos="zoom-in" data-aos-duration="1000">
        <div class="flex w-full mb-20 flex-wrap">
          <h1 class="sm:text-5xl font-medium title-font anitxt lg:w-1/3 lg:mb-0"><span
              class="text-6xl font-extrabold">A</span>LBUM</h1>
        </div>
        <div class="flex flex-wrap md:-m-2 -m-1 ">
          <div class="flex flex-wrap w-1/2">
            <div class="md:p-0 p-0 w-1/2">
              <img alt="Image" class="border w-full object-cover h-full object-center block imga" src="3.jpg">
            </div>
            <div class="md:p-0 p-0 w-1/2">
              <img alt="Image" class="border w-full object-cover h-full object-center block imga" src="5.jpg">
            </div>
            <div class="md:p-0 p-0 w-full">
              <img alt="Image" class="border w-full h-full object-cover object-center block imga" src="9.jpg">
            </div>
          </div>
          <div class="flex flex-wrap w-1/2">
            <div class="md:p-0 p-0 w-full">
              <img alt="Image" class="border w-full h-full object-cover object-center block imga" src="8.jpg">
            </div>
            <div class="md:p-0 p-0 w-1/2">
              <img alt="Image" class="border w-full object-cover h-full object-center block imga" src="1.jpg">
            </div>
            <div class="md:p-0 p-0 w-1/2">
              <img alt="Image" class="border w-full object-cover h-full object-center block imga" src="2.jpg">
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>

    <!---------------------------------------------------------------------------------------------------------->
    <section class="text-yellow-600 bg-black body-font" id="whyus">
      <div class="container px-5 py-24 mx-auto border-4 border-dotted" data-aos="zoom-in" data-aos-duration="1000">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-3xl font-medium title-font mb-2 text-white font-serif font-bold"><span
              class="font-extrabold text-5xl">W</span>HY<span class="font-extrabold text-5xl"> U</span>S</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-white text-2xl">Our Campaign</p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="bor1 text-white p-6 rounded-lg">
              <div
                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                <img src="91.png" class="image-fluid" alt="Image">
              </div>
              <span class="text-lg font-medium title-font mb-1 col2">Child Rights</span><br>
              <p class="col2">Children's rights are economic, social and cultural rights like the
                right to education,the right to a decent standard of living, the right to health, etc. "3 Ps":
                Provision, Protection, and Participation.</p>
            </div>
          </div>
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="bor2 text-white p-6 rounded-lg">
              <div
                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                <img src="81.png" class="image-fluid" alt="Image">
              </div>
              <span class="text-lg font-medium title-font mb-1 col1">Women Empowerment<br></span>
              <p class="text-gray-300 text-base col1">Women's empowerment can be defined to promoting women's
                sense of self-worth, their ability to determine their own choices, and their right to influence social
                change for themselves and others.</p>
            </div>
          </div>
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="bor3 text-white p-6 rounded-lg">
              <div
                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                <img src="11.png" class="image-fluid" alt="Image">
              </div>
              <span class="text-lg col3 font-medium title-font mb-1">Hunger & Poverty</span><br>
              <p class="col3 text-base">Poverty is about not having enough money to meet basic needs
                including food, clothing and shelter. Whereas, Hunger is a consequence of poverty. Poverty is a complex
                societal issue.</p>
            </div>
          </div>

        </div>
        <button
          class="flex mx-auto mt-16 text-black bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:font-extrabold zoom rounded-full text-lg font-bold"><a href="donateus.php" class="abcd">Donate Us</a></button>
      </div>
    </section>



    <!---------------------------------------------------------------------------------------------------------->

    <section class="text-gray-600 body-font bg-black">
      <div class="container px-5 py-20 mx-auto" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="text-5xl font-extrabold title-font text-white mb-12 text-center">Testimonials</h1>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full p-8 rounded bg-black border-4 border-dashed border-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-white mb-4"
                viewBox="0 0 975.036 975.036">
                <path
                  d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
              </svg>
              <p class="leading-relaxed mb-4 text-white">"Hunger is not a natural disaster but man-made one to a large
                extent.
                Hence, it is our duty to make India hunger-free. It was pleasant to know about the implementation of the
                Mid-Day Meal Programme by <span class="font-serif"> Care4U</span>.</p>
              <a class="inline-flex items-center">
                <img alt="Image" src="a.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-white">Mr. Aniket</span>
                  <span class="text-sm text-white">Swami</span>
                </span>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full p-8 rounded bg-black border-4 border-dashed border-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4"
                viewBox="0 0 975.036 975.036">
                <path
                  d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
              </svg>
              <p class="leading-relaxed mb-6 text-white">We thank<span class="font-serif"> Care4U</span> for creating
                this
                wonderful platform that we could trust, to provide scholarships to the bright young children. We are
                very impressed with the process, transparency and clarity the Foundation has exhibited. </p>
              <a class="inline-flex items-center">
                <img alt="Image" src="g.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-white">Gaurav</span>
                  <span class="text-sm text-white">Managing Director</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!---------------------------------------------------------------------------------------------------------->
    <section id="contactus" class="text-white body-font relative bg-black">
      <div class="container px-1 py-24 mx-auto border-4 border-white" id="box2" data-aos="zoom-in" data-aos-duration="1000">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-extrabold font-serif title-font mb-4">Contact Us</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-lg font-serif">...Fill the form to Contact/Connect With Us...
          </p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <form action="index.php" method="post">
              <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">

                  <label for="name" class="leading-7 font-medium text-md text-white ml-2">Name</label>
                  <input type="text" id="name" name="name"
                  class="w-full bg-white rounded-lg focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 font-medium text-md text-white ml-2">Email</label>
                <input type="email" id="email" name="email"
                class="w-full bg-white rounded-lg focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 font-medium text-md text-white ml-2">Message</label>
                <textarea id="message" name="message"
                class="w-full bg-white rounded-lg focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <button class="flex mx-auto font-bold bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:font-extrabold text-black hover:bg-orange-400 hover:text-black rounded-full text-xl zoom">Submit</button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </section>
    <!---------------------------------------------------------------------------------------------------------->
    <footer class="text-white body-font bg-black">
      <div
        class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
            <img src="logo.png" class="image-fluid w-12" alt="Logo">
            <span class="ml-4 text-yellow-500 text-2xl font-extrabold font-serif">Care4U</span>
          </a>
          <p class="mt-2 text-sm text-yellow-300">The <span class="font-serif"> Care4U</span> Foundation is a
            not-for-profit organisation headquartered in Bengaluru, India.</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pr-2 order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-1">
            <h2 class="title-font font-medium tracking-widest text-pink-600 text-sm mb-3">About Us</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="white hover:text-yellow-400 cur">History</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Advisors</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Vision and Mission</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Transparency</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-1">
            <h2 class="title-font font-medium text-pink-600 tracking-widest text-sm mb-3">OUR WORK</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="white hover:text-yellow-400 cur">Our Role</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Our Reach</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Awards</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Impact</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-1">
            <h2 class="title-font font-medium text-pink-600 tracking-widest text-sm mb-3">JOIN US</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="white hover:text-yellow-400 cur">Partnerships</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Volunteer</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Fund Raise With Us</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Careers</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-1">
            <h2 class="title-font font-medium text-pink-600 tracking-widest text-sm mb-3">DONATE</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="white hover:text-yellow-400 cur">Online Donation</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Sponsor Us</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Donate for Tax Benefits</a>
              </li>
              <li>
                <a class="white hover:text-yellow-400 cur">Donate a Vehicle</a>
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="bg-black">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
          <p class="text-white text-sm text-center sm:text-left font-extrabold font-serif">© Care4U —
            <a href="#" rel="noopener noreferrer" class="text-white ml-1 hover:text-gray-900">@Owner</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
            <a class="text-blue-700 hover:text-blue-400 cur">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-blue-500 hover:text-blue-700 cur">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                </path>
              </svg>
            </a>
            <a class="ml-3 text-orange-500 hover:text-red-600 cur">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            </a>
          </span>
        </div>
      </div>
    </footer>
    <!---------------------------------------------------------------------------------------------------------->

  </body>

  </html>

